<div class="admin_home_wrapper">

  <div class="admin_home_right">
    <div>
<div class="generic_layout_container layout_core_admin_statistics">
<h3 class="sep">
  <span>
    Quick Stats  </span>
</h3>

<table class="admin_home_stats">
  <thead>
    <tr>
      <th colspan="3">Network Information</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>License Key</td>
      <td colspan="2"><a href="index/license-key" class="smoothbox">Update License Key</a></td>
    </tr>
    <tr>
      <td>Created</td>
      <td colspan="2"><span title="Mon, 28 Jun 2010 17:17:18 -0700" class="timestamp">June 28, 2010</span></td>
    </tr>
  </tbody>
</table>
<table class="admin_home_stats">
  <thead>
    <tr>
      <th>Statistics</th>
      <th>Today</th>
      <th>Total</th>
    </tr>
  </thead>
  <tbody>
          <tr>
        <td>
          Page Views        </td>
        <td>
          10,851        </td>
        <td>
          4,295,306        </td>
      </tr>
          <tr>
        <td>
          Members        </td>
        <td>
          18        </td>
        <td>
          5,087        </td>
      </tr>
          <tr>
        <td>
          Sign-ins        </td>
        <td>
          39        </td>
        <td>
          10,020        </td>
      </tr>
          <tr>
        <td>
          Private Messages        </td>
        <td>
          1        </td>
        <td>
          2,495        </td>
      </tr>
          <tr>
        <td>
          Friendships        </td>
        <td>
          10        </td>
        <td>
          4,276        </td>
      </tr>
          <tr>
        <td>
          Comments        </td>
        <td>
          2        </td>
        <td>
          1,175        </td>
      </tr>
          <tr>
        <td>
          Abuse Reports        </td>
        <td>
          0        </td>
        <td>
          103        </td>
      </tr>
          <tr>
        <td>
          Announcements        </td>
        <td>
          0        </td>
        <td>
          0        </td>
      </tr>
          <tr>
        <td>
          Emails Sent        </td>
        <td>
          114        </td>
        <td>
          28,590        </td>
      </tr>
          <tr>
        <td>
          Online Members        </td>
        <td>
                  </td>
        <td>
          1        </td>
      </tr>
      </tbody>
</table></div>
</div>
    <div>
<div class="generic_layout_container layout_core_admin_environment">
<div class="admin_home_environment">
  <h3 class="sep">
    <span>System Mode</span>
  </h3>
  <div class="admin_home_environment_buttons">
    <button onclick="changeEnvironmentMode('production', this);this.blur();">Production Mode</button>
    <button onclick="changeEnvironmentMode('development', this);this.blur();" class="button_disabled">Development Mode</button>
  </div>

  <br>

  <div class="admin_home_environment_description">
Your community is currently in production mode. Most error messages are
hidden and caching is enabled. If you want to make changes to your CSS
layout or view scripts, please switch to Development Mode first. </div>

  <script type="text/javascript">
  //<![CDATA[
  var changeEnvironmentMode = function(mode, btn) {
    $$('div.admin_home_environment button').set('class', 'button_disabled');
    btn.set('class', '');
    $$('div.admin_home_environment_description').set('text', 'Changing mode - please wait...');
    new Request.JSON({
      url: '/admin/index/change-environment-mode',
      method: 'post',
      onSuccess: function(responseJSON){
        if ($type(responseJSON) == 'object') {
          if (responseJSON.success || !$type(responseJSON.error))
            window.location.href = window.location.href;
          else
            alert(responseJSON.error);
        } else
          alert('An unknown error occurred; changes have not been saved.');
      }
    }).send('format=json&environment_mode='+mode);
  }
  //]]>
  </script>

</div></div>
</div>
  </div>

  <div class="admin_home_middle">
    <div>
<div class="generic_layout_container layout_core_admin_dashboard">
<div class="admin_home_dashboard">
  <h3 class="sep">
    <span>
              Admin Dashboard          </span>
  </h3>
  
      <ul class="admin_home_dashboard_messages">
                              <li class="notification-notice priority-info">
            There is <a href="user/manage?enabled=0">1 new member</a> awaiting your approval.          </li>
                    
                </ul>
  
  <ul class="admin_home_dashboard_links">
    <li>
      <ul>
        <li>
          <a href="user/manage/" class="links_members">
            Enroll Student          </a>
          (4910)
        </li>
        <li>
          <a href="report" class="links_abuse">
            View Abuse Reports          </a>
                      (82)
                  </li>
        <li>
          <a href="packages" class="links_plugins">
            Manage Plugins          </a>
          (11)
        </li>
      </ul>
    </li>
    <li>
      <ul>
        <li>
          <a href="content" class="links_layout">
            Edit Site Layout          </a>
        </li>
        <li>
          <a href="themes" class="links_theme">
            Edit Site Theme          </a>
        </li>
        <li>
          <a href="stats" class="links_stats">
            View Statistics          </a>
        </li>
      </ul>
    </li>
    <li>
      <ul>
        <li>
          <a href="announcement/manage/create" class="links_announcements">
            Post Announcement          </a>
        </li>
        <li>
          <a href="http://www.socialengine.net/community" class="links_getplugins">
            Get More Plugins          </a>
        </li>
        <li>
          <a href="http://www.socialengine.net/community/mods?section=templates" class="links_getthemes">
            Get More Themes          </a>
        </li>
      </ul>
    </li>
  </ul>
</div></div>
</div>
    <div>
<div class="generic_layout_container layout_core_admin_news">
<div class="admin_home_news">
  <h3 class="sep">
    <span>News &amp; Updates</span>
  </h3>

      <ul>
              <li>
          <div class="admin_home_news_date">
            January 31, 2011          </div>
          <div class="admin_home_news_info">
            <a href="http://www.socialengine.net/blog/article?id=125&amp;article=ASK-JOHN" target="_blank">
              ASK JOHN            </a>
            <span class="admin_home_news_blurb">
Are you a developer wondering what might be possible with the SE
framework?
For all of those burning questions about SE code, we present to you the
most noteworthy of SocialEngine knowledge databases ever:
Our Engineer, JOHN. The Chief Architect of SE4.
We're working to expand our Knowledgebase to make sure that you, our
clients and third-party ... </span>
          </div>
        </li>
              <li>
          <div class="admin_home_news_date">
            January 27, 2011          </div>
          <div class="admin_home_news_info">
            <a href="http://www.socialengine.net/blog/article?id=124&amp;article=Future-Features" target="_blank">
              Future Features            </a>
            <span class="admin_home_news_blurb">
Now that v4.1.1 is out the door, we'd like to share a glimpse of what's
to come. We are planning to release v4.1.2 on February 16th. This
release will primarily consist of bug fixes and very minor feature
additions. Over the next few months, we will be working on the
following major features:
- Better Mobile Compatibility: We are working to make S... </span>
          </div>
        </li>
              <li>
          <div class="admin_home_news_date">
            January 26, 2011          </div>
          <div class="admin_home_news_info">
            <a href="http://www.socialengine.net/blog/article?id=123&amp;article=SE-411-Released" target="_blank">
              SE 4.1.1 Released            </a>
            <span class="admin_home_news_blurb">
We're right on schedule! SocialEngine clients can now download the new
SE 4.1.1 release from the client area. If you've got the SE 4.1.0 BETA
installed (or an earlier version), we recommend that you upgrade to
4.1.1. If you're on an earlier version with lots of customizations or
third-party addons/mods, you'll definitely want to check with the
add... </span>
          </div>
        </li>
              <li>
          <div class="admin_home_news_date">
            January 21, 2011          </div>
          <div class="admin_home_news_info">
            <a href="http://www.socialengine.net/blog/article?id=122&amp;article=SE-411-Scheduled-for-Release" target="_blank">
              SE 4.1.1 Scheduled for Release            </a>
            <span class="admin_home_news_blurb">
Last week's SE 4.1.0 BETA release went extremely well. Thanks to all of
you who participated - what a smooth release! We've scheduled the
following update, SE 4.1.1, for release next Wednesday. This release
includes fixes for the minor issues found in the 4.1.0 beta, so we
recommend that anyone using the beta (and anyone else who wants to keep
thei... </span>
          </div>
        </li>
            <li>
        <div class="admin_home_news_date">
          &nbsp;
        </div>
        <div class="admin_home_news_info">
          >> <a href="http://www.socialengine.net/">More SE News</a>
        </div>
      </li>
    </ul>

  </div></div>
</div>
  </div>

</div>