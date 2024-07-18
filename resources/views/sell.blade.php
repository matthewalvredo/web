@extends('layouts.main')

@section('title')
  Sell Product
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
              <h5>Sell Products</h5>
            </div>
          </div>
          <div class="row">
            <form action="{{ route('svsell') }}" method="POST">
              @csrf
              <div class="col-md-12">
                <div class="form-group-item">
                  <h5 class="form-title">Basic Details</h5>
                  <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      @foreach ($item as $i)
                        @if ($i->id == $jual->id)
                          <div class="input-block mb-3">
                            <label>Product Name <span class="text-danger">*</span></label>
                            <input type="text" name="id" class="form-control" value="{{ $i->id }}" hidden>
                            <input type="text" name="name" class="form-control" value="{{ $i->name }}"
                              disabled>
                          </div>
                          <div class="input-block mb-3">
                            <label>Stock <span class="text-danger">*</span></label>
                            <input type="text" name="stock" class="form-control" value="{{ $i->stock }}"
                              disabled>
                            <input type="hidden" name="price" value="{{ $i->price }}">
                          </div>
                          <div class="input-block mb-3">
                            <label>Price <span class="text-danger">*</span></label>
                            <input type="number" name="price" class="form-control"
                              placeholder="Last Price Rp. {{ $i->price }}" required>
                          </div>
                        @endif
                      @endforeach
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="input-block mb-3">
                        <label>Quantity to Sell <span class="text-danger"> *</span></label>
                        <input type="number" name="quantity" class="form-control" max="{{ $jual->stock }}"
                          placeholder="Enter Quantity" required>
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
