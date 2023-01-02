<?php
    require_once "../config/connect.php";

    $creator = $_POST['creator'];
    $name = $_POST['name'];
    $type = $_POST['type'];

    $exist = mysqli_fetch_row(mysqli_query($connect,"SELECT COUNT(*) FROM channels WHERE `name` = '$name'"));
    if ($exist[0] == 1){
        echo 0;
    }
    else {
        $time = time() + 3*60*60;
        mysqli_query($connect, "INSERT INTO channels (`id`, `name`, `type`, `creator`, `last_message_time`) VALUES (NULL, '$name', '$type', '$creator', '$time')");
        $new_channel = mysqli_fetch_row(mysqli_query($connect, "SELECT * FROM channels WHERE `name` = '$name'"));
        if ($type == 'private'){
            mysqli_query($connect, "INSERT INTO permissions (`id`, `channel_id`, `user`) VALUES (NULL, '$new_channel[0]', '$creator')");
        }
        echo 1;
    }
?>
