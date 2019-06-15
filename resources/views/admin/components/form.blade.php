<div class="form-group">
    <label for="name">Имя пользователя</label>
    <input value="{{$comment->name ?? ""}}" name="name" type="text" class="form-control" id="name" required>
</div>
<div class="form-group">
    <label for="email">Электронная почта пользователя</label>
    <input value="{{$comment->email ?? ""}}" name="email" type="email" class="form-control" id="name" required>
</div>
<div class="form-group">
    <label for="published">Статус</label>
    <select name="published" class="form-control" id="published">
        @if (isset($comment->id))
            <option value="1" @if ($comment->published == 1) selected @endif>Опубликована</option>
            <option value="0" @if ($comment->published == 0) selected @endif>Не опубликована</option>
        @else
            <option value="1">Опубликована</option>
            <option value="0">Не опубликована</option>
        @endif
    </select>
</div>
<div class="form-group">
    <label for="text">Текст</label>
    <textarea class="form-control" name="text" required>{{$comment->text ?? ""}}</textarea>
</div>