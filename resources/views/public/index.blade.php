
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tin24h</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{csrf_token()}}" />


    <!-- css -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="{{asset("assets/public/asset/css/")}}/bootstrap.css" rel="stylesheet" />
    <link href="{{asset("assets/public/asset/css/")}}/bootstrap-responsive.css" rel="stylesheet" />
    <link href="{{asset("assets/public/asset/css/")}}/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="{{asset("assets/public/asset/css/")}}/jcarousel.css" rel="stylesheet" />
    <link href="{{asset("assets/public/asset/css/")}}/flexslider.css" rel="stylesheet" />
    <link href="{{asset("assets/public/asset/css/")}}/style.css" rel="stylesheet" />
    <!-- Theme skin -->
    <link href="skins/default.css" rel="stylesheet" />
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
    <link rel="shortcut icon" href="ico/favicon.png" />


</head>

<body>
<div id="app">
    <div id="wrapper" >
        <!-- start header -->
            <div class="container">
                <div class="row" style="background-color:#aee2ae">
                    <div class="navbar navbar-static-top">
                                <nav>
                                    <ul class="nav topnav" >
                                        <li >
                                            <router-link to="/home" >Trang chủ </router-link>
                                        </li>
                                        <li>
                                            <router-link to="/blog">Tin Tức </router-link>
                                        </li>
                                        <li>
                                       <router-link to="/contact">Liên hệ </router-link>
                                        </li>
                                    </ul>
                                </nav>
                    </div>
                </div>
                <div class="row" >
                    <div class="span2">
                        <div class="logo" style="width:200px;height:140px">
                            <img src="{{asset("assets/public/asset/img/")}}/logo3.png" alt="" class="logo" style="height:140px" />
                        </div>

                    </div>
                    <div class="span10">
                        <div class="logo" style="width:100%;height:140px">
                            <img src="{{asset("assets/public/asset/img/")}}/banner.png" alt="" class="logo" style="margin-left:100px;width:700px;height:fit-content" />
                        </div>
                    </div>
                </div>
            </div>

        <!-- end header -->
        {{--Vue Routing--}}
        <home-main></home-main>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="widget">
                            <h5 class="widgetheading">Tin nổi bật</h5>

                        </div>
                    </div>
                    <div class="span3">
                        <div class="widget">
                            <h5 class="widgetheading">Tin hàng ngày</h5>

                        </div>
                    </div>
                    <div class="span3">
                        <div class="widget">
                            <h5 class="widgetheading">Danh mục</h5>

                        </div>
                    </div>
                    <div class="span3">
                        <div class="widget">
                            <address>
                               280 An Dương Vương-Phường 4-Quận 5-Thành Phố Hồ Chí Minh
                            </address>
                            <p>
                                <i class="icon-phone"></i> 0327542020 <br>
                                <i class="icon-envelope-alt">  thuybinh11997@gmail.com</i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="span6">

                        </div>
                        <div class="span6">
                            <ul class="social-network">
                                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
                                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
                                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square"></i></a></li>
                                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square"></i></a></li>
                                <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
</body>
<a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
<script src="{{asset("js/app.js")}}"></script>
<!-- javascript
  ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset("assets/public/asset/js/")}}/jquery.js"></script>
<script src="{{asset("assets/public/asset/js/")}}/jquery.easing.1.3.js"></script>
<script src="{{asset("assets/public/asset/js/")}}/bootstrap.js"></script>
<script src="{{asset("assets/public/asset/js/")}}/jcarousel/jquery.jcarousel.min.js"></script>
<script src="{{asset("assets/public/asset/js/")}}/jquery.fancybox.pack.js"></script>
<script src="{{asset("assets/public/asset/js/")}}/jquery.fancybox-media.js"></script>
<script src="{{asset("assets/public/asset/js/")}}/google-code-prettify/prettify.js"></script>
<script src="{{asset("assets/public/asset/js/")}}/portfolio/jquery.quicksand.js"></script>
<script src="{{asset("assets/public/asset/js/")}}/portfolio/setting.js"></script>
<script src="{{asset("assets/public/asset/js/")}}/jquery.flexslider.js"></script>
<script src="{{asset("assets/public/asset/js/")}}/jquery.nivo.slider.js"></script>
<script src="{{asset("assets/public/asset/js/")}}/modernizr.custom.js"></script>
<script src="{{asset("assets/public/asset/js/")}}/jquery.ba-cond.min.js"></script>
<script src="{{asset("assets/public/asset/js/")}}/jquery.slitslider.js"></script>
<script src="{{asset("assets/public/asset/js/")}}/animate.js"></script>

<!-- Template Custom JavaScript File -->
<script src="{{asset("assets/public/asset/js/")}}/custom.js"></script>

</body>
</html>
