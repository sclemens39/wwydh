<?php echo '
<link href="../helpers/header_footer.css" type="text/css" rel="stylesheet" />
<link href="style.css" type="text/css" rel="stylesheet" />
<div id="signin">
<div class="title">Confirm New Password For Reset</div>
<form action="reset.php" method="POST">
<fieldset style="background-color: #4CAF50;">
E-mail Address: <input type="text" name="email" size="20" /><br />
New Password: <input type="password" name="password" size="20" /><br />
Confirm Password: <input type="password" name="confirmpassword" size="20" /><br />
<input type="hidden" name="q" value="';
if (isset($_GET["q"])) {
	echo $_GET["q"];
}
	echo '" /><input type="submit" name="ResetPasswordForm" value=" Reset Password " />
</form><div id="footer">
            <div class="grid-inner">
                &copy; Copyright WWYDH <?php echo date("Y") ?>
            </div>
        </div>';

?>