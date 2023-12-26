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
                    <button v-if="role_check() && stat_check()" @click="hotelacc()" class="btn main-btn py-3 px-5 mt-2 buttoncolor">Edit Details</button>
                </div>
            </div>

            <div v-if="role_check && !stat_check">
                <div class="back2 marg3">
                <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div>
                        <div class="row g-5 align-items-center">
                        <h1 class="text-white mb-4 text-center" id="classy">Hotel Legitimacy</h1>
                        <form @submit.prevent="hotelverify()">
                        <div class="row g-5 align-items-center">
                            <div class="col-md-6 text-white" id="classy2">
                                <div class="row g-3">
                                    <div class="col-md-12" id="color">
                                            <div class="form-floating">
                                                <input type="text" class="form-control bg-transparent" id="hname" placeholder="hotel/resort name" required>
                                                <label for="hname">Hotel or Resort Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="color">
                                            <div class="form-floating">
                                                <input type="text" class="form-control bg-transparent" id="owner" placeholder="Owner's Name" required>
                                                <label for="owner">Owner's full name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="color">
                                            <div class="form-floating">
                                                <input type="text" class="form-control bg-transparent" id="desc" placeholder="Business Description" required>
                                                <label for="desc">Business Description</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="color">
                                            <div class="form-floating">
                                                <input type="email" class="form-control bg-transparent" id="email" placeholder="Email" required>
                                                <label for="email">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="color">
                                            <div class="form-floating">
                                                <input type="password" minlength="8" class="form-control bg-transparent" id="password" placeholder="Password" required>
                                                <label for="password">Password</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="color">
                                            <div class="form-floating">
                                                <input type="password" minlength="8" class="form-control bg-transparent"  id="c_password" @input="check()" placeholder="Confirm Password" required>
                                                <label for="confirmpassword">Confirm Password</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12"  id="color">
                                            <div class="form-floating">
                                                <input type="tel" maxlength="11" class="form-control bg-transparent" id="number"  @input="phonecheck()" placeholder="Phone Number (09XXXXXXXXX)" required>
                                                <label for="number">Contact Number</label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            <div class="col-md-6" id="classy2">
                                    <div class="row g-3">
                                        <div class="col-md-12" id="color">
                                            <div class="form-floating">
                                                <input type="file" accept=".doc,.docx,.pdf,.jpg,.png,.jpeg," class="form-control bg-transparent" id="insurance" placeholder="Insurance" required>
                                                <label for="insurance">Upload a scanned copy of Insurance</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="color">
                                            <div class="form-floating">
                                                <input type="file" accept=".doc,.docx,.pdf,.jpg,.png,.jpeg," class="form-control bg-transparent" id="assessment" placeholder="Assessment" required>
                                                <label for="assessment">Upload a scanned copy of Self-Assessment Form</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="color">
                                            <div class="form-floating">
                                                <input type="file" accept=".doc,.docx,.pdf,.jpg,.png,.jpeg," class="form-control bg-transparent" id="application" placeholder="Application" required>
                                                <label for="application">Upload a scanned copy of Application Form</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="color">
                                            <div class="form-floating">
                                                <input type="file" accept=".doc,.docx,.pdf,.jpg,.png,.jpeg," class="form-control bg-transparent" id="intent" placeholder="Intent" required>
                                                <label for="intent">Upload a scanned copy of Letter of Intent to Operate</label>
                                            </div>
                                        </div>                              
                                        <div class="col-md-12" id="color">
                                            <div class="form-floating">
                                                <input type="file" accept=".doc,.docx,.pdf,.jpg,.png,.jpeg," class="form-control bg-transparent" id="discharge" placeholder="Discharge" required>
                                                <label for="discharge">Upload a scanned copy of Discharge Permit</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="color">
                                            <div class="form-floating">
                                                <input type="file" accept=".doc,.docx,.pdf,.jpg,.png,.jpeg," class="form-control bg-transparent" id="logo" placeholder="Logo" required>
                                                <label for="logo">Upload logo of business</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="color">
                                            <div class="form-floating">
                                                <input type="file" accept=".doc,.docx,.pdf,.jpg,.png,.jpeg," class="form-control bg-transparent" id="mayor" placeholder="Permit" required>
                                                <label for="permit">Upload a scanned copy of Mayor's Permit</label>
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
                </div>
            </div>
            
            <div v-if="show" class="back3">
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
                                                    <div v-if="info.once" class="form-floating">
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
                                                        <label for="photo" class="pad">Upload New Photo</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-12">
                                        <button class="btn btn-outline-light w-50 py-3" type="submit" >Update Info</button>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-outline-light w-50 py-3" @click="showform()" >Go Back</button>
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
import router from '@/router';
import axios from 'axios'
import Swal from 'sweetalert2';
export default{
    data(){
        return{
            url: "https://pgbooking.online/backend/backend/public",
            info:[],
            show: false,
            prevurl: null,

        }
    },
    created(){
        this.account_info();
        this.role_check();
        this.stat_check();
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
      stat_check() {
        const stat = sessionStorage.getItem('status');
          if(stat == 'VERIFIED')
            return true;
          else {
            return false;
          }
      },
        hotelacc() {
        router.push('/hotelacc');
        },
        async account_info(){
            try {
                const acc_info = await axios.post("Account_Info", {
                    token: sessionStorage.getItem('jwt'),
                });

                if(acc_info.data.msg === 'okay') {
                    this.info = acc_info.data;
                }


            } catch (error) {
                console.log(error);
            }
        },
        async hotelverify() {
            const config = { 
                headers: {
                    'content-type':'multipart/form-data'
                }
            };

            const insurance = document.getElementById('insurance').files[0];
            const assessment = document.getElementById('assessment').files[0];
            const application = document.getElementById('application').files[0];
            const intent = document.getElementById('intent').files[0];
            const discharge = document.getElementById('discharge').files[0];
            const logo = document.getElementById('logo').files[0];
            const mayor = document.getElementById('mayor').files[0];

            let data = new FormData();
            data.append('name', document.getElementById('hname').value);
            data.append('owner', document.getElementById('owner').value);
            data.append('description', document.getElementById('desc').value);
            data.append('email', document.getElementById('email').value);
            data.append('password', document.getElementById('password').value);
            data.append('contact', document.getElementById('number').value);
            data.append('insurance', insurance);
            data.append('assessment', assessment);
            data.append('application', application);
            data.append('intent', intent);
            data.append('discharge', discharge);
            data.append('logo', logo);
            data.append('mayors_permit', mayor);

            try {
                const verify_hotel = await axios.post("Hotel_Verify", data, config);

                if(verify_hotel.data.msg === 'okay') {
                    Swal.fire({
                        title: 'PGBooking:',
                        text: 'Wait to be verified by the admin.',
                        icon: 'info',
                    })
                } else {
                    Swal.fire({
                        title: 'PGBooking:',
                        text: verify_hotel.data.msg,
                        icon: 'info',
                    })
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
                const acc_info_save = await axios.post("Account_Info_Edit", data, config);

                if(acc_info_save.data.msg === 'okay') {
                    this.account_info();
                    this.showform();
                    Swal.fire({
                        title: 'PGBooking:',
                        text: 'New profile information was changed successfully.',
                        icon: 'info',
                    })
                } else if(acc_info_save.data.msg === 'duplicate email.') {
                    Swal.fire({
                        title: 'PGBooking:',
                        text: 'Email is not available. Please change your chosen email.',
                        icon: 'info',
                    })
                } else if(acc_info_save.data.msg === 'duplicate username.') {
                    Swal.fire({
                        title: 'PGBooking:',
                        text: 'Username is not available. Please change your chosen username.',
                        icon: 'info',
                    })
                } else if(acc_info_save.data.msg === 'duplicate phone.') {
                    Swal.fire({
                        title: 'PGBooking:',
                        text: 'Phone number is not available. Please change your chosen number.',
                        icon: 'info',
                    })
                } else {
                    Swal.fire({
                        title: 'PGBooking:',
                        text: acc_info_save.data.msg,
                        icon: 'error',
                    })
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