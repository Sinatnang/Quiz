<?php
$data= array();
flexible_function($data);
function flexible_function(&$data){
    $function ='user';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
        $function = $action;
    }
    $function($data);
}

function users_get(&$data){
    $data['page']=get_user();
    $data['page']="users";
}

function user(&$data){
    $data['page']= user_login();
    $data['page']="login";
}
function logout(&$data){
    log_out();
    $data['page']="login";
}
function register(&$data){
    $data['page']=register_form();
    $data['page']="register";
    // header('Location: employee/login');
}

function view(&$data){
    $data['employee_data']= m_get_data();
    $data['page']="employee/view";
}
function add(&$data){
    $data['page']="employee/add";
}
function dataAdd(){
     $data= m_add_data();
     
     header('location:index.php?action=view');
}
function update(&$data){
  $data['employee_data'] =  employee_detail();
    // $data['page']="employee/view";
    // $data['page']=;
    $data['page']="employee/update";
}
function update_data(&$data){
    $id = $_GET['id'];
    $data = m_update_employee($_POST);
    if($data){
        $action = 'view';
    }else{
        $action = 'update&id';
    }
    header('location:index.php?action=view');
}
function delete(&$data){
    $data['page']="employee/delete";
}
function deleteData (){
    $data = m_delete_data();
    if ($data){
        $action="view";
    }else{
        $action="delete";
    }
    header('location:index.php?action=view');
}
function detail(&$data){
    $data['page']="employee/detail";
}

function deleteuser(){
    $data = user_delete();
    $data['page']="employee/deleteUser";
}

?>