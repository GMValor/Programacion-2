<
<?php
abstract class Instrumento {
 
    abstract function Sonar();
    }
class piano extends Instrumento{
public function Sonar(){
echo "Piano.mp3";
}
}


$pianoVertical =new Piano();
$pianoVertical->Sonar();
?>