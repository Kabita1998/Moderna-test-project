@extends('admin.includes.admin_design')
@section('site_title')
Theme Setting - {{ $themes->website_name}}
@endsection

@section('content')

<main class="page-content">

@include('admin.includes._message')
<div class="row">
  <div class="col-12 col-lg-12">
    <div class="card shadow-sm border-0">
      <div class="card-body">
          <h5 class="mb-0">Site Settings </h5>
          
          <hr>
          <form action="{{route('settingsUpdate',$setting->id)}}" method="post" enctype="multipart/form-data">
			  @csrf
            
  
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<p class="mb-0" text-right><span class="text-danger">*</span> ARE REQUIRED FIELDS</p>
									</div>
									<hr/>
									<div class="row mb-3">
										<label for="email" class="col-sm-3 col-form-label">E-Mail Address <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="email" name="email" placeholder="Enter Your E-Mail Address"value="{{$setting->email}}">
										</div>
                                        </div>

                                        <div class="row mb-3">
										<label for="phone" class="col-sm-3 col-form-label">Phone<span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Your Phone Number"value="{{$setting->phone}}">
										</div>
                                        </div>

                                        <div class="row mb-3">
										<label for="address" class="col-sm-3 col-form-label"> Address <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="address" name="address" placeholder="Enter Your  Address"value="{{$setting->address}}">
										</div>
                                        </div>




                                       

                                        
                                       
                                       

                                       
									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<button type="submit" class="btn btn-success px-5">Update Settings</button>
										
									</div>
								</div>
							</div>
							</form>

						</div>
            
</div>
        

      </div>
    </div>
  
 
</div><!--end row-->

</main>
@endsection

@section('js')
    <script type="text/javascript">
        function readURL(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function (e){
                    $("#one").attr('src', e.target.result).width(120);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

		<script type="text/javascript">
        function readURL2(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function (e){
                    $("#two").attr('src', e.target.result).width(60);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
@endsection