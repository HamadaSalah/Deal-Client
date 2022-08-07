@extends('Admin.master')
@section('content')
@push('styles')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

@endpush
@push('custom-scripts')
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@endpush
<h2 style="padding-bottom: 35px;float: left;margin-top: 0">All Users</h2>
<div class="clear"></div>
@if ($users->count()>0)
<div class="table-responsive">
    <table class="table user-table no-wrap" id="myDTable">
        <thead>
            <tr>
                <th class="border-top-0">#</th>
                <th class="border-top-0">Img</th>
                <th class="border-top-0">Name</th>
                <th class="border-top-0">Email</th>
                <th class="border-top-0">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $key => $user)
            <tr>
                <td>{{$key+1}}</td>
                <td>
                    <a data-fancybox="gallery" href="{{asset('photos/'.$user->photo)}}"> 
                        <img src="{{asset('photos/'.$user->photo)}}" style="width: 100px;height: 100px;" class="img-thumbnail" alt="">
                    </a>
                </td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                {{-- <td>
                    <input type="checkbox" {{$user->status ? 'checked':'' }} checked data-toggle="toggle" data-on="Enabled" data-off="Disabled">
                
                </td> --}}
                    <td>
                    <form style="display: inline;" action="{{route('admin.users.destroy', $user->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i> Delete</button>
                    </form>
                    <a href="{{route('admin.users.show', $user->id)}}">
                        <button class="btn btn-success" type="submit"><i class="fa fa-eye"></i> View</button>
                    </a>
                </td>

            </tr>

            @endforeach
        </tbody>
    </table>
</div>
@else
<div class="clearfix"></div>
<p class="text-center">No Data Available</p>    
@endif
@endsection
