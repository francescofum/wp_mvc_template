<?php

/**
 * The view. 
 * No functions needed to call the view... unless you want to put helper funtions.
 * Ideally though the 'view' should only render and shouldn't have any logic beyond
 * some basic frontend logic mainly just calling the 'echo' command.
 */
    

/**
 * Javascript pertaining to this view should be enqueded here.
 * Multipe js files can be enqueued.
 */
wp_enqueue_script('login', plugins_url('mvc_template/static/js/login_js/login_main.js'));


ob_start();

?>
<!-- HTML starts here...  -->
<br><br><br>

<div class="container">
    <form action="#" method="post">
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="<?php echo $email_placeholder; ?>" value="<?php if(isset($mvc_user_email)) echo $mvc_user_email; ?>">                                 
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="<?php echo $password_placeholder; ?>" value="<?php  if(isset($mvc_user_password)) echo $mvc_user_password;?>">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" name="login_btn" class="btn btn-primary">Submit</button>
    </form>
</div>



<!-- HTML ends here... -->
<?php

//  Include additional. files if this html gets too big you can include write a new one and include it.
require_once dirname(__DIR__) . '/login_view/login-second-form.view.php';

echo ob_get_clean();


?>

