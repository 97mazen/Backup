<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mijn winkelmandje</title>
    <style>
        .album{clear: left; width: 100%;}
        .omslag{float: left;}
        .gegevens{float: left; padding-left: 20px;}
        .korting{clear: left;}
        .aantal{background-color: #f8ce6c;}
    </style>
</head>
<body style="font-family: Verdana; font-size: 9px;">
    <h3>Mijn Winkelmandje</h3>
    <form name="album" action="" method="post">
        <div class="album">
            <div class="omslag">
                <img src="img/evora.jpg" width="50px" alt="X"/>
            </div>
            <div class="gegevens">
                Cesaria Evora "Em Um Concerto" prijs: $9
                <input type="hidden" name="albumcode[0]" value="001">
                <input type="hidden" name="artiest[0]" value="Cesaria Evora">
                <input type="hidden" name="album[0]" value="Em Um Concert">
                <input type="hidden" name="prijs[0]" value="9">
                <input type="hidden" name="genre[0]" value="world">
                <br> Antal:
                <input type="text" size="2" maxlength="3" name="aantal[0]" class="aantal" value="0">
            </div>
        </div>

        <div class="korting">
            <br><hr />korting<br />
            <input type="checkbox" name="student" value="15" />
        student: 15% <br />
            <input type="checkbox" name="klant" value="10" />
        klant: 10% <br />
            <input type="submit" width="300px" name="verzenden" value="Bestellen" />
        </div>

    </form>
    <?php
        if (isset($_POST["verzenden"]) ){
            $aantal = $_POST["aantal"][0];
         } else {
            $aantal = null;
        }

        if (isset($_POST["student"]) ){
            $student_korting = $_POST["student"];
        }else {
            $student_korting = null;
        }

        if (isset($_POST["klant"]) ){
            $klant_korting = $_POST["klant"];
        } else {
            $klant_korting = null;
        }
        $korting = $student_korting + $klant_korting;
        echo "Bestelde albums: " . $aantal . "<br>";
        echo "korting is: " . $korting;
    ?>
</body>
</html>