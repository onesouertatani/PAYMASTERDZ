@extends('layouts.paymastermaster')

@section('content')

    <!-- End -->
    <section class="bg-half-130 d-table w-100" style="background: url('images/bg-startup.png') center center;">
            <div class="container">
                <div class="row mt-5 align-items-center">
                    <div class="col-md-6">
                        <div class="heading-title">  
                            <h4 class="display-4 fw-bold">{{ __('messages.t165') }} <span class="text-primary">{{ __('messages.t166') }}</span></h4>
                            <p class="para-desc text-muted">{{ __('messages.t167') }} <span class="badge bg-soft-success">r_keeper </span></p>
                            <div class="subcribe-form mt-4">
                            <form class="form form-vertical" action="{{ route('form/save') }}" method="POST">
                        @csrf
                        
                                        <div class="col-md-6">
                                            <div class="mb-3">

                                                <input type="hidden" class="form-control @error('fullName') is-invalid @enderror" value="r_keeper"
                                                placeholder="Name" id="first-name-icon" name="fullName">                                            </div>
                                        </div>
    
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <input type="hidden" class="form-control @error('emailAddress') is-invalid @enderror" value="paymaster@runpay.ly"
                                                placeholder="Email" id="first-name-icon" name="emailAddress" >                                            </div> 
                                        </div><!--end col-->
    
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <input type="hidden" class="form-control @error('phone_number') is-invalid @enderror" value="123456789"
                                                placeholder="numéro de téléphone lié à RunPay" name="phone_number">                                            </div>
                                        </div><!--end col-->

                                  
                                      


                                        <div class="col-12">
                                            <div class="mb-12">
                                            
                                            <input type="hidden" class="form-control @error('salary') is-invalid @enderror" value="r_keeper"
                                                placeholder="numéro de téléphone lié à RunPay" name="salary"> 
                                                </div>
                                        </div>
                                        <div class="col-12">
                                  <div class="mb-12">
                                        <input type="text" id="position" name="position"  value="{{ old('position') }}" class="border bg-white rounded"style="opacity: 0.8;" required placeholder="Email Address.">
                                        <button type="submit" class="btn btn-primary">{{ __('messages.t168') }}</button>
                                    </div> </div>
                                </form>
                             
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">{{ __('messages.t169') }} <a href="#" class="text-primary">{{ __('messages.t174') }}</a></label>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-6 mt-5 mt-sm-0 pt-2 pt-sm-0">
                        <div class="ms-md-4">
                            <img src="images/b0dcd47e9c4287a7e2e139ab09eae6ff.png" class="img-fluid" alt="">
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
          
        <div class="container mt-100 mt-60">

            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center"> 
                        <h2 class="mb-4">{{ __('messages.t170') }} </h2>
                        <p class="text-muted para-desc mx-auto mb-0">{{ __('messages.t171') }}

                            </p>
                        </br></br>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
         <!-- Search Hosting Start -->
     
    </div><!--end container-->
    <iframe 
width="100%" height="877" src="
https://wmi.runpay.com/PosIntEmulatorLY/">

</iframe>
</section><!--end section-->

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-1 order-md-2 mt-5 mt-lg-0">
                    <div class="section-title">
                        <h4 class="title mb-4">{{ __('messages.t172') }}</h4>
                        <p class="para=desc text-muted">{{ __('messages.t173') }}</p>
                        <div class="mt-4">
                            <a href="https://rkeeper.com/" class="btn btn-success"  target="_blank">{{ __('messages.Read more') }}</a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-6 order-2 order-md-1">
                    <img src="images/rkeeper.png" class="img-fluid" alt="">
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
        </div><!--end container-->   </br></br>
              <div class="row justify-content-center">
                  <div class="col-12 text-center">
                      <div class="section-title">
                      <h4 class="title mb-4">{{ __('messages.t64') }}</h4>
                        <p class="text-muted para-desc mx-auto">{{ __('messages.t65') }}

                        </p>
                        <div class="mt-4">
                            <a href="{{ url('contact') }}" class="btn btn-pills btn-primary m-1"><i class="uil uil-phone"></i> {{ __('messages.t66') }}</a>
                        </div>

                      </div>
                  </div><!--end col-->
              </div><!--end row-->
              

         
          </section><!--end section-->
         

    @endsection