@extends('front-end.layouts.main')
@section('content')
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-6 col-6 " style="text-align: left">
                    <!-- logo -->
                    <div class="logo" style="height: 25px; display: flex; align-items: center;">
                        <a href="index.html"><img style="border-radius: 80%;" src="{{ asset('images/logo.webp') }}"
                                height="20" width="20" alt="logo" /></a>
                        <span style="margin-left: 10px">Feasts Farms</span>
                    </div>
                </div>
                <!-- logo -->
                <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">

                    <!-- /.navigation start-->
                    @include('front-end.layouts.header')
                    <!-- navigation end --->
                </div>

                <!-- /.search start-->
            </div>
        </div>
    </div>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/2.webp') }}" alt="Description of the image" class="img-fluid"
                    style="border-radius: 5px" />
            </div>

            <div class="col-md-6">
                <div class="content">
                    <h1 class="content-title">FEASTS FARMS App</h1>
                    <p class="content-text">
                        Welcome to the Feasts Farms App, a pioneering platform dedicated to transforming agriculture and
                        agribusiness in Uganda. Our comprehensive application addresses critical farming challenges,
                        offering accessible and efficient solutions to agripreneurs across the country. Our platform not
                        only meets the immediate needs of Uganda's agricultural sector but also aligns with global
                        agribusiness trends, positioning itself as an ideal solution for the development and support of
                        farmers and agricultural enterprises within the country.
                    </p>

                    <a href="#" class="mr20"><img src="images/app-store-img.png" alt="" /></a>
                    <a href="#" class="mr20"><img src="images/google-play-img.png" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <div class="rate-table">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="rate-counter-block">
                        <div class="icon rate-icon">
                            <i class="fa fa-tractor"></i> <!-- Icon representing active farms -->
                        </div>
                        <div class="rate-box">
                            <h1 class="loan-rate">75%</h1>
                            <small class="rate-title">Active Farms</small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="rate-counter-block">
                        <div class="icon rate-icon">
                            <i class="fa fa-briefcase"></i> <!-- Icon representing employment opportunities -->
                        </div>
                        <div class="rate-box">
                            <h1 class="loan-rate">85%</h1>
                            <small class="rate-title">Job opportunities</small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="rate-counter-block">
                        <div class="icon rate-icon">
                            <i class="fa fa-users"></i> <!-- Icon representing farm management -->
                        </div>
                        <div class="rate-box">
                            <h1 class="loan-rate">60%</h1>
                            <small class="rate-title">Farm Management</small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="rate-counter-block">
                        <div class="icon rate-icon">
                            <i class="fa fa-layer-group"></i> <!-- Icon representing current districts -->
                        </div>
                        <div class="rate-box">
                            <h1 class="loan-rate">90%</h1>
                            <small class="rate-title">Current Districts</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section-space80 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-title text-center">
                        <h2>Solutions Overview</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="hover-tabs st-tabs">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab-1" data-toggle="tab" href="#service1" role="tab"
                                    aria-controls="service1" aria-selected="true">Farm Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-2" data-toggle="tab" href="#service2" role="tab"
                                    aria-controls="service2" aria-selected="false">Employment Opportunities</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-3" data-toggle="tab" href="#service3" role="tab"
                                    aria-controls="service3" aria-selected="false">Business Development</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="service1">
                                <div class="row align-items-center">
                                    <div class="col-xl-6">
                                        <div class="mb-4">
                                            <h3>Farm Details</h3>
                                            <p>
                                                Explore detailed information about farms registered with FEASTSFARMS,
                                                including their size, location, and the types of livestock and crops they
                                                manage.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <img src="assets/images/farm-details.png" alt="Farm Details" class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="service2">
                                <div class="row align-items-center">
                                    <div class="col-xl-6">
                                        <div class="mb-4">
                                            <h3>Employment Opportunities</h3>
                                            <p>
                                                Discover job openings within the agricultural sector posted by
                                                agripreneurs. Apply directly through FEASTSFARMS to connect with exciting
                                                career opportunities.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <img src="assets/images/employment-opportunities.png"
                                            alt="Employment Opportunities" class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="service3">
                                <div class="row align-items-center">
                                    <div class="col-xl-6">
                                        <div class="mb-4">
                                            <h3>Business Development</h3>
                                            <p>
                                                Access essential services and resources for agribusiness growth and
                                                sustainability. FEASTSFARMS provides tools and guidance to enhance business
                                                development within the agricultural sector.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <img src="assets/images/business-development.png" alt="Business Development"
                                            class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-space80">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-md-2 col-md-8 offset-sm-0 col-sm-12 col-12">
                    <div class="mb60 text-center section-title">
                        <h1>Key Features of Feasts Farms</h1>
                        <p>Explore the essential modules offered by FEASTS FARMS to manage and enhance agricultural
                            operations.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="service" id="service">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="bg-white pinside40 service-block outline mb30">
                            <div class="icon mb40"> <i style="font-size: 60px" class="fas fa-users"></i> </div>
                            <h2><a href="#" class="title">Labor Management</a></h2>
                            <p>Streamline workforce scheduling, tasks assignment, and payroll within your farm operations.
                            </p>
                            <a href="#" class="btn-link">Read More</a>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="bg-white pinside40 service-block outline mb30">
                            <div class="icon mb40"> <i style="font-size: 60px" class="fas fa-chart-line"></i> </div>
                            <h2><a href="#" class="title">Finance Management</a></h2>
                            <p>Track income, expenses, and investments to ensure financial health and sustainability.</p>
                            <a href="#" class="btn-link">Read More</a>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="bg-white pinside40 service-block outline mb30">
                            <div class="icon mb40"> <i style="font-size: 60px" class="fas fa-bullhorn"></i> </div>
                            <h2><a href="#" class="title">Marketing and Sales</a></h2>
                            <p>Promote agricultural products, manage sales, and expand market reach effectively.</p>
                            <a href="#" class="btn-link">Read More</a>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="bg-white pinside40 service-block outline mb30">
                            <div class="icon mb40"> <i style="font-size: 60px" class="fas fa-paw"></i> </div>
                            <h2><a href="#" class="title">Farm Tasks</a></h2>
                            <p>Efficiently manage different tasks, health records, and breeding programs.</p>
                            <a href="#" class="btn-link">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="section-space80">
        <div class="container">
            <!-- Start of Application Description Section -->
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-md-2 col-md-8 offset-md-2 col-md-8 col-sm-12 col-12">
                    <div class="section-title mb60 text-center">
                        <h1>Feasts Farms App</h1>
                        <p class="lead">Ensure you meet the following criteria to use FEASTSFARMS APP.</p>
                    </div>
                </div>
            </div>
            <!-- End of Application Description Section -->

            <!-- Start of User Requirements Section -->
            <div class="row">
                <!-- Agripreneurs -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="well-box">
                        <h3>Agripreneurs</h3>
                        <ul class="listnone bullet bullet-check-circle-default">
                            <li>Access to farming tools and resources</li>
                            <li>Financial management tools</li>
                            <li>Marketplace for agricultural products</li>
                            {{-- <li>Networking and collaboration opportunities</li> --}}
                        </ul>
                    </div>
                </div>

                <!-- Job Seekers -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="well-box">
                        <h3>Job Seekers</h3>
                        <ul class="listnone bullet bullet-check-circle-default">
                            <li>Job listings and opportunities in agriculture</li>
                            <li>Training and certification programs</li>
                            <li>Career development resources</li>
                            {{-- <li>Networking with agricultural employers</li> --}}
                        </ul>
                    </div>
                </div>

                <!-- Buyers -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb-4">
                    <div class="well-box">
                        <h3>Buyers</h3>
                        <ul class="listnone bullet bullet-check-circle-default">
                            <li>Access to diverse agricultural products</li>
                            <li>Marketplace for purchasing directly from farmers</li>
                            <li>Quality assurance and certification </li>
                            {{-- <li>Transaction security and payment options</li> --}}
                        </ul>
                    </div>
                </div>

                <!-- Agro Input Dealers -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="well-box">
                        <h3>Agro Input Dealers</h3>
                        <ul class="listnone bullet bullet-check-circle-default">
                            <li>Platform for showcasing and selling agricultural inputs</li>
                            <li>Supplier verification and certification</li>
                            <li>Inventory management tools</li>
                            <li>Customer engagement</li>
                        </ul>
                    </div>
                </div>

                <!-- Service Providers -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="well-box">
                        <h3>Service Providers</h3>
                        <ul class="listnone bullet bullet-check-circle-default">
                            <li>Listing of agricultural services offered</li>
                            <li>Customer reviews and ratings</li>
                            <li>Appointment scheduling and management</li>
                            <li>Payment processing and invoicing</li>
                        </ul>
                    </div>
                </div>

                <!-- Admins -->
                {{-- <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="well-box">
                        <h3>Admins</h3>
                        <ul class="listnone bullet bullet-check-circle-default">
                            <li>Dashboard for managing users and content</li>
                            <li>Analytics and reporting tools</li>
                            <li>Security and access control</li>
                            <li>Support and troubleshooting resources</li>
                        </ul>
                    </div>
                </div> --}}

                <!-- Farmers -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="well-box">
                        <h3>Farmers</h3>
                        <ul class="listnone bullet bullet-check-circle-default">
                            <li>Access to agricultural best practices and guides</li>
                            <li>Marketplace for selling farm produce</li>
                            <li>Weather forecasts and crop management tools</li>
                            {{-- <li>Community forums and knowledge sharing</li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End of User Requirements Section -->
        </div>
    </div>


    <div class="bg-white section-space80">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-md-2 col-md-8 offset-md-2 col-md-8 col-sm-12 col-12">
                    <div class="mb100 text-center section-title">
                        <!-- section title start-->
                        <h1>Steps to Access Feasts Farms App</h1>
                        <p>
                            Begin your journey with Feasts Farms App to transform agriculture
                            and agribusiness in Uganda. Follow these simple steps to get started.
                        </p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="bg-white pinside40 number-block outline mb60 bg-boxshadow">
                        <div class="circle"><span class="number">1</span></div>
                        <h3 class="number-title">Register Your Account</h3>
                        <p>
                            Create your account on Feasts Farms App. Provide necessary details
                            such as name, email, and contact information to begin.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="bg-white pinside40 number-block outline mb60 bg-boxshadow">
                        <div class="circle"><span class="number">2</span></div>
                        <h3 class="number-title">Explore Features & Tools</h3>
                        <p>
                            Navigate through our platform's features. Explore tools for farm
                            management, marketplace integration, and more.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="bg-white pinside40 number-block outline mb60 bg-boxshadow">
                        <div class="circle"><span class="number">3</span></div>
                        <h3 class="number-title">Connect & Engage</h3>
                        <p>
                            Engage with other users, including agripreneurs, farmers, buyers,
                            and service providers. Network and collaborate for mutual benefits.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-md-2 col-md-8 offset-md-2 col-md-8 col-sm-12 col-12 text-center">
                    <a href="#" class="btn btn-default">Get Started with Feasts Farms App</a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-default section-space80">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-md-2 col-md-8 offset-md-2 col-md-8 col-sm-12 col-12">
                    <div class="mb60 text-center section-title">
                        <!-- section title start-->
                        <h1 class="title-white">What Our Users Say</h1>
                        <p>
                            Discover how Feasts Farms App has made a positive impact on the
                            lives of individuals.
                        </p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 clearfix">
                    <div class="testimonial-block mb30">
                        <div class="bg-white pinside30 mb20">
                            <p class="testimonial-text">
                                “Feasts Farms App has revolutionized how I manage my farm.
                                Everything I need is in one place, making farming easier and
                                more efficient.”
                            </p>
                        </div>
                        <div class="testimonial-autor-box">
                            <div class="testimonial-img pull-left rounded-circle"
                                style="width: 120px; height: 120px; overflow: hidden">
                                <img src="assets/images/anguma_john.png" alt="Anguma John" class="img-fluid" />
                            </div>
                            <div class="testimonial-autor pull-left">
                                <h4 class="testimonial-name">Anguma John</h4>
                                <span class="testimonial-meta">Satisfied Farmer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 clearfix">
                    <div class="testimonial-block mb30">
                        <div class="bg-white pinside30 mb20">
                            <p class="testimonial-text">
                                “Feasts Farms App has connected me with reliable suppliers and
                                buyers, streamlining my business operations and boosting my
                                profitability.”
                            </p>
                        </div>
                        <div class="testimonial-autor-box">
                            <div class="testimonial-img pull-left rounded-circle"
                                style="width: 120px; height: 120px; overflow: hidden">
                                <img src="assets/images/wasswa_vicent.png" alt="Wasswa Vicent" class="img-fluid" />
                            </div>
                            <div class="testimonial-autor pull-left">
                                <h4 class="testimonial-name">Wasswa Vicent</h4>
                                <span class="testimonial-meta">Agribusiness Entrepreneur</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 clearfix">
                    <div class="testimonial-block mb30">
                        <div class="bg-white pinside30 mb20">
                            <p class="testimonial-text">
                                “Feasts Farms App has made managing my farm tasks so much
                                simpler. I can track everything from planting schedules to
                                financial records with ease.”
                            </p>
                        </div>
                        <div class="testimonial-autor-box">
                            <div class="testimonial-img pull-left rounded-circle"
                                style="width: 120px; height: 120px; overflow: hidden">
                                <img src="assets/images/user3.png" alt="User 3" class="img-fluid" />
                            </div>
                            <div class="testimonial-autor pull-left">
                                <h4 class="testimonial-name">Eboku Colin</h4>
                                <span class="testimonial-meta">Satisfied User</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    {{-- <div class="section-space40 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-6">
                    <img src="assets/images/brand.png" alt="MediConnect Health Solutions" />
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-6">
                    <img src="assets/images/brand.png" alt="MediConnect Health Solutions" />
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-6">
                    <img src="assets/images/brand.png" alt="MediConnect Health Solutions" />
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-6">
                    <img src="assets/images/brand.png" alt="MediConnect Health Solutions" />
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-6">
                    <img src="assets/images/brand.png" alt="MediConnect Health Solutions" />
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-6">
                    <img src="assets/images/brand.png" alt="MediConnect Health Solutions" />
                </div>
            </div>
        </div>
    </div> --}}

    <div class="section-space80 bg-white">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-md-2 col-md-8 offset-md-2 col-md-8 col-sm-12 col-12">
                    <div class="mb60 text-center section-title">
                        <!-- section title-->
                        <h1>We are Here to Help You</h1>
                        <p>
                            Our mission is to leverage technology and human-centric solutions.
                        </p>
                    </div>
                    <!-- /.section title-->
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="bg-white bg-boxshadow pinside40 outline text-center mb30">
                        <div class="mb40">
                            <i class="icon-calendar-3 icon-2x icon-default"></i>
                        </div>
                        <h2 class="capital-title">Book a Consultation</h2>
                        <p>
                            Looking for advice or a consultation? Schedule an appointment now.
                        </p>
                        <a href="#" class="btn-link">Book Appointment</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="bg-white bg-boxshadow pinside40 outline text-center mb30">
                        <div class="mb40">
                            <i class="icon-phone-call icon-2x icon-default"></i>
                        </div>
                        <h2 class="capital-title">Contact Us</h2>
                        <h1 class="text-big">0393246820</h1>
                        <p>info@feasts.co.ug</p>
                        <p>Kisakye Business Centre 869, 3rd Floor</p>
                        <p>P.O Box 112687 Ntinda, Kampala, Uganda</p>
                        <a href="#" class="btn-link">Contact us</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="bg-white bg-boxshadow pinside40 outline text-center mb30">
                        <div class="mb40">
                            <i class="icon-users icon-2x icon-default"></i>
                        </div>
                        <h2 class="capital-title">Talk to an Advisor</h2>
                        <p>Need advice? Talk to our experts.</p>
                        <a href="#" class="btn-link">Meet The Advisor</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('front-end.layouts.footer')
@endsection
