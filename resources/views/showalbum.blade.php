@extends('layouts.app')
@section('content')

<h2>Album Details</h2>
<div class="card">
    <div class="card-body text-center">
        <div class="section-header-button">
            <a href="{{ route('albums.index') }}" class="btn btn-info">Back</a>
        </div>
        @foreach( $albums as $album)
            @php
                $album_id=$album['id'];
            @endphp
            <div>
                <h3> {{ $album['album_name'] }} </h3>
            </div>
            <div>
                <img src="{{ config('global.storage').'/cover_pictures/' .$album['cover_picture'] }}"
                    height="100px" width="150px" alt="" sizes="small">
            </div>
        @endforeach
    </div>
</div>
<h2>Photos</h2>

<div class="section-header-button">
    <a href="{{ route('albums.photo.create',['album'=>$album_id]) }}"
        class="btn btn-primary">Add Photo</a>
</div>
<div>
    @if(count($photos)>0)
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Photo List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
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



                                    @foreach( $photos as $photo)
                                        @php
                                            $photo_id=$photo['id']
                                        @endphp
                                        <tr>
                                            <td>{{ $photo['type'] }}</td>
                                            <td> <img
                                                    src="{{ config('global.storage').'/photos/'.$photo['photo'] }}"
                                                    height="50px" width="50px" alt="">
                                            </td>
                                            <td>{{ $photo['photo_description'] }}</td>
                                            <td>{{ $photo['path'] }}</td>
                                            <td>{{ $photo['privacy'] }}</td>
                                            <td>{{ $photo['created_at'] }}</td>
                                            <td>
                                                {{-- <a href="{{ route('albums.photo.show',['album'=>$album_id,'photo'=>$photo_id]) }}
                                                "
                                                class="badge badge-primary d-inline"><i
                                                    class="fas fa-eye"></i>View&nbsp;&nbsp;</a>&nbsp;&nbsp; --}}
                                                <a href="{{ route('albums.photo.edit',['album'=>$album_id,'photo'=>$photo_id]) }}"
                                                    class="badge badge-info d-inline"><i
                                                        class="fas fa-edit"></i>Edit&nbsp;&nbsp;</a>&nbsp;&nbsp;
                                                <form
                                                    action="{{ route('albums.photo.destroy',['album'=>$album_id,'photo'=>$photo_id]) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit"
                                                        class="job-delete badge badge-danger d-inline"> <i
                                                            class="fas fa-trash"></i>Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @else
        {{ "No Image Uploaded" }}
    @endif
</div>




</section>
@endsection
