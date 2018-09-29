<?php
include('class.db.php');
include('jdatetime.class.php');
$HOST = "localhost";
/*$USERNAME = "asantabl_phucstr";
$PASSWORD = "4BaB5IG[lfIE";
$DATABASE = "asantabl_phpdtl45";*/
$USERNAME = "root";
$PASSWORD = "";
$DATABASE = "goli";
$db = new db("mysql:host=$HOST;dbname=$DATABASE", $USERNAME, $PASSWORD);
$date = new jDateTime(true, true, 'Asia/Tehran');
$db -> exec("SET CHARACTER SET utf8");
function substrwords($text, $maxchar, $end='...') {
    if (strlen($text) > $maxchar || $text == '') {
        $words = preg_split('/\s/', $text);
        $output = '';
        $i      = 0;
        while (1) {
            $length = strlen($output)+strlen($words[$i]);
            if ($length > $maxchar) {
                break;
            }
            else {
                $output .= " " . $words[$i];
                ++$i;
            }
        }
        $output .= $end;
    }
    else {
        $output = $text;
    }
    return $output;
}
?>