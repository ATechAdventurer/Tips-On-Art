function navon(imgname){document[imgname].src=eval(imgname+"on.src");}
function navover(imgname){document[imgname].src=eval(imgname+"over.src");}
function navoff(imgname){document[imgname].src=eval(imgname+"off.src");}
function isEmpty(obj){if((obj.replace(/ /g,"")).replace(/\r\n/g,"")=="") return true;else return false;}
function genemail(user,domain,suffix){document.write('<a href="'+'mailto:'+user+'@'+domain+'.'+suffix+'">'+user+'@'+domain+'.'+suffix+'</a>');}
function genemail2(user,domain,suffix,text){document.write('<a href="'+'mailto:'+user+'@'+domain+'.'+suffix+'">'+text+'</a>');}

var MM_contentVersion = 5;
var plugin = (navigator.mimeTypes && navigator.mimeTypes["application/x-shockwave-flash"]) ? navigator.mimeTypes["application/x-shockwave-flash"].enabledPlugin : 0;
if (plugin) {
	var words = navigator.plugins["Shockwave Flash"].description.split(" ");
	for (var i = 0; i < words.length; ++i) {
		if (isNaN(parseInt(words[i]))) continue;
		var MM_PluginVersion = words[i]; 
	}
	var MM_FlashCanPlay = MM_PluginVersion >= MM_contentVersion;
} else if (navigator.userAgent && navigator.userAgent.indexOf("MSIE")>=0 && (navigator.appVersion.indexOf("Win") != -1)) {
	document.write('<SCR' + 'IPT LANGUAGE=VBScript\> \n'); //FS hide this from IE4.5 Mac by splitting the tag
	document.write('on error resume next \n');
	document.write('MM_FlashCanPlay = ( Isobject(Createobject("ShockwaveFlash.ShockwaveFlash." & MM_contentVersion)))\n');
	document.write('</SCR' + 'IPT\> \n');
}
function genFlash() {
	if (MM_FlashCanPlay) {
		document.write('<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"');
		document.write('codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"');
		document.write(' ID="toa_flash" width="734" height="142" align="">');
		document.write('<PARAM name=movie VALUE="toa_flash.swf"><PARAM name=loop VALUE=false>');
		document.write('<PARAM name=menu VALUE=false><PARAM name=quality VALUE=high><PARAM name=bgcolor VALUE=#000000>'); 
		document.write('<embed src="toa_flash.swf" loop=false menu=false quality=high bgcolor=#000000 ');
		document.write('swLiveConnect=FALSE width="734" height="142" name="toa_flash" align="" ');
		document.write('TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer">');
		document.write('</embed>');
		document.write('</object>');
	} else document.write('<img src="/images/flash.jpg" width="734" height="142" usemap="#toa_flash" BORDER=0>');
}