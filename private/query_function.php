<?php

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
    $sql .= "(model_name, price, color, display, chip, memory, camera, front_camera, qty, image) ";
    $sql .= "VALUES (";
    $sql .= "'" . $sub['model'] . "',";
    $sql .= "'" . $sub['price'] . "',";
    $sql .= "'" . $sub['color'] . "',";
    $sql .= "'" . $sub['display'] . "',";
    $sql .= "'" . $sub['chip'] . "',";
    $sql .= "'" . $sub['memory'] . "',";
    $sql .= "'" . $sub['camera'] . "',";
    $sql .= "'" . $sub['fcamera'] . "',";
    $sql .= "'" . $sub['qty'] . "',";
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
    $sql .= "'" . $sub['fcamera'] . "', qty=";
    $sql .= "'" . $sub['qty'] . "', image=";
    $sql .= "'" . $newImageName . "'";
    $sql .= " WHERE pro_id='" .$sub['pro_id'] . "'";
    $result = mysqli_query($db, $sql);
    return $result;
}

function insert_delivery_details($sub) {
    global $db;

    $sql = "INSERT INTO customer ";
    $sql .= "(user_id, uname, phone, pincode, locality, address, city, state, landmark, alt_phn, delivery_point) ";
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

function insert_order_details($cus_id, $pro_id, $date, $quantity, $price){
    global $db;

    $sql = "INSERT INTO orders ";
    $sql .= "(pro_id, cus_id, date_of_order, quantity, price) ";
    $sql .= "VALUES (";
    $sql .= "'" . $pro_id . "',";
    $sql .= "'" . $cus_id . "',";
    $sql .= "'" . $date . "',";
    $sql .= "'" . $quantity . "',";
    $sql .= "'" . $price . "'";
    $sql .= ")";
    $result = mysqli_query($db, $sql);
    return $result;
}

function update_quantity($pro_id, $quantity){
    global $db;

    $sql = "UPDATE product SET ";
    $sql .= "qty = $quantity - 'qty' ";
    $sql .= "WHERE pro_id = '$pro_id'";
    $result = mysqli_query($db, $sql);
    return $result;
}

function view_orders(){
    global $db;

    $sql = "SELECT o.*, p.model_name, c.uname, c.address, c.city, c.locality, c.landmark, c.pincode, c.phone, c.state, c.delivery_point ";
    $sql .= "FROM orders o JOIN product p ON o.pro_id = p.pro_id ";
    $sql .= "JOIN customer c ON c.cus_id = o.cus_id ";
    $sql .= "WHERE o.status = 0";
    $result = mysqli_query($db, $sql);
    return $result;

}

function view_placed_orders(){
    global $db;

    $sql = "SELECT o.*, p.model_name, c.uname, c.address, c.city, c.locality, c.landmark, c.pincode, c.phone, c.state, c.delivery_point ";
    $sql .= "FROM orders o JOIN product p ON o.pro_id = p.pro_id ";
    $sql .= "JOIN customer c ON c.cus_id = o.cus_id ";
    $sql .= "WHERE o.status = 1";
    $result = mysqli_query($db, $sql);
    return $result;

}

function view_products(){
    global $db;

    $sql = "SELECT * FROM ";
    $sql .= "product WHERE status = 0";
    $result = mysqli_query($db, $sql);
    return $result;
}


?>
