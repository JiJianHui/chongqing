<?php
header('content-type: text/html; charset=utf-8');
?>

SearchByCompany: 
<?php echo form_open('studentcontroller/selectStudentByCompany'); ?>
<select name = "queryCompany">
<?php 
      foreach($queryData['queryCompany'] as $item) {
           echo "<option value =".$item->company." >".$item->company;
      }
?>
</select>
<input type= "submit" value="Ok"/>Ok
<?php echo form_close(); ?>

SearchBySName: 
<?php echo form_open('studentcontroller/selectStudentBySName'); ?>
<select name = "querySName">
<?php 
      foreach($queryData['querySName'] as $item) {
           echo "<option value =".$item->sName." >".$item->sName;
      }
?>
</select>
<input type= "submit" value="Ok"/>Ok
<?php echo form_close(); ?>


<?php
foreach($records as $rec) { 
    $modifyURL = site_url('studentcontroller/loadStudent?sID=').$rec->sID;
    $deleteURL = site_url('studentcontroller/deleteStudent?sID=').$rec->sID;
    $exportURL = site_url('studentcontroller/exportStudent?sID=').$rec->sID;
    $export2pdfURL = site_url('studentcontroller/pdf?sID=').$rec->sID;
    $importURL = site_url('studentcontroller/exportStudent?sID=').$rec->sID;
?>
    studentID: <?php echo $rec->sID ?><br/>
    studentName: <?php echo $rec->sName ?><br/>
    studentSex: <?php echo $rec->sSex ?><br/>
    startWorkTime: <?php echo $rec->startWorkTime ?><br/>
    birthday: <?php echo $rec->birthday ?><br/>
    currentMajor: <?php echo $rec->cMajor ?><br/>
    executiveTitle: <?php echo $rec->eTitle ?><br/>
    company: <?php echo $rec->company ?><br/>
    <a href = "<?php print $deleteURL?>">delete</a>
    <a href = "<?php print $modifyURL?>">modify</a> 
    <a href = "<?php print $exportURL?>">export2word</a>
    <a href = "<?php print $export2pdfURL?>">export2pdf</a> 
    <br/><br/><br/>
<?php
}
    $addURL = site_url('studentcontroller/addStudent?isFirst=1');
?>
<a href = "<?php print $addURL?>">add</a>
<?php
echo form_open_multipart(site_url('upload/upload_file'));
echo form_upload('userfile');
echo form_submit('upload', 'upload file');
?>
</form>
