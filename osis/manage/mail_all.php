  <div class="settings">
    <form enctype="application/x-www-form-urlencoded" class="global_form" action="/admin/message/mail" method="post"><div><div><h3>Email All Members</h3>
<p class="form-description">Using this form, you will be able to send
an email out to all of your members. Emails are sent out using a queue
system, so they will be sent out over time. An email will be sent to
you when all emails have been sent.</p>
<div class="form-elements">
<div id="from_address-wrapper" class="form-wrapper"><div id="from_address-label" class="form-label"><label for="from_address" class="required">From:</label></div>
<div id="from_address-element" class="form-element">
<input name="from_address" id="from_address" value="email@domain.com" type="text"></div></div>
<div id="from_name-wrapper" class="form-wrapper"><div id="from_name-label" class="form-label"><label for="from_name" class="required">From (name):</label></div>
<div id="from_name-element" class="form-element">

<input name="from_name" id="from_name" value="Site Administrator" type="text"></div></div>
<div id="target-wrapper" class="form-wrapper"><div id="target-label" class="form-label"><label for="target" class="required">Member Levels</label></div>
<div id="target-element" class="form-element">
<select name="target[]" id="target" multiple="multiple">
    <option value="1" label="Super Admins (5)">Super Admins (5)</option>
    <option value="2" label="Admins (0)" selected="selected">Admins (0)</option>
    <option value="3" label="Moderators (0)">Moderators (0)</option>
    <option value="4" label="Default Level (4905)">Default Level (4905)</option>

</select>
<p class="description">Hold down the CTRL key to select or de-select specific Member Levels.</p></div></div>
<div id="subject-wrapper" class="form-wrapper"><div id="subject-label" class="form-label"><label for="subject" class="required">Subject:</label></div>
<div id="subject-element" class="form-element">
<input name="subject" id="subject" type="text"></div></div>
<div id="body-wrapper" class="form-wrapper"><div id="body-label" class="form-label"><label for="body" class="required">Body</label></div>
<div id="body-element" class="form-element">
<textarea name="body" id="body" cols="45" rows="6"></textarea>
<p class="description">(HTML or Plain Text)</p></div></div>
<fieldset id="fieldset-advanced" style="display: none;">
<div id="body_text-wrapper" class="form-wrapper"><div id="body_text-label" class="form-label"><label for="body_text" class="optional">Body (text)</label></div>

<div id="body_text-element" class="form-element">
<textarea name="body_text" id="body_text" cols="45" rows="6"></textarea></div></div></fieldset>
<div id="submit-wrapper" class="form-wrapper"><div id="submit-label" class="form-label">&nbsp;</div><div id="submit-element" class="form-element">
<button style="border: 1px solid rgb(119, 119, 119); background-color: rgb(134, 134, 134);" name="submit" id="submit" type="submit">Send Emails</button></div></div></div></div></div></form>  </div>