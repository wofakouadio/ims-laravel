@extends('layouts/super-admin-dashboard')

@section('content')
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <!-- Header -->
            <div class="block block-rounded bg-gd-dusk">
                <div class="block-content bg-white-5">
                    <div class="py-4 text-center">
                        <h1 class="h2 fw-bold text-white mb-2">Dashboard</h1>
                        <h2 class="h5 fw-medium text-white-75">Welcome Admin, create something amazing!</h2>
                    </div>
                </div>
            </div>
            <!-- END Header -->

            <!-- Quick Stats -->
            <h2 class="content-heading">
                <i class="fa fa-chart-line opacity-50 opacity-50 me-1"></i> Quick Stats
            </h2>
            <div class="row items-push">
                <div class="col-6 col-md-4 col-xl-2">
                    <a class="block block-rounded block-link-pop text-center h-100 mb-0" href="javascript:void(0)">
                        <div class="block-content">
                            <p class="fs-2 fw-bold mb-1">
                                105
                            </p>
                            <p class="fs-sm fw-semibold text-muted">
                                Sales/Week
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <a class="block block-rounded block-link-pop text-center h-100 mb-0" href="javascript:void(0)">
                        <div class="block-content">
                            <p class="fs-2 fw-bold mb-1">
                                58.25
                            </p>
                            <p class="fs-sm fw-semibold text-muted">
                                MB/s
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <a class="block block-rounded block-link-pop text-center h-100 mb-0" href="javascript:void(0)">
                        <div class="block-content">
                            <p class="fs-2 fw-bold mb-1">
                                $983
                            </p>
                            <p class="fs-sm fw-semibold text-muted">
                                Earnings
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <a class="block block-rounded block-link-pop text-center h-100 mb-0" href="javascript:void(0)">
                        <div class="block-content">
                            <p class="fs-2 fw-bold mb-1">
                                21
                            </p>
                            <p class="fs-sm fw-semibold text-muted">
                                Messages
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <a class="block block-rounded block-link-pop text-center h-100 mb-0" href="javascript:void(0)">
                        <div class="block-content">
                            <p class="fs-2 fw-bold mb-1">
                                12
                            </p>
                            <p class="fs-sm fw-semibold text-muted">
                                Products
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <a class="block block-rounded block-link-pop text-center h-100 mb-0" href="javascript:void(0)">
                        <div class="block-content">
                            <p class="fs-2 fw-bold mb-1">
                                36
                            </p>
                            <p class="fs-sm fw-semibold text-muted">
                                Tickets
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <!-- END Quick Stats -->

            <!-- Latest Projects -->
            <h2 class="content-heading">
                <i class="fa fa-briefcase text-muted opacity-50 me-1"></i> Latest Projects
            </h2>
            <div class="row items-push">
                <div class="col-md-6 col-xl-3">
                    <a class="block block-link-shadow block-rounded ribbon ribbon-modern ribbon-primary text-center h-100 mb-0" href="javascript:void(0)">
                        <div class="ribbon-box">$14</div>
                        <div class="block-content block-content-full">
                            <div class="item item-circle bg-pulse text-pulse-lighter mx-auto my-3">
                                <i class="fab fa-html5"></i>
                            </div>
                            <div class="text-warning mb-1">
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                            </div>
                            <div class="fs-sm fw-medium text-muted">
                                258 reviews
                            </div>
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <div class="fs-sm fw-medium text-muted">10 lessons • 5 hours</div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="fw-semibold">Learn HTML5 in 10 easy steps</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-3">
                    <a class="block block-link-shadow block-rounded ribbon ribbon-modern ribbon-primary text-center h-100 mb-0" href="javascript:void(0)">
                        <div class="ribbon-box">$29</div>
                        <div class="block-content block-content-full">
                            <div class="item item-circle bg-info text-info-light mx-auto my-3">
                                <i class="fab fa-css3"></i>
                            </div>
                            <div class="text-warning mb-1">
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                            </div>
                            <div class="fs-sm fw-medium text-muted">
                                75 reviews
                            </div>
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <div class="fs-sm fw-medium text-muted">15 lessons • 11 hours</div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="fw-semibold">Be a pro with CSS3 in one week</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-3">
                    <a class="block block-link-shadow block-rounded ribbon ribbon-modern ribbon-primary text-center h-100 mb-0" href="javascript:void(0)">
                        <div class="ribbon-box">$24</div>
                        <div class="block-content block-content-full">
                            <div class="item item-circle bg-corporate text-corporate-lighter mx-auto my-3">
                                <i class="fa fa-video"></i>
                            </div>
                            <div class="text-warning mb-1">
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star-half-alt"></i>
                            </div>
                            <div class="fs-sm fw-medium text-muted">
                                985 reviews
                            </div>
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <div class="fs-sm fw-medium text-muted">8 lessons • 3 hours</div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="fw-semibold">Be a Youtuber today</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-3">
                    <a class="block block-link-shadow block-rounded ribbon ribbon-modern ribbon-primary text-center h-100 mb-0" href="javascript:void(0)">
                        <div class="ribbon-box">$14</div>
                        <div class="block-content block-content-full">
                            <div class="item item-circle bg-elegance text-elegance-lighter mx-auto my-3">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <div class="text-warning mb-1">
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star-half-alt"></i>
                            </div>
                            <div class="fs-sm fw-medium text-muted">
                                325 reviews
                            </div>
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <div class="fs-sm fw-medium text-muted">25 lessons • 17 hours</div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="fw-semibold">Marketing Tips 101</div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- END Latest Projects -->

            <!-- Top Contributors -->
            <h2 class="content-heading">
                <i class="fa fa-star text-muted opacity-50 me-1"></i> Top Contributors
            </h2>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <img class="img-avatar" src="assets/media/avatars/avatar2.jpg" alt="">
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <div class="fw-semibold mb-1">Melissa Rice</div>
                            <div class="fs-sm fw-medium text-muted">Photographer</div>
                        </div>
                        <div class="block-content">
                            <div class="row items-push text-center">
                                <div class="col-6">
                                    <div class="mb-2"><i class="si si-wallet fa-2x"></i></div>
                                    <div class="fs-sm fw-medium text-muted">$3.090</div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2"><i class="si si-trophy fa-2x"></i></div>
                                    <div class="fs-sm fw-medium text-muted">4 Awards</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-3">
                    <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <img class="img-avatar" src="assets/media/avatars/avatar8.jpg" alt="">
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <div class="fw-semibold mb-1">Danielle Jones</div>
                            <div class="fs-sm fw-medium text-muted">Copywriter</div>
                        </div>
                        <div class="block-content">
                            <div class="row items-push text-center">
                                <div class="col-6">
                                    <div class="mb-2"><i class="si si-briefcase fa-2x"></i></div>
                                    <div class="fs-sm fw-medium text-muted">35 Projects</div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2"><i class="si si-users fa-2x"></i></div>
                                    <div class="fs-sm fw-medium text-muted">350 Users</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-3">
                    <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <img class="img-avatar" src="assets/media/avatars/avatar10.jpg" alt="">
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <div class="fw-semibold mb-1">Jesse Fisher</div>
                            <div class="fs-sm fw-medium text-muted">Web Designer</div>
                        </div>
                        <div class="block-content">
                            <div class="row items-push text-center">
                                <div class="col-6">
                                    <div class="mb-2"><i class="si si-badge fa-2x"></i></div>
                                    <div class="fs-sm fw-medium text-muted">8 Badges</div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2"><i class="si si-wallet fa-2x"></i></div>
                                    <div class="fs-sm fw-medium text-muted">$3.100</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-3">
                    <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <img class="img-avatar" src="assets/media/avatars/avatar12.jpg" alt="">
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <div class="fw-semibold mb-1">Ryan Flores</div>
                            <div class="fs-sm fw-medium text-muted">Web Developer</div>
                        </div>
                        <div class="block-content">
                            <div class="row items-push">
                                <div class="col-6">
                                    <div class="mb-2"><i class="si si-notebook fa-2x"></i></div>
                                    <div class="fs-sm fw-medium text-muted">4 Notes</div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2"><i class="si si-camera fa-2x"></i></div>
                                    <div class="fs-sm fw-medium text-muted">14 Photos</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- END Top Contributors -->
        </div>
        <!-- END Page Content -->
    </main>
@endsection
