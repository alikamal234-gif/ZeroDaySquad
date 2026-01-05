<?php
include "../../config/Database.php";
// SSH lab (اختياري)
exec("docker run -d --name $LAB_NAME -p 2222:22 $LAB_IMAGE");

// Web terminal lab
exec("docker run -d --name web_lab -p 7681:7681 web_lab");

exit;
