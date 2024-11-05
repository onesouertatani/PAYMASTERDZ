    @extends('layouts.master')

@section('content')
<div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                        <h3 class="page-title">{{ __('messages.t254') }}</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('messages.t267') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('messages.t255') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="student-group-form">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search by ID ...">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search by Name ...">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search by Phone ...">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="search-student-btn">
                            <button type="btn" class="btn btn-primary">Search</button>
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
                                        <h3 class="page-title">All Contacts</h3>
                                    </div>
                                    <div class="col-auto text-end float-end ms-auto download-grp">
                                        <a href="" class="btn btn-outline-gray me-2 active"><i class="feather-list"></i></a>
                                        <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
                                        <a href="{{ route('form/staff/new') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                            <table id="DataList" class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">

                        <thead>
                          
                            <tr>
                        <th>
                          Id
                        </th>
                        <th>
                        Name
                        </th>
                        <th>
                         Phone
                        </th>
                        <th>
                        Etat
                        </th>
                        <th>
                         Date
                        </th>
                        <th  class="text-end">
                         action
                        </th>
                      </tr>   
                        </thead>
                        
                        <tbody>        

                            @foreach ($data as $key => $item)
                                <tr>
                                    <td class="id">{{ ++$key }}</td>
                                    @if ($item->full_name !='FAQ')
                                    <td class="name">{{ $item->full_name }}</td>
                                   
                                    @else
                                    <td class="name"><span class="badge bg-dark">{{ $item->full_name }}</span></td>
                                    @endif
                                    <td class="phone_number">{{ $item->phone_number }}</td>
 @if ($item->sex=='EN ATTENTE')
                                    <td class="avatars"><span class="badge bg-warning">{{ $item->sex }}</span></td>
@endif
 @if ($item->sex=='EN COURS DE TRAITEMENT')
                                    <td class="avatars"><span class="badge bg-info">{{ $item->sex }}</span></td>
@endif
 @if ($item->sex=='RÉSOLU')
                                    <td class="avatars"><span class="badge bg-success">{{ $item->sex }}</span></td>
@endif
 @if ($item->sex=='ANNULER')
                                    <td class="avatars"><span class="badge bg-danger">{{ $item->sex }}</span></td>
@endif
 <td class="phone_number">{{ $item->created_at }}</td>
                                    <td class="text-center">
                                     
                                        @if ($item->sex !='RÉSOLU')
                                   

                                        <a href="{{ url('form/view/detail/'.$item->id) }}">
                                            <span  class="btn btn-sm bg-danger-light"><i class="feather-edit"></i>
</span> 
                                        </a>    @endif
                                        <a href="{{ url('delete/'.$item->id) }}" onclick="return confirm('Are you sure to want to delete it?')"><span class="btn btn-sm bg-danger-light department_delete">  <i class="feather-trash-2 me-1"></i>
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
    {{-- model department delete --}}

   

@section('script')
    {{-- delete js --}}
    <script>
        $(document).on('click','.department_delete',function()
        {
            var _this = $(this).parents('tr');
            $('.e_id').val(_this.find('.id').text());
        });
    </script>
@endsection

@endsection
