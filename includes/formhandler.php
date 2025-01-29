<?php
    session_start();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["name"]);
        $age = intval($_POST["age"]);
        $piano = intval($_POST["piano"]);

        $price = calcoloPrezzo($age, $piano);

        // Se l'array di iscritti non esiste, lo inizializza
        if (!isset($_SESSION['iscritti'])) {
            $_SESSION['iscritti'] = [];
        }

        // Salvataggio dati nel session array
        $_SESSION['iscritti'][] = [
            'nome' => $name,
            'eta' => $age,
            'piano_p' => pianoPagamento($piano),
            'price' => $price
        ];
    }

    function calcoloPrezzo($eta, $piano_pag) {
        $costo_base = ($eta < 18 || $eta > 64) ? 35 : 45;

        $sconti = [1 => 0, 2 => 0.1, 3 => 0.15, 4 => 0.2];
        $sconto = $sconti[$piano_pag] ?? 0;

        $costo_totale = $costo_base * 12;
        return $costo_totale - ($costo_totale * $sconto);
    }

    function pianoPagamento($piano_pag) {
        $metodi = [1 => "Mensile", 2 => "Bimestrale", 3 => "Trimestrale", 4 => "Annuale"];
        return $metodi[$piano_pag] ?? "Error";
    }
?>



<!-- risultato.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/formhandler.css">
    <!-- BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title> Answer </title>
</head>
<body>


<div class="form">
    <div class="table-ans">
        <table class="table table-bordered">
        <tr>
            <th colspan="3"> Dati del form </th>
            <th> Output Server </th>
        </tr>
        <tr>
            <td> Nome </td>
            <td> Età </td>
            <td> Metodo di Pagamento </td>
            <td> Output </td>
        </tr>
        <tr>
            <td> <?php echo $name?> </td>
            <td> <?php echo $age?> </td>
            <td> <?php echo pianoPagamento($piano) ?> </td>
            <td> <?php echo $price?>€ </td>
        </tr>
        </table>    
    </div>   

    <div class = "div-btn p-5 justify-content-center">
        <button onclick="window.location.href='../index.php'" class="btn btn-primary btn-lg"> Inserire nuovo iscritto </button>
        <button onclick="window.location.href='all.php'" class="btn btn-primary btn-lg"> Show All </button>
    </div>
</div>

</body>
</html>
