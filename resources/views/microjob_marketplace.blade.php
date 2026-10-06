@extends('frontend.layouts.frontend')
@section('content')
<style>
	.about-pages{
		height: 300px;
		background-color: #ececfc;
	}

	.about-pages h2{
		padding-top: 120px;
		font-size: 50px;
	}
</style>
<div class="hero">
	@include('frontend.layouts.partials.navbar')
	<div class="contanier mt-5">
	<div class="row">
		<div class="col-12 col-xsm-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-12 about-pages">
			<h2 class="text-center text-primary">About Us JobFixs</h2>
		</div>
	</div>
</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-12 col-lg-12 pb-5">
			<div class="card border-0 mt-5">
				<div class="card-body">
					<h3 class="text-primary"><i class="bi bi-plus-square-fill text-primary"></i> Agreement</h3>
					<p class="h5 text-muted mt-3">
						 By using <span class="text-primary">Jobfixs</span> , Job Posters and Job Workers agree to use the platform honestly, professionally, and responsibly.<br><br>

						Job Posters agree to provide clear job details, requirements, payment terms, and deadlines. Job Workers agree to complete accepted work according to the agreed requirements and within the agreed timeframe.
                         <br><br>
                         Both parties are responsible for communicating clearly, respecting each other, and fulfilling their agreed responsibilities. Any agreement between a Job Poster and Job Worker should be based on the terms confirmed between both parties.

                         <br><br>
                         Jobfixs provides the marketplace to help users connect and find opportunities but is not a party to private agreements between Job Posters and Job Workers.

                         <br><br>
                         <p class="text-dark h5">By using Jobfixs, you acknowledge and agree to these terms.</p>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<footer>
 @include('frontend.layouts.partials.footer')
</footer>
@endsection