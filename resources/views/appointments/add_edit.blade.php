@extends('layouts.app')

@section('content')

<div class="container-fluid"> 
    <div class="row">
        <div class="col-lg-12">
            <div class="card ">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">@if(isset($model)) Edit Appointment @else Add Appointment @endif</h4>
                </div>
                <div class="card-body">
                    @if(isset($model))
                    <form action="{{ route('userarea.appointments.update',['appointment'=>$model->id]) }}" method="post"  class="form-horizontal form-bordered">
                        @method('PUT')
                        @else
                        <form action="{{ route('userarea.appointments.store') }}" method="post" class="form-horizontal form-bordered">
                            @endif
                            @csrf
                            <div class="form-body">
                                <h3 class="box-title">Ailing Info</h3>
                                <hr class="m-t-0 m-b-40">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Title</label>
                                            <div class="col-md-9">
                                                <select class="form-control" name="title" required="">
                                                    <option value="Mr" @if(isset($model) && $model->title=="Mr") selected="" @endif>Mr</option>
                                                    <option value="Mrs" @if(isset($model) && $model->title=="Mrs") selected="" @endif>Mrs</option>
                                                    <option value="Miss" @if(isset($model) && $model->title=="Miss") selected="" @endif>Miss</option>
                                                </select>
                                                @include('includes.form-error',['field'=>'title'])
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Name</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="Name" class="form-control" name="name" required="" value="{{ old('name',$model->name ?? "") }}">
                                                @include('includes.form-error',['field'=>'name'])
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Gender</label>
                                            <div class="col-md-9">
                                                <select class="form-control custom-select" name="gender">
                                                    <option value="Male" @if(isset($model) && $model->gender=="Male") selected="" @endif>Male</option>
                                                    <option value="Female" @if(isset($model) && $model->gender=="Female") selected="" @endif>Female</option>
                                                </select>
                                                @include('includes.form-error',['field'=>'gender'])
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Date of Birth</label>
                                            <div class="col-md-9">
                                                <input type="date" class="form-control" name="dob" value="{{ old('dob',$model->dob ?? "") }}" placeholder="dd/mm/yyyy">
                                                @include('includes.form-error',['field'=>'gender'])
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Email</label>
                                            <div class="col-md-9">
                                                <input type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email',$model->email ?? "") }}">
                                                @include('includes.form-error',['field'=>'email'])
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Mobile No</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="Mobile No" class="form-control" name="phone" value="{{ old('phone',$model->phone ?? "") }}">
                                                @include('includes.form-error',['field'=>'phone'])
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Address</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="Address" class="form-control" name="address" value="{{ old('address',$model->address ?? "") }}">
                                                @include('includes.form-error',['field'=>'address'])
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Injury</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="Injury" required="" class="form-control" name="injury" value="{{ old('injury',$model->injury ?? "") }}">
                                                @include('includes.form-error',['field'=>'injury'])
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Doctor Name</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="Doctor Name" class="form-control" required="" name="doctor_name" value="{{ old('doctor_name',$model->doctor_name ?? "") }}">
                                                @include('includes.form-error',['field'=>'doctor_name'])
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Amount</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="Amount" class="form-control" name="amount" value="{{ old('amount',$model->amount ?? "") }}">
                                                @include('includes.form-error',['field'=>'amount'])
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Additional Notes</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" name="notes" placeholder="Additional Notes">{!! $model->notes ?? "" !!}</textarea>
                                                @include('includes.form-error',['field'=>'notes'])
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Token Number ({{ $token_no ?? "1" }})</label>
                                            <div class="col-md-9">
                                                <div class="radio-list">
                                                    <label class="custom-control custom-radio">
                                                        <input id="radio3" name="token_no" type="radio" checked="" value="1" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description">Continue Sequence</span>
                                                    </label>
                                                    <label class="custom-control custom-radio">
                                                        <input id="radio4" name="token_no" type="radio" value="0" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description">Start From One</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn btn-success">Submit</button>
                                                <a href="{{ route('userarea.appointments.index') }}" type="button" class="btn btn-inverse">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6"> </div>
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