<?php /* Template Name: Contact Page */ get_header(); ?>

<div class="clearfix"></div>

<div class="content_fullwidth less">

<div class="one_full">
  <!-- <div id="map-canvas"></div> -->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:100%;"><div id="gmap_canvas" style="height:500px;width:100%;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.themecircle.net" id="get-map-data">premium wordpress themes</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(32.8175451,-96.78907179999999),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(32.8175451, -96.78907179999999)});infowindow = new google.maps.InfoWindow({content:"<b>The Law Offices of Randall B. Isenberg</b><br/>4303 North Central Expressway<br/>75205 Dallas" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div><!-- end google map -->

<div class="clearfix margin_top4"></div>

<div class="container">

      <div class="two_third">
      
        <p>When it comes to criminal defense, one size does not fit all. You need a defense that is tailored to your needs and the specifics of your case. At the Dallas Law Offices of Randall B. Isenberg, we will take early action and explore all options to build you the best possible defense. Available to our clients twenty-four hours a day, seven days a week, we are ready to answer your questions and take action. Contact us today for a free initial consultation.</p>
        <br /><br />
        
        <div class="cforms">
        
        <form action="demo-contacts.php" method="post" id="sky-form" class="sky-form">
          <header>Send Us a <strong>Message!</strong></header>
          <fieldset>
            <div class="row">
              <section class="col col-6">
                <label class="label">Name</label>
                <label class="input"> <i class="icon-append icon-user"></i>
                  <input type="text" name="name" id="name">
                </label>
              </section>
              <section class="col col-6">
                <label class="label">E-mail</label>
                <label class="input"> <i class="icon-append icon-envelope-alt"></i>
                  <input type="email" name="email" id="email">
                </label>
              </section>
            </div>
            <section>
              <label class="label">Subject</label>
              <label class="input"> <i class="icon-append icon-tag"></i>
                <input type="text" name="subject" id="subject">
              </label>
            </section>
            <section>
              <label class="label">Message</label>
              <label class="textarea"> <i class="icon-append icon-comment"></i>
                <textarea rows="4" name="message" id="message"></textarea>
              </label>
            </section>
            <section>
              <label class="checkbox">
                <input type="checkbox" name="copy" id="copy">
                <i></i>Send a copy to my e-mail address</label>
            </section>
          </fieldset>
          <footer>
            <button type="submit" class="button">Send message</button>
          </footer>
          <div class="message"> <i class="icon-ok"></i>
            <p>Your message was successfully sent!</p>
          </div>
        </form>
        
        </div>
        
      </div><!-- end section -->
      
      <div class="one_third last">
      
        <div class="address_info two">
        
          <h4>Company <strong>Address</strong></h4>
          <ul>
            <li> <strong>The Law Offices of Randall B. Isenberg</strong><br />
              4303 North Central Expressway Dallas, TX 75205 <br />
              Phone Number: (214) 696-9253<br />
              Fax Number: (214) 696-0867<br />
              E-mail: <a href="law@randallisenberg.com">law@randallisenberg.com</a><br />
               </li>
          </ul>
          
        </div><!-- end section -->

        
	  </div>
        

</div>
</div><!-- end content area -->

<?php get_footer(); ?>