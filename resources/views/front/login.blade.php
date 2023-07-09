@extends("front.layout")
@section("content")
    <!-- Start Page Banner -->
    <div class="page-banner-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>Login</h2>
                        <ul>
                            <li>
                                <a href="?page=index_en">Home</a>
                            </li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->
    <!-- Start Login Area -->
    <section class="login-area ptb-50">
        <div class="container">
            <div class="login-form">
                <h2>Login</h2>

                <form>
                    <div class="form-group">
                        <label>Email or phone</label>
                        <input type="text" class="form-control" placeholder="Email or phone">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" placeholder="Password">
                    </div>

                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkme">
                                <label class="form-check-label" for="checkme">Remember me</label>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 lost-your-password">
                            <a href="?page=forgetpassword" class="lost-your-password">Forgot your password?</a>
                        </div>
                    </div>

                    <!-- <button type="submit">Login</button> -->
                    <a href="?page=profile" class="loginbtn">Login</a>
                </form>

                <div class="important-text">
                    <p>Don't have an account? <a href="?page=register">Create An Account Now!</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Login Area -->
@endsection
