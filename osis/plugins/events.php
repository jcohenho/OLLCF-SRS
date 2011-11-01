
      
<script type="text/javascript">

function multiDelete()
{
  return confirm("Are you sure you want to delete the selected events?");
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





<h2>Events Plugin</h2>

  <div class="tabs">
    <ul class="navigation">

    <li class="active">
        <a class="menu_event_admin_main event_admin_main_manage" href="http://demo.socialengine.net/admin/event/manage">Manage Events</a>
    </li>
    <li>
        <a class="menu_event_admin_main event_admin_main_level" href="http://demo.socialengine.net/admin/event/settings/level">Member Level Settings</a>
    </li>
    <li>
        <a class="menu_event_admin_main event_admin_main_categories" href="http://demo.socialengine.net/admin/event/settings/categories">Categories</a>

    </li>
</ul>  </div>

<p> This page lists all of the event entries your users have posted.
You can use this page to monitor these events and delete offensive
material if necessary.</p>

<br>
    <form id="multidelete_form" method="post" action="/admin/event/manage" onsubmit="return multiDelete()">
    <table class="admin_table">
      <thead>
        <tr>

          <th class="admin_table_short"><input onclick="selectAll();" class="checkbox" type="checkbox"></th>
          <th class="admin_table_short">ID</th>
          <th>Title</th>
          <th>Owner</th>
          <th>Views</th>
          <th>Date Created</th>

          <th>Options</th>
        </tr>
      </thead>
      <tbody>
                  <tr>
            <td><input class="checkbox" name="delete_204" value="204" type="checkbox"></td>
            <td>204</td>
            <td>les pierres du québec</td>

            <td><a href="http://demo.socialengine.net/profile/pierre">Pierre Parent</a></td>
            <td>9</td>
            <td>February 3, 2011 12:56:40 PM PST</td>
            <td>
              <a href="http://demo.socialengine.net/event/204">
                view              </a>
              |
              <a href="http://demo.socialengine.net/event/admin-manage/delete/id/204" class="smoothbox">delete</a>            </td>

          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_203" value="203" type="checkbox"></td>
            <td>203</td>
            <td>Dave's test group event</td>
            <td><a href="http://demo.socialengine.net/profile/davel">David L</a></td>
            <td>28</td>

            <td>February 2, 2011 11:13:01 AM PST</td>
            <td>
              <a href="http://demo.socialengine.net/event/203">
                view              </a>
              |
              <a href="http://demo.socialengine.net/event/admin-manage/delete/id/203" class="smoothbox">delete</a>            </td>
          </tr>

                  <tr>
            <td><input class="checkbox" name="delete_202" value="202" type="checkbox"></td>
            <td>202</td>
            <td>My test event</td>
            <td><a href="http://demo.socialengine.net/profile/davel">David L</a></td>
            <td>5</td>
            <td>February 2, 2011 11:05:14 AM PST</td>

            <td>
              <a href="http://demo.socialengine.net/event/202">
                view              </a>
              |
              <a href="http://demo.socialengine.net/event/admin-manage/delete/id/202" class="smoothbox">delete</a>            </td>
          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_201" value="201" type="checkbox"></td>

            <td>201</td>
            <td>Evento di prova</td>
            <td><a href="http://demo.socialengine.net/profile/dore">Angelo Dore</a></td>
            <td>6</td>
            <td>February 1, 2011 5:36:34 AM PST</td>
            <td>

              <a href="http://demo.socialengine.net/event/201">
                view              </a>
              |
              <a href="http://demo.socialengine.net/event/admin-manage/delete/id/201" class="smoothbox">delete</a>            </td>
          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_200" value="200" type="checkbox"></td>
            <td>200</td>

            <td>Come out and play</td>
            <td><a href="http://demo.socialengine.net/profile/lori">Lori Lori Bo Bori</a></td>
            <td>5</td>
            <td>January 31, 2011 9:00:57 AM PST</td>
            <td>
              <a href="http://demo.socialengine.net/event/200">
                view              </a>

              |
              <a href="http://demo.socialengine.net/event/admin-manage/delete/id/200" class="smoothbox">delete</a>            </td>
          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_199" value="199" type="checkbox"></td>
            <td>199</td>
            <td>Earn Money From Home</td>

            <td><a href="http://demo.socialengine.net/profile/annis">Annis Michelle</a></td>
            <td>7</td>
            <td>January 31, 2011 8:50:23 AM PST</td>
            <td>
              <a href="http://demo.socialengine.net/event/199">
                view              </a>
              |
              <a href="http://demo.socialengine.net/event/admin-manage/delete/id/199" class="smoothbox">delete</a>            </td>

          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_198" value="198" type="checkbox"></td>
            <td>198</td>
            <td>Wedding</td>
            <td><a href="http://demo.socialengine.net/profile/rajamohan">Raja Raja</a></td>
            <td>23</td>

            <td>January 30, 2011 1:40:41 AM PST</td>
            <td>
              <a href="http://demo.socialengine.net/event/198">
                view              </a>
              |
              <a href="http://demo.socialengine.net/event/admin-manage/delete/id/198" class="smoothbox">delete</a>            </td>
          </tr>

                  <tr>
            <td><input class="checkbox" name="delete_197" value="197" type="checkbox"></td>
            <td>197</td>
            <td>curso de PMI</td>
            <td><a href="http://demo.socialengine.net/profile/pguzman">Patricio Jimenez</a></td>
            <td>30</td>
            <td>January 28, 2011 12:36:55 PM PST</td>

            <td>
              <a href="http://demo.socialengine.net/event/197">
                view              </a>
              |
              <a href="http://demo.socialengine.net/event/admin-manage/delete/id/197" class="smoothbox">delete</a>            </td>
          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_196" value="196" type="checkbox"></td>

            <td>196</td>
            <td>dance salsa</td>
            <td><a href="http://demo.socialengine.net/profile/jonisiaco">joniso joniso</a></td>
            <td>21</td>
            <td>January 27, 2011 7:58:40 AM PST</td>
            <td>

              <a href="http://demo.socialengine.net/event/196">
                view              </a>
              |
              <a href="http://demo.socialengine.net/event/admin-manage/delete/id/196" class="smoothbox">delete</a>            </td>
          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_195" value="195" type="checkbox"></td>
            <td>195</td>

            <td>ttt</td>
            <td><a href="http://demo.socialengine.net/profile/Teszttt">teszttt teszttt</a></td>
            <td>11</td>
            <td>January 27, 2011 2:14:29 AM PST</td>
            <td>
              <a href="http://demo.socialengine.net/event/195">
                view              </a>

              |
              <a href="http://demo.socialengine.net/event/admin-manage/delete/id/195" class="smoothbox">delete</a>            </td>
          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_194" value="194" type="checkbox"></td>
            <td>194</td>
            <td>test</td>

            <td><a href="http://demo.socialengine.net/profile/vasam">vas sam</a></td>
            <td>21</td>
            <td>January 25, 2011 1:46:53 AM PST</td>
            <td>
              <a href="http://demo.socialengine.net/event/194">
                view              </a>
              |
              <a href="http://demo.socialengine.net/event/admin-manage/delete/id/194" class="smoothbox">delete</a>            </td>

          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_193" value="193" type="checkbox"></td>
            <td>193</td>
            <td>te</td>
            <td><a href="http://demo.socialengine.net/profile/testudze">tn tnh</a></td>
            <td>12</td>

            <td>January 24, 2011 7:01:18 AM PST</td>
            <td>
              <a href="http://demo.socialengine.net/event/193">
                view              </a>
              |
              <a href="http://demo.socialengine.net/event/admin-manage/delete/id/193" class="smoothbox">delete</a>            </td>
          </tr>

                  <tr>
            <td><input class="checkbox" name="delete_192" value="192" type="checkbox"></td>
            <td>192</td>
            <td>Birthday Party!!!</td>
            <td><a href="http://demo.socialengine.net/profile/nsd1508">nsd 1508</a></td>
            <td>98</td>
            <td>January 24, 2011 5:36:51 AM PST</td>

            <td>
              <a href="http://demo.socialengine.net/event/192">
                view              </a>
              |
              <a href="http://demo.socialengine.net/event/admin-manage/delete/id/192" class="smoothbox">delete</a>            </td>
          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_191" value="191" type="checkbox"></td>

            <td>191</td>
            <td>Porsche Meeting</td>
            <td><a href="http://demo.socialengine.net/profile/zeichner">Jeffrey Carroll</a></td>
            <td>2</td>
            <td>January 21, 2011 10:43:07 AM PST</td>
            <td>

              <a href="http://demo.socialengine.net/event/191">
                view              </a>
              |
              <a href="http://demo.socialengine.net/event/admin-manage/delete/id/191" class="smoothbox">delete</a>            </td>
          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_190" value="190" type="checkbox"></td>
            <td>190</td>

            <td>stare at Moon</td>
            <td><a href="http://demo.socialengine.net/profile/ananthnag">ananthnag j</a></td>
            <td>32</td>
            <td>January 21, 2011 9:46:39 AM PST</td>
            <td>
              <a href="http://demo.socialengine.net/event/190">
                view              </a>

              |
              <a href="http://demo.socialengine.net/event/admin-manage/delete/id/190" class="smoothbox">delete</a>            </td>
          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_189" value="189" type="checkbox"></td>
            <td>189</td>
            <td>night</td>

            <td><a href="http://demo.socialengine.net/profile/manson">daniel manson</a></td>
            <td>32</td>
            <td>January 20, 2011 9:43:14 AM PST</td>
            <td>
              <a href="http://demo.socialengine.net/event/189">
                view              </a>
              |
              <a href="http://demo.socialengine.net/event/admin-manage/delete/id/189" class="smoothbox">delete</a>            </td>

          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_187" value="187" type="checkbox"></td>
            <td>187</td>
            <td>Surf The Web</td>
            <td><a href="http://demo.socialengine.net/profile/davidoppenheimer">David Oppenheimer</a></td>
            <td>75</td>

            <td>January 20, 2011 2:21:40 AM PST</td>
            <td>
              <a href="http://demo.socialengine.net/event/187">
                view              </a>
              |
              <a href="http://demo.socialengine.net/event/admin-manage/delete/id/187" class="smoothbox">delete</a>            </td>
          </tr>

                  <tr>
            <td><input class="checkbox" name="delete_186" value="186" type="checkbox"></td>
            <td>186</td>
            <td>RHTHATHAQ</td>
            <td><a href="http://demo.socialengine.net/profile/portugal">jackandjill jack</a></td>
            <td>62</td>
            <td>January 17, 2011 2:14:23 PM PST</td>

            <td>
              <a href="http://demo.socialengine.net/event/186">
                view              </a>
              |
              <a href="http://demo.socialengine.net/event/admin-manage/delete/id/186" class="smoothbox">delete</a>            </td>
          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_185" value="185" type="checkbox"></td>

            <td>185</td>
            <td>cheese eating</td>
            <td><a href="http://demo.socialengine.net/profile/septicpeg1972">ian jones</a></td>
            <td>16</td>
            <td>January 17, 2011 2:38:10 AM PST</td>
            <td>

              <a href="http://demo.socialengine.net/event/185">
                view              </a>
              |
              <a href="http://demo.socialengine.net/event/admin-manage/delete/id/185" class="smoothbox">delete</a>            </td>
          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_184" value="184" type="checkbox"></td>
            <td>184</td>

            <td>test</td>
            <td><a href="http://demo.socialengine.net/profile/adminssss">fg dfg</a></td>
            <td>34</td>
            <td>January 17, 2011 1:30:44 AM PST</td>
            <td>
              <a href="http://demo.socialengine.net/event/184">
                view              </a>

              |
              <a href="http://demo.socialengine.net/event/admin-manage/delete/id/184" class="smoothbox">delete</a>            </td>
          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_183" value="183" type="checkbox"></td>
            <td>183</td>
            <td>Tim Nguoi Viet Nam</td>

            <td><a href="http://demo.socialengine.net/profile/311cto30kp5">thanh tuan</a></td>
            <td>22</td>
            <td>January 16, 2011 10:56:30 PM PST</td>
            <td>
              <a href="http://demo.socialengine.net/event/183">
                view              </a>
              |
              <a href="http://demo.socialengine.net/event/admin-manage/delete/id/183" class="smoothbox">delete</a>            </td>

          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_182" value="182" type="checkbox"></td>
            <td>182</td>
            <td>Kitten Fish</td>
            <td><a href="http://demo.socialengine.net/profile/heidi">Heidi Whitten</a></td>
            <td>46</td>

            <td>January 14, 2011 7:38:34 AM PST</td>
            <td>
              <a href="http://demo.socialengine.net/event/182">
                view              </a>
              |
              <a href="http://demo.socialengine.net/event/admin-manage/delete/id/182" class="smoothbox">delete</a>            </td>
          </tr>

                  <tr>
            <td><input class="checkbox" name="delete_180" value="180" type="checkbox"></td>
            <td>180</td>
            <td>boo</td>
            <td><a href="http://demo.socialengine.net/profile/vlady">vlady shukow</a></td>
            <td>33</td>
            <td>January 11, 2011 11:23:39 AM PST</td>

            <td>
              <a href="http://demo.socialengine.net/event/180">
                view              </a>
              |
              <a href="http://demo.socialengine.net/event/admin-manage/delete/id/180" class="smoothbox">delete</a>            </td>
          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_179" value="179" type="checkbox"></td>

            <td>179</td>
            <td>Mountain Bike Show</td>
            <td><a href="http://demo.socialengine.net/profile/TuWork">Jo Ho</a></td>
            <td>106</td>
            <td>January 6, 2011 4:42:38 AM PST</td>
            <td>

              <a href="http://demo.socialengine.net/event/179">
                view              </a>
              |
              <a href="http://demo.socialengine.net/event/admin-manage/delete/id/179" class="smoothbox">delete</a>            </td>
          </tr>
                  <tr>
            <td><input class="checkbox" name="delete_177" value="177" type="checkbox"></td>
            <td>177</td>

            <td>Log in to demo</td>
            <td><a href="http://demo.socialengine.net/profile/Joecompass">Joe Compass</a></td>
            <td>55</td>
            <td>January 5, 2011 11:39:46 AM PST</td>
            <td>
              <a href="http://demo.socialengine.net/event/177">
                view              </a>

              |
              <a href="http://demo.socialengine.net/event/admin-manage/delete/id/177" class="smoothbox">delete</a>            </td>
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

            <a href="http://demo.socialengine.net/admin/event/manage">1</a>
          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/event/manage/index/page/2">2</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/event/manage/index/page/3">3</a>          </li>

                                <li>
            <a href="http://demo.socialengine.net/admin/event/manage/index/page/4">4</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/event/manage/index/page/5">5</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/event/manage/index/page/6">6</a>          </li>

                                <li>
            <a href="http://demo.socialengine.net/admin/event/manage/index/page/7">7</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/event/manage/index/page/8">8</a>          </li>
                            <li>
          <a href="http://demo.socialengine.net/admin/event/manage/index/page/2">Next »</a>        </li>

          </ul>
  </div>

  </div>