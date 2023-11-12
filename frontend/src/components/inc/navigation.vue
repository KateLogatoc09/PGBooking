<template>
    <div>
        
        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="sticky navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="heading m-0"><i class="fa fa-book me-3"></i>PGBooking</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                
                <!-- for editing-->
                <button class="navbar-toggler main-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <!--Create Menu-->

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <router-link to="/" tag="a" class="nav-item nav-link" exact>Home</router-link>
                        <router-link to="/About" tag="a" class="nav-item nav-link" exact>About</router-link>
                        <router-link to="/Services" tag="a" class="nav-item nav-link" exact>Services</router-link>
                        <router-link to="/Hotels" tag="a" class="nav-item nav-link" exact>Hotels</router-link>
                        <router-link to="/admin" tag="a" class="nav-item nav-link" exact>Admin</router-link>
                        <router-link to="/Contact" tag="a" class="nav-item nav-link" exact>Contact</router-link>
                    </div>
                    <div class="d-flex justify-content-center mb-2">
                        <router-link to="/Login" tag="a" class="btn btn-sm main-btn px-4 border-end login" exact>Login</router-link>
                        <router-link to="/Register" tag="a" class="btn btn-sm main-btn px-3 border-end register" exact>Register</router-link>
                    </div>
                </div>
            </nav>

            <div v-if="Home()" class="container-fluid bg-primary py-5 mb-5 hero-header cover">
                <div class="container py-5">
                    <div class="row justify-content-center py-5">
                        <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                            <h1 class="display-3 text-white mb-3 animated slideInDown">Enjoy Your Vacation With Us</h1>
                            <p class="fs-4 text-white mb-4 animated slideInDown">Puerto Gallera Tourism</p>
                            <div class="position-relative w-75 mx-auto animated slideInDown">
                                <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Hotel">
                                <button type="button" class="btn main-btn rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div v-else-if="Login()">
            </div>

            <div v-else-if="Register()">
            </div>

            <div v-else class="container-fluid bg-primary py-5 mb-5 hero-header cover">
                <div class="container py-5">
                    <div class="row justify-content-center py-5">
                        <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                            <h1 v-if="About()" class="display-3 text-white animated slideInDown">About Us</h1>
                            <h1 v-if="Services()" class="display-3 text-white animated slideInDown">Services</h1>
                            <h1 v-if="Hotels()" class="display-3 text-white animated slideInDown">Hotels</h1>
                            <h1 v-if="Contact()" class="display-3 text-white animated slideInDown">Contact Us</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <router-link to="/" tag="li" class="breadcrumb-item main-text" exact>Home</router-link>
                                    <router-link to="/Pages" tag="li" class="breadcrumb-item main-text" exact>Pages</router-link>
                                    <router-link v-if="About()" to="/About" tag="li" class="breadcrumb-item text-white" exact>About</router-link>
                                    <router-link v-if="Services()" to="/Services" tag="li" class="breadcrumb-item text-white" exact>Services</router-link>
                                    <router-link v-if="Hotels()" to="/Hotels" tag="li" class="breadcrumb-item text-white" exact>Hotels</router-link>
                                    <router-link v-if="Contact()" to="/Contact" tag="li" class="breadcrumb-item text-white" exact>Contact</router-link>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Navbar & Hero End -->


    </div>
</template>

<script>
export default {
    methods: {
      Home() {
        if(this.$route.path == "/") {
          return true
        } else {
          return false
        }
      },
      Login() {
        if(this.$route.path == "/Login") {
          return true
        } else {
          return false
        }
      },
      Register() {
        if(this.$route.path == "/Register") {
          return true
        } else {
          return false
        }
      },
      About() {
        if(this.$route.path == "/About") {
          return true
        } else {
          return false
        }
      },
      Services() {
        if(this.$route.path == "/Services") {
          return true
        } else {
          return false
        }
      },
      Hotels() {
        if(this.$route.path == "/Hotels") {
          return true
        } else {
          return false
        }
      },
      Contact() {
        if(this.$route.path == "/Contact") {
          return true
        } else {
          return false
        }
      }

    }
  }
</script>