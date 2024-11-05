@extends('layouts.paymastermaster')

@section('content')

        <!-- Home Start -->
        <section class="bg-half-130 d-table w-100 bg-light" style="background: url('images/bg-lines-one.png') center center;">
        <div class="container">
            <div class="row align-items-center mt-5 mt-lg-0">
                <div class="col-lg-8 col-md-7">
                    <div class="heading-title">
                        <h5 class="badge rounded-pill bg-soft-success h6">{{ __('messages.t115') }}</h5>
                        <h4 class="display-4 fw-bold">{{ __('messages.t116') }}
                        <span class="typewrite text-primary position-relative text-type-element" data-period="2000" data-type='[ "{{ __('messages.developer') }}" ]'>  </span>
                        </h4>
  
                        <script src="https://shreethemes.in/landflow/layouts/js/plugins.init.js"></script>
                        <script src="https://shreethemes.in/landflow/layouts/js/app.js"></script>
                        <p class="para-desc text-muted">{{ __('messages.t117') }}.</p>

                        <div class="mt-3">
                            <button type="button" class="btn btn-success btn-lg" target="_blank" onclick="window.location.href = 'https://psp.paymaster.tn/docs/en/paymentwidget#widget-payments';" formtarget="_blank"><i class="uil uil-file" ></i> {{ __('messages.t118') }}</button>
                                   
                              
                          
                            
                            
                            <script src="https://dz.paymaster.pro/cpay/sdk/payment-widget.js"></script>  
                            <button class="btn btn-primary btn-lg"id="button2"  btn-pay-0rj6101qpij9s893zvzle5xttt><i class="uil uil-arrow" ></i> Démonstration</button>
                    
                    
                    <script>
                    if (document.querySelector("[btn-pay-0rj6101qpij9s893zvzle5xttt]")) {
                    document.querySelector("[btn-pay-0rj6101qpij9s893zvzle5xttt]").addEventListener("click", function () {
                                          var paymentWidget = new cpay.PaymentWidget();
 
                    paymentWidget.init({"merchantId":"113389ac-6a42-4099-9fc4-e69f392efeb8","invoice":{"description":"Demo"},"amount":{"currency":"DZD","value":1.00},"receipt":null,"paymentForm":{"primaryColor":"#0c2e8a","productCard":{"title":"JACKET ","description":"Toutes les transactions présentées ici sont des transactions de test et de démonstration et ne sont pas effectuées dans le système. Tous les fonds resteront sur leurs comptes ; le système réel n'est en aucun cas impliqué.","imageUrl":
                    "https://paymaster.ly/assets/images/products/jacket-6.jpg"},"fields":[{"type":"input","name":"customerEmail","label":"E-mail","hint":null,"required":true,"selectOptions":null,"additionalAmount":null}]}});
                    });
                    }
                    </script>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-4 col-md-5 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <img src="images/payment-widget.png" class="img-fluid" alt="">
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
      
        <!-- Hero End -->


        <!-- Start -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">{{ __('messages.t119') }}</h4>
                            <p class="para-desc text-muted mb-0">{{ __('messages.t120') }}</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
               <center> <img src="widget_multi.png" alt="Girl in a jacket" width="999" height="150"></center>

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card border-0 features feature-primary rounded">
                            <div class="icon text-center rounded-md">
                                <h3 class="mb-0"><i class="uil uil-globe"></i></h3>
                            </div>

                            <div class="card-body p-0 mt-4">
                                <h5>{{ __('messages.t121') }}
                                </h5>
                                <p class="text-muted mb-0">{{ __('messages.t122') }}
                                </p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card border-0 features feature-primary rounded">
                            <div class="icon text-center rounded-md">
                                <h3 class="mb-0"><i class="uil uil-link"></i></h3>
                            </div>

                            <div class="card-body p-0 mt-4">
                                <h5>{{ __('messages.t123') }}

                                </h5>
                                <p class="text-muted mb-0">{{ __('messages.t124') }}

                                </p>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card border-0 features feature-primary rounded">
                            <div class="icon text-center rounded-md">
                                <h3 class="mb-0"><i class="uil uil-clipboard-alt"></i></h3>
                            </div>

                            <div class="card-body p-0 mt-4">
                                <h5>{{ __('messages.t125') }}

                                </h5>
                                <p class="text-muted mb-0">{{ __('messages.t126') }}
                                </p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card border-0 features feature-primary rounded">
                            <div class="icon text-center rounded-md">
                                <h3 class="mb-0"><i class="uil uil-transaction"></i></h3>
                            </div>

                            <div class="card-body p-0 mt-4">
                                <h5>{{ __('messages.t127') }}

                                </h5>
                                <p class="text-muted mb-0">{{ __('messages.t128') }}</p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card border-0 features feature-primary rounded">
                            <div class="icon text-center rounded-md">
                                <h3 class="mb-0"><i class="uil uil-search"></i></h3>
                            </div>

                            <div class="card-body p-0 mt-4">
                                <h5>{{ __('messages.t129') }}

                                </h5>
                                <p class="text-muted mb-0">{{ __('messages.t130') }}

                                </p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card border-0 features feature-primary rounded">
                            <div class="icon text-center rounded-md">
                                <h3 class="mb-0"><i class="uil uil-qrcode-scan"></i></h3>
                            </div>

                            <div class="card-body p-0 mt-4">
                                <h5>{{ __('messages.t131') }}

                                </h5>
                                <p class="text-muted mb-0">{{ __('messages.t132') }}

                                </p>
                            </div>
                        </div>
                    </div><!--end col-->
                   
                    
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <section class="section bg-primary" style="background: url('https://shreethemes.in/landflow/layouts/images/bg/bg-lines-two.png') center center;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="section-title">
                            <h4 class="title text-white title-dark mb-4">{{ __('messages.t133') }}</h4>
                            <p class="text-white-50 para-desc mb-0">{{ __('messages.t134') }}

                            </p>
                        </div>

                        <div class="mt-4 pt-2">
                            <h6 class="text-white title-dark">{{ __('messages.t135') }}</h6>
                            <p class="text-white-50 para-desc mb-0">{{ __('messages.t136') }}
                                </p>
                        </div>

                        <div class="mt-4 pt-2">
                            <h6 class="text-white title-dark">{{ __('messages.t137') }}

                            </h6>
                            <p class="text-white-50 para-desc mb-0">{{ __('messages.t138') }}

                            </p>
                        </div>

                        <div class="mt-4 pt-2">
                            <h6 class="text-white title-dark">{{ __('messages.Get') }}

                                </h6>
                            <p class="text-white-50 para-desc mb-0">{{ __('messages.t139') }}



                            </p>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-6 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <img src="images/white-labelled-checkout.png" class="img-fluid" alt="">
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->

        <!-- Start -->
        <section class="section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-5">
                        <img src="images/WooCommerce-Fast-Cart-820x576.png" alt=""  width="500" height="400">
                    </div><!--end col-->

                    <div class="col-lg-6 col-md-7">
                        <div class="section-title">
                            <span class="badge rounded-pill bg-soft-primary h6">{{ __('messages.t140') }}</span>

                            <h1 class="title mb-3">{{ __('messages.t141') }}</h1>
                            <p class="para-desc text-muted">{{ __('messages.t142') }}</p>
                            <ul class="list-unstyled text-muted">
                                <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span> {{ __('messages.t143') }}</li>
                                <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span> {{ __('messages.t144') }}</li>
                                <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>{{ __('messages.t145') }}</li>
                            </ul>
                            <div class="mt-4">
                                <a href="https://psp.paymaster.tn/docs/en/paymentwidget#widget-payments" class="btn btn-primary"><i class="uil uil-file"></i> {{ __('messages.t118') }}</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

         

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <span class="badge rounded-pill bg-soft-primary h6">widget </span>
                            <h4 class="title mt-2 mb-4">{{ __('messages.t146') }}
                            </h4>
                        </div>
                            
<p>{{ __('messages.t147') }} </p>
</br>

          <center><img src="https://paymaster.tn/wid2.png" class="img-fluid" alt=" "></center>
          
  </br>
</br>	  
<strong>{{ __('messages.t148') }}</strong>
</br>
</br>
{{ __('messages.t149') }}

</br>
</br><p>{{ __('messages.t150') }}</p>

{{ __('messages.t151') }}
</br>
</br>
<p>{{ __('messages.t152') }}
</p>
</br>
<p>{{ __('messages.t153') }}</p>
<p>{{ __('messages.t154') }}</p>

</br>
<img src="https://paymaster.tn/paymaster/assets/img/ok.png" class="img-fluid" alt="" height="40" width="40"> {{ __('messages.t155') }}
</br>
</br>
<img src="https://paymaster.tn/paymaster/assets/img/ok.png" class="img-fluid" alt="" height="40" width="40">  {{ __('messages.t156') }}
</br>
</br>
<img src="https://paymaster.tn/paymaster/assets/img/ok.png" class="img-fluid" alt="" height="40" width="40">  {{ __('messages.t157') }}
</br>
</br>
{{ __('messages.t158') }}</br></br>
{{ __('messages.t159') }}</br></br>
{{ __('messages.t160') }}              </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

           
        </section><!--end section-->

        <!-- End -->
     
    @endsection