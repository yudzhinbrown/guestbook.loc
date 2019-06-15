@extends('admin.layouts.app');

@section('content')
    <form action="{{route('comment.update', $comment)}}" method="post">
        @csrf
        @method('PUT')
        @include('admin.components.form')
        <button type="submit" class="btn btn-primary">Изменить</button>
    </form>
@endsection