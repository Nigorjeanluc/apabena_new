@extends('layouts.main')

@section('title', 'Accomodation')

@section('content')
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a></li>
					<li class="active">Accomodation</li>
				</ul>
			</div>
		</div>
	</div>
</section>
	
<section id="content">
	<div class="container">
		<div class="row">
		
			@include('partials._aside2')
			
			<div class="col-lg-8">
				<article>
						<div class="post-image">
							<div class="row">
							<div class="col-lg-6" align="center"><img style="height:300px" src="img/accomodation/2.jpg" alt="" class="img-responsive" /></div>
							<div class="col-lg-6" align="center"><img style="height:300px" src="img/home/3.jpg" alt="" class="img-responsive" /></div>
							</div>
						</div>
						<p class="lead">
							 We do the action of accomodating with all necessary equipments as the pictures below demonstrate it, we have good rooms, bathrooms, beds and all other equipments that fullfill your needs. 
                             We have thought also about tourists and people on different travels or tours as they need lodging. We provide home away from home.
						</p>
				</article>

				<article>
						<div class="post-image">
							<div class="row">
							<div class="col-lg-6" align="center"><img style="height:300px" src="img/accomodation/1.jpg" alt="" class="img-responsive" /></div>
							<div class="col-lg-6" align="center"><img style="height:300px" src="img/accomodation/3.jpg" alt="" class="img-responsive" /></div>
							</div>
						</div>
						<p class="lead">
							 We have an apprenticeship training where the skill can be learned by gaining work experience; and also you will find the art of assembling structural woodwork, timberwork constructed by a carpenter and also the form or manner 
							 of putting together the parts. We construct and repair building frameworks and structures such as stairways, doorframes, partitions , raftes and bridge supports made from wood and other materials. We also install kitchen cabinets, 
							 siding and drywall, we work both indoors and outdoors.
						</p>
				</article>
			</div>
			

		</div>
	</div>
</section>
@endsection