@extends('layouts.paymaster')

@section('content')

      <!-- Home Start -->
      <section class="bg-half-170 d-table bg-primary w-100" style="background: url('images/bg-lines-one.png') center;">
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="heading-title text-center">
                            <h2 class="title text-white title-dark">{{ __('messages.t110') }} </h2>
                            <p class="para-desc mx-auto text-muted">{{ __('messages.t111') }} </p>
                            <div class="mt-4 pt-2">
                                <a href="{{ url('contact') }}" class="btn btn-light"><i class="uil uil-envelope align-middle h5"></i> {{ __('messages.t108') }} </a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
   
        <!-- Home End -->
        
        <!-- Start -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h6 class="text-primary">{{ __('messages.t112') }} 
                            </h6>
                            <h4 class="title mb-4">{{ __('messages.t113') }} </h4>
                            <p class="text-muted para-desc mx-auto mb-0">{{ __('messages.t111') }} </p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                @foreach($data as $item)
                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="card text-center team border-0 shadow rounded overflow-hidden">
                            <img src="{{ asset('Condidaa/'.$item->partner) }}" class="img-fluid" alt="">
                            
                            
                        </div>
                    </div><!--end col-->
                    @endforeach
                   

                   

                    <div class="col-12 text-center mt-4 pt-2">
                        <div class="alert alert-light alert-pills" role="alert">
                            <span class="badge bg-danger rounded-pill me-1">now</span>
                            <span class="content">{{ __('messages.t110') }} <a href="{{ url('contact') }}" class="text-primary">  {{ __('messages.now') }} </a></span>
                         </div>
                    </div>
                </div><!--end row-->
            </div><!--end container-->

          
        </section><!--end section-->
        <!-- End -->


    @endsection