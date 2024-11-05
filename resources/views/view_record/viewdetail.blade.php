    @extends('layouts.master')

@section('content')
<div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Edit Contacts</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('form/view/detail') }}">Contact</a></li>
                                <li class="breadcrumb-item active">Edit Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col-sm-12">
                    <div class="card comman-shadow">
                        <div class="card-body">
                        <form class="form form-horizontal" action="{{ route('form/view/update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $data[0]->id }}">
                            <div class="form-body">
                                <div class="row">
                                    
                                    <div class="col-md-4">
                                        <label><h6 class="fw-semibold mb-0">Full Name :</h6></label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" class="form-control"
                                                    placeholder="Enter full name" id="first-name-icon" name="fullName" value="{{ $data[0]->full_name }}" readonly>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div></br></br>
                                     <div class="col-md-4">
                                        <label> <h6 class="fw-semibold mb-0">Statut :</h6> </label>
                                    </div><div class="col-md-8">
                                         <div class="form-check form-switch">
                                     <input class="form-check-input" type="radio" name="sex" value="ANNULER"  id="sex1">                            <label class="form-check-label" for="sex1" >ANNULER</label>
                        </div>
                          <div class="form-check form-switch">
                                    <input class="form-check-input" type="radio" name="sex" value="RÉSOLU" id="sex2">                            <label class="form-check-label" for="flexSwitchCheckDefault">RÉSOLU</label>
                        </div>
                        <div class="form-check form-switch">
                         <input class="form-check-input" type="radio" name="sex"  value="EN COURS DE TRAITEMENT" id="sex3" checked>
                            <label class="form-check-label" for="flexSwitchCheckChecked">EN COURS DE TRAITEMENT</label>
                        </div> </div>

                        </br></br>
                                    <div class="col-md-4">
                                        <label><h6 class="fw-semibold mb-0">Email Address :</h6></label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="email" class="form-control"
                                                    placeholder="Enter email" id="first-name-icon" name="emailAddress" value="{{ $data[0]->email_address }}" readonly>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-envelope"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div></br></br>
                                    <div class="col-md-4">
                                        <label><h6 class="fw-semibold mb-0">Phone number :</h6></label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="number" class="form-control"
                                                    placeholder="Enter phone number" name="phone_number" value="{{ $data[0]->phone_number }}" readonly>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-phone"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </br></br>   
                                    <div class="col-md-4">
                                        <label><h6 class="fw-semibold mb-0">Request type :</h6></label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" class="form-control"
                                                    placeholder="Enter position" name="position" value="{{ $data[0]->position }}" readonly>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-envelope-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </br></br>
                                    <div class="col-md-4">
                                        <label><h6 class="fw-semibold mb-0">Message :</h6></label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">

                                              
                                                
                                                {!! $data[0]->salary !!}
                                            </div>
                                        </div>
                                    </div>
</br></br>
                                    <div class="col-md-4">
                                        <label>Reply :</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                {!! $data[0]->department !!}
                                                 <textarea id="summernote"  class="form-control @error('department') is-invalid @enderror" value="{{ $data[0]->department }}" 
                                                placeholder="Write your response" name="department"></textarea>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <p> We have received your request. We will take care of it <span class="text-danger">*</span></p>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
                                        <a href="{{ route('form/view/detail') }}" class="btn btn-light-secondary me-1 mb-1">Back</a>
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