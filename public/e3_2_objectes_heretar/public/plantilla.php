<?php
    require_once('../kernel.php');
    use App\Player;
    use App\Team;
    use App\Trainer;

$team = new Team('Barcelona');
    $fitxer = "../dades/EjemploPlantillas.csv";

    if (!$fp = fopen($fitxer, "r")){
        echo "No s'ha pogut obrir el fitxer $fitxer";
    }
    $contents = fread($fp,filesize($fitxer));
    $linees = explode(PHP_EOL,$contents);
    foreach ($linees as $linea){
        $resultats[] = explode(';',$linea);
    }
    $barcelona = array_filter($resultats,function($arr){
        return (isset($arr[1]) && $arr[1] == 'Barcelona');
    });

    foreach ($barcelona as $jugador){
        $player = new Player($jugador[3].','.$jugador[4].' '.$jugador[5],
            $jugador[6], $jugador[9], $jugador[11],$jugador[10],$jugador[17],$jugador[12],$jugador[16],$jugador[18],$jugador[19]);
            $team->signPlayer($player);
    }

    $team->signPlayer(new Trainer('Jose', '12/03/2000','Canadá','Segon entrenador'));
    $team->signPlayer(new Trainer('Paco', '12/03/1980','Alemania','Tercer entrenador'));
    $team->render();
