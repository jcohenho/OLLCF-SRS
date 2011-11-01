
      
<h2>Forums Plugin</h2>

  <div class="tabs">
    <ul class="navigation">
    <li class="active">
        <a class="menu_forum_admin_main forum_admin_main_manage" href="http://demo.socialengine.net/admin/forum/manage">Manage Forums</a>
    </li>

    <li>
        <a class="menu_forum_admin_main forum_admin_main_settings" href="http://demo.socialengine.net/admin/forum/settings">Global Settings</a>
    </li>
    <li>
        <a class="menu_forum_admin_main forum_admin_main_level" href="http://demo.socialengine.net/admin/forum/level">Member Level Settings</a>
    </li>
</ul>  </div>

<script type="text/javascript">
  var moveCategoryUp = function(category_id) {
    var url = '/admin/forum/manage/move-category';
    var request = new Request.JSON({
      url : url,
      data : {
        format : 'json',
        category_id : category_id
      },
      onComplete : function() {
        window.location.replace( window.location.href );
      }
    });
    request.send();
  }
  var moveForumUp = function(forum_id) {
    var url = '/admin/forum/manage/move-forum';
    var request = new Request.JSON({
      url : url,
      data : {
        format : 'json',
        forum_id : forum_id
      },
      onComplete : function() {
        window.location.replace( window.location.href );
      }
    });
    request.send();
  }
</script>

<div class="admin_forums_options">
  <a href="http://demo.socialengine.net/admin/forum/manage/add-category" class="buttonlink smoothbox admin_forums_createcategory">Add Category</a>
  <a href="http://demo.socialengine.net/admin/forum/manage/add-forum" class="buttonlink smoothbox admin_forums_create">Add Forum</a>
</div>

<br>

<ul class="admin_forum_categories">
    <li>

    <div class="admin_forum_categories_info">
      <div class="admin_forum_categories_options">
        <span class="admin_forums_moveup">      
          <a href="javascript:void(0);" onclick="moveCategoryUp(1);">move up</a> |
        </span>
        <a href="http://demo.socialengine.net/admin/forum/manage/edit-category/category_id/1" class="smoothbox">edit</a>
        | <a class="smoothbox" href="http://demo.socialengine.net/admin/forum/manage/delete-category/category_id/1">delete</a>

      </div>
      <div class="admin_forum_categories_title">
        General      </div>
    </div>
    <ul class="admin_forums">
            <li>
        <div class="admin_forums_options">
          <span class="admin_forums_moveup">

            <a href="javascript:void(0);" onclick="moveForumUp(1);">move up</a> |
          </span>
          <a href="http://demo.socialengine.net/admin/forum/manage/edit-forum/forum_id/1" class="smoothbox">edit</a>
          | <a class="smoothbox" href="http://demo.socialengine.net/admin/forum/manage/delete-forum/forum_id/1">delete</a>
        </div>
        <div class="admin_forums_info">
          <span class="admin_forums_title">

            News and Announcements          </span>
          <span class="admin_forums_description">
                      </span>
          <span class="admin_forums_moderators">
            <span class="admin_forums_moderators_top">
              Moderators              (<a href="http://demo.socialengine.net/admin/forum/manage/add-moderator/format/smoothbox/forum_id/1" class="smoothbox">add</a>)
            </span>
            <span>

              <a href="http://demo.socialengine.net/profile/stephen">Stephen Webligo</a> (<a class="smoothbox" href="http://demo.socialengine.net/admin/forum/manage/remove-moderator/forum_id/1/user_id/1">remove</a>)            </span>
          </span>
        </div>
      </li>
      <li>
        <div class="admin_forums_options">

          <span class="admin_forums_moveup">
            <a href="javascript:void(0);" onclick="moveForumUp(2);">move up</a> |
          </span>
          <a href="http://demo.socialengine.net/admin/forum/manage/edit-forum/forum_id/2" class="smoothbox">edit</a>
          | <a class="smoothbox" href="http://demo.socialengine.net/admin/forum/manage/delete-forum/forum_id/2">delete</a>
        </div>
        <div class="admin_forums_info">

          <span class="admin_forums_title">
            Support          </span>
          <span class="admin_forums_description">
                      </span>
          <span class="admin_forums_moderators">
            <span class="admin_forums_moderators_top">
              Moderators              (<a href="http://demo.socialengine.net/admin/forum/manage/add-moderator/format/smoothbox/forum_id/2" class="smoothbox">add</a>)
            </span>

            <span>
              <a href="http://demo.socialengine.net/profile/stephen">Stephen Webligo</a> (<a class="smoothbox" href="http://demo.socialengine.net/admin/forum/manage/remove-moderator/forum_id/2/user_id/1">remove</a>)            </span>
          </span>
        </div>
      </li>
      <li>

        <div class="admin_forums_options">
          <span class="admin_forums_moveup">
            <a href="javascript:void(0);" onclick="moveForumUp(3);">move up</a> |
          </span>
          <a href="http://demo.socialengine.net/admin/forum/manage/edit-forum/forum_id/3" class="smoothbox">edit</a>
          | <a class="smoothbox" href="http://demo.socialengine.net/admin/forum/manage/delete-forum/forum_id/3">delete</a>
        </div>

        <div class="admin_forums_info">
          <span class="admin_forums_title">
            Suggestions          </span>
          <span class="admin_forums_description">
                      </span>
          <span class="admin_forums_moderators">
            <span class="admin_forums_moderators_top">
              Moderators              (<a href="http://demo.socialengine.net/admin/forum/manage/add-moderator/format/smoothbox/forum_id/3" class="smoothbox">add</a>)
            </span>

            <span>
              <a href="http://demo.socialengine.net/profile/stephen">Stephen Webligo</a> (<a class="smoothbox" href="http://demo.socialengine.net/admin/forum/manage/remove-moderator/forum_id/3/user_id/1">remove</a>)            </span>
          </span>
        </div>
      </li>
    </ul>

  </li>
    <li>
    <div class="admin_forum_categories_info">
      <div class="admin_forum_categories_options">
        <span class="admin_forums_moveup">      
          <a href="javascript:void(0);" onclick="moveCategoryUp(2);">move up</a> |
        </span>
        <a href="http://demo.socialengine.net/admin/forum/manage/edit-category/category_id/2" class="smoothbox">edit</a>

        | <a class="smoothbox" href="http://demo.socialengine.net/admin/forum/manage/delete-category/category_id/2">delete</a>
      </div>
      <div class="admin_forum_categories_title">
        Off-Topic      </div>
    </div>
    <ul class="admin_forums">
            <li>

        <div class="admin_forums_options">
          <span class="admin_forums_moveup">
            <a href="javascript:void(0);" onclick="moveForumUp(4);">move up</a> |
          </span>
          <a href="http://demo.socialengine.net/admin/forum/manage/edit-forum/forum_id/4" class="smoothbox">edit</a>
          | <a class="smoothbox" href="http://demo.socialengine.net/admin/forum/manage/delete-forum/forum_id/4">delete</a>
        </div>

        <div class="admin_forums_info">
          <span class="admin_forums_title">
            Off-Topic Discussions          </span>
          <span class="admin_forums_description">
                      </span>
          <span class="admin_forums_moderators">
            <span class="admin_forums_moderators_top">
              Moderators              (<a href="http://demo.socialengine.net/admin/forum/manage/add-moderator/format/smoothbox/forum_id/4" class="smoothbox">add</a>)
            </span>

            <span>
              <a href="http://demo.socialengine.net/profile/stephen">Stephen Webligo</a> (<a class="smoothbox" href="http://demo.socialengine.net/admin/forum/manage/remove-moderator/forum_id/4/user_id/1">remove</a>)            </span>
          </span>
        </div>
      </li>
      <li>

        <div class="admin_forums_options">
          <span class="admin_forums_moveup">
            <a href="javascript:void(0);" onclick="moveForumUp(5);">move up</a> |
          </span>
          <a href="http://demo.socialengine.net/admin/forum/manage/edit-forum/forum_id/5" class="smoothbox">edit</a>
          | <a class="smoothbox" href="http://demo.socialengine.net/admin/forum/manage/delete-forum/forum_id/5">delete</a>
        </div>

        <div class="admin_forums_info">
          <span class="admin_forums_title">
            Introduce Yourself          </span>
          <span class="admin_forums_description">
                      </span>
          <span class="admin_forums_moderators">
            <span class="admin_forums_moderators_top">
              Moderators              (<a href="http://demo.socialengine.net/admin/forum/manage/add-moderator/format/smoothbox/forum_id/5" class="smoothbox">add</a>)
            </span>

            <span>
              <a href="http://demo.socialengine.net/profile/stephen">Stephen Webligo</a> (<a class="smoothbox" href="http://demo.socialengine.net/admin/forum/manage/remove-moderator/forum_id/5/user_id/1">remove</a>)            </span>
          </span>
        </div>
      </li>
    </ul>
  </li>

  </ul>