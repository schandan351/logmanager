<?php require 'partials/header.php';?>
<div class="container">
    <form method="POST" action="/edit">
        <div class="form-group">
            <label for="date">Date</label>
            <input type="text" class="form-control" name="date" value=$_POST['date']>
        </div>
        <div class="form-group">
            <label for="log">log</label>
            <textarea type="text" class="form-control" name="logs"></textarea>
        </div>
        <button class="btn btn-primary">Add Log</button>
    </form>

</div>
<?php require 'partials/footer.php';?>