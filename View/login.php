<form action="" method="post" class="form-group">
    <div class="row mx-5">

        <div class="col-md-12 form-group">
            <label>Name</label>
            <input class="form-control" type="text" placeholder="John" name="username">
        </div>

        
        <div class="col-md-6 form-group">
            <label>Role</label>
            <select class="custom-select" name="user_role">
                <option></option>
                <option value="0">User</option>
                <option value="1">Admin</option>

            </select>
        </div>
        <div class="col-md-6 form-group">
            <label>Password</label>
            <input class="form-control" type="password" placeholder="New York" name="user_password">
        </div>
        <div class="col-md-12 form-group">
        <input class="form-control bg-dark text-white" type="submit" value="Login" name="login" >
        </div>


    </div>
</form>