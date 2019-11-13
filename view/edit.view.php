<?php require 'partials/header.php';?>
<div class="container">
    <form method="POST" action="/update/?id=<?=$_GET['id'];?>" >
        <?php foreach($select_data as $selected_data):?>
     
            <div class="form-group">
                <label for="date">Date</label>
                <input type="text" class="form-control" name="date" value=<?=$selected_data->date;?>>
            </div>
            <div class="form-group">
                <label for="log">log</label>
                <input type="text" class="form-control" name="logs" value=<?=$selected_data->log;?>></input>
            </div>
        <?php endforeach;?>
        <button class="btn btn-primary text-white">save Log</button>
    </form>

</div>
<?php require 'partials/footer.php';?>