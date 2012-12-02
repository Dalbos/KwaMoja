<?php

$Twitter=new TwitterWidget('right', 'kwamoja', 8);
echo '<script>setInterval("searchTwitter()", 30000);</script>';
?>
		<input type="radio" id="tab-1" name="tab-group-1" checked />
		<label for="tab-1">Home</label>
		<div class="content">
			<div class="main">
				<img src="images/logo.png" class="logo" style="float:left; padding: 0px;" />
					<h1><u><font color="#595956"> Welcome to <i>KwaMoja</i></font></u></h1>
					<h2><font color="#595956"><u> Business Management Software</u></font></h2>
						<p> <i>KwaMoja</i> is designed to help you manage your business in a more efficient and profitable manner.&nbsp;
							It combines your book keeping needs with all the tools to plan your inventory purchases.&nbsp;
					<img src="images/screen1.png" class="main" style="float:right;" />
							It will let you know when your factory needs to start manufacturing parts in order to keep up with orders.&nbsp;
							It will help you better manage your cash flow. All these and more will help your business
							become more efficient, and greater efficiency will equal greater profits.</p>
						<p> <i>KwaMoja</i> is a fork of the once popular <a href="http://www.weberp.org" target="_blank">webERP project</a>.&nbsp;
					<img src="images/screen2.png" class="main" style="float:left;" />
							WebERP has suffered in recent years with an increasingly abusive and dictatorial style of management,&nbsp;
							which has seen the number of downloads go into decline.&nbsp;Many of us felt that the time was right to move the project
							on in a more open and community driven style.</p>
						<p> <i>KwaMoja</i> will also put in place a proper testing suite that was always been lacking in webERP. We intend to stick
							to the basic design principles while making contributing an easier and pleasanter experience than it was on webERP.&nbsp;
					<img src="images/screen3.png" class="main" style="float:right;" />
							The coding guidelines will be observed consistently for all contributions rather than in the ad hoc manner of the past.
						<p> <i>KwaMoja</i> is Free software released under the GPL v2 License. A copy of which can be found
							<a href="http://www.gnu.org/licenses/gpl-2.0.html" target="_blank">here,</a> and a copy is also distributed with the code.  It is important to note that the copyright of the code, both past and future contributions, belongs to the author of that code, and no single person or entity can claim ownership of that copyright.</p>
						<p> Please use, enjoy, and hopefully contribute back to the project!</p>

			</div>
			<?php $Twitter->DrawWidget() ?>
		</div>