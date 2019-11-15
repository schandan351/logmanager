  
    <form method="POST" action="/filter-date">
        <input type="date" class="form-control mt-4 mb-3"  name="filter-date" required value=<?=$arr[0];?> >
        <button class="btn btn-primary" type="submit" name="filter-date-btn">filter</button>
    </form>

<?php if(!isset($_POST['filter-date-btn'])):?>
    



<div class="d-flex float-right">
    <div class="dropdown mr-1 mb-3">
        <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" data-offset="10,20">
            Sort By
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
            <a class="dropdown-item" href="/filter-desc">Newest</a>
            <a class="dropdown-item" href="/filter-asc">Oldest</a>
        </div>
    </div>
</div>

<?php endif;?>