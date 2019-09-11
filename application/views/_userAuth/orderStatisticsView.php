<div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
  <div>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-style1 mg-b-10">
        <li class="breadcrumb-item"><?= $userRole ?></li>
        <li class="breadcrumb-item active" aria-current="page"><?= $userName ?></li>
      </ol>
    </nav>
    <h4 class="mg-b-0 tx-spacing--1 text-uppercase">All Time STATISTICS</h4>
  </div>
  <div class="d-none d-md-block">
    <select class="form-control select2 selectp" id="st_select">
      <option value="1" selected>Today's</option>
      <option value="2">This Week</option>
      <option value="3">This Month</option>
      <option value="4">This Year</option>
      <!-- <option value="Internet Explorer">All Time</option> -->
    </select>
  </div>
</div>
<div class="row row-xs">
  <div class="col-sm-6 col-lg-3">
    <div class="card card-body">
      <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Conversion Rate</h6>
      <div class="d-flex d-lg-block d-xl-flex align-items-end">
        <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">0.81%</h3>
      </div>
    </div>
  </div><!-- col -->
  <div class="col-sm-6 col-lg-3 mg-t-10 mg-sm-t-0">
    <div class="card card-body">
      <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Unique Purchases</h6>
      <div class="d-flex d-lg-block d-xl-flex align-items-end">
        <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">3,137</h3>
      </div>
    </div>
  </div><!-- col -->
  <div class="col-sm-6 col-lg-3 mg-t-10 mg-lg-t-0">
    <div class="card card-body">
      <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Avg. Order Value</h6>
      <div class="d-flex d-lg-block d-xl-flex align-items-end">
        <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">$306.20</h3>
      </div>
    </div>
  </div><!-- col -->
  <div class="col-sm-6 col-lg-3 mg-t-10 mg-lg-t-0">
    <div class="card card-body">
      <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Order Quantity</h6>
      <div class="d-flex d-lg-block d-xl-flex align-items-end">
        <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">1,234,567</h3>
      </div>
    </div>
  </div><!-- col -->

  <div class="col-sm-12 col-lg-12 mt-5">
    <h3 class="text-uppercase">
      <span class="view-stats-txt">Today's</span> STATISTICS</h3>
    <div class="row">
      <div class="col-md-8">
        <div id="today" class="morris-donut-wrapper-demo"></div>
      </div>
      <div class="col-md-4">
        <table class="table table-bordered table-hover">
          <tbody>
            <tr>
              <th scope="row">Processed/Completed</th>
              <td>0</td>
            </tr>
            <tr>
              <th scope="row">Queued</th>
              <td>0</td>
            </tr>
            <tr>
              <th scope="row">Declined</th>
              <td>0</td>
            </tr>
            <tr>
              <th scope="row">Cancelled</th>
              <td>0</td>
            </tr>
            <tr>
              <th scope="row">Total</th>
              <td>₹ 0</td>
            </tr>
            <tr>
              <th scope="row">Paid</th>
              <td>₹ 0</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>  
  </div>
</div>