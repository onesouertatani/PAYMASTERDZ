
@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                        <h3 class="page-title">{{ __('messages.t251') }}</h3>
                            <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('messages.t267') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('messages.t253') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="row">
                <div class="col-sm-12">
                    <div class="card comman-shadow">
                        <div class="card-body">
                            <form action="{{ route('partner/add/save') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title student-info">{{ __('messages.t253') }}
                                            <span>
                                                <a href="javascript:;"><i class="feather-more-vertical"></i></a>
                                            </span>
                                        </h5>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                        
                                        
                                            <label>Name <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control @error('partner_id') is-invalid @enderror" name="partner_id" placeholder="name" value="{{ old('partner_id') }}">
                                            @error('partner_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                        
                                        
                                            <label>Photo <span class="login-danger">*</span></label>
                                            <input type="file" class="form-control @error('partner') is-invalid @enderror" name="partner" placeholder="partner" value="{{ old('partner') }}">
                                            @error('partner')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="student-submit">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
