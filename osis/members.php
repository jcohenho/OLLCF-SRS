<h2>
  Manage Members</h2>


<p> The members of your social network are listed here. If you need to
search for a specific member, enter your search criteria in the fields
below.</p>

<br>

<div>
  <a  href="" class="buttonlink" style="background-image: url(/images/add.png);">Enroll New Student</a>    
</div>
<br/>

<div class="admin_search">
  <div class="clear"><div class="search"><form id="filter_form" enctype="application/x-www-form-urlencoded" class="global_form_box" action="/admin/user/manage" method="post">
<div><label for="displayname" tag="" class="optional">Display Name</label>

<input name="displayname" id="displayname" type="text"></div>
<div><label for="username" tag="" class="optional">Username</label>

<input name="username" id="username" type="text"></div>
<div><label for="email" tag="" class="optional">Email</label>

<input name="email" id="email" type="text"></div>
<div><label for="level_id" tag="" class="optional">Level</label>

<select name="level_id" id="level_id">
    <option selected="selected" value="0" label=" "> </option>
    <option value="1" label="Super Admins">Super Admins</option>
    <option value="2" label="Admins">Admins</option>
    <option value="3" label="Moderators">Moderators</option>
    <option value="4" label="Default Level">Default Level</option>

    <option value="5" label="Public">Public</option>
</select></div>
<div><label for="enabled" tag="" class="optional">Approved</label>

<select name="enabled" id="enabled">
    <option selected="selected" value="-1" label=""></option>
    <option value="0" label="Not Approved">Not Approved</option>
    <option value="1" label="Approved">Approved</option>
</select></div>

<div><div class="buttons">
<button style="border: 1px solid rgb(119, 119, 119); background-color: rgb(134, 134, 134);" name="search" id="search" type="submit">Search</button></div></div>

<input name="order" value="" id="order" type="hidden">

<input name="order_direction" value="" id="order_direction" type="hidden"></form></div></div></div>

<br>

<div class="admin_results">
  <div>
        4910 members found  </div>
  <div>

    


  <div class="pages">
    <ul class="paginationControl">
                              <li class="selected">
            <a href="http://demo.socialengine.net/admin/user/manage">1</a>
          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/user/manage?order=user_id&amp;order_direction=DESC&amp;page=2">2</a>          </li>

                                <li>
            <a href="http://demo.socialengine.net/admin/user/manage?order=user_id&amp;order_direction=DESC&amp;page=3">3</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/user/manage?order=user_id&amp;order_direction=DESC&amp;page=4">4</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/user/manage?order=user_id&amp;order_direction=DESC&amp;page=5">5</a>          </li>

                                <li>
            <a href="http://demo.socialengine.net/admin/user/manage?order=user_id&amp;order_direction=DESC&amp;page=6">6</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/user/manage?order=user_id&amp;order_direction=DESC&amp;page=7">7</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/user/manage?order=user_id&amp;order_direction=DESC&amp;page=8">8</a>          </li>

                                <li>
            <a href="http://demo.socialengine.net/admin/user/manage?order=user_id&amp;order_direction=DESC&amp;page=9">9</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/user/manage?order=user_id&amp;order_direction=DESC&amp;page=10">10</a>          </li>
                            <li>
          <a href="http://demo.socialengine.net/admin/user/manage?order=user_id&amp;order_direction=DESC&amp;page=2">Next »</a>        </li>

          </ul>
  </div>

  </div>
</div>

<br>

<div class="admin_table_form">
<form id="multimodify_form" method="post" action="/admin/user/manage/multi-modify" onsubmit="multiModify()">
  <table class="admin_table">
    <thead>

      <tr>
        <th style="width: 1%;"><input onclick="selectAll()" class="checkbox" type="checkbox"></th>
        <th style="width: 1%;"><a href="javascript:void(0);" onclick="javascript:changeOrder('user_id', 'DESC');">ID</a></th>
        <th><a href="javascript:void(0);" onclick="javascript:changeOrder('displayname', 'ASC');">Display Name</a></th>
        <th><a href="javascript:void(0);" onclick="javascript:changeOrder('username', 'ASC');">Username</a></th>
        <th style="width: 1%;"><a href="javascript:void(0);" onclick="javascript:changeOrder('email', 'ASC');">Email</a></th>
        <th style="width: 1%;" class="admin_table_centered"><a href="javascript:void(0);" onclick="javascript:changeOrder('level_id', 'ASC');">User Level</a></th>

        <th style="width: 1%;" class="admin_table_centered">Approved</th>
        <th style="width: 1%;"><a href="javascript:void(0);" onclick="javascript:changeOrder('creation_date', 'DESC');">Signup Date</a></th>
        <th style="width: 1%;" class="admin_table_options">Options</th>
      </tr>
    </thead>
    <tbody>
                        <tr>

            <td><input name="modify_5117" value="5117" class="checkbox" type="checkbox"></td>
            <td>5117</td>
            <td class="admin_table_bold">
              <a href="http://demo.socialengine.net/profile/pregmatch2" target="_blank">???? ?????...</a>            </td>
            <td class="admin_table_user"><a href="http://demo.socialengine.net/profile/pregmatch2" target="_blank">pregmatch2</a></td>
            <td class="admin_table_email">
                              (hidden)
                          </td>

            <td class="admin_table_centered">
              <a href="http://demo.socialengine.net/admin/authorization/level/edit/id/4">
                Default Level              </a>
            </td>
            <td class="admin_table_centered">Yes</td>
            <td>2011-02-04 01:11:19</td>
            <td class="admin_table_options">

              <a class="smoothbox" href="http://demo.socialengine.net/admin/user/manage/stats/id/5117">
                stats              </a>
              |
              <a class="smoothbox" href="http://demo.socialengine.net/admin/user/manage/edit/id/5117">
                edit              </a>
                              |
                <a class="smoothbox" href="http://demo.socialengine.net/admin/user/manage/delete/id/5117">
                  delete                </a>

                                            |
                <a href="http://demo.socialengine.net/admin/user/manage/login/id/5117" onclick="loginAsUser(5117); return false;">
                  login                </a>
                          </td>
          </tr>
                  <tr>
            <td><input name="modify_5116" value="5116" class="checkbox" type="checkbox"></td>
            <td>5116</td>

            <td class="admin_table_bold">
              <a href="http://demo.socialengine.net/profile/nordlicht85" target="_blank">Heiko Meie...</a>            </td>
            <td class="admin_table_user"><a href="http://demo.socialengine.net/profile/nordlicht85" target="_blank">nordlicht85</a></td>
            <td class="admin_table_email">
                              (hidden)
                          </td>
            <td class="admin_table_centered">
              <a href="http://demo.socialengine.net/admin/authorization/level/edit/id/4">

                Default Level              </a>
            </td>
            <td class="admin_table_centered">Yes</td>
            <td>2011-02-03 23:50:14</td>
            <td class="admin_table_options">
              <a class="smoothbox" href="http://demo.socialengine.net/admin/user/manage/stats/id/5116">
                stats              </a>

              |
              <a class="smoothbox" href="http://demo.socialengine.net/admin/user/manage/edit/id/5116">
                edit              </a>
                              |
                <a class="smoothbox" href="http://demo.socialengine.net/admin/user/manage/delete/id/5116">
                  delete                </a>
                                            |
                <a href="http://demo.socialengine.net/admin/user/manage/login/id/5116" onclick="loginAsUser(5116); return false;">
                  login                </a>

                          </td>
          </tr>
                  <tr>
            <td><input name="modify_5115" value="5115" class="checkbox" type="checkbox"></td>
            <td>5115</td>
            <td class="admin_table_bold">
              <a href="http://demo.socialengine.net/profile/retester" target="_blank">fname lnam...</a>            </td>

            <td class="admin_table_user"><a href="http://demo.socialengine.net/profile/retester" target="_blank">retester</a></td>
            <td class="admin_table_email">
                              (hidden)
                          </td>
            <td class="admin_table_centered">
              <a href="http://demo.socialengine.net/admin/authorization/level/edit/id/4">
                Default Level              </a>
            </td>

            <td class="admin_table_centered">Yes</td>
            <td>2011-02-03 23:34:43</td>
            <td class="admin_table_options">
              <a class="smoothbox" href="http://demo.socialengine.net/admin/user/manage/stats/id/5115">
                stats              </a>
              |
              <a class="smoothbox" href="http://demo.socialengine.net/admin/user/manage/edit/id/5115">
                edit              </a>

                              |
                <a class="smoothbox" href="http://demo.socialengine.net/admin/user/manage/delete/id/5115">
                  delete                </a>
                                            |
                <a href="http://demo.socialengine.net/admin/user/manage/login/id/5115" onclick="loginAsUser(5115); return false;">
                  login                </a>
                          </td>
          </tr>
                  <tr>

            <td><input name="modify_5114" value="5114" class="checkbox" type="checkbox"></td>
            <td>5114</td>
            <td class="admin_table_bold">
              <a href="http://demo.socialengine.net/profile/blubbblubb" target="_blank">daGroove G...</a>            </td>
            <td class="admin_table_user"><a href="http://demo.socialengine.net/profile/blubbblubb" target="_blank">blubbblubb</a></td>
            <td class="admin_table_email">
                              (hidden)
                          </td>

            <td class="admin_table_centered">
              <a href="http://demo.socialengine.net/admin/authorization/level/edit/id/4">
                Default Level              </a>
            </td>
            <td class="admin_table_centered">Yes</td>
            <td>2011-02-03 22:40:14</td>
            <td class="admin_table_options">

              <a class="smoothbox" href="http://demo.socialengine.net/admin/user/manage/stats/id/5114">
                stats              </a>
              |
              <a class="smoothbox" href="http://demo.socialengine.net/admin/user/manage/edit/id/5114">
                edit              </a>
                              |
                <a class="smoothbox" href="http://demo.socialengine.net/admin/user/manage/delete/id/5114">
                  delete                </a>

                                            |
                <a href="http://demo.socialengine.net/admin/user/manage/login/id/5114" onclick="loginAsUser(5114); return false;">
                  login                </a>
                          </td>
          </tr>
                  <tr>
            <td><input name="modify_5113" value="5113" class="checkbox" type="checkbox"></td>
            <td>5113</td>

            <td class="admin_table_bold">
              <a href="http://demo.socialengine.net/profile/KarolisSnarskis" target="_blank">Karolis ju...</a>            </td>
            <td class="admin_table_user"><a href="http://demo.socialengine.net/profile/KarolisSnarskis" target="_blank">KarolisSnarskis</a></td>
            <td class="admin_table_email">
                              (hidden)
                          </td>
            <td class="admin_table_centered">
              <a href="http://demo.socialengine.net/admin/authorization/level/edit/id/4">

                Default Level              </a>
            </td>
            <td class="admin_table_centered">Yes</td>
            <td>2011-02-03 21:54:10</td>
            <td class="admin_table_options">
              <a class="smoothbox" href="http://demo.socialengine.net/admin/user/manage/stats/id/5113">
                stats              </a>

              |
              <a class="smoothbox" href="http://demo.socialengine.net/admin/user/manage/edit/id/5113">
                edit              </a>
                              |
                <a class="smoothbox" href="http://demo.socialengine.net/admin/user/manage/delete/id/5113">
                  delete                </a>
                                            |
                <a href="http://demo.socialengine.net/admin/user/manage/login/id/5113" onclick="loginAsUser(5113); return false;">
                  login                </a>

                          </td>
          </tr>
                  <tr>
            <td><input name="modify_5111" value="5111" class="checkbox" type="checkbox"></td>
            <td>5111</td>
            <td class="admin_table_bold">
              <a href="http://demo.socialengine.net/profile/pierre" target="_blank">Pierre Par...</a>            </td>

            <td class="admin_table_user"><a href="http://demo.socialengine.net/profile/pierre" target="_blank">pierre</a></td>
            <td class="admin_table_email">
                              (hidden)
                          </td>
            <td class="admin_table_centered">
              <a href="http://demo.socialengine.net/admin/authorization/level/edit/id/4">
                Default Level              </a>
            </td>

            <td class="admin_table_centered">Yes</td>
            <td>2011-02-03 20:53:06</td>
            <td class="admin_table_options">
              <a class="smoothbox" href="http://demo.socialengine.net/admin/user/manage/stats/id/5111">
                stats              </a>
              |
              <a class="smoothbox" href="http://demo.socialengine.net/admin/user/manage/edit/id/5111">
                edit              </a>

                              |
                <a class="smoothbox" href="http://demo.socialengine.net/admin/user/manage/delete/id/5111">
                  delete                </a>
                                            |
                <a href="http://demo.socialengine.net/admin/user/manage/login/id/5111" onclick="loginAsUser(5111); return false;">
                  login                </a>
                          </td>
          </tr>
                  <tr>

            <td><input name="modify_5110" value="5110" class="checkbox" type="checkbox"></td>
            <td>5110</td>
            <td class="admin_table_bold">
              <a href="http://demo.socialengine.net/profile/sunil" target="_blank">Sunil Ram</a>            </td>
            <td class="admin_table_user"><a href="http://demo.socialengine.net/profile/sunil" target="_blank">sunil</a></td>
            <td class="admin_table_email">
                              (hidden)
                          </td>

            <td class="admin_table_centered">
              <a href="http://demo.socialengine.net/admin/authorization/level/edit/id/4">
                Default Level              </a>
            </td>
            <td class="admin_table_centered">Yes</td>
            <td>2011-02-03 19:43:39</td>
            <td class="admin_table_options">

              <a class="smoothbox" href="http://demo.socialengine.net/admin/user/manage/stats/id/5110">
                stats              </a>
              |
              <a class="smoothbox" href="http://demo.socialengine.net/admin/user/manage/edit/id/5110">
                edit              </a>
                              |
                <a class="smoothbox" href="http://demo.socialengine.net/admin/user/manage/delete/id/5110">
                  delete                </a>

                                            |
                <a href="http://demo.socialengine.net/admin/user/manage/login/id/5110" onclick="loginAsUser(5110); return false;">
                  login                </a>
                          </td>
          </tr>
                  <tr>
            <td><input name="modify_5109" value="5109" class="checkbox" type="checkbox"></td>
            <td>5109</td>

            <td class="admin_table_bold">
              <a href="http://demo.socialengine.net/profile/jadamtest" target="_blank">Joe Test</a>            </td>
            <td class="admin_table_user"><a href="http://demo.socialengine.net/profile/jadamtest" target="_blank">jadamtest</a></td>
            <td class="admin_table_email">
                              (hidden)
                          </td>
            <td class="admin_table_centered">
              <a href="http://demo.socialengine.net/admin/authorization/level/edit/id/4">

                Default Level              </a>
            </td>
            <td class="admin_table_centered">Yes</td>
            <td>2011-02-03 18:39:02</td>
            <td class="admin_table_options">
              <a class="smoothbox" href="http://demo.socialengine.net/admin/user/manage/stats/id/5109">
                stats              </a>

              |
              <a class="smoothbox" href="http://demo.socialengine.net/admin/user/manage/edit/id/5109">
                edit              </a>
                              |
                <a class="smoothbox" href="http://demo.socialengine.net/admin/user/manage/delete/id/5109">
                  delete                </a>
                                            |
                <a href="http://demo.socialengine.net/admin/user/manage/login/id/5109" onclick="loginAsUser(5109); return false;">
                  login                </a>

                          </td>
          </tr>
                  <tr>
            <td><input name="modify_5108" value="5108" class="checkbox" type="checkbox"></td>
            <td>5108</td>
            <td class="admin_table_bold">
              <a href="http://demo.socialengine.net/profile/becker90" target="_blank">Sven Becke...</a>            </td>

            <td class="admin_table_user"><a href="http://demo.socialengine.net/profile/becker90" target="_blank">becker90</a></td>
            <td class="admin_table_email">
                              (hidden)
                          </td>
            <td class="admin_table_centered">
              <a href="http://demo.socialengine.net/admin/authorization/level/edit/id/4">
                Default Level              </a>
            </td>

            <td class="admin_table_centered">Yes</td>
            <td>2011-02-03 17:54:58</td>
            <td class="admin_table_options">
              <a class="smoothbox" href="http://demo.socialengine.net/admin/user/manage/stats/id/5108">
                stats              </a>
              |
              <a class="smoothbox" href="http://demo.socialengine.net/admin/user/manage/edit/id/5108">
                edit              </a>

                              |
                <a class="smoothbox" href="http://demo.socialengine.net/admin/user/manage/delete/id/5108">
                  delete                </a>
                                            |
                <a href="http://demo.socialengine.net/admin/user/manage/login/id/5108" onclick="loginAsUser(5108); return false;">
                  login                </a>
                          </td>
          </tr>
                  <tr>

            <td><input name="modify_5107" value="5107" class="checkbox" type="checkbox"></td>
            <td>5107</td>
            <td class="admin_table_bold">
              <a href="http://demo.socialengine.net/profile/demo212" target="_blank">demo212 de...</a>            </td>
            <td class="admin_table_user"><a href="http://demo.socialengine.net/profile/demo212" target="_blank">demo212</a></td>
            <td class="admin_table_email">
                              (hidden)
                          </td>

            <td class="admin_table_centered">
              <a href="http://demo.socialengine.net/admin/authorization/level/edit/id/4">
                Default Level              </a>
            </td>
            <td class="admin_table_centered">Yes</td>
            <td>2011-02-03 16:50:10</td>
            <td class="admin_table_options">

              <a class="smoothbox" href="http://demo.socialengine.net/admin/user/manage/stats/id/5107">
                stats              </a>
              |
              <a class="smoothbox" href="http://demo.socialengine.net/admin/user/manage/edit/id/5107">
                edit              </a>
                              |
                <a class="smoothbox" href="http://demo.socialengine.net/admin/user/manage/delete/id/5107">
                  delete                </a>

                                            |
                <a href="http://demo.socialengine.net/admin/user/manage/login/id/5107" onclick="loginAsUser(5107); return false;">
                  login                </a>
                          </td>
          </tr>
                  </tbody>
  </table>
  <br>
  <br />
  <div class='buttons'>
    <button type='submit' name="submit_button" value="approve">Approve Selected</button>
    <button type='submit' name="submit_button" value="delete">Delete Selected</button>

  </div>

</form>
</div>