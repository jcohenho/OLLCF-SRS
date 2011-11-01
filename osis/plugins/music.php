
      
<script type="text/javascript">

function multiDelete()
{
  return confirm("Are you sure you want to delete the selected playlists?");
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

<h2>Music Plugin</h2>

  <div class="tabs">
    <ul class="navigation">
    <li class="active">
        <a class="menu_music_admin_main music_admin_main_manage" href="http://demo.socialengine.net/admin/music/manage">Manage Music</a>

    </li>
    <li>
        <a class="menu_music_admin_main music_admin_main_settings" href="http://demo.socialengine.net/admin/music/settings">Global Settings</a>
    </li>
    <li>
        <a class="menu_music_admin_main music_admin_main_level" href="http://demo.socialengine.net/admin/music/level">Member Level Settings</a>
    </li>
</ul>  </div>

<br>
  <form id="multidelete_form" method="post" action="/admin/music/manage" onsubmit="return multiDelete()">
  <table class="admin_table">
    <thead>
      <tr>
        <th class="admin_table_short"><input onclick="selectAll();" class="checkbox" type="checkbox"></th>
        <th class="admin_table_short">ID</th>
        <th>Title</th>

        <th>Owner</th>
        <th>Songs</th>
        <th>Plays</th>
        <th>Date</th>
        <th>Options</th>
      </tr>

    </thead>
    <tbody>
              <tr>
          <td><input class="checkbox" name="delete_4" value="4" type="checkbox"></td>
          <td>4</td>
          <td>Monster</td>
          <td>Bob Barker</td>

          <td>5          </td><td>1,082</td>
          <td>2010-07-02 06:26:58</td>
          <td>
            <a href="http://demo.socialengine.net/music/4/monster">play</a>            |
            <a href="http://demo.socialengine.net/music/admin-manage/delete/id/4" class="smoothbox">delete</a>          </td>
        </tr>

            <tr>
          <td><input class="checkbox" name="delete_5" value="5" type="checkbox"></td>
          <td>5</td>
          <td>Favorite songs</td>
          <td>John Smith</td>
          <td>1          </td><td>166</td>

          <td>2010-07-02 06:58:21</td>
          <td>
            <a href="http://demo.socialengine.net/music/5/favorite-songs">play</a>            |
            <a href="http://demo.socialengine.net/music/admin-manage/delete/id/5" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_6" value="6" type="checkbox"></td>

          <td>6</td>
          <td>musci</td>
          <td>ru mar</td>
          <td>1          </td><td>102</td>
          <td>2010-07-02 07:22:31</td>
          <td>

            <a href="http://demo.socialengine.net/music/6/musci">play</a>            |
            <a href="http://demo.socialengine.net/music/admin-manage/delete/id/6" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_10" value="10" type="checkbox"></td>
          <td>10</td>
          <td>Music</td>

          <td>Gustavo Bariento</td>
          <td>3          </td><td>232</td>
          <td>2010-07-02 13:45:20</td>
          <td>
            <a href="http://demo.socialengine.net/music/10/music">play</a>            |
            <a href="http://demo.socialengine.net/music/admin-manage/delete/id/10" class="smoothbox">delete</a>          </td>

        </tr>
            <tr>
          <td><input class="checkbox" name="delete_13" value="13" type="checkbox"></td>
          <td>13</td>
          <td>test</td>
          <td>ahmed tahmed</td>
          <td>3          </td><td>137</td>

          <td>2010-07-02 14:26:09</td>
          <td>
            <a href="http://demo.socialengine.net/music/13/test">play</a>            |
            <a href="http://demo.socialengine.net/music/admin-manage/delete/id/13" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_14" value="14" type="checkbox"></td>

          <td>14</td>
          <td>tfn</td>
          <td>tfn ctn</td>
          <td>1          </td><td>81</td>
          <td>2010-07-02 15:33:21</td>
          <td>

            <a href="http://demo.socialengine.net/music/14/tfn">play</a>            |
            <a href="http://demo.socialengine.net/music/admin-manage/delete/id/14" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_16" value="16" type="checkbox"></td>
          <td>16</td>
          <td>Dave's</td>

          <td>David Black</td>
          <td>2          </td><td>134</td>
          <td>2010-07-03 00:44:31</td>
          <td>
            <a href="http://demo.socialengine.net/music/16/dave-s">play</a>            |
            <a href="http://demo.socialengine.net/music/admin-manage/delete/id/16" class="smoothbox">delete</a>          </td>

        </tr>
            <tr>
          <td><input class="checkbox" name="delete_17" value="17" type="checkbox"></td>
          <td>17</td>
          <td>def leppard</td>
          <td>g meanie</td>
          <td>1          </td><td>70</td>

          <td>2010-07-03 03:07:33</td>
          <td>
            <a href="http://demo.socialengine.net/music/17/def-leppard">play</a>            |
            <a href="http://demo.socialengine.net/music/admin-manage/delete/id/17" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_18" value="18" type="checkbox"></td>

          <td>18</td>
          <td>semo pro</td>
          <td>g meanie</td>
          <td>1          </td><td>104</td>
          <td>2010-07-03 03:12:24</td>
          <td>

            <a href="http://demo.socialengine.net/music/18/semo-pro">play</a>            |
            <a href="http://demo.socialengine.net/music/admin-manage/delete/id/18" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_19" value="19" type="checkbox"></td>
          <td>19</td>
          <td>alex</td>

          <td>alex mt</td>
          <td>1          </td><td>74</td>
          <td>2010-07-03 09:29:24</td>
          <td>
            <a href="http://demo.socialengine.net/music/19/alex">play</a>            |
            <a href="http://demo.socialengine.net/music/admin-manage/delete/id/19" class="smoothbox">delete</a>          </td>

        </tr>
            <tr>
          <td><input class="checkbox" name="delete_22" value="22" type="checkbox"></td>
          <td>22</td>
          <td>Coldplay</td>
          <td>Bruno Serrano</td>
          <td>3          </td><td>120</td>

          <td>2010-07-03 19:38:59</td>
          <td>
            <a href="http://demo.socialengine.net/music/22/coldplay">play</a>            |
            <a href="http://demo.socialengine.net/music/admin-manage/delete/id/22" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_23" value="23" type="checkbox"></td>

          <td>23</td>
          <td>js</td>
          <td>peter parker</td>
          <td>1          </td><td>45</td>
          <td>2010-07-03 22:17:47</td>
          <td>

            <a href="http://demo.socialengine.net/music/23/js">play</a>            |
            <a href="http://demo.socialengine.net/music/admin-manage/delete/id/23" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_24" value="24" type="checkbox"></td>
          <td>24</td>
          <td>My Tunes</td>

          <td>Just Bud .</td>
          <td>1          </td><td>48</td>
          <td>2010-07-04 14:14:28</td>
          <td>
            <a href="http://demo.socialengine.net/music/24/my-tunes">play</a>            |
            <a href="http://demo.socialengine.net/music/admin-manage/delete/id/24" class="smoothbox">delete</a>          </td>

        </tr>
            <tr>
          <td><input class="checkbox" name="delete_28" value="28" type="checkbox"></td>
          <td>28</td>
          <td>abc</td>
          <td>abc abc</td>
          <td>1          </td><td>29</td>

          <td>2010-07-04 18:44:30</td>
          <td>
            <a href="http://demo.socialengine.net/music/28/abc">play</a>            |
            <a href="http://demo.socialengine.net/music/admin-manage/delete/id/28" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_32" value="32" type="checkbox"></td>

          <td>32</td>
          <td>?????????? ??????</td>
          <td>Denis Verten</td>
          <td>1          </td><td>55</td>
          <td>2010-07-04 20:29:01</td>
          <td>

            <a href="http://demo.socialengine.net/music/32/-">play</a>            |
            <a href="http://demo.socialengine.net/music/admin-manage/delete/id/32" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_34" value="34" type="checkbox"></td>
          <td>34</td>
          <td>Event Play List</td>

          <td>Tim Cant</td>
          <td>2          </td><td>39</td>
          <td>2010-07-05 11:55:05</td>
          <td>
            <a href="http://demo.socialengine.net/music/34/event-play-list">play</a>            |
            <a href="http://demo.socialengine.net/music/admin-manage/delete/id/34" class="smoothbox">delete</a>          </td>

        </tr>
            <tr>
          <td><input class="checkbox" name="delete_36" value="36" type="checkbox"></td>
          <td>36</td>
          <td>Habamam Siniif</td>
          <td>ezfuat ezfuat</td>
          <td>1          </td><td>23</td>

          <td>2010-07-05 14:43:22</td>
          <td>
            <a href="http://demo.socialengine.net/music/36/habamam-s-n-f">play</a>            |
            <a href="http://demo.socialengine.net/music/admin-manage/delete/id/36" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_38" value="38" type="checkbox"></td>

          <td>38</td>
          <td>Baladas</td>
          <td>Pal Rios</td>
          <td>1          </td><td>28</td>
          <td>2010-07-05 16:28:44</td>
          <td>

            <a href="http://demo.socialengine.net/music/38/baladas">play</a>            |
            <a href="http://demo.socialengine.net/music/admin-manage/delete/id/38" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_40" value="40" type="checkbox"></td>
          <td>40</td>
          <td>Music for your soul =)</td>

          <td>! ?athrin  :)</td>
          <td>1          </td><td>234</td>
          <td>2010-07-05 16:39:27</td>
          <td>
            <a href="http://demo.socialengine.net/music/40/music-for-your-soul">play</a>            |
            <a href="http://demo.socialengine.net/music/admin-manage/delete/id/40" class="smoothbox">delete</a>          </td>

        </tr>
            <tr>
          <td><input class="checkbox" name="delete_41" value="41" type="checkbox"></td>
          <td>41</td>
          <td>test</td>
          <td>Tim Cant</td>
          <td>2          </td><td>27</td>

          <td>2010-07-06 12:26:18</td>
          <td>
            <a href="http://demo.socialengine.net/music/41/test">play</a>            |
            <a href="http://demo.socialengine.net/music/admin-manage/delete/id/41" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_42" value="42" type="checkbox"></td>

          <td>42</td>
          <td>test2</td>
          <td>Tim Cant</td>
          <td>1          </td><td>23</td>
          <td>2010-07-06 12:27:21</td>
          <td>

            <a href="http://demo.socialengine.net/music/42/test2">play</a>            |
            <a href="http://demo.socialengine.net/music/admin-manage/delete/id/42" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_43" value="43" type="checkbox"></td>
          <td>43</td>
          <td>Test</td>

          <td>Veer Pindari</td>
          <td>1          </td><td>50</td>
          <td>2010-07-06 12:39:23</td>
          <td>
            <a href="http://demo.socialengine.net/music/43/test">play</a>            |
            <a href="http://demo.socialengine.net/music/admin-manage/delete/id/43" class="smoothbox">delete</a>          </td>

        </tr>
            <tr>
          <td><input class="checkbox" name="delete_44" value="44" type="checkbox"></td>
          <td>44</td>
          <td>Oldies</td>
          <td>Sean T</td>
          <td>6          </td><td>367</td>

          <td>2010-07-07 02:06:37</td>
          <td>
            <a href="http://demo.socialengine.net/music/44/oldies">play</a>            |
            <a href="http://demo.socialengine.net/music/admin-manage/delete/id/44" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_45" value="45" type="checkbox"></td>

          <td>45</td>
          <td>Mi lista</td>
          <td>asdas Beltran</td>
          <td>1          </td><td>87</td>
          <td>2010-07-07 02:30:57</td>
          <td>

            <a href="http://demo.socialengine.net/music/45/mi-lista">play</a>            |
            <a href="http://demo.socialengine.net/music/admin-manage/delete/id/45" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_48" value="48" type="checkbox"></td>
          <td>48</td>
          <td>asdf</td>

          <td>aaaaaa aaaaaa</td>
          <td>2          </td><td>135</td>
          <td>2010-07-08 13:32:44</td>
          <td>
            <a href="http://demo.socialengine.net/music/48/asdf">play</a>            |
            <a href="http://demo.socialengine.net/music/admin-manage/delete/id/48" class="smoothbox">delete</a>          </td>

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
            <a href="http://demo.socialengine.net/admin/music/manage">1</a>
          </li>

                                <li>
            <a href="http://demo.socialengine.net/admin/music/manage/index/page/2">2</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/music/manage/index/page/3">3</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/music/manage/index/page/4">4</a>          </li>

                                <li>
            <a href="http://demo.socialengine.net/admin/music/manage/index/page/5">5</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/music/manage/index/page/6">6</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/music/manage/index/page/7">7</a>          </li>

                                <li>
            <a href="http://demo.socialengine.net/admin/music/manage/index/page/8">8</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/music/manage/index/page/9">9</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/music/manage/index/page/10">10</a>          </li>

                            <li>
          <a href="http://demo.socialengine.net/admin/music/manage/index/page/2">Next »</a>        </li>
          </ul>
  </div>

  </div>