# unPOSTer

##### Tiny PHP API which prevents reposting on page refresh

#### [Documentation](http:thielicious.github.io/#unposter_doc) | [Downloads](http:thielicious.github.io/#unposter_dls) | [Examples](http:thielicious.github.io/#unposter_demo) | [Licence](http:thielicious.github.io/#unposter_lic)
---


## INTRODUCTION

Built with PHP (7.09)<br>
**unPOSTer** is a tiny API which prevents form reposting on page refresh. It basically stops you from encountering a re-POST alert prompt.


<h3>SETUP INFORMATION</h3>

Use your CLI and enter the following to clone:<br>
`git clone https://github.com/thielicious/unPOSTer.git`

Or click below to choose your download option:<br>
» [Download unPOSTer](http://thielicious.github.io/#unposter_dls)

Then instantiate and embed it at the top of your PHP page.
For a detailed installation click <a href="http://thielicious.github.io/#unposter_doc">here</a>.


<h3>USAGE</h3>

Create an object and simply adjust it as you like:
```
require_once "unPOSTer.class.php";
$unpost = new unPOSTer("KEEP_POST");
$unpost->unPOST();
```



## Methods
- ## unPOSTer::unPost()
» assigns POST data to the session value and sends it to the header as GET request.

- ## unPOSTer::retrieve("&lt;POST_data&gt;")
» retrieves the session value which actually contains POST data.

- ## unPOSTer::reset()
optional: if you don't want to keep the data, it will clear the session value.


:new: A Demo has been added to this repository.



If you encounter any bugs, feel free to open up an <a href="https://github.com/thielicious/unPOSTer/issues">issue</a>, thank you.
---
<a href="http://thielicious.github.io">thielicious.github.io</a>