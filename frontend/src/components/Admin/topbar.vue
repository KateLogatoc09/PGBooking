<template>
          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar static-top shadow">
  
  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
  </button>

  <!-- Topbar Search -->
  <form
      class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
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
          <a class="nav-link dropdown-toggle" @click="menubar" id="userDropdown" role="button"
                >
              <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
              <img :src="require('@/assets/img/icons/user-1.jpg')" class="img-profile rounded-circle">
          </a>
      </li>

  </ul>

</nav>
<!-- End of Topbar -->
<!--test-->
<Transition>
<div class='menuadmin' v-if="open">
    <center>
    <ul id="links">
        <router-link to="/admin/profile" tag="li" class="link" exact>Profile</router-link><hr>
        <li v-if="isLoggedin()" @click="Logout()" class="link pointer">Logout</li>
    </ul>
    </center>
    </div>
</Transition>
</template>

<script>
import router from '@/router';
import axios from 'axios';

export default {
  data() {
    return {
        open: false,
    }  
},
    created(){
      this.isLoggedin();
    },
    methods: {
      isLoggedin() {
        const user = sessionStorage.getItem('jwt');
        if(user != null) {
          return true;
        } else {
          return false;
        }
    },
    async Logout() {
        try {
        const userlogout = await axios.post('Logout', {
            token: sessionStorage.getItem('jwt')
        });

        if(userlogout.data.msg === 'okay'){
            sessionStorage.clear();
            router.push('/login');
        } else {
            alert(userlogout.data.msg);
        }

        }catch (error){
        console.log(error);
        }
    },
    menubar: function() {
        if(this.open){
          this.open = false;
          return this.open;
        }else{
          this.open = true;
          return this.open;
        }
    },
  }
}
</script>
