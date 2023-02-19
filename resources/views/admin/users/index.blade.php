
<title>{{ $title }}</title>

@extends('admin.layout.master')
@section('content')

<!-- Main Content-->
<div class="main-content side-content pt-0">
    <div class="container-fluid">
        <div class="inner-body">
            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <h2 class="main-content-title tx-24 mg-b-5">Roles & Permission</h2>
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Users</a></li>
                        <li class="breadcrumb-item active"><a href="{!! route('users') !!}">User List</a></li>                   
                    </ol>
                </div>
                <div class="d-flex">
                    <div class="justify-content-center">
                    <div class="col-md-10 pl-md-3">                            
                      <a class="btn ripple btn-secondary pd-x-30" href="{!! route('user.create') !!}">Add</a>
						</div>
                    </div>
                </div>
            </div>
            <!-- End Page Header -->
            @if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
							</ul>
						</div>
						@elseif($message = Session::get('message'))
						<div class="alert alert-success">
							<strong>Success!</strong><br><br>
							<ul>
							<li>{{$message}}</li>
							</ul>
						</div>
						@endif
            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card custom-card overflow-hidden">
                        <div class="card-body">
                           
                            <div class="table-responsive">
                                <table id="exportexample" class="table table-bordered border-t0 key-buttons text-nowrap w-100" >
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Image</th>
                                            <th>Phone</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td> <img alt="avatar" class="rounded-circle avatar-md mr-2" src="{{ url('assets/user_image/'.$user->image)}}"></td>
                                            <td>{{$user->phone}}</td>
                                            @if($user->status == 1)
                                            <td class="text-center">
                                                <span class="label text-success d-flex text-center"><span class="dot-label bg-success"></span>Active</span>
                                            </td>
                                            @else                                    
                                            <td class="text-center">
                                                <span class="label text-danger d-flex text-center"><span class="dot-label bg-danger"></span> Inactive </span>
                                            </td>
                                            @endif
                                            <td>                                       
                                                <a href="{{route('user.edit',$user->id)}}" class="btn btn-sm btn-info">
                                                    <i class="fe fe-edit-2"></i>
                                                </a>
                                                <a href="{{route('user.delete',$user->id)}}" class="btn btn-sm btn-danger">
                                                    <i class="fe fe-trash"></i>
                                                </a>
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
            <!-- End Row -->


        </div>
    </div>
</div>
<!-- End Main Content-->
@endsection
@section('footer')

@endsection