@extends('user.layouts.app')
@section('content')
<div class="container">
<div class="row d-flex justify-content-center align-items-center mt-2">
	<div class="col-12 col-lg-4 mt-2">
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

