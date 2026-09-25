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

             
               <!-- veryfiy acc -->
               <div class="col-12 col-lg-12">
                <div class="card rounded-2">
                    <div class="card-body">
                        <div class="row">
            <!-- jobs poster -->
                <div class="col-12 col-xsm-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 border-end">
                     <div class="content-pane">
                    <h3 class="headline mb-0">Jobs <span class="accent">Poster</span></h3>
                    <p class="lede">
                      Simple rules and guidelines for Job Posters.
                    </p>
                    <div class="d-flex flex-column gap-3 mb-0">
                         <div class="role-mini-card mb-0">
                      <ol>
                        <li>অ্যাকাউন্ট তৈরি করুন রেজিস্ট্রেশন করে লগইন করুন। </li>
                        <li>জব পোস্টারদের জন্য অ্যাকাউন্ট স্বয়ংক্রিয়ভাবে ফ্রি ভেরিফফাইড হবে। </li>
                        <li>ডিপোজিট করুন প্রয়োজনীয় অর্থ জমা করুন।</li>
                        <li>বিনামূল্যে জব পোস্ট করুন</li>
                        <li>জব পোস্ট করুন কাজের তথ্য ও বাজেট যোগ করুন।</li>
                        <li>আবেদন যাচাই করুন দক্ষতা ও অভিজ্ঞতা দেখে প্রার্থী বাছাই করুন।</li>
                        <li>কর্মী নিয়োগ করুন যোগ্য কর্মী নির্বাচন করে কাজ দিন।</li>
                      </ol>
                    </div>
                    </div>
                    </div>
                </div>
            <!-- job workers -->
              <div class="col-12 col-xsm-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <div class="content-pane ms-3">
        <h3 class="headline mb-0">Jobs <span class="accent">Worker</span></h3>
        <p class="lede">
          Simple rules and guidelines for Job Workers
        </p>
            <div class="d-flex flex-column gap-3 mb-0">
            <div class="role-mini-card mb-0">
          <ol>
            <li>অ্যাকাউন্ট তৈরি করুন রেজিস্ট্রেশন করে লগইন করুন। </li>
            <li>অ্যাকাউন্ট ভেরিফাই করুন,বিকাশ, রকেট অথবা নগদের মাধ্যমে মাত্র ৫০ টাকা ফি প্রদান করে আপনার অ্যাকাউন্ট ভেরিফাই করে Verified Accountount কাজ করুন।</li>
            <li>কাজ খুঁজুন আপনার দক্ষতা অনুযায়ী উপযুক্ত কাজ খুঁজে আবেদন করুন।</li>
            <li>নির্ধারিত সময়ের মধ্যে দায়িত্বশীলতার সঙ্গে কাজটি সম্পন্ন করুন।</li>
            <li>পেমেন্ট গ্রহণ করুন কাজ সফলভাবে সম্পন্ন করার পর আপনার প্রাপ্য পারিশ্রমিক গ্রহণ করুন।</li>
          </ol>
            </div>
           </div>
         </div>
             </div>
            </div>
        </div>
                </div>
                  <!-- veryfiy acc input filde-->
                   <div class="card rounded-2 py-5 mt-3">
                       <div class="card-body">
            <div class="row d-flex justify-content-center align-items-center mt-2">
                <div class="col-12 col-xsm-8 col-sm-8 col-md-6 col-lg-6 col-xl-4 col-xxl-4 mt-2">
                   @if(session()->has('message'))
                     <p class="alert alert-danger">  {{ session('message') }}</p>
                    @endif
              @if(Auth::user()->upgrade_status !== 'active')
              <div class="card shadow p-4">
                <h3 class="text-center mb-4">Account Verification</h3>
                <form id="paidAccountForm" action="{{ route('account.verify.paid') }}" method="POST">
                @csrf
                  <div class="mb-2">
                    <label for="text" class="form-label text-dark">Bkas|Nagad Number</label>
                    <input type="text" class="form-control" name="ac_number" placeholder="0191xxxxxx" required>
                  </div>
                  <div class="mb-2">
                    <label for="text" class="form-label text-dark">Select Account</label>
                      <select class="form-control" name="ac_type" aria-label="Default select example">
                      <option selected>Select Account</option>
                      <option value="Bkas">Bkas</option>
                      <option value="Nagad">Nagad</option>
                      <option value="Rocket">Rocket</option>
                     </select>
                    </div>
                    <div class="mb-2">
                    <label for="text" class="form-label text-dark">Amount</label>
                    <input type="text" class="form-control" name="amount" value="{{ $PaidCharg->paid_charg }}" placeholder="amount" readonly>
                  </div>
                  <div class="mb-2">
                    <label for="text" class="form-label text-dark">Transaction ID</label>
                    <input type="text" class="form-control" name="tran_id" placeholder="Transaction" required>
                  </div>
                  <button type="submit" id="paidSubmitBtn" class="btn btn-primary w-100">Submit</button>
                </form>
              </div>
              @else
                  <h3>Already Upgrade account</h3>
              @endif
            </div>
            </div>
        </div>
    </div>
</div>
<!-- end verify acc -->
</div>
 </div>
<footer class="mt-5 footer-section">
    @include('user.layouts.partials.footer')
</footer>
<!-- verifaction submite -->
<script>
$(document).ready(function () {

    $('#paidAccountForm').on('submit', function (e) {

        e.preventDefault();

        let form = $(this);
        let button = $('#paidSubmitBtn');

        // Remove previous errors
        form.find('.form-control, .form-select').removeClass('is-invalid');
        form.find('.invalid-feedback').remove();

        let acNumber = form.find('[name="ac_number"]').val().trim();
        let acType   = form.find('[name="ac_type"]').val();
        let amount   = form.find('[name="amount"]').val().trim();
        let tranId   = form.find('[name="tran_id"]').val().trim();

        let hasError = false;

        // Account Number
        if (acNumber === '') {

            showError('ac_number', 'Account number is required.');
            hasError = true;

        } else if (!/^01[3-9]\d{8}$/.test(acNumber)) {

            showError(
                'ac_number',
                'Please enter a valid Bangladesh mobile number.'
            );

            hasError = true;
        }

        // Account Type
        if (acType === '') {

            showError('ac_type', 'Please select an account.');
            hasError = true;
        }

        // Amount
        if (amount === '') {

            showError('amount', 'Amount is required.');
            hasError = true;

        } else if (isNaN(amount) || Number(amount) <= 0) {

            showError('amount', 'Please enter a valid amount.');
            hasError = true;
        }

        // Transaction ID
        if (tranId === '') {

            showError('tran_id', 'Transaction ID is required.');
            hasError = true;
        }

        // Stop if validation failed
        if (hasError) {
            return;
        }

        // Disable button
        button
            .prop('disabled', true)
            .text('Submitting...');

        // AJAX
        $.ajax({

            url: form.attr('action'),

            type: form.attr('method'),

            data: form.serialize(),

            dataType: 'json',

            success: function (response) {

                if (response.status === true) {

                    Swal.fire({
                        icon: 'success',
                        title: 'Payment Submitted!',
                        text: response.message ||
                              'Payment information submitted successfully.',
                        confirmButtonText: 'OK',
                        confirmButtonColor: '#FF4433',
                        allowOutsideClick: false



                    }).then(function () {

                        // Reset form after clicking OK
                        form[0].reset();

                    });

                window.location.href = '/user/dashboard';

                } else {

                    Swal.fire({
                        icon: 'error',
                        title: 'Submission Failed!',
                        text: response.message ||
                              'Something went wrong. Please try again.',
                        confirmButtonText: 'OK',
                        confirmButtonColor: '#FF4433'
                    });
                }
            },

            error: function (xhr) {

                // Laravel validation error
                if (xhr.status === 422) {

                    let errors = xhr.responseJSON?.errors;

                    if (errors) {

                        $.each(errors, function (field, messages) {

                            showError(field, messages[0]);

                        });

                    } else {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Validation Error!',
                            text: xhr.responseJSON?.message ||
                                  'Please check the form and try again.',
                            confirmButtonText: 'OK'
                        });
                    }

                } else {

                    let message =
                        xhr.responseJSON?.message ||
                        'Something went wrong. Please try again.';

                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: message,
                        confirmButtonText: 'OK',
                        confirmButtonColor: '#FF4433'
                    });
                }
            },

            complete: function () {

                button
                    .prop('disabled', false)
                    .text('Submit');
            }
        });

        // Show validation error
        function showError(field, message) {

            let input = form.find('[name="' + field + '"]');

            input.addClass('is-invalid');

            input.after(
                '<div class="invalid-feedback">' +
                message +
                '</div>'
            );
        }

    });

});
</script>
@endsection

