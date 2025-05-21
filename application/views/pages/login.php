<h1>Login User</h1>
<hr>
<?php if($this->session->flashdata('failed_loggedin')) : ?>
    <?= '<p class="alert alert-danger">'.$this->session->flashdata('failed_loggedin').'</p>'; ?>
<?php endif; ?>

<?php if($this->session->flashdata('user_loggedout')) : ?>
    <?= '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
<?php endif; ?>

<?= validation_errors(); ?>

<?= form_open('login'); ?>
<div class="form-group">
    <label for="username">Username / Email</label>
    <input type="email" name="username" id="username" value="<?= set_value('username'); ?>" class="form-control" 
        autocomplete="off" placeholder="Enter username">
</div>

<div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" id="password" value="" class="form-control" placeholder="Enter password">
</div>

<button type="submit" class="btn btn-primary">Login</button>