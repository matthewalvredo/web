@extends('layouts.main')

@section('title')
  Add User
@endsection

@section('content')
  @include('layouts.header')
  @include('layouts.sidebar')

  <div class="page-wrapper">
    <div class="content container-fluid">
      <div class="card mb-0">
        <div class="card-body">
          <div class="page-header">
            <div class="content-page-header">
              <h5>Add User</h5>
            </div>
          </div>
          <div class="row">
            <form action="{{ route('users.store') }}" method="POST">
              @csrf
              <div class="col-md-12">
                <div class="form-group-item">
                  <h5 class="form-title">Basic Details</h5>
                  <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="input-block mb-3">
                        <label>Nama <span class="text-danger"> *</span></label>
                        <input type="text" name="name" class="form-control"required>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="input-block mb-3">
                        <label>Email <span class="text-danger"> *</span></label>
                        <input type="text" name="email" class="form-control" placeholder="e.g. example@example.com"
                          required>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="input-block mb-3">
                        <label>Password <span class="text-danger"> *</span></label>
                        <input type="text" name="password" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="input-block mb-3">
                        <label>Role <span class="text-danger"> *</span></label>
                        <select name="role" class="form-control" required>
                          <option value="1">Admin</option>
                          <option value="2">Purchasing</option>
                          <option value="3">Karyawan</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <button type="reset" class="btn btn-primary cancel me-2" onclick="goBack()">
                Cancel
              </button>
              <button type="submit" class="btn btn-primary">
                Save </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
@endSection
