<table border=0 cellpadding=0 cellspacing=0 width="555" align=center>
  <tbody> 
  <tr> 
    <td colspan=3><img height=32 
                                src="img/loginbox_top.gif" 
                                width=555></td>
  </tr>
  <tr> 
    <td width=48><img height=89 
                                src="img/loginbox_left.gif" width=48></td>
    <td width=460> 
      <table border=0 cellpadding=0 cellspacing=0 
                                width="100%">
        <tbody> 
        <tr> 
          <td>
            <div align="center"><img src="img/loginbox_lock.gif" height="80"> 
            </div>
          </td>
          <td width=4><img height=89 src="img/loginbox_line.gif" width=4></td>
          <td width=220> 
            <table border=0 cellpadding=0 cellspacing=0 width="100%">
                <tbody> 
<?
if($url_log=="simple_log"){
echo "
<form action='$home_url/simple_log.php' method='post'>
<input type=hidden name=log_mode value='in'>
<input type=hidden name=re_url value='$home_url/quickds_admin/index.html'>
<input type=hidden name=home_url value='$home_url'>
";
}else{
echo "
<form action='$home_url/log.php' method='post'>
<input type=hidden name=log_mode value='in'>
<input type=hidden name=re_url value='$home_url/quickds_admin/index.html'>
<input type=hidden name=home_url value='$home_url'>
";
}

?>
                <tr> 
                  <td> 
                    <div align=right><img height=11 
                                src="img/id.gif" width=52></div>
                  </td>
                  <td>
                    <input name=member_id size=15>
                  </td>
                </tr>
                <tr> 
                  <td colspan=2 height=10> 
                    <table align=center border=0 cellpadding=0 
                                cellspacing=0 width="80%">
                      <tbody> 
                      <tr> 
                        <td bgcolor=#cccccc 
                                height=1></td>
                      </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr> 
                  <td> 
                    <div align=right><img height=11 
                                src="img/pass.gif" width=52></div>
                  </td>
                  <td>
                    <input name=passwd size=15 type=password>
                  </td>
                </tr>
                </tbody>
            </table>
          </td>
          <td width=70>
            <input src="img/btn_login.gif" type=image width=60 name="image">
          </td>
        </tr>
</form>
        </tbody>
      </table>
    </td>
    <td width=47><img height=89 
                                src="img/loginbox_frght.gif" 
                                width=47></td>
  </tr>
  <tr> 
    <td colspan=3><img height=32 src="img/loginbox_down.gif" width=555></td>
  </tr>
  <tr> 
<td colspan=3>
<div>
&nbsp;
<font color=336699>E-MAIL</font>
<a href=\"mailto:webmaster@anyhomepage.com\">webmaster@anyhomepage.com</a>
<font color=336699>TEL</font>
02-521-8157
&nbsp;
<a href=<? echo "$home_url/index.html"; ?>>
<font color=336699>
<u><? echo "$home_url"; ?></u>
</font>
</a>
</div>
</td>
  </tr>
  </tbody>
</table>
