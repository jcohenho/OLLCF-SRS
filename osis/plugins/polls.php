
      

<script type="text/javascript">

function multiDelete()
{
  return confirm("Are you sure you want to delete the selected polls?");
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

<h2>Polls Plugin</h2>

  <div class="tabs">
    <ul class="navigation">
    <li class="active">
        <a class="menu_poll_admin_main poll_admin_main_manage" href="http://demo.socialengine.net/admin/poll/manage">Manage Polls</a>

    </li>
    <li>
        <a class="menu_poll_admin_main poll_admin_main_settings" href="http://demo.socialengine.net/admin/poll/settings">Global Settings</a>
    </li>
    <li>
        <a class="menu_poll_admin_main poll_admin_main_level" href="http://demo.socialengine.net/admin/poll/settings/level">Member Level Settings</a>
    </li>
</ul>  </div>

<p> This page lists all of the polls your users have posted. You can
use this page to monitor these polls and delete offensive material if
necessary.</p>

<br>
  <form id="multidelete_form" method="post" action="/admin/poll/manage" onsubmit="return multiDelete()">
  <table class="admin_table">
    <thead>
      <tr>
        <th class="admin_table_short"><input onclick="selectAll();" class="checkbox" type="checkbox"></th>
        <th class="admin_table_short">ID</th>

        <th>Title</th>
        <th>Owner</th>
        <th>Views</th>
        <th>Votes</th>
        <th>Date</th>
        <th>Options</th>

      </tr>
    </thead>
    <tbody>
              <tr>
          <td><input class="checkbox" name="delete_175" value="175" type="checkbox"></td>
          <td>175</td>
          <td title="PANAS Latin Social Network">
            PANAS Latin Social Network          </td>

          <td>Anton Cona</td>
          <td>25</td>
          <td>4</td>
          <td>February 2, 2011 10:51:43 PM PST</td>
          <td>
            <a href="http://demo.socialengine.net/polls/view/175">
              view            </a>

            |
            <a href="http://demo.socialengine.net/poll/admin-manage/delete/id/175" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_174" value="174" type="checkbox"></td>
          <td>174</td>
          <td title="Who came first the chicken or the egg?">
            Who came first the chicken or the egg?          </td>

          <td>PamelaHilton .Com</td>
          <td>15</td>
          <td>3</td>
          <td>February 2, 2011 10:24:04 PM PST</td>
          <td>
            <a href="http://demo.socialengine.net/polls/view/174">
              view            </a>

            |
            <a href="http://demo.socialengine.net/poll/admin-manage/delete/id/174" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_173" value="173" type="checkbox"></td>
          <td>173</td>
          <td title="Do you like AraboNet.com">
            Do you like AraboNet.com          </td>

          <td>mohamed suliman</td>
          <td>23</td>
          <td>3</td>
          <td>February 1, 2011 9:23:36 PM PST</td>
          <td>
            <a href="http://demo.socialengine.net/polls/view/173">
              view            </a>

            |
            <a href="http://demo.socialengine.net/poll/admin-manage/delete/id/173" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_170" value="170" type="checkbox"></td>
          <td>170</td>
          <td title="Join facebook Fan Page">
            Join facebook Fan Page          </td>

          <td>Annis Michelle</td>
          <td>35</td>
          <td>1</td>
          <td>January 31, 2011 8:43:23 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/polls/view/170">
              view            </a>

            |
            <a href="http://demo.socialengine.net/poll/admin-manage/delete/id/170" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_171" value="171" type="checkbox"></td>
          <td>171</td>
          <td title="Join facebook Fan Page">
            Join facebook Fan Page          </td>

          <td>Annis Michelle</td>
          <td>9</td>
          <td>0</td>
          <td>January 31, 2011 8:43:23 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/polls/view/171">
              view            </a>

            |
            <a href="http://demo.socialengine.net/poll/admin-manage/delete/id/171" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_172" value="172" type="checkbox"></td>
          <td>172</td>
          <td title="Join facebook Fan Page">
            Join facebook Fan Page          </td>

          <td>Annis Michelle</td>
          <td>8</td>
          <td>0</td>
          <td>January 31, 2011 8:43:23 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/polls/view/172">
              view            </a>

            |
            <a href="http://demo.socialengine.net/poll/admin-manage/delete/id/172" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_169" value="169" type="checkbox"></td>
          <td>169</td>
          <td title="Join facebook Fan Page">
            Join facebook Fan Page          </td>

          <td>Annis Michelle</td>
          <td>6</td>
          <td>0</td>
          <td>January 31, 2011 8:43:22 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/polls/view/169">
              view            </a>

            |
            <a href="http://demo.socialengine.net/poll/admin-manage/delete/id/169" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_168" value="168" type="checkbox"></td>
          <td>168</td>
          <td title="????? ???">
            ????? ???          </td>

          <td>mithu alamin</td>
          <td>12</td>
          <td>3</td>
          <td>January 30, 2011 5:18:21 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/polls/view/168">
              view            </a>

            |
            <a href="http://demo.socialengine.net/poll/admin-manage/delete/id/168" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_167" value="167" type="checkbox"></td>
          <td>167</td>
          <td title="Do you like anime?">
            Do you like anime?          </td>

          <td>John Simpson</td>
          <td>40</td>
          <td>7</td>
          <td>January 28, 2011 9:00:04 PM PST</td>
          <td>
            <a href="http://demo.socialengine.net/polls/view/167">
              view            </a>

            |
            <a href="http://demo.socialengine.net/poll/admin-manage/delete/id/167" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_166" value="166" type="checkbox"></td>
          <td>166</td>
          <td title="Who's smarter woman or man ?">
            Who's smarter woman or man ?          </td>

          <td>PamelaHilton .Com</td>
          <td>187</td>
          <td>13</td>
          <td>January 21, 2011 1:27:32 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/polls/view/166">
              view            </a>

            |
            <a href="http://demo.socialengine.net/poll/admin-manage/delete/id/166" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_165" value="165" type="checkbox"></td>
          <td>165</td>
          <td title="Are you enjoying life?">
            Are you enjoying life?          </td>

          <td>Victor Online</td>
          <td>179</td>
          <td>16</td>
          <td>January 16, 2011 11:24:08 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/polls/view/165">
              view            </a>

            |
            <a href="http://demo.socialengine.net/poll/admin-manage/delete/id/165" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_164" value="164" type="checkbox"></td>
          <td>164</td>
          <td title="how amazing is this site">
            how amazing is this site          </td>

          <td>vonny vonny</td>
          <td>73</td>
          <td>8</td>
          <td>January 16, 2011 6:35:53 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/polls/view/164">
              view            </a>

            |
            <a href="http://demo.socialengine.net/poll/admin-manage/delete/id/164" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_163" value="163" type="checkbox"></td>
          <td>163</td>
          <td title="Do you like James Bond 007?">
            Do you like James Bond 007?          </td>

          <td>Monty iam</td>
          <td>120</td>
          <td>12</td>
          <td>January 13, 2011 8:57:54 PM PST</td>
          <td>
            <a href="http://demo.socialengine.net/polls/view/163">
              view            </a>

            |
            <a href="http://demo.socialengine.net/poll/admin-manage/delete/id/163" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_161" value="161" type="checkbox"></td>
          <td>161</td>
          <td title="Betty or Veronica?">
            Betty or Veronica?          </td>

          <td>Kathleen 613</td>
          <td>54</td>
          <td>7</td>
          <td>January 12, 2011 10:50:07 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/polls/view/161">
              view            </a>

            |
            <a href="http://demo.socialengine.net/poll/admin-manage/delete/id/161" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_160" value="160" type="checkbox"></td>
          <td>160</td>
          <td title="xccc">
            xccc          </td>

          <td>vlady shukow</td>
          <td>0</td>
          <td>1</td>
          <td>January 12, 2011 4:25:35 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/polls/view/160">
              view            </a>

            |
            <a href="http://demo.socialengine.net/poll/admin-manage/delete/id/160" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_159" value="159" type="checkbox"></td>
          <td>159</td>
          <td title="1">
            1          </td>

          <td>jimmy metin</td>
          <td>32</td>
          <td>1</td>
          <td>January 12, 2011 2:29:34 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/polls/view/159">
              view            </a>

            |
            <a href="http://demo.socialengine.net/poll/admin-manage/delete/id/159" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_158" value="158" type="checkbox"></td>
          <td>158</td>
          <td title="Would you Recommend Social Engine?">
            Would you Recommend Social Engine?          </td>

          <td>ntest ntest2</td>
          <td>102</td>
          <td>8</td>
          <td>January 11, 2011 2:43:49 PM PST</td>
          <td>
            <a href="http://demo.socialengine.net/polls/view/158">
              view            </a>

            |
            <a href="http://demo.socialengine.net/poll/admin-manage/delete/id/158" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_157" value="157" type="checkbox"></td>
          <td>157</td>
          <td title="What color shoes are best?">
            What color shoes are best?          </td>

          <td>Amanda Seelig</td>
          <td>72</td>
          <td>14</td>
          <td>January 9, 2011 10:17:48 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/polls/view/157">
              view            </a>

            |
            <a href="http://demo.socialengine.net/poll/admin-manage/delete/id/157" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_156" value="156" type="checkbox"></td>
          <td>156</td>
          <td title="jimmy or metin">
            jimmy or metin          </td>

          <td>jimmy metin</td>
          <td>67</td>
          <td>4</td>
          <td>January 6, 2011 11:36:27 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/polls/view/156">
              view            </a>

            |
            <a href="http://demo.socialengine.net/poll/admin-manage/delete/id/156" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_155" value="155" type="checkbox"></td>
          <td>155</td>
          <td title="Do you like social engine">
            Do you like social engine          </td>

          <td>PHI HUNG DANG</td>
          <td>86</td>
          <td>15</td>
          <td>January 5, 2011 11:19:31 PM PST</td>
          <td>
            <a href="http://demo.socialengine.net/polls/view/155">
              view            </a>

            |
            <a href="http://demo.socialengine.net/poll/admin-manage/delete/id/155" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_154" value="154" type="checkbox"></td>
          <td>154</td>
          <td title="Who's most bad ass?">
            Who's most bad ass?          </td>

          <td>Erik Marco Polo</td>
          <td>35</td>
          <td>1</td>
          <td>January 5, 2011 7:23:56 PM PST</td>
          <td>
            <a href="http://demo.socialengine.net/polls/view/154">
              view            </a>

            |
            <a href="http://demo.socialengine.net/poll/admin-manage/delete/id/154" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_153" value="153" type="checkbox"></td>
          <td>153</td>
          <td title="How likely would you get SocialEngine. ">
            How likely would you get SocialEngine.           </td>

          <td>Miguel Fernandez</td>
          <td>53</td>
          <td>5</td>
          <td>January 5, 2011 11:55:28 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/polls/view/153">
              view            </a>

            |
            <a href="http://demo.socialengine.net/poll/admin-manage/delete/id/153" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_152" value="152" type="checkbox"></td>
          <td>152</td>
          <td title="Who thinks this year will be better than 2010?">
            Who thinks this year will be better than 2010?          </td>

          <td>Joe Compass</td>
          <td>34</td>
          <td>6</td>
          <td>January 5, 2011 10:32:55 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/polls/view/152">
              view            </a>

            |
            <a href="http://demo.socialengine.net/poll/admin-manage/delete/id/152" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_151" value="151" type="checkbox"></td>
          <td>151</td>
          <td title="SocialEngine">
            SocialEngine          </td>

          <td>Manuel Wenner</td>
          <td>27</td>
          <td>4</td>
          <td>January 5, 2011 7:30:51 AM PST</td>
          <td>
            <a href="http://demo.socialengine.net/polls/view/151">
              view            </a>

            |
            <a href="http://demo.socialengine.net/poll/admin-manage/delete/id/151" class="smoothbox">delete</a>          </td>
        </tr>
            <tr>
          <td><input class="checkbox" name="delete_150" value="150" type="checkbox"></td>
          <td>150</td>
          <td title="Can a man have a baby without a woman ?">
            Can a man have a baby without a woman ?          </td>

          <td>Pham Kien</td>
          <td>34</td>
          <td>6</td>
          <td>January 4, 2011 11:52:24 PM PST</td>
          <td>
            <a href="http://demo.socialengine.net/polls/view/150">
              view            </a>

            |
            <a href="http://demo.socialengine.net/poll/admin-manage/delete/id/150" class="smoothbox">delete</a>          </td>
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
            <a href="http://demo.socialengine.net/admin/poll/manage">1</a>
          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/poll/manage/index/page/2">2</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/poll/manage/index/page/3">3</a>          </li>

                                <li>
            <a href="http://demo.socialengine.net/admin/poll/manage/index/page/4">4</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/poll/manage/index/page/5">5</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/poll/manage/index/page/6">6</a>          </li>

                                <li>
            <a href="http://demo.socialengine.net/admin/poll/manage/index/page/7">7</a>          </li>
                            <li>
          <a href="http://demo.socialengine.net/admin/poll/manage/index/page/2">Next »</a>        </li>
          </ul>
  </div>

  </div>