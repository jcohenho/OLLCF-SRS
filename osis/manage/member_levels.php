 <script type="text/javascript">
  en4.core.runonce.add(function(){$$('th.admin_table_short input[type=checkbox]').addEvent('click', function(){ $$('input[type=checkbox]:not(:disabled)').set('checked', $(this).get('checked', false)); })});

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

  function setDefault(level_id) {
    (new Request.JSON({
      'format': 'json',
      'url' : '/authorization/admin-level/setDefault',
      'data' : {
        'format' : 'json',
        'level_id' : level_id
      },
      'onRequest' : function(){
        $$('input[type=radio]').set('disabled', true);
      },
      'onSuccess' : function(responseJSON, responseText)
      {
        window.location.reload();
      }
    })).send();

  }
</script>

<h2>
  Member Levels</h2>

  <div class="tabs">
    <ul class="navigation">
    <li class="active">
        <a class="menu_authorization_admin_main authorization_admin_main_manage" href="http://demo.socialengine.net/admin/authorization/level">View Member Levels</a>

    </li>
    <li>
        <a class="menu_authorization_admin_main authorization_admin_main_level" href="http://demo.socialengine.net/admin/authorization/level/edit">Member Level Settings</a>
    </li>
</ul>  </div>


<p> Member levels can be used to give certain members more privileges
than others. You can grant/restrict a member level's access to
features, sections of the community. You can also assign levels that
have moderation or administrative capabilities.<br><br>One
of your member levels must be marked as the "default level". When new
members sign up, they will automatically belong to this level. You can
change a specific member's level by editing their account details from
the <a href="http://demo.socialengine.net/admin/user/manage">View Members</a>

page. If you want all members in your community to have the same
features and limits, you will only need a single member level (aside
from the Super Admin level).</p>
<form id="filter_form" enctype="application/x-www-form-urlencoded" class="global_form_box" action="" method="post"><div><div><div class="form-elements">

<input name="orderby" value="" id="orderby" type="hidden">

<input name="orderby_direction" value="" id="orderby_direction" type="hidden"></div></div></div></form>
<br>

<div class="admin_results">
  <div>
    <a href="http://demo.socialengine.net/admin/authorization/level/create" class="buttonlink" style="background-image: url(/application/modules/Authorization/externals/images/admin/add.png);">Add Member Level</a>  </div>
  <div>

        5 levels found  </div>
  <div>
    



  </div>
</div>

<br>

<table class="admin_table">
  <thead>
    <tr>
      <th style="width: 1%;" class="admin_table_short"><input class="checkbox" type="checkbox"></th>

      <th style="width: 1%;"><a href="javascript:void(0);" onclick="javascript:changeOrder('level_id', 'DESC');">ID</a></th>
      <th>
        <a href="javascript:void(0);" onclick="javascript:changeOrder('title', 'DESC');">
          Level Name        </a>
      </th>
      <th style="width: 1%;">Members</th>
      <th style="width: 1%;">Type</th>

      <th style="width: 1%;" class="admin_table_centered">Default Level</th>
      <th style="width: 1%;">Options</th>
    </tr>

  </thead>
  <tbody>
                  <tr>
        <td><input disabled="disabled" class="checkbox" value="5" type="checkbox"></td>

          <td>
            5          </td>
          <td class="admin_table_bold">
            Public          </td>
          <td>
                        <a href="http://demo.socialengine.net/admin/user/manage/index/level_id/5">0 members</a>          </td>
          <td>

            Public          </td>
          <td class="admin_table_centered">
                          <input name="default" id="default-0" value="0" disabled="disabled" onchange="setDefault(5);" type="radio"><label for="default-0"></label>                      </td>
          <td class="admin_table_options">
            <a href="http://demo.socialengine.net/admin/authorization/level/edit/id/5">
              edit            </a>
                      </td>

        </tr>
              <tr>
        <td><input disabled="disabled" class="checkbox" value="4" type="checkbox"></td>
          <td>
            4          </td>
          <td class="admin_table_bold">
            Default Level          </td>
          <td>

                        <a href="http://demo.socialengine.net/admin/user/manage/index/level_id/4">4,906 members</a>          </td>
          <td>
            Normal          </td>
          <td class="admin_table_centered">
                          <img src="manage-level_files/notice.png" alt="Default">
                      </td>
          <td class="admin_table_options">

            <a href="http://demo.socialengine.net/admin/authorization/level/edit/id/4">
              edit            </a>
                      </td>
        </tr>
              <tr>
        <td><input class="checkbox" value="3" type="checkbox"></td>
          <td>
            3          </td>

          <td class="admin_table_bold">
            Moderators          </td>
          <td>
                        <a href="http://demo.socialengine.net/admin/user/manage/index/level_id/3">0 members</a>          </td>
          <td>
            Moderator          </td>
          <td class="admin_table_centered">

                          <input name="default" id="default-0" value="0" disabled="disabled" onchange="setDefault(3);" type="radio"><label for="default-0"></label>                      </td>
          <td class="admin_table_options">
            <a href="http://demo.socialengine.net/admin/authorization/level/edit/id/3">
              edit            </a>
                        |
            <a href="http://demo.socialengine.net/admin/authorization/level/delete/id/3">
              delete            </a>
                      </td>

        </tr>
              <tr>
        <td><input class="checkbox" value="2" type="checkbox"></td>
          <td>
            2          </td>
          <td class="admin_table_bold">
            Admins          </td>
          <td>

                        <a href="http://demo.socialengine.net/admin/user/manage/index/level_id/2">0 members</a>          </td>
          <td>
            Admin          </td>
          <td class="admin_table_centered">
                          <input name="default" id="default-0" value="0" disabled="disabled" onchange="setDefault(2);" type="radio"><label for="default-0"></label>                      </td>
          <td class="admin_table_options">
            <a href="http://demo.socialengine.net/admin/authorization/level/edit/id/2">

              edit            </a>
                        |
            <a href="http://demo.socialengine.net/admin/authorization/level/delete/id/2">
              delete            </a>
                      </td>
        </tr>
              <tr>
        <td><input disabled="disabled" class="checkbox" value="1" type="checkbox"></td>

          <td>
            1          </td>
          <td class="admin_table_bold">
            Super Admins          </td>
          <td>
                        <a href="http://demo.socialengine.net/admin/user/manage/index/level_id/1">5 members</a>          </td>
          <td>

            Admin          </td>
          <td class="admin_table_centered">
                          <input name="default" id="default-0" value="0" disabled="disabled" onchange="setDefault(1);" type="radio"><label for="default-0"></label>                      </td>
          <td class="admin_table_options">
            <a href="http://demo.socialengine.net/admin/authorization/level/edit/id/1">
              edit            </a>
                      </td>

        </tr>
            </tbody>

</table>

<br>
<div class="buttons">
  <button onclick="javascript:delectSelected();" type="submit">
    Delete Selected  </button>
</div>

<form id="delete_selected" method="post" action="/admin/authorization/level/deleteselected">
  <input id="ids" name="ids" value="" type="hidden">

</form>