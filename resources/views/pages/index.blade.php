@extends('layouts.main')

@section('title', 'Home')

@section('content')
<section id="featured" class="bg">	
  <!-- start slider -->
  @include('partials._slider')
</section>
<section class="callaction">
	<div class="container">
		<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="cta-text">
									<h2>What is <span>APABENA</span> ?</h2>
									<p class="lead" style="text-align:justify;padding:10px"> APABENA is a Non-Governmental Organization granted by Rwandan law and complies with the new law number 04/2012 of 17/02/2012 governing the organization and
										the functioning of national non-governmental organization. Its statutes were amended and accepted by the Ministerial Order No. 050/11 of 29<sup>th</sup> May 2003 and it is legally operating in Rwanda 
										under legal personality No: 090/11 issued by Rwanda Governance BOARD (RGB).
									</p>
									<p class="lead" style="text-align:justify;padding:10px">
										The idea of its creation dates back in 1995 after the 1994 Genocide perpetrated against Tutsi where Rwanda have had a huge number of orphans and street children who were 
										separated with thier families.
									</p>
									<p class="lead" style="text-align:justify;padding:10px">
										To rehabilitate those orphans and vulnerable children, generous parents with heart full of love came together with ideas of providing moral and assistance to build hope and strength 
										among those children victims of 1994 Genocide against Tutsi.
									</p>
									<p class="lead" style="text-align:justify;padding:10px">
										Obviously children could not stay as victims of all those problems such as malnutriton, lack of education. For that reason, we approached them, bringing them in place they could feel like 
										at home already and so the impact of that some of them have grown up, they are achieving goals, some even finished the schools, and they are no longer vulnerable children but instead they are able 
										to help other young ones who are still struggling, which is a very big impact of APABENA fruits that grew up.
									</p>
                                    <p align="right" style="padding:10px"><a href="more.php" class="btn btn-theme btn-lg">More About Us <i class="fa fa-angle-right"></i></a></p>
								</div>
							</div>
		</div>
	</div>
	</section>
	
	<section id="content">
		<div class="container">
		<!-- divider -->
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		</div>
		<!-- end divider -->
	
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-sm-5 col-md-5">
					<h4>Testimonials</h4>
						<div class="testimonialslide clearfix flexslider">
							<ul style="text-align:justify" class="slides">
							<?php
								// include('connect.php');
								// $sql = 'SELECT * FROM test ORDER BY ID DESC LIMIT 0,2';
								// $res= mysqli_query($dbcon,$sql);
								// while($row= mysqli_fetch_array($res)){
								// 	echo'
								// <li><blockquote>
								// '.html_entity_decode($row['Content']).'
								// 	</blockquote>
								// 	<h4>'.ucfirst($row['Name']).'<span>&#8213; '.$row['Role'].'</span></h4> 
								// </li>
								// 	';
								// }
							?>
							</ul>
						</div>					
					</div>	
					<div class="col-sm-7 col-lg-7">
						<h4 align="center">Communication Board</h4>
						<ul class="nav nav-tabs">
							<li class="active"><a href="#one" data-toggle="tab"><i class="icon-briefcase"></i> Monday</a></li>
							<li><a href="#two" data-toggle="tab">Tuesday</a></li>
							<li><a href="#three" data-toggle="tab">Wednesday</a></li>
							<li><a href="#four" data-toggle="tab">Thursday</a></li>
							<li><a href="#five" data-toggle="tab">Friday</a></li>
							<li><a href="#six" data-toggle="tab">Saturday</a></li>
							<li><a href="#seven" data-toggle="tab">Sunday</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="one">
							<?php
								// $sql = 'SELECT * FROM gahunda WHERE Day=\'monday\' ORDER BY ID DESC LIMIT 0,2';
								// $res= mysqli_query($dbcon,$sql);
								// while($row= mysqli_fetch_array($res)){
								// 	echo html_entity_decode($row['Content']);
								// }
							?>
								<!--<h4 align="center">Gahunda yo kuwa mbere</h4>
								<dl class="dl-horizontal">
									<dt>Icyambere : </dt>
									<dd>Gusura abanyeshuri</dd>
									<dt>Icyakabiri : </dt>
									<dd>Kugenzura business zikorera muri APABENA.</dd>
									<dt>Icyagatatu : </dt>
									<dd>Gusura abanyeshuri</dd>
									<dt>Icyakane : </dt>
									<dd>Kugenzura business zikorera muri APABENA.</dd>
								</dl>-->
							</div>
							<div class="tab-pane" id="two">
							<?php
								// $sql = 'SELECT * FROM gahunda WHERE Day=\'tuesday\' ORDER BY ID DESC LIMIT 0,2';
								// $res= mysqli_query($dbcon,$sql);
								// while($row= mysqli_fetch_array($res)){
								// 	echo html_entity_decode($row['Content']);
								// }
							?>
								<!--<h4 align="center">Gahunda yo kuwa kabiri</h4>
								<dl class="dl-horizontal">
									<dt>Icyambere : </dt>
									<dd>Gusura abanyeshuri</dd>
									<dt>Icyakabiri : </dt>
									<dd>Kugenzura business zikorera muri APABENA.</dd>
									<dt>Icyagatatu : </dt>
									<dd>Gusura abanyeshuri</dd>
									<dt>Icyakane : </dt>
									<dd>Kugenzura business zikorera muri APABENA.</dd>
								</dl>-->
							</div>
							<div class="tab-pane" id="three">
							<?php
								// $sql = 'SELECT * FROM gahunda WHERE Day=\'wednesday\' ORDER BY ID DESC LIMIT 0,2';
								// $res= mysqli_query($dbcon,$sql);
								// while($row= mysqli_fetch_array($res)){
								// 	echo html_entity_decode($row['Content']);
								// }
							?>
								<!--<h4 align="center">Gahunda yo kuwa gatatu</h4>
								<dl class="dl-horizontal">
									<dt>Icyambere : </dt>
									<dd>Gusura abanyeshuri</dd>
									<dt>Icyakabiri : </dt>
									<dd>Kugenzura business zikorera muri APABENA.</dd>
									<dt>Icyagatatu : </dt>
									<dd>Gusura abanyeshuri</dd>
									<dt>Icyakane : </dt>
									<dd>Kugenzura business zikorera muri APABENA.</dd>
								</dl>-->
							</div>
							<div class="tab-pane" id="four">
							<?php
								// $sql = 'SELECT * FROM gahunda WHERE Day=\'thursday\' ORDER BY ID DESC LIMIT 0,2';
								// $res= mysqli_query($dbcon,$sql);
								// while($row= mysqli_fetch_array($res)){
								// 	echo html_entity_decode($row['Content']);
								// }
							?>
								<!--<h4 align="center">Gahunda yo kuwa kane</h4>
								<dl class="dl-horizontal">
									<dt>Icyambere : </dt>
									<dd>Gusura abanyeshuri</dd>
									<dt>Icyakabiri : </dt>
									<dd>Kugenzura business zikorera muri APABENA.</dd>
									<dt>Icyagatatu : </dt>
									<dd>Gusura abanyeshuri</dd>
									<dt>Icyakane : </dt>
									<dd>Kugenzura business zikorera muri APABENA.</dd>
								</dl>-->
							</div>
							<div class="tab-pane" id="five">
							<?php
								// $sql = 'SELECT * FROM gahunda WHERE Day=\'friday\' ORDER BY ID DESC LIMIT 0,2';
								// $res= mysqli_query($dbcon,$sql);
								// while($row= mysqli_fetch_array($res)){
								// 	echo html_entity_decode($row['Content']);
								// }
							?>
								<!--<h4 align="center">Gahunda yo kuwa gatanu</h4>
								<dl class="dl-horizontal">
									<dt>Icyambere : </dt>
									<dd>Gusura abanyeshuri</dd>
									<dt>Icyakabiri : </dt>
									<dd>Kugenzura business zikorera muri APABENA.</dd>
									<dt>Icyagatatu : </dt>
									<dd>Gusura abanyeshuri</dd>
									<dt>Icyakane : </dt>
									<dd>Kugenzura business zikorera muri APABENA.</dd>
								</dl>-->
							</div>
							<div class="tab-pane" id="six">
							<?php
								// $sql = 'SELECT * FROM gahunda WHERE Day=\'saturday\' ORDER BY ID DESC LIMIT 0,2';
								// $res= mysqli_query($dbcon,$sql);
								// while($row= mysqli_fetch_array($res)){
								// 	echo html_entity_decode($row['Content']);
								// }
							?>
								<!--<h4 align="center">Gahunda yo kuwa gatandatu</h4>
								<dl class="dl-horizontal">
									<dt>Icyambere : </dt>
									<dd>Gusura abanyeshuri</dd>
									<dt>Icyakabiri : </dt>
									<dd>Kugenzura business zikorera muri APABENA.</dd>
									<dt>Icyagatatu : </dt>
									<dd>Gusura abanyeshuri</dd>
									<dt>Icyakane : </dt>
									<dd>Kugenzura business zikorera muri APABENA.</dd>
								</dl>-->
							</div>
							<div class="tab-pane" id="seven">
							<?php
								// $sql = 'SELECT * FROM gahunda WHERE Day=\'sunday\' ORDER BY ID DESC LIMIT 0,2';
								// $res= mysqli_query($dbcon,$sql);
								// while($row= mysqli_fetch_array($res)){
								// 	echo html_entity_decode($row['Content']);
								// }
							?>
								<!--<h4 align="center">Gahunda yo ku cyumweru</h4>
								<dl class="dl-horizontal">
									<dt>Icyambere : </dt>
									<dd>Gusura abanyeshuri</dd>
									<dt>Icyakabiri : </dt>
									<dd>Kugenzura business zikorera muri APABENA.</dd>
									<dt>Icyagatatu : </dt>
									<dd>Gusura abanyeshuri</dd>
									<dt>Icyakane : </dt>
									<dd>Kugenzura business zikorera muri APABENA.</dd>
								</dl>-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>

        <div class="row">
			<div class="col-lg-12">
				<div class="text-center">
					<p class="lead"><span class="highlight">APABENA</span> offers entrepreneurship opportunities for career readiness and youth employment among children supported by the organization.
                        We have initiated three medium business; <span>Carpentry</span>, <span>Bakery</span> and <span>Accomodation facilities</span> which improve employment for children supported by the organization.
                    </p>
				</div>
			</div>		
		</div>
		</div>
		
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="box">
							<div class="aligncenter">								
								<div class="icon">
								<i class="fa fa-cutlery fa-5x"></i>
								</div>
								<h3>Accomodation facilities</h3>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="box">
							<div class="aligncenter">								
								<div class="icon">
								<i class="fa fa-key fa-5x"></i>
								</div>
								<h3>Carpentry</h3>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="box">
							<div class="aligncenter">								
								<div class="icon">
								<i class="fa fa-cubes fa-5x"></i>
								</div>
								<h3>Bakery</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		
		<!-- divider -->
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		</div>
		<!-- end divider -->
		
		<!-- clients -->
		<div class="container">
				<div class="row">
								<div class="col-xs-6 col-md-2 aligncenter client">
                                    <?php
										// $sql = 'SELECT * FROM adverts ORDER BY ID DESC LIMIT 0,1';
										// $res= mysqli_query($dbcon,$sql);
										// while($row= mysqli_fetch_array($res)){
										// 	echo '<img alt="logo" src="'.$row['Picture'].'" class="img-responsive" />';
										// }
									?>
								</div>											
													
								<div class="col-xs-6 col-md-2 aligncenter client">
                                    <?php
										// $sql = 'SELECT * FROM adverts ORDER BY ID DESC LIMIT 1,2';
										// $res= mysqli_query($dbcon,$sql);
										// while($row= mysqli_fetch_array($res)){
										// 	echo '<img alt="logo" src="'.$row['Picture'].'" class="img-responsive" />';
										// }
									?>
								</div>											
													
								<div class="col-xs-6 col-md-2 aligncenter client">
                                    <?php
										// $sql = 'SELECT * FROM adverts ORDER BY ID DESC LIMIT 2,3';
										// $res= mysqli_query($dbcon,$sql);
										// while($row= mysqli_fetch_array($res)){
										// 	echo '<img alt="logo" src="'.$row['Picture'].'" class="img-responsive" />';
										// }
									?>
								</div>											
													
								<div class="col-xs-6 col-md-2 aligncenter client">
                                    <?php
										// $sql = 'SELECT * FROM adverts ORDER BY ID DESC LIMIT 3,4';
										// $res= mysqli_query($dbcon,$sql);
										// while($row= mysqli_fetch_array($res)){
										// 	echo '<img alt="logo" src="'.$row['Picture'].'" class="img-responsive" />';
										// }
									?>
								</div>									
								
								<div class="col-xs-6 col-md-2 aligncenter client">
                                    <?php
										// $sql = 'SELECT * FROM adverts ORDER BY ID DESC LIMIT 4,5';
										// $res= mysqli_query($dbcon,$sql);
										// while($row= mysqli_fetch_array($res)){
										// 	echo '<img alt="logo" src="'.$row['Picture'].'" class="img-responsive" />';
										// }
									?>
								</div>									
								<div class="col-xs-6 col-md-2 aligncenter client">
                                    <?php
										// $sql = 'SELECT * FROM adverts ORDER BY ID DESC LIMIT 5,6';
										// $res= mysqli_query($dbcon,$sql);
										// while($row= mysqli_fetch_array($res)){
										// 	echo '<img alt="logo" src="'.$row['Picture'].'" class="img-responsive" />';
										// }
									?>
								</div>	

				</div>
		</div>
	
	</section>
@endsection