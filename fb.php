
      <?php
      include "head.php";
      session_start();
      $planid =  $_SESSION['fplanid'];

      echo $planid; ?>
			<script type="text/javascript">
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '957496424279058',
          xfbml      : true,
          version    : 'v2.1'
        });

        FB.ui({
      method: 'send',
      link: 'http://papalorspizza.tk/rsvp.php?fplanid=<?php echo $planid ?>',
    });
      };
	


      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));

      window.close();
    </script>

    <script type="text/javascript">
function Redirect()
{
    window.location="newuserdashboard.php";
}

document.write("You will be redirected to main page in 10 sec.");
setTimeout('Redirect()', 5000);
</script>

 <?php include "footer.php" ?>