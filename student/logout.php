<?php
session_start();
$_SESSION['matno']=="";
$_SESSION['login']=="";
session_unset();
$_SESSION['msg']='<span style="color:green;">'."You have successfully logged out".'</span>';
?>
<script language="javascript">
document.location="../index.php";
</script>
