
<a href="/gallery">Galleries</a>
<a href="/image">Images</a>
<div>
<?php foreach ($galleries as $gallery) : ?>
  <h2><?php echo $gallery["name"] ?></h2>
  <div class="view-gallery">
    <?php foreach($gallery->image as $image): ?>
      <a href="file/<?php echo $image->file; ?> " target="_blank">
        <img src="file/<?php echo $image->file; ?> " alt="<?php $image->altText; ?>" srcset="">
      </a>
    <?php endforeach; ?>
    </div>
<?php endforeach; ?>
</div>
