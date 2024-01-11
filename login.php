<?php
require_once("functions.php");
require_once("data.php");
session_start();
$title = "Login";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

        if (auth_user($username, $password)) {
            $_SESSION['username'] = $username;
            redirect("index.php");
            die();
        }
        $status = "Check data";
    }
}
?>



<?php include_once("./templates/header.php") ?>

<h1>Login form!</h1>
<form method="POST" action="login.php">
    <span>
        <label>Username:</label>
        <input type="text" name="username" id="username">
    </span>
    <span>
        <label>Password:</label>
        <input type="password" name="password" id="password">
    </span>
    <button type="submit">Submit</button>
    <h1><?= $status ?></h1>
</form>

<?php include_once("./templates/footer.php") ?>