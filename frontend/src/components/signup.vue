<template>
    <div class="back">
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div>
                <h1 class="text-white mb-4 text-center" id="classy2">Register Account</h1>
                <form @submit.prevent="reg_tourist">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white" id="classy2">
                        <div class="row g-3">
                        <div class="col-md-12"  id="color">
                                <div class="form-floating">
                                        <input type="email" class="form-control bg-transparent" id="email" placeholder="Your Email" v-model="email" required>
                                        <label for="email">Your Email</label>
                                 </div>
                            </div>
                        <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="password" minlength="8" class="form-control bg-transparent" id="password" placeholder="Your Password" @input="check()" v-model="password" required>
                                        <label for="password">Your Password</label>
                                    </div>
                                </div>
                                <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="password" minlength="8" class="form-control bg-transparent" id="c_password" placeholder="Enter Confirm Password" @input="check()" v-model="c_password" required>
                                        <label for="confirmpassword">Enter Confirm Password</label>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                            <div class="row g-3">
                                <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="username" placeholder="Your Username" v-model="username" required>
                                        <label for="username">Your Username</label>
                                    </div>
                                </div>

                                <div class="col-md-12"  id="color">
                                    <div class="form-floating">
                                        <input type="tel" maxlength="11" class="form-control bg-transparent" id="number" @input="phonecheck()" placeholder="Your Phone Number (09XXXXXXXXX)" v-model="phone" required>
                                        <label for="number">Your Phone Number</label>
                                    </div>
                                </div>

                                <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="address" placeholder="Your Address" v-model="address" required>
                                        <label for="address">Your Address</label>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-outline-light w-50 py-3" type="submit">Register Now</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </div>
</template>

<script>
import axios from 'axios';
export default{
    data(){
        return{
            username:"",
            email:"",
            password:"",
            c_password:"",
            phone:"",
            address:"",
        }
    },
    created(){
        
    },
    methods:{
        async reg_tourist(){
            try {
                const reg_tour = await axios.post("Register", {
                    username: this.username,
                    email: this.email,
                    password:this.password,
                    phone:this.phone,
                    address:this.address,
                
                }).then((response) => { 
                    if (response.status === 200) {
                        alert('You have successfully registered.'); 
                    } 
                }).catch(error => { 
                    // handle error 
                    if (error.response.status === 409) { 
                        alert('A user already with that email, username or phone number.');  
                    } 
                });
            } catch (error) {
                console.log(error);
            }
        },
        check() {
            var input = document.getElementById('c_password');
            if (input.value != document.getElementById('password').value) {
                input.setCustomValidity('Password Must be Matching.');
            } else {
                // input is valid -- reset the error message
                input.setCustomValidity('');
            }
        },
        phonecheck() {
            var num = document.getElementById('number');
            var format = /^(09)\d{9}$/gm;
            if (num.value.match(format)) {
                num.setCustomValidity('');
            } else {
                num.setCustomValidity('Your Phone Number must follow this format: 09XXXXXXXXX');
            }
        }

    }
}
</script>