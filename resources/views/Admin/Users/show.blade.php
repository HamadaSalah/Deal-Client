@extends('Admin.master')
@section('content')
@push('styles')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

@endpush
@push('custom-scripts')
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@endpush
<h2 style="padding-bottom: 35px;float: left;margin-top: 0">User Data</h2>
<div class="clearfix"></div>
<div class="table-responsive">
    <div class="card mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0" style="height: 100%;display: flex;align-items: center;">Photo</h6>
                </div>
                <div class="col-sm-9 text-secondary"> <a data-fancybox="gallery" href="{{asset('photos/'.$user->photo)}}"> 
                    <img src="{{asset('photos/'.$user->photo)}}" style="width: 100px;height: 100px;" class="img-thumbnail" alt="">
                </a></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Full Name</h6>
                </div>
                <div class="col-sm-9 text-secondary"> {{$user->name}}</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">{{$user->email}}</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Phone (Whatsapp)</h6>
                </div>
                <div class="col-sm-9 text-secondary"> {{$user->phone1}}</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Mobile</h6>
                </div>
                <div class="col-sm-9 text-secondary">{{$user->phone2}}</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Country</h6>
                </div>
                <div class="col-sm-9 text-secondary">{{$user->country}}</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Certificate</h6>
                </div>
                <div class="col-sm-9 text-secondary"> {{$user->certificate}}</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Visa</h6>
                </div>
                <div class="col-sm-9 text-secondary">{{$user->visa}}</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">CV</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    <a href="{{route('mycv', $user->id)}}" target="_blank">
                        <button class="btn btn-success" type="button">Preview CV</button>
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
