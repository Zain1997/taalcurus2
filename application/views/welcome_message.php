<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>De Taalcursus</title>

	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/bootstrap.min.css">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css">
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

</head>
<body>

	<div id="modal" class="popupContainer" style="display:none;">
	<header class="popupHeader">
		<span class="header_title">Login</span>
		<span class="modal_close"><i class="fa fa-times"></i></span>
	</header>

    <section class="popupBody">
	<div class="social_login">
	    <div class="action_btns">
	        <div class="one_half">
	            <a class="btn" href="#" id="login_form" name="login_form">Login</a>
	        </div>
	        <div class="one_half last">
	            <a class="btn" href="#" id="register_form" name=
	            "register_form">Sign up</a>
	        </div>
	    </div>
	</div>
	<div class="user_login">
    <form method="post" action="">
        <label>Email / Username</label> <input name="username" type="text"><br>
        <label>Password</label> <input name="password" type="password"><br>

        <div class="action_btns">
            <div class="one_half">
                <a class="btn back_btn" href="#">Back</a>
            </div>

            <div class="one_half last">
                <a class="btn btn_red" href="#">Login</a>
            </div>
        </div>
    </form>

    <a class="forgot_password" href="#">Forgot password?</a>
</div>


<div class="user_register">
    <form>
        <label>Full Name</label> <input type="text"><br>
        <label>Email Address</label> <input type="email"><br>
        <label>Password</label> <input type="password"><br>

        <div class="action_btns">
            <div class="one_half">
                <a class="btn back_btn" href="#">Back</a>
            </div>

            <div class="one_half last">
                <a class="btn btn_red" href="#">Register</a>
            </div>
        </div>
    </form>
</div>

    </section>
</div>

<!-- Main container -->
<div class="page-container">

	<!-- bloc-0 -->
	<div class="bloc bloc-fill-screen bgc-white bg-lines-h2-bg l-bloc bg-repeat" id="bloc-0">
		<div class="container fill-bloc-top-edge">
			<nav class="navbar row">
				<div class="navbar-header">
					<button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-1">
						<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button>
				</div>
				<div class="navbar-collapse navbar-1 collapse">
					<ul class="site-navigation nav navbar-nav pull-right " id="home">
						<li>
							<a class="ltc-outer-space" id="pl-undefined" onclick="scrollToTarget('1')">Home</a>
						</li>
						<li>
							<a class="ltc-outer-space" id="pl-undefined" onclick="scrollToTarget('#cursus')">Cursus</a>
						</li>
						<li>
							<a class="ltc-outer-space" id="pl-undefined" onclick="scrollToTarget('#contact')">Contact</a>
						</li>
						<li>
							<a class="ltc-outer-space" id="pl-undefined" onclick="scrollToTarget('#overons')">Over ons</a>
						</li>
						<li>
							 <a id="modal_trigger" href="#modal" class="ltc-outer-space">Login or register</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="bloc bloc-fill-screen bg-tile-d-bg bg-repeat bgc-white l-bloc" id="bloc-0" style="height: 800px;">
		<div class="container">
			<div class="row">
				<div class="col-sm-5 col-sm-6">
					<h1 class="lake-hero-text-s text-left">
						De Taalcursus
					</h1>
					<h3 class="text-left mg-lg lake-hero-text-sub-s">
						Lorum Ipsum
					</h3>
				</div>
				<div class="col-sm-6">
					<img src="http://upload.wikimedia.org/wikipedia/commons/d/df/Deftig_pand_met_lage_verdieping_onder_schilddak_in_Winschoten_1849.jpg" class="img-responsive" width="100%" >
				</div>
			</div>
		</div>
		<div class="container fill-bloc-bottom-edge">
			<div class="row">
				<div class="col-sm-12">
				</div>
			</div>
		</div>
	</div>
		</div>
	<!-- bloc-0 END -->

	<!-- cursus -->
	<div class="bloc bgc-white bg-lines-dl2-bg l-bloc bg-repeat" id="cursus">
		<div class="container bloc-lg">
			<div class="row">
				<div class="col-sm-4">
					<div class="panel">
						<div class="panel-heading bgc-columbia-blue">
							<h2 class="mg-clear text-center ">
								Basis
							</h2>
						</div>
						<div class="panel-body">
							<ul class="list-unstyled list-sp-md">
								<li>
									<h4 class="text-center mg-md">
										Amazigh
									</h4>
								</li>
								<li>
									<h4 class="text-center mg-md">
										Nederlands
									</h4>
								</li>
								<li>
									<h4 class="text-center mg-md">
										Engels
									</h4>
								</li>
								<li>
									<h4 class="text-center mg-md">
										Duits
									</h4>
								</li>
							</ul>
						</div>
						<div class="panel-footer">
							<a href="index.html" class="btn btn-d btn-lg btn-block">Koop nu<br></a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="panel">
						<div class="panel-heading bgc-tea-green">
							<h2 class="mg-clear text-center ">
								Gevorderd
							</h2>
						</div>
						<div class="panel-body">
							<ul class="list-unstyled list-sp-md">
								<li>
									<h4 class="text-center mg-md">
										Amazigh
									</h4>
								</li>
								<li>
									<h4 class="text-center mg-md">
										Frans
									</h4>
								</li>
								<li>
									<h4 class="text-center mg-md">
										Engels
									</h4>
								</li>
								<li>
									<h4 class="text-center mg-md">
										Duits
									</h4>
								</li>
							</ul>
						</div>
						<div class="panel-footer">
							<a href="index.html" class="btn btn-d btn-lg btn-block">Koop nu</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="panel">
						<div class="panel-heading bgc-blond">
							<h2 class="mg-clear text-center ">
								Professioneel
							</h2>
						</div>
						<div class="panel-body">
							<ul class="list-unstyled list-sp-md">
								<li>
									<h4 class="text-center mg-md">
										Amazigh
									</h4>
								</li>
								<li>
									<h4 class="text-center mg-md">
										Frans
									</h4>
								</li>
								<li>
									<h4 class="text-center mg-md">
										Arabisch
									</h4>
								</li>
								<li>
									<h4 class="text-center mg-md">
										Duits
									</h4>
								</li>
							</ul>
						</div>
						<div class="panel-footer">
							<a href="index.html" class="btn btn-d btn-lg btn-block">Koop nu</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- cursus END -->

	<!-- Footer - contact -->
	<div class="bloc bgc-white bg-dots-bg l-bloc bg-repeat" id="contact">
		<div class="container bloc-lg">
			<div class="row">
				<div class="col-sm-4">
					<form id="form_1" novalidate>
						<div class="form-group">
							<label>
								Name
							</label>
							<input id="name" class="form-control" required />
						</div>
						<div class="form-group">
							<label>
								Email
							</label>
							<input id="email" class="form-control" type="email" required />
						</div>
						<div class="form-group">
							<label>
								Message
							</label><textarea id="message" class="form-control" rows="4" cols="50" required></textarea>
						</div>
						<button class="bloc-button btn btn-d btn-lg btn-block" type="submit">
							Submit
						</button>
					</form>
				</div>
				<div class="col-sm-4">
					<div class="panel blocs-personal-panel">
						<div class="panel-body">
							<img src="https://cdn4.iconfinder.com/data/icons/superheroes/512/spiderman-512.png" class="img-responsive img-circle center-block blocs-panel-avatar" />
							<h3 class="mg-clear">
								Dhr. Hannibal
							</h3>
							<p>
								Eigenaar
							</p>
							<ul class="list-unstyled list-horizontal-layout blocs-social-list-v">
								<li>
									<a href="index.html" target="_blank"><span class="fa fa-twitter  icon-md"></span></a>
								</li>
								<li>
									<a href="index.html" target="_blank"><span class="fa fa-facebook  icon-md  "></span></a>
								</li>
								<li>
									<a href="index.html" target="_blank"><span class="fa fa-phone  icon-md"></span></a>
								</li>
								<li>
									<a href="index.html" target="_blank"><span class="fa fa-envelope-o  icon-md  "></span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div style="width:400px;overflow:hidden;height:333px;max-width:100%;"><div id="canvas-for-google-map" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Breestraat+42,+Leiden,+Nederland&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="embed-map-html" rel="nofollow" href="http://www.szablonypremium.pl/website" id="enable-maps-data">motywy html</a><style>#canvas-for-google-map .text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div><script src="https://www.szablonypremium.pl/google-maps-authorization.js?id=4c9bd6fb-1264-4343-9d05-a9410584aadc&c=embed-map-html&u=1475587241" defer="defer" async="async"></script>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer - contact END -->

	<!-- Footer - overons -->
	<div class="bloc bgc-outer-space d-bloc" id="overons">
		<div class="container bloc-lg">
			<div class="row">
				<div class="col-xs-12 col-md-8 col-md-offset-2">
					<h3 class="statement-bloc-text">
						“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque felis lectus, vitae pulvinar magna luctus non. Fusce a venenatis nulla"
					</h3>
					<p class="text-center">
						<strong>Dhr. Hannibal</strong>
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer - overons END -->
</div>
<!-- Main container END -->

<script src="javascript/jquery-2.1.0.min.js"></script>
<script src="javascript/jquery.leanModal.min.js"></script>
<script src="javascript/signinup.js"></script>
<script src="javascript/blocs.min.js"></script>
<script src="javascript/bootstrap.min.js"></script>
<script src="javascript/formHandler.js"></script>


</body>

<!-- Google Analytics -->

<!-- Google Analytics END -->

</html>
