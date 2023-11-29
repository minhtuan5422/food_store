<?php 
    $db = new DB();
    /* Lấy ra ngưỡng ngày bằng cách lấy ngày hiện tại trừ đi 30 */
    $thresholdDate = date('Y-m-d', strtotime('-30 days'));
    $compareDate = "added_date < '$thresholdDate'";

    //Truy vấn lấy ra thông tin sản phẩm cần cập nhật lại số lượng
    $sql = "SELECT id_product, quantity FROM carts WHERE $compareDate";
    $getProductInfo = $db->select($sql);

    //Truy vấn cập nhật lại số lượng sản phẩm khi sản phẩm trong kho quá 30 ngày
    $updateData = "UPDATE product
    SET quantity = quantity + '$getProductInfo[0]['quantity']'
    WHERE id_product = '$getProductInfo[0]['id']";
    
    /* Cập nhật quantity bảng sản phẩm */
    $db->query($updateData);
    /* Xóa sản phẩm quá 30 ngày trong bảng giỏ hàng */
    $db->delete("carts", "$compareDate");
?>