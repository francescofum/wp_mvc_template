<?php

/*
Plugin Name: MVC_Template
Description: An example plugin based on the MVC design pattern. 
Author: WeMake 
Version: 1.0
*/

// Set global paths for the controller, view, and model (this cuould be modified to include more thing.)


 /* Add bootstrap CSS */
function mvc_bootstrap_enqueue_styles() {
    wp_enqueue_style( 'bootstrap_css', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css");
    }
add_action('wp_enqueue_scripts', 'mvc_bootstrap_enqueue_styles');

/**
 *  Add bootstrap js using bundle.
 *  This will add popper and the necessary javascript plugins at the footer.  
*/
// function mvc_bootstrap_enqueue_scripts()
// {
//     wp_enqueue_script('mvc_bootstrap_js', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" , array(), null, true );
// }
// add_action('wp_enqueue_scripts', 'mvc_bootstrap_enqueue_scripts');


function mvc_bootstrap_enqueue_scripts()
{
    wp_enqueue_script('mvc_jQuery', "https://code.jquery.com/jquery-3.6.0.min.js" );
    
}
add_action('wp_enqueue_scripts', 'mvc_bootstrap_enqueue_scripts');



/** CSS & Javascript
 * We should also enqueue WeMake global style here. 
 * Any local ones should be enqueued in the view that needs them.
**/

/**
 * There is an example of how to create global variables in:
 * lib/mvc_wp_helpers.php
**/


/* Import the Models */
require_once 'models/user.model.php';

/* Load any modules from the lib directory */
require_once 'lib/database_helpers.php';
require_once 'lib/mvc_wp_helpers.php';

/* Import Controllers. */
require_once 'controllers/login.controller.php';
require_once 'controllers/user.controller.php';


