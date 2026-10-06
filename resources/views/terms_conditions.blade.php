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
      <h2 class="text-center text-primary">Terms Conditions JobFixs</h2>
    </div>
  </div>
</div>
</div>

<div class="container">
  <div class="row">
    <div class="col-12 col-lg-12 pb-5">
      <div class="card border-0 mt-5">
        <div class="card-body">
      <h3 class="text-primary"><i class="bi bi-plus-square-fill text-primary"></i> Terms & Conditions for Job Workers</h3>
       <p class="text-dark h5">
         	By continuing to use Jobfixs, you acknowledge and agree to these Terms & Conditions.
       </p>
         <ul>
         	<li>Provide accurate and truthful information when creating your profile and applying for jobs.</li>
         	<li>Apply only for jobs that match your skills, experience, and availability.</li>
         	<li>Complete accepted jobs professionally and within the agreed requirements and deadlines.</li>
         	<li>Do not submit false information, spam applications, or misleading content.</li>
         	<li>Maintain respectful and professional communication with Job Posters.</li>
         	<li>Do not misuse the Jobfixs platform, accounts, payment systems, or other users' information.</li>
         	<li>Follow all applicable laws and Jobfixs policies while using the platform.</li>
         	<li>Jobfixs may suspend or terminate accounts involved in fraud, abuse, scams, or violations of these terms.</li>
         </ul>
        

         <h3 class="text-primary mt-5"><i class="bi bi-plus-square-fill text-primary"></i> Terms & Conditions for Job Workers</h3>

         <p class="text-dark h5">
         	By using Jobfixs as a Job Poster, you agree to follow these terms and conditions.
         </p>

         <ul>
         	<li>Provide accurate and complete information when posting a job.</li>
         	<li>Clearly describe the job requirements, responsibilities, budget, and deadline.</li>
         	<li>Do not post misleading, fraudulent, illegal, or inappropriate jobs.</li>
         	<li>Communicate respectfully and professionally with Job Workers.</li>
         	<li>Review applications fairly and select workers based on your requirements.</li>
         	<li>Make agreed payments to Job Workers for completed work according to the agreed terms.</li>
         	<li>Do not request unnecessary personal information from Job Workers.</li>
         	<li>Do not misuse the Jobfixs platform, payment system, or other users' information.</li>
         	<li>Jobfixs may remove jobs or suspend accounts that violate these terms or involve fraud, abuse, or scams.</li>
         </ul>

         <p  class="text-dark h5">By continuing to use Jobfixs, you acknowledge and agree to these Terms & Conditions.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<footer>
 @include('frontend.layouts.partials.footer')
</footer>
@endsection