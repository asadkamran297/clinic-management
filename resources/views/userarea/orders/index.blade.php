@extends('userarea.layouts.app')

@section('content')


<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">list of All Orders</h4>
					<h6 class="card-subtitle"></h6>
					<div class="table-responsive">
						<table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
							<thead>
								<tr>
									<th>Order #</th>
									<th>Status</th>
									<th>Details</th>
									<th>Deadline/Price</th>
									<th>Details</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<a href="#">
										<td>w1-04544523</td>
										<td><span class="label label-danger">Not Paid</span> </td>
										<td>No special details are added</td>
										<td>12-10-2014</td>
										<td><a href="{{ route('userarea.orders.details',['order'=>12]) }}" type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="View details of order"><i class="fa fa-eye" aria-hidden="true"></i></a>
										</td>
									</a>
								</tr>
								<tr>
									<a href="#">
										<td>w1-04544523</td>
										<td><span class="label label-success">	Paid</span> </td>
										<td>No special details are added</td>
										<td>12-10-2014</td>
										<td><a href="" type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="View details of order"><i class="fa fa-eye" aria-hidden="true"></i></a>
										</td>
									</a>
								</tr>
								<tr>
									<a href="#">
										<td>w1-04544523</td>
										<td><span class="label label-danger">Not Paid</span> </td>
										<td>No special details are added</td>
										<td>12-10-2014</td>
										<td><a href="" type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="View details of order"><i class="fa fa-eye" aria-hidden="true"></i></a>
										</td>
									</a>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection