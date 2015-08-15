<!-- file_left -->
<tr><td></td></tr>
<?
 $left_array=array(
"sub_02_01.html?basename=02_01_01"=>"B/T/X",
"sub_02_01.html?basename=02_01_02"=>"HEAVY AROMATICS"
 );

list($key,$val)=each($left_array);
foreach($left_array as $key=>$val){
?>
<tr><td height=28><table width=100% border=0 cellpadding=0 cellspacing=0><tr><td width=28></td><td>
<a href="<?=$key;?>"><?=$val;?></a>
</td></tr></table></td></tr>
<? } ?>
<tr><td></td></tr>
<!-- file_left -->
