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
    <div class="container mt-4 mb-5">
  {{-- ── Job Header with Thumbnail ── --}}
  <div class="job-header">
     <div class="job-header-body">
      <div class="job-header-info">
        <h6 class="fw-semibold">{{ $job->title }}</h6>
        <span class="subtitle"><span class="text-dark">Continent With Category</span> <i class="fa fa-long-arrow-right fw-light text-primary" aria-hidden="true"></i> {{ $job->continent->name }} <i class="fa fa-long-arrow-right fw-light text-primary" aria-hidden="true"></i> {{ $job->category->name }}</span>
      </div>
    <a href="{{ route('user.find.jobs') }}" class="btn btn-danger btn-sm mb-3 text-decoration-none" style="font-size:12px;">
    <i class="fa fa-arrow-circle-left text-white"></i>
    <span class="text-white fw-bold">Back</span>
  </a>
      <div class="btn btn-primary btn-sm fw-bold" style="font-size:12px;">${{ $job->worker_earn }}</div>
    </div>
    @if($job->thumbnail)
      <img src="{{ asset('storage/' . $job->thumbnail) }}" alt="{{ $job->title }}" class="job-thumbnail">
    @endif
  </div>
  <!-- Rules + Report/Hide -->
  <div class="section-card">
    <div class="rules-row">
      <span class="rules-label">Understanding and following the rules helps ensure a safe, fair, and smooth experience for everyone</span>
      <button class="btn btn-primary btn-sm" id="readRulesBtn" style="font-size:12px;">
        <i class="fa fa-book"></i> Read Rules
      </button>
    </div>
    <div id="rulesBox" class="rules-card bg-light border-primary" style="display:none;">
      <div class="rules-title text-dark">Job Rules</div>
      <ul>
        <li>Candidates must apply before the deadline.</li>
        <li>Provide accurate information in your application.</li>
        <li>No plagiarism in submitted work samples.</li>
        <li>Be professional during interview processes.</li>
      </ul>
    </div>
    <div class="action-row">
      <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#reportModal" style="font-size:12px;">
        <i class="fa fa-flag-checkered"></i> Report Job
      </a>
      <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hideModal" style="font-size:12px;">
        <i class="fa fa-eye-slash"></i> Hide Job
      </a>
    </div>
  </div>

  {{-- ── Meta Info ── --}}
  <div class="section-card">
    <div class="meta-grid">
      <div>
        <div class="meta-label text-dark">Excluded Countries</div>
        <div class="meta-value">—</div>
      </div>
      <div>F
        <div class="meta-label text-dark">Done</div>
        <div class="meta-value btn btn-primary btn-sm text-white">
          {{ $job->worker_done }}
          <span style="color:#fff; font-weight:400;">&nbsp;of&nbsp;</span>
          {{ $job->worker_need }}
        </div>
      </div>
      <div>
        <div class="meta-label text-dark">Employer</div>
        <div class="meta-value">
          <a href="#" class="text-primary">{{ $job->user->name }} <i class="fa fa-external-link text-primary" style="font-size:10px;"></i></a>
        </div>
      </div>
      <div>
        <div class="meta-label text-dark">Category</div>
        <div class="meta-value text-dark">{{ $job->category->name }} &rarr; {{ $job->subcategory->name }}</div>
      </div>
      <div>
        <div class="meta-label text-dark">Job ID</div>
        <div class="meta-value text-primary" style="color:var(--text-muted); font-weight:500; font-size:11px;">{{ $job->code }}</div>
      </div>
    </div>
  </div>

  {{-- ── Description ── --}}
  <div class="section-card">
    <div class="section-header">
      <i class="fa fa-question-circle text-primary"></i> What is expected from workers?
    </div>
    <div class="job-description text-dark">
      {!! nl2br(e($job->description)) !!}
    </div>
  </div>

  {{-- ── Proof Submission Form ── --}}
  <form action="{{ route('user.submit-job', [$job->code, $job->slug]) }}" method="post" enctype="multipart/form-data">
    @csrf

    {{-- Secret Code --}}
    @if($job->has_secret_code == 1)
    <div class="section-card">
      <div class="section-header">
        <i class="fa fa-key"></i> Secret Code
      </div>

      {{-- Example hint --}}
      @if(!empty($job->secret_code_example))
      <div class="secret-example-box">
        <i class="fa fa-lightbulb-o"></i>
        <div class="ex-text">
          <span class="ex-label">Hint — where to find the code</span>
          {{ $job->secret_code_example }}
        </div>
      </div>
      @endif

      <div class="secret-label mt-3">
        <i class="fa fa-question-circle text-danger"></i> Type Secret Code
      </div>
      <input type="text" name="secret_code" class="form-control secret-input" required
             placeholder="Enter the secret code...">
    </div>
    @endif

    {{-- Proof Fields --}}
    <div class="section-card">
      <div class="section-header">
        <i class="fa fa-question-circle text-primary"></i> Submit your proofs below
      </div>

      @foreach($job->proofs as $i => $proof)
      <div class="proof-item">
        <div class="proof-label">
          <span class="proof-index text-white">{{ $i + 1 }}</span>
          <span class="text-dark">{{ $proof['label'] }}</span>
        </div>
        @if($proof['type'] == 'file')
          <input type="file" name="images[]" class="form-control">
        @else
          <input type="text" name="texts[]" class="form-control border-primary bg-light" placeholder="Enter your answer...">
        @endif
      </div>
      @endforeach

      <div class="submit-wrap">
        <button type="submit" class="btn-submit-job btn-primary">
          <i class="fa fa-paper-plane me-1"></i> Submit
        </button>
      </div>
    </div>
  </form>
</div>
    </div>
  </div>
<!-- Report Modal -->
<div class="modal fade" id="reportModal" tabindex="-1" aria-labelledby="reportModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="font-size:12px;">
      <div class="modal-header">
        <h5 class="modal-title fw-bold text-dark" style="font-size:14px;">Job Reporting</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <label class="fw-semibold mb-1 d-block text-dark">What is wrong with this job?</label>
        <textarea class="form-control bg-light border-primary" rows="3" placeholder="Describe the issue..."></textarea>
      </div>
      <div class="modal-footer">
        <button class="btn btn-danger btn-sm" data-bs-dismiss="modal" style="font-size:12px;">Cancel</button>
        <button class="btn btn-primary btn-sm" id="submitReportBtn" style="font-size:12px;">Submit Report</button>
      </div>
    </div>
  </div>
</div>

{{-- ── Hide Modal ── --}}
<div class="modal fade" id="hideModal" tabindex="-1" aria-labelledby="hideModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <form method="post" action="{{route('user.job.hide',$job->id)}}">
      @csrf
    <div class="modal-content text-center" style="font-size:12px;">
      <div class="modal-header border-0 pb-0 position-relative">
        <h5 class="modal-title w-100 fw-bold" style="font-size:14px;">Hide Job</h5>
        <button type="button" class="btn-close position-absolute end-0 me-2 top-50 translate-middle-y" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body py-2">
        <p class="text-muted mb-0">Do you want to permanently hide this job?</p>
      </div>
      <div class="modal-footer border-0 justify-content-center gap-2 pt-0">
        <button class="btn btn-primary px-4 btn-sm" id="yesHideBtn" style="font-size:12px;">Yes</button>
        <button class="btn btn-danger px-4 btn-sm" data-bs-dismiss="modal" style="font-size:12px;">No</button>
      </div>
    </div>
  </form>
  </div>
</div>

{{-- ── Toast ── --}}
<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="successToast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body" id="toastMsg">Action completed.</div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
    </div>
  </div>
</div>
<!-- footer -->
<footer class="mt-5 footer-section">
  @include('user.layouts.partials.footer')
</footer>
<script>
  const readRulesBtn = document.getElementById('readRulesBtn');
  const rulesBox     = document.getElementById('rulesBox');
  let rulesVisible   = false;

  readRulesBtn.addEventListener('click', function () {
    rulesVisible = !rulesVisible;
    rulesBox.style.display = rulesVisible ? 'block' : 'none';
    readRulesBtn.innerHTML = rulesVisible
      ? '<i class="fa fa-eye-slash"></i> Hide Rules'
      : '<i class="fa fa-book"></i> Read Rules';
  });

  function showToast(msg) {
    document.getElementById('toastMsg').textContent = msg;
    const toast = new bootstrap.Toast(document.getElementById('successToast'), { delay: 3000 });
    toast.show();
  }

  document.getElementById('submitReportBtn').addEventListener('click', function () {
    bootstrap.Modal.getInstance(document.getElementById('reportModal')).hide();
    setTimeout(() => showToast('Report submitted successfully!'), 400);
  });

  // document.getElementById('yesHideBtn').addEventListener('click', function () {
  //   bootstrap.Modal.getInstance(document.getElementById('hideModal')).hide();
  //   setTimeout(() => showToast('Job has been hidden!'), 400);
  // });

  document.addEventListener('DOMContentLoaded', function () {
    [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      .forEach(el => new bootstrap.Tooltip(el));
  });
</script>

@endsection