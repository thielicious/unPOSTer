# unPOSTer

##### Tiny PHP API which prevents reposting on page refresh

### [Documentation](http:thielicious.github.io/#unposter_doc) | [Downloads](http:thielicious.github.io/#unposter_dls) | [Examples](http:thielicious.github.io/#unposter_demo) | [Licence](http:thielicious.github.io/#unposter_lic)
---

<br>

## INTRODUCTION

Built with PHP (7.09)<br>
**unPOSTer** is a tiny API which prevents form reposting on page refresh. It basically stops you from encountering a re-POST alert prompt.


## SETUP INFORMATION

Use your CLI and enter the following to clone:<br>
`git clone https://github.com/thielicious/unPOSTer.git`

Or click below to choose your download option:<br>
» **[Download unPOSTer](http://thielicious.github.io/#unposter_dls)**

Then instantiate and embed it at the top of your PHP page.<br>
For a detailed installation click **[here](http://thielicious.github.io/#unposter_doc)** here.


## USAGE

Create an object :
```
require_once "unPOSTer.class.php";
$unpost = new unPOSTer("KEEP_POST");
$unpost->unPOST();
```
For a more detailed documentation visit me at [thielicious.github.io](http://thielicious.github.io/#unposter_doc)

### Methods
**unPOSTer::unPost()**<br>
» assigns POST data to the session value and sends it to the header as GET request.

**unPOSTer::retrieve("&lt;POST_data&gt;")**<br>
» retrieves the session value which actually contains POST data.

**unPOSTer::reset()**<br>
» optional: if you don't want to keep the data, it will clear the session value.

<br>
<br>

:new: A **[Demo](https://github.com/thielicious/unPOSTer/tree/master/demo)** has been added to this repository.

###### If you encounter any bugs, feel free to open up an **[issue](https://github.com/thielicious/unPOSTer/issues)**, thank you.

---
**[thielicious.github.io](http://thielicious.github.io)**