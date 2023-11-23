<?php
    $html_listCategory='';
    foreach ($listCategory as $category) {
        extract($category);
        $html_listCategory.='<tr>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>'.$created_at.'</td>
                                <td>'.$updated_at.'</td>
                                <td>
                                    <a href="index.php?pg=editCate&id='.$id.'" class="btn btn-warning"><i
                                            class="fa-solid fa-pen-to-square"></i> Sửa</a>
                                    <a href="index.php?pg=deleteCate&id='.$id.'" class="btn btn-danger"><i
                                            class="fa-solid fa-trash"></i> Xóa</a>
                                </td>
                            </tr>';
    }

?>
<div class="main-content">
                <h3 class="title-page">
                    Thêm danh mục
                </h3>
                
                <form class="addPro" action="index.php?pg=addCate" method="POST" >
                    
                    <div class="form-group">
                        <label for="name">Tên danh mục:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên danh mục" required >
                    </div>

                    <div class="form-group">
                        <button type="submit" name="addCate" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>

<div class="main-content">
                <h3 class="title-page">
                    Danh mục
                </h3>
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