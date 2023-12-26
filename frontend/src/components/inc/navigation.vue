<template>
    <div>
        
        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="sticky navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="heading m-0 white"><i class="fa fa-book me-3"></i>PGBooking</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                
                <!-- for editing-->
                <button class="navbar-toggler main-btn" type="button" data-bs-toggle="collapse" @click="menubar">
                    <span class="fa fa-bars"></span>
                </button>
                <!--Create Menu-->


                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <router-link to="/" tag="a" class="nav-item nav-link" exact>Home</router-link>
                        <router-link to="/about" tag="a" class="nav-item nav-link" exact>About</router-link>
                        <router-link to="/services" tag="a" class="nav-item nav-link" exact>Services</router-link>
                        <router-link to="/hotels" tag="a" class="nav-item nav-link" exact>Hotels</router-link>
                        <router-link to="/contact" tag="a" class="nav-item nav-link" exact>Contact</router-link>
                        <router-link v-if="isLoggedin() && isHT()" to="/account" tag="a" class="nav-item nav-link" exact>Account</router-link>
                        <a v-if="isLoggedin()" @click="Logout()" class="nav-item nav-link pointer">Logout</a>
                    </div>
                    <div class="d-flex justify-content-center mb-2">
                        <router-link v-if='!isLoggedin()' to="/login" tag="a" class="btn btn-sm main-btn px-4 border-end login" exact>Login</router-link>
                        <router-link v-if='!isLoggedin()' to="/register" tag="a" class="btn btn-sm main-btn px-3 border-end register" exact>Register</router-link>
                    </div>
                </div>
            </nav>

            <Transition>
                <div class='menu' v-if="open">
                  <center>
                  <ul id="links">
                    <router-link to="/" tag="li" class="link" exact>Home</router-link><hr>
                    <router-link to="/about" tag="li" class="link" exact>About</router-link><hr>
                    <router-link to="/services" tag="li" class="link" exact>Services</router-link><hr>
                    <router-link to="/hotels" tag="li" class="link" exact>Hotels</router-link><hr>
                    <router-link to="/contact" tag="li" class="link" exact>Contact</router-link><hr>
                    <!--v-if login session-->
                    <router-link v-if="!isLoggedin()" to="/login" tag="li" class="link" exact>Login</router-link><hr v-if="!isLoggedin()">
                    <router-link v-if="!isLoggedin()" to="/register" tag="li" class="link" exact>Register</router-link><hr v-if="!isLoggedin()"> 
                    <router-link v-if="isLoggedin() && isHT()" to="/account" tag="li" class="link" exact>Account</router-link><hr v-if="isLoggedin() && isHT()">
                    <li v-if="isLoggedin()" @click="Logout()" class="link pointer">Logout</li><hr>
                  </ul>
                  </center>
                </div>
                </Transition>

            <div v-if="Home()" class="container-fluid bg-primary py-5 mb-5 hero-header cover">
                <div class="container py-5">
                    <div class="row justify-content-center py-5">
                        <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                            <h1 class="display-3 text-white mb-3 animated slideInDown sizy">Enjoy Your Vacation With Us</h1>
                            <p class="fs-4 text-white mb-4 animated slideInDown">Puerto Gallera Tourism</p>
                            <div class="position-relative w-75 mx-auto animated slideInDown">
                                <form @submit.prevent="search()">
                                <input class="form-control border-0 rounded-pill w-100 py-4 ps-4 pe-5" type="text" id="classy2" placeholder="Eg: Hotel" v-model="search">
                                <button type="submit" class="btn main-btn rounded-pill py-2 px-4 position-absolute top-0 end-0 me-1" id="marg">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div v-else-if="Login()">
            </div>

            <div v-else-if="Register()">
            </div>

            <div v-else-if="HotelAcc()">
            </div>

            <div v-else-if="Verify()">
            </div>

            <div v-else-if="Forgot()">
            </div>
            
            <div v-else class="container-fluid bg-primary py-5 mb-5 hero-header cover">
                <div class="container py-5">
                    <div class="row justify-content-center py-5">
                        <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                            <h1 v-if="About()" class="display-3 text-white animated slideInDown">About Us</h1>
                            <h1 v-if="Services()" class="display-3 text-white animated slideInDown">Services</h1>
                            <h1 v-if="Hotels()" class="display-3 text-white animated slideInDown sizy">Hotels & Resorts</h1>
                            <h1 v-if="Contact()" class="display-3 text-white animated slideInDown">Contact Us</h1>
                            <h1 v-if="Account()" class="display-3 text-white animated slideInDown">My Account</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <router-link to="/" tag="li" class="breadcrumb-item main-text" exact>Home</router-link>
                                    <router-link to="/Pages" tag="li" class="breadcrumb-item main-text" exact>Pages</router-link>
                                    <router-link v-if="About()" to="/About" tag="li" class="breadcrumb-item text-white" exact>About</router-link>
                                    <router-link v-if="Services()" to="/Services" tag="li" class="breadcrumb-item text-white" exact>Services</router-link>
                                    <router-link v-if="Hotels()" to="/Hotels" tag="li" class="breadcrumb-item text-white" exact>Hotels & Resorts</router-link>
                                    <router-link v-if="Contact()" to="/Contact" tag="li" class="breadcrumb-item text-white" exact>Contact</router-link>
                                    <router-link v-if="Account()" to="/account" tag="li" class="breadcrumb-item text-white" exact>Account</router-link>
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
import router from '@/router';
import axios from 'axios';
export default {
  data() {
      return{
      open: false,
      search: "",
      }
    },
    created(){
      this.isLoggedin();
      this.isHT();
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
      isHT() {
        const role = sessionStorage.getItem('role');
        if(role !== 'ADMIN') {
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
      Home() {
        if(this.$route.path == "/") {
          return true
        } else {
          return false
        }
      },
      Login() {
        if(this.$route.path == "/login") {
          return true
        } else {
          return false
        }
      },
      Register() {
        if(this.$route.path == "/register") {
          return true
        } else {
          return false
        }
      },
      HotelAcc() {
        if(this.$route.path == "/hotelacc") {
          return true
        } else {
          return false
        }
      },
      About() {
        if(this.$route.path == "/about") {
          return true
        } else {
          return false
        }
      },
      Services() {
        if(this.$route.path == "/services") {
          return true
        } else {
          return false
        }
      },
      Hotels() {
        if(this.$route.path == "/hotels") {
          return true
        } else {
          return false
        }
      },
      Contact() {
        if(this.$route.path == "/contact") {
          return true
        } else {
          return false
        }
      },
      Account() {
        if(this.$route.path == "/account") {
          return true
        } else {
          return false
        }
      },
      Verify() {
        if(this.$route.path == "/verify") {
          return true
        } else {
          return false
        }
      },
      Forgot() {
        if(this.$route.path == "/forgot") {
          return true
        } else {
          return false
        }
      }

    }
  }
</script>