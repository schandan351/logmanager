<?php require('view/partials/header.php');?>
<div class="container mt-3">
    <form method="POST" action="/login">
        <h1 class="text-primary">Login</h1>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary" name="login">Login</button>
    </form>
</div>

<?php require('view/partials/footer.php'); ?>
