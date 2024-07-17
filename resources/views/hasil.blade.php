@extends('layouts.main')

@section('title')
  Produksi Barang
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
              <h5>Produksi Barang</h5>
            </div>
          </div>
          <div class="row">
            <form action="{{ route('svhasil') }}" method="POST">
              @csrf
              <div class="col-md-12">
                <div class="form-group-item">
                  <h5 class="form-title">Basic Details</h5>
                  <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="input-block mb-3">
                        <label>Product Name </label>
                        <select name="namahasil" class="select">
                          @foreach ($barja as $i)
                            <option value="{{ $i->id }}">{{ $i->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="input-block mb-3">
                        <label>Quantity <span class="text-danger"> *</span></label>
                        <input type="text" name="quantityhasil" class="form-control" placeholder="Enter Product Quantity"
                          required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="input-block mb-3">
                        <label>Bahan Baku </label>
                        <select name="namabahan" class="select">
                          @foreach ($barba as $i)
                            <option value="{{ $i->id }}">{{ $i->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="input-block mb-3">
                        <label>Quantity <span class="text-danger"> *</span></label>
                        <input type="text" name="quantitybahan" class="form-control" placeholder="Enter Product Quantity"
                          required>
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
