<style>

  .js-huddle-btn-sales:hover{
    cursor: pointer;
  }
</style>



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

        <form id="js-sales-force-submit" class="contact-page-form__form"  action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
        <input type=hidden name="oid" value="00D60000000JBpq">
        <input type=hidden name="retURL" value="https://www.synergysportstech.com/">

        <div class="contact-page-form__row">
          
          <label style="display:none" for="first_name">First Name</label>
          <input id="first_name" maxlength="40" name="first_name" size="20" type="text" placeholder="First Name"/>
          <br>
        </div>

        <div class="contact-page-form__row">

          <label style="display:none" for="last_name">Last Name</label>
          <input id="last_name" maxlength="80" name="last_name" size="20" type="text" placeholder="Second Name"/>
          <br>
        </div>

        <div class="contact-page-form__row">

          <label style="display:none" for="email">Email</label>
          <input id="email" maxlength="80" name="email" size="20" type="text" placeholder="Email" />
          <br>
        </div>


        <div class="contact-page-form__row">

          <label style="display:none" for="phone">Phone</label>
          <input id="phone" maxlength="40" name="phone" size="20" type="text" placeholder="Phone"/>
          <br>
        </div>

        <div class="contact-page-form__row">

          <label style="display:none"  for="company">Company</label>
          <input id="company" maxlength="40" name="company" size="20" type="text" placeholder="Company"/>
          <br>
        </div>

        <div class="contact-page-form__row contact-page-form__row--select">


          I am a...:<select id="00N5x00000EfDcf" name="00N5x00000EfDcf" title="I am a...">
          <option value="">--None--</option>
          <option value="Federation / League">Federation / League</option>
          <option value="Coach">Coach</option>
          <option value="Administrator">Administrator</option>
          <option value="Bookmaker">Bookmaker</option>
          <option value="Broadcaster">Broadcaster</option>
          <option value="Media Representative">Media Representative</option>
          <option value="Player">Player</option>
          <option value="Fan">Fan</option>
          </select>
          <br>

        </div>

        <div class="contact-page-form__row contact-page-form__row--select">

          I am interested in...:<select id="00N5x00000EfDck" name="00N5x00000EfDck" title="I am interested in...">
          <option value="">--None--</option>
          <option value="Baseball Products">Baseball Products</option>
          <option value="Basketball Products">Basketball Products</option>
          <option value="Hockey Products">Hockey Products</option>
          <option value="Volleyball Products">Volleyball Products</option>
          <option value="Softball Products">Softball Products</option>
          </select><br>

        </div>
        <div class="contact-page-form__row contact-page-form__row--select">    
          Message:<textarea id="00N5x00000EfDcp" name="00N5x00000EfDcp" rows="3" type="text" wrap="soft"></textarea><br>        
        </div>
          
        
        <!-- <input  type="submit" name="submit"> -->




        <div class="btn js-huddle-btn-sales" >
          <p>send</p>

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
          </div>

          
        </form>
    </div>
  </div>
</section>