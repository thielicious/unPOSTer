#unPOSTer

Tiny PHP API which prevents reposting on page refresh

#### [Documentation](http:thielicious.github.io/#unposter_doc) | [Downloads](http:thielicious.github.io/#unposter_dls) | [Examples](http:thielicious.github.io/#unposter_demo) | [Licence](http:thielicious.github.io/#unposter_lic) ####

---
<br>

##INTRODUCTION

Built with PHP (7.09)<br>
**unPOSTer** is a tiny API which prevents form reposting on page refresh. It basically stops you from encountering a re-POST alert prompt. Moreover, it comes with 3 methods that makes it a lil' adjustable - for example whether you would like to keep posted data after refresh or not.
<br>
<br>


##SETUP INFORMATION

<SETUP TEXT>
<br>
<br>
Use your CLI and enter the following to clone:<br>
<code>
git clone https://github.com/thielicious/unPOSTer.git
</code><br>
<br>
Or click below to choose your download option:<br>
» [Download unPOSTer](http://thielicious.github.io/#unposter_dls)
<br>
<br>
Then instantiate and embed it at the top of your PHP page.<br>
For a detailed installation click [here](http://thielicious.github.io/#unposter_doc).
<br>
<br>


##USAGE

Create an object and simply adjust it as you like:<br>
<pre>
	<code>
	require_once "unPOSTer.class.php";
	$unpost = new unPOSTer();
	$unpost->active(1);
	$unpost->unPOST();
	</code>
</pre>
<br>

###Methods
**unPOSTer::active(1 || 0)**<br>
parameter '1' activates the API.<br>
**unPOSTer::keepPOST(1 || 0)**<br>
lets you decide whether your POST should remain after page refresh or not.<br>
**unPOSTer::unPOST()**<br>
executes the API.
<br>
<br>

**If you encounter any bugs, feel free to open up an [issue](https://github.com/thielicious/unPOSTer/issues), thanks.<br>
---
[thielicious.github.io] (http://thielicious.github.io)
