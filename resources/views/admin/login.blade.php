
@include("headers.admin-header")


<div class="form-container">
    <form  class="admin-login-form" method="post" action="/admin/auth">
        @csrf
        <label  class="admin-login-form__label"for="email">Email</label>
        <input class="admin-login-form__input" name="email" type="email" id="email"/>
        <label class="admin-login-form__label" for="email">Пароль</label>
        <input class="admin-login-form__input" type="password" name="password" id="password"/>
        @if(!empty($errors) && $errors->count()>0)
            <p class="admin-login-form__error">{{$errors->first()}}</p>
        @endif
        <input class="admin-login-form__submit btn-submit"  type="submit" value="Войти"/>
    </form>
</div>
