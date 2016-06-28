<h1> good news  </h1>



<?php foreach($news as $item) : ?>


<h2> <?=$item->title?>  </h2>


<h6> <?=$item->text ?>       <?=$item->create_date ?>   </h6> 

<h6> <?=$item->user->username ?> </h6>


<?php endforeach; ?>

<?php foreach($users as $user) : ?>

<h6> <?=$user->username ?> </h6>

<h6> <?php //$user->title ?> </h6>


	<?php foreach($user->news as $news): ?>
			
		<?=$news->title ?>


	<?php endforeach; ?>


<?php endforeach; ?>



<div> </div>

<span> </span>
