<?php

error_reporting(-1);
echo '<script>

function OpenSubWindow(TargetURL, title) {
	document.getElementById("Mask").setAttribute("class", "mask");
	document.getElementById("SubWindow").setAttribute("class", "subbox");
	document.getElementById("title_bar").setAttribute("class", "title_bar");
	document.getElementById("title_bar").innerHTML=title+\'<div onClick="CloseSubWindow()" class="exit" title="Close this form">X</div>\';
	document.getElementById("SubWindow").style.opacity=0;
	document.getElementById("contents").setAttribute("class", "contentbox");
	window.getComputedStyle(document.getElementById("SubWindow")).opacity;
//	ExpandWindow(51, 51, 51, 51, 1, 1, 1, 1, document.getElementById("contents"));
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else {// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById(\'contents\').innerHTML=xmlhttp.responseText;
		}
//		MakePageInVisible();
	}
	xmlhttp.open("GET",TargetURL,true);
	xmlhttp.send();
	document.getElementById("SubWindow").style.opacity=0.9;
	return false;
}

function CloseSubWindow() {
	document.getElementById("Mask").setAttribute("class", "unmask");
	document.getElementById("contents").innerHTML="";
	document.getElementById("SubWindow").innerHTML="<div id=\"title_bar\"></div><div id=\"contents\"></div>";
	document.getElementById("SubWindow").removeAttribute("class", "subbox");
}
</script>';

?>

		<div class="content">
			<img src="images/community.png" style="float: left" />
			<h1><u>Read and Follow the <i>KwaMoja</i> Code of Conduct....</u></h1>
			<p>It is a fundamental principle in the <i>KwaMoja</i> project that we all treat each other with honesty and politeness. All members of the community whether you be developer, translator, bug reporter, user, documentor, or contribute in any other way, you must read and abide by the project <a href="" onclick="return OpenSubWindow('CodeOfConduct.php', '<i>KwaMoja</i> Code Of Conduct')">Code of Conduct</a></p>
			<p>Our primary focus is to make contributing to the project a fun and interesting experience for everyone, and dishonest or abusive behaviour will not be tolerated.</p>
			<img src="images/chat.png" style="float: right" />
			<h1><u>....many ways to communicate with each other</u></h1>
			<p>Good communication is essential to the success of any open source project. For this reason we have decided to make communication central to every aspect of the project.</p>
			<p>Developers have a mailing list to which you can <a href="https://lists.sourceforge.net/lists/listinfo/kwamoja-development" target="_blank">subscribe to here</a> where technical issues can be discussed. It is our experience that developers tend to prefer mailing lists. There are <a href="http://www.kwamoja.com/forums"  target="_blank">Forums</a> for discussions on a variety of topics. There is a <a href="http://www.kwamoja.com/wiki/tiki/tiki-index.php"  target="_blank">Wiki</a> where users and developers can make notes, and share ideas, follow us on <a href="https://twitter.com/<i>KwaMoja</i>" target="_blank">twitter</a>, or if you just fancy a chat on any subject that takes your fancy drop into our irc chat room (#<i>KwaMoja</i> on irc.freenode.net) .</p>
			<p>The only thing we ask is that you treat each other with politeness and good humour, as laid out in our <a href="" onclick="return OpenSubWindow('CodeOfConduct.php', '<i>KwaMoja</i> Code Of Conduct')">Code of Conduct</a></p>
			<img src="images/Government.png" style="float: left" />
			<h1><u>Practice good governance....</u></h1>
			<p>It is our intention that the <i>KwaMoja</i> project be goverened by a board of governors who will have the last word in settling disputes.</p>
			<p>It is our intenion that this board will be elected by the users and developers of <i>KwaMoja</i>. </p>
			<p>However this is obviously something that can only happen once the project has gained some traction. In the interim the board of governors shall consist of the project founders. It is hoped to keep this interim delay as short as possible.</p>
			<h1><u>....and have fun</u></h1>
			<p>Above everything else contributing to the project in whatever way should be fun, and interesting. Lets all make sure we keep it that way.</p>
		</div>

