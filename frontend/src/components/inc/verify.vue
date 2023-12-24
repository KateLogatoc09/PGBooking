<template>
    <div class="back">
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div>
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white" id="classy2">
                        <h6 class="text-white text-uppercase">Puerto Galera Tourism</h6>
                        <h1 class="text-white mb-4">verify</h1>
                        <p class="mb-4">Welcome to Puerto Galera Tourism verification Page</p>
                        <p class="mb-4">Fill up all the information needed to verify your account.</p>
           
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-white mb-4 text-center" id="classy">Get Verified Now</h1>
                        <form v-if="!ifset()" @submit.prevent="sending()">
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

                        <form v-else @submit.prevent="verify()">
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
            sent:false,
            em: true,
            co: false,
            code:"",
            email:"",
        }
    },
    created(){
        this.ifset();
    },
    methods:{
        ifset() {
        const mail = sessionStorage.getItem('email');
        if(mail != null) {
          this.email = sessionStorage.getItem('email');
          return true;
        } else {
          return false;
        }
      },
        async sending(){ 
            try {
                const send = await axios.post("Sending",{ 
                email: document.getElementById('email').value,
                }); 

                if(send.data.msg ==='okay'){ 
                    sessionStorage.setItem("email", send.data.email); 
                    sessionStorage.setItem("code", send.data.verification);
                    this.ifset();
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
                const verify_acc = await axios.post("Verify",{ 
                email: document.getElementById('email').value,
                code: sessionStorage.getItem('code'),
                verify: document.getElementById('code').value,
                }); 

                if(verify_acc.data.msg ==='okay'){
                    Swal.fire({
                        title: 'PGBooking:',
                        text: "Your email has been verified successfully.",
                        icon: 'info',
                    })
                    sessionStorage.clear(); 
                    router.push('/login');
                } else if (verify_acc.data.msg === 'acc') {
                    Swal.fire({
                        title: 'PGBooking:',
                        text: "Your account has already been verified.",
                        icon: 'info',
                    })
                    sessionStorage.clear();
                    router.push('/login');
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
                const resending = await axios.post("Resend",{
                    email: document.getElementById('email').value,
                });

                if(resending.data.msg ==='okay'){
                    sessionStorage.clear(); 
                    sessionStorage.setItem('email', resending.data.email);
                    sessionStorage.setItem('code', resending.data.code);
                    Swal.fire({
                        title: 'PGBooking:',
                        text: "New code has been sent successfully.",
                        icon: 'info',
                    })
                } else if (resending.data.msg === 'acc') {
                    Swal.fire({
                        title: 'PGBooking:',
                        text: "Your account has already been verified.",
                        icon: 'info',
                    })
                    sessionStorage.clear();
                    router.push('/login');
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
        }
    }
}
</script>