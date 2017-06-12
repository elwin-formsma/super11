<?php
echo "<body>


<div class='row'>
	<div class='col-md-1'></div>

	<div class='col-md-10'>



		</br></br>



		<ul class='nav nav-tabs' role='tablist'>
			<li $page_home><a href='/?page=home'>Home</a></li>
			<li $page_province><a href='/?page=province'>".$_SESSION['province_name']."</a></li>
			<li $page_kingdom><a href='/page/kingdom.php?kingdom_id=".$_SESSION['kingdom_id']."'>".$_SESSION['kingdom'].":".$_SESSION['island']."</a></li>
			<li $page_target><a href='/page/kingdom.php?kingdom_id=".$_SESSION['target_kingdom_id']."'>".$_SESSION['target_kingdom'].":".$_SESSION['target_island']."</a></li>
            <li $page_warorders><a href='/?page=warorders'>War Orders</a></li>
            <li $page_sots><a href='/?page=sots'>Random Sots</a></li>
			<li $page_oow><a href='/?page=oow'>OoW</a></li>
			<li $page_formatter><a href='/?page=formatter'>Formatter</a></li>
            <li $page_dragon><a href='/?page=dragon'>Dragon</a></li>


			<li class='dropdown'>
				<a class='dropdown-toggle' data-toggle='dropdown' href='#'>
					Links <span class='caret'></span>
				</a>

				<ul class='dropdown-menu' role='menu'>
					<!--<li><a href='http://impressions.emformsma.nl/wordpress' target='blank'>Guides (pw:ruby)</a></li>-->
					<!--<li><a href='http://badintel.eu:10450' target='blank'>BadIntel</a></li>-->
					<li><a href='/?page=help'>Help</a></li>
					<li><a href='/?page=guides'>Guides</a></li>
				</ul>
			</li>
";
	
if( $_SESSION['sess_access'] > 4 ) {
echo "
			<li class='dropdown'>
				<a class='dropdown-toggle' data-toggle='dropdown' href='#'>
					Admin <span class='caret'></span>
				</a>

				<ul class='dropdown-menu' role='menu'>
					<li $page_users><a href='/?page=users'>Users</a></li>
					<!--<li $page_kdsettings><a href='/?page=kdsettings'>KD Settings</a></li>-->
				</ul>
			</li>
";
}

echo "

			<li $page_settings><a href='/?page=settings'>Settings</a></li>
			<li><a href='/auth/logout.php'>Logout</a></li>

<li>
    <form id='form1' name='form1' method='post' action='auth/login.php'>
    <table width='510' border='0'>
    <tr>
    <td colspan='2'>Login Form</td>
    </tr>
    <tr>
    <td>Username:</td>
    <td><input type='text' name='username' id='username' /></td>
    </tr>
    <tr>
    <td>Password</td>
    <td><input type='password' name='password' id='password' /></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td><input type='submit' name='button' id='button' value='Submit' /></td>
    </tr>
    </table>
    </form>
</li>

		Logged in as: ".$_SESSION['sess_username']."

		</ul>




		</br></br>

	</div>

	<div class='col-md-1'></div>

</div>


<div class='row'>
	<div class='col-md-1'></div>

	<div class='col-md-10'>

";

?>
