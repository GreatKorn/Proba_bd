<?php

/**
 * @var $mysqli
 */

$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$last_name = $_REQUEST['last_name'];
$age = $_REQUEST['age'];

if(!empty($name) && !empty($last_name) && !empty($age))
{
    require_once 'db.php';

    $name = mysqli_real_escape_string($mysqli, $name);
    $last_name = mysqli_real_escape_string($mysqli, $last_name);
    $age = mysqli_real_escape_string($mysqli, $age);
    $res = $mysqli->query("update users set name = '$name', last_name = '$last_name', age = $age where id = $id");
    $mysqli->close();
    header("Location: /users.php");
    die();

}
else
{
    header("Location: /update.php?id=$id");
}