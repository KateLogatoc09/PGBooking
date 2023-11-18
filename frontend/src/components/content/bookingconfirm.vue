<template>
    <div class="back">
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div>
                <form>
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white" id="classy2">
                        <div class="row g-3">
                            <h1 class="text-white mb-4 text-center" id="classy">Booking Details</h1><br>
                            <h4 class="text-white mb-4 text-center" id="classy2">Hotel: <span class="purple" id="classy2">Filipiniana</span></h4>
                            <h4 class="text-white mb-4 text-center" id="classy2">Room: <span class="purple" id="classy2">Room1</span></h4>
                            <h4 class="text-white mb-4 text-center" id="classy2">Price: <span class="purple" id="classy2">Price</span></h4>
                            <h4 class="text-white mb-4 text-center" id="classy2">Hotel Location: <span class="purple" id="classy2">Daisy Street, Tawiran</span></h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2 class="text-white mb-4 text-center" id="classy">Enter Details</h2>
                            <div class="row g-3">
                                <div class="col-md-12"  id="color">
                                    <div class="form-floating">
                                        <input type="tel" maxlength="50" class="form-control bg-transparent" id="guest" placeholder="Number of Guest" required>
                                        <label for="guest">Number of Guest</label>
                                    </div>
                                </div>

                                <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="datetime-local" class="form-control bg-transparent" id="date" placeholder="Date Schedule" required>
                                        <label for="date">Date Schedule</label>
                                    </div>
                                </div>

                                <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="instructions" placeholder="Specisl Instructions" required>
                                        <label for="instructions">Special Instructions</label>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-outline-light w-50 py-3" type="submit">Book Now</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </div>
</template>