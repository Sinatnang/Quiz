<?php
//function get data and return an array()
function m_get_data(){
    $query = "SELECT * FROM employee";
    include_once "connection.php";
    $result = mysqli_query($connect,$query);
    $rows = [];
    if($result && mysqli_num_rows($result)>0){
        while ($get_result_to_array = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $rows[] = $get_result_to_array;
        }
    }
 return $rows;
    // var_dump( $rows);
// die();  
   
}
function employee_detail(){
    include "connection.php";
    $id=$_GET['id'];

    $query = "SELECT * FROM employee WHERE id = '$id'";
    $result = mysqli_query($connect,$query);
    return $result;

}

function m_add_data(){
    include_once "connection.php";
    if(isset($_POST['save'])){
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $age= $_POST['age'];
    $salary= $_POST['salary'];
    $query = "INSERT INTO employee (firstname,lastname,age,salary) VALUES('$firstname','$lastname','$age','$salary')";
    $result = mysqli_query($connect,$query);
    return $result;
    // var_dump();die();
}

}

function m_update_employee($data){
    include "connection.php";
    $id= $_GET['id'];
    
    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $position  = $_POST['title'];
    $age       = $_POST['age'];
    $experience= $_POST['yearofservice'];
    $salary    = $_POST['salary'];
    $perks     = $_POST['perks'];
    $email     = $_POST['email'];
    $department= $_POST['departmentid'];
    $query = "UPDATE employee SET firstname='$firstname',lastname='$lastname',title='$position',age= $age, yearofservice= $experience,
    salary=$salary,perks=$perks,email='$email',departmentid='$department' WHERE id = '$id' ";
    $result = mysqli_query($connect,$query);
     return $result;
    // var_dump($result);die();

}

function m_delete_data(){
    include 'connection.php';
    $id=$_GET['id'];
    $query = "DELETE FROM employee WHERE id = '$id'";
    $result = mysqli_query($connect,$query);
//  var_dump($result);die();
    return $result;
}
function user_login(){
    include 'connection.php';
if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($connect,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($connect,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from user where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($connect,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location:login');
        }else{
            echo "Invalid username and password";
        }

    }

}
}

function log_out(){
    include "connection.php";
    if(isset($_POST['but_logout'])){
        session_destroy();
        header('Location:index.php');
    }
}

function register_form(){
    include "connection.php";
    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        // var_dump($name);
        // die();
        $query = "INSERT INTO user (username,name,password) VALUES('$username','$name','$password')";
        $result = mysqli_query($connect,$query);
        return $result;
        // var_dump($result);die();
    }

}

function get_user(){
    include "connection.php";
        $query = "SELECT * FROM users";
        $result = mysqli_query($connect,$query);
        return $result;
        // var_dump($result);die();
   
}
function user_delete(){
    include 'connection.php';
    $id=$_GET['id'];
    $query = "DELETE FROM users WHERE id = '$id'";
    $result = mysqli_query($connect,$query);
//  var_dump($result);die();
    return $result;
}


?>