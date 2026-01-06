<?php
session_start();

/* حذف جميع متغيرات session */
$_SESSION = [];

/* حذف session cookie (اختياري ولكن مُستحسن) */
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

/* تدمير session */
session_destroy();

/* إعادة التوجيه */
header("Location: ../home/index.php");
exit;
