<?php
// require_once 'pdo.php';

/**
 * Thêm loại mới
 * @param String $ten_category là tên loại
 * @throws PDOException lỗi thêm mới
 */
function category_insert($ten_category){
    $sql = "INSERT INTO category(name) VALUES(?)";
    pdo_execute($sql, $ten_category);
}
/**
 * Cập nhật tên loại
 * @param int $ma_category là mã loại cần cập nhật
 * @param String $ten_category là tên loại mới
 * @throws PDOException lỗi cập nhật
 */
function category_update($ma_category, $ten_category){
    $sql = "UPDATE category SET name=? WHERE id=?";
    pdo_execute($sql, $ten_category, $ma_category);
}
/**
 * Xóa một hoặc nhiều loại
 * @param mix $ma_category là mã loại hoặc mảng mã loại
 * @throws PDOException lỗi xóa
 */
function category_delete($ma_category){
    $sql = "DELETE FROM category WHERE id=?";
    if(is_array($ma_category)){
        foreach ($ma_category as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $ma_category);
    }
}
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function category_select_all(){
    $sql = "SELECT * FROM category";
    return pdo_query($sql);
}
/**
 * Truy vấn một loại theo mã
 * @param int $ma_category là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
function category_select_by_id($ma_category){
    $sql = "SELECT * FROM category WHERE id=?";
    return pdo_query_one($sql, $ma_category);
}
// /**
//  * Kiểm tra sự tồn tại của một loại
//  * @param int $ma_category là mã loại cần kiểm tra
//  * @return boolean có tồn tại hay không
//  * @throws PDOException lỗi truy vấn
//  */
// function category_exist($ma_category){
//     $sql = "SELECT count(*) FROM category WHERE ma_category=?";
//     return pdo_query_value($sql, $ma_category) > 0;
// }