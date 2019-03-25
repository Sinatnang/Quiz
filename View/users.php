<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<div class="container mt-4">
    <div class="card">
    <a href="index.php?action=register"><i class="glyphicon glyphicon-plus-sign"></i></a> &nbsp;
        <div class="card-header text-center">Manage User</div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    foreach (get_user() as $value){
                
                ?>
                <tr>
                    <td><?php echo $value ['id'];?></td>
                    <td><?php echo $value ['username'];?></td>
                    <td><?php echo $value ['name'];?></td>
                    <td><?php echo $value ['password'];?></td>
                    <td>
                        <a href="index.php?action=update&id=<?php echo $rows['id'];?>"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;
                        <a href="index.php?action=deleteUser&id=<?php echo $rows['id'];?>"><i class="glyphicon glyphicon-trash" style="color:red;"></i></a>
                    </td>
                </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>