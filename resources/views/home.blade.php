<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma petite pharmacie</title>
</head>
<body>
<h1>Nos médicaments</h1>
    <ul>
        @foreach($medicaments as $medicament)

        
        <li><a href="{{$medicament->id}}">{{$medicament['title']}}</a></li>
        @endforeach
    </ul>
</body>
</html>
