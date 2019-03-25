<a href="index.php?action=add"> <i class="glyphicon glyphicon-plus-sign" style="font-size:20px;"></i></a>&nbsp;
<a href="index.php?action=delete"> <i class="glyphicon glyphicon-trash" style="font-size:20px;"></i></a>&nbsp;
<a href="index.php?action=update"> <i class="glyphicon glyphicon-pencil" style="font-size:20px;"></i></a>
<br><br>
<div id="users">
<div class="col-md-12">
<!-- <div class="pull-left">
<input class="search" placeholder="Search" />
</div> -->

<div class="pull-right">
<div>
<div>
    <a href="index.php?action=users_get" class="float-right">Manage User</a>
</div>
</div>
<a href="index.php?action=add"><i class="glyphicon glyphicon-plus-sign" style="font-size:20px;"></i></a> &nbsp;
</div>
</div>
<form action="employee.php" method="POST">
<table class="table-bordered col-md-12 table">
<thead class="bg-info">
<th class="sort text-center">ID</th>
<th class="sort text-center" data-sort="fname">Student Name</th>
<th class="sort text-center" data-sort="age">Age</th>
<th class="sort text-center" data-sort="salary">Salary</th>
<th class="sort text-center">Action</th>
</thead>
<!-- IMPORTANT, class="list" have to be at tbody -->
<tbody class="list">
<?php
// if($data['employee_data']!==""){
// $i=1;
foreach ($data['employee_data'] as $rows){

?>
<tr>
        <td><?php echo $rows ['id'];?></td>
        <td><?php echo $rows['firstname'].$rows['lastname'];?></td>
        <td><?php echo $rows['age'];?></td>
        <td><?php echo $rows['salary'];?></td>
        <td>
            <a href="index.php?action=delail&id=<?php echo $rows['id'];?>"><i class="glyphicon glyphicon-eye-open" style="color:green;"></i></a>&nbsp;
            <a href="index.php?action=update&id=<?php echo $rows['id'];?>"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;
            <a href="index.php?action=delete&id=<?php echo $rows['id'];?>"><i class="glyphicon glyphicon-trash" style="color:red;"></i></a>
        </td>
    </tr> 
<?php
// $i++;
}
?>
    
</tbody>
</table>
</form>
</div>

<script>
var options = {
valueNames: ['id', 'fname', 'age', 'salary']
};

var userList = new List('users', options);
</script>