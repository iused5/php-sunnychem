<!--
// flashWrite(파일경로, 가로, 세로, 아이디, 배경색, 변수, 윈도우모드)
function flashWrite(url,w,h,id,bg,vars,win){
	// 플래시 코드 정의
		var flashStr=
		"<object classid='clsid:d27cdb6e-ae6d-11cf-96b8-444553540000' codebase='http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0' width='"+w+"' height='"+h+"' id='"+id+"' align='middle'>"+
		"<param name='allowScriptAccess' value='always' />"+
		"<param name='movie' value='"+url+"' />"+
		"<param name='FlashVars' value='"+vars+"' />"+
		"<param name='wmode' value='"+win+"' />"+
		"<param name='menu' value='false' />"+
		"<param name='quality' value='high' />"+
		"<param name='bgcolor' value='"+bg+"' />"+
		"<embed src='"+url+"' FlashVars='"+vars+"' wmode='"+win+"' menu='false' quality='high' bgcolor='"+bg+"' width='"+w+"' height='"+h+"' name='"+id+"' align='middle' allowScriptAccess='always' type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/go/getflashplayer' />"+
		"</object>";

	// 플래시 코드 출력
	document.write(flashStr);

}
-->
