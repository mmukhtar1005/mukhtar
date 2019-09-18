<?php
session_start();
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo 'The payment was cancelled from your side. Please wait for a few seconds until redirection.';
?>
<script type="text/javascript">
setTimeout(function(){
window.location.assign("http://www.rafisweets.co.in/index.php");
},3000);
</script>