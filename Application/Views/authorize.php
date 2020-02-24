<div class="reveal" tabindex="-1" role="dialog" id="login-window">
    <div class="login-window__tabs">
        <ul class="tabs" id="login-tabs" data-tabs="978k45-tabs" role="tablist" data-deep-link="true">
            <li class="tabs-title is-active login-window__first-tab" role="presentation">
                <a href="#login" role="tab" id="login-label" aria-controls="login" aria-selected="true"><?=$this->getStr('label_login'); ?></a>
            </li>
            <li class="tabs-title" role="presentation">
                <a href="#register" role="tab" id="register-label" aria-controls="register" aria-selected="true"><?=$this->getStr('label_registration'); ?></a>
            </li>
        </ul>
    </div>
    <div class="tabs-content" data-tabs-content="login-tabs">
        <div class="tabs-panel is-active" id="login" role="tabpanel" aria-hidden="false" aria-labelledby="login-label">
            <div class="tab-content">
                <?php
                    include 'forms/login_form.php';
                ?>
            </div>
        </div>
        <div class="tabs-panel" id="register" role="tabpanel" aria-hidden="true" aria-labelledby="register-label">
            <div class="tab-content">
                <?php
                    include 'forms/register_form.php';
                ?>
            </div>
        </div>
    </div>
</div>
