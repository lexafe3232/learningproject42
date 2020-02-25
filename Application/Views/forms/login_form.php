<h4 class="text-center"><?=$this->getStr('label_authorization'); ?></h4>
<span class="form-error<? if ($this->isActiveError('auth_error_empty_data')): ?> is-visible<? endif; ?>"><?=$this->getStr('error_auth_empty_data'); ?></span>
<form method="post" name="login_form" id="login_form">
    <label for="email"><?=$this->getStr('label_email'); ?></label>
    <input name="email" id="email" type="email" value="<?=$_POST['email']; ?>" />
    <label for="email" class="error form-error<? if ($this->isActiveError('auth_invalid_email')): ?> is-visible<? endif; ?>"><?=$this->getStr('error_auth_invalid_email'); ?></label>
    <label for="email" class="error2 form-error<? if ($this->isActiveError('auth_user_not_found')): ?> is-visible<? endif; ?>"><?=$this->getStr('error_auth_user_not_found'); ?></label>
    <label for="password"><?=$this->getStr('label_password'); ?></label>
    <input name="password" id="password" type="password" value="<?=$_POST['password']; ?>" />
    <label for="password" class="error form-error<? if ($this->isActiveError('auth_invalid_password')): ?> is-visible<? endif; ?>"><?=$this->getStr('error_auth_invalid_password'); ?></label>
    <div class="row column text-center">
        <button type="submit" name="login_submit" value="true" class="button small-expanded"><?=$this->getStr('label_authorize'); ?></button>
    </div>
</form>