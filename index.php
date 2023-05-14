<?php
  /* REQUIRED */
  include 'config.php';

  /* 1. Redirect in PHP */
  $redirect_url = REDIRECT_URL;
  header('Location: ' . $redirect_url);
?>

<!DOCTYPE html>
<html>
  <head>
    <?php 
        /* 2. Redirect in PHP + HTML Head */
        echo '<meta http-equiv="refresh" content="0; url=' . $redirect_url . '">'; 
    ?>
  </head>
  <body onload="redirect(); show_redirect_url();" >
    <p id="paragraph" style="display:none;">If you're not automatically redirected, <a href="<?php echo $redirect_url; ?>">click here</a>.</p>
    <script>
        /* 3. Redirect in HTML Tag + Javascript */
        function redirect() {
            //window.location.href = "<?php echo $redirect_url; ?>";
        }

        /* 4. Redirect in HTML + Javascript + DOM + CSS */
        function show_redirect_url(){
            setTimeout(function() {
                var paragraph = document.getElementById("paragraph");
                paragraph.style.display = "block";
            }, 1500);
        }
    </script>
  </body>
</html>
