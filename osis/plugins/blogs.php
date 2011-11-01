      
<script type="text/javascript">

function multiDelete()
{
  return confirm("Are you sure you want to delete the selected blog entries?");
}

function selectAll()
{
  var i;
  var multidelete_form = $('multidelete_form');
  var inputs = multidelete_form.elements;
  for (i = 1; i < inputs.length; i++) {
    if (!inputs[i].disabled) {
      inputs[i].checked = inputs[0].checked;
    }
  }
}
</script>

<h2>
  Blogs Plugin</h2>

  <div class="tabs">
    <ul class="navigation">
    <li class="active">
        <a class="menu_blog_admin_main blog_admin_main_manage" href="http://demo.socialengine.net/admin/blog/manage">View Blogs</a>

    </li>
    <li>
        <a class="menu_blog_admin_main blog_admin_main_settings" href="http://demo.socialengine.net/admin/blog/settings">Global Settings</a>
    </li>
    <li>
        <a class="menu_blog_admin_main blog_admin_main_level" href="http://demo.socialengine.net/admin/blog/level">Member Level Settings</a>
    </li>
    <li>

        <a class="menu_blog_admin_main blog_admin_main_categories" href="http://demo.socialengine.net/admin/blog/settings/categories">Categories</a>
    </li>
</ul>  </div>

<p> This page lists all of the blog entries your users have posted. You
can use this page to monitor these blogs and delete offensive material
if necessary. Entering criteria into the filter fields will help you
find specific blog entries. Leaving the filter fields blank will show
all the blog entries on your social network.</p>

<br>
<form id="multidelete_form" method="post" action="/admin/blog/manage" onsubmit="return multiDelete()">
<table class="admin_table">
  <thead>

    <tr>
      <th class="admin_table_short"><input onclick="selectAll();" class="checkbox" type="checkbox"></th>
      <th class="admin_table_short">ID</th>
      <th>Title</th>
      <th>Owner</th>
      <th>Views</th>
      <th>Date</th>

      <th>Options</th>
    </tr>
  </thead>
  <tbody>
          <tr>
        <td><input class="checkbox" name="delete_796" value="796" type="checkbox"></td>
        <td>796</td>
        <td>iguguugiu</td>

        <td>johnnyboy hoho</td>
        <td>14</td>
        <td>February 2, 2011 11:56:04 PM PST</td>
        <td>
          <a href="http://demo.socialengine.net/blogs/5099/796/iguguugiu">view</a>          |
          <a href="http://demo.socialengine.net/blog/admin-manage/delete/id/796" class="smoothbox">delete</a>        </td>

      </tr>
          <tr>
        <td><input class="checkbox" name="delete_795" value="795" type="checkbox"></td>
        <td>795</td>
        <td>How to earn money on twitter </td>
        <td>PamelaHilton .Com</td>
        <td>393</td>

        <td>February 2, 2011 10:18:52 PM PST</td>
        <td>
          <a href="http://demo.socialengine.net/blogs/536/795/how-to-earn-money-on-twitter">view</a>          |
          <a href="http://demo.socialengine.net/blog/admin-manage/delete/id/795" class="smoothbox">delete</a>        </td>
      </tr>
          <tr>
        <td><input class="checkbox" name="delete_794" value="794" type="checkbox"></td>

        <td>794</td>
        <td>?????? ?????? ????? ???? ????? ?????? ????? ?? ????? ??????</td>
        <td>???? ????</td>
        <td>8</td>
        <td>February 2, 2011 4:31:42 PM PST</td>
        <td>

          <a href="http://demo.socialengine.net/blogs/5093/794/-">view</a>          |
          <a href="http://demo.socialengine.net/blog/admin-manage/delete/id/794" class="smoothbox">delete</a>        </td>
      </tr>
          <tr>
        <td><input class="checkbox" name="delete_793" value="793" type="checkbox"></td>
        <td>793</td>
        <td>my workout</td>

        <td>Sean Lynch</td>
        <td>0</td>
        <td>February 2, 2011 8:30:20 AM PST</td>
        <td>
          <a href="http://demo.socialengine.net/blogs/5079/793/my-workout">view</a>          |
          <a href="http://demo.socialengine.net/blog/admin-manage/delete/id/793" class="smoothbox">delete</a>        </td>

      </tr>
          <tr>
        <td><input class="checkbox" name="delete_792" value="792" type="checkbox"></td>
        <td>792</td>
        <td>Live Cricket Score</td>
        <td>Nirav Soni</td>
        <td>28</td>

        <td>February 2, 2011 12:09:29 AM PST</td>
        <td>
          <a href="http://demo.socialengine.net/blogs/5071/792/live-cricket-score">view</a>          |
          <a href="http://demo.socialengine.net/blog/admin-manage/delete/id/792" class="smoothbox">delete</a>        </td>
      </tr>
          <tr>
        <td><input class="checkbox" name="delete_790" value="790" type="checkbox"></td>

        <td>790</td>
        <td>My New Blog</td>
        <td>Lawrence Cheng</td>
        <td>1</td>
        <td>February 1, 2011 6:10:27 PM PST</td>
        <td>

          <a href="http://demo.socialengine.net/blogs/5067/790/my-new-blog">view</a>          |
          <a href="http://demo.socialengine.net/blog/admin-manage/delete/id/790" class="smoothbox">delete</a>        </td>
      </tr>
          <tr>
        <td><input class="checkbox" name="delete_789" value="789" type="checkbox"></td>
        <td>789</td>
        <td>Click Ads and Earn Money from Home</td>

        <td>Annis Michelle</td>
        <td>46</td>
        <td>January 31, 2011 8:56:31 AM PST</td>
        <td>
          <a href="http://demo.socialengine.net/blogs/4569/789/click-ads-and-earn-money-from-ho">view</a>          |
          <a href="http://demo.socialengine.net/blog/admin-manage/delete/id/789" class="smoothbox">delete</a>        </td>

      </tr>
          <tr>
        <td><input class="checkbox" name="delete_787" value="787" type="checkbox"></td>
        <td>787</td>
        <td>????</td>
        <td>Yura Pupkin</td>
        <td>3</td>

        <td>January 30, 2011 2:00:23 PM PST</td>
        <td>
          <a href="http://demo.socialengine.net/blogs/2544/787/-">view</a>          |
          <a href="http://demo.socialengine.net/blog/admin-manage/delete/id/787" class="smoothbox">delete</a>        </td>
      </tr>
          <tr>
        <td><input class="checkbox" name="delete_786" value="786" type="checkbox"></td>

        <td>786</td>
        <td>Test</td>
        <td>Hiroshi Kurosawa</td>
        <td>29</td>
        <td>January 30, 2011 4:24:44 AM PST</td>
        <td>

          <a href="http://demo.socialengine.net/blogs/5004/786/test">view</a>          |
          <a href="http://demo.socialengine.net/blog/admin-manage/delete/id/786" class="smoothbox">delete</a>        </td>
      </tr>
          <tr>
        <td><input class="checkbox" name="delete_785" value="785" type="checkbox"></td>
        <td>785</td>
        <td>Youtube</td>

        <td>Hiroshi Kurosawa</td>
        <td>19</td>
        <td>January 30, 2011 4:23:41 AM PST</td>
        <td>
          <a href="http://demo.socialengine.net/blogs/5004/785/youtube">view</a>          |
          <a href="http://demo.socialengine.net/blog/admin-manage/delete/id/785" class="smoothbox">delete</a>        </td>

      </tr>
          <tr>
        <td><input class="checkbox" name="delete_784" value="784" type="checkbox"></td>
        <td>784</td>
        <td>Social network</td>
        <td>Raja Raja</td>
        <td>55</td>

        <td>January 30, 2011 2:00:25 AM PST</td>
        <td>
          <a href="http://demo.socialengine.net/blogs/1105/784/social-network">view</a>          |
          <a href="http://demo.socialengine.net/blog/admin-manage/delete/id/784" class="smoothbox">delete</a>        </td>
      </tr>
          <tr>
        <td><input class="checkbox" name="delete_783" value="783" type="checkbox"></td>

        <td>783</td>
        <td>asada</td>
        <td>Ei Kenzi</td>
        <td>10</td>
        <td>January 29, 2011 10:40:14 PM PST</td>
        <td>

          <a href="http://demo.socialengine.net/blogs/4997/783/asada">view</a>          |
          <a href="http://demo.socialengine.net/blog/admin-manage/delete/id/783" class="smoothbox">delete</a>        </td>
      </tr>
          <tr>
        <td><input class="checkbox" name="delete_782" value="782" type="checkbox"></td>
        <td>782</td>
        <td>The evening paper</td>

        <td>anytigh sedexy</td>
        <td>17</td>
        <td>January 29, 2011 6:45:45 PM PST</td>
        <td>
          <a href="http://demo.socialengine.net/blogs/4973/782/the-evening-paper">view</a>          |
          <a href="http://demo.socialengine.net/blog/admin-manage/delete/id/782" class="smoothbox">delete</a>        </td>

      </tr>
          <tr>
        <td><input class="checkbox" name="delete_781" value="781" type="checkbox"></td>
        <td>781</td>
        <td>Outside the paling</td>
        <td>anytigh sedexy</td>
        <td>11</td>

        <td>January 29, 2011 6:45:14 PM PST</td>
        <td>
          <a href="http://demo.socialengine.net/blogs/4973/781/outside-the-paling">view</a>          |
          <a href="http://demo.socialengine.net/blog/admin-manage/delete/id/781" class="smoothbox">delete</a>        </td>
      </tr>
          <tr>
        <td><input class="checkbox" name="delete_780" value="780" type="checkbox"></td>

        <td>780</td>
        <td>Upon the fresh</td>
        <td>anytigh sedexy</td>
        <td>12</td>
        <td>January 29, 2011 6:44:29 PM PST</td>
        <td>

          <a href="http://demo.socialengine.net/blogs/4973/780/upon-the-fresh">view</a>          |
          <a href="http://demo.socialengine.net/blog/admin-manage/delete/id/780" class="smoothbox">delete</a>        </td>
      </tr>
          <tr>
        <td><input class="checkbox" name="delete_779" value="779" type="checkbox"></td>
        <td>779</td>
        <td>Dogs</td>

        <td>Lalit Patel</td>
        <td>16</td>
        <td>January 28, 2011 11:13:35 PM PST</td>
        <td>
          <a href="http://demo.socialengine.net/blogs/4982/779/dogs">view</a>          |
          <a href="http://demo.socialengine.net/blog/admin-manage/delete/id/779" class="smoothbox">delete</a>        </td>

      </tr>
          <tr>
        <td><input class="checkbox" name="delete_778" value="778" type="checkbox"></td>
        <td>778</td>
        <td>birkenstock sandals really fun times</td>
        <td>yizhi Jackets</td>
        <td>21</td>

        <td>January 28, 2011 10:53:46 PM PST</td>
        <td>
          <a href="http://demo.socialengine.net/blogs/4974/778/birkenstock-sandals-really-fun-t">view</a>          |
          <a href="http://demo.socialengine.net/blog/admin-manage/delete/id/778" class="smoothbox">delete</a>        </td>
      </tr>
          <tr>
        <td><input class="checkbox" name="delete_777" value="777" type="checkbox"></td>

        <td>777</td>
        <td>birkenstock outlet am in class row</td>
        <td>yizhi Jackets</td>
        <td>7</td>
        <td>January 28, 2011 10:49:00 PM PST</td>
        <td>

          <a href="http://demo.socialengine.net/blogs/4974/777/birkenstock-outlet-am-in-class-r">view</a>          |
          <a href="http://demo.socialengine.net/blog/admin-manage/delete/id/777" class="smoothbox">delete</a>        </td>
      </tr>
          <tr>
        <td><input class="checkbox" name="delete_776" value="776" type="checkbox"></td>
        <td>776</td>
        <td>birkenstock shoes a Footbath with massage</td>

        <td>yizhi Jackets</td>
        <td>6</td>
        <td>January 28, 2011 10:47:46 PM PST</td>
        <td>
          <a href="http://demo.socialengine.net/blogs/4974/776/birkenstock-shoes-a-footbath-wit">view</a>          |
          <a href="http://demo.socialengine.net/blog/admin-manage/delete/id/776" class="smoothbox">delete</a>        </td>

      </tr>
          <tr>
        <td><input class="checkbox" name="delete_775" value="775" type="checkbox"></td>
        <td>775</td>
        <td>birkenstock sandals answered</td>
        <td>yizhi Jackets</td>
        <td>7</td>

        <td>January 28, 2011 10:46:25 PM PST</td>
        <td>
          <a href="http://demo.socialengine.net/blogs/4974/775/birkenstock-sandals-answered">view</a>          |
          <a href="http://demo.socialengine.net/blog/admin-manage/delete/id/775" class="smoothbox">delete</a>        </td>
      </tr>
          <tr>
        <td><input class="checkbox" name="delete_774" value="774" type="checkbox"></td>

        <td>774</td>
        <td>birkenstock back</td>
        <td>yizhi Jackets</td>
        <td>5</td>
        <td>January 28, 2011 10:42:30 PM PST</td>
        <td>

          <a href="http://demo.socialengine.net/blogs/4974/774/birkenstock-back">view</a>          |
          <a href="http://demo.socialengine.net/blog/admin-manage/delete/id/774" class="smoothbox">delete</a>        </td>
      </tr>
          <tr>
        <td><input class="checkbox" name="delete_773" value="773" type="checkbox"></td>
        <td>773</td>
        <td>About wow buy gold, everyone interested</td>

        <td>Susan Express</td>
        <td>12</td>
        <td>January 28, 2011 9:20:00 PM PST</td>
        <td>
          <a href="http://demo.socialengine.net/blogs/4978/773/about-wow-buy-gold-everyone-int">view</a>          |
          <a href="http://demo.socialengine.net/blog/admin-manage/delete/id/773" class="smoothbox">delete</a>        </td>

      </tr>
          <tr>
        <td><input class="checkbox" name="delete_772" value="772" type="checkbox"></td>
        <td>772</td>
        <td>Want to buy wow gold europe, you need to spend mind</td>
        <td>Susan Express</td>
        <td>10</td>

        <td>January 28, 2011 9:19:20 PM PST</td>
        <td>
          <a href="http://demo.socialengine.net/blogs/4978/772/want-to-buy-wow-gold-europe-you">view</a>          |
          <a href="http://demo.socialengine.net/blog/admin-manage/delete/id/772" class="smoothbox">delete</a>        </td>
      </tr>
          <tr>
        <td><input class="checkbox" name="delete_771" value="771" type="checkbox"></td>

        <td>771</td>
        <td>To wow gold with in game mail delivery, allowing you to choose </td>
        <td>Susan Express</td>
        <td>5</td>
        <td>January 28, 2011 9:18:19 PM PST</td>
        <td>

          <a href="http://demo.socialengine.net/blogs/4978/771/to-wow-gold-with-in-game-mail-de">view</a>          |
          <a href="http://demo.socialengine.net/blog/admin-manage/delete/id/771" class="smoothbox">delete</a>        </td>
      </tr>
          <tr>
        <td><input class="checkbox" name="delete_770" value="770" type="checkbox"></td>
        <td>770</td>
        <td>test</td>

        <td>Ahn Katie</td>
        <td>7</td>
        <td>January 28, 2011 8:45:32 PM PST</td>
        <td>
          <a href="http://demo.socialengine.net/blogs/2940/770/test">view</a>          |
          <a href="http://demo.socialengine.net/blog/admin-manage/delete/id/770" class="smoothbox">delete</a>        </td>

      </tr>
      </tbody>
</table>

<br>

<div class="buttons">
  <button style="border: 1px solid rgb(119, 119, 119); background-color: rgb(134, 134, 134);" type="submit">Delete Selected</button>
</div>
</form>

<br>
<div>

  


  <div class="pages">
    <ul class="paginationControl">
                              <li class="selected">
            <a href="http://demo.socialengine.net/admin/blog/manage">1</a>
          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/blog/manage/index/page/2">2</a>          </li>

                                <li>
            <a href="http://demo.socialengine.net/admin/blog/manage/index/page/3">3</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/blog/manage/index/page/4">4</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/blog/manage/index/page/5">5</a>          </li>

                                <li>
            <a href="http://demo.socialengine.net/admin/blog/manage/index/page/6">6</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/blog/manage/index/page/7">7</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/blog/manage/index/page/8">8</a>          </li>

                                <li>
            <a href="http://demo.socialengine.net/admin/blog/manage/index/page/9">9</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/blog/manage/index/page/10">10</a>          </li>
                            <li>
          <a href="http://demo.socialengine.net/admin/blog/manage/index/page/2">Next »</a>        </li>

          </ul>
  </div>

</div>