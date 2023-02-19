
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
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Permissions</a></li>
                        <li class="breadcrumb-item active"><a href="{!! route('permission') !!}">Permissions List</a></li>                   
                    </ol>
                </div>
                <div class="d-flex">
                    <div class="justify-content-center">
                    <div class="col-md-10 pl-md-3">                            
                      <a class="btn ripple btn-secondary pd-x-30" href="{!! route('permission.create') !!}">Add</a>
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
                                            <th>ID</th>
                                            <th>Name</th>                                           
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($permissions as $permission)
                                        <tr>
                                            <td>{{$permission->id}}</td>
                                            <td>{{$permission->name}}</td>                      
                                            <td>                                       
                                                <a href="{{route('permission.edit',$permission->id)}}" class="btn btn-sm btn-info">
                                                    <i class="fe fe-edit-2"></i>
                                                </a>
                                                <a href="{{route('permission.delete',$permission->id)}}" class="btn btn-sm btn-danger">
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