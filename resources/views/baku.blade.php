@extends('layouts.main')

@section('title')
  Bahan Baku
@endsection

@section('content')
  @include('layouts.header')
  @include('layouts.sidebar')

  <div class="page-wrapper">
    <div class="content container-fluid">


      <div class="page-header">
        <div class="content-page-header">
          <h5>Purchases</h5>
          <div class="list-btn">
            <ul class="filter-list">
              <li>
                <a class="btn btn-primary" href="purchase" style="display:{{ Auth::user()->role == '3' ? 'none' : '' }}"><i
                    class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Purchases</a>
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
                      <th>Suplier</th>
                      <th>Alamat</th>
                      <th>Quantity</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th class="no-sort">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($tran as $i)
                      <tr>
                        <td>#{{ $i->id }}</td>
                        <td>{{ $i->baku->name }}</td>
                        <td>
                          <h2 class="table-avatar">
                            <a> {{ $i->suplier->name }}
                              <span>{{ $i->suplier->notelp }} </span></a>
                          </h2>
                        </td>
                        <td>{{ $i->suplier->alamat }}</td>
                        <td>{{ $i->stock }}</td>
                        <td>{{ $i->created_at->format('d M Y') }}</td>
                        <td>
                          <span
                            class="badge bg-{{ $i->status == 1 ? 'success' : 'warning' }}-light text-{{ $i->status == 1 ? 'success' : 'warning' }}-light">
                            {{ $i->status == 1 ? 'Accepted' : 'Pending' }}
                          </span>
                        </td>
                        <td class="d-flex align-items-center">
                          @if (!$i->status)
                            @if (Auth::user()->role != '2')
                              <form action="{{ route('baku.accept', $i->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-success me-2"
                                  style="display:{{ Auth::user()->role == '2' ? 'none' : '' }}">Accept</button>
                              </form>
                            @endif
                          @endif
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
