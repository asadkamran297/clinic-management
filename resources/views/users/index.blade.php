@extends('layouts.app')

@section('content')

<div class="container-fluid">
    @include('includes.message')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="card-title">Users</h4>
                    <h6 class="card-subtitle">Unser this section you will find the list of application users</h6>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-2"><a href="{{ route('userarea.users.create') }}" class="btn btn-success pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Add</a></div>
            </div>
            <div class="table-responsive">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Role</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($models) && count($models))
                        @foreach($models as $model)
                        <tr>
                            <td>@if($model->role_id==1)Admin @else Cahsier @endif</td>
                            <td>{{ $model->name ?? "---" }}</td>
                            <td>{{ $model->email ?? "---" }}</td>
                            <td>{{ $model->phone ?? "---" }}</td>
                            <td> @if($model->status=='1') <label class="label label-success"> Active</label> @else <label class="label label-danger"> Not Active</label> @endif</td>
                            <td>
                                <div class="action-buttons">
                                    <a class="btn btn-outline-info border-0 shadow-none" title="Edit" data-toggle="tooltip" href="{{ route('userarea.users.edit',['user'=>$model->id]) }}">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                    {{-- <form action="{{ route('userarea.users.destroy',['user'=>$model->id]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="btn btn-outline-danger border-0 shadow-none row-action-btn" title="Delete" data-toggle="tooltip" onclick="this.closest('form').submit();return false;">
                                            <i class="fa fa-solid fa-trash"></i>
                                        </a>
                                    </form> --}}
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

@endsection
@push('scripts')
<script src="{{ asset('userarea/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
@endpush