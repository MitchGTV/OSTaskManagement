@extends('layouts.landing')
@section('content')
    <section class="bg-white pb-8" id="home">
        <div class="container-small hero-header-container px-lg-7 px-xxl-3">
            <div class="row align-items-center">
                <div class="col-12 col-lg-auto order-0 order-md-1 text-end order-1">
                    <div class="position-relative p-5 p-md-7 d-lg-none">
                        <div class="bg-holder" style="background-image:url(../../assets/img/bg/bg-23.png);background-size:contain;"></div>
                        <!--/.bg-holder-->
                        <div class="position-relative"><img class="w-100 shadow-lg d-dark-none rounded-2" src="../../assets/img/bg/bg-31.png" alt="hero-header" /><img class="w-100 shadow-lg d-light-none rounded-2" src="../../assets/img/bg/bg-30.png" alt="hero-header" /></div>
                    </div>
                    <div class="hero-image-container position-absolute top-0 bottom-0 end-0 d-none d-lg-block">
                        <div class="position-relative h-100 w-100">
                            <div class="position-absolute h-100 top-0 d-flex align-items-center end-0 hero-image-container-bg"><img class="pt-7 pt-md-0 w-100" src="../../assets/img/bg/bg-1-2.png" alt="hero-header" /></div>
                            <div class="position-absolute h-100 top-0 d-flex align-items-center end-0"><img class="pt-7 pt-md-0 w-100 shadow-lg d-dark-none rounded-2" src="../../assets/img/bg/bg-28.png" alt="hero-header" /><img class="pt-7 pt-md-0 w-100 shadow-lg d-light-none rounded-2" src="../../assets/img/bg/bg-29.png" alt="hero-header" /></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 text-lg-start text-center pt-8 pb-6 order-0 position-relative">
                    <h1 class="fs-5 fs-lg-6 fs-md-7 fs-lg-6 fs-xl-7 fs fw-black mb-4"><span class="text-primary me-3">Tasks</span>done<br />better for you</h1>
                    <p class="mb-5">Standard, modern and Elegant solution for your next web app so you don’t have to look further. Sign up or check the demo below.</p>
                    <a class="btn btn-lg btn-primary rounded-pill me-3" href="#!" role="button">Sign up</a><a class="btn btn-link me-2 fs-0 p-0 text-decoration-none" href="#!" role="button">Check Demo<span class="fa-solid fa-angle-right ms-2 fs--1"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-5 pt-xl-13 bg-white">
        <div class="container-small px-lg-7 px-xxl-3">
            <div class="row g-0">
                <div class="col-6 col-md-3">
                    <div class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end"><img class="w-100" src="../../assets/img/brand2/netflix-n.png" alt="" /></div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end-md"><img class="w-100" src="../../assets/img/brand2/blender.png" alt="" /></div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end border-end-md"><img class="w-100" src="../../assets/img/brand2/upwork.png" alt="" /></div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end-lg-0"><img class="w-100" src="../../assets/img/brand2/facebook-f.png" alt="" /></div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end border-bottom border-bottom-md-0"><img class="w-100" src="../../assets/img/brand2/pocket.png" alt="" /></div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end-md border-bottom border-bottom-md-0"><img class="w-100" src="../../assets/img/brand2/mail-bluster-1.png" alt="" /></div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end"><img class="w-100" src="../../assets/img/brand2/discord.png" alt="" /></div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end-lg-0"><img class="w-100" src="../../assets/img/brand2/google-g.png" alt="" /></div>
                </div>
            </div>
        </div>
        <!-- end of .container-->
    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->
@endsection
