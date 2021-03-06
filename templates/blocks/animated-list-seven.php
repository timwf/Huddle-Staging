<?php 
  $one = get_field('block_one');
  $two = get_field('block_two');
  $three = get_field('block_three');
  $four = get_field('block_four');
  $five = get_field('block_five');
?>

<section class="sports-animated-list">
  <div class="sports-animated-list__inner container">
    <div class="sports-animated-list__left">
      <svg id="sports-svg" xmlns="http://www.w3.org/2000/svg" width="290.25" height="1388.336" viewBox="0 0 290.25 1388.336">
        <g id="active-dot" transform="translate(-255.375 -279)">
          <circle class="sports-element-svg--dot" id="Ellipse_11" data-name="Ellipse 11" cx="7" cy="7" r="7" transform="translate(388.5 687.5)" fill="white"></circle>
          <circle class="sports-element-svg" id="Ellipse_12" data-name="Ellipse 12" cx="17" cy="17" r="17" transform="translate(378.5 677.5)" fill="none" stroke="#0a1c2b" stroke-miterlimit="10" stroke-width="1"></circle>
        </g>
        <g id="Group_83" data-name="Group 83" transform="translate(-255.375 -279)">
          <circle class="sports-element-svg" id="inactive-one" data-name="Ellipse 10" cx="17" cy="17" r="17" transform="translate(378.5 956)" fill="none" stroke="#ccc" stroke-miterlimit="10" stroke-width="1"></circle>
          <circle class="sports-element-svg--dot" id="Ellipse_11" data-name="Ellipse 11" cx="7" cy="7" r="7" transform="translate(388.5 966)" fill="white"></circle>
          <circle class="sports-element-svg" id="inactive-two" data-name="Ellipse 13" cx="17" cy="17" r="17" transform="translate(378.5 1233.5)" fill="none" stroke="#ccc" stroke-miterlimit="10" stroke-width="1"></circle>
          <circle class="sports-element-svg--dot" id="Ellipse_11" data-name="Ellipse 11" cx="7" cy="7" r="7" transform="translate(388.5 1243.5)" fill="white"></circle>
          <circle class="sports-element-svg" id="inactive-three" data-name="Ellipse 14" cx="17" cy="17" r="17" transform="translate(378.5 1513.5)" fill="none" stroke="#ccc" stroke-miterlimit="10" stroke-width="1"></circle>
          <circle class="sports-element-svg--dot" id="Ellipse_11" data-name="Ellipse 11" cx="7" cy="7" r="7" transform="translate(388.5 1523.5)" fill="white"></circle>
          <line class="sports-element-svg" id="cross-one-left" data-name="Line 57" x2="34" y2="34" transform="translate(378.5 397)" fill="none" stroke="#0a1c2b" stroke-miterlimit="10" stroke-width="1"></line>
          <line class="sports-element-svg" id="cross-one-left" data-name="Line 58" x1="34" y2="34" transform="translate(378.5 397)" fill="none" stroke="#0a1c2b" stroke-miterlimit="10" stroke-width="1"></line>
          <path class="sports-element-svg--arrow" id="solid-line-one--arrow" data-name="Path 20" d="M412.5,642.668l-17,17-17-17" fill="none" stroke="#0a1c2b" stroke-miterlimit="10" stroke-width="1"></path>
          <path class="sports-element-svg--arrow" id="curve-right--arrow" data-name="Path 21" d="M451.3,980.237,430.33,968.476l11.761-20.969" fill="none" stroke="#ccc" stroke-miterlimit="10" stroke-width="1"></path>
          <path class="sports-element-svg--arrow" id="curve-left--arrow" transform="translate(0 -561)" data-name="Path 22" d="M339.7,1816.508l20.968-11.761-11.761-20.968" fill="none" stroke="#ccc" stroke-miterlimit="10" stroke-width="1"></path>
          <path class="sports-element-svg" id="dotted-line-one" data-name="Path 29" d="M0,0V106.5" transform="translate(395.5 279)" fill="none" stroke="#0a1c2b" stroke-width="1" stroke-dasharray="8"></path>
          <line class="sports-element-svg" id="solid-line-one" data-name="Line 62" y2="193.336" transform="translate(395.5 449.332)" fill="none" stroke="#0a1c2b" stroke-miterlimit="10" stroke-width="1"></line>
          <line class="sports-element-svg" id="dotted-end" data-name="Line 65" y2="101.004" transform="translate(395.5 1566.332)" fill="none" stroke="#ccc" stroke-miterlimit="10" stroke-width="1" stroke-dasharray="8"></line>
          <path class="curve-left" id="curve-left" data-name="Path 25" d="M339.7,1797.663a139.676,139.676,0,0,1,20.969-263.273" transform="translate(0 -561)" fill="none" stroke="#ccc" stroke-miterlimit="10" stroke-width="1" stroke-dasharray="8"></path>
          <path class="curve-right" id="curve-right" data-name="Path 26" d="M430.332,698.12A139.676,139.676,0,0,1,449,962.374" fill="none" stroke="#ccc" stroke-miterlimit="10" stroke-width="1"></path>
          <g class="sports-element-svg">
            <path class="sports-element-svg--arrow" id="curve-right-two--arrow" transform="translate(10 561)" data-name="Path 21" d="M451.3,980.237,430.33,968.476l11.761-20.969" fill="none" stroke="#ccc" stroke-miterlimit="10" stroke-width="1"></path>
            <path class="curve-right" id="curve-right-two" data-name="Path 103" d="M430.332,698.12A139.676,139.676,0,0,1,449,962.374" transform="translate(10 561)" fill="none" stroke="#ccc" stroke-miterlimit="10" stroke-width="1"></path>
          </g>
        </g>
      </svg>
    </div>
    <div class="sports-animated-list__right">     
      <div class="sports-animated-list__item-container sports-animated-list__item-container--inactive">
          <a href="<?php echo $one['button']['button_link']['url'] ?>">
            <?php _get_template_part('templates/components/_resp-img', ['field' => $one['image'], 'sizes' => '(max-width: 1023px) 100vw, 950px']) ?>
            </a> 
              <div class="sports-animated-list__item-text">
              <a href="<?php echo $one['button']['button_link']['url'] ?>"><h1><?php echo $one['title'] ?></h1></a>
                <?php if ($one['button']['button_link']): 
              _get_template_part('templates/components/_button', [
                'copy' => $one['button']['button_copy'],
                'url' => $one['button']['button_link']['url']
              ]); 
            endif; ?>
              </div>
            </div>

            <div class="sports-animated-list__item-container sports-animated-list__item-container--inactive">

          <a href="<?php echo $two['button']['button_link']['url'] ?>">
            <?php _get_template_part('templates/components/_resp-img', ['field' => $two['image'], 'sizes' => '(max-width: 1023px) 100vw, 950px']) ?>
            </a> 
              <div class="sports-animated-list__item-text">
              <a href="<?php echo $two['button']['button_link']['url'] ?>"><h1><?php echo $two['title'] ?></h1></a>

                <?php if ($two['button']['button_link']): 
              _get_template_part('templates/components/_button', [
                'copy' => $two['button']['button_copy'],
                'url' => $two['button']['button_link']['url']
              ]); 
            endif; ?>
              </div>
            </div>
            
            <div class="sports-animated-list__item-container sports-animated-list__item-container--inactive">

            <a href="<?php echo $three['button']['button_link']['url'] ?>">
            <?php _get_template_part('templates/components/_resp-img', ['field' => $three['image'], 'sizes' => '(max-width: 1023px) 100vw, 950px']) ?>
            </a> 
              <div class="sports-animated-list__item-text">
              <a href="<?php echo $three['button']['button_link']['url'] ?>"><h1><?php echo $three['title'] ?></h1></a>

                <?php if ($three['button']['button_link']): 
              _get_template_part('templates/components/_button', [
                'copy' => $three['button']['button_copy'],
                'url' => $three['button']['button_link']['url']
              ]); 
            endif; ?>
              </div>
            </div>
            
            <div class="sports-animated-list__item-container sports-animated-list__item-container--inactive">
            <a href="<?php echo $four['button']['button_link']['url'] ?>">
            <?php _get_template_part('templates/components/_resp-img', ['field' => $four['image'], 'sizes' => '(max-width: 1023px) 100vw, 950px']) ?>
            </a> 
              <div class="sports-animated-list__item-text">
              <a href="<?php echo $four['button']['button_link']['url'] ?>"><h1><?php echo $four['title'] ?></h1></a>
                <?php if ($four['button']['button_link']): 
              _get_template_part('templates/components/_button', [
                'copy' => $four['button']['button_copy'],
                'url' => $four['button']['button_link']['url']
              ]); 
            endif; ?>
              </div>
            </div>
            
            <div class="sports-animated-list__item-container sports-animated-list__item-container--inactive">
     
            <a href="<?php echo $five['button']['button_link']['url'] ?>">
            <?php _get_template_part('templates/components/_resp-img', ['field' => $five['image'], 'sizes' => '(max-width: 1023px) 100vw, 950px']) ?>
            </a> 
              <div class="sports-animated-list__item-text">
              <a href="<?php echo $five['button']['button_link']['url'] ?>"><h1><?php echo $five['title'] ?></h1></a>
                <?php if ($five['button']['button_link']): 
              _get_template_part('templates/components/_button', [
                'copy' => $five['button']['button_copy'],
                'url' => $five['button']['button_link']['url']
              ]); 
            endif; ?>
              </div>
            </div>  

    </div>
  </div>
</section>