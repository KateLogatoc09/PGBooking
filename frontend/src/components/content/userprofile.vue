<template>
    <div>
      
     <!-- Contact Start -->
     <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center secondary-text px-3">Account Settings</h6>
                <h1 class="mb-5">Profile Information</h1>
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
            
            <div v-if="show" class="back">
                <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="container">
                        <div>
                            <h1 class="text-white mb-4 text-center" id="classy">Update Information</h1>
                                <form @submit.prevent="clicked(event)" enctype="multipart/form-data">
                                    <div class="row g-5 align-items-center">
                                        <!-- image -->
                                        <div>
                                            <img v-show="prevurl" :src="prevurl" class="img-fluid position-float" alt="profile photo" id="profilephoto" style="object-fit: cover;">
                                            <img v-show="!info.photo" :src="url + '/default.jpg'" class="img-fluid2 position-float" alt="profile photo" id="profilephoto" style="object-fit: cover;">
                                            <img v-show="info.photo && !prevurl" class="img-fluid2 position-float" :src='url + info.photo' alt="" id="profilephoto" style="object-fit: cover;">
                                        </div>

                                        <div class="col-md-6 text-white" id="classy2">
                                            <div class="row g-3">

                                                <div class="col-md-12"  id="color">
                                                    <div class="form-floating">
                                                        <input type="email" class="form-control bg-transparent" id="email" :value="info.email" placeholder="Email" required>
                                                        <label for="email">Email</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-12" id="color">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control bg-transparent" id="username" :value="info.username" placeholder="Username" required>
                                                        <label for="username">Username</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12" id="color">
                                                    <div v-if="!info.birthdate" class="form-floating">
                                                        <input type="date" minlength="8" class="form-control bg-transparent" id="birthdate" placeholder="Birthdate" required>
                                                        <label for="birthdate">Birthdate</label>
                                                    </div>
                                                    <div v-else class="form-floating">
                                                        <input type="text" minlength="8" class="form-control bg-transparent" id="birthdate" placeholder="Birthdate" :value="info.birthdate" readonly>
                                                        <label for="birthdate">Birthdate</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12" id="color">
                                                    <div class="form-floating">
                                                        <select id="gender" class="form-control bg-transparent" :value="info.gender" name="gender" required>
                                                            <option value="Female">Female</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Others">Others</option>
                                                        </select>
                                                        <label for="gender">Gender</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12"  id="color">
                                                    <div class="form-floating">
                                                        <input type="tel" maxlength="11" class="form-control bg-transparent" id="phone" :value="info.phone" @input="phonecheck()" required>
                                                        <label for="number">Phone Number</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="row g-3">

                                                <div class="col-md-12" id="color">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control bg-transparent" id="first_name" :value="info.first_name" placeholder="First Name" required>
                                                        <label for="fname">First Name</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-12" id="color">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control bg-transparent" id="middle_name" :value="info.middle_name" placeholder="Middle Name">
                                                        <label for="mname">Middle Name</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-12" id="color">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control bg-transparent" id="last_name" :value="info.last_name" placeholder="Last Name" required>
                                                        <label for="lname">Last Name</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-12" id="color">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control bg-transparent" id="address" :value="info.address" placeholder="Address" required>
                                                        <label for="address">Address</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-12" id="color">
                                                    <div class="form-floating">
                                                        <input type="file" class="form-control bg-transparent" id="photo" placeholder="Photo" @change="onFileChange" accept="image/*">
                                                        <label for="photo">Upload New Photo</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-12">
                                        <button class="btn btn-outline-light w-50 py-3" type="submit" >Update Info</button>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-outline-light w-50 py-3">Go Back</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>

</template>
<script>
import axios from 'axios'
export default{
    data(){
        return{
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

            const photo = document.getElementById('photo').files[0];

            let data = new FormData();
            data.append('photo', photo);
            data.append('token', sessionStorage.getItem('jwt'));
            data.append('username', document.getElementById('username').value);
            data.append('email', document.getElementById('email').value);
            data.append('phone', document.getElementById('phone').value);
            data.append('address', document.getElementById('address').value);
            data.append('first_name', document.getElementById('first_name').value);
            data.append('middle_name', document.getElementById('middle_name').value);
            data.append('last_name', document.getElementById('last_name').value);
            data.append('birthdate', document.getElementById('birthdate').value);
            data.append('gender', document.getElementById('gender').value);

            try {
                const tour_info_save = await axios.post("Tourist_Info_Edit", data, config);

                if(tour_info_save.data.msg === 'okay') {
                    this.tourist_info();
                    this.showform();
                    alert('New profile information was changed successfully');
                } else if(tour_info_save.data.msg === 'duplicate email.') {
                    alert('Email not available. Please change your chosen email.');
                } else if(tour_info_save.data.msg === 'duplicate username.') {
                    alert('Username not available. Please change your chosen username.');
                } else if(tour_info_save.data.msg === 'duplicate phone.') {
                    alert('Phone number not available. Please change your chosen phone number.');
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
        clicked(e)
        {
            if(!confirm('Are you sure you want to save your changes? Note: If it\'s your first time creating your profile, please make sure that your birthdate is correct before saving. You can\'t never make any changes on your birthdate after the first Save.')) {
                
            } else {
                this.edit();
            }
        }

    }
}
</script>