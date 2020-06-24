<?php 
session_start();
unset($_SESSION['login']);
session_destroy();
?>
<script type="text/javascript">alert('logout berhasil'); window.location = "index.php";</script>