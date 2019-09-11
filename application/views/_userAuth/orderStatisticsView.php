<div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
  <div>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-style1 mg-b-10">
        <li class="breadcrumb-item"><?= $userRole ?></li>
        <li class="breadcrumb-item active" aria-current="page"><?= $userName ?></li>
      </ol>
    </nav>
    <h4 class="mg-b-0 tx-spacing--1 text-uppercase">STATISTICS Reports</h4>
  </div>
  <!-- <div class="d-none d-md-block">
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link active" href="#" >Order Statistics</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Best Sellers</a>
      </li>
    </ul>
  </div> -->
</div>
<ul class="nav nav-line" id="myTab5" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab5" data-toggle="tab" href="#home5" role="tab" aria-controls="home" aria-selected="true">Order Statistics</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab5" data-toggle="tab" href="#profile5" role="tab" aria-controls="profile" aria-selected="false">Best Sellers</a>
  </li>
</ul>
<div class="tab-content mg-t-20" id="myTabContent5">
  <div class="tab-pane fade show active" id="home5" role="tabpanel" aria-labelledby="home-tab5">
    
    <div class="row row-xs">
      <div class="col-md-12">
        <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
          <div>
            <h4 class="mg-b-0 tx-spacing--1 text-uppercase"><span class="view-stats-txt">Today's</span> STATISTICS</h4>
          </div>
          <div class="d-none d-md-block">
            <select class="form-control select2 selectp" id="st_select">
              <option value="1" selected>Today's</option>
              <option value="2">This Week</option>
              <option value="3">This Month</option>
              <option value="4">This Year</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3 mb-2">
        <div class="card card-body">
          <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Processed / Completed</h6>
          <div class="d-flex d-lg-block d-xl-flex align-items-end">
            <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">9999999</h3>
          </div>
        </div>
        </div><!-- col -->
        <div class="col-sm-6 col-lg-3 mb-2">
          <div class="card card-body">
            <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Queued</h6>
            <div class="d-flex d-lg-block d-xl-flex align-items-end">
              <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">0.81%</h3>
            </div>
          </div>
          </div><!-- col -->
          <div class="col-sm-6 col-lg-3 mb-2">
            <div class="card card-body">
              <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Declined</h6>
              <div class="d-flex d-lg-block d-xl-flex align-items-end">
                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">0.81%</h3>
              </div>
            </div>
            </div><!-- col -->
            <div class="col-sm-6 col-lg-3 mb-2">
              <div class="card card-body">
                <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Cancelled</h6>
                <div class="d-flex d-lg-block d-xl-flex align-items-end">
                  <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">0.81%</h3>
                </div>
              </div>
              </div><!-- col -->
            </div>
            <div class="row row-xs mt-md-5 mt-lg-5">
              <div class="col-md-5">
                <div class="col-sm-12 col-lg-12 mb-2">
                  <div class="card card-body">
                    <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Total</h6>
                    <div class="d-flex d-lg-block d-xl-flex align-items-end">
                      <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">0.81%</h3>
                    </div>
                  </div>
                  </div><!-- col -->
                  <div class="col-sm-12 col-lg-12 mb-2">
                    <div class="card card-body">
                      <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Paid</h6>
                      <div class="d-flex d-lg-block d-xl-flex align-items-end">
                        <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">0.81%</h3>
                      </div>
                    </div>
                    </div><!-- col -->
                  </div>
                  
                  <div class="col-md-7">
                    <div id="today" class="morris-donut-wrapper-demo"></div>
                  </div>
                </div>
                
              </div>
              <div class="tab-pane fade" id="profile5" role="tabpanel" aria-labelledby="profile-tab5">
                <div class="col-md-12">
                  <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
                    <div>
                      <h4 class="mg-b-0 tx-spacing--1 text-uppercase">Top 10 products</h4>
                    </div>
                    <div class="d-none d-md-block">
                      <select class="form-control select2 selectp" id="st_select">
                        <option value="1" selected>Today's</option>
                        <option value="2">This Week</option>
                        <option value="3">This Month</option>
                        <option value="4">This Year</option>
                        <option value="5">All Time</option>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- <h4 class="text-uppercase mb-md-4">Top 10 products</h4> -->

                <div class="card mb-2">
                  <div class="card-body p-0">
                    <div class="d-flex">
                      <div class="flex-fill p-2 bg-dark flex-shrink-1">
                        <h1 class="text-white">01</h1>
                      </div>
                      <div class="flex-fill pt-2 px-3 w-100">
                        <table class="table table-sm table-borderless">
                          <tbody>
                            <tr>
                              <td colspan="2"><span class="font-weight-bold">Product Name : </span><a href="#!" class="btn btn-link btn-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></td>
                            </tr>
                            <tr>
                              <td><span class="font-weight-bold">Product Code : </span> 1000270222114564</td>
                              <td><span class="font-weight-bold">Product SKU : </span> 68465132</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card mb-2">
                  <div class="card-body p-0">
                    <div class="d-flex">
                      <div class="flex-fill p-2 bg-dark flex-shrink-1">
                        <h1 class="text-white">02</h1>
                      </div>
                      <div class="flex-fill pt-2 px-3 w-100">
                        <table class="table table-sm table-borderless">
                          <tbody>
                            <tr>
                              <td colspan="2"><span class="font-weight-bold">Product Name : </span><a href="#!" class="btn btn-link btn-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></td>
                            </tr>
                            <tr>
                              <td><span class="font-weight-bold">Product Code : </span> 1000270222114564</td>
                              <td><span class="font-weight-bold">Product SKU : </span> 68465132</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card mb-2">
                  <div class="card-body p-0">
                    <div class="d-flex">
                      <div class="flex-fill p-2 bg-dark flex-shrink-1">
                        <h1 class="text-white">03</h1>
                      </div>
                      <div class="flex-fill pt-2 px-3 w-100">
                        <table class="table table-sm table-borderless">
                          <tbody>
                            <tr>
                              <td colspan="2"><span class="font-weight-bold">Product Name : </span><a href="#!" class="btn btn-link btn-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></td>
                            </tr>
                            <tr>
                              <td><span class="font-weight-bold">Product Code : </span> 1000270222114564</td>
                              <td><span class="font-weight-bold">Product SKU : </span> 68465132</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
            </div>