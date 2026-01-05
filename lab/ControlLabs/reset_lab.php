<?php
include "../../config/Database.php";
exec("docker rm -f $LAB_NAME web_lab");
exec("docker run -d --name $LAB_NAME -p 2222:22 $LAB_IMAGE");
exec("docker run -d --name web_lab -p 7681:7681 web_lab");

