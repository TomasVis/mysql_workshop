<div>
@foreach ( $comments as $comment )
    <div>
       FIRST: {{ $comment->first }}
    </div>
    <div>
       FIFTH: {{ $comment->fifth }}
    </div>
    <br/>
@endforeach
</div>
