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
               <!-- transactions table -->
                 <div class="col-12 col-lg-12">
                    <div class="card">
                         <div class="card-header bg-white border-0 pt-4 px-4">
        <h5 class="fw-bold mb-1">Transaction History</h5>
        <p class="text-secondary small mb-0">Manage and review all transactions</p>
    </div>
                        <div class="card-body">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">User</th>
                            <th scope="col">Amount</th>
                            <th scope="col">TranxID</th>
                            <th scope="col">Payment Number</th>
                            <th scope="col">Status</th>
                            <th scope="col">Date</th>
                            </tr>
                          </thead>
                            <tbody>
                    @forelse($transactions as $transaction)
                        <tr>
                            <td class="ps-4 fw-semibold text-secondary">
                                {{ $loop->iteration }}
                            </td>

                            <td>
                                <span class="fw-semibold text-primary">
                                    {{ $transaction->user->name ?? 'N/A' }}
                                </span>
                            </td>

                            <td>
                                <span class="fw-bold text-primary">
                                    ${{ number_format($transaction->amount, 2) }}
                                </span>
                            </td>

                            <td>
                                <span class="text-secondary small">
                                    {{ $transaction->transaction_id ?? 'N/A' }}
                                </span>
                            </td>

                            <td>
                                <span class="text-secondary">
                                  {{ $transaction->deposit->sender_number ?? 'N/A' }}
                                </span>
                            </td>

                            <td>
                                @if($transaction->status == 'pending')
                                    <span class="badge bg-warning text-white px-3 py-2">
                                        Pending
                                    </span>
                                @elseif($transaction->status == 'approved')
                                    <span class="badge bg-success px-3 py-2">
                                        Approved
                                    </span>
                                @elseif($transaction->status == 'rejected')
                                    <span class="badge  bg-danger text-white px-3 py-2">
                                        Rejected
                                    </span>
                                @else
                                    <span class="badge bg-success text-white px-3 py-2">
                                        {{ ucfirst($transaction->status ?? 'Unknown') }}
                                    </span>
                                @endif
                            </td>

                            <td>
                                <span class="text-secondary small text-nowrap">
                                    {{ $transaction->created_at?->format('d M Y, h:i A') }}
                                </span>
                            </td>

                            <td class="pe-4">
                                @if($transaction->status == 'pending')
                                    <div class="d-flex flex-column gap-2">
                                        <form action="{{ route('admin.transaction-approve', $transaction->id) }}"
                                              method="POST"
                                              onsubmit="return confirm('Are you sure you want to approve this transaction?')">
                                            @csrf
                                            @method('PATCH')

                                            <button type="submit" class="btn btn-sm btn-success w-100 text-nowrap">
                                                <i class="bi bi-check-circle me-1"></i>
                                                Approve
                                            </button>
                                        </form>

                                        <form action="{{ route('admin.transaction-reject', $transaction->id) }}"
                                              method="POST"
                                              onsubmit="return confirm('Are you sure you want to reject this transaction?')">
                                            @csrf
                                            @method('PATCH')

                                            <button type="submit" class="btn btn-sm btn-outline-danger w-100 text-nowrap">
                                                <i class="bi bi-x-circle me-1"></i>
                                                Reject
                                            </button>
                                        </form>
                                    </div>

                                @elseif($transaction->status == 'approved')
                                    <div class="text-success small text-nowrap">
                                        <i class="bi bi-check-circle-fill me-1"></i>
                                        Approved
                                        <div class="text-secondary mt-1">
                                            {{ $transaction->approved_at?->format('d M Y, h:i A') ?? '' }}
                                        </div>
                                    </div>

                                @elseif($transaction->status == 'rejected')
                                    <div class="text-danger small text-nowrap">
                                        <i class="bi bi-x-circle-fill me-1"></i>
                                        Rejected
                                        <div class="text-secondary mt-1">
                                            {{ $transaction->updated_at?->format('d M Y, h:i A') }}
                                        </div>
                                    </div>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center py-5">
                                <i class="bi bi-receipt fs-1 text-secondary"></i>
                                <h6 class="mt-3 fw-semibold">No transactions found</h6>
                                <p class="text-secondary small mb-0">
                                    Your transaction records will appear here.
                                </p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
                        </table>
                        </div>
                    </div>
                 </div>
           </div>
       </div>


  @endsection