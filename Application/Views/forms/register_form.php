<form method="post" name="register">
    <label for="username"><?=$this->getStr('label_username'); ?></label>
    <input name="username" id="username" value="<?=$_POST['username']; ?>" type="text" />
    <span class="form-error<? if ($this->isActiveError('reg_username_exists')): ?> is-visible<? endif; ?>"><?=$this->getStr('error_reg_username_exists'); ?></span>
    <span class="form-error<? if ($this->isActiveError('reg_invalid_username')): ?> is-visible<? endif; ?>"><?=$this->getStr('error_reg_invalid_username'); ?></span>
    <label for="email"><?=$this->getStr('label_email'); ?></label>
    <input name="email" id="email" value="<?=$_POST['email']; ?>" type="text" />
    <span class="form-error<? if ($this->isActiveError('reg_email_exists')): ?> is-visible<? endif; ?>"><?=$this->getStr('error_reg_email_exists'); ?></span>
    <span class="form-error<? if ($this->isActiveError('reg_invalid_email')): ?> is-visible<? endif; ?>"><?=$this->getStr('error_reg_invalid_email'); ?></span>
    <label for="password"><?=$this->getStr('label_password'); ?></label>
    <input name="password" id="password" value="<?=$_POST['password']; ?>" type="password" />
    <span class="form-error<? if ($this->isActiveError('reg_invalid_password')): ?> is-visible<? endif; ?>"><?=$this->getStr('error_reg_invalid_password'); ?></span>
    <label for="firstname"><?=$this->getStr('label_firstname'); ?></label>
    <input name="firstname" id="firstname" value="<?=$_POST['firstname']; ?>" type="text" />
    <span class="form-error<? if ($this->isActiveError('reg_invalid_firstname')): ?> is-visible<? endif; ?>"><?=$this->getStr('error_reg_invalid_firstname'); ?></span>
    <label for="lastname"><?=$this->getStr('label_lastname'); ?></label>
    <input name="lastname" id="lastname" value="<?=$_POST['lastname']; ?>" type="text" />
    <span class="form-error<? if ($this->isActiveError('reg_invalid_lastname')): ?> is-visible<? endif; ?>"><?=$this->getStr('error_reg_invalid_lastname'); ?></span>
    <label for="avatar"><?=$this->getStr('label_upload_image'); ?></label>
    <input name="avatar" id="avatar" type="file" />
    <div class="row column text-center">
        <button type="submit" value="true" name="register_submit" class="button small-expanded"><?=$this->getStr('label_register'); ?></button>
    </div>
</form>