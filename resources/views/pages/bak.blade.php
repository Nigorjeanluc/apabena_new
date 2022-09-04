@extends('layouts.main')

@section('title', 'Bakery')

@section('content')
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a></li>
					<li class="active">Bakery</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	
	<section id="content">
	<div class="container">
		<div class="row">
		
			@include('partials._aside1')
			
			<div class="col-lg-8">
				<article>
						<div class="post-image">
							<div class="row">
								<div class="col-lg-6" align="center"><img src="img/home/14.jpg" alt="" class="img-responsive pull-left" /></div>
								<div class="col-lg-6" align="center"><img src="img/home/15.jpg" alt="" class="img-responsive pull-left" /></div>
							</div>
						</div>
						<p class="lead" style="align-text:justify">
							 We have an establishment that produces and sells flour based food baked in an oven such as bread, cookies, cakes and pies, some retail bakeries like cafes, serving coffee and tea to customers who wish 
							 to consume the baked goods on the premises by that we mean that they can be produced the way you want either in shape or in different colours at low prices, as it is all done to your appreciation.
						</p>
				</article>
			</div>
			

		</div>
	</div>
</section>
@endsection