<?php

require_once 'app/autoload.php';

try {
    $response = array();

    if(isset($_POST) && !empty($_POST)) {
        $id = $_POST['id'];
        $task = $_POST['task'];
        $sql = "UPDATE todo SET task='$task' WHERE id='$id'";
        $rows = run($db, $sql);

        $response['error'] = FALSE;
        $response['message'] = $rows . ' rows updated';
    } else {
        $response['error'] = TRUE;
        $response['message'] = 'No Post Data';
    }

    echo json_encode($response);
} catch(PDOException $ex) {
    // handle error
}