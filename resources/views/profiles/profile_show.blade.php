@include('layouts.app')
<html>
    <head>
</head>
<body>
<script src="{{ mix('js/app.js') }}"></script>

{{__('Full name :')}} {{$user -> username}}
<a href = "/post/create">Post</a>

@foreach($user->posts as $post)
    <a href="/post/post_show/{{ $post->id }}">
        <img src="/storage/{{ $post->image }}" width="300" height="300"></a>
@endforeach
<example-component></example-component>
</body>

    </html>



