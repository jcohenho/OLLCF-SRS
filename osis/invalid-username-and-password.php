<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en_US" lang="en_US" dir="ltr">
<head>
  <base href="http://demo.socialengine.net/" />

    
      <title>Control Panel</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Language" content="en-US" />

      <link href="/application/css.php?request=application/modules/Core/externals/styles/admin/main.css&amp;c=3" media="screen" rel="stylesheet" type="text/css" />
<link href="/favicon.ico?c=3" rel="favicon" type="image/x-icon" />
  

    
    <script type="text/javascript">
      </script>

    <script type="text/javascript" src="/externals/mootools/mootools-1.2.4-core-yc.js?c=3"></script>
<script type="text/javascript" src="/externals/mootools/mootools-1.2.4.4-more-yc.js?c=3"></script>
<script type="text/javascript" src="/externals/chootools/chootools.js?c=3"></script>
<script type="text/javascript" src="/application/modules/Core/externals/scripts/core.js?c=3"></script>
<script type="text/javascript" src="/application/modules/User/externals/scripts/core.js?c=3"></script>
<script type="text/javascript" src="/externals/smoothbox/smoothbox4.js?c=3"></script>
<script type="text/javascript">
    //<![CDATA[

    Date.setServerOffset('Mon, 7 Feb 2011 7:04:12 +0000');

    en4.orientation = 'ltr';
    en4.core.environment = 'production';
    en4.core.language.setLocale('en_US');
    en4.core.setBaseUrl('/');
    en4.core.loader = new Element('img', {src: 'application/modules/Core/externals/images/loading.gif'});

            if( false ) {
      en4.core.dloader.attach();
    }
        //]]>
</script>
<script type="text/javascript"></script>

<script type="text/javascript" src="application/modules/Activity/externals/scripts/core.js?c=3"></script>

  
  <!-- vertical scrollbar fix -->
  <style type="text/css">
    html, body
    {
      overflow-y: auto;
      margin: 0px;
    }
  </style>
</head>
<body id="global_page_core-admin-auth-login">
  <span id="global_content_simple">
    
<style type="text/css">
  html { height: 100%; }
</style>

<div class="admin_auth_reauthenticate">

  
  <div class="settings">
    <form enctype="application/x-www-form-urlencoded" class="global_form" action="/admin/auth/login" method="post"><div><div><h3>Admin Sign In</h3>
<p class="form-description">To access the control panel, please provide your administrator username and password.</p>
<ul class="form-errors"><li>Admin Username<ul class="errors"><li>Please complete this field - it is required.</li></ul></li><li>Password<ul class="errors"><li>Please complete this field - it is required.</li></ul></li></ul>
<div class="form-elements">
<div id="username-wrapper" class="form-wrapper"><div id="username-label" class="form-label"><label for="username" class="required">Admin Username</label></div>
<div id="username-element" class="form-element">
<input type="text" name="username" id="username" value="" /></div></div>

<div id="password-wrapper" class="form-wrapper"><div id="password-label" class="form-label"><label for="password" class="required">Password</label></div>
<div id="password-element" class="form-element">
<input type="password" name="password" id="password" value="" />
<p class="description">(password is &quot;admin&quot;)</p></div></div>
<div id="execute-wrapper" class="form-wrapper"><div id="execute-label" class="form-label">&nbsp;</div><div id="execute-element" class="form-element">
<button name="execute" id="execute" type="submit">Sign In</button></div></div></div></div></div></form>  </div>

</div>  </span>
</body>
</html>