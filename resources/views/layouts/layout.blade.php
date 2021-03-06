<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>::: This is a blog :::</title>
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('') }}/favicon.ico" />
    {{--<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">--}}
    {{--<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">--}}
    <script src="//cdn.bootcss.com/showdown/1.4.1/showdown.js"></script>
    <script src="//cn.vuejs.org/js/vue.js"></script>
    <link rel="stylesheet" href="{{ asset('bower_components') }}/bootstrap/dist/css/bootstrap.css">
    <link href="//cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/animate.css/3.5.1/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bower_components') }}/bootstrap-material-design/dist/css/bootstrap-material-design.css">
    <link rel="stylesheet" href="{{ asset('bower_components') }}/bootstrap-material-design/dist/css/ripples.css">
    <link href="{{ asset('bower_components') }}/snackbarjs/dist/snackbar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bower_components') }}/nprogress/nprogress.css">
    <style>
        body {
            width: 1210px;
            margin: 0 auto;
        }
    </style>
</head>
<body style="background-image:url({{ asset('image').'/bg.jpg' }});background-position:center; background-repeat:repeat">
@include('layouts.nav')

<div id="container">
    @yield('content')
</div>
<button style="display: none" id="btn" type="button" class="btn btn-default"
        data-content="我只想让他弹出来玩一玩,没有其他的意思😂" data-toggle="snackbar" data-timeout="0">Show snackbar
</button>
<script src="{{ asset('bower_components') }}/jquery/dist/jquery.js"></script>
<script src="{{ asset('bower_components') }}/jquery-pjax/jquery.pjax.js"></script>
{{--<script type="text/javascript" src="{{ asset('bower_components') }}/pjax/src/jquery.pjax.js"></script>--}}
<script src="{{ asset('bower_components') }}/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="{{ asset('bower_components') }}/bootstrap-material-design/dist/js/material.js"></script>
<script src="{{ asset('bower_components') }}/bootstrap-material-design/dist/js/ripples.js"></script>
<script src="{{ asset('bower_components') }}/snackbarjs/dist/snackbar.min.js"></script>
<script src="{{ asset('bower_components') }}/nprogress/nprogress.js"></script>
<script src="//cdn.bootcss.com/showdown/1.4.1/showdown.js"></script>
<script src="//cn.vuejs.org/js/vue.js"></script>
@yield('scriptbottom')
<script !src="">
    $(document).ready(function () {
        NProgress.start();
    });
    window.onload = function () {
        NProgress.done(false);
    };
    $(function () {
        $.material.init();
        var jokes = [
            "我只想让他弹出来玩一玩,没有其他的意思😂",
            "My heart is almost collapsed at the moment.😂",
            "My fault?",
            "Important things are to be repeated for 3 times.😂",
            "But it is of no damn use.",
            "F**k off your sleep, rock up and let's have fun!😂",
            "The ugly are asleep, while the handsome are awake.😂",
            "He wastes his beautiful face by making a living by his talent.😂",
        ];
        var seed = Math.floor(Math.random() * 6)
        btn.setAttribute('data-content', jokes[seed]);
        btn.click();
    });
    //
</script>
@include('layouts.pjax')
@yield('scriptcode')
</body>
</html>