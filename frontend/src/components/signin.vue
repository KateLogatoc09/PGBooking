<template>
    <div class="back">
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div>
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white" id="classy2">
                        <h6 class="text-white text-uppercase">Puerto Galera Tourism</h6>
                        <h1 class="text-white mb-4">Log In</h1>
                        <p class="mb-4">Welcome to Puerto Galera Tourism Login</p>
                        <p class="mb-4">Fill up all the information needed to login to your account.</p>
           
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-white mb-4 text-center" id="classy">Log In Now</h1>
                        <form @submit.prevent="log_tourist">
                            <div class="row g-3">
                                <div v-if='!changed' class="col-md-12"  id="color">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="username" placeholder="Your Username" v-model="username" required>
                                        <label for="username">Your Username</label>
                                    </div>
                                </div>
                                <div v-else class="col-md-12"  id="color">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-transparent" id="email" placeholder="Your Email" v-model="email" required>
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="password" class="form-control bg-transparent" id="password" placeholder="Your Password" v-model="password" required>
                                        <label for="password">Your Password</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-outline-light w-100 py-3" type="submit">Login Now</button>
                                </div>
                                <a @click='togglelog(), clearuname()' v-if="!changed" class="dark">Log in with your email instead?</a>
                                <a @click='togglelog(), clearemail()' v-if="changed" class="dark">Log in with your username instead?</a>
                                <router-link to="/forgot" tag="a" class="dark">Forgot Password?</router-link>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</template>
<script>
import router from '@/router';
import axios from 'axios';
import Swal from 'sweetalert2';
export default{
    data(){
        return{
            username:"",
            email:"",
            password:"",
            changed:false,
        }
    },
    created(){
        
    },
    methods:{
        async log_tourist(){ 

            try {
                const login = await axios.post("Login",{ 
                username: this.username,
                email:this.email,
                password: this.password 
                }); 

                if(login.data.msg ==='okay'){ 
                    sessionStorage.setItem("jwt", login.data.token);
                    sessionStorage.setItem("status", login.data.status);
                    sessionStorage.setItem("role", login.data.role);
                    Swal.fire({
                        title: 'PGBooking:',
                        text: 'Login Successfully.',
                        icon: 'info',
                    })
                    if(login.data.role === 'TOURIST' || login.data.role === 'HOTEL'){
                        router.push('/account'); 
                    } else{
                        router.push('/admin');
                    }
                } else if (login.data.msg ==='wrong password.') {
                    Swal.fire({
                        title: 'PGBooking:',
                        text: login.data.msg,
                        icon: 'error',
                    })
                } else if (login.data.msg === 'Please verify your email before logging in.') {
                    Swal.fire({
                        title: 'PGBooking:',
                        text: login.data.msg,
                        icon: 'info',
                    })
                    router.push('/verify');
                } else {
                    Swal.fire({
                        title: 'PGBooking:',
                        text: login.data.msg,
                        icon: 'error',
                    })
                }
            } catch (error) {
                console.log(error);
            }

        }, 
        togglelog() {
            if(this.changed){
            this.changed = false;
            return this.changed;
            }else{
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