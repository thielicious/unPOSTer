#unPOSTer
Tiny PHP API which prevents reposting on page refresh
<br><br>

##INTRODUCTION
**unPOSTer** is a tiny class which prevents form reposting on page refresh. It basically stops you from encountering a re-POST alert prompt. Moreover, it comes with 3 methods that makes it a lil' adjustable - for example whether you would like to keep posted data after refesh or not.

##INSTALLATION
Download this script from GitHub here or use your CLI and enter the following:<br>
<code>
	git clone https://github.com/thielicious/unPOSTer.git
</code><br>
Then instantiate and embed it at the top of your PHP page.

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
parameter '1' activates the API.
**unPOSTer::keepPOST(1 || 0)**<br>
lets you decide whether your POST should remain after page refresh or not.
**unPOSTer::unPOST()**<br>
executes the API.
<br>
If you encounter any bugs, open an issue.<br>

Enjoy, 

Thielicious
<br>
<br>

http://thielicious.github.io

	