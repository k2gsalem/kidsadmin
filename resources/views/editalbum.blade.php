@extends('layouts.app')
@section('content')
{{-- <a href="{{ route('albums.index') }}">back</a> --}}


@foreach( $albums as $album)
    @php
        $id=$album['id']
    @endphp
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('albums.index') }}" class="btn btn-icon"><i
                        class="fas fa-arrow-left"></i>&nbsp;<b>Back</b></a>
            </div>
            <h1>Create New Album</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="{{ route('albums.index') }}">Albums</a></div>
                <div class="breadcrumb-item">Edit Album</div>
            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ url('albums/'.$id) }}" method="post"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf


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

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Album Name</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="album_name" value="{{ $album['album_name'] }}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea name="album_description" class="summernote-simple">
                                            {{ $album['album_description'] }}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Album Date</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="date" name="album_date" value="{{ $album['album_date'] }}" class="form-control datepicker">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Album Venue</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="album_venue" value="{{ $album['album_venue'] }}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Cover
                                        Picture</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div id="image-preview" class="image-preview">
                                            <label for="image-upload" id="image-label">Choose File</label>
                                            <input type="file" name="cover_picture" name="image" id="image-upload" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Privacy</label>
                                    <div class="col-sm-12 col-md-7">

                                            <select name="privacy" id="" placeholder="Privacy" required  class="form-control selectric" >
                                                <option value="1"
                                                    {{ $album['privacy'] == 1 ? 'selected' : '' }}>
                                                    Public</option>
                                                <option value="3"
                                                    {{ $album['privacy'] == 3 ? 'selected' : '' }}>
                                                    Private</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button type="submit" class="btn btn-primary">Edit Album</button>
                                    </div>
                                </div>

                                {{-- <input type="text" name="album_name" id=""
                                    value="{{ $album['album_name'] }}" required>
                                <select name="privacy" id="" placeholder="Privacy" required>
                                    <option value="1"
                                        {{ $album['privacy'] == 1 ? 'selected' : '' }}>
                                        Public</option>
                                    <option value="3"
                                        {{ $album['privacy'] == 3 ? 'selected' : '' }}>
                                        Private</option>
                                </select>
                                <input type="date" name="album_date" id=""
                                    value="{{ $album['album_date'] }}" required>
                                <input type="text" name="album_venue" id=""
                                    value="{{ $album['album_venue'] }}" required>
                                <input type="text" name="album_description" id=""
                                    value="{{ $album['album_description'] }}"" placeholder="
                                    Album Description">
                                <input type="file" name="cover_picture"
                                    id="{{ $album['cover_picture'] }}" value="">
                                <input type="submit" value="edit album"> --}}

                            </form>
@endforeach
</div>
</div>
</div>
</div>
</div>
</section>
@endsection
