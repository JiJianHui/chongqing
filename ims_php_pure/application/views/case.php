<?php
header('content-type: text/html; charset=utf-8');
?>

SearchByDepartment: 
<?php echo form_open('casecontroller/selectCaseByDepartment'); ?>
<select name = "queryDepartment">
<?php 
      foreach($queryData['queryDepartment'] as $item) {
           echo "<option value =".$item->department." >".$item->department;
      }
?>
</select>
<input type= "submit" value="Ok"/>Ok
<?php echo form_close(); ?>

<?php
foreach($records as $rec) { 
    $modifyURL = site_url('casecontroller/loadCase?cID=').$rec->cID;
    $deleteURL = site_url('casecontroller/deleteStudent?cID=').$rec->cID;
    $exportURL = site_url('casecontroller/exportStudent?cID=').$rec->cID;
    $export2pdfURL = site_url('casecontroller/pdf?cID=').$rec->cID;
    $importURL = site_url('casecontroller/exportStudent?cID=').$rec->cID;
?>
    caseID: <?php echo $rec->cID ?><br/>
    department: <?php echo $rec->department ?><br/>
    sector: <?php echo $rec->sector ?><br/>
    category: <?php echo $rec->category ?><br/>
    mobilePhone: <?php echo $rec->mobilePhone ?><br/>
    faxNumber: <?php echo $rec->faxNumber ?><br/>
    eMail: <?php echo $rec->eMail ?><br/>
    qq: <?php echo $rec->qq ?><br/>
    <a href = "<?php print $deleteURL?>">delete</a>
    <a href = "<?php print $modifyURL?>">modify</a> 
    <a href = "<?php print $exportURL?>">export2word</a>
    <a href = "<?php print $export2pdfURL?>">export2pdf</a> 
    <br/><br/><br/>
<?php
}
    $addURL = site_url('casecontroller/addCase?isFirst=1');
?>
<a href = "<?php print $addURL?>">add</a>
<?php
echo form_open_multipart(site_url('upload/upload_file'));
echo form_upload('userfile');
echo form_submit('upload', 'upload file');
?>
</form>
