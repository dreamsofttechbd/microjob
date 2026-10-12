             <table class="table table-striped  table-responsive">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Amount</th>
                        <th>TranxID</th>
                        <th>Payment Number</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    	<?php $i=1; ?>
                     @foreach($transactions as $transaction)
                      
                      <tr>
                        <td> <?php echo $i++ ?></td>
                        <td><a href="">{{ $transaction->user->name}}</a></td>
                        <td><strong class="text-success">${{ $transaction->amount}}</strong></td>
                        <td>{{ $transaction->transaction_id}}</td>
                        <td>{{ $transaction->sender_number}}</td>
            
                        <td>
                          @if($transaction->status=="pending")
                           <strong class="badge badge-dark mt-2">Pending</strong>
                          @elseif($transaction->status=="approved")
                           <strong class="badge badge-success mt-2">Approved</strong>
                          @elseif($transaction->status=="rejected")
                           <strong class="badge badge-danger mt-2">Rejected</strong>
                          @endif

                        </td>
                    

                          <td>{{$transaction->created_at->format('d M Y, h:i A')}}</td>
                        
                        <td>
                         @if($transaction->status=="pending")
                        
                      <form action="{{ route('admin.transaction-reject', $transaction->id) }}" method="POST" 
                            onsubmit="return confirm('Are you sure to reject?')">
                          @csrf
                          @method('PATCH')

                          <button type="submit" class="btn btn-sm btn-danger">× Reject</button>
                      </form>
                   
                     <form action="{{ route('admin.transaction-approve', $transaction->id) }}" method="POST" 
                            onsubmit="return confirm('Are you sure to approve?')">
                          @csrf
                          @method('PATCH')

                          <button type="submit" class="btn btn-sm btn-success">Approve</button>
                      </form>


                          @elseif($transaction->status=="approved")
                          <strong class="badge badge-success mt-2">
                          Approved {{ $transaction->approved_at->format('d M Y, h:i A')}}
                        </strong>
                          @elseif($transaction->status=="rejected")
                           <strong class="badge badge-danger mt-2">
                             Rejected {{ $transaction->updated_at->format('d M Y, h:i A')}}
                           </strong>
                          @endif

                        
                        

  
                        </td>
                      </tr>
                    @endforeach
                     
                    </tbody>
                  </table>