<script>
localStorage.key = "d";
</script>

<?php
$Data = "<script>document.write(localStorage.key);</script>";
print_r($Data);
?>