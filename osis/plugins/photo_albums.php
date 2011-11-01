
      <script type="text/javascript">
function multiDelete()
{
  return confirm("Are you sure you want to delete the selected photo albums?");
}

function selectAll()
{
  var i;
  var multidelete_form = $('multidelete_form');
  var inputs = multidelete_form.elements;
  for (i = 1; i < inputs.length - 1; i++) {
    inputs[i].checked = inputs[0].checked;
  }
}
</script>

<h2>
  View Albums</h2>

  <div class="tabs">
    <ul class="navigation">
    <li class="active">
        <a class="menu_album_admin_main album_admin_main_manage" href="http://demo.socialengine.net/admin/album/manage">View Albums</a>

    </li>
    <li>
        <a class="menu_album_admin_main album_admin_main_settings" href="http://demo.socialengine.net/admin/album/settings">Global Settings</a>
    </li>
    <li>
        <a class="menu_album_admin_main album_admin_main_level" href="http://demo.socialengine.net/admin/album/level">Member Level Settings</a>
    </li>
    <li>

        <a class="menu_album_admin_main album_admin_main_categories" href="http://demo.socialengine.net/admin/album/settings/categories">Categories</a>
    </li>
</ul>  </div>

<p> This page lists all of the photo albums your users have posted. You
can use this page to monitor these albums and delete offensive material
if necessary. Entering criteria into the filter fields will help you
find specific album entries. Leaving the filter fields blank will show
all the album entries on your social network.</p>

<br>

<form id="multidelete_form" action="/admin/album/manage" onsubmit="return multiDelete()" method="POST">
  <table class="admin_table">

    <thead>
      <tr>
        <th class="admin_table_short"><input onclick="selectAll()" class="checkbox" type="checkbox"></th>
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
            <td><input class="checkbox" name="delete_1" value="1" type="checkbox"></td>
            <td>1</td>

            <td>Profile Photos</td>
            <td>Stephen Webligo</td>
            <td>312</td>
            <td>June 30, 2010 6:37:21 PM PDT</td>
            <td>
              <a href="http://demo.socialengine.net/albums/view/1">
                view              </a>

              |
                <a href="http://demo.socialengine.net/album/admin-manage/delete/id/1" class="smoothbox">delete</a>            </td>
          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_2" value="2" type="checkbox"></td>
            <td>2</td>
            <td>Wall Photos</td>

            <td>gino bramieri</td>
            <td>99</td>
            <td>July 1, 2010 6:57:30 PM PDT</td>
            <td>
              <a href="http://demo.socialengine.net/albums/view/2">
                view              </a>
              |
                <a href="http://demo.socialengine.net/album/admin-manage/delete/id/2" class="smoothbox">delete</a>            </td>

          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_3" value="3" type="checkbox"></td>
            <td>3</td>
            <td>Profile Photos</td>
            <td>Kaza Face</td>
            <td>124</td>

            <td>July 1, 2010 7:16:55 PM PDT</td>
            <td>
              <a href="http://demo.socialengine.net/albums/view/3">
                view              </a>
              |
                <a href="http://demo.socialengine.net/album/admin-manage/delete/id/3" class="smoothbox">delete</a>            </td>
          </tr>

                  <tr>
            <td><input class="checkbox" name="delete_4" value="4" type="checkbox"></td>
            <td>4</td>
            <td>vvv</td>
            <td>luke  luke</td>
            <td>66</td>
            <td>July 1, 2010 7:17:01 PM PDT</td>

            <td>
              <a href="http://demo.socialengine.net/albums/view/4">
                view              </a>
              |
                <a href="http://demo.socialengine.net/album/admin-manage/delete/id/4" class="smoothbox">delete</a>            </td>
          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_5" value="5" type="checkbox"></td>

            <td>5</td>
            <td>Venise</td>
            <td>Kaza Face</td>
            <td>136</td>
            <td>July 1, 2010 7:19:56 PM PDT</td>
            <td>

              <a href="http://demo.socialengine.net/albums/view/5">
                view              </a>
              |
                <a href="http://demo.socialengine.net/album/admin-manage/delete/id/5" class="smoothbox">delete</a>            </td>
          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_6" value="6" type="checkbox"></td>
            <td>6</td>

            <td>Mi album</td>
            <td>Gustavo Bariento</td>
            <td>85</td>
            <td>July 1, 2010 7:20:31 PM PDT</td>
            <td>
              <a href="http://demo.socialengine.net/albums/view/6">
                view              </a>

              |
                <a href="http://demo.socialengine.net/album/admin-manage/delete/id/6" class="smoothbox">delete</a>            </td>
          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_7" value="7" type="checkbox"></td>
            <td>7</td>
            <td>Profile Photos</td>

            <td>Gustavo Bariento</td>
            <td>71</td>
            <td>July 1, 2010 7:21:53 PM PDT</td>
            <td>
              <a href="http://demo.socialengine.net/albums/view/7">
                view              </a>
              |
                <a href="http://demo.socialengine.net/album/admin-manage/delete/id/7" class="smoothbox">delete</a>            </td>

          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_8" value="8" type="checkbox"></td>
            <td>8</td>
            <td>Profile Photos</td>
            <td>luke  luke</td>
            <td>58</td>

            <td>July 1, 2010 7:38:50 PM PDT</td>
            <td>
              <a href="http://demo.socialengine.net/albums/view/8">
                view              </a>
              |
                <a href="http://demo.socialengine.net/album/admin-manage/delete/id/8" class="smoothbox">delete</a>            </td>
          </tr>

                  <tr>
            <td><input class="checkbox" name="delete_9" value="9" type="checkbox"></td>
            <td>9</td>
            <td>Nice place</td>
            <td>mohamed suliman</td>
            <td>93</td>
            <td>July 1, 2010 9:20:42 PM PDT</td>

            <td>
              <a href="http://demo.socialengine.net/albums/view/9">
                view              </a>
              |
                <a href="http://demo.socialengine.net/album/admin-manage/delete/id/9" class="smoothbox">delete</a>            </td>
          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_10" value="10" type="checkbox"></td>

            <td>10</td>
            <td>Profile Photos</td>
            <td>Bob Barker</td>
            <td>88</td>
            <td>July 1, 2010 11:04:06 PM PDT</td>
            <td>

              <a href="http://demo.socialengine.net/albums/view/10">
                view              </a>
              |
                <a href="http://demo.socialengine.net/album/admin-manage/delete/id/10" class="smoothbox">delete</a>            </td>
          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_13" value="13" type="checkbox"></td>
            <td>13</td>

            <td>BayburtBook</td>
            <td>Murat KÖKSAL</td>
            <td>71</td>
            <td>July 1, 2010 11:26:36 PM PDT</td>
            <td>
              <a href="http://demo.socialengine.net/albums/view/13">
                view              </a>

              |
                <a href="http://demo.socialengine.net/album/admin-manage/delete/id/13" class="smoothbox">delete</a>            </td>
          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_14" value="14" type="checkbox"></td>
            <td>14</td>
            <td>Message Photos</td>

            <td>Aliaksandr Misiyuk</td>
            <td>0</td>
            <td>July 2, 2010 12:26:29 AM PDT</td>
            <td>
              <a href="http://demo.socialengine.net/albums/view/14">
                view              </a>
              |
                <a href="http://demo.socialengine.net/album/admin-manage/delete/id/14" class="smoothbox">delete</a>            </td>

          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_16" value="16" type="checkbox"></td>
            <td>16</td>
            <td>Message Photos</td>
            <td>Bob Barker</td>
            <td>0</td>

            <td>July 2, 2010 12:31:24 AM PDT</td>
            <td>
              <a href="http://demo.socialengine.net/albums/view/16">
                view              </a>
              |
                <a href="http://demo.socialengine.net/album/admin-manage/delete/id/16" class="smoothbox">delete</a>            </td>
          </tr>

                  <tr>
            <td><input class="checkbox" name="delete_18" value="18" type="checkbox"></td>
            <td>18</td>
            <td>Profile Photos</td>
            <td>Peer Parker</td>
            <td>29</td>
            <td>July 2, 2010 12:37:04 AM PDT</td>

            <td>
              <a href="http://demo.socialengine.net/albums/view/18">
                view              </a>
              |
                <a href="http://demo.socialengine.net/album/admin-manage/delete/id/18" class="smoothbox">delete</a>            </td>
          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_19" value="19" type="checkbox"></td>

            <td>19</td>
            <td>Wall Photos</td>
            <td>Stewie Griffin</td>
            <td>53</td>
            <td>July 2, 2010 12:50:17 AM PDT</td>
            <td>

              <a href="http://demo.socialengine.net/albums/view/19">
                view              </a>
              |
                <a href="http://demo.socialengine.net/album/admin-manage/delete/id/19" class="smoothbox">delete</a>            </td>
          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_20" value="20" type="checkbox"></td>
            <td>20</td>

            <td>Wall Photos</td>
            <td>Murat KÖKSAL</td>
            <td>72</td>
            <td>July 2, 2010 4:24:57 AM PDT</td>
            <td>
              <a href="http://demo.socialengine.net/albums/view/20">
                view              </a>

              |
                <a href="http://demo.socialengine.net/album/admin-manage/delete/id/20" class="smoothbox">delete</a>            </td>
          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_21" value="21" type="checkbox"></td>
            <td>21</td>
            <td>Profile Photos</td>

            <td>Divit  Chadha</td>
            <td>29</td>
            <td>July 2, 2010 4:51:38 AM PDT</td>
            <td>
              <a href="http://demo.socialengine.net/albums/view/21">
                view              </a>
              |
                <a href="http://demo.socialengine.net/album/admin-manage/delete/id/21" class="smoothbox">delete</a>            </td>

          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_24" value="24" type="checkbox"></td>
            <td>24</td>
            <td>Cars</td>
            <td>tuongee niko</td>
            <td>73</td>

            <td>July 2, 2010 8:30:01 AM PDT</td>
            <td>
              <a href="http://demo.socialengine.net/albums/view/24">
                view              </a>
              |
                <a href="http://demo.socialengine.net/album/admin-manage/delete/id/24" class="smoothbox">delete</a>            </td>
          </tr>

                  <tr>
            <td><input class="checkbox" name="delete_25" value="25" type="checkbox"></td>
            <td>25</td>
            <td>Profile Photos</td>
            <td>vad vad</td>
            <td>71</td>
            <td>July 2, 2010 10:16:47 AM PDT</td>

            <td>
              <a href="http://demo.socialengine.net/albums/view/25">
                view              </a>
              |
                <a href="http://demo.socialengine.net/album/admin-manage/delete/id/25" class="smoothbox">delete</a>            </td>
          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_26" value="26" type="checkbox"></td>

            <td>26</td>
            <td>Message Photos</td>
            <td>vad vad</td>
            <td>0</td>
            <td>July 2, 2010 10:18:45 AM PDT</td>
            <td>

              <a href="http://demo.socialengine.net/albums/view/26">
                view              </a>
              |
                <a href="http://demo.socialengine.net/album/admin-manage/delete/id/26" class="smoothbox">delete</a>            </td>
          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_30" value="30" type="checkbox"></td>
            <td>30</td>

            <td>Wall Photos</td>
            <td>Miguel Salcedo</td>
            <td>33</td>
            <td>July 2, 2010 1:10:15 PM PDT</td>
            <td>
              <a href="http://demo.socialengine.net/albums/view/30">
                view              </a>

              |
                <a href="http://demo.socialengine.net/album/admin-manage/delete/id/30" class="smoothbox">delete</a>            </td>
          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_31" value="31" type="checkbox"></td>
            <td>31</td>
            <td>Demo</td>

            <td>Nobody12 Nobody</td>
            <td>94</td>
            <td>July 2, 2010 1:38:48 PM PDT</td>
            <td>
              <a href="http://demo.socialengine.net/albums/view/31">
                view              </a>
              |
                <a href="http://demo.socialengine.net/album/admin-manage/delete/id/31" class="smoothbox">delete</a>            </td>

          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_32" value="32" type="checkbox"></td>
            <td>32</td>
            <td>Profile Photos</td>
            <td>Prs prs</td>
            <td>48</td>

            <td>July 2, 2010 2:13:29 PM PDT</td>
            <td>
              <a href="http://demo.socialengine.net/albums/view/32">
                view              </a>
              |
                <a href="http://demo.socialengine.net/album/admin-manage/delete/id/32" class="smoothbox">delete</a>            </td>
          </tr>

                  <tr>
            <td><input class="checkbox" name="delete_33" value="33" type="checkbox"></td>
            <td>33</td>
            <td>Message Photos</td>
            <td>Prs prs</td>
            <td>0</td>
            <td>July 2, 2010 2:22:05 PM PDT</td>

            <td>
              <a href="http://demo.socialengine.net/albums/view/33">
                view              </a>
              |
                <a href="http://demo.socialengine.net/album/admin-manage/delete/id/33" class="smoothbox">delete</a>            </td>
          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_35" value="35" type="checkbox"></td>

            <td>35</td>
            <td>Profile Photos</td>
            <td>David Black</td>
            <td>73</td>
            <td>July 2, 2010 5:34:33 PM PDT</td>
            <td>

              <a href="http://demo.socialengine.net/albums/view/35">
                view              </a>
              |
                <a href="http://demo.socialengine.net/album/admin-manage/delete/id/35" class="smoothbox">delete</a>            </td>
          </tr>
            </tbody>
  </table>

  <br>

  <div class="buttons">
    <button type="submit">
      Delete Selected    </button>
  </div>
</form>

<br>

<div>

  


  <div class="pages">
    <ul class="paginationControl">
                              <li class="selected">
            <a href="http://demo.socialengine.net/admin/album/manage">1</a>
          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/album/manage/index/page/2">2</a>          </li>

                                <li>
            <a href="http://demo.socialengine.net/admin/album/manage/index/page/3">3</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/album/manage/index/page/4">4</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/album/manage/index/page/5">5</a>          </li>

                                <li>
            <a href="http://demo.socialengine.net/admin/album/manage/index/page/6">6</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/album/manage/index/page/7">7</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/album/manage/index/page/8">8</a>          </li>

                                <li>
            <a href="http://demo.socialengine.net/admin/album/manage/index/page/9">9</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/album/manage/index/page/10">10</a>          </li>
                            <li>
          <a href="http://demo.socialengine.net/admin/album/manage/index/page/2">Next »</a>        </li>

          </ul>
  </div>

</div>