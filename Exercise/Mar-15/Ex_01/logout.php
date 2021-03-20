<?php
 session_start();
 if(isset($_SESSION['username'])) {
     session_destroy();
 }
 ?>

<script>
    location.assign("index.php");
</script>
