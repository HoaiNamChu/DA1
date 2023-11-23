<?php

if(is_array($category)){
    extract($category);
}

?>




<div class="main-content">
                <h3 class="title-page">
                    Sửa danh mục
                </h3>
                
                <form class="addPro" action="index.php?pg=updateCate" method="POST" >
                    <div class="form-group">
                        <label for="name">ID danh mục:</label>
                        <label for="name"><?=$id?></label>
                    </div>
                    <div class="form-group">
                        <label for="name">Tên danh mục:</label>
                        <input type="text" class="form-control" name="name" id="name" value="<?=$name?>">
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="id" value="<?=$id?>" >
                        <button type="submit" name="updateCate" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>