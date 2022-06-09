<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatti</title>
</head>

<style>

    .contacts {display:flex;
        justify-content:space-around;}

 ul {
          list-style: none;
          display:flex;
          justify-content:space-between;
          
            }

            li {display: inline-block;
                margin-left:80px;
            margin-right:80px;
        font-weight:bold;}

</style>

<body>
<a href="{{route('homepage')}}">Torna alla Homepage</a>
<h1>I nostri contatti</h1>
<div class="contacts"><ul>
    <li>Walt Disney</li>
<li>Zio Paperone</li>
<li>Paperino</li>
<li>Gastone</li>
<li>Banda Bassotti</li></ul></div>
</body>
</html>