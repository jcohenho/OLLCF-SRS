<script type="text/javascript">
  var myCalStart = false;
  var myCalEnd = false;

  en4.core.runonce.add(function init()
  {
    monthList = [];
    myCal = new Calendar({ 'start_time[date]': 'M d Y', 'end_time[date]' : 'M d Y' }, {
      classes: ['event_calendar'],
      pad: 0,
      direction: 0
    });
  });


  var updateTextFields = function(endsettings)
  {
    var endtime_element = document.getElementById("end_time-wrapper");
    endtime_element.style.display = "none";

    if (endsettings.value == 0)
    {
      endtime_element.style.display = "none";
      return;
    }

    if (endsettings.value == 1)
    {
      endtime_element.style.display = "block";
      return;
    }
  }

en4.core.runonce.add(updateTextFields);

</script>

<div class="settings">
  <form enctype="application/x-www-form-urlencoded" class="global_form" action="/admin/ads/create" method="post"><div><div><h3>Create Advertising Campaign</h3>
<p class="form-description">Follow this guide to design and launch a new advertising campaign.</p>
<div class="form-elements">
<div id="name-wrapper" class="form-wrapper"><div id="name-label" class="form-label"><label for="name" class="required">Campaign Name</label></div>
<div id="name-element" class="form-element">
<input name="name" id="name" value="" type="text"></div></div>

<div id="start_time-wrapper" class="form-wrapper"><div id="start_time-label" class="form-label"><label for="start_time" class="optional">Start Date</label></div>
<div id="start_time-element" class="form-element">
<div class="event_calendar_container" style="display: inline;"><button class="event_calendar " type="button"></button><input readonly="readonly" name="start_time[date]" value="" class="calendar event_calendar" id="start_time-date" type="hidden"><span class="calendar_output_span" id="calendar_output_span_start_time-date">Select a date</span></div><select name="start_time[hour]" id="start_time-hour">
    <option value="" label=""></option>
    <option value="1" label="1">1</option>
    <option value="2" label="2">2</option>
    <option value="3" label="3">3</option>
    <option value="4" label="4">4</option>

    <option value="5" label="5">5</option>
    <option value="6" label="6">6</option>
    <option value="7" label="7">7</option>
    <option value="8" label="8">8</option>
    <option value="9" label="9">9</option>
    <option value="10" label="10">10</option>

    <option value="11" label="11">11</option>
    <option value="12" label="12">12</option>
</select><select name="start_time[minute]" id="start_time-minute">
    <option value="" label=""></option>
    <option value="0" label="00">00</option>
    <option value="10" label="10">10</option>
    <option value="20" label="20">20</option>

    <option value="30" label="30">30</option>
    <option value="40" label="40">40</option>
    <option value="50" label="50">50</option>
</select><select name="start_time[ampm]" id="start_time-ampm">
    <option value="" label=""></option>
    <option value="AM" label="AM">AM</option>
    <option value="PM" label="PM">PM</option>

</select></div></div>
<div id="end_settings-wrapper" class="form-wrapper"><div id="end_settings-label" class="form-label"><label for="end_settings" class="optional">End Date</label></div>
<div id="end_settings-element" class="form-element">
<ul class="form-options-wrapper">
<li><input name="end_settings" id="end_settings-0" value="0" checked="checked" onchange="updateTextFields(this)" type="radio"><label for="end_settings-0">Don't end this campaign on a specific date.</label></li>
<li><input name="end_settings" id="end_settings-1" value="1" onchange="updateTextFields(this)" type="radio"><label for="end_settings-1">End this campaign on a specific date.</label></li>
</ul>
</div></div>
<div style="display: none;" id="end_time-wrapper" class="form-wrapper"><div id="end_time-label" class="form-label">&nbsp;</div>
<div id="end_time-element" class="form-element">
<div class="event_calendar_container" style="display: inline;"><button class="event_calendar" type="button"></button><input readonly="readonly" name="end_time[date]" value="" class="calendar event_calendar" id="end_time-date" type="hidden"><span class="calendar_output_span" id="calendar_output_span_end_time-date">Select a date</span></div><select name="end_time[hour]" id="end_time-hour">
    <option value="" label=""></option>

    <option value="1" label="1">1</option>
    <option value="2" label="2">2</option>
    <option value="3" label="3">3</option>
    <option value="4" label="4">4</option>
    <option value="5" label="5">5</option>
    <option value="6" label="6">6</option>

    <option value="7" label="7">7</option>
    <option value="8" label="8">8</option>
    <option value="9" label="9">9</option>
    <option value="10" label="10">10</option>
    <option value="11" label="11">11</option>
    <option value="12" label="12">12</option>

</select><select name="end_time[minute]" id="end_time-minute">
    <option value="" label=""></option>
    <option value="0" label="00">00</option>
    <option value="10" label="10">10</option>
    <option value="20" label="20">20</option>
    <option value="30" label="30">30</option>
    <option value="40" label="40">40</option>

    <option value="50" label="50">50</option>
</select><select name="end_time[ampm]" id="end_time-ampm">
    <option value="" label=""></option>
    <option value="AM" label="AM">AM</option>
    <option value="PM" label="PM">PM</option>
</select></div></div>
<div id="limit_view-wrapper" class="form-wrapper"><div id="limit_view-label" class="form-label"><label for="limit_view" class="optional">Total Views Allowed</label></div>
<div id="limit_view-element" class="form-element">
<input name="limit_view" id="limit_view" value="0" class="short" type="text">

<p class="description">The campaign will end when this number of views is reached. Enter "0" for unlimited views.</p></div></div>
<div id="limit_click-wrapper" class="form-wrapper"><div id="limit_click-label" class="form-label"><label for="limit_click" class="optional">Total Clicks Allowed</label></div>
<div id="limit_click-element" class="form-element">
<input name="limit_click" id="limit_click" value="0" class="short" type="text">
<p class="description">The campaign will end when this number of clicks is reached. Enter "0" for unlimited clicks.</p></div></div>
<div id="limit_ctr-wrapper" class="form-wrapper"><div id="limit_ctr-label" class="form-label"><label for="limit_ctr" class="optional">Minimum CTR</label></div>
<div id="limit_ctr-element" class="form-element">
<input name="limit_ctr" id="limit_ctr" value="0" class="short" type="text">
<p class="description">If you specify a minimum CTR (click-through ratio, which is the ratio of clicks to views) and the campaign's CTR goes below your limit, the campaign will end. If you decide to specify a minimum CTR limit, you should enter it as a percentage of clicks to views (e.g. 0.05%). To create a campaign with no definite end, don't specify limits and your campaign will continue until you choose to end it.</p></div></div>
<div id="ad_levels-wrapper" class="form-wrapper"><div id="ad_levels-label" class="form-label"><label for="ad_levels" class="optional">Member Levels</label></div>
<div id="ad_levels-element" class="form-element"><p class="description">Specify which member levels will be shown advertisements from this campaign. To show this ad campaign to all member levels, leave them all selected. Use CTRL-click to select or deselect multiple levels.</p>

<select name="ad_levels[]" id="ad_levels" multiple="multiple">
    <option value="1" label="Super Admins" selected="selected">Super Admins</option>
    <option value="2" label="Admins">Admins</option>
    <option value="3" label="Moderators">Moderators</option>
    <option value="4" label="Default Level">Default Level</option>
    <option value="5" label="Public">Public</option>

</select></div></div>
<div id="ad_networks-wrapper" class="form-wrapper"><div id="ad_networks-label" class="form-label"><label for="ad_networks" class="optional">Networks</label></div>
<div id="ad_networks-element" class="form-element"><p class="description">Specify which networks will be shown advertisements from this campaign. To show this ad campaign to all networks, leave them all selected. Use CTRL-click to select or deselect multiple networks.</p>

<select name="ad_networks[]" id="ad_networks" multiple="multiple">
    <option value="1" label="North America" selected="selected">North America</option>
    <option value="2" label="South America">South America</option>
    <option value="3" label="Europe">Europe</option>
    <option value="4" label="Asia">Asia</option>

    <option value="5" label="Africa">Africa</option>
    <option value="6" label="Australia">Australia</option>
    <option value="7" label="Antarctica">Antarctica</option>
</select></div></div>
<div id="public-wrapper" class="form-wrapper"><div class="form-label" id="public-label">&nbsp;</div>
<div id="public-element" class="form-element">
<input name="public" value="" type="hidden"><input name="public" id="public" value="1" checked="checked" type="checkbox">
<label for="public" class="optional">Show this advertisement to visitors that are not logged in.</label></div></div>
<div class="form-wrapper" id="buttons-wrapper"><fieldset id="fieldset-buttons">

<button style="border: 1px solid rgb(119, 119, 119); background-color: rgb(134, 134, 134);" name="submit" id="submit" type="submit">Create Campaign</button>

 or <a name="cancel" id="cancel" type="button" href="/admin/ads">cancel</a></fieldset></div></div></div></div></form></div>