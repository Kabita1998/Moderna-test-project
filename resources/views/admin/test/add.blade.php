@extends('admin.includes.admin_design')

@section('site_title')
Add New Test- {{ $themes->website_name}}
 @endsection

@section('content')


 <!--start content-->
 
 <main class="page-content">






<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h5 class="mb-0">Add New Test</h5>
                <hr>
                <div class="card shadow-none border">

                    <div class="card-body">
                        <form class="row g-3" method="post" action="{{route('test.store')}}" enctype="multipart/form-data">
                            @csrf
                            @include('admin.test.form')
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

<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script>
  $(function() {
    $('#status').bootstrapToggle({
      on: 'Mark as Active',
      off: 'Mark as Inactive'
    });
  })
</script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
    $(document).ready(function() {
  $('#details').summernote({
      height: 100
  });
});
</script>


    <script type="text/javascript">
        function readURL(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function (e){
                    $("#one").attr('src', e.target.result).width(300);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

@endsection


