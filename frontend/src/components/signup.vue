<template>
    <div class="back">
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div>
                <h1 class="text-white mb-4 text-center" id="classy2">Register To PGBooking</h1>
                <form>
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white" id="classy2">
                        <div class="row g-3">
                        <div class="col-md-12"  id="color">
                                <div class="form-floating">
                                        <input type="email" class="form-control bg-transparent" id="email" placeholder="Your Email" required>
                                        <label for="email">Your Email</label>
                                 </div>
                            </div>
                        <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="password" class="form-control bg-transparent" id="password" placeholder="Your Password" required>
                                        <label for="password">Your Password</label>
                                    </div>
                                </div>
                                <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="password" class="form-control bg-transparent" id="confirmpassword" placeholder="Enter Confirm Password" required>
                                        <label for="confirmpassword">Enter Confirm Password</label>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                            <div class="row g-3">
                                <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="username" placeholder="Your Username" required>
                                        <label for="username">Your Username</label>
                                    </div>
                                </div>

                                <div class="col-md-12"  id="color">
                                    <div class="form-floating">
                                        <input type="tel" maxlength="11" pattern="[0][9][0-9]{9}" class="form-control bg-transparent" id="number" placeholder="Your Phone Number (09XXXXXXXXX)" required>
                                        <label for="number">Your Phone Number</label>
                                    </div>
                                </div>

                                <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="address" placeholder="Your Address" required>
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