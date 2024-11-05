@extends('layouts.paymaster')

@section('content')


        <!-- Home Start -->
        <section class="bg-half-170 bg-primary d-table w-100" style="background: url('images/bg-lines-one.png') center">
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="heading-title text-center">
                            <h2 class="text-white title-dark title mb-3">{{ __('messages.t108') }}</h2>
                            <p class="para-desc mx-auto text-white-50">{{ __('messages.t109') }}
                            </p>
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
        <section class="section pb-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="features-absolute bg-white p-4 p-md-5 rounded shadow">
                            <div class="custom-form">
                            <form class="form form-vertical" action="{{ route('form/save') }}" method="POST">
                        @csrf
                                                            <p id="error-msg"></p>
                                 
                                    <div id="simple-msg"></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">{{ __('messages.t222') }} <span class="text-danger">*</span></label>

                                                <input type="text" class="form-control @error('fullName') is-invalid @enderror" value="{{ old('name') }}"
                                                placeholder="{{ __('messages.t222') }}" id="first-name-icon" name="fullName">                                            </div>
                                        </div>
    
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">{{ __('messages.t223') }}  <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control @error('emailAddress') is-invalid @enderror" value="{{ old('email')}}"
                                                placeholder="{{ __('messages.t223') }} " id="first-name-icon" name="emailAddress" >                                            </div> 
                                        </div><!--end col-->
    
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">{{ __('messages.t224') }}  <span class="text-danger">*</span></label>
                                                <input type="number" class="form-control @error('phone_number') is-invalid @enderror" value="{{ old('phone_number') }}"
                                                placeholder="{{ __('messages.t224') }} " name="phone_number">                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                            <label class="form-label">{{ __('messages.t225') }}  <span class="text-danger">*</span></label>

                                        <select class="form-control" name="position">
                                            <optgroup label="General Requests">
                                               
                                              <option name="position" value="I have a question about paymaster" id="I have a question about paymaster">{{ __('messages.t228') }}</option>
                                               <option name="position" value="I want to integrate paymaster NOW" id="I want to integrate paymaster NOW">{{ __('messages.t229') }}</option>
                        <option name="position" value="Other" id="Other">{{ __('messages.t230') }}</option>
                                            </optgroup>
                                            
                                        </select></div>
                                    </div><!--end col-->


                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label">{{ __('messages.t226') }}  <span class="text-danger">*</span></label>
                                                <textarea name="salary" id="salary" rows="4" class="form-control" placeholder="{{ __('messages.t226') }} "></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary">{{ __('messages.t227') }} </button>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form>
                            </div><!--end custom-form-->
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 text-center features feature-primary">
                            <div class="icon text-center mx-auto rounded-md">
                                <h3 class="mb-0"><i class="uil uil-phone"></i></h3>
                            </div>

                            <div class="card-body p-0 mt-4">
                                <h5 class="title fw-bold">{{ __('messages.t104') }}</h5>
                                <p class="text-muted">{{ __('messages.t105') }}</p>
                                <a href="tel:+" class="link"> (+213) 780 22 11 11
</a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="card border-0 text-center features feature-primary">
                            <div class="icon text-center mx-auto rounded-md">
                                <h3 class="mb-0"><i class="uil uil-envelope"></i></h3>
                            </div>

                            <div class="card-body p-0 mt-4">
                                <h5 class="title fw-bold">{{ __('messages.t106') }}
</h5>
                                <p class="text-muted">{{ __('messages.t107') }}</p>
                                <a href="mailto:paymaster@runpay.tn" class="link">contact@paymaster.dz </a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                        <div class="card border-0 text-center features feature-primary">
                            <div class="icon text-center mx-auto rounded-md">
                                <h3 class="mb-0"><i class="uil uil-map-marker"></i></h3>
                            </div>
                            
                            <div class="card-body p-0 mt-4">
                                <h5 class="title fw-bold">Adresse</h5>
                                <p class="text-muted">56, Lot Ennahda, Bir Mourad Rais, 16000, Alger, Algerie</p>
                                <a href="https://maps.app.goo.gl/ZkaNgQ6cwy6FajKU9"
                                data-type="iframe" class="lightbox video-play-icon h6 link">Voir sur Google map</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container-fluid mt-100 mt-60">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="card map border-0">
                            <div class="card-body p-0">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d155560.99050376844!2d2.971396111614561!3d36.759559521222776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128fad6795639515%3A0x4ba4b4c9d0a7e602!2zQWxnZXIsIEFsZ8Opcmll!5e1!3m2!1sfr!2stn!4v1725089855733!5m2!1sfr!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->
    @endsection