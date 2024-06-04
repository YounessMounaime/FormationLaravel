<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  @unless ($nbr!=null)

  rien a afficher  
    @endunless
    @for ($i =0  ; $i< $nbr;$i++)
    <h1>Bonjournaaaaaaaaaaa {{$nom}} age ={{$age}} </h1>
@endfor

</body>
</html>