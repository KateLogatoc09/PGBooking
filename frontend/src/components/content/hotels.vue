<template>
    <div>
          <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center secondary-text px-3">Hotels & Resorts</h6>
                <h1 class="mb-5">List of Hotels & Resorts</h1>
            </div>
            <!-- Loop from DB-->
            <div v-if="Home()" class="row g-4 justify-content-center ">
                <div v-for="hotel in hotel.slice(0,6)" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="list-size" :src='url + hotel.image' >
                        </div>
                        <div class="d-flex border-bottom">
                            <h4 class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt secondary-text me-2"></i>{{ hotel.name }}</h4>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">PHP{{ hotel.pricing_lowest }} - {{ hotel.pricing_highest }} </h5>
                            <div>
                                <small class="fa fa-star main-text"></small>
                                <small class="fa fa-star main-text"></small>
                                <small class="fa fa-star main-text"></small>
                                <small class="fa fa-star main-text"></small>
                                <small class="fa fa-star main-text"></small>
                            </div>
                            <div class="description">
                            <small>{{ hotel.description }}</small>
                            </div>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm main-btn px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="btn btn-sm main-btn px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div v-else class="row g-4 justify-content-center hotels">
                <div v-for="hotel in hotel" class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="list-size" :src='url + hotel.image' >
                        </div>
                        <div class="d-flex border-bottom">
                            <h5 class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt main-text me-2"></i>{{ hotel.name }}</h5>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">PHP{{ hotel.pricing_lowest }} - {{ hotel.pricing_highest }} </h5>
                            <div>
                                <small class="fa fa-star main-text"></small>
                                <small class="fa fa-star main-text"></small>
                                <small class="fa fa-star main-text"></small>
                                <small class="fa fa-star main-text"></small>
                                <small class="fa fa-star main-text"></small>
                            </div>
                            <div class="description">
                            <small>{{ hotel.description }}</small>
                            </div>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm main-btn px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="btn btn-sm main-btn px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Package End -->


    </div>
</template>

<script>
import axios from 'axios';
export default{
    data(){
        return{
            hotel:[],
            url: "http://backend.test",
        }
    },
    created(){
        this.getList();
    },
    methods:{
        async getList(){
            try {
                const list = await axios.get('ListAll');
                this.hotel = list.data;
            } catch (error) {
                console.log(error);
            }
        },
        Home() {
            if(this.$route.path == "/") {
            return true
            } else {
            return false
            }
        },
    }
}
</script>