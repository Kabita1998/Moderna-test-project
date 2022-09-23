@extends('admin.includes.admin_design')

@section('site_title')
 View All Test- {{ $themes->website_name}}
 @endsection



@section('content')
<!--start content-->
<main class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Test</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Tests</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<a href="{{ route('test.add')}}" class="btn btn-primary">Add New Test</a>


						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="test_datatable" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>S.N</th>
										<th>Name</th>
										<th>Gender</th>
										<th>Email</th>
										<th>Phone</th>
										<th>Address</th>
										<th>Nationality</th>
										<th>Date of birth</th>
										<th>Education background</th>
										<th>Actions </th>
									</tr>
											</thead>
											<tbody>
											@foreach($tests as $test)
											<tr>
									<td>{{$loop->index + 1}}</td>
									<td>{{$test->name}}</td>
									<td>{{$test->gender}}</td>
									<td>{{$test->email}}</td>
									<td>{{$test->phone}}</td>
									<td>{{$test->address}}</td>
									<td>{{$test->nationality}}</td>
									<td>{{$test->dob}}</td>
									<td>{{$test->education_background}}</td>
									
									
									<td>
											<a  data-bs-toggle="modal" data-bs-target="#exampleModal{{$test->id}}" class="btn btn-sm btn-info" style="color: white">
												<i class="bx bx-edit-alt"></i></a>

												<a href="javascript:" rel="{{ $test->id }}" rel1="delete-test" class="btn btn-sm btn-danger btn-delete" style="color: white">
												<i class="bx bx-trash-alt"></i></a>
										
										
										</td>

								</tr>
								<!-- Modal -->
								<div class="modal fade" id="exampleModal{{$test->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Test</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="row g-3" method="post" action="{{ route('test.update', $test->id) }}">
                                                @csrf
                                                <div class="col-12">
                                                    <label class="form-label" for="name">Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="name" id="name" value="{{ $test->name }}" >
                                                </div>

												<div class="col-12">
                                                    <label class="form-label"   for="gender">gender  <span class="text-danger">*</span></label>
                                                    <select name="gender"  class="form-control"  value="{{ $test->gender }}">
														<option value=""> --select--</option>
														<option value="male">Male</option>
														<option value="female">Female</option>
														<option value="others">Others</option>
													</select> 
                                                </div>

                                                <div class="col-6">
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-success">Update Information</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
							
							@endforeach
							</tbody>
							</table>
						</div>
					</div>
				</div>


			</main>

			

			
	   <!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="model-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-body">
      </div>

    </div>
  </div>
</div>

@endsection()

	@section('js')

			
 

<script>
        $('body').on('click', '.btn-delete', function (event) {
            event.preventDefault();

            var SITEURL = '{{ URL::to('') }}';

            var id = $(this).attr('rel');
            var deleteFunction = $(this).attr('rel1');
            swal({
                    title: "Are You Sure? ",
                    text: "You will not be able to recover this record again",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yes, Delete it!"
                },
                function () {
                    window.location.href =  SITEURL + "/admin/" + deleteFunction + "/" + id;
                });
        });
    </script>



 @endsection()
       <!--end page main-->

