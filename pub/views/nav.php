<nav class="pure-g">
	<ul class="pure-u-1">
		<a href="/"><li style="float:left;">E-Procurement</li></a>
		<a href="/tenders"><li style="float:left;">Tender List</li></a>
		<?php session_start();
		if(isset($_SESSION['user'])){ ?>
		<a href="/logout"><li style="float:right;">Logout</li></a>
		<a href="/profile"><li style="float:right;"><?=$_SESSION['user']?></li></a>
		<?php }else{ ?>
		<a href="/login"><li style="float:right;">Login</li></a>
		<a href="/register"><li style="float:right;">Register</li></a>
		<?php } ?>
	</ul>
</nav>