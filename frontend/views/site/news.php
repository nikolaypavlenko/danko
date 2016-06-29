
<?php foreach($news as $item) : ?>


<h2 style="color:green"> Новость <?=$item->title?>  </h2>

<p> <?=$item->text ?>    </p>

<h5 style="font-style:italic">  <?=$item->create_date ?>   </h5> 

<span style="font-weight:bold; font-size:15px"> <?=$item->user->username ?> </span>

<h6 style="color:blue; font-style:italic"> <?=$item->tag->name_tag ?> </h6><br>

<?php endforeach; ?>

//////////////////////////////////////////////////////

<?php foreach($users as $user) : ?>

	<h6 style="font-style:italic"> <?=$user->username ?> </h6>

		<?php foreach($user->news as $news): ?>
				<?=$news->title ?> <br>
		<?php endforeach; ?>

<?php endforeach; ?>

<br><br> //////////////////////////////////////////////

<?php foreach($tags as $tag) : ?>

	<h6 style="font-style:italic"> <?=$tag->name_tag ?> </h6>

		<?php foreach($tag->news as $news): ?>
				<?=$news->title ?> <br>
		<?php endforeach; ?>

<?php endforeach; ?>
