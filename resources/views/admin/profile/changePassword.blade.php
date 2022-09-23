@extends('admin.includes.admin_design')
@section('site_title')
Change Password - {{ $themes->website_name}}
@endsection

@section('content')

    <!--start content-->
    <main class="page-content">





        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="mb-0">Update Password</h5>
                        <hr>
                        <div class="card shadow-none border">

                            @include('admin.includes._message')

                            <div class="card-body">
                                <form class=" g-3" method="post" action="" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="current_password" class="form-label">Current Password <span class="text-danger">*</span></label>
                                            <input type="password" class="form-control" name="current_password" id="current_password">
                                        </div>
                                        <p id="correct_password"></p>
                                    </div>

                                   <div class="row">
                                       <div class="col-6">
                                           <label for="password" class="form-label">New Password <span class="text-danger">*</span></label>
                                           <input type="password" class="form-control" name="password" id="password">
                                       </div>
                                   </div>


                                   <div class="row">
                                       <div class="col-6">
                                           <label for="confirm_password" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                                           <input type="password" class="form-control" name="confirm_password" id="confirm_password">
                                       </div>
                                   </div>


                                    <br>



                                    <div class="text-start">
                                        <button type="submit" class="btn btn-primary px-4">Update Password</button>
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

    <script>
        $("#current_password").keyup(function () {
            var current_password = $("#current_password").val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: 'check-password',
                data: {current_password:current_password},
                success: function (resp) {
                    if(resp == "true"){
                        $("#correct_password").text("Current Password Matches").css("color", "green");
                    }else if(resp == "false"){
                        $("#correct_password").text("Password Does Not Match").css("color", "red");

                    }
                }, error: function (resp) {
                    alert("Something Went Wrong");
                }
            });
        });
    </script>
@endsection
