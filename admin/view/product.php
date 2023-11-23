<?php
    $html_listProduct='';
    foreach ($listProduct as $product) {
        extract($product);
        $html_listProduct.='<tr>
                                <th>'.$id.'</th>
                                <th>'.$category_id.'</th>
                                <th>'.$name.'</th>
                                <th>'.$price.'</th>
                                <th>'.$price_sale.'</th>
                                <th>'.$image.'</th>
                                <th>'.$description.'</th>
                                <th>'.$created_at.'</th>
                                <th>'.$updated_at.'</th>
                                <td>
                                    <a href="#" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                                    <a href="index.php?pg=deleteProduct&id='.$id.'" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
                                </td>
                            </tr>';
    }


?>


<div class="main-content">
                <h3 class="title-page">
                    Sản phẩm
                </h3>
                <div class="d-flex justify-content-end">
                    <a href="index.php?pg=addProduct" class="btn btn-primary mb-2">Thêm sản phẩm</a>
                </div>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Price sale</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?=$html_listProduct?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Price sale</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                        </tr>
                    </tfoot>
                </table>
            </div>