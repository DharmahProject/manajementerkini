<?php
session_start();
/*session_unregister("USERNAME"); */
session_destroy();
session_unset();
echo "<script>window.location = 'index'</script>";
?>
