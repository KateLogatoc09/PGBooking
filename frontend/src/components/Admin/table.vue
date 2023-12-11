<template>
    <div>
      <!-- Page Wrapper -->
      <div id="wrapper">
  
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/manage">
            <div class="sidebar-brand-icon rotate-n-15">
              <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Admin</div>
          </a>
  
          <!-- Divider -->
          <hr class="sidebar-divider my-0">
  
          <!-- Nav Item - Dashboard -->
          <li class="nav-item active">
            <a class="nav-link" href="/manage">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span></a>
          </li>
  
          <!-- Divider -->
          <hr class="sidebar-divider">
  
          <!-- Heading -->
          <div class="sidebar-heading">
            Addons
          </div>
          <li class="nav-item">
            <a class="nav-link" href="/Admin">
              <i class="fas fa-fw fa-home"></i>
              <span>Home</span></a>
          </li>
          <!-- Nav Item - Form -->
          <li class="nav-item">
            <a class="nav-link" href="/form">
                <i class="fas fa-fw fa-file"></i>
              <span>Form</span></a>
          </li>
  
          <!-- Nav Item - Tables -->
          <li class="nav-item">
            <a class="nav-link" href="/table">
              <i class="fas fa-fw fa-table"></i>
              <span>Tables</span></a>
          </li>
  
          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">
  
          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>
  
        </ul>
        <!-- End of Sidebar -->
  
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
  
          <!-- Main Content -->
          <div id="content">
  
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
  
              <!-- Sidebar Toggle (Topbar) -->
              <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
              </button>
  
              <!-- Topbar Search -->
              <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                  <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                    aria-label="Search" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-success" type="button">
                      <i class="fas fa-search fa-sm"></i>
                    </button>
                  </div>
                </div>
              </form>
  
              <!-- Topbar Navbar -->
              <ul class="navbar-nav ml-auto">
  
                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                  <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                  </a>
                  <!-- Dropdown - Messages -->
                  <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                    aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                      <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small"
                          placeholder="Search for..." aria-label="Search"
                          aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </li>
  
                <div class="topbar-divider d-none d-sm-block"></div>
                
              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                      <img :src="require('@/assets/img/icons/user-1.jpg')" class="img-profile rounded-circle">
                  </a>
                  <!-- Dropdown - User Information -->
                  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                      aria-labelledby="userDropdown">
                      <a class="dropdown-item" href="#">
                          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                          Profile
                      </a>
                      <a class="dropdown-item" href="#">
                          <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                          Settings
                      </a>
                      <a class="dropdown-item" href="#">
                          <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                          Activity Log
                      </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                          Logout
                      </a>
                  </div>
              </li>
  
              </ul>
  
            </nav>
            <!-- End of Topbar -->
  
        <!-- New User Information Form -->
            <div class="container high">
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <div class="card">
                            <div class="card-header">
                                <h3>List of Hotels</h3>
                            </div>
                            <div class="card-body over">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Hotel Name</th>
                                            <th>Owner's Name</th>
                                            <th>Email</th>
                                            <th>Description</th>
                                            <th>Number</th>
                                            <th>Application Form</th>
                                            <th>Insurance Form</th>
                                            <th>Self-Assessment Form</th>
                                            <th>Letter of Intent</th>
                                            <th>Discharge Permit</th>
                                            <th>Mayor's Permit</th>
                                            <th>Logo</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td>ID</td>
                                                <td>Hotel Name</td>
                                                <td>Owner's Name</td>
                                                <td>Email</td>
                                                <td>Description</td>
                                                <td>Number</td>
                                                <td>App Form</td>
                                                <td>Insurance</td>
                                                <td>Self-Assessment Form</td>
                                                <td>Letter of Intent</td>
                                                <td>Discharge Permit</td>
                                                <td>Mayor's Permit</td>
                                                <td>Logo</td>
                                                <td>Status</td>
                                                <td>
                                                <a href="#" class='btn btn-primary'>Update</a><br><br>
                                                <a href="#" class='btn btn-danger'>Delete</a>
                                                </td>
                                            </tr>
                                    </tbody>
                                </table>  
                            </div>         
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h3>Hotels Accounts</h3>
                            </div>
                            <div class="card-body over">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Number</th>
                                            <th>Address</th>
                                            <th>Description</th>
                                            <th>Facebook</th>
                                            <th>Tiktok</th>
                                            <th>Instagram</th>
                                            <th>Youtube</th>
                                            <th>Ratings</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td>ID</td>
                                                <td>Name</td>
                                                <td>Email</td>
                                                <td>Number</td>
                                                <td>Address</td>
                                                <td>Description</td>
                                                <td>Facebook</td>
                                                <td>Tiktok</td>
                                                <td>Instagram</td>
                                                <td>Youtube</td>
                                                <td>Ratings</td>
                                                <td>
                                                <a href="#" class='btn btn-primary'>Update</a><br><br>
                                                <a href="#" class='btn btn-danger'>Delete</a>
                                                </td>
                                            </tr>
                                    </tbody>
                                </table>  
                            </div>         
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h3>List of Tourists/Users</h3>
                            </div>
                            <div class="card-body over">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Email</th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>Number</th>
                                            <th>Address</th>
                                            <th>Birthdate</th>
                                            <th>Gender</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td>ID</td>
                                                <td>Email</td>
                                                <td>Name</td>
                                                <td>Name</td>
                                                <td>Name</td>
                                                <td>Number</td>
                                                <td>Address</td>
                                                <td>Birthdate</td>
                                                <td>Gender</td>
                                                <td>Status</td>
                                                <td>
                                                <a href="#" class='btn btn-primary'>Update</a><br><br>
                                                <a href="#" class='btn btn-danger'>Delete</a>
                                                </td>
                                            </tr>
                                    </tbody>
                                </table>  
                            </div>         
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    <!-- End of User Information Form -->

    <!-- form start -->
    <div class="container-xxl py-5 wow fadeInUp back4" data-wow-delay="0.1s">
    <div class="container">
            <div>
                <div class="row g-5 align-items-center">
                <h1 class="text-white mb-4 text-center" id="classy">Edit Hotel</h1>
                <form>
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white" id="classy2">
                        <div class="row g-3">
                            <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="status" placeholder="Status" required>
                                        <label for="status">Status</label>
                                    </div>
                                </div>   
                            <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="hname" placeholder="hotel/resort name" required>
                                        <label for="hname">Hotel or Resort Name</label>
                                    </div>
                                </div>
                                <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="owner" placeholder="Owner's Name" required>
                                        <label for="owner">Owner's full name</label>
                                    </div>
                                </div>
                                <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="desc" placeholder="Business Description" required>
                                        <label for="desc">Business Description</label>
                                    </div>
                                </div>
                                <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-transparent" id="email" placeholder="Email" required>
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-md-12"  id="color">
                                    <div class="form-floating">
                                        <input type="tel" maxlength="11" class="form-control bg-transparent" id="number" placeholder="Phone Number (09XXXXXXXXX)" required>
                                        <label for="number">Contact Number</label>
                                    </div>
                                </div>
                                <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="file" accept=".doc,.docx,.pdf,.jpg,.png,.jpeg," class="form-control bg-transparent" id="logo" placeholder="Logo" required>
                                        <label for="logo">Upload logo of business</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-md-6" id="classy2">
                            <div class="row g-3">
                                <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="file" accept=".doc,.docx,.pdf,.jpg,.png,.jpeg," class="form-control bg-transparent" id="insurance" placeholder="Insurance" required>
                                        <label for="insurance">Upload a scanned copy of Insurance</label>
                                    </div>
                                </div>
                                <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="file" accept=".doc,.docx,.pdf,.jpg,.png,.jpeg," class="form-control bg-transparent" id="assessment" placeholder="Assessment" required>
                                        <label for="assessment">Upload a scanned copy of Self-Assessment Form</label>
                                    </div>
                                </div>
                                <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="file" accept=".doc,.docx,.pdf,.jpg,.png,.jpeg," class="form-control bg-transparent" id="application" placeholder="Application" required>
                                        <label for="application">Upload a scanned copy of Application Form</label>
                                    </div>
                                </div>
                                <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="file" accept=".doc,.docx,.pdf,.jpg,.png,.jpeg," class="form-control bg-transparent" id="intent" placeholder="Intent" required>
                                        <label for="intent">Upload a scanned copy of Letter of Intent to Operate</label>
                                    </div>
                                </div>                              
                                <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="file" accept=".doc,.docx,.pdf,.jpg,.png,.jpeg," class="form-control bg-transparent" id="discharge" placeholder="Discharge" required>
                                        <label for="discharge">Upload a scanned copy of Discharge Permit</label>
                                    </div>
                                </div>
                                <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="file" accept=".doc,.docx,.pdf,.jpg,.png,.jpeg," class="form-control bg-transparent" id="mayor" placeholder="Permit" required>
                                        <label for="permit">Upload a scanned copy of Mayor's Permit</label>
                                    </div>
                                </div>
                    </div>

                    </div>
                    <div class="col-12">
                        <button class="btn btn-outline-light w-50 py-3" type="submit">Edit</button>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-outline-light w-50 py-3" type="submit">Go Back</button>
                    </div>
                </div>
            </form>
            </div>
            </div>
        </div>
    </div>

    <!-- form end -->
  
          </div>
        </div>
      </div>
  </template>
  