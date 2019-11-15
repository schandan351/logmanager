<?php require 'partials/header.php';?>
<div class="container">
    <?php require 'partials/filter.php';?>
    <table class="table table-striped mt-3 ">
        <h1 class="mt-5 text-success"  style="text-align:center;">YOUR LOGS</h1>
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
    <?php if(($logs == false) and (!isset($_POST['filter-date-btn']))  ):?>
        <h3 style="text-align:center; margin-top:50px;">You haven't added log yet  <a href="/">ADD</a> </h3>    
    <?php elseif(($logs == false) and (isset($_POST['filter-date-btn']))):?>
         <h1 class="text-center">No log on Selected date</h1>  
    <?php endif;?>
</div>
<?php require 'partials/footer.php';?>