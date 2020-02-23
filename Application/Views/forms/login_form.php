<h4 class="text-center">Авторизация</h4>
<span class="form-error<? if ($this->isActiveError('auth_empty_data')): ?> is-visible<? endif; ?>">Необходимо ввести логин и пароль</span>
<form method="post" name="login">
    <label for="email">Email</label>
    <input name="email" id="email" type="email" value="<?=$_POST['email']; ?>" />
    <span class="form-error<? if ($this->isActiveError('auth_user_not_found')): ?> is-visible<? endif; ?>">Пользователь с указанным email не найден</span>
    <label for="password">Пароль</label>
    <input name="password" id="password" type="password" value="<?=$_POST['password']; ?>" />
    <span class="form-error<? if ($this->isActiveError('auth_invalid_pass')): ?> is-visible<? endif; ?>">Неверный пароль</span>
    <div class="row column text-center">
        <button type="submit" name="login_submit" value="true" class="button small-expanded">Войти</button>
    </div>
</form>