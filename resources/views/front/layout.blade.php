<!DOCTYPE html>
<html  lang="en" class="theme-light">
<head>
    @include("front.components.meta")
</head>
<body>
<!-- Start Preloader Area -->
<div class="preloader">
    <div class="loader">
        <div class="wrapper">
            <div class="circle circle-1"></div>
            <div class="circle circle-1a"></div>
            <div class="circle circle-2"></div>
            <div class="circle circle-3"></div>
        </div>
    </div>
</div>
<!-- End Preloader Area -->

@include("front.components.header")

@yield("content")

@include("front.components.footer")
</body>
</html>

