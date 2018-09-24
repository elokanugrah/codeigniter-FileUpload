<?php $this->load->view('templates/login_header'); ?>

    <form role="form" action="" method="POST">

      <fieldset class="clearfix">

        <p><span class="fontawesome-user"></span><input type="text" name="username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
        <p><span class="fontawesome-lock"></span><input type="password"  name="password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
        <p><input type="submit" value="Login"></p>

      </fieldset>

    </form>
    
<?php $this->load->view('templates/login_footer'); ?>