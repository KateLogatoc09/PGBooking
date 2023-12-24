<template>
    <div v-if="!role_check()">
    
         <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center secondary-text px-3">Booking</h6>
                <h1 class="mb-5">Current Bookings</h1>
            </div>
            <div class="row g-4"  id="classy2">
                <div class="col-lg-20 col-md-20 wow fadeInUp book" data-wow-delay="0.1s" id="space3">
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 50px; height: 50px;">
                            <i class="fa fa-building text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="secondary-text">Hotel</h5>
                            <p class="mb-0">Hotel</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4" id="space2">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 50px; height: 50px;">
                            <i class="fa fa-map-marker text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="secondary-text">Location</h5>
                            <p class="mb-0">Location</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 50px; height: 50px;">
                            <i class="fa fa-calendar-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="secondary-text">Date Scheduled</h5>
                            <p class="mb-0">Date</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4" id="space2">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 50px; height: 50px;">
                            <i class="fa fa-credit-card text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="secondary-text">Price</h5>
                            <p class="mb-0">Price</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4" id="space2">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 50px; height: 50px;">
                            <i class="fa fa-male text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="secondary-text">Number of Guest</h5>
                            <p class="mb-0">Guests</p>
                        </div>
                    </div>
                        <div class="d-flex align-items-center mb-4" id="space2">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 50px; height: 50px;">
                            <i class="fa fa-comment text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="secondary-text">Instructions/Comment</h5>
                            <p class="mb-0">Leave a Comment</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4" id="space2">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 50px; height: 50px;">
                            <i class="fa fa-clipboard text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="secondary-text">Booking Status</h5>
                            <p class="mb-0">Pending</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

        
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center secondary-text px-3">Booking History</h6>
                <h1 class="mb-5">Past Bookings</h1>
            </div>
            <div class="row g-4"  id="classy2">

                <div v-for="booking in booking" class="col-lg-14 col-md-5 wow fadeInUp book" data-wow-delay="0.1s" id="space3"> 
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 50px; height: 50px;">
                            <i class="fa fa-building text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="secondary-text">Hotel</h5>
                            <p class="mb-0"></p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center mb-4" id="space2">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 50px; height: 50px;">
                            <i class="fa fa-map-marker text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="secondary-text">Location</h5>
                            <p class="mb-0">Location</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 50px; height: 50px;">
                            <i class="fa fa-calendar-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="secondary-text">Date Booked</h5>
                            <p class="mb-0">Date</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-4" id="space2">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 50px; height: 50px;">
                            <i class="fa fa-credit-card text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="secondary-text">Price Paid</h5>
                            <p class="mb-0">Price</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-4" id="space2">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 50px; height: 50px;">
                            <i class="fa fa-star text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="secondary-text">Rating</h5>
                            <p class="mb-0">Leave a Rating</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-4" id="space2">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 50px; height: 50px;">
                            <i class="fa fa-comment text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="secondary-text">Review</h5>
                            <p class="mb-0">Leave a Review</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Contact End -->



    </div>
</template>
<script>
import router from '@/router'
import axios from 'axios'
export default{
    data(){
        return{
            booking:[],
        }
    },
    created(){
        this.booking_info()
        this.role_check()
    },
    methods:{
        role_check() {
        const role = sessionStorage.getItem('role');
          if(role == 'HOTEL')
            return true;
          else {
            return false;
          }
      },
        async booking_info(){
            try {
                const book_info = await axios.post("Booking_Info_Past", {
                    token: sessionStorage.getItem('jwt'),
                });

                if(book_info.data.msg === 'okay') {
                    this.booking = book_info.data;
                }

            } catch (error) {
                console.log(error);
            }
        },
    }
}
</script>