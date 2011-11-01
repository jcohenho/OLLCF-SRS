<script type="text/javascript">
  en4.core.runonce.add(function(){$$('th.admin_table_short input[type=checkbox]').addEvent('click', function(){ $$('input[type=checkbox]').set('checked', $(this).get('checked', false)); })});

  var changeOrder =function(orderby, direction){
    $('orderby').value = orderby;
    $('orderby_direction').value = direction;
    $('filter_form').submit();
  }

  var delectSelected =function(){
    var checkboxes = $$('input[type=checkbox]');
    var selecteditems = [];

    checkboxes.each(function(item, index){
      var checked = item.get('checked', false);
      var value = item.get('value', false);
      if (checked == true && value != 'on'){
        selecteditems.push(value);
      }
    });

    $('ids').value = selecteditems;
    $('delete_selected').submit();
  }

</script>

<h2>
  Abuse Reports</h2>
<p> This page lists all of the reports your users have sent in
regarding inappropriate content, system abuse, spam, and so forth. You
can use the search field to look for reports that contain a particular
word or phrase. Very old reports are periodically deleted by the system.</p>
<form id="filter_form" enctype="application/x-www-form-urlencoded" class="global_form_box" action="" method="post"><div><div><div class="form-elements">

<input name="orderby" value="" id="orderby" type="hidden">

<input name="orderby_direction" value="" id="orderby_direction" type="hidden"></div></div></div></form>

<br>

  <table class="admin_table">
    <thead>
      <tr>
        <th style="width: 1%;" class="admin_table_short"><input class="checkbox" type="checkbox"></th>
        <th style="width: 1%;">
          <a href="javascript:void(0);" onclick="javascript:changeOrder('report_id', 'DESC');">
            ID          </a>

        </th>
        <th>
          <a href="javascript:void(0);" onclick="javascript:changeOrder('description', 'DESC');">
            Description          </a>
        </th>
        <th style="width: 1%;">
          Reporter        </th>
        <th style="width: 1%;">

          <a href="javascript:void(0);" onclick="javascript:changeOrder('creation_date', 'DESC');">
            Date          </a>
        </th>
        <th style="width: 1%;">
          <a href="javascript:void(0);" onclick="javascript:changeOrder('subject_type', 'DESC');">
            Content Type          </a>
        </th>
        <th style="width: 1%;">

          <a href="javascript:void(0);" onclick="javascript:changeOrder('category', 'DESC');">
            Reasons          </a>
        </th>
        <th style="width: 1%;">
          Options        </th>
      </tr>
    </thead>
    <tbody>

            <tr>
        <td><input class="checkbox" value="102" type="checkbox"></td>
        <td>102</td>
        <td style="white-space: normal;">HI </td>
        <td><a href="http://demo.socialengine.net/profile/kishore" target="_blank">Kishore kumar</a></td>
        <td>2011-02-02 07:05:50</td>
        <td>user</td>

        <td>inappropriate</td>
        <td class="admin_table_options">
                      <a href="http://demo.socialengine.net/admin/report/view/id/102">view content</a> |
                    <a href="http://demo.socialengine.net/admin/report/delete/id/102">dismiss</a>        </td>
      </tr>
            <tr>
        <td><input class="checkbox" value="101" type="checkbox"></td>

        <td>101</td>
        <td style="white-space: normal;">dnene</td>
        <td><a href="http://demo.socialengine.net/profile/admina" target="_blank">Miraç özdemir</a></td>
        <td>2011-01-30 16:45:28</td>
        <td>forum_post</td>
        <td>spam</td>

        <td class="admin_table_options">
                      <a href="http://demo.socialengine.net/admin/report/view/id/101">view content</a> |
                    <a href="http://demo.socialengine.net/admin/report/delete/id/101">dismiss</a>        </td>
      </tr>
            <tr>
        <td><input class="checkbox" value="100" type="checkbox"></td>
        <td>100</td>

        <td style="white-space: normal;">licensed</td>
        <td><a href="http://demo.socialengine.net/profile/rajamohan" target="_blank">Raja Raja</a></td>
        <td>2011-01-30 10:10:04</td>
        <td>music_playlist</td>
        <td>licensed</td>
        <td class="admin_table_options">

                      <a href="http://demo.socialengine.net/admin/report/view/id/100">view content</a> |
                    <a href="http://demo.socialengine.net/admin/report/delete/id/100">dismiss</a>        </td>
      </tr>
            <tr>
        <td><input class="checkbox" value="99" type="checkbox"></td>
        <td>99</td>
        <td style="white-space: normal;">zczc</td>

        <td><a href="http://demo.socialengine.net/profile/denede" target="_blank">deneme@msn.com deneme@msn.com</a></td>
        <td>2011-01-28 22:51:18</td>
        <td>user</td>
        <td>spam</td>
        <td class="admin_table_options">
                      <a href="http://demo.socialengine.net/admin/report/view/id/99">view content</a> |
                    <a href="http://demo.socialengine.net/admin/report/delete/id/99">dismiss</a>        </td>

      </tr>
            <tr>
        <td><input class="checkbox" value="97" type="checkbox"></td>
        <td>97</td>
        <td style="white-space: normal;">Description
Nag testing Description Nag testing Description Nag testing Description
Nag testing Description Nag testing Description Nag testing Description
Nag testing Description Nag testing Description Nag testing </td>
        <td><a href="http://demo.socialengine.net/profile/mnagrao" target="_blank">Nageshwar Rao Mykala</a></td>
        <td>2011-01-25 11:22:22</td>

        <td>music_playlist</td>
        <td>other</td>
        <td class="admin_table_options">
                      <a href="http://demo.socialengine.net/admin/report/view/id/97">view content</a> |
                    <a href="http://demo.socialengine.net/admin/report/delete/id/97">dismiss</a>        </td>
      </tr>

            <tr>
        <td><input class="checkbox" value="96" type="checkbox"></td>
        <td>96</td>
        <td style="white-space: normal;">Spamming</td>
        <td><a href="http://demo.socialengine.net/profile/parker" target="_blank">Peer Parker</a></td>
        <td>2011-01-19 20:29:06</td>
        <td>user</td>

        <td>spam</td>
        <td class="admin_table_options">
                      <a href="http://demo.socialengine.net/admin/report/view/id/96">view content</a> |
                    <a href="http://demo.socialengine.net/admin/report/delete/id/96">dismiss</a>        </td>
      </tr>
            <tr>
        <td><input class="checkbox" value="95" type="checkbox"></td>

        <td>95</td>
        <td style="white-space: normal;">zsd</td>
        <td><a href="http://demo.socialengine.net/profile/youness" target="_blank">youness atik</a></td>
        <td>2011-01-17 23:47:25</td>
        <td>video</td>
        <td>inappropriate</td>

        <td class="admin_table_options">
                      <a href="http://demo.socialengine.net/admin/report/view/id/95">view content</a> |
                    <a href="http://demo.socialengine.net/admin/report/delete/id/95">dismiss</a>        </td>
      </tr>
            <tr>
        <td><input class="checkbox" value="94" type="checkbox"></td>
        <td>94</td>

        <td style="white-space: normal;">stole my profile pic </td>
        <td><a href="http://demo.socialengine.net/profile/testerlady" target="_blank">London Jones</a></td>
        <td>2011-01-17 23:46:22</td>
        <td>user</td>
        <td>other</td>
        <td class="admin_table_options">

                      <a href="http://demo.socialengine.net/admin/report/view/id/94">view content</a> |
                    <a href="http://demo.socialengine.net/admin/report/delete/id/94">dismiss</a>        </td>
      </tr>
            <tr>
        <td><input class="checkbox" value="93" type="checkbox"></td>
        <td>93</td>
        <td style="white-space: normal;">Porn</td>

        <td><a href="http://demo.socialengine.net/profile/MariaLopez" target="_blank">Mia Lopez</a></td>
        <td>2011-01-17 23:13:53</td>
        <td>user</td>
        <td>abuse</td>
        <td class="admin_table_options">
                      <a href="http://demo.socialengine.net/admin/report/view/id/93">view content</a> |
                    <a href="http://demo.socialengine.net/admin/report/delete/id/93">dismiss</a>        </td>

      </tr>
            <tr>
        <td><input class="checkbox" value="92" type="checkbox"></td>
        <td>92</td>
        <td style="white-space: normal;">inappropriate</td>
        <td><a href="http://demo.socialengine.net/profile/robin" target="_blank">robin prash</a></td>
        <td>2011-01-17 06:02:49</td>

        <td>user</td>
        <td>inappropriate</td>
        <td class="admin_table_options">
                      <a href="http://demo.socialengine.net/admin/report/view/id/92">view content</a> |
                    <a href="http://demo.socialengine.net/admin/report/delete/id/92">dismiss</a>        </td>
      </tr>

          </tbody>
  </table>

  <br>

  <div class="buttons">
    <button onclick="javascript:delectSelected();" type="submit">Dismiss Selected</button>
  </div>

  <form id="delete_selected" method="post" action="/admin/report/deleteselected">
    <input id="ids" name="ids" value="" type="hidden">

  </form>

