<?php

function mvc_init()
{
    global $vendor_id; 
    $vendor_id = 1;
}
add_action('init','mvc_init');