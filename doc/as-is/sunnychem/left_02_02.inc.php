<!-- file_left -->
<tr><td></td></tr>
<?
 $left_array=array(
"sub_02_01.html?basename=02_02_01"=>"NAPHTHENES",
"sub_02_01.html?basename=02_02_02"=>"DEAROMATIZED HYDROCARBON",
"sub_02_01.html?basename=02_02_03"=>"ISO PARAFFINES",
"sub_02_01.html?basename=02_02_04"=>"NORMAL PARAFFINES",
"sub_02_01.html?basename=02_02_05"=>"OTHER ALIPHATICS",
"sub_02_01.html?basename=02_02_06"=>"SPECIAL BOILING POINT SOLVENTS"
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
