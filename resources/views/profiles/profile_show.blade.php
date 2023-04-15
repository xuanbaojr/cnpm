@include('layouts.app')


{{__('Full name :')}} {{$user -> id}}
<a href = "/post/create">Post</a>

@foreach($user->posts as $post)
    <a href="/post/post_show/{{ $post->id }}">
        <img src="/storage/{{ $post->image }}" width="300" height="300"></a>
@endforeach


<a href="/profile/{{$user->id}}/edit">Edit</a>
