@extends('layouts.main')

@section('title')
  Users
@endsection

@section('content')
  @include('layouts.header')
  @include('layouts.sidebar')

  <div class="page-wrapper">
    <div class="content container-fluid">
      <div class="page-header">
        <div class="content-page-header">
          <h5>Users</h5>
          <div class="list-btn">
            <a href="{{ route('createuser') }}" class="btn btn-primary">Add User</a>
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
                      <th>ID</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th class="no-sort">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $i)
                      <tr>
                        <td>#{{ $i->id }}</td>
                        <input type="hidden" value="{{ $i->id }}">
                        <td>{{ $i->name }}</td>
                        <td>{{ $i->email }}</td>
                        <td>
                          @if ($i->role == 1)
                            Admin
                          @elseif ($i->role == 2)
                            Purchase
                          @elseif ($i->role == 3)
                            Karyawan
                          @endif
                        </td>
                        <td class="d-flex align-items-center">
                          <ul>
                            <a href="{{ route('edituser', $i->id) }}" class="btn btn-warning btn-sm">Edit</a>
                          </ul>
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
