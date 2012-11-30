 <section id="intro">
        <h1>Coding Conventions/Style</h1>
   </section>
   <!--end intro-->
   <!--start holder-->
   <div class="holder_content">
      <section class="group4">
It is a core goal of <i>KwaMoja</i> to be easy to read for business people and newcomers to PHP. This requires some compromises, but mostly much of these standards represent good programming practicee and the adoption of conventions which make the code consistently easy to read throughout. As this is a core goal of <i>KwaMoja</i> consistency of style and the adherence to these conventions is regarded as critically important for all new code.
<br />
<br />All code in <i>KwaMoja</i> must conform to these standards.
<br />
<br />
<h3>Function/Class/Variable/Field Naming</h3>
Descriptive names should be used in preference to short variable names:
<br />
eg.
<code>
<blockquote>
$a = 3.14159;</blockquote></code>
should be avoided in favour of:
<code><blockquote>
$Pi = 3.14159;
</blockquote></code>
The variables $i $j and $k can be used as a counters.
<br />As displayed above, there should be one space on either side of an equals sign used to assign the return value of a function to a variable. In the case of a block of related assignments, more space may be inserted to promote readability:
<code><blockquote>
$Short         = foo($bar);
<br />$LongVariable = foo($baz);
</blockquote></code>
Good descriptive variable names consisting of several words appended togther should have the first letter of each word capitalised.
<br />eg.
<code><blockquote>
$longvariablename = 1;
</blockquote></code>
should be written as:
<code><blockquote>
$LongVariableName = 1;
</blockquote></code>
<br />
<h3>HTML</h3>
HTML keywords and tags should be in lower case to improve xhtml compatibility.
<br />
<br />HTML table cell tags in echo statements should use carriage returns to keep cells together so it is easy to see what is in each cell.
<br />eg.
<code><blockquote>
echo '&lt;table&gt;&lt;tr&gt;&lt;td&gt;' . _('Label text') . ':&lt;/td&gt;&lt;td&gt;' . $SomeVariable . '&lt;/td&gt;&lt;td&gt;' . _('Some Other Label') . '&lt;/td&gt;&lt;td align=&quot;right&quot;&gt;'  . number_format($SomeNumber,2) . '&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;';
</blockquote></code>

Would be more easily digested and should be written as:

<code><blockquote>
echo '&lt;table&gt;
<blockquote>&lt;tr&gt;
<blockquote>	&lt;td&gt;' . _('Label text') . ':&lt;/td&gt;
<br />		&lt;td&gt;' . $SomeVariable . '&lt;/td&gt;
<br />		&lt;td&gt;' . _('Some Other Label') . ':&lt;/td&gt;
<br />		&lt;td align=&quot;right&quot;&gt;' . number_format($SomeNumber,2) . '&lt;/td&gt;
</blockquote>&lt;/tr&gt;
</blockquote>  &lt;/table&gt;';
</blockquote></code>
<br />Carriage returns and indentation should be used in a similar way for printf statements.
<br />
<br />All values of xhtml properties should be between double quotes e.g.
<code><blockquote>
&lt;input type=&quot;text&quot; name=&quot;InputBox&quot; value=&quot;Default&quot; /&gt;
</blockquote></code>
<br />This goes hand in hand with using single quotes for all echo statments see below.
<br />
<br />
<h3>Label Strings and Multi-Language</h3>
Since <i>KwaMoja</i> is a multi-language system it is important not to compromise this capability by having labels in your scripts that are not enclosed in the gettext function eg.
<code><blockquote>
echo 'Enter the quantity:&lt;input type=&quot;text&quot; name=&quot;Quantity&quot; /&gt;';
</blockquote></code>
should be written as:
<code><blockquote>
echo _('Enter the quantity') . ':&lt;input type=&quot;text&quot; name=&quot;Quantity&quot; /&gt;';
</blockquote></code>
note that there should be no trailing spaces on the string to be translated inside the _() function call
<br />
<br />
<h3>PHP Variables</h3>
<br />The PHP variable arrays $_POST, $_GET, $_SERVER, $_SESSION provide context about where a variable comes from - many developers are tempted to abbreviate:
<code><blockquote>
$StartingCustomer = $_POST['StartingCustomer'];
</blockquote></code>
or worse:
<code><blockquote>
$s = $_POST['StartingCustomer'];
</blockquote></code>
This should be avoided in favour of using:
<code><blockquote>
$_POST['StartingCustomer']
</blockquote></code>
everywhere it is required so the reader can see where the variable comes from.
<br />However, variables which could come from either a $_GET or a $_POST and/or a $_SESSION may be assigned as in the first example since there is no value in the context.
<br />
<h3>PHP Functions and Keywords</h3>
All PHP keywords must be in lower case
<h3>Quotation Marks</h3>
Notice that single quotes (') are used in preference to double quotes (&quot;) - there is additional overhead for php in parsing data within double quotes. They should only be used where absolutely necessary and concatenation of variables is preferred to having variables inside double quotes.
<br />eg.
<code><blockquote>
echo "Some text with a $Variable";
</blockquote></code>
would be better written as:
<code><blockquote>
echo _('Some text with a') . ' ' . $Variable;
</blockquote></code>
to reduce the parsing job required of the web-server. Notice all strings need to be inside the gettext _() function.
<br />Arrays and super global arrays should always have the element name within single quotes not doubles
<br />eg.
<code><blockquote>
$_POST["FormVariableName"]
</blockquote></code>
should be written as:
<code><blockquote>
$_POST['FormVariableName']
</blockquote></code>
The only exception to this is that when constructing SQL statements, due to the requirement to single quote string literals in SQL statements, the entire SQL string should always be written using double quotes. (See below)
<br />
<br />
<h3>Control Structures</h3>
Where there are many comaparisons new lines should be created for each comparison
<code><blockquote>
if ($OneTwoThree==$_POST['OneTwoThree']<br />
	and $myrow['onetwothree']==$_SESSION['OneTwoThree']) {
</blockquote></code>
All control structures (these include if, for, while, switch) must always use "1 True Brace" style statement blocks.
<br />You are strongly encouraged to always use curly braces even in situations where they are technically optional. Having them increases readability and decreases the likelihood of logic errors being introduced when new lines are added.
<br />eg.
<code><blockquote>
if ($VariableName == true) echo _('Variable was true');
</blockquote></code>
Whilst legal PHP syntax, this should be avoided in favour of the following syntax:
<code><blockquote>
if ($VariableName == true) {
<blockquote>	echo _('Variable was true');</blockquote>
}
</blockquote></code>
Parenthesis should open on the same line (after a space) as the initiating control structure and close the statement block at the same level of indenting as the initiating line.
<br />
<br />Else statements should be on the same line as the closing statment block from the preceeding elseif or if statement eg.
<code><blockquote>
if ($VariableName == true) {
<blockquote>echo 'Variable was true';</blockquote>
} else {
<blockquote>echo 'Variable was false';</blockquote>
} /*end else $VariableName was false*/
</blockquote></code>
This is the only time there should be anything other than a comment on the closing curly brace line. Comments on a closing curly brace line where the block has been quite a few lines of code are encouraged to show the control structure to which they related.
<br />
<br />Whenever a statement block is used code within the block should be one tab indented. Indenting code correctly is critical to avoid logic errors and to imrpove readability.
<br />Function defintions should follow the same conventions.
<br />
<br />Most programming editors have word wrap and this is preferred to manual line breaks.
<br />
<br />
<h3>Spacing</h3>
Where readability is improved lines of code should be separated by a line
<br />
<br />
<h3>Comments</h3>
The code will tend to be self commenting with the aid of long variable names and the addition of the context of variables. However, explanations should be provided wherever possible using C style comment blocks in the format:
<code><blockquote>
/* comments in here */
</blockquote></code>
are preferred. But all comments gratefully received!
<br />All scripts should have a comment in the first few lines with the script name and revision number in it if the following comment is pasted into it the SVN repository automatically updates the revision number.
<code><blockquote>
/* $Id: AccountGroups.php 4735 2011-10-29 05:59:53Z daintree $*/
</blockquote></code>
<br />
<h3Messages</h3>
The standard message function prnMsg should always be used for all messages to be echo'ed to the screen - this function has two parameters - the string to display and the message type , 'error', 'warn', 'success', 'info' - there is a third optional paramter which is a prefix heading for the message.
<br />
<br />
<h3Database Function Calls</h3>
There should never be any database specific calls in scripts other than includes/ConnectDB_XXXX.inc
<br />Where XXXX is the abbreviation for the RDBMS the abstraction code refers to.
<br />All database calls should be performed by calling the abstraction functions in those scripts. (currently only includes/ConnectDB_mysql.inc exists ConnectDB_postgres.inc was depreciated but could easily be revived if we stick with this convention
<br />
<br />
<h3>SQL</h3>
Should be ANSI compliant. Using SQL which is particular to a specific RDBMS is to be avoided in favour of the ANSI equivalent.
<br />
<br />The <i>KwaMoja</i> goal of providing "low footprint" efficient system - requires careful thought. The number of "round trips" must be minimised - never go off to the database to get data that could have been got in a prior query. This is inefficient design and to be avoided.
<br />
<br />Table and field names should alway use lower case and should be descriptive of the data they hold. e.g. Field names such as "nw" should be avoided in favour of "netweight"
<br />
<br />SQL statements should be on several lines for easier reading eg.
<code><blockquote>
$sql = "select transno, trandate, debtortrans.debtorno, branchcode, reference, invtext, order_, rate, ovamount+ovgst+ovfreight+ovdiscount as totalamt, currcode from debtortrans inner join debtorsmaster on debtortrans.debtorno=debtorsmaster.debtorno where ";
</blockquote></code>
is harder to read than:
<code><blockquote>
$sql = "SELECT transno,
<blockquote>trandate,
						<br />debtortrans.debtorno,
						<br />branchcode, reference,
						<br />invtext,
						<br />order_,
						<br />rate,
						<br />ovamount+ovgst+ovfreight+ovdiscount AS totalamt,
						<br />currcode</blockquote>
				FROM debtortrans INNER JOIN debtorsmaster
				<br />ON debtortrans.debtorno=debtorsmaster.debtorno
				<br />WHERE ";
</blockquote></code>
SQL keywords should be capitalised as above eg. SELECT, CASE, FROM, WHERE, GROUP BY, ORDER BY AS INNER JOIN etc.
<br />Line breaks after every comma and on major SQL reserved words as above.
<br />
<br />SQL queries should always &quot;escape&quot; strings using the function &quot;DB_escape_string&quot;, integer values with &quot;intval&quot; function and floating point numbers with &quot;floatval&quot; function, that is to prevent SQL injection attacks.
<br />
<br />Quoting SQL variables - variables incorporated into SQL strings need to be inside SINGLE quotes so that the variable cannot be used by a hacker to send spurious SQL to retrieve private data.
<br />
<br />NOTE: Since variables incorporated into an SQL string need to be quoted with single quotes inside the SQL string, the SQL strings themselves need to be quoted inside double quotes.
<br />
<br />This is the one exception to the general rule to always use single quotes for strings (which makes the parsing job for PHP easier and quicker).
<br />
<br />
<h3>Constants</h3>
Constants should always be all-uppercase, with underscores to separate words. Where it is possible to use a literal instead of a constant then the literal is preferred.
<br />
<br />
<h3>PHP Code Tags</h3>
Always use &lt;?php ?&gt; to delimit PHP code, not the &lt;? ?&gt; shorthand. This is the most portable way to include PHP code on differing operating systems and setups.
     	</section>
  	</div>
   <!--end container-->
   </div>