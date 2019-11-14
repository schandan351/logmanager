
<?php require('view/partials/header.php');?>

<div class="container mt-3">
    <form method="POST" action="/register">
    <h2 class="text-primary">REGISTER</h2>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputFirstname">Firstname</label>
        <input type="text" class="form-control" id="exampleInputFirstname" placeholder="firstname" name="firstname" required>
    </div>
    <div class="form-group">
        <label for="exampleInputLastname">Lastname</label>
        <input type="text" class="form-control" id="exampleInputLastname" placeholder="lastname" name="lastname" >
    </div>
    
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
    </div>
    
    <button type="submit" class="btn btn-primary" name="register">Register</button>
    </form>
</div>

<?php require('view/partials/footer.php'); ?>
