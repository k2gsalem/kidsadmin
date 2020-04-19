<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Album Details</h2>
<div class="card">
    <div class="card-body">
        <a href="{{ route('albums.index') }}">back</a>
        <ul>
        @foreach ( $albums as $album)
        @php
            $album_id=$album['id'];
        @endphp
        <li>{{  $album['album_name'] }}</li>
        <li>{{  $album['album_date'] }}</li>
        <li>
            <img src="{{ config('global.storage').'/cover_pictures/' .$album['cover_picture'] }}" height="100px" width="150px" alt="" sizes="small">
       </li>
        <li>{{ $album['album_venue'] }}</li>
        <li>{{ $album['privacy'] }}</li>
        <li>{{ $album['created_at']  }}</li>
        <li>{{ $album['updated_at']  }}</li>
        @endforeach
    </ul>
    </div>


</div>
<br>
<br>
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
    <td> <a href="{{ route('albums.photo.show',['album'=>$album_id,'photo'=>$photo_id]) }}">View</a>
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
