<?
$morevariable="content=$content[0]&cid=$cid&need=$need";

if(!$search_mode){
	 $getstring="type=$type";
}else if($search_mode == "a"){

}
	

if($total > $scale) {

echo("
<p>
<table width=90% border=0 align=center>

<tr><td colspan=4 align=center><font size=2 color=black>

");

if($start+1 > $scale*$page_scale) {
 $pre_start=$start-$scale;
 echo("<a href='$PHP_SELF?start=$pre_start&$getstring&$morevariable'>
<img src=\"img/icon_arr03.gif\" width=\"7\" height=\"9\">
<font color=999999>pre</font> </a>");
}

 for($vj=0;$vj < $page_scale ;$vj++) {
	$ln=($page*$page_scale + $vj)*$scale;
	$vk=$page*$page_scale+$vj+1;
	if($ln<$total){
		if($ln != $start){
		 echo("<a href='$PHP_SELF?start=$ln&$getstring&$morevariable'> $vk </a>");
		}else{ echo "<font size=2 color=FF9700><b>[$vk]</b></font>";}
	}		
 }

if($total > (($page+1)*$scale*$page_scale)) {
 $n_start=($page+1)*$scale*$page_scale;
 echo("<a href='$PHP_SELF?start=$n_start&$getstring&$morevariable'>
<img src=\"img/icon_arr04.gif\" width=\"7\" height=\"9\">
<font color=999999> next</font></a>");
}
 echo("</td></tr></table>");
}

?>
