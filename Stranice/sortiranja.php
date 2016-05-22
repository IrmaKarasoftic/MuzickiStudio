<?php

function sortiranjeAbecedno($prvi, $drugi)
{
	$prvi = strtoupper($prvi);
	$drugi = strtoupper($drugi);
	return $prvi[0] > $drugi[0];
}

function sortiranjePoDatumu($prvi, $drugi)
{
	$prvi_pom = explode("%",$prvi);
	$drugi_pom = explode("%",$drugi);
	$datum1 = $prvi_pom[1];
	$datum2 = $drugi_pom[1];
	return strtotime($datum1) < strtotime($datum2);
}

?>