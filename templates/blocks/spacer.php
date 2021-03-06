<?php
  $uniqueId = RandomString();
  $bespoke = get_field('change_spacer_height');
  $desktop = get_field('desktop_height');
  $mobile = get_field('mobile_height');
  $tablet = get_field('tablet_height');
?>

<?php if($bespoke){?>
  <style>
    #spacer--<?php echo $uniqueId ?> {
      height: <?php echo $mobile ?>px;
    }

    @media (min-width: 768px){
      #spacer--<?php echo $uniqueId ?> {
      height: <?php echo $tablet ?>px;
      }
    }

    @media (min-width: 1280px){
      #spacer--<?php echo $uniqueId ?> {
      height: <?php echo $desktop ?>px;
      }
    }
  </style>
<?php
}?>

<div id="spacer--<?php echo $uniqueId?>" class="spacer"></div>	