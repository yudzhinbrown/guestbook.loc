@extends('admin.layouts.app');

@section('content')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">Имя</th>
            <th scope="col">Статус</th>
            <th scope="col">Текст</th>
            <th colspan="4" class="text-center">Действие</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($comments as $comment)
            <tr>
                <td>{{$comment->name}}</td>
                <td>
                    @if($comment->published)
                        Опубликован
                    @else
                        Не опубликован
                    @endif
                </td>
                <td>{{$comment->text}}</td>
                <td><a href="{{route('comment.edit', $comment)}}" class="btn btn-secondary">Изменить</a></td>
                <td>
                    <form action={{route('comment.destroy', $comment)}} method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="text-center">Данных нет</td>
            </tr>

        @endforelse
        </tbody>
        <tfoot>
        <tr>
            <td>
                <ul class="pagination">
                    {{$comments->links()}}
                </ul>
            </td>
        </tr>
        </tfoot>
    </table>
@endsection