
<!----------------------------------------------new navbar---------------------------------------->
 @php $setting = App\Models\WebsiteSetting::first(); @endphp
      <div class="s-brand">
          <span class="av">
              <a class="nav-link" href="{{ route('user.dashboard') }}">
            <img src="{{ asset('storage/' . $setting->site_logo) }}" alt="Logo">
          </span>
          <span>{{ $setting->site_title }}</span>
          </div>
           </a>
      <ul class="s-menu list-unstyled mb-0">
        <li><a class="s-link active" href="{{ route('user.dashboard') }}">
        <i class="bi bi-house-check-fill"></i>
          <span>Dashboard</span>
        </a>
      </li>
        <li>
          <a class="s-link" href="{{ route('user.find.jobs') }}">
              <i class="fa fa-search" aria-hidden="true"></i>
          <span>Find Jobs</span>
        <i class="bi bi-chevron-right ms-auto arw"></i>
          </i>
        </a>
      </li>
        <li>
          <a class="s-link" href="{{ route('user.my.jobs') }}">
         <i class="fa fa-briefcase" aria-hidden="true"></i>
            <span>My Jobs</span>
              <i class="bi bi-chevron-right ms-auto arw"></i>
          </a>
        </li>
        <li>
          <a class="s-link" href="{{ route('user.finished.jobs') }}">
         <i class="bi bi-arrow-right-square"></i>
            <span>Finished Jobs</span>
              <i class="bi bi-chevron-right ms-auto arw"></i>
          </a>
        </li>
        <li>
          <a class="s-link" href="{{ route('user.browse.deal') }}">
           <i class="bi bi-arrow-90deg-right"></i>
            <span>Browse Deal</span>
             <i class="bi bi-chevron-right ms-auto arw"></i>
          </a>
        </li>
        <li>
          <a class="s-link" href="{{ route('user.deal.create') }}">
           <i class="bi bi-box-arrow-in-right"></i>
            <span>Post Deal</span>
            <i class="bi bi-chevron-right ms-auto arw"></i>
          </a>
        </li>
        <li>
          <a class="s-link" href="{{ route('user.my.deal.post') }}">
            <i class="bi bi-calendar2-plus-fill"></i>
            <span>My Deal Post</span>
            <i class="bi bi-chevron-right ms-auto arw"></i>
          </a>
        </li>
        <li>
          <a class="s-link" href="{{ route('user.deal.order') }}">
           <i class="bi bi-list-ul"></i>
            <span>My Order</span>
            <i class="bi bi-chevron-right ms-auto arw"></i>
          </a>
        </li>
        <li>
          <a class="s-link" href="{{ route('user.refer.earn') }}">
            <i class="bi bi-bag-plus"></i>
            <span>Refer &amp; Earn</span>
            <i class="bi bi-chevron-right ms-auto arw"></i>
          </a>
        </li>
        <li>
          <a class="s-link" href="{{ route('user.deposit') }}">
            <i class="bi bi-bag-plus"></i>
            <span>Deposit</span>
            <i class="bi bi-chevron-right ms-auto arw"></i>
          </a>
        </li>
        <li>
          <a class="s-link" href="{{ route('user.withdraw') }}">
            <i class="bi bi-currency-dollar"></i>
            <span>Withdraw</span>
            <i class="bi bi-chevron-right ms-auto arw"></i>
          </a>
        </li>
        <li>
          <a class="s-link" href="{{ route('user.create.job') }}">
            <span class="btn btn-primary btn-sm"><i class="bi bi-send-plus"></i> &nbsp;Post a Job</span>
            <i class="bi bi-chevron-right ms-auto arw"></i>
          </a>
        </li>
        <li>
          <a class="s-link" href="{{ route('article') }}">
            <i class="bi bi-list"></i>
            <span>Blog</span>
            <i class="bi bi-chevron-right ms-auto arw"></i>
          </a>
        </li>
        <li>
          <a class="s-link" href="">
            <i class="bi bi-handbag"></i>
            <span>Support</span>
            <i class="bi bi-chevron-right ms-auto arw"></i>
          </a>
        </li>
        <li>
          <a class="s-link" href="">
            <i class="bi bi-handbag"></i>
            <span>My Banner</span>
            <i class="bi bi-chevron-right ms-auto arw"></i>
          </a>
        </li>
        <li>
          <a class="s-link" href="{{route('user.top-freelancer')}}">
           <i class="bi bi-people"></i>
            <span>Top Freelancer</span>
            <i class="bi bi-chevron-right ms-auto arw"></i>
          </a>
        </li>
        <li>
          <a class="s-link" href="">
            <i class="bi bi-person-lock"></i>
            <span>Privacy &amp; Security</span>
            <i class="bi bi-chevron-right ms-auto arw"></i>
          </a>
        </li>
         @if(auth::user()->upgrade_status=="unverified" || auth::user()->upgrade_status=="expired")
        <li>
          <a class="s-link" href="{{ route('account.verify') }}">
            <span class="btn btn-sm btn-danger"><i class="bi bi-person-check"></i> &nbsp;Account Verify</span>
            <i class="bi bi-chevron-right ms-auto arw"></i>
          </a>
        </li>
         @endif
         <li>
          <a class="s-link" href="{{ route('user.profile') }}">
           <i class="bi bi-trash3"></i>
            <span>Delete Account</span>
            <i class="bi bi-chevron-right ms-auto arw"></i>
          </a>
        </li>
        <li>
          <a class="s-link" href="{{ route('user.unseen-notifications') }}">
            <i class="bi bi-bell"></i>
            <span>Notifications</span>
            <i class="bi bi-chevron-right ms-auto arw"></i>
          </a>
        </li>
        <li>
          <a class="s-link" href="{{ route('user.profile') }}">
            <i class="bi bi-gear"></i>
            <span>Setting</span>
            <i class="bi bi-chevron-right ms-auto arw"></i>
          </a>
        </li>
      </ul>
      <div class="text-center py-4"><button class="collapse-btn" id="sideToggle"><i class="bi bi-chevron-left"></i></button></div>