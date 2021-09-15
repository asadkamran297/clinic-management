@extends('userarea.layouts.app')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8">
			<h4 class="m-b-0"><b>Pending Orders</b></h4>
			<p class="text-muted m-t-0">Here you can find a list of all pending orders.</p>
			<div class="card">
				<div class="card-body">
					{{-- <h4 class="card-title">list of All Orders</h4> --}}
					{{-- <h6 class="card-subtitle"></h6> --}}
					<div class="table-responsive">
						<table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
							<thead>
								<tr>
									<th>Order #</th>
									<th>Status</th>
									<th>Details</th>
									<th>Price</th>
									<th>Deadline</th>
									<th>Details</th>
								</tr>
							</thead>
							<tbody>
								@if(isset($orders) && count($orders))
								@foreach($orders as $order)
								<tr>
									<a href="#">
										<td>{{ $order->order_num ?? "w-12132324" }}</td>
										<td><span class="label label-warning">{{ $order->payment_status ?? "Pending" }}</span> </td>
										<td>{{ $order->details ?? "No special details are added" }}</td>
										<td>{{ $order->price ?? "$300" }}</td>
										<td>{{ $order->deadline ?? "12-10-2014" }}</td>
										<td><a href="{{ route('userarea.orders.details',['order'=>12]) }}" type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="View details of order"><i class="fa fa-eye" aria-hidden="true"></i></a>
										</td>
									</a>
								</tr>
								@endforeach
								@else
								<tr>
									<td>No record found.</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								@endif
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<h4 class="m-b-0">LAST TESTIMONIALS</h4>
			<p class="text-muted m-t-0">Latest reviews left by our customers.</p>
			<div class="card">
				<div class="card-body">
					{{-- <h4 class="card-title">Card title</h4> --}}
					<h6 class="card-subtitle mb-2 text-muted"><b class="text-dark">Undergraduate| English, Literature & Philology | 3 pages</b></h6>
					<p class="card-text">
						<svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
						<svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
						<svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
						<svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
						<svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
					</p>
					<p class="card-text">Great Job, thanks!</p>
					<p class="card-text pull-right">10 Aug 2021</p>
					<a href="#" class="card-link label label-info">Customer #2273928502 </a>
					<div class="row">
						{{-- <a href="#" class="btn btn-success">HIRE THIS WRITER</a> --}}
						
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					{{-- <h4 class="card-title">Card title</h4> --}}
					<h6 class="card-subtitle mb-2 text-muted"><b class="text-dark">Undergraduate| English, Literature & Philology | 3 pages</b></h6>
					<p class="card-text">
						<svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
						<svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
						<svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
						<svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
						<svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
					</p>
					<p class="card-text">Great Job, thanks!</p>
					<p class="card-text pull-right">10 Aug 2021</p>
					<a href="#" class="card-link label label-info">Customer #2273928502 </a>
					<div class="row">
						{{-- <a href="#" class="btn btn-success">HIRE THIS WRITER</a> --}}
						
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					{{-- <h4 class="card-title">Card title</h4> --}}
					<h6 class="card-subtitle mb-2 text-muted"><b class="text-dark">Undergraduate| English, Literature & Philology | 3 pages</b></h6>
					<p class="card-text">
						<svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
						<svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
						<svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
						<svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
						<svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
					</p>
					<p class="card-text">Great Job, thanks!</p>
					<p class="card-text pull-right">10 Aug 2021</p>
					<a href="#" class="card-link label label-info">Customer #2273928502 </a>
					{{-- <a href="#" class="btn btn-success mt-2">HIRE THIS WRITER</a> --}}
					{{-- <a href="#" class="card-text pull-right">Writer#122456</a> --}}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection