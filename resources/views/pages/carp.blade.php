@extends('layouts.main')

@section('title', 'Carpentry')

@section('content')
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a></li>
					<li class="active">Carpentry</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	
	<section id="content">
	<div class="container">
		<div class="row">
		
			@include('partials._aside')
			
			<div class="col-lg-8">
				<article>
						<div class="post-image">
							<div align="center"><img style="height:400px" src="img/carpentry/1.jpg" alt="" class="img-responsive" /></div>
						</div>
						<p class="lead" style="align-text:justify">
							 Also we do have an appropriate carpentry where we define a skilled trade in which the primary work performed is cutting, shaping and installation of building materials during the construction of buildings, ships, timber bridges, concrete formwork. 
							 We also worked with natural wood and did the rougher work such as framming and even now many materials are also used and sometimes the finer trades of cabinetmaking and furniture building are considered carpentry.
						</p>
				</article>

				<article>
						<div class="post-image">
							<div align="center"><img style="height:400px" src="img/carpentry/2.jpg" alt="" class="img-responsive" /></div>
						</div>
						<p class="lead" style="align-text:justify">
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