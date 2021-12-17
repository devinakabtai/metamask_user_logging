<?php
$handle = fopen("metamask_users.txt", "r") or die("Unable to open file!");
if ($handle) {
    while (($line = fgets($handle)) !== false) {

        //if the wallet is in the system
        $wallet_number = explode(':', $line);
        $first_name = explode('%', $wallet_number[1]);
        $last_name = explode(';', $first_name[1]);
        $list_of_interesting_things = $last_name[1];
        echo "$wallet_number[0] $first_name[0] <br>";
    }

    fclose($handle);
} else {
    // error opening the file.
}



?> 