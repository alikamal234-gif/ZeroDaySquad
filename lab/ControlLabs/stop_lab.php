<?php
include "../../config/Database.php";

exec("docker stop $LAB_NAME web_lab");
exec("docker rm $LAB_NAME web_lab");

header("Location: index.php");
