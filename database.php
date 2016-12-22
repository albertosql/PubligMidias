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

    try {
        $sql = "SELECT `nome` FROM `tipos_midias`";
        $result = $database->query($sql);

        while ($row = $result->fetch_assoc()) {
            $tipoMidia = utf8_encode($row['nome']);
            $tipoMidia = str_replace(" ","",$tipoMidia);
            echo "<button class='filter' data-filter='.".$tipoMidia."'>".utf8_encode($row['nome'])."</button>";
        }

    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }
    close_database($database);
}

function findPortfolio() {

    $database = open_database();

    try {
        $sql = "SELECT * FROM `portfolio`";
        $result = $database->query($sql);

        foreach ($result as $servico):
            $id = $servico['id'];
            $empresa = utf8_encode($servico['empresa']);
            $texto = utf8_encode($servico['texto']);
            $midia = utf8_encode($servico['tipo']);
            $foto = $servico['foto'];

            $nomeimagem = str_replace(" ","",$empresa);

            $tipoMidia = str_replace(" ","",$midia);
            $tipoMidia = preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $tipoMidia ) );

            echo "<div class='col-lg-4 col-md-6 col-sm-4 col-xs-6 mix ".$tipoMidia."' style='display: inline-block';>";
                echo "<div class='project'>";
                    echo "<img src='assets/".$foto."' alt='".$empresa."'>";
                    echo "<div class='ovrly'>";
                    echo "</div>";
                    echo "<div class='buttons'>";
                    echo "<a href='#".$id."' class='fa fa-eye show-popup'></a>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";

            echo "<div class='pop-up-box' id='".$id."'>";
                echo "<img src='assets/".$foto."' alt='".$empresa."' class='hidden-xs'>";
                echo "<div class='popup-content'>";
                    echo "<h3>".$empresa."</h3>";
                    echo "<p>";
                        echo $texto;
                    echo "</p>";
                echo "</div>";
            echo "</div>";

        endforeach;

    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }
    close_database($database);
}

?>



