<?php
if(isset($_GET['q']) == true) {
    $q = $_GET['q']; 
}
if(isset($_GET['q']) == false || $_GET['q'] == ""){
    echo '<meta http-equiv="refresh" content="0;url=./" />';
    return;
}
echo "<meta http-equiv='refresh' content='0;url=https://www.youtube.com/results?search_query=$q'/>";?>