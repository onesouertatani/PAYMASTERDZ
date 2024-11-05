@extends('layouts.paymastermaster')

@section('content')

  <!-- Start -->
  <section class="section">
    <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-12">
                    <div class="heading-title text-center">
</br>
                        <h4 class="display-4 fw-bold mb-3">{{ __('messages.t221') }}<span class="typewrite text-primary position-relative text-type-element" data-period="2000" data-type='[ "{{ __('messages.t231') }}" ]'></span></h4>
                        <p class="para-desc mx-auto text-muted">{{ __('messages.t207') }}</p>
                        <div class="mt-4 pt-2">
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
            <script src="https://shreethemes.in/landflow/layouts/js/plugins.init.js"></script>
            <script src="https://shreethemes.in/landflow/layouts/js/app.js"></script>
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-7 mt-4 pt-2">
                <img src="images/crypto.png" class="img-fluid" alt="">
            </div><!--end col-->

            <div class="col-lg-5 col-md-5 mt-4 pt-2">
                <div class="section-title">
                    <h4>{{ __('messages.t208') }}</h4>

                    <div class="d-flex align-items-center rounded-md bg-light mt-4 shadow p-4">
                        <h2 class="display-4 fw-bold mb-0">100%</h2>
                        <div class="flex-1 ms-3">
                            <ul class="list-unstyled mb-0 h5">
                                <li class="list-inline-item"><i class="uil uil-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="uil uil-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="uil uil-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="uil uil-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="uil uil-star text-warning"></i></li>
                            </ul>

                            <h6 class="mb-0">{{ __('messages.t209') }}</h6>
                        </div>
                    </div>

                    <div class="mt-4 text-center">
                        <a href="https://psp.paymaster.tn/docs/en/api" class="btn btn-primary m-1">{{ __('messages.t195') }}</a>
                        <a href="{{ url('inscription') }}" class="btn btn-soft-primary m-1">  {{ __('messages.Read more') }} <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                </div>
                </div>
                
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
    <div class="container mt-100 mt-60">
        <div class="px-4 py-4 bg-dark bg-white-dark rounded shadow" >
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="section-title">
                        <div class="d-flex">
                            <i class="uil uil-more display-4 text-white title-dark"></i>
                            <div class="flex-1 ms-md-5 ms-3">
                            <h4 class="fw-bold text-light title-dark mb-1">{{ __('messages.t89') }}</h4>
                                        <p class="text-white-50 mb-0">{{ __('messages.t90') }}
</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
    
                        <div class="col-md-4 mt-4 mt-sm-0">
                          <div class="col-12 text-center">
                            <a href="{{ url('widget') }}" class="btn btn-light">{{ __('messages.t91') }}  <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                        </div>
                </div><!--end col-->
            </div><!--end row-->
        </div>
    </div><!--end container-->
    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-md-5 order-1 order-md-2 mt-4 pt-2">
                <div class="col-md-16 order-2 order-md-1 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="card border-0 shadow rounded me-lg-4">
                        <div class="p-2">
                            <a href="" class="text-danger"><i class="uil uil-circle"></i></a>
                            <a href="" class="text-warning"><i class="uil uil-circle"></i></a>
                            <a href="" class="text-success"><i class="uil uil-circle"></i></a>
                        </div>
                        <div class="bg-light card-body p-md-2 p-2">
                            <img src="images/payment-method-checkout.png" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end col-->

            <div class="col-md-7 order-2 order-md-1 mt-4 pt-2">
                <div class="section-title">
                    <h2 class="mb-4">{{ __('messages.t210') }}</h2>
                    <p class="text-muted para-desc">{{ __('messages.t211') }} 

                    </p>
                    <ul class="list-unstyled text-muted">
                        <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>{{ __('messages.t212') }}
                        </li>
                        <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>{{ __('messages.t213') }}</li>
                        <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>{{ __('messages.t214') }}</li>
                    </ul>
                    <div class="mt-4">
                        <a href="{{ url('test') }}" class="btn btn-soft-primary"> {{ __('messages.t215') }} <i data-feather="arrow-right" class="fea icon-sm"></i></a>

                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

           

          


            <div class="container mt-100 mt-60">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 text-center features feature-primary">
                            <div class="icon text-center mx-auto rounded-circle">
                                <h3 class="mb-0"><i class="uil uil-browser"></i></h3>
                            </div>

                            <div class="card-body p-0 mt-4">
                                <h5>{{ __('messages.t161') }}</h5>
                                <p class="text-muted">{{ __('messages.t162') }} </p>
                                <div class="mt-2">
                                    <a href="{{ url('cms') }}" class="link">{{ __('messages.Read more') }}
                                         <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="card border-0 text-center features feature-primary">
                            <div class="icon text-center mx-auto rounded-circle">
                                <h3 class="mb-0"><i class="uil uil-qrcode-scan"></i></h3>
                            </div>

                            <div class="card-body p-0 mt-4">
                                <h5>
                                {{ __('messages.t6') }} </h5>
                                <p class="text-muted">{{ __('messages.t7') }} </p>
                                <div class="mt-2">
                                    <a href="{{ url('SolutionCaisse') }}" class="link">{{ __('messages.Read more') }} <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                        <div class="card border-0 text-center features feature-primary">
                            <div class="icon text-center mx-auto rounded-circle">
                                <h3 class="mb-0"><i class="uil uil-cube"></i></h3>
                            </div>

                            <div class="card-body p-0 mt-4">
                                <h5>{{ __('messages.t8') }} </h5>
                                <p class="text-muted">{{ __('messages.t9') }} </p>
                                <div class="mt-2">
                                    <a href="{{ url('widget') }}" class="link">{{ __('messages.Read more') }}  <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        
        
       
        <!-- Start -->
        <section class="section bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="me-lg-5">
                            <div class="section-title">
                                <h6 class="badge bg-soft-info m-1">Paymaster</h6>
                                <h4 class="title mb-4">{{ __('messages.t216') }}</h4>
                                
                            </div>
    
                            <div class="row">
                                <div class="col-md-6 mt-4 pt-2">
                                    <div class="card features feature-primary bg-transparent border-0">
                                        <div class="icon text-center rounded-md text-primary">
                                            <h3 class="mb-0"><strong>1</strong></h3>
                                        </div>
                                        <div class="card-body p-0 mt-4">
                                            <h5>{{ __('messages.t217') }}
                                            </h5>
                                            <p class="text-muted mb-0">{{ __('messages.t218') }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4 pt-2">
                                    <div class="card features feature-primary bg-transparent border-0">
                                        <div class="icon text-center rounded-md text-primary">
                                            <h3 class="mb-0"><strong>2</strong></h3>
                                        </div>
                                        <div class="card-body p-0 mt-4">
                                            <h5>{{ __('messages.t219') }}
                                            </h5>
                                            <p class="text-muted mb-0">{{ __('messages.t220') }}

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 pt-2">
                                <a href="{{ url('test') }}" class="btn btn-soft-primary"> {{ __('messages.t215') }} <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-5 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <img src="images/flux-thank-you-page-illustration-2048x1345.png" class="img-fluid" alt="">
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
        <section class="section">
            <div class="container">
                
                <div class="row align-items-center">
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
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

         
        </section><!--end section-->
        <div class="position-relative">
            <div class="shape overflow-hidden text-light">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!-- End -->

        <!-- Start -->
        <section class="section bg-light">
           

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
       
        </section><!--end section-->
        <!-- End -->
        @endsection