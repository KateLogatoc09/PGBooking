<template>
    <div>
        
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center secondary-text px-3">Contact Us</h6>
                <h1 class="mb-5">Contact For Any Query</h1>
            </div>
            <div class="row g-4"  id="classy2">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    
                    <h5>Get In Touch</h5>
                    <p class="mb-4">If you have any questions or in need of clarification, please let us know.</p>
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 50px; height: 50px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="secondary-text">Mobile</h5>
                            <p class="mb-0">+639272817508</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 50px; height: 50px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="secondary-text">Mobile</h5>
                            <p class="mb-0">+639610086587</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 50px; height: 50px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="secondary-text">Email</h5>
                            <p class="mb-0">puertogaleraoffice@gmail.com</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-float w-100 h-80" src="@/assets/assets/images/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form @submit.prevent="query">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" v-model="name" required>
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" v-model="email" required>
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" v-model="subject" required>
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" v-model="message" style="height: 100px" required></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn main-btn w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->



    </div>
</template>

<script>
import router from '@/router';
import axios from 'axios';
export default{
    data(){
        return{
            name:"",
            email:"",
            subject:"",
            message:"",
        }
    },
    created(){
        
    },
    methods:{
        async query(){
            try {
                const ask = await axios.post("Query", {
                    name: this.name,
                    email: this.email,
                    subject:this.subject,
                    message:this.message,
                
                });

                if(ask.data.msg === 'okay') {
                    alert('Message sent successfully.'); 
                    router.push('/contact');
                } else {
                    alert(ask.data.msg);
                }

            } catch (error) {
                console.log(error);
            }
        },

    }
}
</script>