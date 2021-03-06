<?php 
  $title = get_field('header');
  $copy = get_field('copy');
  $privacy = get_field('privacy', 'options');
?>

<section class="contact-page-form">
  <div class="contact-page-form__inner container">
    <div class="contact-page-form__left">
    <?php if ($title): ?> 
      <h1> <?php echo $title ?></h1>    
    <?php endif; ?>
      <p><?php echo $copy ?></p>
    </div>
    <div class="contact-page-form__right">
      <form class="contact-page-form__form" action="#">
        <div class="contact-page-form__row">
          <input type="text" placeholder="Name (*)" required>
        </div>
        <div class="contact-page-form__row">
          <input type="text" placeholder="Organization/Team Name: (*)" required>
        </div>
        <div class="contact-page-form__row">
          <input type="email" placeholder="Email (*)" required>
        </div>
        <div class="contact-page-form__row">
          <input type="tel" placeholder="Mobile Phone " required>
        </div>

        <div class="contact-page-form__row">
          <label class="form-i-am" for="typeOfClient">I am a...</label>
          <select id="typeOfClient" name="typeOfClient">
            <option value="" disabled selected>Select your option (*)</option>
            <option value="Federation">Federation / League</option>
            <option value="Coach">Coach</option>
            <option value="dministrator">Administrator</option>
            <option value="Bookmaker">Bookmaker / Broadcaster</option>
            <option value="Media">Media Representative </option>
            <option value="Player">Player</option>
            <option value="Fan">Fan</option>
          </select>
        </div>

        <div class="contact-page-form__row">
          <label class="form-i-am" for="interestedIn">I am interested in…</label>
          <select id="interestedIn" name="interestedIn">
            <option value="" disabled selected>Select your option (*)</option>
            <option value="Baseball">Baseball Products</option>
            <option value="Basketball">Basketball Products</option>
            <option value="Hockey">Hockey Products</option>
            <option value="Softball">Softball Products</option>
            <option value="Volleyball">Volleyball Products</option>
          </select>
        </div>

        <div class="contact-page-form__row">
          <textarea type="text" style="resize: none" rows="5" cols="30" value="" placeholder="Message" required></textarea>
        </div>
        <div class="contact-page-form__row">
          <input type="checkbox" id="privacy" name="privacy" value="">
          <label for="privacy">Accept <a href="<?php echo $privacy['url'] ?>"><span>privacy </span>(*)</a></label>
        </div>
        <?php _get_template_part('templates/components/_button', ['copy' => 'send' ]); ?>
      </form>
    </div>
  </div>
</section>