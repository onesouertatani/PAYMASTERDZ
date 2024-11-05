
@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title"> {{ __('messages.t245') }}</h3>
                            <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('messages.t267') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('messages.t245') }}</li>
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
                                        <h3 class="page-title">{{ __('messages.t245') }}
</h3>
                                    </div>
                                    <div class="col-auto text-end float-end ms-auto download-grp">
                                    
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                            <table id="DataList" class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread">
                                        <tr>
                                        <th>Email</th>
                                            <th>Statut</th>
                                            
                                            <th >Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($activityLog as $key => $item)
                                        <tr>
                                        <td>{{ $item->email }}</td>
                                            
                                            @if($item->description =='has log in')
                                    <td class="role_name"><span  class="badge badge-soft-success badge-border">{{ $item->description }}</span></td>
                                    @endif
 @if($item->description =='has logged out')
                                    <td><span  class="badge badge-soft-warning badge-border">{{ $item->description }}</span></td> @endif
                                   
                                    <td>{{ $item->date_time }}</td>
                               
                                         
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
