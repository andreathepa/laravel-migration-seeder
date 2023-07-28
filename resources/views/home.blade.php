<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    
    @vite('resources/js/app.js')

</head>

<body>

    <div class="container">
        <div class="row">
            @foreach ($train as $item)
            <div class="col-12 border">
                {{$item->azienda}} -
                {{$item->data_partenza}} -
                {{$item->orario_partenza}} -
                {{$item->orario_arrivo}} - 
                {{$item->codice_treno}} - 
                {{$item->n_vagone}} - 
                {{$item->on_time}} - 
                {{$item->delayed}}
            </div>
                
            @endforeach
        </div>
    </div>

</body>

</html>

