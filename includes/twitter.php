<?php

echo '<script type="text/javascript" src = "javascripts/distal/trunk/distal.js"></script>';

Class TwitterWidget {

	private $Float;
	private $HashTag;
	private $TweetsToShow;

	function TwitterWidget($Float, $HashTag, $TweetsToShow) {
		$this->Float=$Float;
		$this->HashTag=$HashTag;
		$this->TweetsToShow=$TweetsToShow;
	}

	function WriteJS() {
		echo '<script>
				function searchTwitter() {
					var node = document.getElementsByTagName("script")[0];
					var script = document.createElement("script");
					node.parentNode.insertBefore(script, node);
					script.src = "http://search.twitter.com/search.json?q=%23' . $this->HashTag . '&callback=searchTwitterCallback";
				}
				function searchTwitterCallback(response) {
					var list = response.results;
					if (list.length>' . $this->TweetsToShow . ') {
						list.length=' . $this->TweetsToShow . ';
					}
					for(var i = 0; i < list.length; i++) {
						list[i].created_at = new Date(list[i].created_at).toLocaleDateString();
					}
					var node = document.getElementById("twitter_box");
					distal(node, response);
				}
			</script>';
	}

	function WriteCSS() {
		echo '<style>
				#twitter_box {
					font: normal 8pt Arial;
					text-align: center;
					width: 100%;
				}
				#twitter_box td {
					vertical-align: top;
					padding: 0.4em 0.4em 0.2em 0.4em;
					background: #eee;
				}
				#twitter_box .name {
					font-size: 6pt;
				}
				#twitter_box .txt {
					text-align: left;
					font-style: italic;
				}
				#twitter_box .date {
					text-align: left;
					font-size: 6pt;
					color: #999
				}
				#twitter_box .name {
					text-align: right;
					font-size: 6pt;
					color: #999
				}
				div.twitter {
					width:30%;
					float: ' . $this->Float . ';
					border: 1px solid #888888;
					border-radius: 7px;
					-moz-box-shadow: 5px 5px 5px #556E0D;
					-webkit-box-shadow: 5px 5px 5px #556E0D;
					box-shadow: 5px 5px 5px #556E0D;
				}
				th.dialog_header {
					font-weight: normal;
					background: #90979B;
					border: solid #A49999 1px;
					border-radius: 5px;
					font-size: 16px;
					color: #000000;
					text-align: center;
					vertical-align: middle;
				}

			</style>';
	}

	function DrawWidget() {
		$this->WriteCSS();
		$this->WriteJS();
		echo '<div class="twitter">
				<table id="twitter_box">
				<tr>
					<th colspan="2" class="dialog_header">' .
						_('Twitter Stream') . ' - ' . '#' . $this->HashTag . '
					</th>
				</tr>
					<tr data-qrepeat="twt results">
						<td>
							<img border="0" style="width:48px" data-qattr="src twt.profile_image_url" />
						</td>
						<td>
							<div class="txt" data-qtext="twt.text"></div>
							<div class="date" style="float: left;" data-qtext="twt.created_at"></div>
							<div class="name" data-qtext="twt.from_user"></div>
						</td>
					</tr>
				</table>
			</div>';
	}

}
?>