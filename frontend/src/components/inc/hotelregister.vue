<template>
    <div v-if="role_check && !stat_check">
        <div class="back2 marg3">
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div>
                <div class="row g-5 align-items-center">
                <h1 class="text-white mb-4 text-center" id="classy">Register Hotel or Resort</h1>
                <form @submit.prevent="registerhotel()">
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
    <!-- Booking Start -->



    </div>
</template>

<script>
import router from '@/router';
import axios from 'axios';
export default{
    created(){
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
        async registerhotel() {
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
                const reg_hotel = await axios.post("Hotel_Verify", data, config);

                if(reg_hotel.data.msg === 'okay') {
                    alert('Wait to be verified by the admin.');
                } else {
                    alert(reg_hotel.data.msg);
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