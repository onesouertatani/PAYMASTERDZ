    @extends('layouts.master')

@section('content')


<div class="page-wrapper">
        <div class="content container-fluid">

        <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Add contact</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Contact</a></li>
                                <li class="breadcrumb-item active">Add contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card comman-shadow">
                        <div class="card-body">
                        <form action="{{ route('form/add/save') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                    <div class="col-md-12 mb-12">
                                    <h6>Type of request :</h6>
                                    <p>Please choose the type of <code style="color:#008000">complaint you want to</code> send from the options provided.</p>
                                    <div class="form-group">
                                        <select class="choices form-select " name="position">
                                            <optgroup label="Demandes Générales">
                                               
                                              <option name="position" value="J'ai une question à propos de paymaster" id="J'ai une question à propos de paymaster">J'ai une question à propos de paymaster</option>
                                               <option name="position" value="je veux intégrer paymaster" id="je veux intégrer paymaster">je veux intégrer paymaster</option>
                        <option name="position" value="Autre" id="Autre">Autre</option>
                                            </optgroup>
                                            
                                        </select>
                                    </div>
                                </div>
                              


                                        <div class="col-12">
                                            <div class="form-group">
                                                <h6>Your name :</h6>
                                   
                                                <input type="text" class="form-control @error('fullName') is-invalid @enderror" value="{{ old('name') }}"
                                                placeholder="{{ old('name') }}" id="first-name-icon" name="fullName">
                                                 
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <h6>E-mail :</h6>
                                   
                                                <input type="text" class="form-control @error('emailAddress') is-invalid @enderror" value="{{ old('email') }}"
                                                placeholder="{{ old('email') }}" id="first-name-icon" name="emailAddress">
                                                 
                                            </div>
                                        </div>
                          
                                           <div class="col-12">
                                            <div class="form-group">
                                                <h6>Phone number:</h6>
                                            
                                            </div>
                                        </div>

<div class="row">
                                <div class="col-sm-6 mb-1">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">+218 </span>
                                        <input type="number" class="form-control @error('phone_number') is-invalid @enderror" value="{{ old('phone_number') }}"
                                                placeholder="Your Phone number" name="phone_number">
                                    </div>
                                </div>
                            
                            </div>

                                        
                                          <div class="col-12">
                                            <div class="form-group">
                                    <p>How we can <code style="color:#008000">help you </code> ?</p>
                                    <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                    <textarea id="summernote"  class="form-control @error('salary') is-invalid @enderror" value="" 
                                                placeholder="Write your response" name="salary"></textarea>
                                                
                                            </div>
                                        </div>                          
                                                  
                                            </div>
                                        </div>
        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Cannel</button>
                                        </div>
                                    </div>
                                </div>
                                <input type="checkbox" name="checkbox" checked="checked" >
</label> Send<code style="color:#008000"> Confirmation</code> by Email</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection