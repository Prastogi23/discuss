<div class="container">
    <h2 class="heading ">SignUp</h2>
    <form method="post" action="./server/requests.php">
        <div class="col-4 offset-sm-4 margin-bottom-15">
            <label for="username" class="form-label">Username </label>
            <input type="text"name="username" class="form-control" id="username" >
        </div>
        <div class="col-4 offset-sm-4 margin-bottom-15">
            <label for="email" class="form-label">Email </label>
            <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="col-4 offset-sm-4 margin-bottom-15">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password1">
       </div>
       <div class="col-4 offset-sm-4 margin-bottom-15">
            <label for="address" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" id="address" >
        </div>
        <div class="col-4 offset-sm-4 margin-bottom-15">
            <button type="submit" name="Signup" class="btn btn-primary">SignUp</button>
            <span class="offset-sm-5">Already account : <a href="?Login=true" >login</a></span>   
        </div>    
    </form>
</div>