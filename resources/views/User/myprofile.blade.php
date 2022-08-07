@extends('layouts.app')

@section('content')
@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
<div class="container rounded bg-white mt-5 mb-5">
    <form action="{{Route('editprofile')}}" , method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row" style="box-shadow: 0 0 45px #ccc;border-radius: 7px">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5 avatarimg" width="150px" id="upfile1"
                         
                        src="{{asset('photos/'.auth()->user()->photo)}}">
                    <span class="font-weight-bold">{{$user->name}}</span>
                    <span class="text-black-50">{{$user->email}}</span>
                </div>
            </div>
            <input type="file" name="photo" hidden accept="png,jpg,jpeg" id="myphoto"
                onchange="document.getElementById('upfile1').src = window.URL.createObjectURL(this.files[0])">
            <div class="col-md-8 border-right">
                <div class="p-3 py-5">
                    <div class="  justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings <span style="float: right"><i class="fa fa-gear">  </i> <a href="{{route('editprofilepage')}}">
                               Edit </a></span></h4>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
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
            </div>
        </div>
    </form>
</div>
</div>
</div>
@push('mycss')
<style>
    .form-control:focus {
        box-shadow: none;
        border-color: #BA68C8
    }

    .profile-button {
        background: rgb(99, 39, 120);
        box-shadow: none;
        border: none
    }

    .profile-button:hover {
        background: #682773
    }

    .profile-button:focus {
        background: #682773;
        box-shadow: none
    }

    .profile-button:active {
        background: #682773;
        box-shadow: none
    }

    .back:hover {
        color: #682773;
        cursor: pointer
    }

    .labels {
        font-size: 15px
    }

    .add-experience:hover {
        background: #BA68C8;
        color: #fff;
        cursor: pointer;
        border: solid 1px #BA68C8
    }

</style>
@endpush
@push('MyScript')
<script>
    $(document).ready(function () {


        $("#upfile2").on("click", function (e) {
            e.preventDefault();
        });
        $("#upfile1").on("click", function (e) {
            e.preventDefault();
        });
    });

</script>
@endpush

@endsection
