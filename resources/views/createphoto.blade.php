<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<a href="{{ route('albums.show',['album'=>$album_id]) }}">back</a>
<body>
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


    <form action="{{ route('albums.photo.store',['album'=>$album_id]) }}" method="post" enctype="multipart/form-data" >
        @csrf
        {{-- <input type="number" name="privacy" id="" placeholder="Privacy"> --}}
        <select name="privacy" id="" placeholder="Privacy" required>
            <option value="1">Public</option>
            <option value="3">Private</option>
        </select>
        <input type="text" name="photo_description" id="" placeholder="Photo Description">
        <input type="file" name="photo" id="" placeholder="Picture" required>
        <input type="submit" value="Create Photo">
    </form>
</body>
</html>
