
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>News Edit</title>
<!-- Fontfaces CSS-->
 <!-- Fontfaces CSS-->
 <link rel="stylesheet" href="{{ URL::asset('css/font-face.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/font-awesome-4.7/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/font-awesome-5/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/mdi-font/css/material-design-iconic-font.min.css') }}">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap-4.1/bootstrap.min.css') }}">

    <!-- Vendor CSS-->
    <link rel="stylesheet" href="{{ URL::asset('vendor/animsition/animsition.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/wow/animate.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}">

    <!-- Main CSS-->
    <link rel="stylesheet" href="{{ URL::asset('css/theme.css') }}">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                        <form method="post" action="{{url('news', $news->id) }}">
                        @method('PATCH')
                        @csrf
                                <div class="form-group">
                                    <label> News Name</label>
                                    <input class="au-input au-input--full" type="name" name="name" value="{{$news->news_name}}">
                                </div>
                                <div class="form-group">
                                    <label>News Title</label>
                                    <input class="au-input au-input--full" type="title" name="title"value="{{$news->news_title}}"  >
                                </div>
                                <div class="form-group">
                                    <label>News Content</label>
                                    <textarea class="au-input au-input--full" rows="3" cols="40" type="content" name="content"> {{$news->news_content}}</textarea>
                                </div>
                            
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">save</button> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
 <!-- Jquery JS-->
 <script type="text/javascript" src="{{URL::asset('vendor/jquery-3.2.1.min.js')}}"></script>

<!-- Bootstrap JS-->
<script type="text/javascript" src="{{URL::asset('vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>

<!-- Vendor JS       -->
<script type="text/javascript" src="{{URL::asset('vendor/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendor/wow/wow.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendor/animsition/animsition.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendor/counter-up/jquery.waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendor/counter-up/jquery.counterup.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendor/chartjs/Chart.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendor/select2/select2.min.js')}}"></script>


<!-- Main JS-->
<script type="text/javascript" src="{{URL::asset('js/main.js')}}"></script>

</body>

</html>
<!-- end document-->