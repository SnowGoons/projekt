<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div id="cat" class="col-md-4 col-md-offset-4">
<div class="row">
    <?php echo form_open('Login'); ?>

        <label for="nick">Login</label>
        <input type="text" name="nick">
        <span class="text-danger"><?= form_error('username');?></span><br />
        <label for="haslo">Haslo</label>
        <input type="password" name="haslo">
        <span class="text-danger"><?= form_error('password');?></span><br />
        <input class="btn btn-primary" type="submit" value="Login" style="margin: 5 95 0;">
        <?= '<label class="text-danger">'.$this->session->flashdata("error").'</label>'; ?>

    </form>

</div>
</div>
