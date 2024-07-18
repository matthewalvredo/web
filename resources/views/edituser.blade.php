@extends('layouts.main')

@section('title')
  Edit User
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
              <h5>Edit User</h5>
            </div>
          </div>
          <div class="row">
            <form action="{{ route('users.update', $user->id) }}" method="POST">
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
                        <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="input-block mb-3">
                        <label>Email <span class="text-danger"> *</span></label>
                        <input type="text" name="email" class="form-control" value="{{ $user->email }}"
                          placeholder="example@example.com" required>
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
                        <select name="role" class="form-control">
                          <option value="1" {{ $user->role == 1 ? 'selected' : '' }}>Admin</option>
                          <option value="2" {{ $user->role == 2 ? 'selected' : '' }}>Purchasing</option>
                          <option value="3" {{ $user->role == 3 ? 'selected' : '' }}>Karyawan</option>
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
            <div class="col-md-12">
              <br>

              <h5>Remove User</h5>
              <p>Are you sure you want to delete this user?</p>

              <form action="{{ route('delete.data', ['id' => $user->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete User</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
@endSection
