<SCRIPT language="JavaScript">
self.onError=null;
currentX = currentY = 0;
whichIt = null;
lastScrollX = 0; lastScrollY = 0; NS = (document.layers) ? 1 : 0; IE = (document.all) ? 1: 0;

function heartBeat() {
if(IE) {
diffY = document.body.scrollTop;
diffX = 0;
}
if(NS) {
diffY = self.pageYOffset; diffX = self.pageXOffset;
}
if(diffY != lastScrollY) {
percent = .1 * (diffY - lastScrollY);
if(percent > 0) percent = Math.ceil(percent);
else percent = Math.floor(percent);
if(IE) document.all.scroll_banner.style.pixelTop += percent;
if(NS) document.scroll_banner.top += percent;
lastScrollY = lastScrollY + percent;
}
if(diffX != lastScrollX) {
percent = .1 * (diffX - lastScrollX);
if(percent > 0) percent = Math.ceil(percent);
else percent = Math.floor(percent);
if(IE) document.all.scroll_banner.style.pixelLeft += percent;
if(NS) document.scroll_banner.top += percent;
lastScrollY = lastScrollY + percent;
}
}
if(NS || IE) action = window.setInterval("heartBeat()",1);
</SCRIPT>


<DIV id="scroll_banner" style=" position:absolute;left:expression((document.body.clientWidth)/2 + 465); top:152px; visibility:visible;">

<!--
<img src="img/right.gif" border=0 usemap="#map_right">
<MAP name=map_right>
    <AREA href="sub_02_01.html?lc=10000000" shape=rect coords=5,269,54,289>
    <AREA href="sub_02_01.html?lc=9000000" shape=rect coords=5,245,54,265>
    <AREA href="sub_02_01.html?lc=8000000" shape=rect coords=4,219,53,239>
    <AREA href="sub_02_01.html?lc=7000000" shape=rect coords=9,195,58,215>
    <AREA href="sub_02_01.html?lc=6000000" shape=rect coords=8,170,57,190>
    <AREA href="sub_02_01.html?lc=5000000" shape=rect coords=7,143,56,163>
    <AREA href="sub_02_01.html?lc=4000000" shape=rect coords=6,120,55,140>
    <AREA href="sub_02_01.html?lc=3000000" shape=rect coords=4,95,53,115>
    <AREA href="sub_02_01.html?lc=2000000" shape=rect coords=4,70,53,90>
    <AREA href="sub_02_01.html?lc=1000000" shape=rect coords=4,45,53,65>
    <AREA href="#top" shape=rect coords=3,310,52,330>
  </MAP>
//-->
<? include "left.inc.php"; ?>
</DIV> 
