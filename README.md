<h1>unPOSTer</h1>

Tiny PHP API which prevents reposting on page refresh

<strong>[Documentation](http:thielicious.github.io/#unposter_doc) | [Downloads](http:thielicious.github.io/#unposter_dls) | [Examples](http:thielicious.github.io/#unposter_demo) | [Licence](http:thielicious.github.io/#unposter_lic)</strong>

---
<br>

<h3>INTRODUCTION</h3>

Built with PHP (7.09)<br>
**unPOSTer** is a tiny API which prevents form reposting on page refresh. It basically stops you from encountering a re-POST alert prompt. Moreover, it comes with 3 methods that makes it a lil' adjustable - for example whether you would like to keep posted data after refresh or not.
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
	
	$unpost->retrieve("first_name");
	$unpost->retrieve("last_name");
	</code>
</pre>
<br>

<h3>Methods</h3>
**unPOSTer::active(1 || 0)**<br>
parameter '1' activates the API.<br>
**unPOSTer::keepPOST(1 || 0)**<br>
lets you decide whether your POST should remain after page refresh or not.<br>
**unPOSTer::unPOST()**<br>
executes the API.<br>
<br>


<strong>If you encounter any bugs, feel free to open up an [issue](https://github.com/thielicious/unPOSTer/issues), thank you.</strong><br>
---
<a href="http://thielicious.github.io">thielicious.github.io</a>
