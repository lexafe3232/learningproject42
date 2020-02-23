<form method="post" name="register">
    <label for="username">Имя пользователя</label>
    <input name="username" id="username" value="<?=$_POST['username']; ?>" type="text" />
    <span class="form-error<? if ($this->isActiveError('reg_username_exists')): ?> is-visible<? endif; ?>">Введенное имя пользователя уже занято. Пожалуйста, введите другое имя</span>
    <span class="form-error<? if ($this->isActiveError('reg_invalid_username')): ?> is-visible<? endif; ?>">Имя пользователя может включать в себя буквы и цифры, содержать не менее 4 и не более 20 символов</span>
    <label for="email">Email</label>
    <input name="email" id="email" value="<?=$_POST['email']; ?>" type="text" />
    <span class="form-error<? if ($this->isActiveError('reg_email_exists')): ?> is-visible<? endif; ?>">Введенный E-mail уже занят. Пожалуйста, введите другой адрес</span>
    <span class="form-error<? if ($this->isActiveError('reg_invalid_email')): ?> is-visible<? endif; ?>">E-mail должен соответствовать формату username@service.domain</span>
    <label for="password">Пароль</label>
    <input name="password" id="password" value="<?=$_POST['password']; ?>" type="password" />
    <span class="form-error<? if ($this->isActiveError('reg_invalid_password')): ?> is-visible<? endif; ?>">Пароль может состоять из букв и цифр, содержать не менее 6 и не более 30 символов</span>
    <label for="firstname">Имя</label>
    <input name="firstname" id="firstname" value="<?=$_POST['firstname']; ?>" type="text" />
    <span class="form-error<? if ($this->isActiveError('reg_invalid_firstname')): ?> is-visible<? endif; ?>">Поле Имя должно содержать только буквы, не менее 4 и не более 20 символов</span>
    <label for="lastname">Фамилия</label>
    <input name="lastname" id="lastname" value="<?=$_POST['lastname']; ?>" type="text" />
    <span class="form-error<? if ($this->isActiveError('reg_invalid_lastname')): ?> is-visible<? endif; ?>">Поле Фамилия должно содержать только буквы, не менее 4 и не более 20 символов</span>
    <label for="avatar">Зарузить фото</label>
    <input name="avatar" id="avatar" type="file" />
    <div class="row column text-center">
        <button type="submit" value="true" name="register_submit" class="button small-expanded">Зарегистрироваться</button>
    </div>
</form>