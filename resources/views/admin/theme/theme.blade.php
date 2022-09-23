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
          <h5 class="mb-0">Theme Settings </h5>
          
          <hr>
          <form action="{{route('themeUpdate',$theme->id)}}" method="post" enctype="multipart/form-data">
			  @csrf
            
  
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<p class="mb-0" text-right><span class="text-danger">*</span> ARE REQUIRED FIELDS</p>
									</div>
									<hr/>
									<div class="row mb-3">
										<label for="website_name" class="col-sm-3 col-form-label">Website Name <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="website_name" name="website_name" placeholder="Enter Your Website Name"value="{{$theme->website_name}}">
										</div>
                                        </div>


                                        <div class="row mb-3">
										<label for="website_tagline" class="col-sm-3 col-form-label">Website  Tagline<Taglinespan class="text-danger">*</Taglinespan></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="website_tagline" name="website_tagline" placeholder="Enter Your Website Tagline"value="{{$theme->website_tagline}}">
										</div>
                                        </div>

										<div class="row mb-3">
										<label for="address" class="col-sm-3 col-form-label">Address <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="address" name="address" placeholder="Enter Your Address"value="{{$theme->address}}">
										</div>
                                        </div>

										<div class="row mb-3">
										<label for="email" class="col-sm-3 col-form-label">E-Mail<span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Email"value="{{$theme->email}}">
										</div>
                                        </div>

										<div class="row mb-3">
										<label for="phone" class="col-sm-3 col-form-label">Phone<span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Your phone"value="{{$theme->phone}}">
										</div>
                                        </div>
                                        
                                       
                                        <div class="row mb-3">
										<label for="logo" class="col-sm-3 col-form-label">Website Logo</label>
										<div class="col-sm-9">
											<input type="file" class="form-control" id="logo" name="logo" placeholder="Enter Your Website Logo" accept="image/*" onchange="readURL(this)">
										</div>
                                        </div>
										<br>

										<div class="row mb-3">
										<label for="logo" class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<img src="{{asset('public/uploads/'.$theme->logo)}}" alt="" width="120px" id="one">
										</div>
                                        </div>
										<br>

                                        <div class="row mb-3">
										<label for="favicon" class="col-sm-3 col-form-label">Website Favicon</label>
										<div class="col-sm-9">
											<input type="file" class="form-control" id="favicon" name="favicon" placeholder="Enter Your Website Favicon"accept="image/*"  onchange="readURL2(this)">
										</div>
                                        </div>
										<br>
										<div class="row mb-3">
										<label for="favicon" class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<img src="{{asset('public/uploads/'.$theme->favicon)}}" alt="" width="60px"id="two">
										</div>
                                        </div>



										<br>
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