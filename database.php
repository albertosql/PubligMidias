<?php
mysqli_report(MYSQLI_REPORT_STRICT);
function open_database() {
    try {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        return $conn;
    } catch (Exception $e) {
        echo $e->getMessage();
        return null;
    }
}
function close_database($conn) {
    try {
        mysqli_close($conn);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function findNumeros() {

    $database = open_database();
    $found = null;
    try {
        $sql = "SELECT * FROM `nossosnumeros` WHERE 1";
        $result = $database->query($sql);

        if ($result->num_rows > 0) {
            $found = $result->fetch_assoc();
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }

    close_database($database);
    return $found;
}

function findMidias() {

    $database = open_database();
    $found = null;
    try {
        $sql = "SELECT `nome` FROM `tipos_midias`";
        $result = $database->query($sql);

        if ($result->num_rows > 0) {
            $found = $result->fetch_assoc();
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }

    close_database($database);
    return $found;
}