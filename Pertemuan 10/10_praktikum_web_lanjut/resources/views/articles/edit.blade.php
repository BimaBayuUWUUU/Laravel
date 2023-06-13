@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/articles/{{$article->id}}" method="post"
              enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control"
                       required="required" name="title" value="{{$article->title}}"></br>    </div>
            <div class="form-group">
                <label for="isi">Content</label>
                <input type="text" class="form-control"
                       required="required" name="isi" value="{{$article->isi}}"></br>
            </div>
            <div
                class="form-group">
                <label
                    for="image">Feature Image</label>
                <input
                    type="file" class="form-control"
                    required="required"
                    name="image" value="{{$article->featured_image}}"></br>
                <img
                    width="150px" src="{{asset('storage/'.$article->featured_image)}}">
            </div>
            <button
                type="submit" class="btn btn-primaryfloat-right">Ubah
                Data</button>
        </form>
    </div>
@endsection
