@extends('admin.includes.admin_design')
@section('site_title')
Profile - {{ $themes->website_name}}
@endsection
@section('content')

    <!--start content-->
    <main class="page-content">





        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="mb-0">Edit My Profile</h5>
                        <hr>
                        <div class="card shadow-none border">

                            @include('admin.includes._message')

                            <div class="card-body">
                                <form class="row g-3" method="post" action="{{ route('adminProfileUpdate', $adminDetails->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-6">
                                        <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" value="{{ $adminDetails->name }}" name="name" id="name">
                                    </div>

                                    <div class="col-6">
                                        <label for="email" class="form-label">E-Mail Address <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" value="{{ $adminDetails->email }}" name="email" id="email">
                                    </div>

                                    <div class="col-6">
                                        <label for="address" class="form-label"> Address</label>
                                        <input type="text" class="form-control" value="{{ $adminDetails->address }}" name="address" id="address">
                                    </div>

                                    <div class="col-6">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="text" class="form-control" value="{{ $adminDetails->phone }}" name="phone" id="phone">
                                    </div>

                                    <div class="col-6">
                                        <label for="image" class="form-label">Profile Image</label>
                                        <input type="file" class="form-control" value="" name="image" id="image" accept="image/*" onchange="readURL(this)">
                                    </div>

                                    <div class="col-6"></div>

                                    @if(!empty($adminDetails->image))
                                    <img id="one" src="{{ asset('public/uploads/admin/'.$adminDetails->image) }}" alt="" style="width: 150px !important;">
                                    @else
                                        <img id="one" src="{{ asset('public/default/profile.png') }}" alt="" style="width: 150px !important;">
                                    @endif

                                    <div class="text-start">
                                        <a href="javascript:" rel="{{ $adminDetails->id }}" rel1="delete-image" class="btn btn-danger btn-delete px-4">Delete Image</a>
                                        <button type="submit" class="btn btn-primary px-4">Update Profile</button>
                                    </div>

                                </form>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div><!--end row-->

    </main>
    <!--end page main-->
    @endsection

@section('js')
    <script type="text/javascript">
        function readURL(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function (e){
                    $("#one").attr('src', e.target.result).width(150);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

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
@endsection
