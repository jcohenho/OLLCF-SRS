
      
<script type="text/javascript">

function multiDelete()
{
  return confirm("Are you sure you want to delete the selected classified listings?");
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

<h2>Classifieds Plugin</h2>

  <div class="tabs">
    <ul class="navigation">
    <li class="active">
        <a class="menu_classified_admin_main classified_admin_main_manage" href="http://demo.socialengine.net/admin/classified/manage">View Classifieds</a>

    </li>
    <li>
        <a class="menu_classified_admin_main classified_admin_main_settings" href="http://demo.socialengine.net/admin/classified/settings">Global Settings</a>
    </li>
    <li>
        <a class="menu_classified_admin_main classified_admin_main_level" href="http://demo.socialengine.net/admin/classified/level">Member Level Settings</a>
    </li>
    <li>

        <a class="menu_classified_admin_main classified_admin_main_fields" href="http://demo.socialengine.net/admin/classified/fields">Classified Questions</a>
    </li>
    <li>
        <a class="menu_classified_admin_main classified_admin_main_categories" href="http://demo.socialengine.net/admin/classified/settings/categories">Categories</a>
    </li>
</ul>  </div>

<p> This page lists all of the classified listings your users have
posted. You can use this page to monitor these classified listings and
delete offensive material if necessary. Entering criteria into the
filter fields will help you find specific blog entries. Leaving the
filter fields blank will show all the blog entries on your social
network.</p>

<br>
<form id="multidelete_form" method="post" action="/admin/classified/manage" onsubmit="return multiDelete()">
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

        <td><input class="checkbox" name="delete_148" value="148" type="checkbox"></td>
        <td>148</td>
        <td>Sample</td>
        <td>uncle bay</td>
        <td>18</td>
        <td>February 2, 2011 8:46:41 PM PST</td>

        <td>
          <a href="http://demo.socialengine.net/classifieds/5096/148">
            view          </a>
          |
          <a href="http://demo.socialengine.net/classified/admin-manage/delete/id/148" class="smoothbox">delete</a>        </td>
      </tr>
          <tr>
        <td><input class="checkbox" name="delete_147" value="147" type="checkbox"></td>

        <td>147</td>
        <td>necesito un diseñado grafico</td>
        <td>Patricio Jimenez</td>
        <td>58</td>
        <td>January 28, 2011 1:00:42 PM PST</td>
        <td>

          <a href="http://demo.socialengine.net/classifieds/4966/147">
            view          </a>
          |
          <a href="http://demo.socialengine.net/classified/admin-manage/delete/id/147" class="smoothbox">delete</a>        </td>
      </tr>
          <tr>
        <td><input class="checkbox" name="delete_146" value="146" type="checkbox"></td>
        <td>146</td>

        <td>Click Ads on http://gminfotech.com/blog get Paid from Paypal</td>
        <td>Annis Michelle</td>
        <td>103</td>
        <td>January 26, 2011 6:09:53 AM PST</td>
        <td>
          <a href="http://demo.socialengine.net/classifieds/4569/146">
            view          </a>

          |
          <a href="http://demo.socialengine.net/classified/admin-manage/delete/id/146" class="smoothbox">delete</a>        </td>
      </tr>
          <tr>
        <td><input class="checkbox" name="delete_145" value="145" type="checkbox"></td>
        <td>145</td>
        <td>Matrimony</td>

        <td>Nageshwar Rao Mykala</td>
        <td>82</td>
        <td>January 25, 2011 2:51:18 AM PST</td>
        <td>
          <a href="http://demo.socialengine.net/classifieds/4346/145">
            view          </a>
          |
          <a href="http://demo.socialengine.net/classified/admin-manage/delete/id/145" class="smoothbox">delete</a>        </td>

      </tr>
          <tr>
        <td><input class="checkbox" name="delete_144" value="144" type="checkbox"></td>
        <td>144</td>
        <td>Urban Hitz Radio™ NEW YORK</td>
        <td>Urban Hitz Radio</td>
        <td>90</td>

        <td>January 20, 2011 4:55:10 PM PST</td>
        <td>
          <a href="http://demo.socialengine.net/classifieds/4760/144">
            view          </a>
          |
          <a href="http://demo.socialengine.net/classified/admin-manage/delete/id/144" class="smoothbox">delete</a>        </td>
      </tr>

          <tr>
        <td><input class="checkbox" name="delete_143" value="143" type="checkbox"></td>
        <td>143</td>
        <td>tv for sale</td>
        <td>Michael Thomas</td>
        <td>162</td>
        <td>January 19, 2011 9:46:40 AM PST</td>

        <td>
          <a href="http://demo.socialengine.net/classifieds/4707/143">
            view          </a>
          |
          <a href="http://demo.socialengine.net/classified/admin-manage/delete/id/143" class="smoothbox">delete</a>        </td>
      </tr>
          <tr>
        <td><input class="checkbox" name="delete_142" value="142" type="checkbox"></td>

        <td>142</td>
        <td>tv for sale</td>
        <td>Michael Thomas</td>
        <td>70</td>
        <td>January 19, 2011 9:45:15 AM PST</td>
        <td>

          <a href="http://demo.socialengine.net/classifieds/4707/142">
            view          </a>
          |
          <a href="http://demo.socialengine.net/classified/admin-manage/delete/id/142" class="smoothbox">delete</a>        </td>
      </tr>
          <tr>
        <td><input class="checkbox" name="delete_141" value="141" type="checkbox"></td>
        <td>141</td>

        <td>wdw</td>
        <td>jimmy metin</td>
        <td>74</td>
        <td>January 12, 2011 2:31:26 AM PST</td>
        <td>
          <a href="http://demo.socialengine.net/classifieds/4386/141">
            view          </a>

          |
          <a href="http://demo.socialengine.net/classified/admin-manage/delete/id/141" class="smoothbox">delete</a>        </td>
      </tr>
          <tr>
        <td><input class="checkbox" name="delete_140" value="140" type="checkbox"></td>
        <td>140</td>
        <td>Nice Cayenne 2009</td>

        <td>James Carvert</td>
        <td>280</td>
        <td>January 10, 2011 5:53:55 PM PST</td>
        <td>
          <a href="http://demo.socialengine.net/classifieds/4469/140">
            view          </a>
          |
          <a href="http://demo.socialengine.net/classified/admin-manage/delete/id/140" class="smoothbox">delete</a>        </td>

      </tr>
          <tr>
        <td><input class="checkbox" name="delete_139" value="139" type="checkbox"></td>
        <td>139</td>
        <td>test2</td>
        <td>Hamid Hamidi</td>
        <td>51</td>

        <td>January 9, 2011 7:02:53 AM PST</td>
        <td>
          <a href="http://demo.socialengine.net/classifieds/4444/139">
            view          </a>
          |
          <a href="http://demo.socialengine.net/classified/admin-manage/delete/id/139" class="smoothbox">delete</a>        </td>
      </tr>

          <tr>
        <td><input class="checkbox" name="delete_138" value="138" type="checkbox"></td>
        <td>138</td>
        <td>Ban banh</td>
        <td>thanh tuan</td>
        <td>174</td>
        <td>January 6, 2011 10:45:21 PM PST</td>

        <td>
          <a href="http://demo.socialengine.net/classifieds/4397/138">
            view          </a>
          |
          <a href="http://demo.socialengine.net/classified/admin-manage/delete/id/138" class="smoothbox">delete</a>        </td>
      </tr>
          <tr>
        <td><input class="checkbox" name="delete_137" value="137" type="checkbox"></td>

        <td>137</td>
        <td>Test</td>
        <td>Pham Kien</td>
        <td>139</td>
        <td>January 6, 2011 6:36:47 PM PST</td>
        <td>

          <a href="http://demo.socialengine.net/classifieds/4337/137">
            view          </a>
          |
          <a href="http://demo.socialengine.net/classified/admin-manage/delete/id/137" class="smoothbox">delete</a>        </td>
      </tr>
          <tr>
        <td><input class="checkbox" name="delete_136" value="136" type="checkbox"></td>
        <td>136</td>

        <td>Classified Listing</td>
        <td>Muggzzi Malone</td>
        <td>59</td>
        <td>January 5, 2011 7:54:41 PM PST</td>
        <td>
          <a href="http://demo.socialengine.net/classifieds/3479/136">
            view          </a>

          |
          <a href="http://demo.socialengine.net/classified/admin-manage/delete/id/136" class="smoothbox">delete</a>        </td>
      </tr>
          <tr>
        <td><input class="checkbox" name="delete_135" value="135" type="checkbox"></td>
        <td>135</td>
        <td>belly button lint</td>

        <td>Joe Compass</td>
        <td>65</td>
        <td>January 5, 2011 10:22:31 AM PST</td>
        <td>
          <a href="http://demo.socialengine.net/classifieds/4358/135">
            view          </a>
          |
          <a href="http://demo.socialengine.net/classified/admin-manage/delete/id/135" class="smoothbox">delete</a>        </td>

      </tr>
          <tr>
        <td><input class="checkbox" name="delete_134" value="134" type="checkbox"></td>
        <td>134</td>
        <td>Classified test</td>
        <td>Miguel Fernandez</td>
        <td>78</td>

        <td>January 5, 2011 6:03:10 AM PST</td>
        <td>
          <a href="http://demo.socialengine.net/classifieds/4332/134">
            view          </a>
          |
          <a href="http://demo.socialengine.net/classified/admin-manage/delete/id/134" class="smoothbox">delete</a>        </td>
      </tr>

          <tr>
        <td><input class="checkbox" name="delete_133" value="133" type="checkbox"></td>
        <td>133</td>
        <td>Digital Toy</td>
        <td>Pham Kien</td>
        <td>72</td>
        <td>January 4, 2011 11:42:02 PM PST</td>

        <td>
          <a href="http://demo.socialengine.net/classifieds/4337/133">
            view          </a>
          |
          <a href="http://demo.socialengine.net/classified/admin-manage/delete/id/133" class="smoothbox">delete</a>        </td>
      </tr>
          <tr>
        <td><input class="checkbox" name="delete_132" value="132" type="checkbox"></td>

        <td>132</td>
        <td>Right Kidney</td>
        <td>Kathleen 613</td>
        <td>85</td>
        <td>January 4, 2011 11:16:49 AM PST</td>
        <td>

          <a href="http://demo.socialengine.net/classifieds/2038/132">
            view          </a>
          |
          <a href="http://demo.socialengine.net/classified/admin-manage/delete/id/132" class="smoothbox">delete</a>        </td>
      </tr>
          <tr>
        <td><input class="checkbox" name="delete_131" value="131" type="checkbox"></td>
        <td>131</td>

        <td>BMW Motocycle</td>
        <td>Next Edison</td>
        <td>54</td>
        <td>January 4, 2011 6:02:22 AM PST</td>
        <td>
          <a href="http://demo.socialengine.net/classifieds/4321/131">
            view          </a>

          |
          <a href="http://demo.socialengine.net/classified/admin-manage/delete/id/131" class="smoothbox">delete</a>        </td>
      </tr>
          <tr>
        <td><input class="checkbox" name="delete_130" value="130" type="checkbox"></td>
        <td>130</td>
        <td>SocialEngine4 Templates</td>

        <td>joni zoom</td>
        <td>98</td>
        <td>January 4, 2011 3:30:31 AM PST</td>
        <td>
          <a href="http://demo.socialengine.net/classifieds/4121/130">
            view          </a>
          |
          <a href="http://demo.socialengine.net/classified/admin-manage/delete/id/130" class="smoothbox">delete</a>        </td>

      </tr>
          <tr>
        <td><input class="checkbox" name="delete_129" value="129" type="checkbox"></td>
        <td>129</td>
        <td>title</td>
        <td>romka shamralyuk</td>
        <td>28</td>

        <td>January 4, 2011 2:59:16 AM PST</td>
        <td>
          <a href="http://demo.socialengine.net/classifieds/4270/129">
            view          </a>
          |
          <a href="http://demo.socialengine.net/classified/admin-manage/delete/id/129" class="smoothbox">delete</a>        </td>
      </tr>

          <tr>
        <td><input class="checkbox" name="delete_128" value="128" type="checkbox"></td>
        <td>128</td>
        <td>Audi A3</td>
        <td>momo mimi</td>
        <td>36</td>
        <td>January 3, 2011 3:12:35 AM PST</td>

        <td>
          <a href="http://demo.socialengine.net/classifieds/4289/128">
            view          </a>
          |
          <a href="http://demo.socialengine.net/classified/admin-manage/delete/id/128" class="smoothbox">delete</a>        </td>
      </tr>
          <tr>
        <td><input class="checkbox" name="delete_127" value="127" type="checkbox"></td>

        <td>127</td>
        <td>kamoucha car</td>
        <td>kamoucha hamido</td>
        <td>95</td>
        <td>January 1, 2011 3:36:10 AM PST</td>
        <td>

          <a href="http://demo.socialengine.net/classifieds/4258/127">
            view          </a>
          |
          <a href="http://demo.socialengine.net/classified/admin-manage/delete/id/127" class="smoothbox">delete</a>        </td>
      </tr>
          <tr>
        <td><input class="checkbox" name="delete_124" value="124" type="checkbox"></td>
        <td>124</td>

        <td>Test</td>
        <td>Sergey Panov</td>
        <td>54</td>
        <td>December 28, 2010 10:52:10 AM PST</td>
        <td>
          <a href="http://demo.socialengine.net/classifieds/4190/124">
            view          </a>

          |
          <a href="http://demo.socialengine.net/classified/admin-manage/delete/id/124" class="smoothbox">delete</a>        </td>
      </tr>
          <tr>
        <td><input class="checkbox" name="delete_123" value="123" type="checkbox"></td>
        <td>123</td>
        <td>testing</td>

        <td>robin prash</td>
        <td>59</td>
        <td>December 26, 2010 11:03:16 PM PST</td>
        <td>
          <a href="http://demo.socialengine.net/classifieds/4148/123">
            view          </a>
          |
          <a href="http://demo.socialengine.net/classified/admin-manage/delete/id/123" class="smoothbox">delete</a>        </td>

      </tr>
          <tr>
        <td><input class="checkbox" name="delete_119" value="119" type="checkbox"></td>
        <td>119</td>
        <td>Please Donate to Michigan Gleaners Charity</td>
        <td>Victor Online</td>
        <td>124</td>

        <td>December 17, 2010 2:26:37 PM PST</td>
        <td>
          <a href="http://demo.socialengine.net/classifieds/3758/119">
            view          </a>
          |
          <a href="http://demo.socialengine.net/classified/admin-manage/delete/id/119" class="smoothbox">delete</a>        </td>
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
            <a href="http://demo.socialengine.net/admin/classified/manage">1</a>
          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/classified/manage/index/page/2">2</a>          </li>
                                <li>

            <a href="http://demo.socialengine.net/admin/classified/manage/index/page/3">3</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/classified/manage/index/page/4">4</a>          </li>
                                <li>
            <a href="http://demo.socialengine.net/admin/classified/manage/index/page/5">5</a>          </li>
                                <li>

            <a href="http://demo.socialengine.net/admin/classified/manage/index/page/6">6</a>          </li>
                            <li>
          <a href="http://demo.socialengine.net/admin/classified/manage/index/page/2">Next »</a>        </li>
          </ul>
  </div>

</div>