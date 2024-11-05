@extends('layouts.paymaster')

@section('content')


        
        <!-- Home Start -->
        <section class="bg-half-260 d-table w-100" style="background: url('images/faq-la-gi.jpg') center">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="heading-title text-center">
                            <h2 class="title text-white title-dark">{{ __('messages.t92') }}</h2>
                            <div class="subcribe-form my-4">
                            <form class="form form-vertical" action="{{ route('form/save') }}" method="POST">
                        @csrf
                        
                                        <div class="col-md-6">
                                            <div class="mb-3">

                                                <input type="hidden" class="form-control @error('fullName') is-invalid @enderror" value="FAQ"
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
                                            
                                            <input type="hidden" class="form-control @error('salary') is-invalid @enderror" value="FAQ"
                                                placeholder="numéro de téléphone lié à RunPay" name="salary"> 
                                                </div>
                                        </div>
                                        <div class="col-12">
                                  <div class="mb-12">
                                        <input type="text" id="position" name="position"  value="{{ old('position') }}" class="border bg-white rounded-pill" style="opacity: 0.8;" required placeholder="{{ __('messages.t93') }}.">
                                        <button type="submit" class="btn btn-pills btn-primary">{{ __('messages.t94') }}</button>
                                    </div> </div>
                                </form>
                            </div>
                            <p class="text-white-50 mb-0 para-desc mx-auto">*{{ __('messages.t95') }}</p>
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
        <!-- Home End -->

        <!-- Start -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-4">{{ __('messages.t96') }}
                              </h4>
                            <p class="text-muted para-desc mx-auto mb-0"> {{ __('messages.t97') }}</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card border-0 text-center features feature-primary rounded p-4 shadow">
                            <div class="icon text-center mx-auto rounded-md">
                                <h3 class="mb-0"><i class="uil uil-book-open"></i></h3>
                            </div>

                            <div class="card-body p-0 mt-4">
                                <h5> {{ __('messages.t98') }}</h5>
                                <p class="text-muted mb-0">{{ __('messages.t99') }}

                                </p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card border-0 text-center features feature-primary rounded p-4 shadow">
                            <div class="icon text-center mx-auto rounded-md">
                                <h3 class="mb-0"><i class="uil uil-bill"></i></h3>
                            </div>

                            <div class="card-body p-0 mt-4">
                                <h5> {{ __('messages.t100') }}</h5>
                                <p class="text-muted mb-0">{{ __('messages.t101') }}

                                </p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card border-0 text-center features feature-primary rounded p-4 shadow">
                            <div class="icon text-center mx-auto rounded-md">
                                <h3 class="mb-0"><i class="uil uil-thumbs-up"></i></h3>
                            </div>

                            <div class="card-body p-0 mt-4">
                                <h5>{{ __('messages.t102') }}</h5>
                                <p class="text-muted mb-0">{{ __('messages.t103') }}

</p>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
           
            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-4">{{ __('messages.t55') }}</h4>
                          </div>
  
                          <div class="accordion" id="accordionExample">
                              <div class="accordion-item rounded">
                                  <h2 class="accordion-header" id="headingOne">
                                      <button class="accordion-button border-0 bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                          aria-expanded="true" aria-controls="collapseOne">
                                          {{ __('messages.t56') }}
                                      </button>
                                  </h2>
                                  <div id="collapseOne" class="accordion-collapse border-0 collapse show" aria-labelledby="headingOne"
                                      data-bs-parent="#accordionExample">
                                      <div class="accordion-body text-muted">
                                      {{ __('messages.t57') }}   </div>
                                  </div>
                              </div>
  
                              <div class="accordion-item rounded mt-2">
                                  <h2 class="accordion-header" id="headingTwo">
                                      <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                          data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                          {{ __('messages.t58') }}
                                      </button>
                                  </h2>
                                  <div id="collapseTwo" class="accordion-collapse border-0 collapse" aria-labelledby="headingTwo"
                                      data-bs-parent="#accordionExample">
                                      <div class="accordion-body text-muted">
                                      {{ __('messages.t59') }}
  
                                      </div>
                                  </div>
                              </div>
  
                              <div class="accordion-item rounded mt-2">
                                  <h2 class="accordion-header" id="headingThree">
                                      <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                          data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                          {{ __('messages.t60') }}
                                      </button>
                                  </h2>
                                  <div id="collapseThree" class="accordion-collapse border-0 collapse" aria-labelledby="headingThree"
                                      data-bs-parent="#accordionExample">
                                      <div class="accordion-body text-muted">
                                      {{ __('messages.t61') }} 

  
                                      </div>
                              </div>
                              
                              <div class="accordion-item rounded mt-2">
                                  <h2 class="accordion-header" id="headingfour">
                                      <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                          data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                          {{ __('messages.t62') }}                                </button>
                                  </h2>
                                  <div id="collapsefour" class="accordion-collapse border-0 collapse" aria-labelledby="headingfour"
                                      data-bs-parent="#accordionExample">
                                      <div class="accordion-body text-muted">
                                      {{ __('messages.t63') }}                                 </div>
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
                            <h4 class="mb-4">{{ __('messages.t64') }}</h4>
                            <p class="para-desc mx-auto text-muted mb-0"> {{ __('messages.t65') }}



                            </p>
                            <div class="mt-4">
                                <a href="contact.html" class="btn btn-pills btn-primary m-1"><i class="uil uil-phone"></i>{{ __('messages.t66') }}</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-md-6 mt-4 pt-2">
                                <div class="card border-0 text-center features feature-primary rounded">
                                    <div class="icon text-center mx-auto rounded-md">
                                        <h3 class="mb-0"><i class="uil uil-phone"></i></h3>
                                    </div>
        
                                    <div class="card-body p-0 mt-4">
                                        <h5>{{ __('messages.t104') }}</h5>
                                        <p class="text-muted">{{ __('messages.t105') }}</p>
                                        <a href="tel:+218945782199" class="link">(+213) 780 22 11 11
</a>
                                    </div>
                                </div>
                            </div><!--end col-->
        
                            <div class="col-md-6 mt-4 pt-2">
                                <div class="card border-0 text-center features feature-primary rounded">
                                    <div class="icon text-center mx-auto rounded-md">
                                        <h3 class="mb-0"><i class="uil uil-envelope"></i></h3>
                                    </div>
        
                                    <div class="card-body p-0 mt-4">
                                        <h5>{{ __('messages.t106') }}</h5>
                                        <p class="text-muted">{{ __('messages.t107') }}</p>
                                        <a href="mailto:paymaster@runpay.tn" class="link">contact@paymaster.dz</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div>
                    </div>
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
      

    @endsection