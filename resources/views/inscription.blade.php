@extends('layouts.paymaster')

@section('content')


      
        <!-- Start -->
        <section class="bg-half-170 d-table w-100 bg-primary" style="background: url('images/bg-lines-one.png') center center;">
            <div class="container">
                <div class="row mt-5 align-items-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="heading-title">
                            <h6 class="text-white-50">Paymaster</h6>
                            <h4 class="heading text-white title-dark mb-3">{{ __('messages.t17') }}</h4>
                            <p class="para-desc text-white-50">{{ __('messages.t59') }}</p>
                            
                            <div class="mt-4">
                                <a href="{{ url('Systemepaiement') }}" class="btn btn-soft-light-alt">En savoir plus</a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-5 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="mx-auto bg-white p-4 rounded shadow-lg ms-lg-5">
                            <h4 class="form-title mb-4">{{ __('messages.t180') }}  :</h4>
                            <form action="{{ route('form/save') }}" method="POST">
                        @csrf
                                <div class="mb-3 position-relative">
                                    <label class="form-label">{{ __('messages.t222') }} <span class="text-danger">*</span></label>
                                    <input type="hidden" class="form-control @error('fullName') is-invalid @enderror" value="Register"
                                                placeholder="{{ __('messages.t222') }} " id="first-name-icon" name="fullName">
                                                <input type="text" class="form-control @error('position') is-invalid @enderror" value="{{ old('position') }}"
                                                placeholder="{{ __('messages.t222') }} " name="position">  
                                </div>

                                <div class="mb-3 position-relative">
                                    <label class="form-label">{{ __('messages.t223') }} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('emailAddress') is-invalid @enderror" value="{{ old('emailAddress') }}"
                                                placeholder="{{ __('messages.t223') }} " id="first-name-icon" name="emailAddress" > 
                                </div>

                                <div class="mb-3 position-relative">
                                    <label class="form-label">{{ __('messages.t224') }} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('phone_number') is-invalid @enderror" value="{{ old('phone_number') }}"
                                                placeholder="{{ __('messages.t224') }}" name="phone_number">  
                                </div>
                                <div class="mb-3 position-relative">
                                    <label class="form-label">Site <span class="text-danger">*</span></label>
                                    <input type="text" id="salary" name="salary"  value="{{ old('salary') }}" class="form-control @error('salary') is-invalid @enderror" required placeholder="Site">
  
                                </div>
                           
                                
                                <div class="d-grid">
                                    <button  type="submit"class="btn btn-primary">{{ __('messages.t168') }}</button>
                                </div>
                            </form><!--end form-->
                           
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->



        <!-- Start -->
        <section class="section">
            <div class="container mt-70 mt-60">
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
        <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':

                    toastr.options.timeOut = 10000;
                    toastr.info("{{ Session::get('message') }}");
                    var audio = new Audio('audio.mp3');
                    audio.play();
                    break;
                case 'success':

                    toastr.options.timeOut = 10000;
                    toastr.success("{{ Session::get('message') }}");
                    var audio = new Audio('audio.mp3');
                    audio.play();

                    break;
                case 'warning':

                    toastr.options.timeOut = 10000;
                    toastr.warning("{{ Session::get('message') }}");
                    var audio = new Audio('audio.mp3');
                    audio.play();

                    break;
                case 'error':

                    toastr.options.timeOut = 10000;
                    toastr.error("{{ Session::get('message') }}");
                    var audio = new Audio('audio.mp3');
                    audio.play();

                    break;
            }
        @endif
    </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

     <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">

    @endsection