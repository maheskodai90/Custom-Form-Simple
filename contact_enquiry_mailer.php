<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="419">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="521">&nbsp;</td>
  </tr>
  <tr>
    <td height="30"><strong>Contact form </strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
 <?PHP if($name != ""){ ?>  
  <tr>
    <td height="30">Name</td>
    <td width="35" align="center"><strong>:</strong></td>
    <td><?PHP echo $name; ?></td>
  </tr>
  <?PHP } ?>
 <?PHP if($designation != ""){ ?>  
  <tr>
    <td height="30">Designation</td>
    <td align="center"><strong>:</strong></td>
    <td><?PHP echo $designation; ?></td>
  </tr>
  <?PHP } ?>
 <?PHP if($company != ""){ ?>  
  <tr>
    <td height="30">Company</td>
    <td align="center"><strong>:</strong></td>
    <td><?PHP echo $company; ?></td>
  </tr>
<?PHP }?> 
 <?PHP if($email != ""){ ?>
  <tr>
    <td height="30">Email</td>
    <td align="center"><strong>:</strong></td>
    <td><?PHP echo $email;?></td>
  </tr>
 <?PHP } ?> 
</table>

