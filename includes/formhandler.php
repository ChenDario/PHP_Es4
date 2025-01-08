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
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){

                $name = htmlspecialchars($_POST["name"]);
                $age = htmlspecialchars($_POST["age"]);
                $age = intval($age); // Conversione in intero
                $piano = htmlspecialchars($_POST["piano"]);
                $piano = intval($piano); // Conversione in intero

                echo "<center><h2>Hai inviato i seguenti dati:</h2></center>";
                echo "<center><p><strong>Nome:</strong> " . htmlspecialchars($name) . "</p></center>";
                echo "<center><p><strong>Età:</strong> " . htmlspecialchars($age) . "</p></center>";
                echo "<center><p><strong>Piano di pagamento:</strong> " . htmlspecialchars($piano) . "</p></center>";

                $price = calcoloPrezzo($age, $piano);

            }

            function calcoloPrezzo($eta, $piano_pag){
                $costo_base = 0;

                if($eta < 18 || $eta > 64){
                    $costo_base = 35;
                } else {
                    $costo_base = 45;
                }

                $sconto = 0;
                switch($piano_pag){
                    case 1:
                        break;
                    case 2:
                        $sconto = 0.1;
                        break;
                    case 3:
                        $sconto = 0.15;
                        break;
                
                    case 4:
                        $sconto = 0.2;
                        break;
                    
                    default:
                        echo "Error";
                        break;
                }

                $costo_totale = $costo_base * 12;

                return $costo_totale - ($costo_totale * $sconto);
            }
        ?> 

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
                <td> <?php echo $piano?> </td>
                <td> <?php echo $price?>€ </td>
            </tr>

            </table>
        </div>   
    </body>
    </html>
