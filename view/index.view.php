
<?php require('partials/header.php');?>
    <table class="table table-striped  ">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">LOG</th>
        <th scope="col">DATE</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach($logs as $log):?>
        <tr>
            <th scope="row"><?=$log->id;?></th>
            <td><?=$log->log;?></td>
            <td><?=$log->date;?></td>
           <td> <button class="btn btn-primary">Edit</button></td>
           <td> <button class="btn btn-danger">Delete</button></td>

        </tr>
    <?php endforeach;?>
    
    </tbody>
    </table>

<?php require('partials/footer.php');?>
