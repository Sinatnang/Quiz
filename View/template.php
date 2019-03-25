<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP MySQL MVC</title>
    <script src='view/jquery-1.9.1.js'></script>
    <script src='view/list.js'></script>
    <script src='view/bootstrap-3.3.7/js/bootstrap.min.js'></script>
    <link href='view/bootstrap-3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css' media='all'>
    <link href='view/employee/style.css' rel='stylesheet' type='text/css' media='all'>
</head>
<body>
    <body data-gr-c-s-loaded='true'>
        <div class="container">
            <legend class="header">
                <h3 class="pull">Employee Manager</h3>
            </legend>
            <form action="index.php?action=login" >
                <div class="form-group">
                    <button class="btn btn-primary btn-sm" type="submit" name="but_logout">Logout</button>
                </div>
        </form>
            <?php
            
            include "View/".$data['page'].".php";
            // include "View/employee/view.php";
            ?>
        </div>
    </body>
</body>
</html>