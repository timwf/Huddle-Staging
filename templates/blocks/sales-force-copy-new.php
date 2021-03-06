<!-- <META HTTP-EQUIV=“Content-type” CONTENT=“text/html; charset=UTF-8"> -->
<!-- ---------------------------------------------------------------------- -->
<!-- NOTE: Please add the following <FORM> element to your page.      -->
<!-- ---------------------------------------------------------------------- -->
  <!-- <form action=“https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8” method=“POST”>
  <input type=hidden name=“oid” value=“00D60000000JBpq”>
  <input type=hidden name=“retURL” value=“https://www.synergysportstech.com/”> -->
<!-- ---------------------------------------------------------------------- -->
<!-- NOTE: These fields are optional debugging elements. Please uncomment  -->
<!-- these lines if you wish to test in debug mode.             -->
<!-- <input type=“hidden” name=“debug” value=1>               -->
<!-- <input type=“hidden” name=“debugEmail”                 -->
<!-- value=“michael+synergy@salesops.io”>                  -->
<!-- ---------------------------------------------------------------------- -->
-->


<?php 
  $title = get_field('header');
  $copy = get_field('copy');
  $privacy = get_field('privacy', 'options');
?>

<section class="contact-page-form">
  <div class="contact-page-form__inner container">
    <div class="contact-page-form__left">
    <?php //if ($title): ?> 
      <h1> <?php echo $title ?>Get in touch</h1>    
    <?php //endif; ?>
      <p><?php echo $copy ?> Whether you want more information on our company or our product range, you’re interested in our technology or want to partner with us, let’s talk.</p>
    </div>
    <div class="contact-page-form__right">

    <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">

        <form class="contact-page-form__form"  action=“https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8” method=“POST”>
        <input type=hidden name=“oid” value=“00D60000000JBpq”>
        <input type=hidden name=“retURL” value=“https://www.synergysportstech.com/”>

        <div class="contact-page-form__row">
          
          <label style="display:none" for=“first_name”>First Name</label>
          <input id=“first_name” maxlength=“40" name=“first_name” size=“20" type=“text” placeholder="First Name"/>
          <br>
        </div>

        <div class="contact-page-form__row">

          <label style="display:none" for=“last_name”>Last Name</label>
          <input id=“last_name” maxlength=“80" name=“last_name” size=“20" type=“text” placeholder="Second Name"/>
          <br>
        </div>

        <div class="contact-page-form__row">

          <label style="display:none" for=“email”>Email</label>
          <input id=“email” maxlength=“80" name=“email” size=“20" type=“text” placeholder="Email" />
          <br>
        </div>


        <div class="contact-page-form__row">

          <label style="display:none" for=“phone”>Phone</label>
          <input id=“phone” maxlength=“40" name=“phone” size=“20" type=“text” placeholder="Phone"/>
          <br>
        </div>

        <div class="contact-page-form__row">

          <label style="display:none"  for=“company”>Company</label>
          <input id=“company” maxlength=“40" name=“company” size=“20" type=“text” placeholder="Company"/>
          <br>
        </div>

        <div class="contact-page-form__row contact-page-form__row--select">


          I am a...:<select id=“00N5x00000EfDcf” name=“00N5x00000EfDcf” title=“I am a...“>
          <option value=“”>--None--</option>
          <option value=“Federation / League”>Federation / League</option>
          <option value=“Coach”>Coach</option>
          <option value=“Administrator”>Administrator</option>
          <option value=“Bookmaker”>Bookmaker</option>
          <option value=“Broadcaster”>Broadcaster</option>
          <option value=“Media Representative”>Media Representative</option>
          <option value=“Player”>Player</option>
          <option value=“Fan”>Fan</option>
          </select>
          <br>

        </div>

        <div class="contact-page-form__row contact-page-form__row--select">

          I am interested in...:<select id=“00N5x00000EfDck” name=“00N5x00000EfDck” title=“I am interested in...“>
          <option value=“”>--None--</option>
          <option value=“Baseball Products”>Baseball Products</option>
          <option value=“Basketball Products”>Basketball Products</option>
          <option value=“Hockey Products”>Hockey Products</option>
          <option value=“Volleyball Products”>Volleyball Products</option>
          <option value=“Softball Products”>Softball Products</option>
          </select><br>

        </div>
        <div class="contact-page-form__row contact-page-form__row--select">    
          Message:<textarea id=“00N5x00000EfDcp” name=“00N5x00000EfDcp” rows=“3” type=“text” wrap=“soft”></textarea><br>        
        </div>
          
        
        <input type=“submit” name=“submit”>

          <?php //_get_template_part('templates/components/_button', ['copy' => 'send' ]); ?>
        </form>
    </div>
  </div>
</section>