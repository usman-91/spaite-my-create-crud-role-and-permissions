
<title>{{ $title }}</title>
@extends('admin.layout.master')
@section('header')
		<!-- Internal Daterangepicker css-->
		<link href="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

		<!-- InternalFileupload css-->
		<link href="{{ asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>

		<!-- InternalFancy uploader css-->
		<link href="{{ asset('assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />

		<!-- InternalSumoselect css-->
		<link rel="stylesheet" href="{{ asset('assets/plugins/sumoselect/sumoselect.css')}}">

		<!-- Internal TelephoneInput css-->
		<link rel="stylesheet" href="{{ asset('assets/plugins/telephoneinput/telephoneinput.css')}}">
@endsection
@section('content')

<!-- Main Content-->
<div class="main-content side-content pt-0">
				<div class="container-fluid">
					<div class="inner-body">		
						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Update Role</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{!! route('role') !!}">List Roles</a></li>
									<li class="breadcrumb-item active" aria-current="page">Edit Role</li>
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center">
									
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
							<div class="col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body accordion-wizard">
										
										<form  name="submit" action="{{route('role.update',$role->id)}}" method="Post">
										  @csrf
											<div class="list-group">
												<div class="list-group-item py-4" data-acc-step>
													<h6 class="mb-0" data-acc-title>Role Name</h6>
													<div data-acc-content>
														<div class="my-3 row">
															<div class="form-group col-md-6">
																<label>Name:</label>
																<input type="text" name="name" value="{{$role->name}}" class="form-control" />
															</div>                                                          
											          </div>
													  <div class="form-group col-md-8">
														<p class="mb-2">Permissions</p>
														<div class="selectgroup selectgroup-pills">
                                                               @foreach($permissions as $permission)
															<label class="selectgroup-item d-flex justify-content-around">
																<input type="checkbox" @if(in_array($permission->id, $rolePermissions)) checked @endif name="permission[]" value="{{$permission->id}}" class="selectgroup-input">
																<span class="selectgroup-button">{{$permission->name}}</span>
															</label>	
                                                            @endforeach
														</div>
													</div>
													  <div class="mg-t-30">
														<button class="btn ripple btn-primary pd-x-20 btn-block w-25" type="submit">Update</button>
													</div>
													</div>
												</div>										
											</div>
										</form>
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
 <!-- Internal Form-wizard js-->
   <script src="{{ asset('assets/js/form-wizard.js')}}"></script>

   	<!-- Internal Daternagepicker js-->
		<script src="{{ asset('assets/plugins/bootstrap-daterangepicker/moment.min.js')}}"></script>
		<script src="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

		<!-- Internal Fileuploads js-->
		<script src="{{ asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
        <script src="{{ asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>

		<!-- InternalFancy uploader js-->
		<script src="{{ asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
        <script src="{{ asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
        <script src="{{ asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
        <script src="{{ asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
        <script src="{{ asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

		<!-- Internal Form-elements js-->
		<script src="{{ asset('assets/js/advanced-form-elements.js')}}"></script>
		<script src="{{ asset('assets/js/select2.js')}}"></script>

		<!-- InternalSumoselect js-->
		<script src="{{ asset('assets/plugins/sumoselect/jquery.sumoselect.js')}}"></script>

		<!-- Internal TelephoneInput js-->
		<script src="{{ asset('assets/plugins/telephoneinput/telephoneinput.js')}}"></script>
		<script src="{{ asset('assets/plugins/telephoneinput/inttelephoneinput.js')}}"></script>
@endsection