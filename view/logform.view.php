<?php require 'partials/header.php';?>
<div class="container mt-3">
<h1>Add your logs</h1>
    <form method="POST" action="/addlogs">
        <div class="form-group">
            <input type="date" id="start" name="date"
       value="<?=strftime('%F');?>"
       min="2015-01-01" max="2019-12-31" class="form-control">
        </div>
        <div class="form-group">
            <label for="log">log</label>
            <textarea type="text" class="form-control" name="logs" required></textarea>
        </div>
        <button class="btn btn-primary">Add</button>
    </form>
</div>
<?php require 'partials/footer.php';?>