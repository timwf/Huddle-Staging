<?php
$copy = $template_args['copy'];
$url = $template_args['url'];
$dark = $template_args['dark'];
$target = $template_args['target'];
// if(!$dark) $dark = false;
?>



<a class="btn" 
href="<?php echo esc_attr($url); ?>" >
  <p><?php echo $copy; ?></p>

  <div class="btn-ani-wrap <?php
    if ($dark === 'dark'): echo 'btn-ani-wrap--dark';
    endif; ?>">
    <svg class="btn-crc-left" width="19" height="35" viewBox="0 0 4.617 9.26">
      <path d="M38.282,94.752a4.5,4.5,0,0,0-.018,9" transform="translate(-33.666 -94.62)" fill="none" stroke="#0a1c2b" stroke-width="0.264"></path>
    </svg>
    <svg class="btn-arrow" width="50px" height="16px" viewBox="0 0 13.535 2.876">
      <g>
        <line x2="13.346" transform="translate(0 1.344)" fill="none" stroke="red" stroke-miterlimit="10" stroke-width="0.265"></line>
        <path d="M10.107-119.568l1.344,1.344-1.344,1.344" transform="translate(1.896 119.568)" fill="none" stroke="red" stroke-miterlimit="10" stroke-width="0.265"></path>
      </g>
    </svg>
    <svg class="btn-crc-right" width="19" height="35" viewBox="0 0 4.689 9.261">
      <path d="M38.258,94.752a4.5,4.5,0,1,1-.021,9" transform="translate(-38.235 -94.62)" fill="none" stroke="#0a1c2b" stroke-width="0.264"></path>
    </svg>
  </div>
</a>