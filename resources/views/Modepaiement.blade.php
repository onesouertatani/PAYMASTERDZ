@extends('layouts.paymaster')

@section('content')


        <!-- Start -->
        <section class="bg-half-130 d-table bg-primary w-100" style="background: url('https://shreethemes.in/landflow/layouts/images/bg/bg-lines-one.png') center;">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="heading-title text-center fw-bold text-white ">
                            <h3 class="title mb-2">{{ __('messages.t175') }}</h3>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <section class="section">
        <div class="container mt-100 mt-60">
                <div class="row align-items-center">
                    <div class="col-md-6 order-1 order-md-2">
                        <div class="section-title">
                            <h4 class="title mb-4">{{ __('messages.t4') }} </h4>
                            <p class="para=desc text-muted"> {{ __('messages.PayMaster is an electronic payment solution for all professionals who want to integrate online payment. Our solutions will help you set up online payments quickly and securely ') }} 
                            {{ __('messages.t5') }} 

                            </p>
                       
                         
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
                                <img src="images/methode.jpg" alt="" class="img-fluid mx-auto d-block">
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Start -->
       
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                    <div class="rounded shadow">
                            <div class="p-4 d-flex align-items-center justify-content-between">
                                <h5 class="mb-0">Module du paiements en ligne</h5>

                                <a href="{{ url('inscription') }}" class="btn btn-primary"><i class="uil uil-plus"></i> {{ __('messages.t168') }}</a>
                            </div>
                            <div class="p-4 border-top">
                                <div class="pb-4">
                                  

                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center mt-1">
                                            <img src="file/giem.png" class="avatar avatar-small" alt="">
                                            <div class="flex-1 ms-3">
                                                <h6 class="mb-0">GIE </h6>
                                                <p class="text-muted mb-0">Ce module vous permet d'accepter des paiements en ligne</p>
                                            </div>
                                        </div>

                                      
                                    </div>
                                </div>

                                <div class="py-4 border-top">

                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center mt-1">
                                            <img src="file/satim.png" class="avatar avatar-small" alt="">
                                            <div class="flex-1 ms-3">
                                            <h6 class="mb-0">SATIM </h6>
                                            <p class="text-muted mb-0">Ce module vous permet d'accepter des paiements en ligne</p>
                                            </div>
                                        </div>

                                       
                                    </div>
                                </div>




                            </div>
                        </div>







                        <div class="rounded shadow mt-4">
                            <div class="p-4 d-flex align-items-center justify-content-between">
                                <h5 class="mb-0">{{ __('messages.t176') }}</h5>

                                <a href="{{ url('inscription') }}" class="btn btn-primary"><i class="uil uil-plus"></i> {{ __('messages.t168') }}</a>
                            </div>
                            <div class="p-4 border-top">
                                <div class="pb-4">
                                  

                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center mt-1">
                                            <img src="images/visa.png" class="avatar avatar-small" alt="">
                                            <div class="flex-1 ms-3">
                                                <h6 class="mb-0">{{ __('messages.t176') }} Visa</h6>
                                                <p class="text-muted mb-0">{{ __('messages.t177') }} Visa</p>
                                            </div>
                                        </div>

                                      
                                    </div>
                                </div>

                                <div class="py-4 border-top">

                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center mt-1">
                                            <img src="images/mastercard.png" class="avatar avatar-small" alt="">
                                            <div class="flex-1 ms-3">
                                                <h6 class="mb-0">{{ __('messages.t176') }}  Mastercard</h6>
                                                <p class="text-muted mb-0">{{ __('messages.t177') }} Mastercard</p>
                                            </div>
                                        </div>

                                       
                                    </div>
                                </div>
                         
    <div class="py-4 border-top">

                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center mt-1">
                                            <img src="AlgeriePoste.svg" class="avatar avatar-small" alt="">
                                            <div class="flex-1 ms-3">
                                                <h6 class="mb-0">Algérie Poste : EDAHABIA</h6>
                                                <p class="text-muted mb-0">{{ __('messages.t177') }} EDAHABIA</p>
                                            </div>
                                        </div>

                                       
                                    </div>
                                </div>

                                <div class="py-4 border-top">

<div class="d-flex align-items-center justify-content-between">
    <div class="d-flex align-items-center mt-1">
        <img src="cib.png" class="avatar avatar-small" alt="">
        <div class="flex-1 ms-3">
            <h6 class="mb-0">CIB</h6>
            <p class="text-muted mb-0">{{ __('messages.t177') }} CIB</p>
        </div>
    </div>

   
</div>
</div>


                            </div>
                        </div>

                    

                        <div class="rounded shadow mt-4">
                            <div class="p-4 d-flex align-items-center justify-content-between">
                                <h5 class="mb-0">{{ __('messages.t178') }} </h5>

                                <a href="{{ url('inscription') }}" class="btn btn-primary"><i class="uil uil-plus"></i> {{ __('messages.t168') }}</a>
                            </div>
                            <div class="p-4 border-top">
                                <div class="pb-4">
                                  

                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center mt-1">
                                            <img src="images/r.png" class="avatar avatar-small" alt="">
                                            <div class="flex-1 ms-3">
                                                <h6 class="mb-0">{{ __('messages.t178') }}</h6>
                                                <p class="text-muted mb-0">{{ __('messages.t177') }} RunPay</p>
                                            </div>
                                        </div>

                                      
                                    </div>
                                </div>

                                <div class="py-4 border-top">

                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center mt-1">
                                            <img src="images/vout.png" class="avatar avatar-small" alt="">
                                            <div class="flex-1 ms-3">
                                                <h6 class="mb-0">Vouchers</h6>
                                                <p class="text-muted mb-0">{{ __('messages.t177') }} RunPay Vouchers</p>
                                            </div>
                                        </div>

                                       
                                    </div>
                                </div>
                                <div class="py-4 border-top">

                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center mt-1">
                                            <img src="images/qr.png" class="avatar avatar-small" alt="">
                                            <div class="flex-1 ms-3">
                                                <h6 class="mb-0">QR-Code</h6>
                                                <p class="text-muted mb-0">{{ __('messages.t177') }} QR-Code</p>
                                            </div>
                                        </div>

                                       
                                    </div>
                                </div>
                             
                           


                              
                            </div>
                        </div>

                        <div class="rounded shadow mt-4">
                            <div class="p-4 d-flex align-items-center justify-content-between">
                                <h5 class="mb-0"> {{ __('messages.t179') }}</h5>

                                <a href="{{ url('inscription') }}" class="btn btn-primary"><i class="uil uil-plus"></i>{{ __('messages.Get') }} </a>
                            </div>
                     

                                <div class="py-4 border-top">

                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center mt-1">
                                            <img src="https://paymaster.tn/paymaster/assets/img/terminal2.png" class="avatar avatar-small" alt="">
                                            <div class="flex-1 ms-3">
                                                <h6 class="mb-0">Mini-O</h6>
                                                <p class="text-muted mb-0">{{ __('messages.t179') }}</p>
                                            </div>
                                        </div>

                                       
                                    </div>
                                </div>
                              
                                <div class="py-4 border-top">

                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center mt-1">
                                            <img src="	https://paymaster.tn/paymaster/assets/img/terminal5.png" class="avatar avatar-small" alt="">
                                            <div class="flex-1 ms-3">
                                                <h6 class="mb-0">Terminal</h6>
                                                <p class="text-muted mb-0">{{ __('messages.t179') }}</p>
                                            </div>
                                        </div>

                                       
                                    </div>
                                </div>
                             

                                <div class="py-4 border-top">

                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center mt-1">
                                            <img src="images//mode/cashout.png" class="avatar avatar-small" alt="">
                                            <div class="flex-1 ms-3">
                                                <h6 class="mb-0">Cash Out Terminal</h6>
                                                <p class="text-muted mb-0">{{ __('messages.t179') }}</p>
                                            </div>
                                        </div>

                                       
                                    </div>
                                </div>

                              
                            </div>
                        </div>

                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

    @endsection