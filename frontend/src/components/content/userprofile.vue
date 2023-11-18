<template>
    <div>
      
     <!-- Contact Start -->
     <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center secondary-text px-3">Account Settings</h6>
                <h1 class="mb-5">New Profile</h1>
            </div>
            <div v-if="!show" class="row g-4"  id="classy2">

                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-float w-100 h-80" :src='url + info.photo' alt="" style="object-fit: cover;">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 75px; height: 75px;">
                            <i class="fa fa-id-badge text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="secondary-text">Username</h6>
                            <h6>{{ info.username }}</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 75px; height: 75px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="secondary-text">Email</h6>
                            <h6>{{ info.email }}</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4" id="space2">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 75px; height: 75px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="secondary-text">Mobile</h6>
                            <h6>{{ info.phone }}</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4" id="space2">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 75px; height: 75px;">
                            <i class="fa fa-map-marker text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="secondary-text">Address</h6>
                            <h6>{{ info.address }}</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 75px; height: 75px;">
                            <i class="fa fa-male text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="secondary-text">Gender</h6>
                            <h6>{{ info.gender }}</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 75px; height: 75px;">
                            <i class="fa fa-calendar-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="secondary-text">Birthdate</h6>
                            <h6>{{ info.birthdate }}</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4" id="space2">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 75px; height: 75px;">
                            <i class="fa fa-id-card text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="secondary-text">First Name: </h6>
                            <h6>{{ info.first_name }}</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4" id="space2">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 75px; height: 75px;">
                            <i class="fa fa-id-card-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="secondary-text">Middle Name: </h6>
                            <h6>{{ info.middle_name }}</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4" id="space2">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 75px; height: 75px;">
                            <i class="fa fa-id-card text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="secondary-text">Last Name: </h6>
                            <h6>{{ info.last_name }}</h6>
                        </div>
                    </div>
                    <button @click="showform()" class="btn main-btn py-3 px-5 mt-2 buttoncolor">Edit Details</button>
                </div>
            </div>





            <div v-if="show" class="row g-4"  id="classy2">
                <form @submit.prevent="edit()" enctype="multipart/form-data">
                    <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img v-if="prevurl" :src="prevurl" class="img-fluid position-float w-100 h-80" alt="" id="profilephoto" style="object-fit: cover;">
                            <img v-else class="img-fluid position-float w-100 h-80" :src='url + info.photo' alt="" id="profilephoto" style="object-fit: cover;">
                            <center>
                                <input type="file" id="photo" @change="onFileChange" required/>
                                <label for="photo" class="btn-2">upload</label>
                            </center>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-flex align-items-center mb-4">
                            <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 75px; height: 75px;">
                                <i class="fa fa-id-badge text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="secondary-text">Username</h6>
                                <input type="text" class="form-control" id="username" placeholder="New Username" v-model="username" :placeholder='info.username' required>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 75px; height: 75px;">
                                <i class="fa fa-envelope-open text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="secondary-text">Email</h6>
                                <input type="email" class="form-control" id="email" name="email" v-model="email" :placeholder='info.email' required>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4" id="space2">
                            <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 75px; height: 75px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="secondary-text">Mobile</h6>
                                <input @input="phonecheck()" type="tel" id="phone" maxlength='11' name="phone" v-model="phone" :placeholder='info.phone' required>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4" id="space2">
                            <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 75px; height: 75px;">
                                <i class="fa fa-map-marker text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="secondary-text">Address</h6>
                                <input type="text" id="address" name="address" v-model="address" :placeholder='info.address' required>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 75px; height: 75px;">
                                <i class="fa fa-male text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="secondary-text">Gender</h6>
                                <select id="gender" v-model="gender" name="gender" required>
                                    <option value="Female">Female</option>
                                    <option value="Male">Male</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 75px; height: 75px;">
                                <i class="fa fa-calendar-alt text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="secondary-text">Birthdate</h6>
                                <input type="date" id="birthdate" name="birthdate" v-model="birthdate" :placeholder='info.birthdate' required>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4" id="space2">
                            <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 75px; height: 75px;">
                                <i class="fa fa-id-card text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="secondary-text">First Name: </h6>
                                <input type="text" id="first_name" name="first_name" v-model="first_name" :placeholder='info.first_name' required>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4" id="space2">
                            <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 75px; height: 75px;">
                                <i class="fa fa-id-card-alt text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="secondary-text">Middle Name: </h6>
                                <input type="text" id="middle_name" name="middle_name" v-model="middle_name" :placeholder='info.middle_name' required>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4" id="space2">
                            <div class="d-flex align-items-center justify-content-center flex-shrink-0 main-btn" style="width: 75px; height: 75px;">
                                <i class="fa fa-id-card text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="secondary-text">Last Name: </h6>
                                <input type="text" id="last_name" name="last_name" v-model="last_name" :placeholder='info.last_name' required>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <center>
                                <input type='submit'  value='Submit' />
                            </center>
                        </div>
                    </div>

                </form>
            </div>



        </div>
    </div>
    <!-- Contact End -->
    
    <div class="back">
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div>
                <h1 class="text-white mb-4 text-center" id="classy">Update Information</h1>
                <form @submit.prevent="reg_tourist">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white" id="classy2">
                        <div class="row g-3">
                        <div class="col-md-12"  id="color">
                                <div class="form-floating">
                                        <input type="email" class="form-control bg-transparent" id="email" placeholder="Email" required>
                                        <label for="email">Email</label>
                                 </div>
                            </div>
                            <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="username" placeholder="Username" required>
                                        <label for="username">Username</label>
                                    </div>
                                </div>
                        <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="date" minlength="8" class="form-control bg-transparent" id="birthdate" placeholder="Birthdate" required>
                                        <label for="birthdate">Birthdate</label>
                                    </div>
                                </div>
                                <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="gender" placeholder="Gender" required>
                                        <label for="gender">Gender</label>
                                    </div>
                                </div>
                                <div class="col-md-12"  id="color">
                                    <div class="form-floating">
                                        <input type="tel" maxlength="11" class="form-control bg-transparent" id="number" @input="phonecheck()" placeholder="Phone Number (09XXXXXXXXX)" required>
                                        <label for="number">Phone Number</label>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                            <div class="row g-3">
                                <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="lname" placeholder="First Name" required>
                                        <label for="fname">First Name</label>
                                    </div>
                                </div>
                                <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="mname" placeholder="Middle Name" required>
                                        <label for="mname">Middle Name</label>
                                    </div>
                                </div>
                                <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="lname" placeholder="Last Name" required>
                                        <label for="lname">Last Name</label>
                                    </div>
                                </div>

                                <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="address" placeholder="Address" required>
                                        <label for="address">Address</label>
                                    </div>
                                </div>
                                <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="photo" placeholder="Photo" required>
                                        <label for="photo">Upload New Photo</label>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-12">
                                    <button class="btn btn-outline-light w-50 py-3" type="submit">Update Info</button>
                                </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </div>



    </div>
</template>
<script>
import router from '@/router'
import axios from 'axios'
export default{
    data(){
        return{
            username:"",
            email:"",
            phone:"",
            address:"",
            first_name:"",
            middle_name:"",
            last_name:"",
            birthdate:"",
            gender:"",
            url: "http://backend.test",
            info:[],
            show: false,
            prevurl: null,

        }
    },
    created(){
        this.tourist_info()
    },
    methods:{
        async tourist_info(){
            try {
                const tour_info = await axios.post("Tourist_Info", {
                    token: sessionStorage.getItem('jwt'),
                });

                if(tour_info.data.msg === 'okay') {
                    this.info = tour_info.data;
                }

            } catch (error) {
                console.log(error);
            }
        },
        async edit() {
            const config = { 
                headers: {
                    'content-type':'multipart/form-data'
                }
            };

            let data = new FormData();
            data.append('photo', photo);
            data.append('token', sessionStorage.getItem('jwt'));
            data.append('username', this.username);
            data.append('email', this.email);
            data.append('phone', this.phone);
            data.append('address', this.address);
            data.append('first_name', this.first_name);
            data.append('middle_name', this.middle_name);
            data.append('last_name', this.last_name);
            data.append('birthdate', this.birthdate);
            data.append('gender', this.gender);

            /*token: sessionStorage.getItem('jwt'),
                    username: this.username,
                    email: this.email,
                    phone: this.phone,
                    address: this.address,
                    first_name: this.first_name,
                    middle_name: this.middle_name,
                    last_name: this.last_name,
                    birthdate: this.birthdate,
                    gender: this.gender,
                    photo:, */
            try {
                const tour_info_save = await axios.post("Tourist_Info_Edit", data, config);

                if(tour_info_save.data.msg === 'okay') {
                    alert('New profile information was changed successfully');
                } else {
                    alert(tour_info_save.data.msg);
                }

            } catch (error) {
                console.log(error);
            }
        },
        showform() {
            if(this.show){
                this.show = false;
                return this.show;
            }else{
                this.show = true;
            return this.show;
            }
        },
        onFileChange(e) {
            const file = e.target.files[0];
            this.prevurl = URL.createObjectURL(file);
        },
        phonecheck() {
            var num = document.getElementById('phone');
            var format = /^(09)\d{9}$/gm;
            if (num.value.match(format)) {
                num.setCustomValidity('');
            } else {
                num.setCustomValidity('New Phone Number must follow this format: 09XXXXXXXXX');
            }
        },

    }
}
</script>