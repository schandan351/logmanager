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
                <textarea name="logs" class="form-control" id="" cols="100" rows="15"><?=$selected_data->log;?></textarea>
            </div>
        <?php endforeach;?>
        <button class="btn btn-primary text-white">save Log</button>
    </form>

</div>
<?php require 'partials/footer.php';?>