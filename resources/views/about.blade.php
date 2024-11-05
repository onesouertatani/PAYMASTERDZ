@extends('layouts.paymaster')

@section('content')


     
        <!-- Start -->
        <section class="bg-half-170 d-table w-100 bg-primary" style="background: url('images/bg-lines-one.png') bottom;">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="heading-title">
                            <h5 class="text-white-50">Paymaster Algeria</h5>
                            <h4 class="display-4 fw-bold text-white title-dark">{{ __('messages.t67') }}  </h4>
                            <p class="text-white-50 para-desc mb-0">{{ __('messages.t68') }} </p>
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
        <!-- End -->

        <!-- Start -->
       
        <!-- Start -->
        <section class="section">
<center>
            <div class="container-mt-5">
                <div class="features-absolute">
                    <div class="row justify-content-center">
                        <div class="col-lg-2 col-md-4 mt-4 pt-2">
                            <div class="card border-0 text-center features feature-primary core-feature shadow rounded p-4">
                                <div class="icon text-center mx-auto rounded-md">
                                    <h3 class="mb-0"><i class="uil uil-cube"></i></h3>
                                </div>
                                <div class="card-body p-0 mt-4">
                                    <a href="{{ url('widget') }}" class="title text-dark h5">API widget</a>
                                </div>
                            </div>
                        </div><!--end col-->
                        
                        <div class="col-lg-2 col-md-4 mt-4 pt-2">
                            <div class="card border-0 text-center features feature-primary core-feature shadow rounded p-4">
                                <div class="icon text-center mx-auto rounded-md">
                                    <h3 class="mb-0"><i class="uil uil-university"></i></h3>
                                </div>
                                <div class="card-body p-0 mt-4">
                                    <a href="https://psp.paymaster.tn/docs/en/api" target="_blank"class="title text-dark h5">API paymaster
                                    </a>
                                </div>
                            </div>
                        </div><!--end col-->
                        
                        <div class="col-lg-2 col-md-4 mt-4 pt-2">
                            <div class="card border-0 text-center features feature-primary core-feature shadow rounded p-4">
                                <div class="icon text-center mx-auto rounded-md">
                                    <h3 class="mb-0"><i class="uil uil-money-bill"></i></h3>
                                </div>
                                <div class="card-body p-0 mt-4">
                                    <a  href="images/Services_payment_protocol_LY_paymentsapi_v1.0.4.pdf" download  class="title text-dark h5"> {{ __('messages.t69') }} </a>
                                </div>
                            </div>
                        </div><!--end col-->
                        
                        
                        
                       
                        
                        <div class="col-lg-2 col-md-4 mt-4 pt-2">
                            <div class="card border-0 text-center features feature-primary core-feature shadow rounded p-4">
                                <div class="icon text-center mx-auto rounded-md">
                                    <h3 class="mb-0"><i class="uil uil-code-branch"></i></h3>
                                </div>
                                <div class="card-body p-0 mt-4">
                                    <a href="{{ url('cms') }}" class="title text-dark h5">CMS</a>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
            </div><!--end container-->
</center>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12">
                        <ul class="list-unstyled text-muted h6 text-lg-center mb-0">
                            <li class="list-inline-item me-lg-5 me-4"><span class="text-primary h3 me-2"><i class="uil uil-check-circle align-middle"></i></span>{{ __('messages.t70') }} </li>
                            <li class="list-inline-item me-lg-5 me-4"><span class="text-primary h3 me-2"><i class="uil uil-check-circle align-middle"></i></span>{{ __('messages.t71') }} </li>
                            <li class="list-inline-item me-lg-5 me-4"><span class="text-primary h3 me-2"><i class="uil uil-check-circle align-middle"></i></span>{{ __('messages.t72') }} </li>
                            <li class="list-inline-item me-lg-5 me-4"><span class="text-primary h3 me-2"><i class="uil uil-check-circle align-middle"></i></span>{{ __('messages.t73') }} </li>
                        </ul>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container--><br><br>
         
            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2 class="mb-4">{{ __('messages.t74') }} </h2>
                            <p class="text-muted para-desc mx-auto mb-0"> {{ __('messages.t75') }} </p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            

        

            <div class="container mt-100 mt-60">
                <div class="row align-items-center">
                    <div class="col-md-6 order-1 order-md-2">
                        <div class="section-title">
                            <h4 class="title mb-4">{{ __('messages.t76') }} </h4>
                            <p class="para=desc text-muted"> {{ __('messages.t77') }} 

                            </p>
                            <ul class="list-unstyled text-muted h6 mb-0">
                                <li class="list-inline-item me-lg-5 me-4"><span class="text-primary h3 me-2"><i class="uil uil-receipt"></i></span>{{ __('messages.t78') }} </li>
                                <li class="list-inline-item me-lg-5 me-4"><span class="text-primary h3 me-2"><i class="uil uil-file-shield-alt"></i></span>{{ __('messages.t79') }} </li>
                                <li class="list-inline-item me-lg-5 me-4"><span class="text-primary h3 me-2"><i class="uil uil-user"></i></span>{{ __('messages.t80') }} </li>
                                <li class="list-inline-item me-lg-5 me-4"><span class="text-primary h3 me-2"><i class="uil uil-meeting-board"></i></span>{{ __('messages.t81') }} </li>
                                <li class="list-inline-item me-lg-5 me-4"><span class="text-primary h3 me-2"><i class="uil uil-chart-bar"></i></span>{{ __('messages.t82') }} </li>
                            </ul>    
                            <div class="mt-4">
                                <a href="{{ url('Systemepaiement') }}" class="btn btn-primary">{{ __('messages.Read more') }}  <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-6 order-2 order-md-1 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="card border-0 shadow rounded me-lg-4">
                            <div class="p-2">
                                <a href="" class="text-danger"><i class="uil uil-circle"></i></a>
                                <a href="" class="text-warning"><i class="uil uil-circle"></i></a>
                                <a href="" class="text-success"><i class="uil uil-circle"></i></a>
                            </div>
                            <div class="bg-light card-body p-md-4 p-2">
                                <img src="file/financial categoria.jpg" alt="" class="img-fluid mx-auto d-block" >
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

          <!-- Start -->
          <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-title mb-4 pb-2 mb-sm-0 pb-sm-0 me-lg-5">
                            <h6 class="text-primary">Paymaster</h6>
                            <h4 class="title mb-0 me-lg-5">  {{ __('messages.t83') }} </h4>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-6">
                        <div class="section-title">
                            <p class="text-muted para-desc"> {{ __('messages.t84') }} </p>
                            <p class="text-muted para-desc mb-0"> {{ __('messages.t85') }} </p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

           </br> </br> </br> 
            <div class="section-title text-center mb-4 pb-2">
                <h6 class="text-primary">PCI DSS</h6>
                <h4 class="title mb-4"> {{ __('messages.t86') }} 
                </h4>
                <p class="text-muted para-desc mx-auto mb-0"> {{ __('messages.t87') }} </p>
            </div>
           <center><img src="images/Certificate PCI DSS a.png" class="img-fluid" alt="" align="center" width="800" height="800"></center> 
        
           <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h4 class="title mb-4">{{ __('messages.t64') }}</h4>
                        <p class="text-muted para-desc mx-auto">{{ __('messages.t65') }} 

                        </p>
                        <div class="mt-4">
                            <a href="{{ url('contact') }}" class="btn btn-pills btn-primary m-1"><i class="uil uil-phone"></i> {{ __('messages.t66') }} </a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        </section><!--end section-->
            
     
        <!-- End -->
    @endsection