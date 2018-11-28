<?php 
ob_start(); 
session_start();

$pkey = $_POST['pkey'];

$_SESSION['pkey'] = $pkey;
?>
<table width="600" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="18" height="18"><img src="images/11.gif" width="18" height="18" /></td>
    <td height="18" bgcolor="#9E9039">&nbsp;</td>
    <td width="18" height="18"><img src="images/2.gif" width="18" height="18" /></td>
  </tr>
  <tr>
    <td width="18" bgcolor="#9E9039">&nbsp;</td>
    <td width="600"><form id="form1" name="form1" method="post" action="">
      <label for="tableclass">Class Name:</label>
      <input name="tableclass" type="text" id="tableclass" value="<?php  echo $_SESSION['$tbl'] ?>" />()
      <br />
      <label for="listpage">List Page:</label>
      <input name="listpage" type="text" id="listpage" value="listpage" />
      .php<br />
      <label for="addpage">Add Page:</label>
      <input name="addpage" type="text" id="addpage" value="addpage" />
      .php
      <label for="addsub">Submit to:</label>
      <input name="addsub" type="text" id="addsub" value="addpagesub" />
      .php      <br />
      <label for="editpage"> Edit Page:</label>
      <input name="editpage" type="text" id="editpage" value="editpage" />
      .php
      <label for="editsub">Submit to:</label>
      <input name="editsub" type="text" id="editsub" value="editpagesub" />
      .php      <br />
      <label for="delpage">Delete Page:</label>
      <input name="delpage" type="text" id="delpage" value="delpage" />
      .php
      <label for="button"></label>
      <input type="button" name="button" id="button" value="Button" class="btn" onclick="setpk()">
    </form></td>
    <td width="18" bgcolor="#9E9039">&nbsp;</td>
  </tr>
  <tr>
    <td width="18" height="18"><img src="images/7.gif" width="18" height="18" /></td>
    <td height="18" bgcolor="#9E9039">&nbsp;</td>
    <td width="18" height="18"><img src="images/5.gif" width="18" height="18" /></td>
  </tr>
</table>

