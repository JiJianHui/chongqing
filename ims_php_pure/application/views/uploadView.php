<?php
echo form_open_multipart(base_url()."index.php/upload/upload_file");
echo form_upload("file");
echo form_submit("upload", "Upload File");
?>
</form>
