@extends('layouts.app')
@section('content')




<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{ route('testimonials.index') }}" class="btn btn-icon"><i
                    class="fas fa-arrow-left"></i>&nbsp;<b>Back</b></a>
        </div>
        <h1>Create New Testimonials</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{ route('testimonials.index') }}">Testimonials</a>
            </div>
            <div class="breadcrumb-item">Create New Testimonial</div>
        </div>
    </div>

    <div class="section-body">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('testimonials.store') }}" method="post"
                            enctype="multipart/form-data">
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
                                    <input type="text" class="form-control" name="testimonial_name" id="" required>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Testimonial
                                    Date</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="date" class="form-control" name="testimonial_date" id="" required>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Testimonial
                                    Description</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="testimonial_desc" id="" required> </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                                    Testimonial Image</label>
                                <div class="col-sm-12 col-md-7">
                                    <div id="image-preview" class="image-preview">
                                        <label for="image-upload" id="image-label">Choose File</label>
                                        <input type="file" name="testimonial_image" id="image-upload" required />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button type="submit" class="btn btn-primary">Create Testimonials</button>
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
