<h2 class="text-center"><?=$this->getStr('label_user'); ?> <?=$username ?></h2>
<div class="text-center" id="profile-photo">
    <? if (isset($avatar)): ?>
        <img src="<?=AVATAR_DIR.$avatar; ?>" />
    <? endif; ?>
</div>
<div class="reveal" id="profile-window">
    <div class="grid-x grid-padding-x">
        <div class="large-6 medium-6 cell">
            <label><?=$this->getStr('label_firstname'); ?></label>
        </div>
        <div class="large-6 medium-6 cell">
            <span class="profile-window__data-label"><?=$firstname; ?></span>
        </div>
    </div>
    <div class="grid-x grid-padding-x">
        <div class="large-6 medium-6 cell">
            <label><?=$this->getStr('label_lastname'); ?></label>
        </div>
        <div class="large-6 medium-6 cell">
            <span class="profile-window__data-label"><?=$lastname; ?></span>
        </div>
    </div>
    <div class="grid-x grid-padding-x">
        <div class="large-6 medium-6 cell">
            <label><?=$this->getStr('label_email'); ?></label>
        </div>
        <div class="large-6 medium-6 cell">
            <span class="profile-window__data-label"><?=$email; ?></span>
        </div>
    </div>
    <div class="grid-x grid-padding-x">
        <div class="large-6 medium-6 cell">
            <label><?=$this->getStr('label_reg_datetime'); ?></label>
        </div>
        <div class="large-6 medium-6 cell">
            <span class="profile-window__data-label"><?=$reg_datetime; ?></span>
        </div>
    </div>
</div>