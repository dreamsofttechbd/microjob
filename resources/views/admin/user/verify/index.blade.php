<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:system-ui,sans-serif;background:#f1f5f9;color:#0f172a;font-size:14px}
.app{display:flex;flex-direction:column;height:100vh;min-height:600px}
.topbar{height:52px;background:#fff;border-bottom:1px solid #e2e8f0;display:flex;align-items:center;gap:10px;padding:0 14px;flex-shrink:0;z-index:10}
.hbtn{display:flex;flex-direction:column;gap:4px;background:none;border:none;cursor:pointer;padding:4px;border-radius:6px}
.hbtn span{display:block;width:18px;height:2px;background:#64748b;border-radius:2px;transition:all .2s}
.hbtn.open span:nth-child(1){transform:rotate(45deg) translate(4px,4px)}
.hbtn.open span:nth-child(2){opacity:0}
.hbtn.open span:nth-child(3){transform:rotate(-45deg) translate(4px,-4px)}
.logo{font-weight:700;font-size:15px;color:#2563eb;letter-spacing:-.3px}
.logo em{color:#94a3b8;font-style:normal;font-weight:400}
.tb-right{margin-left:auto;display:flex;align-items:center;gap:8px}
.tb-search{display:flex;align-items:center;gap:6px;background:#f8fafc;border:1px solid #e2e8f0;border-radius:8px;padding:5px 10px}
.tb-search input{border:none;background:none;font-size:12px;color:#0f172a;outline:none;width:130px}
.tb-search svg{width:13px;height:13px;opacity:.4;flex-shrink:0}
.notif{position:relative;width:32px;height:32px;background:#f8fafc;border:1px solid #e2e8f0;border-radius:8px;display:flex;align-items:center;justify-content:center;cursor:pointer}
.notif svg{width:14px;height:14px;opacity:.6}
.ndot{position:absolute;top:5px;right:5px;width:6px;height:6px;background:#ef4444;border-radius:50%;border:1.5px solid #fff}
.ava{width:30px;height:30px;border-radius:50%;background:#2563eb;color:#fff;font-size:11px;font-weight:600;display:flex;align-items:center;justify-content:center;cursor:pointer}

/* BODY = sidebar + main side by side */
.body{display:flex;flex:1;overflow:hidden}

/* SIDEBAR — always visible, 210px wide */
.sidebar{width:210px;min-width:210px;background:#fff;border-right:1px solid #e2e8f0;display:flex;flex-direction:column;overflow-y:auto;overflow-x:hidden;flex-shrink:0}

/* On mobile: sidebar becomes overlay */
.overlay{display:none;position:fixed;inset:0;top:52px;background:rgba(0,0,0,.45);z-index:40}

.sec-label{padding:14px 14px 4px;font-size:10px;font-weight:600;color:#94a3b8;text-transform:uppercase;letter-spacing:.7px}
.ni{display:flex;align-items:center;gap:9px;padding:8px 10px;border-radius:8px;margin:1px 8px;cursor:pointer;font-size:13px;color:#64748b;transition:background .15s;white-space:nowrap}
.ni:hover{background:#f1f5f9;color:#0f172a}
.ni.on{background:#eff6ff;color:#2563eb;font-weight:500}
.ni svg{width:15px;height:15px;flex-shrink:0;opacity:.7}
.ni.on svg{opacity:1}
.nbadge{margin-left:auto;font-size:10px;font-weight:600;padding:1px 6px;border-radius:20px}
.nbadge.red{background:#fee2e2;color:#991b1b}
.nbadge.amber{background:#fef3c7;color:#92400e}
.sb-bottom{margin-top:auto;padding:10px 8px;border-top:1px solid #e2e8f0}

.main{flex:1;overflow-y:auto;padding:16px;min-width:0}

.pg-head{display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:8px;margin-bottom:16px}
.pg-title{font-size:17px;font-weight:700;letter-spacing:-.3px}
.pg-sub{font-size:12px;color:#64748b;margin-top:2px}
.pills{display:flex;gap:6px}
.pill{padding:4px 10px;border-radius:20px;font-size:11px;font-weight:500;background:#f8fafc;color:#64748b;border:1px solid #e2e8f0;cursor:pointer}
.pill.on{background:#eff6ff;color:#2563eb;border-color:#bfdbfe}

.stats{display:grid;grid-template-columns:repeat(3,1fr);gap:10px;margin-bottom:14px}
.sc{background:#fff;border:1px solid #e2e8f0;border-radius:12px;padding:13px}
.sc .ic{width:32px;height:32px;border-radius:9px;display:flex;align-items:center;justify-content:center;margin-bottom:9px}
.sc .ic svg{width:15px;height:15px}
.sc .lbl{font-size:11px;color:#64748b;margin-bottom:2px}
.sc .val{font-size:18px;font-weight:700;letter-spacing:-.3px}
.sc .dl{font-size:11px;margin-top:3px}
.up{color:#16a34a}.dn{color:#dc2626}

.card{background:#fff;border:1px solid #e2e8f0;border-radius:12px;padding:14px;margin-bottom:14px}
.card-h{display:flex;align-items:center;justify-content:space-between;margin-bottom:12px}
.card-t{font-size:13px;font-weight:600}
.card-s{font-size:11px;color:#64748b}

table{width:100%;border-collapse:collapse;font-size:12px;table-layout:fixed}
th{padding:7px 8px;text-align:left;font-size:10px;font-weight:600;color:#64748b;text-transform:uppercase;letter-spacing:.4px;border-bottom:1px solid #e2e8f0}
td{padding:8px 8px;border-bottom:1px solid #f1f5f9;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}
tr:last-child td{border-bottom:none}
.tag{display:inline-block;padding:2px 7px;border-radius:20px;font-size:10px;font-weight:500}
.tg{background:#dcfce7;color:#15803d}.ta{background:#fef9c3;color:#854d0e}.tr{background:#fee2e2;color:#991b1b}.tb{background:#dbeafe;color:#1d4ed8}
.uc{display:flex;align-items:center;gap:6px}
.mav{width:24px;height:24px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:9px;font-weight:600;flex-shrink:0}

.fi{display:flex;gap:9px;padding:9px 0;border-bottom:1px solid #f1f5f9}
.fi:last-child{border-bottom:none}
.fd{width:26px;height:26px;border-radius:50%;flex-shrink:0;display:flex;align-items:center;justify-content:center}
.ft{font-size:12px;line-height:1.4}
.fti{font-size:10px;color:#94a3b8;margin-top:2px}

/* MOBILE: sidebar hidden by default, slides in as overlay */
@media(max-width:640px){
  .sidebar{
    position:fixed;
    top:52px;left:0;
    height:calc(100% - 52px);
    z-index:50;
    transform:translateX(-100%);
    transition:transform .25s ease;
    min-width:200px;
    width:200px;
  }
  .sidebar.mob-open{transform:translateX(0)}
  .overlay.show{display:block}
  .stats{grid-template-columns:repeat(2,1fr)}
  .tb-search{display:none}
}
/* DESKTOP: hamburger hidden, sidebar always visible */
@media(min-width:641px){
  .hbtn{display:none}
  .overlay{display:none!important}
}
</style>

<div class="app">
  <div class="body">
   @include('admin.layouts.sidebar')
    <main class="main">
      <div class="row">
<!--               <div class="col-md-4">
            <div class="card shadow-sm border-0 rounded-3 mt-3">
              <div class="card-header bg-success text-white mb-2">
                  <h5 class="mb-0">Add Continent</h5>
              </div>
				@if(session()->has('success'))
				    <div class="alert alert-success">
				        {{ session('success') }}
				    </div>
				@endif
				@if(session()->has('error'))
				    <div class="alert alert-danger">
				        {{ session('error') }}
				    </div>
				@endif
          </div>
         </div> -->
         <div class="col-md-8">
               <div class="card shadow-sm border-0 rounded-3 mt-3">
                   <div class="card-body">
                   <table class="table table-striped  table-responsive">
                    <thead>
                      <tr>
		                  <th scope="col">#</th>
					      <th scope="col">Number</th>
					      <th scope="col">Amount</th>
					      <th scope="col">Transtion ID</th>
					      <th scope="col">Expire</th>
                <th scope="col">status</th>
                      </tr>
                    </thead>
                    <tbody>
            @foreach( $requestveryfi as $data )
			      <tr>
			      <td>{{ $loop->index +1}}</td>
			      <td>{{ $data->ac_number}}</td>
			      <td>{{ $data->amount}}</td>
			      <td>{{ $data->tran_id}}</td>
            <td>{{ \Carbon\Carbon::parse($data->expired_at)->format('d M Y g:i a') }}</td>
            <td>{{ $data->status}}</td>
			      <td>
			      	 <!-- delete button -->
            <a href="{{route('admin.paid.approve',$data->id)}}">
               <button class="btn btn-sm btn-danger"> <i class="fa fa-check">Approve</button>
            </a>

            <a href="">
               <button class="btn btn-sm btn-danger">Delete</button>
            </a>

            <!-- edit button -->
             <button class="editBtn btn btn-sm btn-success"
                  data-id=""
                  data-name=""
                  data-type=""
                  data-status="">
                  Edit
                  </button>
			           </td>
			           </tr>
                 @endforeach
                </tbody>
              </table>
              </div>
            </div>
         </div>
      </div>
    </main>
  </div>
</div>


