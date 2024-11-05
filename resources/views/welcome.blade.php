@extends('layouts.paymaster')

@section('content')


        <!-- Start Hero -->
        <section class="bg-half-170 d-table w-100 bg-primary" style="background: url('images/bg-softwareone.png') center center;">
            <div class="container">
                <div class="row mt-5 justify-content">
                    <div class="col-12">
                        <div class="heading-title text-center">
                            <h4 class="heading fw-bold text-white title-dark">{{ __('messages.Easy solution for') }}</br> {{ __('messages.accepting online payments in Algeria') }}</h4>
                            <p class="para-desc mx-auto text-white-50">{{ __('messages.PayMaster is an electronic payment solution for all professionals who want to integrate online payment. Our solutions will help you set up online payments quickly and securely ') }} </p>
                            <div class="mt-4 pt-2">
                                <a href="https://psp.paymaster.tn/docs/en/api" class="btn btn-light m-1" target="_blank"> {{ __('messages.API Documentation') }}</a>
                                <a href="{{ url('inscription') }}" class="btn btn-outline-light-alt m-1"> {{ __('messages.Create an account ') }} <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <div class="position-relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!-- End Hero -->
        
                                        
        <!-- Start -->
        <section class="section pb-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="features-absolute">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                                    <div class="card border-0 text-center features feature-primary core-feature shadow rounded p-4">
                                        <div class="icon text-center mx-auto rounded-md">
                                            <h3 class="mb-0"><i class="uil uil-arrow"></i>  </h3>
                                        </div>
                                        <div class="card-body p-0 mt-4">
                                            <h5> API </h5>
                                            <p class="text-muted mb-0">{{ __('messages.Paymaster Payment Kit') }}
                                                <br> {{ __('messages.Integration time') }}  <br>  </p>
                                                <p style="color:blue;">  1-2 {{ __('messages.days') }}</p>
                                        </div>
                                        <div class="col-12 mt-4 pt-2 text-center">
                                            <a href="https://psp.paymaster.tn/docs/en/api" class="text-primary h6"> {{ __('messages.Read more') }} <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                        </div><!--end col-->
                                    </div>
                                </div><!--end col-->
            
                                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                                    <div class="card border-0 text-center features feature-primary core-feature shadow rounded p-4">
                                        <div class="icon text-center mx-auto rounded-md">
                                            <h3 class="mb-0"><i class="uil uil-cube" ></i></h3>
                                        </div>
                                        <div class="card-body p-0 mt-4">
                                            <h5>{WIDGET}</h5>
                                            <p class="text-muted mb-0">{{ __('messages.Paymaster payment widget') }} 
                                                <br> {{ __('messages.Integration time') }} <br>  </p>
                                                <p style="color:blue;"> 30 minutes </p>
                                        </div>
                                        <div class="col-12 mt-4 pt-2 text-center">
                                            <a href="{{ url('widget') }}" class="text-primary h6">{{ __('messages.Read more') }} <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                        </div><!--end col-->
                                    </div>
                                </div><!--end col-->
            
                                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                                    <div class="card border-0 text-center features feature-primary core-feature shadow rounded p-4">
                                        <div class="icon text-center mx-auto rounded-md">
                                            <h3 class="mb-0"><i class="uil uil-code-branch"></i></h3>
                                        </div>
                                        <div class="card-body p-0 mt-4">
                                            <h5>[ CMS ]</h5>
                                            <p class="text-muted mb-0">{{ __('messages.Paymaster payment plugin') }} 
                                                <br> {{ __('messages.Integration time') }} <br>  </p>
                                                <p style="color:blue;">  1-2 {{ __('messages.Hours') }}  </p>
                                        </div>
                                        <div class="col-12 mt-4 pt-2 text-center">
                                            <a href="{{ url('cms') }}" class="text-primary h6">{{ __('messages.Read more') }} <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                        </div><!--end col-->
                                    </div>
                                </div><!--end col-->

                             
                            </div><!--end row-->
                        </div><!--end div-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Hero End -->

                                   
 

        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-4">{{ __('messages.t1') }}
                            </h4>
                        
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-md-6 mt-4 pt-2">
                                <div class="d-flex features feature-primary core-feature rounded p-4">
                                    <div class="icon text-center rounded-circle me-3 mt-2">
                                        <h3 class="mb-0"><i class="uil uil-airplay"></i></h3>
                                    </div>
                                    <div class="flex-1">
                                        <h5>{{ __('messages.t2') }}</h5>
                                        <p class="text-muted mb-0">{{ __('messages.t3') }}</p>
                                        <div class="mt-2">
                                            <a href="{{ url('Systemepaiement') }}" class="link">{{ __('messages.Read more') }} <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-md-6 mt-4 pt-2">
                                <div class="d-flex features feature-primary core-feature rounded p-4">
                                    <div class="icon text-center rounded-circle me-3 mt-2">
                                        <h3 class="mb-0"><i class="uil uil-browser"></i></h3>
                                    </div>
                                    <div class="flex-1">
                                        <h5>{{ __('messages.t4') }}
                                        </h5>
                                        <p class="text-muted mb-0"> {{ __('messages.t5') }}</p>
                                        <div class="mt-2">
                                            <a href="{{ url('Modepaiement') }}" class="link">{{ __('messages.Read more') }} <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-md-6 mt-4 pt-2">
                                <div class="d-flex features feature-primary core-feature rounded p-4">
                                    <div class="icon text-center rounded-circle me-3 mt-2">
                                        <h3 class="mb-0"><i class="uil uil-qrcode-scan"></i></h3>
                                    </div>
                                    <div class="flex-1">
                                        <h5>{{ __('messages.t6') }}</h5>
                                        <p class="text-muted mb-0"> {{ __('messages.t7') }} </p>
                                        <div class="mt-2">
                                            <a href="{{ url('Systemepaiement') }}" class="link">{{ __('messages.Read more') }} <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-md-6 mt-4 pt-2">
                                <div class="d-flex features feature-primary core-feature rounded p-4">
                                    <div class="icon text-center rounded-circle me-3 mt-2">
                                        <h3 class="mb-0"><i class="uil uil-cube"></i></h3>
                                    </div>
                                    <div class="flex-1">
                                        <h5>{{ __('messages.t8') }}</h5>
                                        <p class="text-muted mb-0">{{ __('messages.t9') }}</p>
                                        <div class="mt-2">
                                            <a href="{{ url('widget') }}" class="link">{{ __('messages.Read more') }} <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-md-6 mt-4 pt-2">
                                <div class="d-flex features feature-primary core-feature rounded p-4">
                                    <div class="icon text-center rounded-circle me-3 mt-2">
                                        <h3 class="mb-0"><i class="uil uil-bill"></i></h3>
                                    </div>
                                    <div class="flex-1">
                                        <h5>{{ __('messages.t10') }}</h5>
                                        <p class="text-muted mb-0"> {{ __('messages.t11') }} </p>
                                        <div class="mt-2">
                                            <a href="{{ url('Systemepaiement') }}" class="link">{{ __('messages.Read more') }} <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-md-6 mt-4 pt-2">
                                <div class="d-flex features feature-primary core-feature rounded p-4">
                                    <div class="icon text-center rounded-circle me-3 mt-2">
                                        <h3 class="mb-0"><i class="uil uil-clock"></i></h3>
                                    </div>
                                    <div class="flex-1">
                                        <h5>{{ __('messages.t12') }}</h5>
                                        <p class="text-muted mb-0"> {{ __('messages.t13') }}</p>
                                        <div class="mt-2">
                                            <a href="{{ url('Systemepaiement') }}" class="link">{{ __('messages.Read more') }} <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->





                        </div><!--end row-->
                    </div><!--end col-->
                    
                    
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="px-4 py-4 bg-dark bg-white-dark rounded shadow" >
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="section-title">
                                <div class="d-flex">
                                    <i class="uil uil-plus display-4 text-white title-dark"></i>
                                    <div class="flex-1 ms-md-5 ms-3">
                                        <h4 class="fw-bold text-light title-dark mb-1"> {{ __('messages.t14') }}</h4>
                                        <p class="text-white-50 mb-0">  {{ __('messages.t15') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
    
                        <div class="col-md-4 mt-4 mt-sm-0">
                            <div class="text-md-end ms-5 ms-sm-0">
                                <a href="{{ url('SolutionCaisse') }}" class="btn btn-soft-success">  {{ __('messages.t16') }}</a>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
            </div><!--end container-->

          
           
            <div class="container mt-100 mt-60">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <img src="file/payment-successful-flipped1.png" class="img-fluid" alt="">
                    </div><!--end col-->

                    <div class="col-lg-7 col-md-6 mt-4 mt-am-0 pt-2 pt-sm-0">
                        <div class="ms-lg-5">
                            <div class="section-title">
                                <span class="badge rounded-pill bg-soft-primary h6">Paymaster </span>

                                <h4 class="title mb-4"> {{ __('messages.t17') }} <br>  {{ __('messages.t18') }}</h4> 
                                <p class="text-muted para-desc mb-0">  {{ __('messages.t19') }}.</p>
                                
                                <ul class="list-unstyled text-muted mt-3">
                                    <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span> {{ __('messages.t20') }}</li>
                                    <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span> {{ __('messages.t21') }}                              
                                    </li>
                                    <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span> {{ __('messages.t22') }}</li>
                                </ul>

                                <div class="row">
                                    <div class="col-md-6 mt-4 pt-2">
                                        <div class="card features feature-primary bg-transparent border-0">
                                            <div class="icon text-center rounded-md text-primary">
                                                <h3 class="mb-0"><center>1</center>
                                                </h3>
                                            </div>
                                            <div class="card-body p-0 mt-4">
                                                <h5> {{ __('messages.t23') }}</h5>
                                                <p class="text-muted mb-0">  {{ __('messages.t24') }}</p>
                                            </div>
                                        </div>
                                    </div><!--end col-->
        
                                    <div class="col-md-6 mt-4 pt-2">
                                        <div class="card features feature-primary bg-transparent border-0">
                                            <div class="icon text-center rounded-md text-primary">
                                                <h3 class="mb-0"><center>2</center></h3>
                                            </div>
                                            <div class="card-body p-0 mt-4">
                                                <h5> {{ __('messages.t25') }}</h5>
                                                <p class="text-muted mb-0">  {{ __('messages.t26') }}</p>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                                <div class="mt-4">
                                    <a href="{{ url('inscription') }}" class="btn btn-soft-primary"> {{ __('messages.t27') }} <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h6 class="text-primary">CMS</h6>
                            <h4 class="title mb-4">{{ __('messages.t28') }}</h4>
                            <p class="text-muted para-desc mx-auto mb-0"> {{ __('messages.t29') }}</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
             </div><!--end container-->

            
             



             <div class="container mt-70 mt-60">
                    <div class="row justify-content-center">
                        <div class="col-lg-14">
                            <div class="row ">
                                <div class="col-lg-2 col-md-2 col-12 mt-4 pt-2">
                                    <a href="{{ url('cms') }}" class="feature-company rounded d-block text-center shadow p-4">
                                        <img src="images/Wordpress-Logo.svg.png" class="avatar avatar-md-md" alt="">
                                        <div class="content mt-4">
                                            <h5 class="company-name text-dark mb-0">WordPress</h5>
                                            <small class="text-muted sub-title">Version : all</small>
                                        </div>
                                    </a>
                                </div><!--end col-->
                                
                                <div class="col-lg-2 col-md-4 col-12 mt-4 pt-2">
                                    <a href="{{ url('cms') }}" class="feature-company rounded d-block text-center shadow p-4">
                                        <img src="images/logo drupal.png" class="avatar avatar-md-md" alt="">
                                        <div class="content mt-4">
                                            <h5 class="company-name text-dark mb-0">Drupal</h5>
            
                                            <small class="text-muted sub-title">Version 7.X-11</small>
                                        </div>
                                    </a>
                                </div><!--end col-->
                                
                                <div class="col-lg-2 col-md-4 col-12 mt-4 pt-2">
                                    <a href="{{ url('cms') }}" class="feature-company rounded d-block text-center shadow p-4">
                                        <img src="images/prestashop.svg" class="avatar avatar-md-md" alt="">
                                        <div class="content mt-4">
                                            <h5 class="company-name text-dark mb-0">PrestaShop</h5>
                                            <small class="text-muted sub-title">Version : 1.7.x</small>
                                        </div>
                                    </a>
                                </div><!--end col-->
                                
                                <div class="col-lg-2 col-md-4 col-12 mt-4 pt-2">
                                    <a href="{{ url('cms') }}" class="feature-company rounded d-block text-center shadow p-4">
                                        <img src="images/modx-logo-png-transparent.png" class="avatar avatar-md-md" alt="">
                                        <div class="content mt-4">
                                            <h5 class="company-name text-dark mb-0">modX</h5>
                                            <small class="text-muted sub-title">Version 7.X-11</small>
                                        </div>
                                    </a>
                                </div><!--end col-->
                                <div class="col-lg-2 col-md-4 col-12 mt-4 pt-2">
                                    <a href="{{ url('cms') }}" class="feature-company rounded d-block text-center shadow p-4">
                                        <img src="images/téléchargement.png" class="avatar avatar-md-md" alt="">
                                        <div class="content mt-4">
                                            <h5 class="company-name text-dark mb-0">HostCMS</h5>
                                            <small class="text-muted sub-title">Version : 6.2.3</small>
                                        </div>
                                    </a>
                                </div><!--end col-->
                                <div class="col-lg-2 col-md-4 col-12 mt-4 pt-2">
                                    <a href="{{ url('cms') }}" class="feature-company rounded d-block text-center shadow p-4">
                                        <img src="images/png-transparent-email-symbol-opencart-business-business-process-online-shopping-mobile-phones-arcaqua-marketing.png" class="avatar avatar-md-md" alt="">
                                        <div class="content mt-4">
                                            <h5 class="company-name text-dark mb-0">OpenCart</h5>
                                            <small class="text-muted sub-title">Version :3.0.2</small>
                                        </div>
                                    </a>
                                </div><!--end col-->
                            </div><!--end row-->
                            <div class="row mt-4 pt-2">
                                <div class="col-12 text-center">
                                    <a href="{{ url('cms') }}" class="btn btn-primary">{{ __('messages.Read more') }} <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>  






            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h6 class="text-primary">{{ __('messages.t30') }}</h6>
                            <h4 class="title mb-4">{{ __('messages.t31') }}</h4>
                            <p class="para-desc mx-auto text-muted mb-0">{{ __('messages.t32') }}</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row justify-content-center">
                    <div class="col-lg-10 mt-4">
                        <ul class="list-unstyled text-center mb-0">
                            <li class="list-inline-item m-2">
                                <div class="d-flex key-feature feature-primary align-items-center rounded-lg shadow py-2 px-3">
                                    <div class="icon text-center rounded-circle me-3">
                                        <i data-feather="eye" class="fea icon-ex-md"></i>
                                    </div>
                                    
                                    <h5 class="mb-0 title">{{ __('messages.t33') }}</h5>

                                </div>
                            </li>

                            <li class="list-inline-item m-2">
                                <div class="d-flex key-feature feature-primary align-items-center rounded-lg shadow py-2 px-3">
                                    <div class="icon text-center rounded-circle me-3">
                                        <i data-feather="settings" class="fea icon-ex-md"></i>
                                    </div>
                                    <h5 class="mb-0 title">{{ __('messages.t34') }}</h5>
                                </div>
                            </li>

                            <li class="list-inline-item m-2">
                                <div class="d-flex key-feature feature-primary align-items-center rounded-lg shadow py-2 px-3">
                                    <div class="icon text-center rounded-circle me-3">
                                        <i data-feather="monitor" class="fea icon-ex-md"></i>
                                    </div>
                                    <h5 class="mb-0 title">{{ __('messages.t35') }}</h5>                                </div>
                            </li>

                            <li class="list-inline-item m-2">
                                <div class="d-flex key-feature feature-primary align-items-center rounded-lg shadow py-2 px-3">
                                    <div class="icon text-center rounded-circle me-3">
                                        <i data-feather="code" class="fea icon-ex-md"></i>
                                    </div>
                                    <h5 class="mb-0 title">{{ __('messages.t36') }}</h5>
                                </div>
                            </li>

                            <li class="list-inline-item m-2">
                                <div class="d-flex key-feature feature-primary align-items-center rounded-lg shadow py-2 px-3">
                                    <div class="icon text-center rounded-circle me-3">
                                        <i data-feather="box" class="fea icon-ex-md"></i>
                                    </div>
                                    <h5 class="mb-0 title">{{ __('messages.t37') }}</h5>
                                </div>
                            </li>

                            <li class="list-inline-item m-2">
                                <div class="d-flex key-feature feature-primary align-items-center rounded-lg shadow py-2 px-3">
                                    <div class="icon text-center rounded-circle me-3">
                                        <i data-feather="clipboard" class="fea icon-ex-md"></i>
                                    </div>
                                    <h5 class="mb-0 title">{{ __('messages.t38') }}</h5>
                                </div>
                            </li>


                            <li class="list-inline-item m-2">
                                <div class="d-flex key-feature feature-primary align-items-center rounded-lg shadow py-2 px-3">
                                    <div class="icon text-center rounded-circle me-3">
                                        <i data-feather="feather" class="fea icon-ex-md"></i>
                                    </div>
                                    <h5 class="mb-0 title">{{ __('messages.t39') }}</h5>
                                </div>
                            </li>
                        </ul>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
       
        <!-- End -->
        </section>

 <!-- Start -->
 <section class="section">
    <div class="container mt-40 mt-60">
        <div class="row">
            <div class="col-md-6">
                <div class="section-title mb-4 pb-2 mb-sm-0 pb-sm-0 me-lg-5">
                    <h4 class="title mb-0 me-lg-5"> {{ __('messages.t40') }} :</h4>
                </div>
            </div><!--end col-->

            <div class="col-md-6">
                <span class="badge rounded-pill bg-soft-success h6">{{ __('messages.t41') }} :</span>

                <div class="section-title">
                    <p class="text-muted para-desc"> {{ __('messages.t42') }}</p>
                </div>
            </div><!--end col-->
          
       
            <div class="card pricing border-0 p-4 rounded-md shadow">
                <div class="card-body p-0">
                    <div class="d-flex">
                       
                        <div class="flex-1 ms-md-4 ms-3">
                            <center><img src="images/Sans-titre---1.png" alt="" height="200" width="800
                            "></center>
                         
                           
                        </div>
                    </div>
    
                
                </div>
            </div>
        
        <div class="mt-4">
            <div class="d-grid">
                <a href="{{ url('terminal') }}" class="btn btn-soft-success" target=”_blank”>{{ __('messages.t43') }}</a>
            </div>
        </div>
    </div><!--end row-->
</div>

</section><!--end section-->

    <!-- Start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row mt-lg-4 align-items-center">
                <div class="col-lg-5 col-md-12 text-center text-lg-start">
                    <div class="section-title mb-4 mb-lg-0 pb-2 pb-lg-0">
                        <h6 class="text-primary">{{ __('messages.t44') }}</h6>
                        <h4 class="title mb-4">{{ __('messages.t45') }}</h4>
                        <p class="text-muted para-desc mx-auto mb-0"> {{ __('messages.t46') }}</p>
                    </div>
                </div><!--end col-->

                <div class="col-lg-7 col-md-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-12">
                            <div class="card pricing border-0 p-4 rounded-md shadow">
                                <div class="card-body p-0">
                                    <span class="py-2 px-4 d-inline-block bg-soft-primary h6 mb-0 text-primary rounded-lg"> {{ __('messages.t47') }}</span>
                                    <h1 class="fw-bold mb-0 mt-3"><center>0 %</center></h1>
                                    <p class="text-muted small"> {{ __('messages.t48') }}</p>
                                    <ul class="list-unstyled">
                                        <li class="text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-card-atm"></i></span> {{ __('messages.t49') }}</li>
                                        <li class="text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-qrcode-scan"></i></span> {{ __('messages.t50') }}</li>
                                        <li class="text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-mobile-android"></i></span> {{ __('messages.t51') }}</li>
                                        <!-- <li class="text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-shield-plus"></i></span>Enhanced Security</li> -->
                                    </ul>
    
                                    <div class="mt-4">
                                        <div class="d-grid">
                                            <a href="{{ url('inscription') }}" class="btn btn-primary"> {{ __('messages.t52') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        
                        <div class="col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <div class="card pricing border-0 p-4 rounded-md shadow bg-dark bg-white-dark">
                                <div class="card-body p-0">
                                    <span class="py-2 px-4 d-inline-block bg-soft-success h6 mb-0 text-success rounded-lg"> {{ __('messages.t53') }}</span>
                                    <h1 class="fw-bold text-white title-dark mb-0 mt-3"><center>+ 1 %  </center></h1>
                                    <p class="text-white-50 small"> {{ __('messages.t54') }}</p>
    
                                    <ul class="list-unstyled">
                                        <li class="text-light para-dark mb-0"><span class="text-success h5 me-2"><i class="uil uil-card-atm"></i></span> {{ __('messages.t49') }}</li>
                                        <li class="text-light para-dark mb-0"><span class="text-success h5 me-2"><i class="uil uil-qrcode-scan"></i></span> {{ __('messages.t50') }} </li>
                                        <li class="text-light para-dark mb-0"><span class="text-success h5 me-2"><i class="uil uil-mobile-android"></i></span> {{ __('messages.t51') }}</li>
                                    </ul>
    
                                    <div class="mt-4">
                                        <div class="d-grid">
                                            <a href="{{ url('inscription') }}" class="btn btn-soft-success"> {{ __('messages.t52') }}</a>
                                        </div>
                                        <p class="text-white-50 mt-3 mb-0"></p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-4">{{ __('messages.t55') }}</h4>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row mt-4 pt-2">
                <div class="col-md-6 col-12">
                    <div class="d-flex">
                        <i data-feather="help-circle" class="fea icon-ex-md text-primary me-2 mt-1"></i>
                        <div class="flex-1">
                            <h5 class="mt-0"> {{ __('messages.t56') }}</h5>
                            <p class="answer text-muted mb-0"> {{ __('messages.t57') }} </p>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="d-flex">
                        <i data-feather="help-circle" class="fea icon-ex-md text-primary me-2 mt-1"></i>
                        <div class="flex-1">
                            <h5 class="mt-0"> {{ __('messages.t58') }}</h5>
                            <p class="answer text-muted mb-0"> {{ __('messages.t59') }}</p>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-md-6 col-12 mt-4 pt-2">
                    <div class="d-flex">
                        <i data-feather="help-circle" class="fea icon-ex-md text-primary me-2 mt-1"></i>
                        <div class="flex-1">
                            <h5 class="mt-0"> {{ __('messages.t60') }}</h5>
                            <p class="answer text-muted mb-0"> {{ __('messages.t61') }}  </p>
                        </div>
                    </div>
                </div><!--end col-->
              
                <div class="col-md-6 col-12 mt-4 pt-2">
                    <div class="d-flex">
                        <i data-feather="help-circle" class="fea icon-ex-md text-primary me-2 mt-1"></i>
                        <div class="flex-1">
                            <h5 class="mt-0">  {{ __('messages.t62') }}</h5>
                            <p class="answer text-muted mb-0"> {{ __('messages.t63') }} 
                                </p>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h4 class="title mb-4">{{ __('messages.t64') }} </h4>
                        <p class="text-muted para-desc mx-auto">{{ __('messages.t65') }} 

                        </p>
                        <div class="mt-4">
                            <a href="{{ url('contact') }}" class="btn btn-pills btn-primary m-1"><i class="uil uil-phone"></i>{{ __('messages.t66') }} </a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->  

    @endsection