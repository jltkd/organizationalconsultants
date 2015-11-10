<?php

// =============================================================================
// FUNCTIONS.PHP
// -----------------------------------------------------------------------------
// Overwrite or add your own custom functions to X in this file.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Enqueue Parent Stylesheet
//   02. Additional Functions
// =============================================================================

// Enqueue Parent Stylesheet
// =============================================================================

add_filter( 'x_enqueue_parent_stylesheet', '__return_true' );



// Additional Functions
// =============================================================================

function custom_login_logo() {
    echo '<style type="text/css">
        h1 a { background-image:url(http://69.175.16.130/~organiz/wp-content/uploads/2015/10/logo1.png) !important; width:320px!important; height:88px!important; background-size: 320px 88px !important;}
        body { background: #fff; }
        p a { color: #76c4c8!important; }
    </style>';
}

add_action('login_head', 'custom_login_logo');