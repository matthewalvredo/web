@extends('layouts.main')

@section('title')
  Jual Barang Produksi
@endsection

@section('content')
  @include('layouts.header')
  @include('layouts.sidebar')

  <div class="page-wrapper">
    <div class="content container-fluid">

      <div class="page-header">
        <div class="content-page-header">
          <h5>List Barang Produksi</h5>
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
                      <th>Date</th>
                      <th>Status</th>
                      <th class="no-sort">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($jual as $i)
                      <tr>
                        <td>#{{ $i->id }}</td>
                        <td>{{ $i->name }}</td>
                        <td>{{ $i->stock }}</td>
                        <td>{{ $i->created_at->format('d M Y') }}</td>
                        <td>
                          <span
                            class="badge bg-{{ $i->status == 1 ? 'success' : 'warning' }}-light text-{{ $i->status == 1 ? 'success' : 'warning' }}-light">
                            {{ $i->status == 1 ? 'Accepted' : 'Pending' }}
                          </span>
                        </td>
                        <td class="d-flex align-items-center">
                          <a href="{{ route('sell', $i->id) }}" class="btn btn-primary btn-sm me-2"
                            style="display:{{ Auth::user()->role == '1' ? '' : 'none' }}">Edit</a>
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
@endSection
