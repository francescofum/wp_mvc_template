
<?php


/**
 * @params :
 * 
 * 
 */
function mvc_login() {

    /* 0. Handle any POST requests*/
    if(array_key_exists('login_btn',$_POST))
    {
        // Handle the post. 
        $email     = $_POST['email'];
        $password  = $_POST['password'];

        // Create a User instance
        $user = new User($email,$password);
        $user->is_allowed();

        $email     = $user->email;
        $password  = $user->password;

        // Store the email and password to a global variable
        // Check user.controller.php to see how to access the variable.
        global $mvc_user_email;
        global $mvc_user_password;

        $mvc_user_email = $email;
        $mvc_user_password = $password;
        

    }

    echo  $GLOBALS['globVar'];
    /* 1. Grab stuff from the model */

    /* 2. Modify the data in any way necessary*/

    /* 3. Specify any parameters that the view might need */
    $email_placeholder    = "Enter your email address here.";
    $password_placeholder = "Make sure you have a strong password.";

    /* 4. Render the view*/
    require_once dirname(__DIR__) . '/views/login_view/login.view.php';


}
add_shortcode('login','mvc_login');