<?php
    $html_listFeedback='';
    foreach($listFeedback as $feedback){
        extract($feedback);
        $html_listFeedback.='<tr>
                                <td>'.$id.'</td>
                                <td>'.$comment.'</td>
                                <td>'.$created_at.'</td>
                                <td>'.$updated_at.'</td>
                                <td>'.$user_id.'</td>
                                <td>'.$product_id.'</td>
                                <td>
                                    <a href="index.php?pg=deleteFeedback&id='.$id.'" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
                                </td>
                            </tr>';
    }



?>


<div class="main-content">
                <h3 class="title-page">
                    Bình luận
                </h3>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nội dung</th>
                            <th>ID User</th>
                            <th>ID Product</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?=$html_listFeedback?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Nội dung</th>
                            <th>ID User</th>
                            <th>ID Product</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                        </tr>
                    </tfoot>
                </table>
            </div>