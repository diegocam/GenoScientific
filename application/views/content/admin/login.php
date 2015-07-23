<style>
    #login_section{
        width: 1000px;
        margin:0 auto;
    }

    form{
        border-radius: 10px;
        padding: 20px;
        width: 50%;
        margin: 40px auto;
        background-color: dodgerblue;
        color:white;
    }

    form h2{
        text-align: center;
        font-size: 30px;
    }
    form fieldset{
        text-align: center;
        width: 90%;
        margin: 20px auto;
    }
    form label{
        font-size: 18px;
        text-align: left;
        display:block;
    }
    form input[type="text"],
    form input[type="password"]{
        width: 95%;
        padding: 10px;
    }



    .sign_button {
        -moz-box-shadow:inset 0px 1px 0px 0px #c1ed9c;
        -webkit-box-shadow:inset 0px 1px 0px 0px #c1ed9c;
        box-shadow:inset 0px 1px 0px 0px #c1ed9c;
        background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #9dce2c), color-stop(1, #8cb82b) );
        background:-moz-linear-gradient( center top, #9dce2c 5%, #8cb82b 100% );
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#9dce2c', endColorstr='#8cb82b');
        background-color:#9dce2c;
        -webkit-border-top-left-radius:13px;
        -moz-border-radius-topleft:13px;
        border-top-left-radius:13px;
        -webkit-border-top-right-radius:13px;
        -moz-border-radius-topright:13px;
        border-top-right-radius:13px;
        -webkit-border-bottom-right-radius:13px;
        -moz-border-radius-bottomright:13px;
        border-bottom-right-radius:13px;
        -webkit-border-bottom-left-radius:13px;
        -moz-border-radius-bottomleft:13px;
        border-bottom-left-radius:13px;
        text-indent:0;
        border:1px solid #83c41a;
        display:inline-block;
        color:#ffffff;
        font-family:Arial;
        font-size:20px;
        font-weight:bold;
        font-style:normal;
        height:51px;
        line-height:51px;
        width:169px;
        text-decoration:none;
        text-align:center;
        text-shadow:1px 1px 0px #689324;
        cursor: pointer;
    }
    .sign_button:hover {
        background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #8cb82b), color-stop(1, #9dce2c) );
        background:-moz-linear-gradient( center top, #8cb82b 5%, #9dce2c 100% );
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#8cb82b', endColorstr='#9dce2c');
        background-color:#8cb82b;
    }.sign_button:active {
        position:relative;
        top:1px;
    }

    .errors{
        margin-top: 10px;
        color: yellow;
        font-weight: bold;
        font-size: 16px;
    }
</style>

<div id="login_section">

    <?php echo form_open('auth/login"'); ?>
    <h2>Login</h2>
    <fieldset>
        <?php
        echo form_label('User Name:', 'username');
        echo form_input('username', set_value('username'), 'id=username');
        ?>
    </fieldset>
    <fieldset>
        <?php
        echo form_label('Password:', 'password');
        echo form_password('password', '', 'id=password');
        ?>
    </fieldset>
    <fieldset>
        <?php echo form_submit(array('class' => 'sign_button', 'value' => 'Sign In')); ?>
        <div class="errors">
            <?php echo validation_errors(); ?>
        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
