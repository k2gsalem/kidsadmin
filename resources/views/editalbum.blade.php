<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<a href="{{ route('albums.index') }}">back</a>
<body>

    {{-- @if(isset($error) and count($error)>0)
    @foreach($error as $k =>$v)
        <div class='alert alert-danger'>
            {{$v[0]}}
        </div>
    @endforeach
@endif --}}
@if(session('success') !== null)
                        <div class='alert alert-success'>
                            {{ session('success') }}
                        </div>
                    @endif
@if(session('error') !== null)
    @foreach(session('error') as $k =>$v)
        <div class='alert alert-danger'>
            {{ $v[0] }}
        </div>
    @endforeach
@endif

@foreach ( $albums as $album)
@php
    $id=$album['id']
@endphp
    <form action="{{url('albums/'.$id)}}" method="post" enctype="multipart/form-data" >
        @method('PUT')
        @csrf



        <input type="text" name="album_name" id=""  value="{{ $album['album_name'] }}" required>
        {{-- <input type="number" name="privacy" id="" value="{{ $album['privacy'] }}" required> --}}
        <select name="privacy" id="" placeholder="Privacy" required>
            <option value="1" {{ $album['privacy'] == 1 ? 'selected' : '' }}>Public</option>
            <option value="3" {{ $album['privacy'] == 3 ? 'selected' : '' }}>Private</option>
        </select>
        <input type="date" name="album_date" id="" value="{{  $album['album_date'] }}" required>
        <input type="text" name="album_venue" id=""  value="{{ $album['album_venue'] }}" required>
        <input type="text" name="album_description" id="" value="{{ $album['album_description'] }}"" placeholder="Album Description">
        <input type="file" name="cover_picture" id="{{ $album['cover_picture'] }}" value="" >
        <input type="submit" value="edit album">

    </form>
    @endforeach
</body>
</html>
