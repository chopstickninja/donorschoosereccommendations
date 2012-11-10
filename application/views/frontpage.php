<?php include 'header_meta_inc_view.php';?>

<?php include 'header_inc_view.php';?>

<!--login form -->
<div class="container span9">
<div id="login" class="span9">
<span class="help-block">Login using your DonorsChooseID, or your social media usernames:</span>
<a href="#loginModal" role="button" id="loginDonor" class="btn btn-primary" data-toggle="modal">DonorChoose</a>
<a href="#loginModal" role="button" id="loginFacebook" class="btn btn-primary" data-toggle="modal">Facebook</a>
<a href="http://api.twitter.com/oauth/authorize?oauth_token=hGoC2TlYazvKsCbUWaZCF4pOGqw7zREOK9PJYIxWNBs&oauth_token_secret=OY8KBGN9OT6bgunmHU0IJPQ9RgVHfjpUSaDFrIAJ4&oauth_callback_confirmed=true" role="button" id="loginTwitter" class="" data-toggle="modal"><img src="bootstrap/img/twitter-sign-in.png"></a>
</div>
<div id="submit" class="span9">
<a class="btn btn-success btn-block" href="projects.html">See my projects</a>
</div>
</div>
<!--login modal -->
<div id="loginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="aboutModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="aboutModalLabel">Sign in</h3>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>
<!--end login modal-->

<?php include 'footer_inc_view.php';?>