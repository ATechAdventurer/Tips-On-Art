<html>
<title>Be Involved - Tips on Art</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="stylesheet" href="/jsscripts/fonts.css" type="text/css">
<link rel="stylesheet" href="/jsscripts/print.css" type="text/css" media="print">
<script language="JavaScript" src="/jsscripts/main.js"></script>
<script language="JavaScript">
function valform() {
	with (document.info) {
		var emailExp = /^([a-zA-Z0-9._-]+)@([a-zA-Z0-9-])+(\.[a-zA-Z0-9-]+)+$/;
		var errors = "";
		if (isEmpty(first_name.value)) errors += " First Name\n";
		if (isEmpty(last_name.value)) errors += " Last Name\n";
		if (email.value.search(emailExp) == -1) errors += " Valid Email Address\n";
		if (comments.value.length > 2500) errors += " Comments must be 2500 characters or less\n";
		if (specific_interests.value.length > 2500) errors += " Specific Interests must be 2500 characters or less\n";
		if (errors != "") {
			alert("     Missing Data\n\nPlease fill in the following required fields:\n===============================\n"+errors+"===============================\n\n Thanks.");
			return false;
		} else return true;
	}
}
</script>
<map name="logo"><area shape="rect" coords="23,0,159,108" href="/" alt="Tips on Art"></map>
<body><a name="top"></a>
<div class="bgblk"><img src="/images/pgtop.jpg" width="780" height="121" border="0" alt="" usemap="#logo"><div class="nav"><a href="/">Home</a><a href="/programs/">Programs</a><a href="/facility/">Facility</a><a href="/tip_board/">Tip Board</a><a href="/news_events/">News & Events</a><span class="navover"><a href="/be_involved/">Be Involved</a></span><a href="/store/">Store</a><a href="/about_us/">About Us</a><a href="/contact_us/">Contact Us</a><a href="/links/">Links</a></div></div><div style="margin:0px 23px 0px 23px;"><img src="/images/nav_btm.gif" width="734" height="12" border="0" alt=""></div><div id="container">
	<div id="left"><h1>Be Involved</h1><div class="snav"><a href="/#con">Contribute</a><br><a href="/#do">Donate Online</a><br><a href="/#aodo">Another Online Opportunity</a><br><a href="/#cs">Coming Soon</a><br><a href="/#jel">Join Email List</a><br><a href="/#mem">Membership</a><br><a href="/#vol">Volunteer</a></div></div>
	<div id="content_wide"><h4>Please fill out the form below to get on our mailing list.</h4><p>Please give us your first name, last name, address, phone number and email (required - marked with "*"). The questions below are optional. However, your feedback would be helpful by telling us how people are getting to know about us and how we can improve our programs and our web site.</p><form name="info" method="post" action="join_rec.php" onsubmit="return valform()"><h3>Your Information</h3>
		<table cellpadding="2" cellspacing="0" border="0" width="546">
			<tr>
				<td align="right">*First Name:</td>
				<td><input type="text" name="first_name" size="20" maxlength="50" style="width:200px"></td>
			</tr>
			<tr>
				<td align="right">*Last Name:</td>
				<td><input type="text" name="last_name" size="20" maxlength="50" style="width:200px"></td>
			</tr>
			<tr>
				<td colspan="2" class="sm">Please enter your full name in the boxes above. If you are married with the same last name, please include both first names in the the �First Name' box. Ex. �Fred and Wilma' in the �First Name' box and �Flintstone' in the Last Name box.</td>
			</tr>
			<tr>
				<td align="right">Title:</td>
				<td><input type="text" name="title" size="20" maxlength="50" style="width:200px"></td>
			</tr>
			<tr>
				<td align="right">Organization:</td>
				<td><input type="text" name="organization" size="20" maxlength="50" style="width:200px"></td>
			</tr>
			<tr>
				<td align="right">Website:</td>
				<td><input type="text" name="website" size="20" maxlength="100" style="width:300px"></td>
			</tr>
			<tr>
				<td colspan="2"><br><h3>Partner Information</h3></td>
			</tr>
			<tr>
				<td align="right">First Name:</td>
				<td><input type="text" name="partner_first_name" size="20" maxlength="50" style="width:200px"></td>
			</tr>
			<tr>
				<td align="right">Last Name:</td>
				<td><input type="text" name="partner_last_name" size="20" maxlength="50" style="width:200px"></td>
			</tr>
			<tr>
				<td colspan="2" class="sm">If you have a partner with a different last name and you live together, please enter your partner's name in the boxes above.</td>
			</tr>
			<tr>
				<td colspan="2"><br><h3>Home Contact Information</h3></td>
			</tr>
			<tr>
				<td align="right">Address:</td>
				<td><input type="text" name="home_address" size="20" maxlength="50" style="width:200px"></td>
			</tr>
			<tr>
				<td align="right">City:</td>
				<td><input type="text" name="home_city" size="20" maxlength="50" style="width:200px"></td>
			</tr>
			<tr>
				<td align="right">State:</td>
				<td><input type="text" name="home_state" size="15" maxlength="25" style="width:150px"></td>
			</tr>
			<tr>
				<td align="right">Zip:</td>
				<td><input type="text" name="home_zip" size="10" maxlength="10" style="width:80px"></td>
			</tr>
			<tr>
				<td align="right">Home Phone:</td>
				<td><input type="text" name="home_phone" size="15" maxlength="25" style="width:150px"></td>
			</tr>
			<tr>
				<td colspan="2" class="sm">Please enter number like 123-456-7890.</td>
			</tr>
			<tr>
				<td colspan="2"><br><h3>Work Contact Information</h3></td>
			</tr>
			<tr>
				<td align="right">Address:</td>
				<td><input type="text" name="work_address" size="20" maxlength="50" style="width:200px"></td>
			</tr>
			<tr>
				<td align="right">City:</td>
				<td><input type="text" name="work_city" size="20" maxlength="50" style="width:200px"></td>
			</tr>
			<tr>
				<td align="right">State:</td>
				<td><input type="text" name="work_state" size="15" maxlength="25" style="width:150px"></td>
			</tr>
			<tr>
				<td align="right">Zip:</td>
				<td><input type="text" name="work_zip" size="10" maxlength="10" style="width:80px"></td>
			</tr>
			<tr>
				<td align="right">Work Phone:</td>
				<td><input type="text" name="work_phone" size="15" maxlength="25" style="width:150px"></td>
			</tr>
			<tr>
				<td colspan="2" class="sm">Please enter number like 123-456-7890.</td>
			</tr>
			<tr>
				<td colspan="2"><br><h3>Other Information</h3></td>
			</tr>
			<tr>
				<td align="right">Preferred Address:</td>
				<td colspan="2">
					<table cellpadding="0" cellspacing="0" border="0">
						<tr>
							<td><input type="radio" class="rch" name="preferred_address" value="Home" checked="true"></td>
							<td>&nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td><input type="radio" class="rch" name="preferred_address" value="Work"></td>
							<td>&nbsp;Work</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td align="right"><input type="checkbox" class="rch" name="mailing_list" value="Yes" checked="true"></td>
				<td>Do you want to be on our mailing list?</td>
			</tr>
			<tr>
				<td align="right">*Email:</td>
				<td><input type="text" name="email" size="20" maxlength="50" style="width:200px"></td>
			</tr>
			<tr>
				<td align="right"><input type="checkbox" class="rch" name="eannouncements" value="Yes" checked="true"></td>
				<td>Do you want to receive our e-announcements?</td>
			</tr>
			<tr>
				<td colspan="2" class="sm">(Please know that your information is for our organizational use and development and will not be sold to any third parties)</td>
			</tr>
			<tr>
				<td colspan="2"><br>How did you hear or find out about TIPS On Art? What do you think of our programs?<br>How might we improve them? What do you think of our web site? How might we improve it?<br><textarea name="comments" cols="60" rows="4"></textarea></td>
			</tr>
			<tr>
				<td colspan="2"><br>Do you have a specific interest(s) that we can address?<br><textarea name="specific_interests" cols="60" rows="4"></textarea></td>
			</tr>
			<tr>
				<td colspan="2"><br><input type="submit" value="Submit" class="btn"></td>
			</tr>
		</table>
<p><a href="#top">Back to Top</a></p><div id="footer"><p><span class="pink">Sharing tips.</span> <span class="orange">Advancing art.</span> <span class="grn">Expanding minds.</span><br>We are better together.</p><p class="sm"><a href="/">Home</a> | <a href="/programs/">Programs</a> | <a href="/facility/">Facility</a> | <a href="/tip_board/">Tip Board</a> | <a href="/news_events/">News & Events</a> | <a href="/be_involved/">Be Involved</a> | <a href="/store/">Store</a> | <a href="/about_us/">About Us</a> | <a href="/contact_us/">Contact Us</a> | <a href="/links/">Links</a> | <a href="/site_map/">Site Map</a> | <a href="/privacy_policy/">Privacy Policy</a><br>&#169; TIPS On Art 2009. All Rights Reserved.</div></div>
</div>
</body>
</html>