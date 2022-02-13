<?php

function find_product_by_name($name) {
    global $db;

    $sql = "SELECT * FROM product ";
    $sql .= "WHERE model_name LIKE ";
    $sql .= "'". $name . "'";
    $result = mysqli_query($db, $sql);
    return $result;
}

function find_product_by_id($id) {
    global $db;

    $sql = "SELECT * FROM product ";
    $sql .= "WHERE pro_id=";
    $sql .= "'" . $id . "'";
    $result = mysqli_query($db, $sql);
    return $result;
}

function find_user_info($id) {
    global $db;

    $sql = "SELECT * FROM register ";
    $sql .= "WHERE user_id=";
    $sql .= "'" . $id . "'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result);
    return $row;
}

function insert_product_values($sub, $newImageName) {
    global $db;
    
    $sql = "INSERT INTO product ";
    $sql .= "(model_name, price, color, display, chip, memory, camera, front_camera, image) ";
    $sql .= "VALUES (";
    $sql .= "'" . $sub['model'] . "',";
    $sql .= "'" . $sub['price'] . "',";
    $sql .= "'" . $sub['color'] . "',";
    $sql .= "'" . $sub['display'] . "',";
    $sql .= "'" . $sub['chip'] . "',";
    $sql .= "'" . $sub['memory'] . "',";
    $sql .= "'" . $sub['camera'] . "',";
    $sql .= "'" . $sub['fcamera'] . "',";
    $sql .= "'" . $newImageName . "'";
    $sql .= ")";
    $result = mysqli_query($db, $sql);
    return $result;
}
?>
