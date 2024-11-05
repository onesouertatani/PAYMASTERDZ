@extends('layouts.paymastermaster')

@section('content')

    
</br>
        <!-- Start -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2 class="mb-4">{{ __('messages.t88') }}</h2>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row">
                @foreach ($data as $key => $item)
                    <div class="col-lg-4 col-md-6 mb-4 pb-2">
                        <div class="card blog blog-primary border-0 shadow rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img src="{{ asset('Condidaa/'.$item->img) }}" class="img-fluid" alt="">
                            </div>
                            <div class="card-body p-4">
                                <ul class="list-unstyled mb-2">
                                    <li class="list-inline-item text-muted small me-3"><i class="uil uil-clock text-dark h6 me-1"></i>5{{ $item->lien}}</li>
                                </ul>
                                <a  class="text-dark title h5">{{ $item->nom }}</a>
                                <p class="text-muted">{{ $item->ver }}</p>

                              
                            </div>
                        </div>
                    </div><!--end col-->
                    
                 @endforeach   
                
                 

                   
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
  
            
  
              <div class="container mt-100 mt-60">
                  <div class="row align-items-center">
                      <div class="col-md-6">
                          <div class="me-lg-4">
                              <img src="images/23984-ai.png" class="img-fluid" alt="">
                          </div>
                      </div><!--end col-->
  
                      <div class="col-md-6">
                          <div class="section-title mb-4 pb-2">
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
                                      {{ __('messages.t57') }}  </div>
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
                                          {{ __('messages.t62') }}                                   </button>
                                  </h2>
                                  <div id="collapsefour" class="accordion-collapse border-0 collapse" aria-labelledby="headingfour"
                                      data-bs-parent="#accordionExample">
                                      <div class="accordion-body text-muted">
                                      {{ __('messages.t63') }}                    </div>
                                  </div>
                              </div>
                          </div>
                      </div><!--end col-->

                      
                  </div><!--end row-->
              </div><!--end container-->
  
              <div class="container mt-100 mt-60">
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
        </div><!--end container-->
            
  
             
          </section><!--end section-->
  
          <!-- End -->

    @endsection