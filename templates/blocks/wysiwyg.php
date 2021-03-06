<?php 

$copy = get_field('editor');
$enable_header_black = get_field('enable_header_black');

if($enable_header_black) { ?>
  <style>
    .page-header {
      background-color: black;
  }
  </style>
<?php 
} ?>






<div class="blog-content container">
  <div class="blog-content__inner" style="padding-top: 130px">
  <?php echo rand(5, 15);?>
    <?php echo $copy ?>
  </div>
</div>