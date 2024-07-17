@extends('layouts.main')

@section('title')
  Inventory
@endsection

@section('content')
  @include('layouts.header')
  @include('layouts.sidebar')

  <div class="page-wrapper">
    <div class="content container-fluid">
      <div class="page-header">
        <div class="content-page-header">
          <h5>List Inventory</h5>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12">
          <div class=" card-table">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-center table-hover datatable">
                  <thead class="thead-light">
                    <tr>
                      <th>#</th>
                      <th>Item</th>
                      <th>Quantity</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($barbaku as $i)
                      @if ($i->stock > 0)
                        <tr>
                          <td>{{ $i->id }}</td>
                          <td>{{ $i->name }}</td>
                          <td>{{ number_format($i->stock) }} gulung</td>
                        </tr>
                      @endif
                    @endforeach
                    @foreach ($barjadi as $i)
                      @if ($i->stock > 0)
                        <tr>
                          <td>{{ $i->id }}</td>
                          <td>{{ $i->name }}</td>
                          <td>{{ number_format($i->stock) }} gulung</td>
                        </tr>
                      @endif
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
                  Product Name
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
                        <input type="text" class="form-control" id="member_search1" placeholder="Search Product">
                        <span><img src="assets/img/icons/search.svg" alt="img"></span>
                      </div>
                      <div class="selectBox-cont">
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username">
                          <span class="checkmark"></span> Lenovo 3rd Generation
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username">
                          <span class="checkmark"></span> Nike Jordan
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username">
                          <span class="checkmark"></span> Apple Series 5 Watch
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username">
                          <span class="checkmark"></span> Amazon Echo Dot
                        </label>

                        <div class="view-content">
                          <div class="viewall-One">
                            <label class="custom_check w-100">
                              <input type="checkbox" name="username">
                              <span class="checkmark"></span> Lobar Handy
                            </label>
                            <label class="custom_check w-100">
                              <input type="checkbox" name="username">
                              <span class="checkmark"></span> Woodcraft Sandal
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


          <div class="accordion" id="accordionMain4">
            <div class="card-header-new" id="headingFour">
              <h6 class="filter-title">
                <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                  data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                  Product Code
                  <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
              </h6>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample4">
              <div class="card-body-chat">
                <div id="checkBoxes3">
                  <div class="selectBox-cont">
                    <div class="form-custom">
                      <input type="text" class="form-control" id="member_search2" placeholder="Search Invoice">
                      <span><img src="assets/img/icons/search.svg" alt="img"></span>
                    </div>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="category">
                      <span class="checkmark"></span> P125389
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="category">
                      <span class="checkmark"></span> P125390
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="category">
                      <span class="checkmark"></span> P125391
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="category">
                      <span class="checkmark"></span> P125392
                    </label>

                    <div class="view-content">
                      <div class="viewall-Two">
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username">
                          <span class="checkmark"></span> P125393
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username">
                          <span class="checkmark"></span> P125394
                        </label>
                        <label class="custom_check w-100">
                          <input type="checkbox" name="username">
                          <span class="checkmark"></span> P125395
                        </label>
                      </div>
                      <div class="view-all">
                        <a href="javascript:void(0);" class="viewall-button-Two"><span class="me-2">View
                            All</span><span><i class="fa fa-circle-chevron-down"></i></span></a>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="accordion accordion-last" id="accordionMain3">
            <div class="card-header-new" id="headingThree">
              <h6 class="filter-title">
                <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                  Units
                  <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
              </h6>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
              data-bs-parent="#accordionExample3">
              <div class="card-body-chat">
                <div id="checkBoxes2">
                  <div class="selectBox-cont">
                    <label class="custom_check w-100">
                      <input type="checkbox" name="bystatus">
                      <span class="checkmark"></span> Inches
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="bystatus">
                      <span class="checkmark"></span> Pieces
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="bystatus">
                      <span class="checkmark"></span> Hours
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="bystatus">
                      <span class="checkmark"></span> Box
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="bystatus">
                      <span class="checkmark"></span> Kilograms
                    </label>
                    <label class="custom_check w-100">
                      <input type="checkbox" name="bystatus">
                      <span class="checkmark"></span> Meter
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


  <div class="modal custom-modal fade" id="stock_in" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <div class="form-header modal-header-title text-start mb-0">
            <h4 class="mb-0">Add Stock in</h4>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <form action="#">
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="input-block mb-3">
                  <label>Name</label>
                  <input type="text" class="bg-white-smoke form-control" placeholder="SEO Service">
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="input-block mb-3">
                  <label>Quantity</label>
                  <input type="number" class="form-control" placeholder="0">
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="input-block mb-0">
                  <label>Units</label>
                  <select class="select">
                    <option>Pieces</option>
                    <option>Inches</option>
                    <option>Kilograms</option>
                    <option>Inches</option>
                    <option>Box</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="input-block mb-0">
                  <label>Notes</label>
                  <textarea rows="3" cols="3" class="form-control" placeholder="Enter Notes"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" data-bs-dismiss="modal" class="btn btn-back cancel-btn me-2">Cancel</button>
            <button type="submit" data-bs-dismiss="modal" class="btn btn-primary paid-continue-btn">Add
              Quantity</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <div class="modal custom-modal fade" id="edit_inventory" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <div class="form-header modal-header-title text-start mb-0">
            <h4 class="mb-0">Edit Inventory</h4>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <form action="#">
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-6 col-md-12">
                <div class="input-block mb-3">
                  <label>Name</label>
                  <input type="text" class="form-control" value="Lorem ipsum dolor sit">
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="input-block mb-3">
                  <label>Code</label>
                  <input type="text" class="form-control" value="P125389">
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="input-block mb-3">
                  <label>Units</label>
                  <input type="text" class="form-control" value="Box">
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="input-block mb-3">
                  <label>Quantity</label>
                  <input type="text" class="form-control" value="3">
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="input-block mb-3">
                  <label>Selling Price</label>
                  <input type="text" class="form-control" value="$155.00">
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="input-block mb-3">
                  <label>Purchase Price</label>
                  <input type="text" class="form-control" value="$150.00">
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="input-block mb-0">
                  <label>Status</label>
                  <input type="text" class="form-control" value="Stock in">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" data-bs-dismiss="modal" class="btn btn-back cancel-btn me-2">Cancel</button>
            <button type="submit" data-bs-dismiss="modal" class="btn btn-primary paid-continue-btn">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <div class="modal custom-modal fade" id="stock_out" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <div class="form-header modal-header-title text-start mb-0">
            <h4 class="mb-0">Remove Stock</h4>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <form action="#">
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="input-block mb-3">
                  <label>Name</label>
                  <input type="text" class="bg-white-smoke form-control" placeholder="SEO Service">
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="input-block mb-3">
                  <label>Quantity</label>
                  <input type="number" class="form-control" placeholder="0">
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="input-block mb-0">
                  <label>Units</label>
                  <select class="select">
                    <option>Pieces</option>
                    <option>Inches</option>
                    <option>Kilograms</option>
                    <option>Inches</option>
                    <option>Box</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="input-block mb-0">
                  <label>Notes</label>
                  <textarea rows="3" cols="3" class="form-control" placeholder="Enter Notes"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" data-bs-dismiss="modal" class="btn btn-back cancel-btn me-2">Cancel</button>
            <button type="submit" data-bs-dismiss="modal" class="btn btn-primary paid-continue-btn">Remove
              Quantity</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <div class="modal custom-modal fade" id="delete_stock" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-body">
          <div class="form-header">
            <h3>Delete Inventory</h3>
            <p>Are you sure want to delete?</p>
          </div>
          <div class="modal-btn delete-action">
            <div class="row">
              <div class="col-6">
                <a href="#" class="btn btn-primary paid-continue-btn">Delete</a>
              </div>
              <div class="col-6">
                <a href="#" data-bs-dismiss="modal" class="btn btn-primary paid-cancel-btn">Cancel</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
@endsection
