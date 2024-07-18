@extends('layouts.main')

@section('title')
  Laporan Credit
@endsection

@section('content')
  @include('layouts.header')
  @include('layouts.sidebar')

  @if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif
  @if (session('error'))
    <div class="alert alert-danger">
      {{ session('error') }}
    </div>
  @endif

  <div class="page-wrapper">
    <div class="content container-fluid">

      <div class="page-header">
        <div class="content-page-header">
          <h5>Keuangan</h5>
          <div class="list-btn">
            <ul class="filter-list">
              <li>
                @if (!Auth::user()->role == 1)
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                    Delete Data by Year and Month
                  </button>
                @endif
              <li>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#filterModal">
                  Print Reports
                </button>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12">
          <div class="card-table">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-stripped table-hover datatable">
                  <thead class="thead-light">
                    <tr>
                      <th>Purchase ID</th>
                      <th>Nama Barang</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Total</th>
                      <th>Date</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($tran as $i)
                      <tr>
                        <td>#{{ $i->id }}</td>
                        <td>{{ $i->baku ? $i->baku->name : $i->jadi->name }}</td>
                        <td style="text-align: right">{{ number_format($i->stock, 0, ',', '.') }} gulung</td>
                        <td>Rp. {{ number_format($i->totalprice / $i->stock, 0, ',', '.') }}</td>
                        <td>Rp. {{ number_format($i->totalprice, 0, ',', '.') }}</td>
                        <td>{{ $i->updated_at->format('d M Y') }}</td>
                        <td>
                          <span
                            class="badge bg-{{ $i->jadi_id == 1 && $i->type == 0 ? 'success' : 'danger' }}-light text-{{ $i->jadi_id == 1 && $i->type == 0 ? 'success' : 'danger' }}-light">
                            {{ $i->jadi_id == 1 && $i->type == 0 ? 'Sell Item' : 'Buy Item' }}
                          </span>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="modal fade" id="filterModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Filter by Year and Month</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal Body -->
        <div class="modal-body">
          <form id="filterForm" action="{{ route('expense.pdf') }}" method="GET">
            @csrf
            <div class="form-group text-center">
              <label for="year" class="mb-2">Select Year:</label>
              <input type="number" id="year" name="year" class="form-control text-center mb-2"
                value="{{ date('Y') }}" required>
              <label for="month" class="mb-2">Select Month:</label>
              <select id="month" name="month" class="form-control text-center" required>
                @foreach (range(1, 12) as $month)
                  <option value="{{ $month }}" {{ date('n') == $month ? 'selected' : '' }}>
                    {{ date('F', mktime(0, 0, 0, $month, 10)) }}</option>
                @endforeach
              </select>
              <label for="sort" class="mb-2">Sort by:</label>
              <select id="sort" name="sort" class="form-control text-center" required>
                <option value="baku_id">Barang</option>
                <option value="updated_at">Tanggal</option>
                <option value="type">Status</option>
              </select>
            </div>
          </form>
        </div>

        <!-- Modal Footer -->
        <div class="modal-footer">
          <button type="submit" form="filterForm" class="btn btn-primary d-block mx-auto">Submit</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="{{ route('delete.byYearMonth') }}" method="POST" id="deleteForm">
          @csrf
          @method('DELETE')
          <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Delete Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="year">Year</label>
              <input type="number" class="form-control" id="year" name="year" required>
            </div>
            <div class="form-group">
              <label for="month">Month</label>
              <input type="number" class="form-control" id="month" name="month" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger">Delete</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <script>
    $(document).ready(function() {
      $('#deleteForm').on('submit', function(event) {
        var year = $('#year').val();
        var month = $('#month').val();

        if (!year || !month) {
          alert('Year and month are required.');
          event.preventDefault();
        }
      });
    });
  </script>
@endSection
