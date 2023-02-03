
<a href="/gallery">Galleries</a>
<a href="/image">Images</a>
<div>
<?php foreach ($galleries as $gallery) : ?>
  <h2><?php echo $gallery["name"] ?></h2>
  <?php foreach($gallery->image as $image): ?>
    <img src="file/<?php echo $image->file; ?> " alt="<?php $image->altText; ?>" srcset="">
  <?php endforeach; ?>
<?php endforeach; ?>
</div>
