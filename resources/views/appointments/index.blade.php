@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <!-- Column -->
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                            <div class="card">
                                <div class="box bg-info text-center">
                                    <h1 class="font-light text-white">{{ $models->count() ?? 0 }}</h1>
                                    <h6 class="text-white">Total Appointments</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                            <div class="card">
                                <div class="box bg-primary text-center">
                                    <h1 class="font-light text-white">{{ $today_appointments ?? 0 }}</h1>
                                    <h6 class="text-white">Today's Appointments</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                            <div class="card">
                                <div class="box bg-success text-center">
                                    <h1 class="font-light text-white">{{ $admin_users ?? 0}}</h1>
                                    <h6 class="text-white">Regietsred Admin</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                            <div class="card">
                                <div class="box bg-dark text-center">
                                    <h1 class="font-light text-white">{{ $other_users ?? 0 }}</h1>
                                    <h6 class="text-white">Other Regietsred Users</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                    </div>
                    @include('includes.message')
                    <h4 class="card-title">All Appointments</h4>
                    <h6 class="card-subtitle">Unser this section you will find the list of appointments</h6>
                    <div class="table-responsive">
                        <table id="demo-foo-addrow" class="table m-t-30 table-hover no-wrap contact-list" data-page-size="10">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Token</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Mobile No</th>
                                    <th>Doctor Name</th>
                                    <th>Amount</th>
                                    <th>Injury</th>
                                    <th>Visit Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($models) && count($models))
                                @foreach($models as $model)
                                <tr>
                                    <td>{{ $model->id }}</td>
                                    <td>{{ $model->token_no ?? 1 }}</td>
                                    <td>{{ $model->title ?? "" }} {{ $model->name ?? "" }}</td>
                                    <td>{{ $model->gender ?? "" }}</td>
                                    <td>{{ $model->phone ?? "" }}</td>
                                    <td>{{ $model->doctor_name ?? "" }}</td>
                                    <td>{{ $model->amount ?? "" }}</td>
                                    <td>{{ $model->injury ?? "" }}</td>
                                    <td>{{ $model->visit_datetime ?? '---' }}</td>
                                    <td>
                                        <div class="action-buttons">
                                            <a class="btn btn-outline-info border-0 shadow-none" title="Edit" data-toggle="tooltip" href="{{ route('userarea.appointments.edit',['appointment'=>$model->id]) }}">
                                                <i class="fa fa-pencil-square-o"></i>
                                            </a>
                                            {{-- <form action="{{ route('userarea.appointments.destroy',['appointment'=>$model->id]) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="#" class="btn btn-outline-danger border-0 shadow-none row-action-btn" title="Delete" data-toggle="tooltip" onclick="this.closest('form').submit();return false;">
                                                    <i class="fa fa-solid fa-trash"></i>
                                                </a>
                                            </form> --}}
                                            <a class="btn btn-outline-info border-0 shadow-none" title="Print SLip" data-toggle="tooltip" href="{{ route('userarea.appointments.show',['appointment'=>$model->id]) }}">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script src="{{ asset('userarea/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#demo-foo-addrow').DataTable( {
            "order": [[ 0, "desc" ]]
        });
    });
</script>
@endpush