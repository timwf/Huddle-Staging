<?php 

$copy = get_field('editor');
$enable_header_black = get_field('enable_header_black');

if($enable_header_black) { ?>
<style>
  .page-header {
    background-color: black;
}
</style>

<h1>test</h1>

  <?php
} ?>








<div class="blog-content container">
  <div class="blog-content__inner" style="padding-top: 130px">
    <?php echo $copy ?>
  </div>
</div>