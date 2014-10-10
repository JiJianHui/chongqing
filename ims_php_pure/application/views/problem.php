<?php
header('content-type: text/html; charset=utf-8');
?>

SearchByName: 
<?php echo form_open('problemcontroller/selectProblemByEName'); ?>
<select name = "queryEName">
<?php 
      foreach($queryData['queryEName'] as $item) {
           echo "<option value =".$item->eName." >".$item->eName;
      }
?>
</select>
<input type= "submit" value="Ok"/>Ok
<?php echo form_close(); ?>

SearchByCategory:
<?php echo form_open('problemcontroller/selectProblemByPCategory'); ?>
<select name = "queryPCategory">
<?php 
      foreach($queryData['queryCategory'] as $item) {
           echo "<option value =".$item->pCategory." >".$item->pCategory;
      }
?>
</select>
<input type= "submit" value="Ok"/>Ok
<?php echo form_close(); ?>

SearchByContactName: 
<?php echo form_open('problemcontroller/selectProblemByContactName'); ?>
<select name = "queryContactName">
<?php 
      foreach($queryData['queryCName'] as $item) {
           echo "<option value =".$item->contactName." >".$item->contactName;
      }
?>
</select>
<input type= "submit" value="Ok"/>Ok
<?php echo form_close();

foreach($records as $rec) { 
    $modifyURL = site_url('problemcontroller/loadProblem?pID=').$rec->pID;
    $deleteURL = site_url('problemcontroller/deleteProblem?pID=').$rec->pID;
    $exportURL = site_url('problemcontroller/exportProblem?pID=').$rec->pID;
    $export2pdfURL = site_url('problemcontroller/pdf?pID=').$rec->pID;
    $importURL = site_url('problemcontroller/exportProblem?pID=').$rec->pID;
?>
    problemID: <?php echo $rec->pID ?><br/>
    enterpriseID: <?php echo $rec->eName ?><br/>
    problemName: <?php echo $rec->pName ?><br/>
    problemCategory: <?php echo $rec->pCategory ?><br/>
    contaxtName: <?php echo $rec->contact ?><br/>
    faxNumber: <?php echo $rec->faxNumber ?><br/>
    backgroundDescription: <?php echo $rec->bgDescription ?><br/>
    problemDescription: <?php echo $rec->pDescription ?><br/>
    <a href = "<?php print $deleteURL?>">delete</a>
    <a href = "<?php print $modifyURL?>">modify</a> 
    <a href = "<?php print $exportURL?>">export2word</a>
    <a href = "<?php print $export2pdfURL?>">export2pdf</a> 
    <br/><br/><br/>
<?php
}
    $addURL = site_url('problemcontroller/addProblem?isFirst=1');
?>
<a href = "<?php print $addURL?>">add</a>
<?php
echo form_open_multipart(site_url('upload/upload_file'));
echo form_upload('userfile');
echo form_submit('upload', 'upload file');
?>
</form>
