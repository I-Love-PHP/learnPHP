<?php require 'include/header.php'; ?>

<div class="container">
<div id="main">

<h1>Login </h1>

<div class="login-column">
<form action="include/denglu.php" method="post" role="form">
    <div class="form-group">
        <label for="name" >Your Name</label>
        <input type="text" name="name" class="form-control" id="name" />
    </div>
    <div class="form-group">
        <label for="password">Your Password</label>
        <input type="password" name="password" class="form-control"  id="name" />
    </div>
    <button class="btn btn-primary btn-success form-control">Login Now</button>
</form>
Don't have account? <a href="register.php">Register here!</a>
</div>

</div>
</div>
<?php require_once 'include/footer.php'; '';?>