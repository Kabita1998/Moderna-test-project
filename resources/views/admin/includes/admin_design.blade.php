<!doctype html>
<html lang="en">

@include('admin.includes.head')

<body>


<!--start wrapper-->
<div class="wrapper">


@include('admin.includes.header')



@include('admin.includes.sidebar')



    @yield('content')






    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->



</div>
<!--end wrapper-->

@include('admin.includes.footer')
