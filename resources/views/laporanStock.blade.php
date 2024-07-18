@extends('layouts.main')

@section('title')
  Laporan Stock
@endsection

@section('content')
  @include('layouts.header')
  @include('layouts.sidebar')

  <div class="page-wrapper">
    <div class="content container-fluid">

      <div class="page-header">
        <div class="content-page-header">
          <h5>Keluar Masuk Barang</h5>
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
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($tran as $i)
                      <tr>
                        <td>#{{ $i->id }}</td>
                        <td>{{ $i->baku ? $i->baku->name : $i->jadi->name }}</td>
                        <td>{{ $i->stock }}</td>
                        <td>{{ $i->created_at->format('d M Y') }}</td>
                        <td>
                          <span
                            class="badge bg-{{ $i->status == 1 ? 'success' : 'danger' }}-light text-{{ $i->status == 1 ? 'success' : 'danger' }}-light">
                            {{ $i->status == 1 ? 'Barang Masuk' : 'Barang Keluar' }}
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


  <div class="toggle-sidebar">
    <div class="sidebar-layout-filter">
      <div class="sidebar-header">
        <h5>Filter</h5>
        <a href="#" class="sidebar-closes"><i class="fa-regular fa-circle-xmark"></i></a>
      </div>
      <div class="sidebar-body">
        <form action="#" autocomplete="off">

          <div class="accordion" id="accordionMain1">
            <div class="card-header-new" id="headingOne">
              <h6 class="filter-title">
                <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  Vendor
                  <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
              </h6>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
              <div class="card-body-chat">
                <div class="row">
                  <div class="col-md-12">
                    <div id="checkBoxes1">
                      <div class="form-custom">
                        <input type="text" class="form-control" id="member_search1" placeholder="Search Vendor">
                        <span><img src="assets/img/icons/search.svg" alt="img"></span>
                      </div>
                      <div class="selectBox-cont">
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username">
                          <span class="checkmark"></span> John Smith
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username">
                          <span class="checkmark"></span> Johnny
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username">
                          <span class="checkmark"></span> Robert
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username">
                          <span class="checkmark"></span> Sharonda
                        </label>

                        <div class="view-content">
                          <div class="viewall-One">
                            <label class="custom_check w-100">
                              <input type="checkbox" name="username">
                              <span class="checkmark"></span> Pricilla
                            </label>
                            <label class="custom_check w-100">
                              <input type="checkbox" name="username">
                              <span class="checkmark"></span> Randall
                            </label>
                          </div>
                          <div class="view-all">
                            <a href="javascript:void(0);" class="viewall-button-One"><span class="me-2">View
                                All</span><span><i class="fa fa-circle-chevron-down"></i></span></a>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="accordion" id="accordionMain3">
            <div class="card-header-new" id="headingThree">
              <h6 class="filter-title">
                <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                  Purchase ID
                  <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
              </h6>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample3">
              <div class="card-body-chat">
                <div id="checkBoxes2">
                  <div class="selectBox-cont">
                    <label class="custom_check w-100">
                      <input type="checkbox" name="bystatus">
                      <span class="checkmark"></span> 4905681
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="bystatus">
                      <span class="checkmark"></span> 4905682
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="bystatus">
                      <span class="checkmark"></span> 4905683
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="bystatus">
                      <span class="checkmark"></span> 4905684
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="bystatus">
                      <span class="checkmark"></span> 4905685
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="bystatus">
                      <span class="checkmark"></span> 4905686
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="accordion" id="accordionMain5">
            <div class="card-header-new" id="headingFive">
              <h6 class="filter-title">
                <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                  data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                  By Status
                  <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
              </h6>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample3">
              <div class="card-body-chat">
                <div id="checkBoxes2">
                  <div class="selectBox-cont">
                    <label class="custom_check w-100">
                      <input type="checkbox" name="bystatus">
                      <span class="checkmark"></span> Paid
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="bystatus">
                      <span class="checkmark"></span> Pending
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="bystatus">
                      <span class="checkmark"></span> Cancelled
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="accordion accordion-last" id="accordionMain5">
            <div class="card-header-new" id="headingFive">
              <h6 class="filter-title">
                <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                  data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                  Payment Method
                  <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
              </h6>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample4">
              <div class="card-body-chat">
                <div id="checkBoxes3">
                  <div class="selectBox-cont">
                    <label class="custom_check w-100">
                      <input type="checkbox" name="category">
                      <span class="checkmark"></span> Cash
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="category">
                      <span class="checkmark"></span> Cheque
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="filter-buttons">
            <button type="submit"
              class="d-inline-flex align-items-center justify-content-center btn w-100 btn-primary">
              Apply
            </button>
            <button type="submit"
              class="d-inline-flex align-items-center justify-content-center btn w-100 btn-secondary">
              Reset
            </button>
          </div>
        </form>
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
