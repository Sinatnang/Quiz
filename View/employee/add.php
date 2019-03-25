<a href="index.php?action=add"> <i class="glyphicon glyphicon-plus-sign" style="font-size:20px;"></i></a>&nbsp;
<a href="index.php?action=delete"> <i class="glyphicon glyphicon-trash" style="font-size:20px;"></i></a>&nbsp;
<a href="index.php?action=update"> <i class="glyphicon glyphicon-pencil" style="font-size:20px;"></i></a>
<br><br>
<div class="container mt-4">
    <div class="card">
        <div class="card-header"><button><a href="index.php?action=view">Back</a></button></div><br>
        <div class="card-body">
            <form action="#" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" name="firstname" placeholder="Student Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="lastname" placeholder="Student Name">
                </div>
                <div class="form-group">
                    <input type="number" name="age"class="form-control" placeholder="Age">
                </div>
                <div class="form-group">
                    <input type="number" name="salary" class="form-control" placeholder="Salary">
                </div>
                <div class="form-group">
                    <button class="btn-primary" type="submit" name="save">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php if(isset($_POST['save'])){
    dataAdd();
} ?>
