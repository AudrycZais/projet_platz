@foreach($comments as $comment)

<div class="post-reply">
    <div class="name-reply-post">{{$comment->pseudo}}</div>
    <div class="text-reply-post">{{$comment->content}}</div>
</div>

@endforeach