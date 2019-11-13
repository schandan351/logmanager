<?php require 'partials/header.php';?>
<div class="container">
    <?php require 'partials/filter.php';?>
    <table class="table table-striped mt-3 ">
    <h3 class="mt-3">YOUR LOGS</h3>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">LOGS</th>
                <th scope="col">DATE</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($logs as $log): ?>
            <tr>
                <th scope="row"><?=$log->id;?></th>
                <td><?=$log->log;?></td>
                <td><?=$log->date;?></td>
                <td>
                    <a type="submit" class="btn btn-primary" href="/edit/?id=<?=$log->id;?>">Edit</a>
                </td>
                <td>
                    <a type="submit" class="btn btn-danger" href="/delete/?id=<?=$log->id;?>">Delete</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
<?php require 'partials/footer.php';?>