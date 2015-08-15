<? 
function string_cut($string,$cut_size)
{
 $len=strlen($string); 

  for($i=0;$i<$len;$i++){

  $string_cut=substr($string,$i,1);
  $string_array[$i]=$string_cut;

  }
  for($i=0;$i<$cut_size;$i++) 
  {
   $exp_string .= "$string_array[$i]";
  }

  if($len > $cut_size) {
	 return "$exp_string"." ...";
  }else{
	 return "$exp_string";
  }
}
 


Function list_artc($icon,$section,$query)
{
$date=date("Y-m-d",time());


$res=mysql_query($query);

  if($res)
  {
	echo "<img src='http://phpgroup.com/~seethrou/img/$icon'>";
  	font("<b><font color=navy> $section </font></b>","#000066",3);
  	
  	
  	while($row=mysql_fetch_array($res))
  	{
  		font("&nbsp; <li> ","#445566",2 );
  		href("$d_root/news/read.php3?no=$row[no]"," $row[title1] ",2);
  		font(".../$row[writer]  ","#334455",2);
  	}
  }  

}
?>
