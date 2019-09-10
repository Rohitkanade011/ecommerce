<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/img/favicon.png">

    <title><?= $title ?> :: DashForge</title>

    <?= $pageHeader ?>
  </head>
  <body class="page-profile">

    <header class="navbar navbar-header navbar-header-fixed">
      <a href="" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
      <div class="navbar-brand">
        <a href="<?= base_url('authMember') ?>" class="df-logo">dash<span>forge</span></a>
      </div><!-- navbar-brand -->
      <div id="navbarMenu" class="navbar-menu-wrapper">
        <div class="navbar-menu-header">
          <a href="<?= base_url('authMember') ?>" class="df-logo">dash<span>forge</span></a>
          <a id="mainMenuClose" href=""><i data-feather="x"></i></a>
        </div><!-- navbar-menu-header -->
        <ul class="nav navbar-menu">
          <li class="nav-label pd-l-20 pd-lg-l-25 d-lg-none">Main Navigation</li>
          <li class="nav-item"><a href="<?= base_url('authMember') ?>" class="nav-link"><i data-feather="home"></i> Dashboard</a></li>
          <li class="nav-item with-sub">
            <a href="" class="nav-link"><i data-feather="shopping-cart"></i> Orders</a>
            <ul class="navbar-menu-sub">
              <li class="nav-sub-item"><a href="<?= base_url('authMember/orders') ?>" class="nav-sub-link"><i data-feather="shopping-cart"></i>Order List</a></li>
              <li class="nav-sub-item"><a href="#!" class="nav-sub-link"><i data-feather="truck"></i>Order Status</a></li>
              <li class="nav-sub-item"><a href="#!" class="nav-sub-link"><i data-feather="bar-chart"></i>Statistics</a></li>
              <li class="nav-sub-item"><a href="#!" class="nav-sub-link"><i data-feather="dollar-sign"></i>Accounting</a></li>
              <li class="nav-sub-item"><a href="#!" class="nav-sub-link"><i data-feather="credit-card"></i>Transactions</a></li>
            </ul>
          </li>
          <li class="nav-item with-sub">
            <a href="" class="nav-link"><i data-feather="package"></i> Catalog</a>
            <ul class="navbar-menu-sub">
              <li class="nav-sub-item"><a href="#!" class="nav-sub-link"><i data-feather="shopping-bag"></i>Products</a></li>
              <li class="nav-sub-item"><a href="#!" class="nav-sub-link"><i data-feather="layers"></i>Categories</a></li>
              <li class="nav-sub-item"><a href="#!" class="nav-sub-link"><i data-feather="message-square"></i>Reviews</a></li>
              <li class="nav-sub-item"><a href="#!" class="nav-sub-link"><i data-feather="tag"></i>Tags</a></li>
              <li class="nav-sub-item"><a href="#!" class="nav-sub-link"><i data-feather="rotate-cw"></i>Update Quatity</a></li>
              <li class="nav-sub-item"><a href="#!" class="nav-sub-link"><i data-feather="upload-cloud"></i>Import</a></li>
              <li class="nav-sub-item"><a href="#!" class="nav-sub-link"><i data-feather="download-cloud"></i>Export</a></li>
            </ul>
          </li>
          <li class="nav-item with-sub">
            <a href="" class="nav-link"><i data-feather="package"></i> Marketing</a>
            <ul class="navbar-menu-sub">
              <li class="nav-sub-item"><a href="#!" class="nav-sub-link"><i data-feather="mail"></i>Newsletters</a></li>
              <li class="nav-sub-item"><a href="#!" class="nav-sub-link"><i data-feather="hash"></i>Google Product Feed</a></li>
              <li class="nav-sub-item"><a href="#!" class="nav-sub-link"><i data-feather="facebook"></i>Facebook Ads</a></li>
              <li class="nav-sub-item"><a href="#!" class="nav-sub-link"><i data-feather="twitter"></i>Twitter Ads</a></li>
            </ul>
          </li>
          <li class="nav-item with-sub">
            <a href="" class="nav-link"><i data-feather="package"></i> Discounts</a>
            <ul class="navbar-menu-sub">
              <li class="nav-sub-item"><a href="#!" class="nav-sub-link"><i data-feather="percent"></i>Product Discounts</a></li>
              <li class="nav-sub-item"><a href="#!" class="nav-sub-link"><i data-feather="gift"></i>Coupons</a></li>
              <!-- <li class="nav-sub-item"><a href="#!" class="nav-sub-link"><i data-feather="calendar"></i>Giveaways</a></li> -->
            </ul>
          </li>
          <li class="nav-item with-sub">
            <a href="" class="nav-link"><i data-feather="layers"></i> Managment</a>
            <div class="navbar-menu-sub">
              <div class="d-lg-flex">
                <ul>
                  <li class="nav-label">Users Managment</li>
                  <li class="nav-sub-item"><a href="#!" class="nav-sub-link"><i data-feather="users"></i> Users List</a></li>
                  <li class="nav-sub-item"><a href="#!" class="nav-sub-link"><i data-feather="user-check"></i> Roles</a></li>
                  <li class="nav-label mg-t-20">System Tools</li>
                  <li class="nav-sub-item"><a href="#!" class="nav-sub-link"><i data-feather="database"></i> Database</a></li>
                  <li class="nav-sub-item"><a href="#!" class="nav-sub-link"><i data-feather="server"></i> System CheckUp</a></li>
                </ul>
                <ul>
                  <li class="nav-label">Store Setup</li>
                  <li class="nav-sub-item"><a href="#!" class="nav-sub-link"><i data-feather="info"></i> Contact Information</a></li>
                  <li class="nav-sub-item"><a href="#!" class="nav-sub-link"><i data-feather="shopping-cart"></i> Cart & Checkout</a></li>
                  <li class="nav-sub-item"><a href="#!" class="nav-sub-link"><i data-feather="credit-card"></i> Payment Methods</a></li>
                  <li class="nav-sub-item"><a href="#!" class="nav-sub-link"><i data-feather="navigation"></i> Countries & States</a></li>
                  <li class="nav-sub-item"><a href="#!" class="nav-sub-link"><i data-feather="shopping-bag"></i> Shipping</a></li>
                  <li class="nav-sub-item"><a href="#!" class="nav-sub-link"><i data-feather="inbox"></i> Email Notifications</a></li>
                </ul>
              </div>
            </div><!-- nav-sub -->
          </li>
        </ul>
      </div><!-- navbar-menu-wrapper -->
      <div class="navbar-right">
        <a id="navbarSearch" href="" class="search-link"><i data-feather="search"></i></a>
        <div class="dropdown dropdown-message">
          <a href="" class="dropdown-link new-indicator" data-toggle="dropdown">
            <i data-feather="message-square"></i>
            <span>5</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header">New Messages</div>
            <a href="" class="dropdown-item">
              <div class="media">
                <div class="avatar avatar-sm avatar-online"><img src="../https://via.placeholder.com/350" class="rounded-circle" alt=""></div>
                <div class="media-body mg-l-15">
                  <strong>Socrates Itumay</strong>
                  <p>nam libero tempore cum so...</p>
                  <span>Mar 15 12:32pm</span>
                </div><!-- media-body -->
              </div><!-- media -->
            </a>
            <a href="" class="dropdown-item">
              <div class="media">
                <div class="avatar avatar-sm avatar-online"><img src="../https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                <div class="media-body mg-l-15">
                  <strong>Joyce Chua</strong>
                  <p>on the other hand we denounce...</p>
                  <span>Mar 13 04:16am</span>
                </div><!-- media-body -->
              </div><!-- media -->
            </a>
            <a href="" class="dropdown-item">
              <div class="media">
                <div class="avatar avatar-sm avatar-online"><img src="../https://via.placeholder.com/600" class="rounded-circle" alt=""></div>
                <div class="media-body mg-l-15">
                  <strong>Althea Cabardo</strong>
                  <p>is there anyone who loves...</p>
                  <span>Mar 13 02:56am</span>
                </div><!-- media-body -->
              </div><!-- media -->
            </a>
            <a href="" class="dropdown-item">
              <div class="media">
                <div class="avatar avatar-sm avatar-online"><img src="../https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                <div class="media-body mg-l-15">
                  <strong>Adrian Monino</strong>
                  <p>duis aute irure dolor in repre...</p>
                  <span>Mar 12 10:40pm</span>
                </div><!-- media-body -->
              </div><!-- media -->
            </a>
            <div class="dropdown-footer"><a href="">View all Messages</a></div>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
        <div class="dropdown dropdown-notification">
          <a href="" class="dropdown-link new-indicator" data-toggle="dropdown">
            <i data-feather="bell"></i>
            <span>2</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header">Notifications</div>
            <a href="" class="dropdown-item">
              <div class="media">
                <div class="avatar avatar-sm avatar-online"><img src="../https://via.placeholder.com/350" class="rounded-circle" alt=""></div>
                <div class="media-body mg-l-15">
                  <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                  <span>Mar 15 12:32pm</span>
                </div><!-- media-body -->
              </div><!-- media -->
            </a>
            <a href="" class="dropdown-item">
              <div class="media">
                <div class="avatar avatar-sm avatar-online"><img src="../https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                <div class="media-body mg-l-15">
                  <p><strong>Joyce Chua</strong> just created a new blog post</p>
                  <span>Mar 13 04:16am</span>
                </div><!-- media-body -->
              </div><!-- media -->
            </a>
            <a href="" class="dropdown-item">
              <div class="media">
                <div class="avatar avatar-sm avatar-online"><img src="../https://via.placeholder.com/600" class="rounded-circle" alt=""></div>
                <div class="media-body mg-l-15">
                  <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                  <span>Mar 13 02:56am</span>
                </div><!-- media-body -->
              </div><!-- media -->
            </a>
            <a href="" class="dropdown-item">
              <div class="media">
                <div class="avatar avatar-sm avatar-online"><img src="../https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                <div class="media-body mg-l-15">
                  <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                  <span>Mar 12 10:40pm</span>
                </div><!-- media-body -->
              </div><!-- media -->
            </a>
            <div class="dropdown-footer"><a href="">View all Notifications</a></div>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
        <div class="dropdown dropdown-profile">
          <a href="" class="dropdown-link" data-toggle="dropdown" data-display="static">
            <div class="avatar avatar-sm"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
          </a><!-- dropdown-link -->
          <div class="dropdown-menu dropdown-menu-right tx-13">
            <div class="avatar avatar-lg mg-b-15 mx-auto"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
            <h6 class="tx-semibold mg-b-5 text-center"><?= $userName ?></h6>
            <p class="mg-b-25 tx-12 tx-color-03 text-center"><i class="fas fa-circle text-success"></i> <?= $userRole ?></p>

            <a href="" class="dropdown-item"><i data-feather="edit-3"></i> Edit Profile</a>
            <a href="page-profile-view.html" class="dropdown-item"><i data-feather="user"></i> View Profile</a>
            <div class="dropdown-divider"></div>
            <a href="page-help-center.html" class="dropdown-item"><i data-feather="help-circle"></i> Help Center</a>
            <a href="" class="dropdown-item"><i data-feather="life-buoy"></i>Account Activity</a>
            <a href="" class="dropdown-item"><i data-feather="settings"></i>Account Settings</a>
            <a href="" class="dropdown-item"><i data-feather="shield"></i>Privacy Settings</a>
            <a href="page-signin.html" class="dropdown-item"><i data-feather="log-out"></i>Sign Out</a>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
      </div><!-- navbar-right -->
      <div class="navbar-search">
        <div class="navbar-search-header">
          <input type="search" class="form-control" placeholder="Type and hit enter to search...">
          <button class="btn"><i data-feather="search"></i></button>
          <a id="navbarSearchClose" href="" class="link-03 mg-l-5 mg-lg-l-10"><i data-feather="x"></i></a>
        </div><!-- navbar-search-header -->
        <div class="navbar-search-body">
          <label class="tx-10 tx-medium tx-uppercase tx-spacing-1 tx-color-03 mg-b-10 d-flex align-items-center">Recent Searches</label>
          <ul class="list-unstyled">
            <li><a href="dashboard-one.html">modern dashboard</a></li>
            <li><a href="app-calendar.html">calendar app</a></li>
            <li><a href="../../collections/modal.html">modal examples</a></li>
            <li><a href="../../components/el-avatar.html">avatar</a></li>
          </ul>

          <hr class="mg-y-30 bd-0">

          <label class="tx-10 tx-medium tx-uppercase tx-spacing-1 tx-color-03 mg-b-10 d-flex align-items-center">Search Suggestions</label>

          <ul class="list-unstyled">
            <li><a href="dashboard-one.html">cryptocurrency</a></li>
            <li><a href="app-calendar.html">button groups</a></li>
            <li><a href="../../collections/modal.html">form elements</a></li>
            <li><a href="../../components/el-avatar.html">contact app</a></li>
          </ul>
        </div><!-- navbar-search-body -->
      </div><!-- navbar-search -->
    </header><!-- navbar -->

    <div class="content content-fixed">
      <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
