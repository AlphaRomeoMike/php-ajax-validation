<?php

if (isset($_POST['checkUser'])) {
    // Connect to the database
    $mysqli = new mysqli('localhost', 'root', '', 'login');

    $username = $mysqli->real_escape_string($_POST['checkUser']);

    // Query the data
    $resultSet = $mysqli->query("SELECT * FROM tbl_users WHERE usr_name = '$username' LIMIT 1");
    // var_dump($resultSet);
    // die();
    if($resultSet->num_rows == 0) {
        echo '<p class="text-green">'."$username".' is avaiable</p>';
    } else {
        echo '<p class="text-red">'."$username".' is unavaiable</p>';
    }
}
?>