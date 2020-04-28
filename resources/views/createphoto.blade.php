@extends('layouts.app')
@section('content')
{{-- <a href="{{ route('albums.show',['album'=>$album_id]) }}">back</a> --}}



<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{ route('albums.show',['album'=>$album_id]) }}" class="btn btn-icon"><i
                    class="fas fa-arrow-left"></i>&nbsp;<b>Back</b></a>
        </div>
        <h1>Create New Photo</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{ route('albums.index') }}">Albums</a></div>
            <div class="breadcrumb-item">Create New Photo</div>
        </div>
    </div>

    <div class="section-body">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form
                            action="{{ route('albums.photo.store',['album'=>$album_id]) }}"
                            method="post" enctype="multipart/form-data">
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
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Privacy</label>
                                <div class="col-sm-12 col-md-7">
                                    <select name="privacy" id="" placeholder="Privacy" required class="form-control selectric">
                                        <option value="1">Public</option>
                                        <option value="3">Private</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Photo Description</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="photo_description" id="" placeholder="Photo Description">
                                </div>
                            </div>
                            {{-- <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Photo</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="file" name="photo" class="form-control" id="" placeholder="Picture" required>
                                </div>
                            </div> --}}
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                                    Picture</label>
                                <div class="col-sm-12 col-md-7">
                                    <div id="image-preview" class="image-preview">
                                        <label for="image-upload" id="image-label">Choose File</label>
                                        <input type="file" name="photo" name="image" id="image-upload" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button type="submit" class="btn btn-primary" >Create Photo</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
