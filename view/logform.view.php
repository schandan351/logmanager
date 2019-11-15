<?php require 'partials/header.php';?>
<div class="container mt-3" style="max-width:40%;margin:0 auto;">
<h1>Add your logs</h1>
    <form method="POST" action="/addlogs">
        <div class="form-group">
            <input type="date" id="start" name="date"
       value="<?=strftime('%F');?>"
       min="2015-01-01" max="2020-12-31" class="form-control">
        </div>
        <div class="form-group">
            <label for="log">log</label>
            <textarea type="text" class="form-control" name="logs" rows="15" cols="100" required></textarea>
        </div>
        <button class="btn btn-primary btn-lg">Add</button>
    </form>
</div>
<?php require 'partials/footer.php';?>