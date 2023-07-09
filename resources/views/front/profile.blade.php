@extends("front.layout")
@section("content")
    <!-- Start Page Banner -->
    <div class="page-banner-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>My Profile</h2>
                        <ul>
                            <li>
                                <a href="?page=index_en">Home</a>
                            </li>
                            <li>My Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->
    <section class="profile-area ptb-50">
        <div class="container">
            <div class="row">
                <div class="nav flex-column  col-lg-3 col-sm-12 nav-pills profileMenu " id="v-pills-tab" role="tablist"
                     aria-orientation="vertical">
                    <div class="profileData">
                        <img src="assets/img/teacher/teacher-1.jpg" class="profile-img" alt="">
                        <h5>Ahmed Mohamed</h5>
                    </div>
                    <div class="controlls">
                        <button class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile" type="button" role="tab"
                                aria-controls="v-pills-profile"
                                aria-selected="false"><i class="ri-map-pin-user-fill"></i> Profile Details
                        </button>
                        <button class="nav-link" id="v-pills-donation-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-donation" type="button" role="tab"
                                aria-controls="v-pills-donation"
                                aria-selected="false"><i class="ri-hand-heart-fill"></i> My Appointments
                        </button>
                        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-settings" type="button" role="tab"
                                aria-controls="v-pills-settings"
                                aria-selected="false"><i class="ri-settings-5-fill"></i> Account Settings
                        </button>
                    </div>
                </div>
                <div class="tab-content col-lg-9 col-sm-12 " id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel"
                         aria-labelledby="v-pills-profile-tab">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">Name</th>
                                    <td>Ahmed Mohamed</td>
                                </tr>
                                <tr>
                                    <th scope="row">Email :</th>
                                    <td>ahmed123@mail.com</td>
                                </tr>
                                <tr>
                                    <th scope="row">Booking Counter</th>
                                    <td>15</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-donation" role="tabpanel"
                         aria-labelledby="v-pills-donation-tab">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Appointments Title is short test</td>
                                    <td>22-5-2023</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Appointments Title is short test</td>
                                    <td>22-5-2023</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Appointments Title is short test</td>
                                    <td>22-5-2023</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Appointments Title is short test</td>
                                    <td>22-5-2023</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Appointments Title is short test</td>
                                    <td>22-5-2023</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Appointments Title is short test</td>
                                    <td>22-5-2023</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Appointments Title is short test</td>
                                    <td>22-5-2023</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Appointments Title is short test</td>
                                    <td>22-5-2023</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Appointments Title is short test</td>
                                    <td>22-5-2023</td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>Appointments Title is short test</td>
                                    <td>22-5-2023</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                         aria-labelledby="v-pills-settings-tab">
                        <div class="row pt-40">
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>First Name: </label>
                                    <input class="form-control" type="text" name="firstname" value="Ahmed">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Last Name </label>
                                    <input class="form-control" type="text" name="lastname" value="Mohamed">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Email : </label>
                                    <input class="form-control" type="text" name="name" value="ahmed123@gmail.com">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input class="form-control" type="text" name="text" value="01234567890">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="password" name="password">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Password Again </label>
                                    <input class="form-control" type="password" name="password">
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <button type="button" class="default-btn"> Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
