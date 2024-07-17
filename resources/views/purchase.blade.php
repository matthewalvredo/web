@extends('layouts.main')

@section('title')
  Purchase Item
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
              <h5>Purchase</h5>
            </div>
          </div>
          <div class="row">
            <form action="{{ route('svpurchase') }}" method="POST">
              @csrf
              <div class="col-md-12">
                <div class="form-group-item">
                  <h5 class="form-title">Basic Details</h5>
                  <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="input-block mb-3">
                        <label>Product Name </label>
                        <select name="name" class="select">
                          @foreach ($barbaku as $i)
                            <option value="{{ $i->id }}">{{ $i->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="input-block mb-3">
                        <label>Purchase Price <span class="text-danger"> *</span></label>
                        <input type="number" name="price" class="form-control" placeholder="Enter Purchase Prices"
                          required>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="input-block mb-3">
                        <label>Quantity <span class="text-danger"> *</span></label>
                        <input type="number" name="stock" class="form-control" placeholder="Enter Quantity" required>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="input-block mb-3">
                        <label>Suplier</label>
                        <select name="suplier" class="select">
                          @foreach ($suplier as $s)
                            <option value="{{ $s->id }}">{{ $s->name }}</option>
                          @endforeach
                        </select>
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
