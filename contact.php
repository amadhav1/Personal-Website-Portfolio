<?php 
$email = "bla.bla.bla@bla.net";
$new_em = explode("@",$email);
$new_em = $new_em[1];
$top_host = explode(".", $new_em);
$top_host = $top_host[1];
print_r($top_host);
echo "<br />";
if ($top_host == "ru") {
    echo "is bad";
}
else {
    echo "is ok";
}


echo $_SERVER['REMOTE_ADDR'];
?>