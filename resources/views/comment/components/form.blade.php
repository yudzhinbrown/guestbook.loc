<form action="{{route('store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Ваше имя:*</label>
        <input  name="name" type="text" class="form-control" id="name" required>
    </div>
    <div class="form-group">
        <label for="email">Ваш E-mail:*</label>
        <input name="email" type="email" class="form-control" id="name" required>
    </div>
    <div class="form-group">
        <label for="text">Отзыв(нельзя использоваsssть html теги)*:</label>
            <textarea class="form-control" name="text" required></textarea>
    </div>
    <div class="form-group">
        <label for="captcha"></label>
        {!! NoCaptcha::renderJs() !!}
        {!! NoCaptcha::display() !!}
        <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
    </div>
    <button type="submit" class="btn btn-primary">Добавить отзыв</button>
</form>