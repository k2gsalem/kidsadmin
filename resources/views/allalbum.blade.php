<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Document</title>
</head>
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
    <div class="section-header-button">
        <a href="{{ route('albums.create') }}" class="btn btn-primary">Add New</a>
      </div>
    <table>
        <thead>
            <tr>

                <th>Name</th>
                <th>Description</th>
                <th>Date</th>
                <th>Venue</th>
                <th>Cover Picture</th>
                <th>Privacy</th>
                <th>Created BY</th>
                <th>Created At</th>
                <th>Actions</th>

              </tr>
        </thead>
        <tbody>


            @foreach ($albums as $album )
            @php
            $id=$album['id'];
            @endphp

            <tr>

              <td><span class="text-center justify-content-center" style="padding-top:10px;">{{ $album['album_name'] }}</span>

              </td>
              <td>
                {{ $album['album_description'] }}
              </td>
              <td>{{ $album['album_date'] }}</td>
              <td>{{ $album['album_venue'] }}</td>
              <td>
                <a href="#">
                  <img alt="image" src="{{ config('global.storage') }}/cover_pictures/{{ $album['cover_picture'] }}" class="rounded-circle" width="35" data-toggle="title" title="">
                </a>
              </td>
              <td>{{ $album['privacy'] }}</td>
              <td>{{ $album['created_by'] }}</td>
              <td>{{ $album['created_at'] }}</td>
              <td>
                  <div class="d-flex">

                  <a href="{{url('albums/'.$id)}}" class="badge badge-primary d-inline"><i class="fas fa-eye"></i>View&nbsp;&nbsp;</a>&nbsp;&nbsp;

                  <a href="{{url('albums/'.$id.'/edit')}}"  class="badge badge-info d-inline"><i class="fas fa-edit"></i>Edit&nbsp;&nbsp;</a>&nbsp;&nbsp;
                  {{-- <meta name="csrf-token" content="{{ csrf_token() }}">
                  <a href="{{action('AlbumController@destroy', $id)}}" class="job-delete badge badge-danger d-inline"><i class="fas fa-trash"></i>Deletes</a> --}}

                  <form action="{{route('albums.destroy',['album'=>$id])}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>
                   </form>
                  </div>
              </td>
              </tr>
              @endforeach
    </tbody>
    </table>
    <script>
        $(function () {
            $('.job-delete').click(function (event) {
                var token = $("meta[name='csrf-token']").attr("content");
                event.preventDefault();
                event.stopPropagation();


                $.ajax({
                    type: 'DELETE',
                    url: $(this).attr('href'),
                    data:{
                        "_token": token
                    },
                    success: function (response) {
                        alert('Deleted');
                        location.reload();
                    }

                });
            });
        });
    </script>
</body>
</html>
