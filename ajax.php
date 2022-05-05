<?php
//Load Required Files
require_once('./config.php');
require_once('./db.php');

//Check incoming requests
$_POST = json_decode(file_get_contents("php://input"),true);
if(isset($_POST['operation'])) {
    //Start a Connection
    $db = new DBHandler(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    switch($_POST['operation']) {
        case 'dAv':
            $res = $db->query('SELECT * FROM A');
            echo json_encode($res);
            break;
        case 'dABCv':
            $res1 = $db->query('SELECT * FROM A');
            $res2 = $db->query('SELECT * FROM B');
            $res3 = $db->query('SELECT * FROM C');
            $res = array_merge($res1, $res2, $res3);
            echo json_encode($res);
            break;
        case 'dCBv':
            $res1 = $db->query('SELECT * FROM C');
            $res2 = $db->query('SELECT * FROM B');
            $res = array_merge($res1, $res2);
            echo json_encode($res);
            break;
        case 'dBva':
            $res = $db->query('SELECT * FROM B ORDER BY data ASC');
            echo json_encode($res);
            break;
        case 'dBvd':
            $res = $db->query('SELECT * FROM B ORDER BY data DESC');
            echo json_encode($res);
            break;
        default:
            $errors = array(
                'status' => 'error',
                'message' => 'The operation specified not available'
            );
            echo json_encode($errors);
            break;
    }
    $db->close();
}else {
    $errors = array(
        'status' => 'error',
        'message' => 'No operation specified'
    );
    echo json_encode($errors);
}