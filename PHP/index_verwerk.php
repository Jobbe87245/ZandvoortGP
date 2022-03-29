<?php
    if(isset($_POST['submit'])){
        $naamForm = $_POST['naam'];
        $nummerForm = $_POST['nummer'];
        $klasForm = $_POST['klas'];
        $leerlijnenForm = array($_POST['leerlijn1'], $_POST['leerlijn2'], $_POST['leerlijn3'], $_POST['leerlijn4']);
        $cijfersForm = array($_POST['cijfer1'], $_POST['cijfer2'], $_POST['cijfer3'], $_POST['cijfer4']);
        $cijfersGemiddelde = $cijfersForm[0] + $cijfersForm[1] + $cijfersForm[2] + $cijfersForm[3];

        //infoStudent
        echo "Naam is: " . $naamForm . '<br>';
        echo 'Nummer is: ' . $nummerForm . '<br>';
        echo 'Klas is: ' . $klasForm . '<br>';
        //leerlijnen
        echo 'Leerlijnen uit de array:' . '<br>' . $leerlijnenForm[0] . '<br>' . $leerlijnenForm[1] . '<br>' . $leerlijnenForm[2] . '<br>' . $leerlijnenForm[3] . '<br>';
        //cijfers
        echo 'Cijfers uit de array:' . '<br>' . $cijfersForm[0] . '<br>' . $cijfersForm[1] . '<br>' . $cijfersForm[2] . '<br>' . $cijfersForm[3] . '<br>' . '<br>';
        //gemiddelde
         $cijfersGemiddeldeText = $cijfersGemiddelde / 4;
        // echo $cijfersGemiddeldeText;
        
        //kleur text
        if($cijfersGemiddeldeText > 5.5 || $cijfersGemiddelde == 5.5 ){
            echo '<p style="color: green;" id="groen">Het gemiddelde cijfer is: </p>' . $cijfersGemiddeldeText;
        }if($cijfersGemiddeldeText < 5.5){
            echo '<p style="color: red;" id="rood">Het gemiddelde cijfer is: </p>'  . $cijfersGemiddeldeText;
        }
    }else{
        echo 'Je hebt niet op een link geklikt, wat doe je op deze pagina?';
    }
?>    