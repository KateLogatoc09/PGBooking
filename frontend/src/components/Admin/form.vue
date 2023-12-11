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
    <div class="user-information-form">
      <h2>Information</h2>
      <form @submit.prevent="submitForm">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="name">Name:</label>
            <input type="text" id="name" v-model="formData.name" class="form-control" required />
          </div>

          <div class="form-group col-md-6">
            <label for="age">Age:</label>
            <input type="number" id="age" v-model="formData.age" class="form-control" required />
          </div>
       

       
          <div class="form-group col-md-6">
            <label for="birthdate">Birthdate:</label>
            <input type="date" id="birthdate" v-model="formData.birthdate" class="form-control" required />
          </div>

          <div class="form-group col-md-6">
            <label for="photo">Photo:</label>
            <input type="file" id="photo" @change="handlePhotoChange" class="form-control" accept="image/*" />
            <img v-if="formData.photo" :src="formData.photo" alt="User's Photo"
              style="max-width: 100px; max-height: 100px; margin-top: 10px;" />
          </div>
   
      </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <!-- End of User Information Form -->
  
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        formData: {
          name: '',
          age: null,
          birthdate: '',
          photo: null,
        },
      };
    },
    methods: {
      submitForm() {
        // Handle form submission logic here
        console.log('Form submitted with data:', this.formData);
        // You can send the form data to the server or perform other actions as needed
      },
      handlePhotoChange(event) {
        const file = event.target.files[0];
        if (file) {
          const reader = new FileReader();
          reader.onload = (e) => {
            this.formData.photo = e.target.result;
          };
          reader.readAsDataURL(file);
        }
      },
    },
  };
  </script>
  
  <style scoped>
        .user-information-form {
        max-width: 400px; /* Adjust the maximum width as needed */
        margin: 0 auto; /* Center the form horizontally */
        }

        .form-group {
        margin-bottom: 15px; /* Add some space between form elements */
        }

        /* Add your component-specific styles here if needed */
</style>
  