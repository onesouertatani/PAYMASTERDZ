
@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">{{ __('messages.t244') }}</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('messages.t267') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('messages.t244') }}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">{{ __('messages.t244') }}</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <a href="" class="btn btn-outline-gray me-2 active"><i
                                            class="feather-list"></i></a>
                                    <a href="{{ route('user/grid/page') }}" class="btn btn-outline-gray me-2"><i
                                            class="feather-grid"></i></a>
                                    <a href="#" class="btn btn-outline-primary me-2"><i
                                            class="fas fa-download"></i> Download</a>
                                    <a href="{{ url('/newregister') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table id="DataList" class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread">
                                    <tr>
                                   
                                        <th> ID</th>
                                        <th>Profile</th>
                                        <th>{{ __('messages.t259') }}</th>
                                        <th>Role</th>
                                        <th>Email</th>
                                       
                                        <th>Status</th>
                                       
                                       
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key=>$list )
                                    <tr>
                                 
                                        <td class="user_id">{{ $list->user_id }}</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a class="avatar avatar-sm me-2">
                                                    <img class="avatar-img rounded-circle"src="/images/{{ $list->avatar }}"alt="{{ $list->name }}">
                                                </a>
                                            </h2>
                                        </td>
                                        <td>{{ $list->name }}</td>
                                        
                                      
                                        
                                        <td>
                                        @if ($list->role_name === 'Normal User')
                                                <a class="badge badge-soft-success badge-border">{{ $list->role_name }}</a>
                                                @elseif ($list->role_name === 'Admin')
                                                <a class="badge badge-soft-warning badge-border">{{ $list->role_name }}</a>
                                                @elseif ($list->role_name === 'Super Admin')
                                                <a class="badge badge-soft-danger badge-border" >{{ $list->role_name }}</a>
                                                @else 
                                                <a class="badge badge-soft-info badge-border" >{{ $list->role_name }}</a>
                                                @endif
                                        </td>
                                        <td>{{ $list->email }}</td>
                                        <td>
                                            <div>
                                                @if ($list->status === 'Active')
                                                <a class="badge badge-outline-success">{{ $list->status }}</a>
                                                @elseif ($list->status === 'Inactive')
                                                <a class="badge badge-outline-warning">{{ $list->status }}</a>
                                                @elseif ($list->status === 'Disable')
                                                <a class="badge badge-outline-danger" >{{ $list->status }}</a>
                                                @else 
                                                @endif
                                            </div>
                                        </td>
                                        <td>{{ $list->join_date }}</td>
                                        <td class="text-end">
                                            <div class="actions">
                                                <a href="{{ url('view/user/edit/'.$list->user_id) }}"class="btn btn-sm bg-danger-light">
                                                    <i class="feather-edit"></i>
                                                </a>
                                                
                                                <a href="{{ url('view/user/profile/'.$list->user_id) }}"class="btn btn-sm bg-danger-light">
                                                    <i class="feather-eye"></i>
                                                </a>
                                                @if (Session::get('role_name') === 'Admin')
                                                <a class="btn btn-sm bg-danger-light user_delete" data-bs-toggle="modal" data-bs-target="#deleteUser">
                                                    <i class="feather-trash-2 me-1"></i>
                                                </a>
                                                
                                                @endif
                                            </div>
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

{{-- model user delete --}}
<div class="modal fade contentmodal" id="deleteUser" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header pb-0 border-bottom-0  justify-content-end">
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i
                    class="feather-x-circle"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('user/delete') }}" method="POST">
                    @csrf
                    <div class="delete-wrap text-center">
                        <div class="del-icon">
                            <i class="feather-x-circle"></i>
                        </div>
                        <input type="hidden" name="user_id" class="e_user_id" value="">
                        <input type="hidden" name="avatar" class="e_avatar" value="">
                        <h2>Sure you want to delete</h2>
                        <div class="submit-section">
                            <button type="submit" class="btn btn-success me-2">Yes</button>
                            <a class="btn btn-danger" data-bs-dismiss="modal">No</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@section('script')

{{-- delete js --}}
<script>
    $(document).on('click','.user_delete',function()
    {
        var _this = $(this).parents('tr');
        $('.e_user_id').val(_this.find('.user_id').text());
        $('.e_avatar').val(_this.find('.avatar').text());
    });
</script>
@endsection

@endsection
