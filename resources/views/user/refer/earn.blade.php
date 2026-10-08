@extends('user.layouts.app')
@section('content')
    <header class="topbar">
        @include('user.layouts.partials.navbar') 
    </header>
  <aside class="sidebar" id="sidebar">
      @include('user.layouts.partials.sidebar')
  </aside>

   <div class="content">
        <div class="row g-4">
            @include('user.layouts.partials.braking_news')
           </div>
           <div class="row mt-5">
               <div class="col-12 col-lg-6">
                        <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h3 class="fw-bold mb-2">Refer & Earn</h3>
                    <p class="text-muted">
                        Invite your friends to JobFixs and earn rewards.
                    </p>

                    <label class="fw-semibold mb-2">
                        Your Referral Link
                    </label>

                    <div class="input-group mb-3">
           <input type="text" id="referralLink" class="form-control" value="{{ $referralLink }}"readonly >

                        <button
                            type="button"
                            class="btn btn-primary"
                            onclick="copyReferralLink()">
                            Copy
                        </button>

                    </div>

                    <div class="alert alert-success">
                        You have referred
                        <strong>{{ $totalReferrals }}</strong>
                        users.
                    </div>

                </div>

            </div>

               </div>
                <div class="col-12 col-lg-6">
                    <div class="card">
                       <div class="card-body">
                          <h1>test</h1>
                       </div>
                   </div>
                </div>
           </div>
       </div>


<script>
function copyReferralLink() {

    const input = document.getElementById('referralLink');

    navigator.clipboard.writeText(input.value);

    alert('Referral link copied!');
}
</script>

@endsection