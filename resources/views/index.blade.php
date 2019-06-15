@extends('layouts.app')

@section('content')
    <div class="row">
        @forelse($comments as $comment)
            <div class="col-md-12" style="border: 1px solid #cccccc; margin-bottom: 10px;">
                <h4>Имя: {{$comment->name}}</h4>
                <h6>email: {{$comment->email}}</h6>
                <p>Отзыв: {{$comment->text}}</p>
            </div>

            @empty
        @endforelse
    </div>
    <ul class="pagination">
        {{$comments->links()}}
    </ul>
@endsection