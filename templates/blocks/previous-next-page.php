<?php 
  $previous = get_field('previous');
  $next = get_field('next');
?>

<section class="previous-next-page">
  <div class="previous-next-page__inner container">
    <div class="previous-next-page__text-wrap">
      <div class="previous-next-page__left">
        <div class="previous-next-page__left-inner">
          <h4 class="js-visibility reveal-slide">PREVIOUS</h4>
          <h1 class="js-visibility reveal-slide"><?php echo $previous['page_name'] ?></h1>
          <p class="js-visibility reveal-slide"><?php echo $previous['page_excerpt'] ?></p>\
          <a href="<?php echo esc_attr( $previous['page_link']['url'] ) ?>">
            <svg class="previous-next-page__button-left clickable" width="35" height="35" viewBox="0 0 35 35">
              <g id="news-slider-left" transform="translate(291 751) rotate(180)">
                <g id="Ellipse_3" data-name="Ellipse 3" transform="translate(256 716)" fill="none" stroke="#0a1c2b" stroke-width="1">
                  <circle cx="17.5" cy="17.5" r="17.5" stroke="none"></circle>
                  <circle cx="17.5" cy="17.5" r="17" fill="none"></circle>
                </g>
                <g id="Group_22" data-name="Group 22" transform="translate(256.848 1180.65)">
                  <path id="Path_4" data-name="Path 4" d="M38.2-451.917l5.081,5.081L38.2-441.755" transform="translate(-24.186)" fill="none" stroke="red" stroke-miterlimit="10" stroke-width="1"></path>
                </g>
              </g>
            </svg>                  
          </a>
        </div>
      </div>
      <div class="previous-next-page__right">
        <div class="previous-next-page__right-inner">
          <h4 class="js-visibility reveal-slide">NEXT</h4>
          <h1 class="js-visibility reveal-slide"><?php echo $next['page_name'] ?></h1>
          <p class="js-visibility reveal-slide"><?php echo $next['page_excerpt'] ?></p>
          <a href="<?php echo esc_attr($next['page_link']['url']) ?>">
          <svg class="previous-next-page__button-right clickable" width="35" height="35" viewBox="0 0 35 35">
            <g id="news-slider-right" transform="translate(-256 -716)">
              <g id="Ellipse_3" data-name="Ellipse 3" transform="translate(256 716)" fill="none" stroke="#0a1c2b" stroke-width="1">
                <circle cx="17.5" cy="17.5" r="17.5" stroke="none"></circle>
                <circle cx="17.5" cy="17.5" r="17" fill="none"></circle>
              </g>
              <g id="Group_22" data-name="Group 22" transform="translate(256.848 1180.65)">
                <path id="Path_4" data-name="Path 4" d="M38.2-451.917l5.081,5.081L38.2-441.755" transform="translate(-24.186)" fill="none" stroke="red" stroke-miterlimit="10" stroke-width="1"></path>
              </g>
            </g>
          </svg>                
          </a>
        </div>
      </div>
    </div>
  </div>
</section>