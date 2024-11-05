
@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">{{ __('messages.t251') }}</h3>
                            <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('messages.t267') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('messages.t252') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
         
      
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table comman-shadow">
                        <div class="card-body">
                            <div class="page-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="page-title">{{ __('messages.t252') }}</h3>
                                    </div>
                                    <div class="col-auto text-end float-end ms-auto download-grp">
                                        <a href="{{ route('partner/list') }}" class="btn btn-outline-gray me-2 active"><i class="feather-list"></i></a>
                                        <a href="{{ route('partner/grid') }}" class="btn btn-outline-gray me-2"><i class="feather-grid"></i></a>
                                        <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
                                        <a href="{{ route('partner/add/page') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                            <table id="DataList" class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread">
                                        <tr>
                                        <th>{{ __('messages.t259') }}</th>
                                            <th>Photo</th>
                                        
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($partnerList as $key=>$list )
                                        <tr>
                                        
                                        <td   class="avatar">{{ $list->partner_id }} </td>
                                            <td>
                                         
                                            <img src="{{ asset('Condidaa/'.$list->partner) }}" class="img-fluid rounded" alt="" height="100" width="100" style="float: center;margin: 0 15px 0 0;">
                 </td>
                                        
                                            <td class="text-center">
                
                                     <a href="{{ url('partner/delete/'.$list->id) }}" onclick="return confirm('Are you sure to want to delete it?')"><span class="btn btn-sm bg-danger-light department_delete">  <i class="feather-trash-2 me-1"></i>
                                 </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

@endsection
