
@extends('layouts.master')
@section('content')

<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">{{ __('messages.t249') }}</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('messages.t267') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('messages.t248') }}</li>
                    </ul>
                </div>
            </div>
        </div>
<div class="row">
<div class="col-md-9">
<ul class="list-links mb-4">
<li class="active"><a href="{{ route('blog/list') }}">Active Blog</a></li>
</ul>
</div>
<div class="col-md-3 text-md-end">
<a href="{{ route('blog/add/page') }}" class="btn btn-primary btn-blog mb-3"><i class="feather-plus-circle me-1"></i> {{ __('messages.t250') }}</a>
</div>
</div>


<div class="row">
@foreach ($blogList as $key=>$item )
<div class="col-md-6 col-xl-4 col-sm-12 d-flex">
<div class="blog grid-blog flex-fill">
<div class="blog-image">
<a href="blog-details.html"><img class="img-fluid" src="{{ asset('Condidaa/'.$item->img) }}" alt="Post Image"></a>
<div class="blog-views">
<i class="feather-eye me-1"></i> 225
</div>
</div>
<div class="blog-content">
<ul class="entry-meta meta-item">
<li>
<div class="post-author">
<a href="profile.html">
<img src="/images/{{ Session::get('avatar') }}" alt="Post Author">
<span>
<span class="post-title"> {{ Session::get('role_name') }}</span>
<span class="post-date"><i class="far fa-clock"></i> {{ $item->lien}}</span>
</span>
</a>
</div>
</li>
</ul>
<h3 class="blog-title"> {{ $item->nom }}</h3>
<p>{{ $item->ver }} </p>
</div>
<div class="row">


<div class="edit-options">
<div class="edit-delete-btn">
 <a href="" class="text-success"><i class="feather-edit-3 me-1"></i>  {{ __('messages.t277') }}</a>
<a class="text-danger"  href="{{ url('blog/delete/'.$item->id) }}" onclick="return confirm('Are you sure to want to delete it?')"><i class="feather-trash-2 me-1"></i>  {{ __('messages.t278') }}</a>

</div>

                                                       
<div class="status-toggle">
<input id="rating_4" class="check" type="checkbox" checked="checked">
<label for="rating_4" class="checktoggle checkbox-bg">checkbox</label><span>Active</span>


</div>

</div>
</div>
</div>
</div>
@endforeach  


</div>





</div>
</div>

@endsection
