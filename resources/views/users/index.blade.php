@extends('templateBack')
@section('Contenido')

<div class="main-content app-content">
	<!-- container -->
	<div class="main-container container-fluid">
		<!-- breadcrumb -->
		<div class="breadcrumb-header justify-content-between">
			<div class="left-content mt-2">
				<!-- <a class="btn ripple btn-primary" data-bs-target="#Vertically" data-bs-toggle="modal" href="{{url('users/create')}}"><i class="fe fe-plus me-2"></i>Add New User</a> -->
				<a name="NewUser" id="NewUser" class="btn btn-primary" href="{{url('users/create')}}" role="button">Crear Usuario</a>
			</div>
		</div>
		<!-- /breadcrumb -->
		<!--Row-->
			<!-- Row -->
			<div class="row row-sm">
				<div class="col-lg-12">
					<div class="card custom-card">
						<div class="card-body">
							<div class="table-responsive  deleted-table">
								<table id="user-datatable" class="table table-bordered text-nowrap border-bottom Userlist">
									<thead>
										<tr>
											<th class="wd-2">
												Photo
											</th>
											<th>Name</th>
											<th>Documento</th>
											<th>N. Documento</th>
											<th>Tipo de Usuario</th>
											<th>Email</th>
											<th>Telefono</th>
										</tr>
									</thead>
									<tbody>
										@foreach($users as $user)
										<tr>
											<td class="text-center">
												<div class="avatar-md  rounded-circle">
													<a href="{{url('users/'.$user -> id)}}"><img alt="avatar" class="rounded-circle" src="{{asset('assets/back/img/faces/4.jpg')}}"></a>
												</div>
											</td>
											<td>
												<a href="{{url('users/'.$user -> id)}}"><p class="tx-14 font-weight-semibold text-dark mb-1">{{$user->name}}</p></a>
												<a href="{{url('users/'.$user -> id)}}"><p class="tx-13 text-muted mb-0">{{$user->lastname}}</p></a>
											</td>
											<td>
												<span class="text-muted tx-13">{{$user->id_type->name}}</span>
											</td>
											<td>
												<span class="badge bg-light text-muted tx-13">{{$user->document}}</span>
											</td>
											<td>
												<span class="text-muted tx-13">{{$user->user_type->name}}</span>
											</td>
											<td>
												<span class="badge font-weight-semibold bg-success-transparent text-success tx-15">{{$user -> email}}</span>
											</td>
											<td>
												<span class="text-muted tx-13">{{$user -> phone}}</span>
											</td>
											<td><a href="{{url('users/'.$user -> id.'/edit')}}" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
												<i class="las la-pen"></i>
											</a></td>
										</tr>
										@endforeach()
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Row -->
		<!-- row closed  -->
	</div>
	<!-- Container closed -->
</div>
<!-- New User Modal-->
<!-- <div class="modal fade" id="Vertically">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content modal-content-demo">
			<div class="modal-header">
				<h6 class="modal-title">Add User</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<div class="p-4">
					<form class="form-horizontal">
						<div class="form-group">
							<input type="text" class="form-control" id="inputName" placeholder="Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="inputName1" placeholder="Role">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
						</div>
						<div class="form-group mb-0 justify-content-end">
							<div class="checkbox">
								<div class="custom-checkbox custom-control">
									<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
									<label for="checkbox-2" class="custom-control-label mt-1 text-dark">New User?</label>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn ripple btn-primary" type="button">Add</button>
				<button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
			</div>
		</div>
	</div>
</div> -->
<!-- /New User Modal-->
<!-- main-content closed -->

@endsection()