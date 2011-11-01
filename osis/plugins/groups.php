
<script type="text/javascript">

function multiDelete()
{
  return confirm("Are you sure you want to delete the selected groups?");
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
  Groups Plugin</h2>

  <div class="tabs">
    <ul class="navigation">
    <li class="active">
        <a class="menu_group_admin_main group_admin_main_manage" href="http://demo.socialengine.net/admin/group/manage">Manage Groups</a>

    </li>
    <li>
        <a class="menu_group_admin_main group_admin_main_level" href="http://demo.socialengine.net/admin/group/settings/level">Member Level Settings</a>
    </li>
    <li>
        <a class="menu_group_admin_main group_admin_main_categories" href="http://demo.socialengine.net/admin/group/settings/categories">Categories</a>
    </li>
</ul>  </div>

<p> This page lists all of the group entries your users have posted.
You can use this page to monitor these groups and delete offensive
material if necessary. Entering criteria into the filter fields will
help you find specific group entries. Leaving the filter fields blank
will show all the group entries on your social network.</p>

<br>

  <form id="multidelete_form" method="post" action="/admin/group/manage" onsubmit="return multiDelete()">
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
          <td><input class="checkbox" name="delete_345" value="345" type="checkbox"></td>
          <td>345</td>
          <td>PANAS Latin Social Network</td>
          <td>Anton Cona</td>

          <td>23</td>
          <td>February 2, 2011 11:04:50 PM PST</td>
          <td>
            <a href="http://demo.socialengine.net/group/345">
              view            </a>
            |
            <a href="http://demo.socialengine.net/group/admin-manage/delete/id/345" class="smoothbox">delete</a>          </td>

        </tr>
              <tr>
          <td><input class="checkbox" name="delete_344" value="344" type="checkbox"></td>
          <td>344</td>
          <td>Dave's test group</td>
          <td>David L</td>
          <td>26</td>

          <td>February 2, 2011 11:11:01 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/group/344">
              view            </a>
            |
            <a href="http://demo.socialengine.net/group/admin-manage/delete/id/344" class="smoothbox">delete</a>          </td>
        </tr>

              <tr>
          <td><input class="checkbox" name="delete_343" value="343" type="checkbox"></td>
          <td>343</td>
          <td>closed group example</td>
          <td>pip pippin</td>
          <td>4</td>
          <td>February 2, 2011 10:07:27 AM PST</td>

          <td>
            <a href="http://demo.socialengine.net/group/343">
              view            </a>
            |
            <a href="http://demo.socialengine.net/group/admin-manage/delete/id/343" class="smoothbox">delete</a>          </td>
        </tr>
              <tr>
          <td><input class="checkbox" name="delete_342" value="342" type="checkbox"></td>

          <td>342</td>
          <td>SOFT4GAME.com</td>
          <td>Fergus Fergus</td>
          <td>58</td>
          <td>January 31, 2011 11:31:21 AM PST</td>
          <td>

            <a href="http://demo.socialengine.net/group/342">
              view            </a>
            |
            <a href="http://demo.socialengine.net/group/admin-manage/delete/id/342" class="smoothbox">delete</a>          </td>
        </tr>
              <tr>
          <td><input class="checkbox" name="delete_341" value="341" type="checkbox"></td>
          <td>341</td>

          <td>GM Infotech</td>
          <td>Annis Michelle</td>
          <td>48</td>
          <td>January 31, 2011 8:45:18 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/group/341">
              view            </a>

            |
            <a href="http://demo.socialengine.net/group/admin-manage/delete/id/341" class="smoothbox">delete</a>          </td>
        </tr>
              <tr>
          <td><input class="checkbox" name="delete_340" value="340" type="checkbox"></td>
          <td>340</td>
          <td>YOOPEHO</td>

          <td>Yoopeho Dennis</td>
          <td>41</td>
          <td>January 30, 2011 4:52:14 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/group/340">
              view            </a>
            |
            <a href="http://demo.socialengine.net/group/admin-manage/delete/id/340" class="smoothbox">delete</a>          </td>

        </tr>
              <tr>
          <td><input class="checkbox" name="delete_339" value="339" type="checkbox"></td>
          <td>339</td>
          <td>Test</td>
          <td>David Black</td>
          <td>30</td>

          <td>January 30, 2011 3:18:42 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/group/339">
              view            </a>
            |
            <a href="http://demo.socialengine.net/group/admin-manage/delete/id/339" class="smoothbox">delete</a>          </td>
        </tr>

              <tr>
          <td><input class="checkbox" name="delete_338" value="338" type="checkbox"></td>
          <td>338</td>
          <td>freddyman-Group</td>
          <td>freddyman freddytest</td>
          <td>26</td>
          <td>January 29, 2011 5:41:39 AM PST</td>

          <td>
            <a href="http://demo.socialengine.net/group/338">
              view            </a>
            |
            <a href="http://demo.socialengine.net/group/admin-manage/delete/id/338" class="smoothbox">delete</a>          </td>
        </tr>
              <tr>
          <td><input class="checkbox" name="delete_337" value="337" type="checkbox"></td>

          <td>337</td>
          <td>test</td>
          <td>Wilhelm Pelander</td>
          <td>9</td>
          <td>January 29, 2011 5:16:09 AM PST</td>
          <td>

            <a href="http://demo.socialengine.net/group/337">
              view            </a>
            |
            <a href="http://demo.socialengine.net/group/admin-manage/delete/id/337" class="smoothbox">delete</a>          </td>
        </tr>
              <tr>
          <td><input class="checkbox" name="delete_336" value="336" type="checkbox"></td>
          <td>336</td>

          <td>Anime</td>
          <td>John Simpson</td>
          <td>61</td>
          <td>January 28, 2011 9:01:56 PM PST</td>
          <td>
            <a href="http://demo.socialengine.net/group/336">
              view            </a>

            |
            <a href="http://demo.socialengine.net/group/admin-manage/delete/id/336" class="smoothbox">delete</a>          </td>
        </tr>
              <tr>
          <td><input class="checkbox" name="delete_335" value="335" type="checkbox"></td>
          <td>335</td>
          <td>Ecuador</td>

          <td>Patricio Jimenez</td>
          <td>29</td>
          <td>January 28, 2011 11:43:48 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/group/335">
              view            </a>
            |
            <a href="http://demo.socialengine.net/group/admin-manage/delete/id/335" class="smoothbox">delete</a>          </td>

        </tr>
              <tr>
          <td><input class="checkbox" name="delete_334" value="334" type="checkbox"></td>
          <td>334</td>
          <td>ABC </td>
          <td>Next Edison</td>
          <td>30</td>

          <td>January 27, 2011 10:33:40 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/group/334">
              view            </a>
            |
            <a href="http://demo.socialengine.net/group/admin-manage/delete/id/334" class="smoothbox">delete</a>          </td>
        </tr>

              <tr>
          <td><input class="checkbox" name="delete_333" value="333" type="checkbox"></td>
          <td>333</td>
          <td>test</td>
          <td>maria john</td>
          <td>17</td>
          <td>January 27, 2011 3:55:16 AM PST</td>

          <td>
            <a href="http://demo.socialengine.net/group/333">
              view            </a>
            |
            <a href="http://demo.socialengine.net/group/admin-manage/delete/id/333" class="smoothbox">delete</a>          </td>
        </tr>
              <tr>
          <td><input class="checkbox" name="delete_332" value="332" type="checkbox"></td>

          <td>332</td>
          <td>Music</td>
          <td>Massimo Cipicchia</td>
          <td>29</td>
          <td>January 26, 2011 9:48:48 PM PST</td>
          <td>

            <a href="http://demo.socialengine.net/group/332">
              view            </a>
            |
            <a href="http://demo.socialengine.net/group/admin-manage/delete/id/332" class="smoothbox">delete</a>          </td>
        </tr>
              <tr>
          <td><input class="checkbox" name="delete_331" value="331" type="checkbox"></td>
          <td>331</td>

          <td>Dsportal.sk</td>
          <td>Marek Lompart</td>
          <td>32</td>
          <td>January 26, 2011 2:57:05 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/group/331">
              view            </a>

            |
            <a href="http://demo.socialengine.net/group/admin-manage/delete/id/331" class="smoothbox">delete</a>          </td>
        </tr>
              <tr>
          <td><input class="checkbox" name="delete_330" value="330" type="checkbox"></td>
          <td>330</td>
          <td>Salon24</td>

          <td>John Zorro</td>
          <td>15</td>
          <td>January 25, 2011 11:23:42 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/group/330">
              view            </a>
            |
            <a href="http://demo.socialengine.net/group/admin-manage/delete/id/330" class="smoothbox">delete</a>          </td>

        </tr>
              <tr>
          <td><input class="checkbox" name="delete_329" value="329" type="checkbox"></td>
          <td>329</td>
          <td>Enrise Group</td>
          <td>Nageshwar Rao Mykala</td>
          <td>55</td>

          <td>January 25, 2011 4:02:11 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/group/329">
              view            </a>
            |
            <a href="http://demo.socialengine.net/group/admin-manage/delete/id/329" class="smoothbox">delete</a>          </td>
        </tr>

              <tr>
          <td><input class="checkbox" name="delete_328" value="328" type="checkbox"></td>
          <td>328</td>
          <td>Welcome</td>
          <td>Guest Social</td>
          <td>29</td>
          <td>January 24, 2011 10:21:45 PM PST</td>

          <td>
            <a href="http://demo.socialengine.net/group/328">
              view            </a>
            |
            <a href="http://demo.socialengine.net/group/admin-manage/delete/id/328" class="smoothbox">delete</a>          </td>
        </tr>
              <tr>
          <td><input class="checkbox" name="delete_327" value="327" type="checkbox"></td>

          <td>327</td>
          <td>YO</td>
          <td>tn tnh</td>
          <td>18</td>
          <td>January 24, 2011 6:59:44 AM PST</td>
          <td>

            <a href="http://demo.socialengine.net/group/327">
              view            </a>
            |
            <a href="http://demo.socialengine.net/group/admin-manage/delete/id/327" class="smoothbox">delete</a>          </td>
        </tr>
              <tr>
          <td><input class="checkbox" name="delete_326" value="326" type="checkbox"></td>
          <td>326</td>

          <td>GamesBv.Ro</td>
          <td>bengu bengu</td>
          <td>75</td>
          <td>January 22, 2011 4:42:56 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/group/326">
              view            </a>

            |
            <a href="http://demo.socialengine.net/group/admin-manage/delete/id/326" class="smoothbox">delete</a>          </td>
        </tr>
              <tr>
          <td><input class="checkbox" name="delete_325" value="325" type="checkbox"></td>
          <td>325</td>
          <td>my own</td>

          <td>ananthnag j</td>
          <td>33</td>
          <td>January 22, 2011 2:55:14 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/group/325">
              view            </a>
            |
            <a href="http://demo.socialengine.net/group/admin-manage/delete/id/325" class="smoothbox">delete</a>          </td>

        </tr>
              <tr>
          <td><input class="checkbox" name="delete_324" value="324" type="checkbox"></td>
          <td>324</td>
          <td>super sports</td>
          <td>John Subscriber</td>
          <td>42</td>

          <td>January 20, 2011 10:39:13 PM PST</td>
          <td>
            <a href="http://demo.socialengine.net/group/324">
              view            </a>
            |
            <a href="http://demo.socialengine.net/group/admin-manage/delete/id/324" class="smoothbox">delete</a>          </td>
        </tr>

              <tr>
          <td><input class="checkbox" name="delete_323" value="323" type="checkbox"></td>
          <td>323</td>
          <td>HIP HOP</td>
          <td>Urban Hitz Radio</td>
          <td>48</td>
          <td>January 20, 2011 4:57:41 PM PST</td>

          <td>
            <a href="http://demo.socialengine.net/group/323">
              view            </a>
            |
            <a href="http://demo.socialengine.net/group/admin-manage/delete/id/323" class="smoothbox">delete</a>          </td>
        </tr>
              <tr>
          <td><input class="checkbox" name="delete_322" value="322" type="checkbox"></td>

          <td>322</td>
          <td>Galaxy</td>
          <td>Adrian Wood</td>
          <td>21</td>
          <td>January 20, 2011 3:17:12 PM PST</td>
          <td>

            <a href="http://demo.socialengine.net/group/322">
              view            </a>
            |
            <a href="http://demo.socialengine.net/group/admin-manage/delete/id/322" class="smoothbox">delete</a>          </td>
        </tr>
              <tr>
          <td><input class="checkbox" name="delete_319" value="319" type="checkbox"></td>
          <td>319</td>

          <td>kjhkjhkjh</td>
          <td>Michael Thomas</td>
          <td>64</td>
          <td>January 18, 2011 11:29:33 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/group/319">
              view            </a>

            |
            <a href="http://demo.socialengine.net/group/admin-manage/delete/id/319" class="smoothbox">delete</a>          </td>
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
            <a href="http://demo.socialengine.net/admin/group/manage">1</a>
          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/group/manage/index/page/2">2</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/group/manage/index/page/3">3</a>          </li>

                                <li>
            <a href="http://demo.socialengine.net/admin/group/manage/index/page/4">4</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/group/manage/index/page/5">5</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/group/manage/index/page/6">6</a>          </li>

                                <li>
            <a href="http://demo.socialengine.net/admin/group/manage/index/page/7">7</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/group/manage/index/page/8">8</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/group/manage/index/page/9">9</a>          </li>

                                <li>
            <a href="http://demo.socialengine.net/admin/group/manage/index/page/10">10</a>          </li>
                            <li>
          <a href="http://demo.socialengine.net/admin/group/manage/index/page/2">Next »</a>        </li>
          </ul>
  </div>

  </div>