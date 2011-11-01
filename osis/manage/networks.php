<h2>
  Manage Networks</h2>
<p> Networks are generally used for determining what members see in the
"what's new" feed, letting members associate with each other based on
common profile information (without needing to be friends directly),
and serving advertisements to specific groups of members. Each member
can join one or more networks if you allow them to, and their networks
will be shown on their profile. If you decide to have networks, be sure
that they relate to your community's theme. For example, if your
community has members from various countries, you can create a network
for each country. If you want your members to see recent posts from
other people in their networks (even if they're not yet friends with
each other), you can adjust that setting <a href="http://demo.socialengine.net/admin/settings/activity">here</a>.</p>

<br>

<script type="text/javascript">
  var changeOrder = function(newOrder) {
    var order = $('order').value;
    var direction = $('direction').value;
    
    if( order != newOrder ) {
      $('order').set('value', newOrder);
      $('direction').set('value', 'ASC');
    } else {
      $('order').set('value', newOrder);
      $('direction').set('value', ( direction == 'ASC' ? 'DESC' : 'ASC' ) );
    }
    $('order').getParent('form').submit();
  }
  var checkAll = function(pel) {
    var state = pel.checked;
    $$('input[type=checkbox]').each(function(el){
      el.checked = state;
    });
  }
</script>

<form id="filter_form" enctype="application/x-www-form-urlencoded" class="global_form_box" action="" method="post"><div><div><div class="form-elements">

<input name="order" value="" id="order" type="hidden">

<input name="direction" value="" id="direction" type="hidden"></div></div></div></form>
<div>
  <a href="http://demo.socialengine.net/admin/network/manage/create" class="buttonlink" style="background-image: url(application/modules/Network/externals/images/admin/add.png);">Add Network</a></div>

<br>




<br>
<form id="delete_selected" method="post" action="/admin/network/manage/deleteselected">

  <table class="admin_table">
    <thead>
      <tr>
        <th style="width: 1%;">
          <input class="checkbox" id="checkall" onchange="checkAll(this);" type="checkbox">
        </th>
        <th style="width: 1%;">
          <a href="javascript:void(0);" onclick="javascript:changeOrder('network_id');">

            ID          </a>
        </th>
        <th>
          <a href="javascript:void(0);" onclick="javascript:changeOrder('title');">
            Network Name          </a>
        </th>
        <th style="width: 1%;">
          Related Profile Question        </th>

        <th style="width: 1%;" class="admin_table_centered">
          <a href="javascript:void(0);" onclick="javascript:changeOrder('member_count');">
            Members          </a>
        </th>
        <th style="width: 1%;">
          Options        </th>
      </tr>
    </thead>

    <tbody>
            <tr>
        <td>
          <input name="actions[]" id="actions" value="1" type="checkbox">        </td>
        <td>
          1        </td>
        <td class="admin_table_bold">
          North America        </td>

        <td>
          n/a        </td>
        <td class="admin_table_centered">
          78 members        </td>
        <td class="admin_table_options">
          <a href="http://demo.socialengine.net/admin/network/manage/edit/id/1">edit</a> |
          <a href="http://demo.socialengine.net/admin/network/manage/delete/id/1/format/smoothbox" class="smoothbox">delete</a>        </td>

      </tr>
            <tr>
        <td>
          <input name="actions[]" id="actions" value="2" type="checkbox">        </td>
        <td>
          2        </td>
        <td class="admin_table_bold">
          South America        </td>

        <td>
          n/a        </td>
        <td class="admin_table_centered">
          22 members        </td>
        <td class="admin_table_options">
          <a href="http://demo.socialengine.net/admin/network/manage/edit/id/2">edit</a> |
          <a href="http://demo.socialengine.net/admin/network/manage/delete/id/2/format/smoothbox" class="smoothbox">delete</a>        </td>

      </tr>
            <tr>
        <td>
          <input name="actions[]" id="actions" value="3" type="checkbox">        </td>
        <td>
          3        </td>
        <td class="admin_table_bold">
          Europe        </td>

        <td>
          n/a        </td>
        <td class="admin_table_centered">
          67 members        </td>
        <td class="admin_table_options">
          <a href="http://demo.socialengine.net/admin/network/manage/edit/id/3">edit</a> |
          <a href="http://demo.socialengine.net/admin/network/manage/delete/id/3/format/smoothbox" class="smoothbox">delete</a>        </td>

      </tr>
            <tr>
        <td>
          <input name="actions[]" id="actions" value="4" type="checkbox">        </td>
        <td>
          4        </td>
        <td class="admin_table_bold">
          Asia        </td>

        <td>
          n/a        </td>
        <td class="admin_table_centered">
          34 members        </td>
        <td class="admin_table_options">
          <a href="http://demo.socialengine.net/admin/network/manage/edit/id/4">edit</a> |
          <a href="http://demo.socialengine.net/admin/network/manage/delete/id/4/format/smoothbox" class="smoothbox">delete</a>        </td>

      </tr>
            <tr>
        <td>
          <input name="actions[]" id="actions" value="5" type="checkbox">        </td>
        <td>
          5        </td>
        <td class="admin_table_bold">
          Africa        </td>

        <td>
          n/a        </td>
        <td class="admin_table_centered">
          8 members        </td>
        <td class="admin_table_options">
          <a href="http://demo.socialengine.net/admin/network/manage/edit/id/5">edit</a> |
          <a href="http://demo.socialengine.net/admin/network/manage/delete/id/5/format/smoothbox" class="smoothbox">delete</a>        </td>

      </tr>
            <tr>
        <td>
          <input name="actions[]" id="actions" value="6" type="checkbox">        </td>
        <td>
          6        </td>
        <td class="admin_table_bold">
          Australia        </td>

        <td>
          n/a        </td>
        <td class="admin_table_centered">
          18 members        </td>
        <td class="admin_table_options">
          <a href="http://demo.socialengine.net/admin/network/manage/edit/id/6">edit</a> |
          <a href="http://demo.socialengine.net/admin/network/manage/delete/id/6/format/smoothbox" class="smoothbox">delete</a>        </td>

      </tr>
            <tr>
        <td>
          <input name="actions[]" id="actions" value="7" type="checkbox">        </td>
        <td>
          7        </td>
        <td class="admin_table_bold">
          Antarctica        </td>

        <td>
          n/a        </td>
        <td class="admin_table_centered">
          6 members        </td>
        <td class="admin_table_options">
          <a href="http://demo.socialengine.net/admin/network/manage/edit/id/7">edit</a> |
          <a href="http://demo.socialengine.net/admin/network/manage/delete/id/7/format/smoothbox" class="smoothbox">delete</a>        </td>

      </tr>
          </tbody>
  </table>

  <br>

  <div class="buttons">
    <button style="border: 1px solid rgb(119, 119, 119); background-color: rgb(134, 134, 134);" type="submit">
      Delete Selected    </button>

  </div>
</form>
