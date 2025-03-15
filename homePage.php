<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bool B&B</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Bool B&B ti da il benvenuto</h1>
        <h3>Scegli i requisiti che il tuo Hotel perfetto dovrebbe rispettare <br> o semplicemente avvia la ricerca!</h3>
        <div class="container-form">
            <form action="./resultPage.php" method="GET">
                <label for="voto_recensioni">Scegli il voto minimo assegnato alla struttura che cerchi</label>
                <select name="voto_recensioni">
                    <option value="inserisci_voto">Inserisci un voto minimo</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>

                <label for="parcheggio">Parcheggio:</label>
                <select name="parcheggio" id="">
                    <option value="all" checked>Tutti
                    <option value="true">Con parcheggio
                    <option value="false">Senza parcheggio
                </select>

                <button type="submit" class="link">Avvia la ricerca</button>
            </form>
        </div>
    </div>
</body>

</html>