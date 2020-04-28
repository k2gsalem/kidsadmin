@extends('layouts.app')
@section('content')

<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{ route('testimonials.index') }}" class="btn btn-icon"><i
                    class="fas fa-arrow-left"></i>&nbsp;<b>Back</b></a>
        </div>
        <h1>Edit Testimonials</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{ route('testimonials.index') }}">Testimonials</a>
            </div>
            <div class="breadcrumb-item">Edit Testimonial</div>
        </div>
    </div>

    <div class="section-body">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form
                            action="{{ route('testimonials.update',['testimonial'=>$testimonial[0]['id']]) }}"
                            method="post" enctype="multipart/form-data">
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
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Testimonial
                                    Name</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" value="{{ $testimonial[0]['testimonial_name'] }}" name="testimonial_name" id="" required>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Testimonial
                                    Date</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="date" class="form-control" value="{{ $testimonial[0]['testimonial_date'] }}" name="testimonial_date" id="" required>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Testimonial
                                    Description</label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea name="testimonial_desc" class="form-control" style="height:175px  !important" id=""  cols="" rows="">
                                        {{ $testimonial[0]['testimonial_desc'] }}
                                    </textarea>
                                </div>
                                    {{-- <input type="text" class="form-control"  value="{{ $testimonial[0]['testimonial_desc'] }}" name="testimonial_desc" id="" required> </div> --}}
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                                    Testimonial Image</label>
                                <div class="col-sm-12 col-md-7">
                                    <div id="image-preview" class="image-preview">
                                        <label for="image-upload" id="image-label">Choose File</label>
                                        <input type="file" name="testimonial_image" id="image-upload"  required   />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button type="submit" class="btn btn-primary">Edit Testimonials</button>
                                </div>
                            </div>
                            {{-- <input type="text" name="testimonial_name" id=""
                                value="{{ $testimonial[0]['testimonial_name'] }}" required>
                            <input type="date" name="testimonial_date" id=""
                                value="{{ $testimonial[0]['testimonial_date'] }}" required>
                            <input type="text" name="testimonial_desc" id=""
                                value="{{ $testimonial[0]['testimonial_desc'] }}" required>
                            <input type="file" name="testimonial_image" id=""
                                value="{{ $testimonial[0]['testimonial_image'] }}" required>
                            <input type="submit" value="Edit Testimonial"> --}}

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
