<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title> PHP Es4 </title>
</head>
<body>
    <div class="form">
        <form action="includes/formhandler.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label"> Name </label>
                <input type="text" class="form-control form-control-lg" id="name" placeholder="Enter your name..." name="name" required>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label"> Age </label>
                <input type="number" class="form-control form-control-lg" id="age" placeholder="Enter your age..." name="age" min=0 max=100 required>
            </div>

            <div class="info">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Frequenza di Pagamento</th>
                            <th scope="col">Sconto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mensile</td>
                            <td>None</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Bimestrale</td>
                            <td>10%</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Trimestrale</td>
                            <td>15%</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Annuale</td>
                            <td>20%</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div>
                <h3> Inserire il piano di pagamento </h3>
                <br>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="piano" id="1" value="1">
                    <label class="form-check-label" for="mensile">
                        1
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="piano" id="2" value="2" checked>
                    <label class="form-check-label" for="bimensile">
                        2
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="piano" id="3" value="3">
                    <label class="form-check-label" for="trimestrale">
                        3
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="piano" id="4" value="4">
                    <label class="form-check-label" for="annuale">
                        4
                    </label>
                </div>
            </div>
            
            <div class="div-btn p-5">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
        </form>
    </div>
    
</body>
</html>