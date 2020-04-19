<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>testimonial Details</h2>
<div class="card">
    <div class="card-body">
        <a href="{{ route('testimonials.index') }}">back</a>
        <ul>

        @php
            $testimonial_id=$testimonial[0]['id'];
        @endphp
        <li>{{  $testimonial[0]['testimonial_name'] }}</li>
        <li>{{  $testimonial[0]['testimonial_date'] }}</li>
        <li>
            <img src="{{ config('global.storage').'/testimonials_picture/' .$testimonial[0]['testimonial_image'] }}" height="100px" width="150px" alt="" sizes="small">
       </li>

        <li>{{ $testimonial[0]['created_at']  }}</li>
        <li>{{ $testimonial[0]['updated_at']  }}</li>

    </ul>
    </div>


</div>


{{--  <a href="route('testimonials.destroy')"></a>  --}}



</body>
</html>
