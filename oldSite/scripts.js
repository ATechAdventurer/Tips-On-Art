var newWindow = null;
	function openIt(url,width,height) 	{
		ALERT(URL);
		if (!newWindow || newWindow.closed) 
		{
			newWindow=window.open(url,"newWindow","width=" + width +",height=" + height + ",status=no,toolbars=no,menubar=no,scrollbars=1,resizable=1");
		} else {
			newWindow=window.open(url,"newWindow","width=" + width +",height=" + height + ",status=no,toolbars=no,menubar=no,scrollbars=1,resizable=1");
			newWindow.focus();
		}
	}
	
