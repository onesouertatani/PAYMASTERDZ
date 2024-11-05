@extends('layouts.paymastermaster')

@section('content')
    <div class="section account-pages">
        <div class="container">
            <div class="row justify-content-center mt-1">
                <div class="col-lg-5">
                    <div class="p-4">
                        <h2 class="text-center">{{ __('messages.t232') }} </h2>

                        <div class="mt-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="" class="btn btn-primary w-100 mt-2"> Facebook</a>
                                </div>
                                <div class="col-lg-6">
                                    <a href="" class="btn btn-danger w-100 mt-2"></i> Google</a>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 pt-3 text-center">
                            <h6 class="f-14">{{ __('messages.t233') }}</h6>
                        </div>
                        <form action="{{ route('loginAdmin') }}" method="POST" class="authentication-form custom-form mt-4">
            @csrf
                            <div class="form-group mb-3">
                                <label class="text-muted fw-bold f-15 mb-2">{{ __('messages.t234') }}</label>
                                <input type="text"  class="form-control @error('email') is-invalid @enderror" name="email" placeholder="{{ __('messages.t235') }} ">
                            </div>

                            <div class="form-group mb-3">
                                <label class="text-muted fw-bold f-15 mb-2">{{ __('messages.t236') }}  </label>
                                <input type="password" class="form-control pass-input @error('password') is-invalid @enderror" name="password" placeholder="{{ __('messages.t237') }} ">
                            </div>

                            <div class="form-group row mt-4 mb-3">
                                <div class="col-sm-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                                        <label class="custom-control-label f-14 fw-bold" for="customControlInline">{{ __('messages.t238') }} </label>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-end">
                                    <a href="" class="text-primary f-14 fw-bold"> {{ __('messages.t239') }} </a>
                                </div>
                            </div>

                            <div class="form-group mb-0 row">
                                <div class="col-12 mt-2">
                                    <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">{{ __('messages.t240') }}  <i class="fas fa-sign-in-alt ms-1"></i></button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>

        </div>
    </div>
     
    @endsection
