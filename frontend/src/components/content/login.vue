<template>
 <div class="back">
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div>
                <div class="row g-5 align-items-center">
                    <div class="col-md-6">
                        <h1 class="text-white mb-4 text-center" id="classy">Hotel & Resort Log In</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-12"  id="color">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="username" placeholder="Your Username">
                                        <label for="username">Your Username</label>
                                    </div>
                                </div>
                                <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="password" class="form-control bg-transparent" id="password" placeholder="Your Password">
                                        <label for="password">Your Password</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-outline-light w-100 py-3" type="submit">Login Now</button>
                                </div>
                                <a class="dark">Log in with your email instead?</a>
                                <router-link to="/Password_Recovery" tag="a" class="dark">Forgot Password?</router-link>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 text-white" id="classy">
                        <h3 class="text-white text-uppercase">Puerto Galera: <br>Heart of Asia</h3>
                        <p class="mb-4 justify">Nestled amidst verdant gardens and overlooking the azure Mindoro Strait, this renowned diving destination provides
                      direct access to vibrant coral reefs, marine life, and shipwrecks. Luxurious villas blend nature with comfort, while the
                      on-site restaurant serves a diverse culinary experience. Committed to sustainability, the resort offers eco-friendly
                      adventures, making it an unforgettable destination for divers and nature enthusiasts alike.</p>
         
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import router from '@/router';
import axios from 'axios';
export default {
  data() {
    return {
      username: "",
      email: "",
      password: "",
      changed: false,
    }
  },
  created() {

  },
  methods: {
    async log_tourist() {

      try {
        // TODO: Ilagay dine sa url yung api path para sa login 
        const url = ""
        const log_tour = await axios.post(url, {
          username: this.username,
          email: this.email,
          password: this.password
        });

        if (log_tour.data.msg === 'okay') {
          sessionStorage.setItem("jwt", log_tour.data.token)
          // TODO: PALITAN YUNG SA /tourist_account kung san yung URL na pupuntahan kapag Tama ang login
          // router.push('/tourist_account');
        } else if (log_tour.data.msg === 'wrong password.') {
          alert(log_tour.data.msg);
        } else {
          alert(log_tour.data.msg);
        }
      } catch (error) {
        console.log(error);
      }

    },
    togglelog() {
      if (this.changed) {
        this.changed = false;
        return this.changed;
      } else {
        this.changed = true;
        return this.changed;
      }
    },
    clearuname() {
      document.getElementById("username").value = "";
    },
    clearemail() {
      document.getElementById("email").value = "";
    }

  }
}
</script>