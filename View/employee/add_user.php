<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<div class="container mt-4">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">Add User</div>
                <div class="card-body">
                    <form action="index.php?action=user" method="POST"> 
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text"name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primery btn-sm" type="submit" name="register">Register</button>
                        </div>
                        <!-- <div class="form-group">
                            <a href="index.php?action=login" class="btn btn-sm float-right">Back</a>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>