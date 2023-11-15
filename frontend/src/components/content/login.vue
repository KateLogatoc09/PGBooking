<template>
    <div class="h-100 gradient-form" style="background-color: #eee;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-10">
            <div class="card rounded-3 text-black">
              <div class="row g-0">
                <div class="col-lg-6">
                  <div class="card-body p-md-5 mx-md-4">
                    <div class="text-center">
                      <!-- TODO: ADD THE LOGO HERE -->
                      <!-- <img src="@/assets/assets/images/package-1.jpg" style="width: 185px;" alt="logo"> -->
                      <h4 class="mt-1 mb-5 pb-1">PG Booking</h4>
                    </div>

                    <!-- TODO: ADD NYO NALANG YUNG LOGIN ROUTE DINE -->
                    <!-- TODO: SA FORM ACTION PARA DUN SA PROCESSING NG LOGIN SA BACKEND -->
                    <form action="" method="POST">
                      <p>Please login to your account</p>
                      <div class="form-outline mb-4">
                        <input type="text" name="username" class="form-control" />
                        <label class="form-label" for="username">Username</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="password" name="password" class="form-control" />
                        <label class="form-label" for="password">Password</label>
                      </div>

                      <div class="row text-center pt-1 mb-5 pb-1">
                        <button class="btn btn-primary btn-block fa-lg mb-3" type="submit">Log in</button><br>
                        <a class="text-muted" href="#!">Forgot password?</a>
                        <!-- TODO: DINE ILALAGAY KUNG MAY FORGOT PASSWORD TAYO SA BACKEND -->
                      </div>

                      <div class="row align-items-center justify-content-center pb-4">
                        <p class="mb-0 me-2">Don't have an account?</p>
                        <!-- TODO: DINE ILALAGAY YUNG SA SIGNUP ROUTE KUNG MERON SA HOTEL SIDE -->
                        <button type="button" class="btn btn-block btn-outline-primary">Create new</button>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center background-login" style="background-image: url('@/assets/assets/images/beach.jpg');background-repeat: no-repeat; background-size: cover;">
                  <div class="text-dark px-3 py-4 p-md-5 mx-md-4">
                    <h4 class="mb-4">Puerto Galera: Heart of Asia</h4>
                    <p class="small mb-0">Nestled amidst verdant gardens and overlooking the azure Mindoro Strait, this renowned diving destination provides
                    direct access to vibrant coral reefs, marine life, and shipwrecks. Luxurious villas blend nature with comfort, while the
                    on-site restaurant serves a diverse culinary experience. Committed to sustainability, the resort offers eco-friendly
                    adventures, making it an unforgettable destination for divers and nature enthusiasts alike.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</template>