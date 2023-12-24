<template>
    <div class="back">
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div>
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white" id="classy2">
                        <h6 class="text-white text-uppercase">Puerto Galera Tourism</h6>
                        <h1 class="text-white mb-4">Forgot Password</h1>
                        <p class="mb-4">Welcome to Puerto Galera Tourism Password Recovery Page</p>
                        <p class="mb-4">Fill up all the information needed to recover your account.</p>
           
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-white mb-4 text-center" id="classy">Recover your Account</h1>
                        <form v-if="em === true && !ifset() && !ifokay()" @submit.prevent="forgot()">
                            <div class="row g-3">
                                <div class="col-md-12"  id="color">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-transparent" id="email" placeholder="Your Email" required>
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-outline-light w-100 py-3" type="submit">submit</button>
                                </div>
                            </div>
                        </form>

                        <form v-if="pass === true || (ifset() && ifokay())" @submit.prevent="recover()">
                            <div class="row g-3">
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
                                <div class="col-12">
                                    <button class="btn btn-outline-light w-100 py-3" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>

                        <form v-if="co === true || (ifset()  && !ifokay())" @submit.prevent="verify()">
                            <div class="row g-3">
                                <div class="col-md-12"  id="color">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-transparent" id="email" placeholder="Your Email" :value="this.email" readonly>
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="text" maxlength="6" class="form-control bg-transparent" id="code" placeholder="verification code" required>
                                        <label for="code">verification code</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-outline-light w-100 py-3" type="submit">Verify</button>
                                </div>
                                <a @click='resend()' class="dark">Resend verification code?</a>
                                <a @click='back()' class="dark">Go Back</a>
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
import Swal from 'sweetalert2'
export default{
    data(){
        return{
            sent:false,
            em: true,
            co: false,
            pass: false,
            code:"",
            email:"",
            password:"",
        }
    },
    created(){
        this.ifokay();
        this.ifset();
    },
    methods:{
        showemail() {
            if(this.em){
                this.em = false;
                return this.em;
            }else{
                this.em = true;
            return this.em;
            }
        },
        showverify() {
            if(this.co){
                this.co = false;
                return this.co;
            }else{
                this.co = true;
            return this.co;
            }
        },
        shownew() {
            if(this.pass){
                this.pass = false;
                return this.pass;
            }else{
                this.pass = true;
            return this.pass;
            }
        },
        ifset() {
            this.email = sessionStorage.getItem("email");
            if(sessionStorage.getItem("email") != null) {
                return true
            } else {
                return false
            }
        },
        ifokay() {
            if(sessionStorage.getItem("recovery") === 'true') {
                return true
            } else {
                return false
            }
        },
        back() {
            this.showemail();
            this.showverify();
            sessionStorage.clear();
        },
        async recover(){
            try {
                const newpass = await axios.post("Recover",{ 
                password: this.password,
                email: sessionStorage.getItem('email'),
                }); 

                if(newpass.data.msg ==='okay'){ 
                    sessionStorage.clear();
                    Swal.fire({
                        title: 'PGBooking:',
                        text: 'Password Changed Successfully.',
                        icon: 'info',
                    })
                    router.push('/login');
                } else {
                    Swal.fire({
                        title: 'PGBooking:',
                        text: newpass.data.msg,
                        icon: 'error',
                    })
                }
            } catch (error) {
                console.log(error);
            }
        },
        async forgot(){ 
            try {
                const send = await axios.post("Forgot",{ 
                email: document.getElementById('email').value,
                }); 

                if(send.data.msg ==='okay'){ 
                    sessionStorage.setItem("email", send.data.email); 
                    sessionStorage.setItem("code", send.data.verification);
                    this.email = sessionStorage.getItem("email");
                    this.showemail();
                    this.showverify();
                    Swal.fire({
                        title: 'PGBooking:',
                        text: 'Verification code sent successfully.',
                        icon: 'info',
                    })
                } else {
                    Swal.fire({
                        title: 'PGBooking:',
                        text: send.data.msg,
                        icon: 'error',
                    })
                }
            } catch (error) {
                console.log(error);
            }

        }, 
        async verify(){ 
            try {
                const verify_acc = await axios.post("Verifying",{ 
                code: sessionStorage.getItem('code'),
                verify: document.getElementById('code').value,
                }); 

                if(verify_acc.data.msg ==='okay'){
                    sessionStorage.setItem("recovery", verify_acc.data.recovery); 
                    Swal.fire({
                        title: 'PGBooking:',
                        text: 'You can now change your password.',
                        icon: 'info',
                    })
                    this.showverify();
                    this.shownew();
                }
                else {
                    Swal.fire({
                        title: 'PGBooking:',
                        text: verify_acc.data.msg,
                        icon: 'error',
                    })
                }
            } catch (error) {
                console.log(error);
            }

        }, 
        async resend(){
            try {
                const resending = await axios.post("Resending",{
                    email: document.getElementById('email').value,
                });

                if(resending.data.msg ==='okay'){
                    sessionStorage.clear(); 
                    sessionStorage.setItem('email', resending.data.email);
                    sessionStorage.setItem('code', resending.data.code);
                    Swal.fire({
                        title: 'PGBooking:',
                        text: 'New Code has been sent successfully.',
                        icon: 'info',
                    })
                } else {
                    Swal.fire({
                        title: 'PGBooking:',
                        text: resending.data.msg,
                        icon: 'error',
                    })
                }
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
    }
}
</script>