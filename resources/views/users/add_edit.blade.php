@extends('layouts.app')

@section('content')

<div class="container-fluid"> 
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white"> @if(isset($model)) Edit @else Add @endif User</h4>
                </div>
                <div class="card-body">
                    @if(isset($model))
                    <form action="{{ route('userarea.users.update',['user'=>$model->id]) }}" method="post"  class="form-horizontal form-bordered">
                        @method('PUT')
                        @else
                        <form action="{{ route('userarea.users.store') }}" method="post" class="form-horizontal form-bordered">
                            @endif
                            @csrf
                            <div class="form-body">
                                <div class="form-group row last">
                                    <label class="control-label text-right col-md-3">Role</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="role_id" required="">
                                            <option value="1" @if(isset($model) && $model->role_id=="1") selected="" @endif>Admin</option>
                                            <option value="2" @if(isset($model) && $model->role_id=="2") selected="" @endif>Cashier</option>
                                        </select>
                                         @include('includes.form-error',['field'=>'role_id'])
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Name" class="form-control" name="name" required="" value="{{ old('name',$model->name ?? "") }}">
                                        @include('includes.form-error',['field'=>'name'])
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" placeholder="Email" class="form-control" name="email" required="" value="{{ old('email',$model->email ?? "") }}">
                                        @include('includes.form-error',['field'=>'email'])
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Phone</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Phone" class="form-control" name="phone" required="" value="{{ old('phone',$model->phone ?? "") }}">
                                        @include('includes.form-error',['field'=>'phone'])
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Status</label>
                                    <div class="col-md-9">
                                        <input type="radio" name="status" value="1" @if(isset($model) && $model->status=="1") checked="checked" @endif id="inlineRadio1">
                                        <label for="inlineRadio1"> Active </label> &nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="status" value="0" @if(isset($model) && $model->status=="0") checked="checked" @endif id="inlineRadio2">
                                        <label for="inlineRadio2">Not Active</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" placeholder="Password" class="form-control" name="password" @if(isset($model) && $model->password) @else required="" @endif>
                                        @include('includes.form-error',['field'=>'password'])
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="offset-sm-3 col-md-9">
                                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Submit</button>
                                                <a href="{{ route('userarea.users.index') }}" type="button" class="btn btn-inverse">Back</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
    @push('scripts')
    @endpush