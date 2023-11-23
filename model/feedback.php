<?php
// // require_once 'pdo.php';

// function feedback_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl){
//     $sql = "INSERT INTO feedback(ma_kh, ma_hh, noi_dung, ngay_bl) VALUES (?,?,?,?)";
//     pdo_execute($sql, $ma_kh, $ma_hh, $noi_dung, $ngay_bl);
// }

// function feedback_update($ma_bl, $ma_kh, $ma_hh, $noi_dung, $ngay_bl){
//     $sql = "UPDATE feedback SET ma_kh=?,ma_hh=?,noi_dung=?,ngay_bl=? WHERE ma_bl=?";
//     pdo_execute($sql, $ma_kh, $ma_hh, $noi_dung, $ngay_bl, $ma_bl);
// }

function feedback_delete($ma_bl){
    $sql = "DELETE FROM feedback WHERE id=?";
    if(is_array($ma_bl)){
        foreach ($ma_bl as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $ma_bl);
    }
}

function feedback_select_all(){
    $sql = "SELECT * FROM feedback bl ORDER BY created_at DESC";
    return pdo_query($sql);
}

// function feedback_select_by_id($ma_bl){
//     $sql = "SELECT * FROM feedback WHERE ma_bl=?";
//     return pdo_query_one($sql, $ma_bl);
// }

// function feedback_exist($ma_bl){
//     $sql = "SELECT count(*) FROM feedback WHERE ma_bl=?";
//     return pdo_query_value($sql, $ma_bl) > 0;
// }
// //-------------------------------//
// function feedback_select_by_hang_hoa($ma_hh){
//     $sql = "SELECT b.*, h.ten_hh FROM feedback b JOIN hang_hoa h ON h.ma_hh=b.ma_hh WHERE b.ma_hh=? ORDER BY ngay_bl DESC";
//     return pdo_query($sql, $ma_hh);
// }