@extends('userarea.layouts.app')

@section('content')

<div class="container-fluid">
	<h4 class="m-t-5"><b>ORDER #2190871</b> &nbsp;&nbsp;&nbsp;&nbsp; <span class="label label-primary">Completed</span></h4>
	{{-- <p class="text-muted m-t-0 font-12"></p> --}}
	<div class="card row">
		<div class="card-header">
			A study Assessing Teachers' Attitude Toward Adopting latest KHDA/ goverment framework for special education needs in UAE
			<div class="card-actions pull-right">
				<a class="" data-action="collapse"><i class="ti-minus"></i></a>
				<a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
				{{-- <a class="btn-close" data-action="close"><i class="ti-close"></i></a> --}}
			</div>
		</div>
		<div class="card-body collapse show">
			<h4 class="card-title">Special title treatment</h4>
			<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		</div>
	</div>
</div>

@endsection