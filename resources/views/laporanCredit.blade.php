@extends('layouts.main')

@section('title')
  Laporan Credit
@endsection

@section('content')
  @include('layouts.header')
  @include('layouts.sidebar')
  <div class="page-wrapper">
    <div class="content container-fluid">

      <div class="page-header">
        <div class="content-page-header">
          <h5>Keuangan</h5>
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
                        <td>Rp. {{ number_format($i->baku ? $i->baku->price : $i->jadi->price, 0, ',', '.') }}</td>
                        <td>Rp. {{ number_format($i->totalprice, 0, ',', '.') }}</td>
                        <td>{{ $i->created_at->format('d M Y') }}</td>
                        <td>
                          <span
                            class="badge bg-{{ $i->status == 1 ? 'success' : 'danger' }}-light text-{{ $i->status == 1 ? 'success' : 'danger' }}-light">
                            {{ $i->status == 1 ? 'Buy Item' : 'Sell Item' }}
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

  <div class="modal custom-modal fade" id="delete_modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-body">
          <div class="form-header">
            <h3>Delete Purchases</h3>
            <p>Are you sure want to delete?</p>
          </div>
          <div class="modal-btn delete-action">
            <div class="row">
              <div class="col-6">
                <button type="reset" data-bs-dismiss="modal"
                  class="w-100 btn btn-primary paid-continue-btn">Delete</button>
              </div>
              <div class="col-6">
                <button type="submit" data-bs-dismiss="modal"
                  class="w-100 btn btn-primary paid-cancel-btn">Cancel</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endSection
