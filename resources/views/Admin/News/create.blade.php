@extends('Admin.master')
@section('content')
<h2 style="padding-bottom: 35px;float: left;">Add News </h2>

<div class="clearfix"></div>

<form method="POST" action="{{route('admin.news.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">news Category</label>
        <select name="newscat_id"  class="form-select" >
            @foreach ($cats as $cat)
                <option value="{{$cat->id}}">{{$cat->getTranslation('name','ar')}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="name">Head EN</label>
        <input type="name" class="form-control" id="name" name="head[en]"  placeholder="Write Head.." required>
    </div>
    <div class="form-group">
        <label for="name">Head AR</label>
        <input type="name" class="form-control" id="name" name="head[ar]"  placeholder="Write Head.." required>
    </div>
    <div class="form-group">
        <label for="email">Body En </label>
        <textarea name="body[en]"></textarea>
        <script>
                CKEDITOR.replace( 'body[en]' );
        </script>
    </div>
    <div class="form-group">
        <label for="email">Body AR </label>
        <textarea name="body[ar]"></textarea>
        <script>
                CKEDITOR.replace( 'body[ar]' );
        </script>
    </div>
    <div class="form-group">
        <a data-fancybox="gallery" href=""> 
            <img id="output" src="" style="width: 100px;" class="img-thumbnail" alt=""></a>
        <br/>

        <label for="img">IMG</label>
        <input type="file" class="form-control" id="img" name="img"  placeholder="Write Body.." required  onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@push("custom-css")

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
@push('scripts')
<script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
@endpush
@endpush
@endsection