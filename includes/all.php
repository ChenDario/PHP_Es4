<?php
    session_start();

    // Controllo se la sessione contiene dati
    $data = isset($_SESSION['iscritti']) ? $_SESSION['iscritti'] : [];
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenco Iscritti</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2 class="text-center">Elenco Iscritti</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Età</th>
                <th>Metodo di Pagamento</th>
                <th>Prezzo</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($data)): ?>
                <?php foreach($data as $d): ?>
                    <tr>
                        <td><?= htmlspecialchars($d['nome']) ?></td>
                        <td><?= htmlspecialchars($d['eta']) ?></td>
                        <td><?= htmlspecialchars($d['piano_p']) ?></td>
                        <td><?= htmlspecialchars($d['price']) ?>€</td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" class="text-center">Nessun iscritto disponibile.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <a href="../index.php" class="btn btn-primary">Inserisci Nuovo Iscritto</a>
    <a href="reset.php" class="btn btn-primary"> Delete Data </a>
</body>
</html>
