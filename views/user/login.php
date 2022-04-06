<?php
/**
  * Created by PhpStorm.
 * User: Abiodun Johnson
 * Date: 05/04/2022
 * Time: 9:40 PM
 */
?>

<?php
    if (!empty($message))
    {
        echo "<div class='alert alert-success'>$message</div>";
    }
?>

<form role="form" onsubmit="return login();">
    <?= Security::csrf_token(); ?>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Enter Email" autocomplete="off" required>
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter Password" autocomplete="off" required>
    </div>

    <button type="submit" class="btn btn-primary">Login <i class="fa fa-spinner fa-spin" id="login-loader" style="display: none;"></i></button>
</form>
