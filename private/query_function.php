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

function update_product_values($sub, $newImageName) {
    global $db;

    $sql = "UPDATE product set model_name=";
    $sql .= "'" . $sub['model'] . "', price=";
    $sql .= "'" . $sub['price'] . "', color=";
    $sql .= "'" . $sub['color'] . "', display=";
    $sql .= "'" . $sub['display'] . "', chip=";
    $sql .= "'" . $sub['chip'] . "', memory=";
    $sql .= "'" . $sub['memory'] . "', camera=";
    $sql .= "'" . $sub['camera'] . "', front_camera=";
    $sql .= "'" . $sub['fcamera'] . "', image=";
    $sql .= "'" . $newImageName . "'";
    $sql .= " WHERE pro_id='" .$sub['pro_id'] . "'";
    $result = mysqli_query($db, $sql);
    return $result;
}

function insert_delivery_details($sub) {
    global $db;

    $sql = "INSERT INTO delivery_details ";
    $sql .= "(user_id, name, phn_num, pincode, locality, address, city, state, landmark, alt_phn, delivery_point) ";
    $sql .= "VALUES (";
    $sql .= "'" . $sub['user_id'] . "',";
    $sql .= "'" . $sub['name'] . "',";
    $sql .= "'" . $sub['phn'] . "',";
    $sql .= "'" . $sub['pin'] . "',";
    $sql .= "'" . $sub['locality'] . "',";
    $sql .= "'" . $sub['address'] . "',";
    $sql .= "'" . $sub['place'] . "',";
    $sql .= "'" . $sub['state'] . "',";
    $sql .= "'" . $sub['landmark'] . "',";
    $sql .= "'" . $sub['alt_phn'] . "',";
    $sql .= "'" . $sub['type'] . "'";
    $sql .= ")";
    $result = mysqli_query($db, $sql);
    return $result;
}
?>
