
var xmlhttp;
function loadXMLDoc(url,cfunc){
	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	}else{// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=cfunc;
	xmlhttp.open("GET",url,true);
	xmlhttp.send();
}

function getMessagePage(keyEvent){
	var targetPage;
	switch(keyEvent){
		case "inbox":
			targetPage="applications/modules/messages/inbox.php";
		break;
		case "outbox":
			targetPage="applications/modules/messages/outbox.php";
		break;
		case "compose":
			targetPage="applications/modules/messages/compose.php";
		break;
	}

	loadXMLDoc(targetPage,function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("global_content").innerHTML=xmlhttp.responseText;
		}
	});
}

function viewConversations(cId,aId){
	var targetPage="applications/modules/messages/view_conversations.php?cid="+cId+"&aid="+aId;
	loadXMLDoc(targetPage,function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("global_content").innerHTML=xmlhttp.responseText;
		}
	});
}





/****************************************************************************************
                 Script to read and write cookies from JavaScript
                     Written by Mark Wilton-Jones, 31/12/2001
*****************************************************************************************

Please see http://www.howtocreate.co.uk/jslibs/ for details and a demo of this script
Please see http://www.howtocreate.co.uk/jslibs/termsOfUse.html for terms of use

This script allows you to store and retrieve cookies easily using JavaScript. Cookies
are variables that can be stored on a user's computer and be picked up by any other web
pages in the correct domain. Cookies are set to expire after a certain length of time.

Be warned that many users will not permit cookies on their computers. Do not make your
web sites rely on them. This script provides a return value that says if they accepted
or rejected a cookie.

To use:
_________________________________________________________________________

Inbetween the <head> tags, put:

	<script src="PATH TO SCRIPT/cookie.js" type="text/javascript" language="javascript"></script>

To store a cookie, use:

	var cookieAccepted = setFormInputs( cookieName, cookieValue[, lifeTime[, path[, domain[, isSecure]]]] )

		cookieName is the name of the cookie (as a string) and can contain any characters.

		cookieValue is the value that the cookie stores (as a string) and can contain any characters.

		lifeTime is the amount of time in seconds that you want the cookie to last for (after which
		the user's computer will delete it). The default is until the browser is closed.

		path gives the path or directories that the cookie should be accessible from. The default is
		the current path. Alter this using ../ (up one directory) / starting at the base directory
		and subdirectoryName/ to start from the currentDirectory/subdirectoryName/

		domain gives the domain that the cookie is accessible from. This must have at least one . in it
		and in many browsers it must have at least two. The default is the current domain.

		isSecure can be true or false and says whether or not the cookie is only accessible on sites
		with a secure (https) connection.

If the user rejected the cookie, cookieAccepted will be false. In Opera, if cookies are on prompt,
the failure responce is received immediately, even if the user then accepts the cookie.

To retrieve a cookie, use:

	var myCookie = retrieveFormInputs( cookieNameAsAString );

To modify a cookie, simply set it again with the new settings;

To delete a cookie, use:

	var cookieDeletePermitted = setFormInputs( cookieNameAsAString, '', 'delete' );

	or set lifeTime to a less than 0 value.

If the user rejected the attempt to delete the cookie, cookieDeletePermitted will be false.
_______________________________________________________________________________________*/

function retrieveFormInputs( cookieName ) {
	/* retrieved in the format
	cookieName4=value; cookieName3=value; cookieName2=value; cookieName1=value
	only cookies for this domain and path will be retrieved */
	var cookieJar = document.cookie.split( "; " );
	for( var x = 0; x < cookieJar.length; x++ ) {
		var oneCookie = cookieJar[x].split( "=" );
		if( oneCookie[0] == escape( cookieName ) ) { return oneCookie[1] ? unescape( oneCookie[1] ) : ''; }
	}
	return null;
}

function setFormInputs( cookieName, cookieValue, lifeTime, path, domain, isSecure ) {
	if( !cookieName ) { return false; }
	if( lifeTime == "delete" ) { lifeTime = -10; } //this is in the past. Expires immediately.
	/* This next line sets the cookie but does not overwrite other cookies.
	syntax: cookieName=cookieValue[;expires=dataAsString[;path=pathAsString[;domain=domainAsString[;secure]]]]
	Because of the way that document.cookie behaves, writing this here is equivalent to writing
	document.cookie = whatIAmWritingNow + "; " + document.cookie; */
	document.cookie = escape( cookieName ) + "=" + escape( cookieValue ) +
		( lifeTime ? ";expires=" + ( new Date( ( new Date() ).getTime() + ( 1000 * lifeTime ) ) ).toGMTString() : "" ) +
		( path ? ";path=" + path : "") + ( domain ? ";domain=" + domain : "") + 
		( isSecure ? ";secure" : "");
	//check if the cookie has been set/deleted as required
	if( lifeTime < 0 ) { if( typeof( retrieveFormInputs( cookieName ) ) == "string" ) { return false; } return true; }
	if( typeof( retrieveFormInputs( cookieName ) ) == "string" ) { return true; } return false;
}


/*********************************************************
modified
*/
function createCookie(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

function eraseCookie(name) {
	createCookie(name,"",-1);
}

/****************************************************************************************
                  Script to save or recover the values of form inputs
                   v2.1 written by Mark Wilton-Jones, 11-12/11/2003
         updated 5/10/2005 to allow specific inputs to be included or excluded
                   updated 4/03/2007 to allow Web Forms 2.0 inputs
*****************************************************************************************

Please see http://www.howtocreate.co.uk/jslibs/ for details and a demo of this script
Please see http://www.howtocreate.co.uk/jslibs/termsOfUse.html for terms of use

The script can save the values of:
text inputs
textareas
password inputs (optional)
radio buttons
checkbox inputs
select inputs

To use this, insert the following into the head of your document:

<script src="PATH TO SCRIPT/saveFormValues.js" language="javascript1.2" type="text/javascript"></script>

I suggest using my cookie script to save the form inputs into a cookie, which can be
recovered using the same script (the amount of form information that can be stored
will be limited by the maximum size of document.cookie - 4KB encoded):

<script src="PATH TO SCRIPT/saveFormValues.js" language="javascript1.2" type="text/javascript"></script>
<script src="PATH TO SCRIPT/cookie.js" language="javascript1.2" type="text/javascript"></script>
...
setFormInputs( 'formInputs', getFormString( document.forms.myForm, true ), 604800 );
...
getFormInputs( document.forms.myForm, retrieveFormInputs( 'formInputs' ), true );
...

This header file provides two functions:
var input_values_string = getFormString( reference to the form, bool: include password fields[, optional compareType: compare type, optional string: token list] );
getFormInputs( reference to the form, input_values_string, bool: include password fields[, optional compareType: compare type, optional string: token list] );

Opera 5 and 6 (not 7) will produce a prompt asking for permission to access password
fields. If many of your visitors use this browser, I suggest that you do not save
password values.

The token list option allows you to specify a list of inputs that you want to either
include or exclude from the saved values. The token list is a comma separated list of
name, class, or id values, such as 'name,email,address1'. The compare type option lets
you choose if you want to compare against the name, class (multiple classes are
supported), or id, and if you want to include or exclude inputs that match a token.
Note that the inputs will still need to be within the correct form.
Avaliable compareType values are:
FS_INCLUDE_NAMES   - Include elements with the specified names
FS_EXCLUDE_NAMES   - Exclude elements with the specified names 
FS_INCLUDE_IDS     - Include elements with the specified IDs
FS_EXCLUDE_IDS     - Exclude elements with the specified IDs
FS_INCLUDE_CLASSES - Include elements with the specified classes
FS_EXCLUDE_CLASSES - Exclude elements with the specified classes

Example:
setFormInputs( 'formInputs', getFormString( document.forms.myForm, true, FS_EXCLUDE_NAMES, 'CreditCard,SortCode' ), 604800 );
...
getFormInputs( document.forms.myForm, retrieveFormInputs( 'formInputs' ), true, FS_EXCLUDE_NAMES, 'CreditCard,SortCode' );


It is best not to use this script with forms whose inputs (or select options) are
generated with JavaScript.

Please see http://www.howtocreate.co.uk/tutorials/jsexamples/saveForm.html for
examples of how to use this script, and important notes.
_______________________________________________________________________________________*/

var FS_INCLUDE_NAMES = 0, FS_EXCLUDE_NAMES = 1, FS_INCLUDE_IDS = 2, FS_EXCLUDE_IDS = 3, FS_INCLUDE_CLASSES = 4, FS_EXCLUDE_CLASSES = 5;

function getFormString( formRef, oAndPass, oTypes, oNames ) {
	if( oNames ) {
		oNames = new RegExp((( oTypes > 3 )?'\\b(':'^(')+oNames.replace(/([\\\/\[\]\(\)\.\+\*\{\}\?\^\$\|])/g,'\\$1').replace(/,/g,'|')+(( oTypes > 3 )?')\\b':')$'),'');
		var oExclude = oTypes % 2;
	}
	for( var x = 0, oStr = '', y = false; formRef.elements[x]; x++ ) {
		if( formRef.elements[x].type ) {
			if( oNames ) {
				var theAttr = ( oTypes > 3 ) ? formRef.elements[x].className : ( ( oTypes > 1 ) ? formRef.elements[x].id : formRef.elements[x].name );
				if( ( oExclude && theAttr && theAttr.match(oNames) ) || ( !oExclude && !( theAttr && theAttr.match(oNames) ) ) ) { continue; }
			}
			var oE = formRef.elements[x]; var oT = oE.type.toLowerCase();
			if( oT == 'text' || oT == 'textarea' || ( oT == 'password' && oAndPass ) || oT == 'datetime' || oT == 'datetime-local' || oT == 'date' || oT == 'month' || oT == 'week' || oT == 'time' || oT == 'number' || oT == 'range' || oT == 'email' || oT == 'url' ) {
				oStr += ( y ? ',' : '' ) + oE.value.replace(/%/g,'%p').replace(/,/g,'%c');
				y = true;
			} else if( oT == 'radio' || oT == 'checkbox' ) {
				oStr += ( y ? ',' : '' ) + ( oE.checked ? '1' : '' );
				y = true;
			} else if( oT == 'select-one' ) {
				oStr += ( y ? ',' : '' ) + oE.selectedIndex;
				y = true;
			} else if( oT == 'select-multiple' ) {
				for( var oO = oE.options, i = 0; oO[i]; i++ ) {
					oStr += ( y ? ',' : '' ) + ( oO[i].selected ? '1' : '' );
					y = true;
				}
			}
		}
	}
	return oStr;
}

function getFormInputs( formRef, oStr, oAndPass, oTypes, oNames ) {
	if( oStr ) {
		oStr = oStr.split( ',' );
		if( oNames ) {
			oNames = new RegExp((( oTypes > 3 )?'\\b(':'^(')+oNames.replace(/([\\\/\[\]\(\)\.\+\*\{\}\?\^\$\|])/g,'\\$1').replace(/,/g,'|')+(( oTypes > 3 )?')\\b':')$'),'');
			var oExclude = oTypes % 2;
		}
		for( var x = 0, y = 0; formRef.elements[x]; x++ ) {
			if( formRef.elements[x].type ) {
				if( oNames ) {
					var theAttr = ( oTypes > 3 ) ? formRef.elements[x].className : ( ( oTypes > 1 ) ? formRef.elements[x].id : formRef.elements[x].name );
					if( ( oExclude && theAttr && theAttr.match(oNames) ) || ( !oExclude && ( !theAttr || !theAttr.match(oNames) ) ) ) { continue; }
				}
				var oE = formRef.elements[x]; var oT = oE.type.toLowerCase();
				if( oT == 'text' || oT == 'textarea' || ( oT == 'password' && oAndPass ) || oT == 'datetime' || oT == 'datetime-local' || oT == 'date' || oT == 'month' || oT == 'week' || oT == 'time' || oT == 'number' || oT == 'range' || oT == 'email' || oT == 'url' ) {
					oE.value = oStr[y].replace(/%c/g,',').replace(/%p/g,'%');
					y++;
				} else if( oT == 'radio' || oT == 'checkbox' ) {
					oE.checked = oStr[y] ? true : false;
					y++;
				} else if( oT == 'select-one' ) {
					oE.selectedIndex = parseInt( oStr[y] );
					y++;
				} else if( oT == 'select-multiple' ) {
					for( var oO = oE.options, i = 0; oO[i]; i++ ) {
						oO[i].selected = oStr[y] ? true : false;
						y++;
					}
				}
			}
		}
	}
}