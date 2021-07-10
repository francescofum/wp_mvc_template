
<?php



function user_data() {

    /* 0. Handle any POST requests*/

    /* 1. Grab stuff from the model */

    /* 2. Modify the data in any way necessary*/

    /* 3. Specify any parameters that the view might need */
    // These could be global variables e.g:
    global $vendor_id;
    echo $vendor_id;
    // or ones that come from logic in the controller: 
    $var_determined_by_logic = '5';

    /* 4. Render the view*/
    require_once dirname(__DIR__) . '/views/user_view/user_view_main.view.php';

}
add_shortcode('user_data','user_data');