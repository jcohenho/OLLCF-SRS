     

<script type="text/javascript">

function multiDelete()
{
  return confirm("Are you sure you want to delete the selected videos?");
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

 function killProcess(video_id) {
    (new Request.JSON({
      'format': 'json',
      'url' : '/video/admin-manage/kill',
      'data' : {
        'format' : 'json',
        'video_id' : video_id
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
  Videos Plugin</h2>

  <div class="tabs">
    <ul class="navigation">
    <li class="active">
        <a class="menu_video_admin_main video_admin_main_manage" href="http://demo.socialengine.net/admin/video/manage">Manage Videos</a>

    </li>
    <li>
        <a class="menu_video_admin_main video_admin_main_utility" href="http://demo.socialengine.net/admin/video/settings/utility">Video Utilities</a>
    </li>
    <li>
        <a class="menu_video_admin_main video_admin_main_settings" href="http://demo.socialengine.net/admin/video/settings">Global Settings</a>
    </li>
    <li>

        <a class="menu_video_admin_main video_admin_main_level" href="http://demo.socialengine.net/admin/video/settings/level">Member Level Settings</a>
    </li>
    <li>
        <a class="menu_video_admin_main video_admin_main_categories" href="http://demo.socialengine.net/admin/video/settings/categories">Categories</a>
    </li>
</ul>  </div>

<p> This page lists all of the videos your users have posted. You can
use this page to monitor these videos and delete offensive material if
necessary. Entering criteria into the filter fields will help you find
specific video. Leaving the filter fields blank will show all the
videos on your social network.</p>

<br>

  <form id="multidelete_form" method="post" action="/admin/video/manage" onsubmit="return multiDelete()">
  <table class="admin_table">
    <thead>
      <tr>
        <th class="admin_table_short"><input onclick="selectAll();" class="checkbox" type="checkbox"></th>
        <th class="admin_table_short">ID</th>
        <th>Title</th>

        <th>Owner</th>
        <th>Views</th>
        <th>State</th>
        <th>Date</th>
        <th>Options</th>
      </tr>

    </thead>
    <tbody>
              <tr>
          <td><input class="checkbox" name="delete_908" value="908" type="checkbox"></td>
          <td>908</td>
          <td>Jurgen Paape - Take That (Burger Voigt Live Mix)</td>
          <td>daGroove Groover</td>

          <td>5</td>
          <td>
            
            ready                      </td>
          <td>February 3, 2011 2:50:20 PM PST</td>
          <td>
            <a href="http://demo.socialengine.net/videos/5114/908">
              view            </a>

            |
            <a href="http://demo.socialengine.net/video/admin-manage/delete/id/908" class="smoothbox">delete</a>          </td>
        </tr>
              <tr>
          <td><input class="checkbox" name="delete_907" value="907" type="checkbox"></td>
          <td>907</td>
          <td>Deepcentral - Music Makes Me Free</td>

          <td>ef dsf</td>
          <td>18</td>
          <td>
            
            ready                      </td>
          <td>February 3, 2011 6:37:52 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/videos/4932/907">

              view            </a>
            |
            <a href="http://demo.socialengine.net/video/admin-manage/delete/id/907" class="smoothbox">delete</a>          </td>
        </tr>
              <tr>
          <td><input class="checkbox" name="delete_906" value="906" type="checkbox"></td>
          <td>906</td>

          <td>w</td>
          <td>pregmatch pregmatch</td>
          <td>11</td>
          <td>
            
            ready                      </td>
          <td>February 3, 2011 4:41:57 AM PST</td>

          <td>
            <a href="http://demo.socialengine.net/videos/856/906">
              view            </a>
            |
            <a href="http://demo.socialengine.net/video/admin-manage/delete/id/906" class="smoothbox">delete</a>          </td>
        </tr>
              <tr>
          <td><input class="checkbox" name="delete_905" value="905" type="checkbox"></td>

          <td>905</td>
          <td>Apple iPad Video</td>
          <td>Jimmy Joe</td>
          <td>23</td>
          <td>
            
            ready                      </td>

          <td>February 2, 2011 12:36:03 PM PST</td>
          <td>
            <a href="http://demo.socialengine.net/videos/4848/905">
              view            </a>
            |
            <a href="http://demo.socialengine.net/video/admin-manage/delete/id/905" class="smoothbox">delete</a>          </td>
        </tr>

              <tr>
          <td><input class="checkbox" name="delete_904" value="904" type="checkbox"></td>
          <td>904</td>
          <td>?????? ???????</td>
          <td>MOstafa Ayman</td>
          <td>21</td>
          <td>

            
            ready                      </td>
          <td>February 2, 2011 9:45:19 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/videos/4658/904">
              view            </a>
            |
            <a href="http://demo.socialengine.net/video/admin-manage/delete/id/904" class="smoothbox">delete</a>          </td>

        </tr>
              <tr>
          <td><input class="checkbox" name="delete_903" value="903" type="checkbox"></td>
          <td>903</td>
          <td>Wynter Gordon - Dirty Talk [Official Video]</td>
          <td>Jay rellik</td>
          <td>24</td>

          <td>
            
            ready                      </td>
          <td>February 2, 2011 8:06:38 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/videos/5078/903">
              view            </a>
            |
            <a href="http://demo.socialengine.net/video/admin-manage/delete/id/903" class="smoothbox">delete</a>          </td>

        </tr>
              <tr>
          <td><input class="checkbox" name="delete_902" value="902" type="checkbox"></td>
          <td>902</td>
          <td>git on rails</td>
          <td>David Debreczeni</td>
          <td>42</td>

          <td>
            
            ready                      </td>
          <td>February 1, 2011 4:26:43 PM PST</td>
          <td>
            <a href="http://demo.socialengine.net/videos/5065/902">
              view            </a>
            |
            <a href="http://demo.socialengine.net/video/admin-manage/delete/id/902" class="smoothbox">delete</a>          </td>

        </tr>
              <tr>
          <td><input class="checkbox" name="delete_901" value="901" type="checkbox"></td>
          <td>901</td>
          <td>2ne1</td>
          <td>Oscar soria</td>
          <td>23</td>

          <td>
            
            ready                      </td>
          <td>February 1, 2011 12:35:49 PM PST</td>
          <td>
            <a href="http://demo.socialengine.net/videos/4996/901">
              view            </a>
            |
            <a href="http://demo.socialengine.net/video/admin-manage/delete/id/901" class="smoothbox">delete</a>          </td>

        </tr>
              <tr>
          <td><input class="checkbox" name="delete_900" value="900" type="checkbox"></td>
          <td>900</td>
          <td>ALIX PEREZ &amp; MC FOKUS</td>
          <td>adrian a</td>

          <td>22</td>
          <td>
            
            ready                      </td>
          <td>February 1, 2011 7:29:58 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/videos/5048/900">
              view            </a>

            |
            <a href="http://demo.socialengine.net/video/admin-manage/delete/id/900" class="smoothbox">delete</a>          </td>
        </tr>
              <tr>
          <td><input class="checkbox" name="delete_899" value="899" type="checkbox"></td>
          <td>899</td>
          <td>Diseño Web</td>

          <td>adrian a</td>
          <td>19</td>
          <td>
            
            ready                      </td>
          <td>February 1, 2011 7:28:57 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/videos/5048/899">

              view            </a>
            |
            <a href="http://demo.socialengine.net/video/admin-manage/delete/id/899" class="smoothbox">delete</a>          </td>
        </tr>
              <tr>
          <td><input class="checkbox" name="delete_898" value="898" type="checkbox"></td>
          <td>898</td>

          <td>Chiswick</td>
          <td>Peter Pan</td>
          <td>12</td>
          <td>
            
            ready                      </td>
          <td>February 1, 2011 12:14:43 AM PST</td>

          <td>
            <a href="http://demo.socialengine.net/videos/2814/898">
              view            </a>
            |
            <a href="http://demo.socialengine.net/video/admin-manage/delete/id/898" class="smoothbox">delete</a>          </td>
        </tr>
              <tr>
          <td><input class="checkbox" name="delete_896" value="896" type="checkbox"></td>

          <td>896</td>
          <td>MillerTV: Mexico day  BPM Festival</td>
          <td>Danil Bro</td>
          <td>23</td>
          <td>
            
            ready                      </td>

          <td>January 31, 2011 12:34:23 PM PST</td>
          <td>
            <a href="http://demo.socialengine.net/videos/5040/896">
              view            </a>
            |
            <a href="http://demo.socialengine.net/video/admin-manage/delete/id/896" class="smoothbox">delete</a>          </td>
        </tr>

              <tr>
          <td><input class="checkbox" name="delete_895" value="895" type="checkbox"></td>
          <td>895</td>
          <td>????????? ????? tutorial dnb dance: ????.Bazes. by sweetsz</td>
          <td>Danil Bro</td>
          <td>26</td>
          <td>

            
            ready                      </td>
          <td>January 31, 2011 12:30:53 PM PST</td>
          <td>
            <a href="http://demo.socialengine.net/videos/5040/895">
              view            </a>
            |
            <a href="http://demo.socialengine.net/video/admin-manage/delete/id/895" class="smoothbox">delete</a>          </td>

        </tr>
              <tr>
          <td><input class="checkbox" name="delete_894" value="894" type="checkbox"></td>
          <td>894</td>
          <td>MillerTV : Arma. Luciano</td>
          <td>Danil Bro</td>
          <td>0</td>

          <td>
            
            ready                      </td>
          <td>January 31, 2011 12:27:58 PM PST</td>
          <td>
            <a href="http://demo.socialengine.net/videos/5040/894">
              view            </a>
            |
            <a href="http://demo.socialengine.net/video/admin-manage/delete/id/894" class="smoothbox">delete</a>          </td>

        </tr>
              <tr>
          <td><input class="checkbox" name="delete_893" value="893" type="checkbox"></td>
          <td>893</td>
          <td>Miller TV Mexico Night BPM Festival</td>
          <td>Danil Bro</td>
          <td>15</td>

          <td>
            
            ready                      </td>
          <td>January 31, 2011 12:11:12 PM PST</td>
          <td>
            <a href="http://demo.socialengine.net/videos/5040/893">
              view            </a>
            |
            <a href="http://demo.socialengine.net/video/admin-manage/delete/id/893" class="smoothbox">delete</a>          </td>

        </tr>
              <tr>
          <td><input class="checkbox" name="delete_889" value="889" type="checkbox"></td>
          <td>889</td>
          <td>2ne1</td>
          <td>Oscar soria</td>
          <td>15</td>

          <td>
            
            ready                      </td>
          <td>January 30, 2011 5:56:14 PM PST</td>
          <td>
            <a href="http://demo.socialengine.net/videos/4996/889">
              view            </a>
            |
            <a href="http://demo.socialengine.net/video/admin-manage/delete/id/889" class="smoothbox">delete</a>          </td>

        </tr>
              <tr>
          <td><input class="checkbox" name="delete_888" value="888" type="checkbox"></td>
          <td>888</td>
          <td>Art In love</td>
          <td>Niko papadopoulos</td>
          <td>30</td>

          <td>
            
            ready                      </td>
          <td>January 30, 2011 3:05:02 PM PST</td>
          <td>
            <a href="http://demo.socialengine.net/videos/5015/888">
              view            </a>
            |
            <a href="http://demo.socialengine.net/video/admin-manage/delete/id/888" class="smoothbox">delete</a>          </td>

        </tr>
              <tr>
          <td><input class="checkbox" name="delete_886" value="886" type="checkbox"></td>
          <td>886</td>
          <td>Crazy Love</td>
          <td>Raja Raja</td>
          <td>26</td>

          <td>
            
            ready                      </td>
          <td>January 30, 2011 1:49:36 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/videos/1105/886">
              view            </a>
            |
            <a href="http://demo.socialengine.net/video/admin-manage/delete/id/886" class="smoothbox">delete</a>          </td>

        </tr>
              <tr>
          <td><input class="checkbox" name="delete_885" value="885" type="checkbox"></td>
          <td>885</td>
          <td>asddf</td>
          <td>Ei Kenzi</td>
          <td>31</td>

          <td>
            
            ready                      </td>
          <td>January 29, 2011 6:14:34 PM PST</td>
          <td>
            <a href="http://demo.socialengine.net/videos/4997/885">
              view            </a>
            |
            <a href="http://demo.socialengine.net/video/admin-manage/delete/id/885" class="smoothbox">delete</a>          </td>

        </tr>
              <tr>
          <td><input class="checkbox" name="delete_884" value="884" type="checkbox"></td>
          <td>884</td>
          <td>Download Blue Theme Hd videos to your cell phone - 2009 akshay ar rehman - 9194866 - Zedge.flv</td>
          <td>dsf sdf</td>
          <td>2</td>

          <td>
            
            ready                      </td>
          <td>January 29, 2011 5:57:53 PM PST</td>
          <td>
            <a href="http://demo.socialengine.net/videos/1913/884">
              view            </a>
            |
            <a href="http://demo.socialengine.net/video/admin-manage/delete/id/884" class="smoothbox">delete</a>          </td>

        </tr>
              <tr>
          <td><input class="checkbox" name="delete_883" value="883" type="checkbox"></td>
          <td>883</td>
          <td>far away</td>
          <td>Ei Kenzi</td>
          <td>19</td>

          <td>
            
            ready                      </td>
          <td>January 29, 2011 5:44:30 PM PST</td>
          <td>
            <a href="http://demo.socialengine.net/videos/4997/883">
              view            </a>
            |
            <a href="http://demo.socialengine.net/video/admin-manage/delete/id/883" class="smoothbox">delete</a>          </td>

        </tr>
              <tr>
          <td><input class="checkbox" name="delete_882" value="882" type="checkbox"></td>
          <td>882</td>
          <td>Paramore: crushcrushcrush [OFFICIAL VIDEO]</td>
          <td>Doir Bravo</td>
          <td>15</td>

          <td>
            
            ready                      </td>
          <td>January 29, 2011 5:24:19 PM PST</td>
          <td>
            <a href="http://demo.socialengine.net/videos/4994/882">
              view            </a>
            |
            <a href="http://demo.socialengine.net/video/admin-manage/delete/id/882" class="smoothbox">delete</a>          </td>

        </tr>
              <tr>
          <td><input class="checkbox" name="delete_881" value="881" type="checkbox"></td>
          <td>881</td>
          <td>Lady GaGa - Bad Romance (Official Instrumental) [WITHOUT Backing Vocals]</td>
          <td>Doir Bravo</td>
          <td>11</td>

          <td>
            
            ready                      </td>
          <td>January 29, 2011 5:09:54 PM PST</td>
          <td>
            <a href="http://demo.socialengine.net/videos/4994/881">
              view            </a>
            |
            <a href="http://demo.socialengine.net/video/admin-manage/delete/id/881" class="smoothbox">delete</a>          </td>

        </tr>
              <tr>
          <td><input class="checkbox" name="delete_880" value="880" type="checkbox"></td>
          <td>880</td>
          <td>Raw Video: Man Shot in Egypt Protest</td>
          <td>sdsdsdsdsdsd sdsdsdsdsdsd</td>
          <td>7</td>

          <td>
            
            ready                      </td>
          <td>January 29, 2011 4:50:26 PM PST</td>
          <td>
            <a href="http://demo.socialengine.net/videos/4998/880">
              view            </a>
            |
            <a href="http://demo.socialengine.net/video/admin-manage/delete/id/880" class="smoothbox">delete</a>          </td>

        </tr>
              <tr>
          <td><input class="checkbox" name="delete_879" value="879" type="checkbox"></td>
          <td>879</td>
          <td>My_favorite_smart_phone_platform.flv</td>
          <td>Ei Kenzi</td>
          <td>68</td>

          <td>
            
            ready                      </td>
          <td>January 29, 2011 4:23:56 PM PST</td>
          <td>
            <a href="http://demo.socialengine.net/videos/4997/879">
              view            </a>
            |
            <a href="http://demo.socialengine.net/video/admin-manage/delete/id/879" class="smoothbox">delete</a>          </td>

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
            <a href="http://demo.socialengine.net/admin/video/manage">1</a>

          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/video/manage/index/page/2">2</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/video/manage/index/page/3">3</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/video/manage/index/page/4">4</a>          </li>

                                <li>
            <a href="http://demo.socialengine.net/admin/video/manage/index/page/5">5</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/video/manage/index/page/6">6</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/video/manage/index/page/7">7</a>          </li>

                                <li>
            <a href="http://demo.socialengine.net/admin/video/manage/index/page/8">8</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/video/manage/index/page/9">9</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/video/manage/index/page/10">10</a>          </li>

                            <li>
          <a href="http://demo.socialengine.net/admin/video/manage/index/page/2">Next »</a>        </li>
          </ul>
  </div>

  </div>