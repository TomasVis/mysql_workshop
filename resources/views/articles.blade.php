<div>
@foreach ( $users as $user )
    <div>
        {{ $user->name }}
    <ul>        
        @foreach ( $user->articles as $article )
            <li>
                {{ $article->heading}}
            </li>
        @endforeach
    </ul>
    </div>
@endforeach
</div>
