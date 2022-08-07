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
                    <img class="rounded-circle mt-5 avatarimg" width="150px" id="upfile1"  onclick="document.getElementById('myphoto').click();" src="{{asset('photos/'.auth()->user()->photo)}}">
                    <span class="font-weight-bold">{{$user->name}}</span>
                    <span class="text-black-50">{{$user->email}}</span>
                </div>
            </div>
            <input type="file" name="photo"  hidden accept="png,jpg,jpeg" id="myphoto" onchange="document.getElementById('upfile1').src = window.URL.createObjectURL(this.files[0])">
            <div class="col-md-8 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Edit Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Name</label><input type="text" name="name"
                                class="form-control" placeholder="Full Name" value="{{$user->name}}"></div>
                        <div class="col-md-6"><label class="labels">Email</label><input type="email"
                                class="form-control" name="email" value="{{$user->email}}" placeholder="Email"></div>
                        <div class="col-md-6"><label class="labels">Password</label><input type="password"
                                class="form-control" name="password"  placeholder="Password"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">phone 1 (Whatsapp)</label><input name="phone1" type="text"
                                class="form-control" value="{{$user->phone1}}" placeholder="phone1"></div>
                        <div class="col-md-6"><label class="labels">phone 2</label><input name="phone2" type="text"
                                class="form-control" placeholder="phone2" value="{{$user->phone2}}"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label class="labels">Country</label>
                            <input name="country" type="text"
                                class="form-control" value="{{$user->country}}" placeholder="Country">
                                <!-- All countries -->
                            </div>
                        <div class="col-md-6"><label class="labels">Job</label><input type="text" name="job_cat"
                                class="form-control" placeholder="Job" value="{{$user->job_cat}}"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Certificate</label><input type="text"
                                name="certificate" class="form-control" value="{{$user->certificate}}"
                                placeholder="Certificate"></div>
                        <div class="col-md-6"><label class="labels">Visa</label><input type="text" name="visa"
                                class="form-control" value="{{$user->visa}}" placeholder="Visa"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Address</label><input type="text"
                                name="address" class="form-control" value="{{$user->address}}"
                                placeholder="address"></div>
                    </div>
                    <div class="row mt-3">
                        <br />
                        <label for="password-confirm">{{ __('Upload Your CV') }} @if (auth()->user()->cv != '') <a
                                href="{{route('mycv', $user->id)}}" style="color:blue" target="_blank">Preview Your Cv</a>
                            @endif</label>

                        <div class="col-md-12">
                            <input type="file" class="form-control" name="cv" id="Upfile" hidden accept=".pdf">
                            <button class="btn btn-success form-control"
                                onclick="document.getElementById('Upfile').click();" id="upfile2"> <i
                                    class="fa fa-upload"></i> Upload CV</button>
                        </div>
                    </div>

                    <div class="mt-3 "><button class="btn btn-primary  " style="width: 100%" type="submit">Save
                            Profile</button></div>
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
    $(document).ready(function() {
     
      
        $( "#upfile2" ).on( "click", function(e) {
            e.preventDefault();
    });
    $( "#upfile1" ).on( "click", function(e) {
            e.preventDefault();
    });
    });
</script>
@endpush

@endsection
