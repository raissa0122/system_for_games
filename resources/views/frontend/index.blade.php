@extends('frontend.app')

@section('header')
<div class="container">
    <div class="header-left">
        <ul class="pull-left">
            <li>
                <a href="#">
                    <i class="fa fa-phone" aria-hidden="true"></i> +359 89 830 9484
                </a>
            </li><!--/li-->
            <li>
                <a href="#">
                    <i class="fa fa-envelope" aria-hidden="true"></i>raissa@gmail.com
                </a>
            </li><!--/li-->
        </ul><!--/ul-->
    </div><!--/.header-left -->
    <div class="header-right pull-right">
        <ul>
            <li class="reg">
                <a href="#" data-toggle="modal" data-target=".bs-example-modal-sm">
                    Register
                </a>
                    /
                <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">
                    Log in
                </a>

            </li><!--/li -->
            <li>
                <div class="social-icon">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul><!--/.ul -->
                </div><!--/.social-icon -->
            </li><!--/li -->
        </ul><!--/ul -->
    </div><!--/.header-right -->
</div>
@endsection

@section('header-slide-area')<div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="single-slide-item slide-1">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="single-slide-item-content">
                                <h2>Enter the world of <br> Games With Us</h2>
                                <p>
                                    We are A system for providing information to users about the most popular games!
                                </p>
                                <button type="button" class="slide-btn">
                                    <a href="/games_view">Check our games</a>
                                </button>
                                <button type="button" class="slide-btn">
                                    <a href="/creators_view">Check our creators</a>
                                </button>

                            </div><!-- /.single-slide-item-content-->
                        </div><!-- /.col-->
                    </div><!-- /.row-->
                </div><!-- /.container-->
            </div><!-- /.single-slide-item-->
        </div><!-- /.item .active-->
        <div class="item">
            <div class="single-slide-item slide-2">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="single-slide-item-content">
                                <h2>
                                    Enter the world of <br>  Games With Us
                                </h2>
                                <p>
                                    We are A system for providing information to users about the most popular games!
                                </p>
                                <button type="button"  class="slide-btn">
                                    <a href="/games_view">Check our games</a>
                                </button>
                                <button type="button"  class="slide-btn">
                                    <a href="/creators_view">Check our creators</a>
                                </button>
                            </div><!-- /.single-slide-item-content-->

                        </div><!-- /.col-->
                    </div><!-- /.row-->
                </div><!-- /.container-->
            </div><!-- /.single-slide-item-->
        </div><!-- /.item .active-->
    </div><!-- /.carousel-inner-->

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="lnr lnr-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="lnr lnr-chevron-right"></span>
    </a>
</div>@endsection

@section('menu')
<div class="container">
    <div class="menubar">
        <nav class="navbar navbar-default">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <h2 style = color:whitesmoke;}>GameLoop</h2>
                </a>
            </div><!--/.navbar-header -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">Home</a></li>
                    <li><a href="/games_view">Games</a></li>
                    <li><a href="/creators_view">Creators</a></li>
                    <li><a href="/genres_view">Genres</a></li>
                    <li><a href="/admin">Sign Up</a></li>
                    <li>
                        <form action="">
                            <input type="text" name="search" placeholder="Search....">
                            <a href="#">
                                <span class="lnr lnr-magnifier"></span>
                            </a>
                        </form>
                    </li>
                </ul><!-- / ul -->
            </div><!-- /.navbar-collapse -->
        </nav><!--/nav -->
    </div><!--/.menubar -->
</div><!-- /.container -->
@endsection

@section('hm-footer')
<div class="container">
    <div class="hm-footer-details">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="hm-footer-widget">
                    <div class="hm-foot-title ">
                        <div class="logo">
                            <a href="index.html">
                                <h2 style = color:whitesmoke;}>GameLoop</h2>
                            </a>
                        </div><!-- /.logo-->
                    </div><!--/.hm-foot-title-->
                    <div class="hm-foot-para">
                        <p>
                            We are A system for providing information to users about the most popular games!
                        </p>
                    </div><!--/.hm-foot-para-->
                    <div class="hm-foot-icon">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li><!--/li-->
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li><!--/li-->
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li><!--/li-->
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><!--/li-->
                        </ul><!--/ul-->
                    </div><!--/.hm-foot-icon-->
                </div><!--/.hm-footer-widget-->
            </div><!--/.col-->
            <div class=" col-md-2 col-sm-6 col-xs-12">
                <div class="hm-footer-widget">
                    <div class="hm-foot-title">
                        <h4>Useful Links</h4>
                    </div><!--/.hm-foot-title-->
                    <div class="footer-menu ">
                        <ul class="">
                            <li><a href="/games_view" >Games</a></li>
                            <li><a href="/creators_view">Creators</a></li>
                            <li><a href="/genres_view">Genres</a></li>
                            <li><a href="/admin">Sign Up</a></li>
                        </ul>
                    </div><!-- /.footer-menu-->
                </div><!--/.hm-footer-widget-->
            </div><!--/.col-->
            <div class=" col-md-3 col-sm-6 col-xs-12">
                <div class="hm-footer-widget">
                    <div class="hm-foot-title">
                        <img src="https://yt3.googleusercontent.com/ytc/AMLnZu85CAqWR5Qc43zkQ3uxDyJJl_lT9jgeVysBDhDG=s900-c-k-c0x00ffffff-no-rj" alt="VTU">
                    </div>
                </div><!--/.hm-footer-widget-->
            </div><!--/.col-->
            <div class=" col-md-3 col-sm-6  col-xs-12">
                <div class="hm-footer-widget">
                    <div class="hm-foot-title">
                        <img src="data:image/png;base64,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", alt="FMI">

                    </div><!--/.hm-foot-email-->
                </div><!--/.hm-footer-widget-->
            </div><!--/.col-->
        </div><!--/.row-->
    </div><!--/.hm-footer-details-->
</div><!-- /.container -->
@endsection

@section('footer-copyright')
<div class="container">
    <div class="row">
        <div class="col-sm-7">
            <div class="foot-copyright pull-left">
                <p>
                    &copy; All Rights Reserve
                     <a href="https://www.themesine.com">GameLoop</a>
                </p>
            </div><!--/.foot-copyright-->
        </div><!--/.col-->
        <div class="col-sm-5">
            <div class="foot-menu pull-right
            ">
                <ul>
                    <li ><a href="#">legal</a></li>
                    <li ><a href="#">sitemap</a></li>
                    <li ><a href="#">privacy policy</a></li>
                </ul>
            </div><!-- /.foot-menu-->
        </div><!--/.col-->
    </div><!--/.row-->
    <div id="scroll-Top">
        <i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
    </div><!--/.scroll-Top-->
</div><!-- /.container -->
@endsection
