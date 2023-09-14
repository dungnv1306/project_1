 <form action="index.php?act=register" method="post" class="form-group">
    <div class="row mx-5">

        <div class="col-md-12 form-group">
            <label>Name</label>
            <input class="form-control" type="text" placeholder="John" name="username">
        </div>

        <div class="col-md-6 form-group">
            <label>E-mail</label>
            <input class="form-control" type="text" placeholder="example@email.com" name="user_mail">
        </div>
        <div class="col-md-6 form-group">
            <label>Mobile No</label>
            <input class="form-control" type="text" placeholder="+123 456 789" name="user_phone">
        </div>
        <div class="col-md-12 form-group">
            <label>Address </label>
            <input class="form-control" type="text" placeholder="123 Street" name="user_address">
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
        <input class="form-control bg-dark text-white" type="submit" value="Register" name="register" >
        </div>


    </div>
</form>