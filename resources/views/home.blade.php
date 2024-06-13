<!DOCTYPE html>
<html>
<head>
    <title>Trains</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="my-4">Trains departing today</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Azienda</th>
                <th>Stazione di Partenza</th>
                <th>Stazione di Arrivo</th>
                <th>Orario di Partenza</th>
                <th>Orario di Arrivo</th>
                <th>Codice Treno</th>
                <th>Numero Carrozze</th>
                <th>In Orario</th>
                <th>Cancellato</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trains as $train)
                <tr>
                    <td>{{ $train->azienda }}</td>
                    <td>{{ $train->stazione_di_partenza }}</td>
                    <td>{{ $train->stazione_di_arrivo }}</td>
                    <td>{{ $train->orario_di_partenza }}</td>
                    <td>{{ $train->orario_di_arrivo }}</td>
                    <td>{{ $train->codice_treno }}</td>
                    <td>{{ $train->numero_carrozze }}</td>
                    <td>{{ $train->in_orario ? 'Sì' : 'No' }}</td>
                    <td>{{ $train->cancellato ? 'Sì' : 'No' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>