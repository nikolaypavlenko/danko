
<?php foreach($news as $item) : ?>


<a href="/frontend/web/index.php?r=site%2Ftest&id=<?=$item->id?>">  <h2 style="color:green"> Новость <?=$item->title?> </h2> </a>



<?php endforeach; ?><hr>
