<h2 class="text-center"><?=$this->getStr('label_user'); ?> <?=$username ?></h2>
<div class="reveal" id="profile-window">
    <div class="grid-x grid-padding-x">
        <div class="cell text-center">
            <img style="max-width: 400px;" src="../../images/avatar/<?=$id; ?>.jpg" />
        </div>
    </div>
    <div class="grid-x grid-padding-x">
        <div class="large-5 medium-5 cell">
            <label><?=$this->getStr('label_firstname'); ?></label>
        </div>
        <div class="large-6 medium-6 cell">
            <label><?=$firstname; ?></label>
        </div>
    </div>
    <div class="grid-x grid-padding-x">
        <div class="large-5 medium-5 cell">
            <label><?=$this->getStr('label_lastname'); ?></label>
        </div>
        <div class="large-6 medium-6 cell">
            <label><?=$lastname; ?></label>
        </div>
    </div>
    <div class="grid-x grid-padding-x">
        <div class="large-5 medium-5 cell">
            <label><?=$this->getStr('label_email'); ?></label>
        </div>
        <div class="large-6 medium-6 cell">
            <label><?=$email; ?></label>
        </div>
    </div>
    <div class="grid-x grid-padding-x">
        <div class="large-5 medium-5 cell">
            <label><?=$this->getStr('label_reg_datetime'); ?></label>
        </div>
        <div class="large-6 medium-6 cell">
            <label><?=$reg_datetime; ?></label>
        </div>
    </div>
</div>