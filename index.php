<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donovan's Party & Novelty - "Where the best parties begin!"</title>
	<meta name="description" content="Donovan's carries a huge selection tableware, balloons, cards, catering supplies, decorations, and other party supplies to make any occasion festive.">
	<meta name="keywords" content="Novelty, Concord, NH, New Hampshire, balloons, costumes, cards, wedding supplies, birthday, caterware, party, party supplies,  ">
	
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/business-casual.css" rel="stylesheet">
	
	<link rel="canonical" href="http://www.donovansparty.com" />
  </head>

  <body>
	<?php
	$page = 'home';
	include ('../header.php');
	?>

    <div class="container">

      <div class="row">
		<div class="col-lg-8 text-center">
        <div class="box">
		<div>
                <img class="img-responsive img-full" src="../img/Intro.jpg" alt="Store enterance" >
                        <h1><div><img  class="img-responsive img-full name" src="../img/Written.png" alt="Donovan's Party and Novelty" ></div></h1>
                    <hr class="tagline-divider">
					<h4>
                        <i>"Where the Best Parties Begin!"</i>
					</h4>
        </div>
        </div>
		</div>
		<div class="col-lg-4 text-center">
        <div class="box">
			<?php
				include ('../schedule.php');
			?>
		</div>
		</div>
		</div>

	<div class="row">
          <div class="col-lg-8">
			<div class="box fill">
            <hr>
            <h2 class="intro-text text-center">Wedding Invitations!</h2>
            <hr>
			<a href="http://www.yourinvitationplace.com/Default.aspx?WebName=donovans" onclick="ga('send','event','Outgoing Links','invitations.com')" target="_blank"><img class="img-responsive img-border img-left" src="../img/index/Wedding Invitations.jpg" alt="Wedding Invitations"></a>
			<hr><p> <a href="http://www.yourinvitationplace.com/Default.aspx?WebName=donovans"  onclick="ga('send','event','Outgoing Links','invitations.com')" target="_blank">Click here to order your custom wedding invitations!</p></a>
          </div>
		  </div>
		  <div class="col-lg-4 text-center">
		<div class="box">
		<a href="https://maps.google.com/maps?q=Donovan%27s+Party+%26+Novelty&hl=en&ll=43.215169,-71.530266&spn=0.008929,0.021136&sll=43.216186,-71.529107&sspn=0.008929,0.021136&t=m&z=16&iwloc=A"><img class="img-rounded" src="img/Map.png" alt="map to the store" ></a>
		<h5>Donovan's Party & Novelty</h5>
		<h6>102 Fort Eddy Road </h6>
		<h6>Concord, NH 03301 </h6>
        <h6><a href="tel:603-226-2225">603-226-2225</a></h6>
        <h6><a href="mailto:Party@DonovansParty.com">Party@DonovansParty.com</a></h6>

		</div>
		  </div>
        </div>

		
      <div class="row">
          <div class="col-lg-8">
		  <div class="box fill">
            <hr>
            <h2 class="intro-text text-center">Congraduations 2016 Graduates!</h2>
            <hr>
			<img class="img-responsive img-border img-left" src="../img/index/Graduation.jpg" alt="Congrats Grads">
            <p> Donovan's Party & Novelty has everything you need for a memorable graduation party including yard signs, banners and balloons for all of the local high schools.</p>
        </div>
        </div>
		<div class="col-lg-4 text-center">
		  <div class="box">
		  		<a  href="https://www.facebook.com/donovanspartynh" onclick="ga('send','event','Outgoing Links','facebook.com')" target="_blank" ><img src="../img/facebookIconjoin.png" alt="Join us on facebook"></a>
			</div>
			</div>
      </div>
	  
	  <div class="row">
          <div class="col-lg-8">
		  <div class="box fill">

			<hr>
			<h2 class="intro-text text-center">Cards</h2>
            <hr>
            <img class="img-responsive img-border img-left" src="../img/index/cards.jpg" alt="Card display case">
            <p>Donovan's Party & Novelty has a wide selection of cards to celebrate every occasion. </p>
            <p> All cards are 50% off every day!</p>
			
          </div>
        </div>
      </div>
	  
	    <div class="row">
          <div class="col-lg-8">
		  <div class="box fill">

			<hr>
			<h2 class="intro-text text-center">Balloons</h2>
            <hr>
            <img class="img-responsive img-border img-left" src="../img/index/Balloons.jpg" alt="Balloon selection">
            <p>We have balloons to celebrate every occasion. Stop in and see how we can help you decorate.</p>
			
          </div>
        </div>
      </div>


	</div>
    </div><!-- /.container -->
    
    <footer>
		<?php include '../footer.php'; ?>
    </footer>

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
	<!-- Please call pinit.js only once per page -->
	<script type="text/javascript" async src="https://assets.pinterest.com/js/pinit.js"></script>

	
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47281637-1', 'donovansparty.com');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>
	
  </body>
</html>