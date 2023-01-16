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
                                <img src="{{ asset('frontend/assets/images')}}/logo/logo.png" alt="logo" />
                            </a>
                        </div><!-- /.logo-->
                    </div><!--/.hm-foot-title-->
                    <div class="hm-foot-para">
                        <p>
                            Lorem ipsum dolor sit amt conetur adcing elit. Sed do eiusod tempor utslr. Ut laboris nisi ut aute irure dolor in rein velit esse.
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
                            <li><a href="index.html" >Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="services.html">Service</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                        </ul>
                    </div><!-- /.footer-menu-->
                </div><!--/.hm-footer-widget-->
            </div><!--/.col-->
            <div class=" col-md-3 col-sm-6 col-xs-12">
                <div class="hm-footer-widget">
                    <div class="hm-foot-title">
                        <h4>from the news</h4>
                    </div><!--/.hm-foot-title-->
                    <div class="hm-para-news">
                        <a href="blog_single.html">
                            The Pros and Cons of Starting an Online Business.
                        </a>
                        <span>12th June 2017</span>
                    </div><!--/.hm-para-news-->
                    <div class="footer-line">
                        <div class="border-bottom"></div>
                    </div>
                    <div class="hm-para-news">
                        <a href="blog_single.html">
                            The Pros and Cons of Starting an Online Business.
                        </a>
                        <span>12th June 2017</span>
                    </div><!--/.hm-para-news-->
                </div><!--/.hm-footer-widget-->
            </div><!--/.col-->
            <div class=" col-md-3 col-sm-6  col-xs-12">
                <div class="hm-footer-widget">
                    <div class="hm-foot-title">
                        <h4> Our Newsletter</h4>
                    </div><!--/.hm-foot-title-->
                    <div class="hm-foot-para">
                        <p class="para-news">
                            Subscribe to our newsletter to get the latest News and offers..
                        </p>
                    </div><!--/.hm-foot-para-->
                    <div class="hm-foot-email">
                        <div class="foot-email-box">
                            <input type="text" class="form-control" placeholder="Email Address">
                        </div><!--/.foot-email-box-->
                        <div class="foot-email-subscribe">
                            <button type="button" >go</button>
                        </div><!--/.foot-email-icon-->
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
