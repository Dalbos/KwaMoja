<?php
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

echo '<a href="https://github.com/<i>KwaMoja</i>/<i>KwaMoja</i>" target="_blank"><img src="images/github-icon.png" style="float: right" /></a>';
echo '<h1>Development of <i>KwaMoja</i></h1>';
echo '<p>All code contributions must comply with the  ';
echo '<a href="" onclick="return OpenSubWindow(\'CodingGuidelines.php\', \'<i>KwaMoja</i> coding guidelines\')">Coding Guidelines</a></p>';
echo '<img src="images/code.png" style="float: left" />';
echo '<p><i>KwaMoja</i> is written in PHP, HTML, Javascript and sql.</p>';
echo '<p>At <i>KwaMoja</i> we use  <a href="http://git-scm.com/" target=target="_blank">Git</a> for our source code management. We would recommend that developers look at HubFlow described <a href="http://datasift.github.com/gitflow/" target="_blank">here</a> as a good method of using git as part of their workflow. This in turn is based on <a href="http://nvie.com/posts/a-successful-git-branching-model/" target="_blank">GitFlow.</a>. However in the end it is your contribution that is most important. The main repository is held <a href="https://github.com/KwaMoja/KwaMoja" target="_blank">here</a>. This contains two branches, master and develop. The master branch is the one that will be used for releases, and any new work should be merged into the develop branch.</p>';
echo '<p>For full details on how to make a contribution, please look at a standard workflow introduction ';
echo '<a href="" onclick="return OpenSubWindow(\'WorkFlow.php\', \'Git HubFlow example\')">here</a>. However if you just want to send in new scripts, or patches to old ones, then please feel free to send them to <a href="mailto:submissions@<i>KwaMoja</i>.org">submissions@<i>KwaMoja</i>.org</a>.</p>';
echo '<p>No bugs can be closed until they are accompanied by a test, so that any regression errors can be avoided. To write a test use the <a href="http://seleniumhq.org" target="_blank">selenium IDE</a> feature on firefox.</p>';
echo '<p>However it must be remembered that contributing to webERP is about so much more than just writing code. It is vitally important that documentation is kept up to date, that translations are done, and revised every time a string gets changed, queries are answered on the mailing lists and the forums, bugs are reported, and so much more.</p>';
echo '<img src="images/feature.png" style="float: left" />';
echo '<h2>A new feature for <i>KwaMoja</i>?</h2>';
echo '<p>If you have a new feature that you want implemented in <i>KwaMoja</i>, the first step would be to join the developers mailing list, and then write to the list detailing your idea. There are many experienced developers there who can give you some guidance on what you are trying to achieve. Once you have a good feeling for what you are trying to do, then write a full proposal on the wiki and link this to the mailing list discussion. From here a more detailed specification of the feature can be built. If you are not a developer yourself then this is the point that you must get the attention of a developer, and the better the specification the more likely you are to find a developer willing to help.</p>';
echo '<p>If you are a developer then you can now clone the develop branch and start working on your feature. Don\'t forget to frequently push your branch back to github so that other developers can help with your new feature.</p>';
echo '<p>When the feature is complete issue a pull request on github, and also make a statement on the mailing list informing others of your work.</p>';
?>