@extends('layouts.app')

@section('content')
   <!-- hero start -->
    <div class="hero" style="background-image: url({{ asset('img/hero.jpg') }});">        
        <div class="hero-cover">   
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <p class='hero-text'>
                        <span class='f-color'>music</span> is the language that united the <span class='f-color'>world</span>
                        </p>
                        <div class="d-flex">
                            <button class="btn login-btn">Start Learning</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero End -->
    <!-- oud lesson start -->
    <div class="oud-lesson py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <div class="lesson-overveiw">
                        <h2 span class="f-color">Make your dream true by learning <span class="f-color">oud</span></h2>
                        <p class='course-desc'>Quisque velit nisi, pretium ut lacinia in, elementum id enim</p>
                        <p class="course-desc my-3">
                            Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Curabitur aliquet quam id dui posuere blandit. Nulla porttitor accumsan tincidunt.
                        </p>
                    <button class="btn login-btn">See more</button>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 player-1">
                    <img src={{ asset('img/Rectangle_26.png') }} alt="">
              
                </div>  
            </div>
        </div>
    </div>
    <!-- oud lesson end -->

    <!-- vocal lesson start -->
    <div class="oud-lesson " style="background-image: url({{ asset('img/vocal.png') }});" >
        <div class="vocal-cover py-5">   
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 player-1">
                            <img src={{ asset('img/Rectangle_27.png') }} alt="">
                    </div>
                    
                    <div class="col-lg-7 col-md-12">
                        <div class="lesson-overveiw">
                            <h2 span class="f-color">Make your dream true by learning <span class="f-color">Vocal</span></h2>
                            <p class='course-desc'>Quisque velit nisi, pretium ut lacinia in, elementum id enim</p>
                            <p class="course-desc my-3">
                                Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Curabitur aliquet quam id dui posuere blandit. Nulla porttitor accumsan tincidunt.
                            </p>
                        <button class="btn login-btn">See more</button>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <!-- vocal lesson end -->

    <!-- instrument -->
        <div class="instrument py-5">
            <div class="container">
                <div class="row">
                    <h4 class='text-center'>Buy Your Instroment </h4>
                    <div class="col-md-6">
                        <div class="instrument-card d-flex my-3">
                            <div class="card-image">
                                <img src={{ asset('img/Rectangle_28.png') }} alt="">
                            </div>
                            <div class="card-info mt-3 mx-2"><p>
                                    Hafiz Ibrahem .................. <span class='text-end'>$19.88</span>
                                </p>
                                <p class="white-desc" style="color:white !important;">
                                    Lorem ipsum dolor sit amet.
                                </p>
                            </div>
                        </div>
                        <div class="instrument-card d-flex my-3">
                            <div class="card-image">
                                <img src={{ asset('img/Rectangle_28.png') }} alt="">
                            </div>
                            <div class="card-info mt-3 mx-2"><p>
                                    Hafiz Ibrahem .................. <span class='text-end'>$19.88</span>
                                </p>
                                <p class="white-desc" style="color:white !important;">
                                    Lorem ipsum dolor sit amet.
                                </p>
                            </div>
                        </div>
                        <div class="instrument-card d-flex my-3">
                            <div class="card-image">
                                <img src={{ asset('img/Rectangle_28.png') }} alt="">
                            </div>
                            <div class="card-info mt-3 mx-2"><p>
                                    Hafiz Ibrahem .................. <span class='text-end'>$19.88</span>
                                </p>
                                <p class="white-desc" style="color:white !important;">
                                    Lorem ipsum dolor sit amet.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="instrument-card d-flex my-3">
                            <div class="card-image">
                                <img src={{ asset('img/Rectangle_28.png') }} alt="">
                            </div>
                            <div class="card-info mt-3 mx-2"><p>
                                    Hafiz Ibrahem .................. <span class='text-end'>$19.88</span>
                                </p>
                                <p class="white-desc" style="color:white !important;">
                                    Lorem ipsum dolor sit amet.
                                </p>
                            </div>
                        </div>
                        <div class="instrument-card d-flex my-3">
                            <div class="card-image">
                                <img src={{ asset('img/Rectangle_28.png') }} alt="">
                            </div>
                            <div class="card-info mt-3 mx-2"><p>
                                    Hafiz Ibrahem .................. <span class='text-end'>$19.88</span>
                                </p>
                                <p class="white-desc" style="color:white !important;">
                                    Lorem ipsum dolor sit amet.
                                </p>
                            </div>
                        </div>
                        <div class="instrument-card d-flex my-3">
                            <div class="card-image">
                                <img src={{ asset('img/Rectangle_28.png') }} alt="">
                            </div>
                            <div class="card-info mt-3 mx-2"><p>
                                    Hafiz Ibrahem .................. <span class='text-end'>$19.88</span>
                                </p>
                                <p class="white-desc" style="color:white !important;">
                                    Lorem ipsum dolor sit amet.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- end instrument -->

    
    <!-- happy student start -->
    <div class="happy-student" style="background-image: url({{ asset('img/vocal.png') }});" >
        <div class="vocal-cover py-5">   
            <div class="container">
                <div class="row">
                    <h4 class='text-center'>Our Happy Student</h4>
                    <div class="col-md-4 my-5">
                        <div class="review-card p-5 ">
                            <p class='color-white'>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio nihil id soluta animi ipsam dolor odit exercitationem eveniet et. Animi.</p>
                        </div>
                        <div class="reviw-image">
                            <img src={{ asset('img/Rectangle_28.png') }} alt="">
                            <p class='color-white my-1 student-name'>Omar Bashir
                                <br><span class='student-level mx-4'>Lorem</span>
                            </p>
                            
                        </div>
                    </div>
                    <div class="col-md-4 my-5">
                        <div class="review-card p-5 ">
                            <p class='color-white'>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio nihil id soluta animi ipsam dolor odit exercitationem eveniet et. Animi.</p>
                        </div>
                        <div class="reviw-image">
                            <img src={{ asset('img/Rectangle_28.png') }} alt="">
                            <p class='color-white my-1 student-name'>Omar Bashir
                                <br><span class='student-level mx-4'>Lorem</span>
                            </p>
                            
                        </div>
                    </div>
                    <div class="col-md-4 my-5">
                        <div class="review-card p-5 ">
                            <p class='color-white'>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio nihil id soluta animi ipsam dolor odit exercitationem eveniet et. Animi.</p>
                        </div>
                        <div class="reviw-image">
                            <img src={{ asset('img/Rectangle_28.png') }} alt="">
                            <p class='color-white my-1 student-name'>Omar Bashir
                                <br><span class='student-level mx-4'>Lorem</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- happy student end -->
    <!-- start teachers -->

    <div class="oud-teachers py-5">
        <div class="container">
            <div class="row">
                    <h4 class='text-center'>Our professional teachers</h4>
                    <div class="col-md-4 my-5 teacher-card">
                        <div class="review-card p-2 ">
                            <img src={{ asset('img/Rectangle_27.png') }} alt="">
                            
                        </div>
                        <div class="reviw-image">
                            <p class='color-white my-1 student-name'>Omar Bashir
                                <br><span class='student-level mx-4 teacher-desc'><p class='teacher-desc'>
                                    courses : 16
                                    level : pro

                                </p></span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 my-5 teacher-card">
                        <div class="review-card p-2 ">
                            <img src={{ asset('img/Rectangle_27.png') }} alt="">
                            
                        </div>
                        <div class="reviw-image">
                            <p class='color-white my-1 student-name'>Omar Bashir
                                <br><span class='student-level mx-4 teacher-desc'><p class='teacher-desc'>
                                    courses : 16
                                    level : pro

                                </p></span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 my-5 teacher-card">
                        <div class="review-card p-2 ">
                            <img src={{ asset('img/Rectangle_27.png') }} alt="">
                            
                        </div>
                        <div class="reviw-image">
                            <p class='color-white my-1 student-name'>Omar Bashir
                                <br><span class='student-level mx-4 teacher-desc'><p class='teacher-desc'>
                                    courses : 16
                                    level : pro

                                </p></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end teachers -->

     <!-- start footer -->
            <footer >
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 ">
                            <div class="lo"><img src="images/logo.png" alt="logo"></div>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices..</p>

                        </div>
                        <div class="col-md-6 col-lg-4 edit">
                            <div class="section-title">
                                <div class="dash"></div>
                                <h5>Treding course</h5>
                            </div>
                            <div class="trending-item">
                                <div class="row">
                                    <div class="ti-pic col-12 col-lg-6">
                                        <img src="images/trending/editor-1.jpg" alt="">
                                    </div>
                                    <div class="ti-text col-12 col-lg-6">
                                        <h6><a href="#">A MONSTER PROM POSTER GOT HIJACKED FOR A PAPA ROACH CONCERT...</a>
                                        </h6>
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-clock"></i> Aug 01, 2019</li>
                                            <li><i class="fa fa-comment"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="trending-item">
                                <div class="row">
                                    <div class="ti-pic col-12 col-lg-6">
                                        <img src="images/trending/editor-2.jpg" alt="">
                                    </div>
                                    <div class="ti-text col-12 col-lg-6">
                                        <h6><a href="#">A MONSTER PROM POSTER GOT HIJACKED FOR A PAPA ROACH CONCERT...</a>
                                        </h6>
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-clock"></i> Aug 01, 2019</li>
                                            <li><i class="fa fa-comment"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 col-lg-4 tag">
                            <div class="section-title">
                                <div class="dash"></div>
                                <h5>Treding Note</h5>
                            </div>
                            <div class="tag-list">
                                <a href="#"><span>um kalthom</span></a>
                                <a href="#"><span>Abd alhalim</span></a>
                                <a href="#"><span>Warda</span></a>
                                <a href="#"><span>naser</span></a>
                                <a href="#"><span>george</span></a>
                            </div>
                    </div>
                </div>
                </div>
                <p class="lead text-center">Designed by geogre</p>
            </footer>
      <!-- end footer -->
@endsection
