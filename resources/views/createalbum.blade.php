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
                            {{session('success')}}
                        </div>
                    @endif
@if(session('error') !== null)
    @foreach(session('error') as $k =>$v)
        <div class='alert alert-danger'>
            {{$v[0]}}
        </div>
    @endforeach
@endif


    <form action="{{ route('albums.store') }}" method="post" enctype="multipart/form-data" >
        @csrf
        <input type="text" name="album_name" id="" placeholder="Album Name" required>
        {{-- <input type="number" name="privacy" id="" placeholder="Privacy"> --}}
        <select name="privacy" id="" placeholder="Privacy" required>
            <option value="1">Public</option>
            <option value="3">Private</option>
        </select>
        <input type="date" name="album_date" id="" placeholder="Album Date" required>
        <input type="text" name="album_venue" id="" placeholder="Album Venue" required>
        <input type="text" name="album_description" id="" placeholder="Album Description">
        <input type="file" name="cover_picture" id="" placeholder="Cover Picture">
        <input type="submit" value="create album">
    </form>
</body>
</html>
