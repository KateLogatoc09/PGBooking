<template>
        <!-- New User Information Form -->
            <div class="container high">
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <div class="card">
                            <div class="card-header">
                                <h3>List of Hotels</h3>
                            </div>
                            <div class="card-body over">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Hotel Name</th>
                                            <th>Owner's Name</th>
                                            <th>Email</th>
                                            <th>Description</th>
                                            <th>Number</th>
                                            <th>Application Form</th>
                                            <th>Insurance Form</th>
                                            <th>Self-Assessment Form</th>
                                            <th>Letter of Intent</th>
                                            <th>Discharge Permit</th>
                                            <th>Mayor's Permit</th>
                                            <th>Logo</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td>ID</td>
                                                <td>Hotel Name</td>
                                                <td>Owner's Name</td>
                                                <td>Email</td>
                                                <td>Description</td>
                                                <td>Number</td>
                                                <td>App Form</td>
                                                <td>Insurance</td>
                                                <td>Self-Assessment Form</td>
                                                <td>Letter of Intent</td>
                                                <td>Discharge Permit</td>
                                                <td>Mayor's Permit</td>
                                                <td>Logo</td>
                                                <td>Status</td>
                                                <td>
                                                <a href="#" class='btn btn-primary'>Update</a><br><br>
                                                <a href="#" class='btn btn-danger'>Delete</a>
                                                </td>
                                            </tr>
                                    </tbody>
                                </table>  
                            </div>         
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h3>Hotels Accounts</h3>
                            </div>
                            <div class="card-body over">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Number</th>
                                            <th>Address</th>
                                            <th>Description</th>
                                            <th>Facebook</th>
                                            <th>Tiktok</th>
                                            <th>Instagram</th>
                                            <th>Youtube</th>
                                            <th>Ratings</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td>ID</td>
                                                <td>Name</td>
                                                <td>Email</td>
                                                <td>Number</td>
                                                <td>Address</td>
                                                <td>Description</td>
                                                <td>Facebook</td>
                                                <td>Tiktok</td>
                                                <td>Instagram</td>
                                                <td>Youtube</td>
                                                <td>Ratings</td>
                                                <td>
                                                <a href="#" class='btn btn-primary'>Update</a><br><br>
                                                <a href="#" class='btn btn-danger'>Delete</a>
                                                </td>
                                            </tr>
                                    </tbody>
                                </table>  
                            </div>         
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h3>List of Tourists/Users</h3>
                            </div>
                            <div class="card-body over">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Email</th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>Number</th>
                                            <th>Address</th>
                                            <th>Birthdate</th>
                                            <th>Gender</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td>ID</td>
                                                <td>Email</td>
                                                <td>Name</td>
                                                <td>Name</td>
                                                <td>Name</td>
                                                <td>Number</td>
                                                <td>Address</td>
                                                <td>Birthdate</td>
                                                <td>Gender</td>
                                                <td>Status</td>
                                                <td>
                                                <a href="#" class='btn btn-primary'>Update</a><br><br>
                                                <a href="#" class='btn btn-danger'>Delete</a>
                                                </td>
                                            </tr>
                                    </tbody>
                                </table>  
                            </div>         
                        </div>
                        
                    </div>
                </div>
            </div>
    <!-- End of User Information Form -->

    <!-- form start -->
    <div class="container-xxl py-5 wow fadeInUp back4" data-wow-delay="0.1s">
    <div class="container">
            <div>
                <div class="row g-5 align-items-center">
                <h1 class="text-white mb-4 text-center" id="classy">Edit Hotel</h1>
                <form>
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white" id="classy2">
                        <div class="row g-3">
                            <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="status" placeholder="Status" required>
                                        <label for="status">Status</label>
                                    </div>
                                </div>   
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
                                <div class="col-md-12"  id="color">
                                    <div class="form-floating">
                                        <input type="tel" maxlength="11" class="form-control bg-transparent" id="number" placeholder="Phone Number (09XXXXXXXXX)" required>
                                        <label for="number">Contact Number</label>
                                    </div>
                                </div>
                                <div class="col-md-12" id="color">
                                    <div class="form-floating">
                                        <input type="file" accept=".doc,.docx,.pdf,.jpg,.png,.jpeg," class="form-control bg-transparent" id="logo" placeholder="Logo" required>
                                        <label for="logo">Upload logo of business</label>
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
                                        <input type="file" accept=".doc,.docx,.pdf,.jpg,.png,.jpeg," class="form-control bg-transparent" id="mayor" placeholder="Permit" required>
                                        <label for="permit">Upload a scanned copy of Mayor's Permit</label>
                                    </div>
                                </div>
                    </div>

                    </div>
                    <div class="col-12">
                        <button class="btn btn-outline-light w-50 py-3" type="submit">Edit</button>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-outline-light w-50 py-3" type="submit">Go Back</button>
                    </div>
                </div>
            </form>
            </div>
            </div>
        </div>
    </div>

    <!-- form end -->
  </template>
  