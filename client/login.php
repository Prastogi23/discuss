<div class="container">
    <h2 class="heading">Login</h2>
    <form action="./server/requests.php" method="post">
        <div class="col-4 offset-sm-4 margin-bottom-15">
            <label for="email" class="form-label">Email </label>
            <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="col-4 offset-sm-4 margin-bottom-15">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password1">
       </div>
        <div class="col-4 offset-sm-4 margin-bottom-15">
            <button type="submit" name="Login" class="btn btn-primary">Login</button>
            <span class="offset-sm-5">create account : <a href="?Signup=true" >Signup</a></span>   
        </div>    
    </form>
</div>