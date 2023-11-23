<?php
    $html_listUser='';
    foreach ($listUser as $user) {
        extract($user);
        $html_listUser.='<tr>
                            <td>'.$id.'</td>
                            <td>'.$fullname.'</td>
                            <td>'.$email.'</td>
                            <td>'.$phone_number.'</td>
                            <td>'.$address.'</td>
                            <td>'.$password.'</td>
                            <td>'.$created_at.'</td>
                            <td>'.$updated_at.'</td>
                            <td>
                                <a href="index.php?pg=deleteUser&id='.$id.'" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
                            </td>
                        </tr>';
    }


?>


<div class="main-content">
                <h3 class="title-page">
                    User
                </h3>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone number</th>
                            <th>Address</th>
                            <th>Password</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?=$html_listUser?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone number</th>
                            <th>Address</th>
                            <th>Password</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                        </tr>
                    </tfoot>
                </table>
            </div>