
<ul class="nav navbar-nav">
<li class="dropdown">
	<button class="btn  dropdown-toggle" type="button" data-toggle="dropdown" style="background-color:yellow; color:#000000">Invoice
	<span class="caret"></span></button>
	<ul class="dropdown-menu">
		<li><a href="invoice_list.php" >Invoice List</a></li>
		<li><a href="create_invoice.php">Create Invoice</a></li>				  
	</ul>
</li>
<?php 
if($_SESSION['userid']) { ?>
	<li class="dropdown">
		<button class="btn dropdown-toggle" type="button" data-toggle="dropdown" style="background-color:yellow; color:#000000">Logged in <?php echo $_SESSION['user']; ?>
		<span class="caret"></span></button>
		<ul class="dropdown-menu">
			
			<li><a href="action.php?action=logout">Logout</a></li>		  
		</ul>
	</li>
<?php } ?>
</ul>
<br /><br /><br /><br />