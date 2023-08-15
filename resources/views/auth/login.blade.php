@extends('layouts/authlogin')

@section('content')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="bg-body-dark">
            <div class="row mx-0 justify-content-center">
                <div class="hero-static col-lg-6 col-xl-4">
                    <div class="content content-full overflow-hidden">
                        <!-- Header -->
                        <div class="py-4 text-center">
                            <a class="link-fx fw-bold" href="/">
                                <i class="fa fa-cart-shopping"></i>
                                <span class="fs-4 text-body-color text-uppercase">Inventory Management System | </span><span class="fs-4">IMS</span>
                            </a>
                        </div>
                        <!-- END Header -->

                        <!-- Sign In Form -->
                        <form class="js-validation-signin" action="" method="POST">
                            @csrf
                            <div class="block block-themed block-rounded block-fx-shadow">
                                <div class="block-header bg-gd-dusk">
                                    <h3 class="block-title">Please Sign In</h3>
                                </div>
                                <div class="block-content">
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" id="login-username" name="login-username" placeholder="Enter your username">
                                        <label class="form-label" for="login-username">Username</label>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <input type="password" class="form-control" id="login-password" name="login-password" placeholder="Enter your password">
                                        <label class="form-label" for="login-password">Password</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 d-sm-flex align-items-center push">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="login-remember-me" name="login-remember-me">
                                                <label class="form-check-label" for="login-remember-me">Remember Me</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-sm-end push">
                                            <button type="submit" class="btn btn-lg btn-alt-primary fw-medium">
                                                Sign In
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content block-content-full bg-body-light text-center d-flex justify-content-between">
                                    <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block" href="https://wofakouadio.github.io">Francis Bennett</a>
                                    <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block">
                                        &copy All reserved | IMS | {{date('Y')}} | v 1.0
                                    </a>
                                </div>
                            </div>
                        </form>
                        <!-- END Sign In Form -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
@endsection

