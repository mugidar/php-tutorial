<?php
function auth_user($username, $password)
{
    return $username == CONFIG["users"] && $password == PASSWORD;
}
function is_user_authed()
{
    return isset($_SESSION['username']);
}
function check_is_authed()
{
    if (!is_user_authed()) {
        redirect("login.php");
    }
}
function redirect($url)
{
    header("Location: http://localhost/practice/$url");
}

function view($name, $model){
    
    require("views/layout.view.php");
}

function get_data() {
    $fname = CONFIG['data_file']; 

    $json = "";

    if(!file_exists($fname)) {
        file_put_contents($fname, "");
    } else {
        $json = file_get_contents($fname);
    }
    return $json;
}
?>