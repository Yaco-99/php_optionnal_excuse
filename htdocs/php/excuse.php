<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<h1>Your excuse :</h1>
<div class="letter">
    <?php
    if(isset($_GET['submit'])){
        $_GET['gender']=="boy" ? $gender="Mon fils" : $gender="Ma fille";
        $teacher =$_GET['teacher'];
        $name = $_GET['name'];
        $date = date("d/m/Y");

        $excuseArr=array(
            "illness" => array("$gender $name, élève en classe de 4ième dans votre collège, ne pourra pas assister au cours aujourd’hui.
            Son état de santé justifie cette absence. Le médecin de famille lui a préconisé une période de repos.
            Notre enfant devrait reprendre la classe dans une semaine, soit le lundi 20 septembre 2018.
            Pour tout complément d’informations n’hésitez surtout pas à nous contacter.",
             "Excuse 2", "Excuse 3", "Excuse 4", "Excuse 5"),
        
            "deathP"=> array("$gender, $name, ne sera pas disponnible et n’assistera donc pas aux cours de la journée du 13 septembre 2018.
            Notre fille (fils) sera absente et n’ira pas au lycée pour des raisons familiales et personnelles.
            Si vous souhaitez avoir des précisions sur le motif de cette absence scolaire vous pouvez me contacter sur mon téléphone portable.",
             "Excuse 2", "Excuse 3", "Excuse 4", "Excuse 5"),
        
            "activity"=> array("$gender $name est arrivé en retard aujourd’hui au lycée, mais il n’en est pas responsable.
            En effet, nous sommes sortis très tard avec hier soir, et nous avons préféré leur accorder deux de sommeil supplémentaires au lieu de les obliger à se rendre au lycée trop fatigués, pour que cette journée leur soit vraiment profitable.
            Vous voudrez donc bien ne pas leur en tenir rigueur, et de notre côté nous veillerons bien évidemment à ce que cela ne se reproduise pas
            Merci pour votre compréhension.", "Excuse 2", "Excuse 3", "Excuse 4", "Excuse 5"),
        
            "deadReal"=>array("$gender, $name, ne sera pas disponnible et n’assistera donc pas aux cours de la journée du 13 septembre 2018.
            car il est mort.", "Excuse 2", "Excuse 3", "Excuse 4", "Excuse 5")
        );

        echo "<div class='letterHead'><p>$teacher,</p><p>$date</p></div>";

        switch ($_GET['excuse']){
            case "illness":
                echo $excuseArr["illness"][random()];
                break;
            case "deathP":
                echo $excuseArr["deathP"][random()];
                break;
            case "activity":
                echo $excuseArr["activity"][random()];
                break;
            case "deadReal":
                echo $excuseArr["deadReal"][random()];
                break;
        }
        echo "<p>Veuillez agréer, l’assurance de nos sentiments respectueux.</p>";
    }
    function random(){
        return rand(0,4);
    }
    ?>
</div>

</body>
</html>
