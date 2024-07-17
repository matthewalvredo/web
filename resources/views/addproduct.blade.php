@extends('layouts.main')

@section('title')
  Add Product
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
              <h5>Add Products</h5>
            </div>
          </div>
          <div class="row">
            <form action="{{ route('store') }}" method="POST">
              @csrf
              <div class="col-md-12">
                <div class="form-group-item">
                  <h5 class="form-title">Basic Details</h5>
                  <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="input-block mb-3">
                        <label>Product Name <span class="text-danger"> *</span></label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Product Name">
                        <input type="text" name="type" class="form-control"
                          value="{{ request()->is('storebaku') ? 'baku' : 'jadi' }}" style="display:none">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <button type="reset" class="btn btn-primary cancel me-2" onclick="goBack()">
                Cancel
              </button>
              <button type="submit" class="btn btn-primary">
                Add Item
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
@endSection
