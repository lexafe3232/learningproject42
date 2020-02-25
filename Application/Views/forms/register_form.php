<form method="post" name="register_form" id="register_form" enctype="multipart/form-data">
    <label for="reg_username"><?=$this->getStr('label_username'); ?></label>
    <input name="reg_username" id="reg_username" value="<?=$_POST['reg_username']; ?>" type="text" />
    <label for="reg_username" class="error2 form-error<? if ($this->isActiveError('reg_username_exists')): ?> is-visible<? endif; ?>"><?=$this->getStr('error_reg_username_exists'); ?></label>
    <label for="reg_username" class="error form-error<? if ($this->isActiveError('reg_invalid_username')): ?> is-visible<? endif; ?>"><?=$this->getStr('error_reg_invalid_username'); ?></label>
    <label for="reg_email"><?=$this->getStr('label_email'); ?></label>
    <input name="reg_email" id="reg_email" value="<?=$_POST['reg_email']; ?>" type="email" />
    <label for="reg_email" class="error2 form-error<? if ($this->isActiveError('reg_email_exists')): ?> is-visible<? endif; ?>"><?=$this->getStr('error_reg_email_exists'); ?></label>
    <label for="reg_email" class="error form-error<? if ($this->isActiveError('reg_invalid_email')): ?> is-visible<? endif; ?>"><?=$this->getStr('error_reg_invalid_email'); ?></label>
    <label for="reg_password"><?=$this->getStr('label_password'); ?></label>
    <input name="reg_password" id="reg_password" value="<?=$_POST['reg_password']; ?>" type="password" />
    <label for="reg_password" class="error form-error<? if ($this->isActiveError('reg_invalid_password')): ?> is-visible<? endif; ?>"><?=$this->getStr('error_reg_invalid_password'); ?></label>
    <label for="reg_firstname"><?=$this->getStr('label_firstname'); ?></label>
    <input name="reg_firstname" id="reg_firstname" value="<?=$_POST['reg_firstname']; ?>" type="text" />
    <label for="reg_firstname" class="error form-error<? if ($this->isActiveError('reg_invalid_firstname')): ?> is-visible<? endif; ?>"><?=$this->getStr('error_reg_invalid_firstname'); ?></label>
    <label for="reg_lastname"><?=$this->getStr('label_lastname'); ?></label>
    <input name="reg_lastname" id="reg_lastname" value="<?=$_POST['reg_lastname']; ?>" type="text" />
    <label for="reg_lastname" class="error form-error<? if ($this->isActiveError('reg_invalid_lastname')): ?> is-visible<? endif; ?>"><?=$this->getStr('error_reg_invalid_lastname'); ?></label>
    <label for="reg_avatar"><?=$this->getStr('label_upload_image'); ?></label>
    <input name="reg_avatar" id="reg_avatar" type="file" accept="image/jpeg,image/gif,image/png" />
    <label for="reg_avatar" class="error form-error<? if ($this->isActiveError('reg_upload_avatar_invalid_file')): ?> is-visible<? endif; ?>"><?=$this->getStr('error_reg_upload_avatar_invalid_file'); ?></label>
    <label for="reg_avatar" class="error form-error<? if ($this->isActiveError('reg_upload_avatar_too_large')): ?> is-visible<? endif; ?>"><?=$this->getStr('error_reg_upload_avatar_too_large'); ?></label>
    <label for="reg_avatar" class="error form-error<? if ($this->isActiveError('reg_upload_avatar_error')): ?> is-visible<? endif; ?>"><?=$this->getStr('error_reg_upload_avatar_error'); ?></label>
    <label><?=$this->getStr('label_upload_avatar_format'); ?></label>
    <br />
    <div class="row column text-center">
        <button type="submit" value="true" name="register_submit" class="button small-expanded"><?=$this->getStr('label_register'); ?></button>
    </div>
</form>