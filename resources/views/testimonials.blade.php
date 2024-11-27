@extends('layout.master')
@section('content')
    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
       @include('layout.header')

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Testimonial</h1>
                    <a href="" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Testimonial</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>
                <h1 class="mb-0">What Our Clients Say About Our Digital Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp owl-loaded owl-drag" data-wow-delay="0.6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                
                
                
                
            <div class="owl-stage-outer"><div class="owl-stage" style="transition: all 1.5s ease 0s; width: 3720px; transform: translate3d(-1488px, 0px, 0px);"><div class="owl-item cloned" style="width: 372px;"><div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div></div><div class="owl-item cloned" style="width: 372px;"><div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div></div><div class="owl-item cloned" style="width: 372px;"><div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-4.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div></div><div class="owl-item" style="width: 372px;"><div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div></div><div class="owl-item active" style="width: 372px;"><div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div></div><div class="owl-item active center" style="width: 372px;"><div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div></div><div class="owl-item active" style="width: 372px;"><div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-4.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div></div><div class="owl-item cloned" style="width: 372px;"><div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div></div><div class="owl-item cloned" style="width: 372px;"><div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div></div><div class="owl-item cloned" style="width: 372px;"><div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div></div></div></div><div class="owl-nav disabled"><div class="owl-prev">prev</div><div class="owl-next">next</div></div><div class="owl-dots"><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel owl-loaded owl-drag">
                    
                    
                    
                    
                    
                    
                    
                    
                    
                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1451px, 0px, 0px); transition: all 1s ease 0s; width: 3629px;"><div class="owl-item cloned" style="width: 100.125px; margin-right: 45px;"><img src="img/vendor-2.jpg" alt=""></div><div class="owl-item cloned" style="width: 100.125px; margin-right: 45px;"><img src="img/vendor-3.jpg" alt=""></div><div class="owl-item cloned" style="width: 100.125px; margin-right: 45px;"><img src="img/vendor-4.jpg" alt=""></div><div class="owl-item cloned" style="width: 100.125px; margin-right: 45px;"><img src="img/vendor-5.jpg" alt=""></div><div class="owl-item cloned" style="width: 100.125px; margin-right: 45px;"><img src="img/vendor-6.jpg" alt=""></div><div class="owl-item cloned" style="width: 100.125px; margin-right: 45px;"><img src="img/vendor-7.jpg" alt=""></div><div class="owl-item cloned" style="width: 100.125px; margin-right: 45px;"><img src="img/vendor-8.jpg" alt=""></div><div class="owl-item cloned" style="width: 100.125px; margin-right: 45px;"><img src="img/vendor-9.jpg" alt=""></div><div class="owl-item" style="width: 100.125px; margin-right: 45px;"><img src="img/vendor-1.jpg" alt=""></div><div class="owl-item" style="width: 100.125px; margin-right: 45px;"><img src="img/vendor-2.jpg" alt=""></div><div class="owl-item active" style="width: 100.125px; margin-right: 45px;"><img src="img/vendor-3.jpg" alt=""></div><div class="owl-item active" style="width: 100.125px; margin-right: 45px;"><img src="img/vendor-4.jpg" alt=""></div><div class="owl-item active" style="width: 100.125px; margin-right: 45px;"><img src="img/vendor-5.jpg" alt=""></div><div class="owl-item active" style="width: 100.125px; margin-right: 45px;"><img src="img/vendor-6.jpg" alt=""></div><div class="owl-item active" style="width: 100.125px; margin-right: 45px;"><img src="img/vendor-7.jpg" alt=""></div><div class="owl-item active" style="width: 100.125px; margin-right: 45px;"><img src="img/vendor-8.jpg" alt=""></div><div class="owl-item active" style="width: 100.125px; margin-right: 45px;"><img src="img/vendor-9.jpg" alt=""></div><div class="owl-item cloned active" style="width: 100.125px; margin-right: 45px;"><img src="img/vendor-1.jpg" alt=""></div><div class="owl-item cloned" style="width: 100.125px; margin-right: 45px;"><img src="img/vendor-2.jpg" alt=""></div><div class="owl-item cloned" style="width: 100.125px; margin-right: 45px;"><img src="img/vendor-3.jpg" alt=""></div><div class="owl-item cloned" style="width: 100.125px; margin-right: 45px;"><img src="img/vendor-4.jpg" alt=""></div><div class="owl-item cloned" style="width: 100.125px; margin-right: 45px;"><img src="img/vendor-5.jpg" alt=""></div><div class="owl-item cloned" style="width: 100.125px; margin-right: 45px;"><img src="img/vendor-6.jpg" alt=""></div><div class="owl-item cloned" style="width: 100.125px; margin-right: 45px;"><img src="img/vendor-7.jpg" alt=""></div><div class="owl-item cloned" style="width: 100.125px; margin-right: 45px;"><img src="img/vendor-8.jpg" alt=""></div></div></div><div class="owl-nav disabled"><div class="owl-prev">prev</div><div class="owl-next">next</div></div><div class="owl-dots disabled"></div></div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
   
@endsection