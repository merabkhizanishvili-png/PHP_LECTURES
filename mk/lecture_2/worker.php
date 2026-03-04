<?php
    echo "<h1>worker<h1>";
    echo "<pre>";
    print_r($_GET);
    echo "<pre>";
    if(isset($_GET['saxeli']) && isset($_GET['sagani'])){
        echo "<p> ".$_GET['saxeli']. "swavlobs ".$_GET['sagani']."</p>";
    }
    

    echo "<hr><hr>";
    echo "<pre>";
    print_r($_POST);
    echo "<pre>";
    if(isset($_GET['saxeli']) && isset($_GET['sagani'])){
        echo "<p> ".$_POST['saxeli']. "swavlobs ".$_POST['sagani']."</p>";
    }
?>



