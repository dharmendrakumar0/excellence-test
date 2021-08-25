<?php  if (count($success) > 0) : ?>
  <div class="error">
  	<?php foreach ($success as $s) : ?>
  	  <p><?php echo $s ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>