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

    <form action="{{ route('albums.photo.update',['album'=>$album_id,'photo'=>$photo_id]) }}" method="post" enctype="multipart/form-data" >
        @method('PUT')
        @csrf
        {{-- <input type="number" name="privacy" id="" value="{{ $photos[0]['privacy'] }}" placeholder="Privacy" required> --}}
        <select name="privacy" id="" placeholder="Privacy" required>
            <option value="1" {{ $photos[0]['privacy'] == 1 ? 'selected' : '' }}>Public</option>
            <option value="3" {{ $photos[0]['privacy'] == 3 ? 'selected' : '' }}>Private</option>
        </select>
        <input type="text" name="photo_description" id="" value="{{ $photos[0]['photo_description']  }}" placeholder="Photo Description" required>
        {{-- <img src="{{ config('global.storage').'/photos/'.$photos[0]['photo'] }}" height="100px" width="100px" alt="" > --}}
        <input type="file" name="photo" id="" placeholder="Picture">
        <input type="submit" value="Edit Photo">
    </form>
</body>
</html>
