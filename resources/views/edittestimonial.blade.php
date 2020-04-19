<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<a href="{{ route('testimonials.index') }}">Back</a>
<body>

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


{{--  @php
    $id=$testimonial[0]['id']
@endphp  --}}
    <form action="{{ route('testimonials.update',['testimonial'=>$testimonial[0]['id']])}}" method="post" enctype="multipart/form-data" >
        @method('PUT')
        @csrf
        <input type="text" name="testimonial_name" id=""  value="{{ $testimonial[0]['testimonial_name'] }}" required>       
        <input type="date" name="testimonial_date" id="" value="{{  $testimonial[0]['testimonial_date'] }}" required>       
        <input type="text" name="testimonial_desc" id="" value="{{ $testimonial[0]['testimonial_desc'] }}"  required>
        <input type="file" name="testimonial_image" id="" value="{{ $testimonial[0]['testimonial_image'] }}" required >
        <input type="submit" value="Edit Testimonial">

    </form>
   
</body>
</html>
