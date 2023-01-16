<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- META DATA -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->



        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

		<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        <link rel="stylesheet" href="frontend/assets/css/additional.css" />

        <!-- TITLE OF SITE -->
        <title>GameLoop</title>


        <!-- for title img -->
		<link rel="shortcut icon" type="image/icon" href="{{ asset('frontend/assets/images')}}/logo/favicon.png"/>

        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css')}}/font-awesome.min.css">

		<!--linear icon css-->
		<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

		<!--animate.css-->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css')}}/animate.css">

		<!--hover.css-->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css')}}/hover-min.css">

		<!--vedio player css-->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css')}}/magnific-popup.css">

		<!--owl.carousel.css-->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css')}}/owl.carousel.min.css">
		<link href="{{ asset('frontend/assets/css')}}/owl.theme.default.min.css" rel="stylesheet"/>


        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css')}}/bootstrap.min.css">

		<!-- bootsnav -->
		<link href="{{ asset('frontend/assets/css')}}/bootsnav.css" rel="stylesheet"/>

        <!--style.css-->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css')}}/style.css">

        <!--responsive.css-->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css')}}/responsive.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

	<body>
		<!--header start-->
		<section id="home"  class="header">
             @yield('header')
		</section><!--/.header-->
		<!--header end-->

		<!--menu start-->
		<section id="menu">
			@yield('menu')
		</section><!--/#menu-->
		<!--menu end-->

		<!-- header-slider-area start -->
		<section class="header-slider-area">
			<div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">

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
											<h2>Consult Your <br> Business With Us</h2>
											<p>
												We are the unique Consultancy Farm for your business solution, That is ready to take challenge and knockout your business problems.
											</p>
											<button type="button" class="slide-btn">
											get started
											</button>
											<button type="button"  class="slide-btn">
												explore more
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
												Consult Your <br> Business
											</h2>
											<p>
												We are the unique Consultancy Farm for your business solution, That is ready to take challenge and knockout your business problems.
											</p>
											<button type="button"  class="slide-btn">
												get started
											</button>
											<button type="button"  class="slide-btn
											">
												explore more
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
			</div><!-- /.carousel-->

		</section>
		<!-- header-slider-area end -->

		<!--we-do start -->
		<section  class="we-do">
			@yield('table')
		</section>
		<!--we-do end-->

		<!--about-us start -->
		<section id="about" class="about-us">
        @yield('content')
        </section>
		<!--about-us end -->

		<!--hm-footer start-->
		<section class="hm-footer">
			@yield('hm-footer')
		</section>
		<!--hm-footer end-->

		<!-- footer-copyright start -->
		<footer class="footer-copyright">
			@yield('footer-copyright')
		</footer>
		<!-- footer-copyright end -->



		<!-- jaquery link -->

		<script src="{{ asset('frontend/assets/js')}}/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->

        <!--modernizr.min.js-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


		<!--bootstrap.min.js-->
        <script type="text/javascript" src="{{ asset('frontend/assets/js')}}/bootstrap.min.js"></script>

		<!-- bootsnav js -->
		<script src="{{ asset('frontend/assets/js')}}/bootsnav.js"></script>

		<!-- for manu -->
		<script src="{{ asset('frontend/assets/js')}}/jquery.hc-sticky.min.js" type="text/javascript"></script>


		<!-- vedio player js -->
		<script src="{{ asset('frontend/assets/js')}}/jquery.magnific-popup.min.js"></script>


		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

		<!-- isotope js -->
		<!-- <script src="{{ asset('frontend/assets/js')}}/masonry.min.js"></script>
		<script src="{{ asset('frontend/assets/js')}}/isotop-custom.js"></script> -->

        <!--owl.carousel.js-->
        <script type="text/javascript" src="{{ asset('frontend/assets/js')}}/owl.carousel.min.js"></script>

		<!-- counter js -->
		<script src="{{ asset('frontend/assets/js')}}/jquery.counterup.min.js"></script>
		<script src="{{ asset('frontend/assets/js')}}/waypoints.min.js"></script>

        <!--Custom JS-->
        <script type="text/javascript" src="{{ asset('frontend/assets/js')}}/jak-menusearch.js"></script>
        <script type="text/javascript" src="{{ asset('frontend/assets/js')}}/custom.js"></script>


    </body>

</html>



