<style>
.pull-right {
float: right;
}
.pagination {
margin: 20px 0;
}
.pagination ul {
display: inline-block;
margin-bottom: 0;
margin-left: 0;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.05);
-moz-box-shadow: 0 1px 2px rgba(0,0,0,0.05);
box-shadow: 0 1px 2px rgba(0,0,0,0.05);
}
.pagination ul>li {
	
display: inline;
}

ul>li:first-child>a, .pagination ul>li:first-child>span {
border-left-width: 1px;
-webkit-border-bottom-left-radius: 4px;
border-bottom-left-radius: 4px;
-webkit-border-top-left-radius: 4px;
border-top-left-radius: 4px;
-moz-border-radius-bottomleft: 4px;
-moz-border-radius-topleft: 4px;
}
.pagination ul>li>a, .pagination ul>li>span {
float: left;
padding: 4px 12px;
line-height: 20px;
text-decoration: none;
background-color: #fff;
border: 1px solid #ddd;
border-left-width: 0;
}
</style>
<?php 
	// cuantos adyacentes de cada lado?
	$adjacents = 3;
	$urlFAIL = "";
	
	//$sqlCant = "SELECT * FROM clientes";
	
	$resultCant = mysql_query($sqlCant, $conn);
	$total_pages = mysql_num_rows($resultCant);

	/* variables para la búsqueda */
	$limit = 25;															// filas por página
	if($pag) { $startPag = ($pag - 1) * $limit; } else { $startPag = 0; }		// Si dan un inicio (pag) ajustar para que ahi empiece, si no desde pag = 0

	/* variables para la navegación. */
	if ($pag == 0) $pag = 1;					// si no dan página poner $pag = 1.
	$prev = $pag - 1;							// página anterior - 1
	$next = $pag + 1;							// página siguiente + 1
	$lastpage = ceil($total_pages/$limit);		// última página = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						// última página - 1
	$inirecord = ($pag * $limit) - 9;				// record inicial
	$alrecord = ($inirecord + ($limit - 1));			// último registro de la página

	/* Se graba el código de paginación en una variable para escribirla varias veces si es necesario */
	$pagination = "";
	if($lastpage > 1)
	{	
		$pagination .= "<div class='row-fluid'>					
					<div class='span12'>
						<div class='pagination pull-right'>";
		$pagination .= "<ul class=\"pagination fr\">";
		// boton anteriores
		if ($pag > 1) {
			$pagination.= "<li class=\"previous\"><a href=\"$urlOK.php?pag=$prev$pagGet\">&laquo; Ant</a></li>"; }
		else {
			$pagination.= "<li class=\"previous-off\"><span>« Ant</span></li>";	}
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	// si no tiene suficientes registros no vale la pena partirlos
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $pag)
					$pagination.= "<li class=\"active\"><span>$counter</span></li>";
				else
					$pagination.= "<li><a href=\"$urlOK.php?pag=$counter$pagGet\">$counter</a></li>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	// suficientes páginas para esconder algunas
		{
			// cercanas al inicio
			if($pag < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $pag)
						$pagination.= "<li class=\"active\"><span>$counter</span></li>";
					else
						$pagination.= "<li><a href=\"$urlOK.php?pag=$counter$pagGet\">$counter</a></li>";					
				}
				$pagination.= "<li class=\"active\"><span>..</span></li>";
				$pagination.= "<li><a href=\"$urlOK.php?pag=$lpm1$pagGet\">$lpm1</a></li>";
				$pagination.= "<li><a href=\"$urlOK.php?pag=$lastpage$pagGet\">$lastpage</a></li>";		
			}
			// en madio
			elseif($lastpage - ($adjacents * 2) > $pag && $pag > ($adjacents * 2))
			{
				$pagination.= "<li><a href=\"$urlOK.php?pag=1$pagGet\">1</a></li>";
				$pagination.= "<li><a href=\"$urlOK.php?pag=2$pagGet\">2</a></li>";
				$pagination.= "<li class=\"active\"><span>..</span></li>";
				for ($counter = $pag - $adjacents; $counter <= $pag + $adjacents; $counter++)
				{
					if ($counter == $pag)
						$pagination.= "<li class=\"active\"><span>$counter</span></li>";
					else
						$pagination.= "<li><a href=\"$urlOK.php?pag=$counter$pagGet\">$counter</a></li>";					
				}
				$pagination.= "<li class=\"active\"><span>..</span></li>";
				$pagination.= "<li><a href=\"$urlOK.php?pag=$lpm1$pagGet\">$lpm1</a></li>";
				$pagination.= "<li><a href=\"$urlOK.php?pag=$lastpage$pagGet\">$lastpage</a></li>";		
			}
			// casi al final
			else
			{
				$pagination.= "<li><a href=\"$urlOK.php?pag=1$pagGet\">1</a></li>";
				$pagination.= "<li><a href=\"$urlOK.php?pag=2$pagGet\">2</a></li>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $pag)
						$pagination.= "<li class=\"active\"><span>$counter</span></li>";
					else
						$pagination.= "<li>";					
				}
			}
		}
		
		//next button
		if ($pag < $counter - 1) 
			$pagination.= "<li class=\"next\"><a href=\"$urlOK.php?pag=$next$pagGet\">Sig &raquo;</a></ul>";
		else
			$pagination.= "<li class=\"next-off\"><span>Sig &raquo;</span></li></ul>";
		$pagination.= "</div>
					</div>
				</div>\n";		
	}
	// =========================================================== //
?>
