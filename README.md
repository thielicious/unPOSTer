<h1>unPOSTer</h1>

Tiny PHP API which prevents reposting on page refresh

<strong>[Documentation](http:thielicious.github.io/#unposter_doc) | [Downloads](http:thielicious.github.io/#unposter_dls) | [Examples](http:thielicious.github.io/#unposter_demo) | [Licence](http:thielicious.github.io/#unposter_lic)</strong>

---
<br>

<h3>INTRODUCTION</h3>

Built with PHP (7.09)<br>
<strong>unPOSTer</strong> is a tiny API which prevents form reposting on page refresh. It basically stops you from encountering a re-POST alert prompt.
<br>
<br>


<h3>SETUP INFORMATION</h3>

<SETUP TEXT>
<br>
<br>
Use your CLI and enter the following to clone:<br>
<code>
git clone https://github.com/thielicious/unPOSTer.git
</code><br>
<br>
Or click below to choose your download option:<br>
» <a href="http://thielicious.github.io/#unposter_dls">Download unPOSTer</a>
<br>
<br>
Then instantiate and embed it at the top of your PHP page.<br>
For a detailed installation click <a href="http://thielicious.github.io/#unposter_doc">here</a>.
<br>
<br>


<h3>USAGE</h3>

Create an object and simply adjust it as you like:<br>
<pre>
	<code>
	require_once "unPOSTer.class.php";
	$unpost = new unPOSTer("KEEP_POST");
	$unpost->unPOST();
	</code>
</pre>
<br>

<h3>Methods</h3>
<strong>unPOSTer::unPost()</strong><br>
» assigns POST data to the session value and sends it to the header as GET request.<br>
<strong>unPOSTer::retrieve("&lt;POST_data&gt;")</strong><br>
» retrieves the session value which actually contains POST data.<br>
<strong>unPOSTer::reset()</strong><br>
optional: if you don't want to keep the data, it will clear the session value.<br>
<br>
A Demo has been added to this repository.<br>


If you encounter any bugs, feel free to open up an <a href="https://github.com/thielicious/unPOSTer/issues">issue</a>, thank you.<br>
---
<a href="http://thielicious.github.io">thielicious.github.io</a>
