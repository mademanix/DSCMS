<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>MadStories</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/main.css">
		<link rel="Shortcut icon" href="<?php echo base_url();?>img/icon.png">


		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
			
			.navbar-default {

				background-color: #333;
				padding-top: 0;
			}

		</style>
	</head>
	<body>
	<section id="main">
		<div class="container-fluid">
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand hidden-sm hidden-md hidden-lg" href="#main">MadStories</a>
				</div>
				<div class="collapse navbar-collapse navbar-ex1-collapse">
			  		<div class="container">
			    		<ul class="nav navbar-nav">
		        			<li><a href="<?php echo base_url();?>" class="page-scroll">[ Główna ]</a></li>
		        			<li><a href="<?php echo base_url();?>/ddp">[ DDP ]</a></li>
		        			<li><a href="<?php echo base_url();?>/download">[ Download ]</a></li>
		      			</ul>
		      			<ul class="nav navbar-nav navbar-right">
		      				<li><a href="<?php echo base_url();?>h4x10r">[ H4x10R ]</a></li>
		      				<li><a href="https://www.facebook.com/ludi.siarzewsky"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
		      				<li class="hidden-sm hidden-md hidden-xs"><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-question" aria-hidden="true"></i></a></li>		
		      			</ul>
			  		</div>
			  	</div>
			</nav>
			
			<!-- Modal TRANSPARENT -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			     	<h5>[ Główna ]</h5>
			     	<p>Strona główna. Wszystkie posty, wszystko wszystkie, nic, tylko się delektować.</p>
			     	<h5>[ DDP ]</h5>
			     	<p>Dobrowolne doładowanie portfela. Po doładowaniu mojego portfela na proserwerze, każde doładowanie nawet symboliczną kwotą powoduje szczery uśmiech na mojej gębie.</p>
			     	<h5>[ Download ]</h5>
			     	<p>Jeśli będę tworzył/udostępniał jakiś content do ściągnięcia, na tej stronie będzie wszystko, co można dobrowolnie zerżnąć na swój dysk twardy.</p>
			     	<h5>[ H4x10R ]</h5>
			     	<p>Ta opcja nie powinna Cię interesować (chociaż znakomicie zdaję sobie sprawę, że po tym stwierdzeniu, Twoja ciekawość wzrosła o jakieś 200%).</p>
			     	<h5 class="hidden-sm hidden-md hidden-xs"><i class="fa fa-question" aria-hidden="true"></i></h5>
			     	<p>To jest właśnie ten wihajster, którym wywołałeś to okno. Dostępne jedynie na większych ekranach, mniejsze psułoby całokształt i feng-shui tej strony.</p>		     	
			     	<h5><i class="fa fa-facebook-official" aria-hidden="true"></i></h5>
			     	<p>Mój Facebook. W czasach, gdy NSA wie, że lubisz <abbr title="no, konia walić"><span style="font-weight: bold">robić to</span></abbr> do Azjatek, myślę, że podanie profilu na Facebooka nie jest niczym złym.</p>		     	
			     	<h5><i class="fa fa-angle-double-down" aria-hidden="true"></i> </h5>
			     	<p>Dzięki temu, zjedziesz na dół do postów i być może zaczniesz lekturę.</p>
			     	<p class="hidden-lg">Cholernie mnie ciekawi, jak wywołałeś to okno. Znaczy, jeśli zmniejszyłeś teraz okno przeglądarki, jest ok, ale jeśli jesteś na telefonie, to opcje są dwie: Twoja przeglądarka jest <span style="text-decoration: line-through";>chujowa</span> zepsuta, albo jakimś cudem to wywołałeś. Jeśli jest to opcja druga, gratuluję - właśnie wygrałeś satysfakcję.</p>
			    </div>
			  </div>
			</div>
	</section>


