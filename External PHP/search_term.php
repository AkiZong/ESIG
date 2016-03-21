<?php
	
	if(isset($_GET['search']) && !empty($_GET['search']))
	{
		$query = 'SELECT AND title LIKE "%'.trim($_GET['search_term'], $charactermask).'%"';
	}
?>