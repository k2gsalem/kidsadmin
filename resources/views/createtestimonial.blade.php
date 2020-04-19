<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<a href="{{ route('testimonials.index') }}">back</a>
<body>

    {{-- @if(isset($error) and count($error)>0)
    @foreach($error as $k =>$v)
        <div class='alert alert-danger'>
            {{$v[0]}}
        </div>
    @endforeach
@endif --}}
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


    <form action="{{ route('testimonials.store') }}" method="post" enctype="multipart/form-data" >
        @csrf
        <input type="text" name="testimonial_name" id="" placeholder="Testimonial Name" required>

        <input type="date" name="testimonial_date" id="" placeholder="Testimonial Date" required>

        <input type="text" name="testimonial_desc" id="" placeholder="Testimonial Description" required>
        <input type="file" name="testimonial_image" id="" placeholder="Testimonial Image" required>
        <input type="submit" value="Create Testimonial">
    </form>
</body>
</html>
