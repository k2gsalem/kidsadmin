<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<br>
<br>
<a href="{{ route('albums.show',['album'=>$album_id]) }}">back</a>
<h2>Photos</h2>
<a href="{{ route('albums.photo.create',['album'=>$album_id]) }}">Add Photo </a>
<div>
    @if (count($photos)>0)
    <table>
        <thead>
            <tr>
                <th>Type</th>
                    <th>Image</th>
                    <th>Image Descrption</th>
                    <th> Video URL</th>
                    <th>Privacy</th>
                    <th>Created At</th>
                    <th>Action</th>
            </tr>
        </thead>


        <tbody>



@foreach ( $photos as $photo)
@php
    $photo_id=$photo['id']
@endphp
<tr>
    <td>{{  $photo['type'] }}</td>
    <td> <img src="{{ config('global.storage').'/photos/'.$photo['photo'] }}" height="50px" width="50px" alt="">
        </td>
    <td>{{ $photo['photo_description'] }}</td>
    <td>{{ $photo['path'] }}</td>
    <td>{{ $photo['privacy'] }}</td>
    <td>{{ $photo['created_at'] }}</td>
    <td>
        <a href="{{ route('albums.photo.edit',['album'=>$album_id,'photo'=>$photo_id]) }}">Edit</a>
        <form action="{{ route('albums.photo.destroy',['album'=>$album_id,'photo'=>$photo_id])}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit">Delete</button>
        </form>
    </td>
</tr>
@endforeach
</tbody>
</table>
@else
    {{ "No Image Uploaded" }}
@endif
</div>



</body>
</html>
