<?php

function amir_x_d7_preprocess_html(&$variables) {
    // Add conditional stylesheets for IE
    drupal_add_css(path_to_theme() . '/css/ie.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lt IE 9', '!IE' => FALSE), 'every_page' => TRUE));

    // Add HTML5 Shiv script

    // I don't detect browser coz it may be needed on older Safari or old
    // Firefox browsers, and I don't feel like checking their user agents right
    // now

//    $user_agent = $_SERVER['HTTP_USER_AGENT'];
//    if (preg_match('!MSIE [1-8]!', $user_agent)) {
    drupal_add_js(path_to_theme() . '/js/html5shiv-printshiv.js', array('scope' => 'footer', 'group' => JS_THEME));
//    }
}
