<?php
//database connection
require_once 'database/db_connect.php';

//header, sidebar, footer functions
function get_header() {
    require_once 'common/header.php';
}
function get_sidebar() {
    require_once 'common/sidebar.php';
}
function get_footer() {
    require_once 'common/footer.php';
}
