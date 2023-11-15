<?php
    $html_listCategory='';
    foreach ($listCategory as $category) {
        extract($category);
        $html_listCategory.='<tr>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>2011-04-25</td>
                                <td>2011-04-25</td>
                                <td>
                                    <a href="#" class="btn btn-warning"><i
                                            class="fa-solid fa-pen-to-square"></i> Sửa</a>
                                    <a href="index.php?pg=delete&id='.$id.'" class="btn btn-danger"><i
                                            class="fa-solid fa-trash"></i> Xóa</a>
                                </td>
                            </tr>';
    }

?>


<div class="main-content">
                <h3 class="title-page">
                    Danh mục
                </h3>
                <div class="d-flex justify-content-end">
                    <a href="index.php?pg=addCategory" class="btn btn-primary mb-2">Thêm danh mục</a>
                </div>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Creat date</th>
                            <th>Update date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?=$html_listCategory?>
                        <!-- <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>2011-04-25</td>
                            <td>
                                <a href="#" class="btn btn-warning"><i
                                        class="fa-solid fa-pen-to-square"></i> Sửa</a>
                                <a href="#" class="btn btn-danger"><i
                                        class="fa-solid fa-trash"></i> Xóa</a>
                            </td>
                        </tr> -->
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Creat date</th>
                            <th>Update date</th>
                        </tr>
                    </tfoot>
                </table>
            </div>