
<div class="container">
    <?php require('partials/header.php');?>
    <table class="table table-striped ">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">LOGS</th>
                <th scope="col">DATE</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($logs as $log):?>
                <tr>
                    <th scope="row"><?=$log->id;?></th>
                    <td><?=$log->log;?></td>
                    <td><?=$log->date;?></td>
                    <td> <a class="btn btn-primary">Edit</a></td>
                    <td> <a class="btn btn-danger" href="/delete/<?php echo $log->id;?>">Delete</a></td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    <?php require('partials/footer.php');?>
</div>

