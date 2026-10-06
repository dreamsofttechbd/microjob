@extends('frontend.layouts.frontend')
@section('title', $title)
@section('content')
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
					<h3 class="text-primary"><i class="bi bi-plus-square-fill text-primary"></i> Our Story</h3>
					<p class="h5 text-muted mt-3">
						<span class="text-primary">Jobfixs</span> is a trusted online job marketplace designed to connect <span  class="text-dark fw-bold">Job Posters</span> and <span class="text-dark fw-bold">Job Workers</span> in one simple and convenient platform.<br><br>

						Our goal is to make finding work and hiring skilled people easier, faster, and more accessible for everyone.
					</p>
			<h3 class="text-primary mt-4"><i class="bi bi-people text-primary"></i> For Job Posters</h3>

			<p class="h5 text-muted mt-3">
				<span  class="text-dark fw-bold">Post your job,</span> find the right worker, review applications, and hire skilled people according to your requirements. Whether you need a freelancer, part-time worker, or someone for a specific task, Jobfixs helps you connect with the right person.
			</p>

			<h3 class="text-primary mt-4"><i class="bi bi-grid-fill text-primary"></i> For Job Workers</h3>

			<p class="h5 text-muted mt-3">
				Discover available jobs, apply for opportunities that match your skills, and build your experience by working with different job posters. Jobfixs gives workers an easy way to find suitable jobs and grow their careers.
			</p>

			<h3 class="text-primary mt-4"><i class="bi bi-bank2 text-primary"></i> Our Mission</h3>

			<p class="h5 text-muted mt-3">
				We believe everyone should have access to better job opportunities and reliable workers. Jobfixs is built to create a simple, transparent, and user-friendly marketplace where Job Posters can find the right workers and Job Workers can find the right jobs. <span class="h5 text-primary mt-3">Jobfixs — Connecting Job Posters with Job Workers.</span>
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