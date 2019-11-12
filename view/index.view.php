

<?php require('partials/header.php');?>
    <div class="container">
        <h1>YOUR LOGS</h1>
            <?php require('partials/filter.php');?>
        <table class="table table-striped mt-3 ">
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
    </div>
<?php require('partials/footer.php');?>


