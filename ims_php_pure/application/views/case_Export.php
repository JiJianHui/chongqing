<?php
header("Conteng-Type: application/vnd.msword");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment; filename=sampleword.doc");
?>
案例编号: <?php echo $records[0]->cID ?><pr>
企业名称: <?php echo $records[0]->eName ?><pr>
企业领域: <?php echo $records[0]->eCategory ?><pr>
地址: <?php echo $records[0]->eAddress ?><pr>
邮编: <?php echo $records[0]->ePostCode ?><pr>    
联系人:<?php echo $records[0]->contact ?><pr>
手机: <?php echo $records[0]->mobilePhone ?><pr>
座机: <?php echo $records[0]->telePhone ?><pr>
传真: <?php echo $records[0]->faxNumber ?><pr>
EMail: <?php echo $records[0]->eMail ?><pr>
qq: <?php echo $records[0]->qq  ?><pr>
主要产品: <?php echo $records[0]->mainProducts  ?><pr>
摘要: <?php echo $records[0]->abstract ?><pr>       
问题描述: <?php echo $records[0]->description ?><pr>
过程: <?php echo $records[0]->course ?><pr>
概念方案: <?php echo $records[0]->cSolution ?><pr>
采用方案: <?php echo $records[0]->sEmployed ?><pr>
方案实施: <?php echo $records[0]->sImplementation ?><pr>
    
        