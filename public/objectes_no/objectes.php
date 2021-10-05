<?php
class Player
{
    public $Name;
    public $BirthDay;
    public $Country;
    public $Dorsal;
    public $Position;
    public $Goals;
    public $Matches;
    public $Minutes;
    public $YellowCard;
    public $RedCard;

    public function __construct($Name, $BirthDay, $Country, $Dorsal, $Position, $Goals, $Matches, $Minutes, $YellowCard, $RedCard)
    {
        $this->Name = $Name;
        $this->BirthDay = $BirthDay;
        $this->Country = $Country;
        $this->Dorsal = $Dorsal;
        $this->Position = $Position;
        $this->Goals = $Goals;
        $this->Matches = $Matches;
        $this->Minutes = $Minutes;
        $this->YellowCard = $YellowCard;
        $this->RedCard = $RedCard;
    }
    public function Age()
    {
    }
    public function Score()
    {
    }
    public function AddCard(int $Colour)
    {
    }
    public function PlayMinutes(int $min)
    {
    }
    public function Render()
    {
        require_once('../kernel.php');
        $fitxer = "../../dades/EjemploPlantillas.csv";

        if (!$fp = fopen($fitxer, "r")) {
            echo "No s'ha pogut obrir el fitxer $fitxer";
            die();
        }
        $contents = fread($fp, filesize($fitxer));
        //faig un array per cada linea
        $linees = explode(PHP_EOL, $contents);
        foreach ($linees as $linea) {
            $resultats[] = explode(';', $linea);
        }
        $atMadrid = array_filter($resultats, function ($arr) {

            return (isset($arr[1]) && $arr[1] == 'Atlético de Madrid');
        });
        foreach ($atMadrid as $jugador) {
            $planter[] = [
                'Nom' => $jugador[3] . ',' . $jugador[4] . ' ' . $jugador[5],
                'edat' => $jugador[7],
                'pais' => $jugador[9],
                'dorsal' => $jugador[11],
                'posició' => $jugador[10],
                'gols' => $jugador[17]
            ];
        }
        usort($planter, function ($a, $b) {
            return $a['dorsal'] > $b['dorsal'];
        });

        loadView('importar', compact('planter'));
    }
}


class Team
{
    public $Name;
    public $Players;
    public $Matches;
    public $Won;
    public $Lost;
    public $Tie;
    public $ScoreGoals;
    public $ConcededGoals;

    public function __construct($Name, $Players, $Matches, $Won, $Lost, $Tie, $ScoreGoals, $ConcededGoals)
    {
        $this->Name = $Name;
        $this->Players = $Players;
        $this->Matches = $Matches;
        $this->Won = $Won;
        $this->Lost = $Lost;
        $this->Tie = $Tie;
        $this->ScoreGoals = $ScoreGoals;
        $this->ConcededGoals = $ConcededGoals;
    }
    public function SignPlayer($Player){
    }
    public function Render()
    {
        require_once('../kernel.php');
        $fitxer = "../../dades/EjemploPlantillas.csv";

        if (!$fp = fopen($fitxer, "r")) {
            echo "No s'ha pogut obrir el fitxer $fitxer";
            die();
        }
        $contents = fread($fp, filesize($fitxer));
        //faig un array per cada linea
        $linees = explode(PHP_EOL, $contents);
        foreach ($linees as $linea) {
            $resultats[] = explode(';', $linea);
        }
        $atMadrid = array_filter($resultats, function ($arr) {

            return (isset($arr[1]) && $arr[1] == 'Atlético de Madrid');
        });
        foreach ($atMadrid as $jugador) {
            $planter[] = [
                'Nom' => $jugador[3] . ',' . $jugador[4] . ' ' . $jugador[5],
                'edat' => $jugador[7],
                'pais' => $jugador[9],
                'dorsal' => $jugador[11],
                'posició' => $jugador[10],
                'gols' => $jugador[17]
            ];
        }
        usort($planter, function ($a, $b) {
            return $a['dorsal'] > $b['dorsal'];
        });

        loadView('importar', compact('planter'));
    }
}
//require_once('../');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <?php
    $Name= $_POST['name'];;
    $Players= $_POST['players'];;
    $Matches= $_POST['matches'];;
    $Won= $_POST['won'];;
    $Lost= $_POST['lost'];;
    $Tie= $_POST['tie'];;
    $ScoreGoals= $_POST['scoregoals'];;
    $ConcededGoals= $_POST['concedadgoals'];;

    ?>

    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                <div class="col mb-5">
                Dades del team:
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <?php if ($discount_price) : ?>
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <?php endif ?>
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"><?= $Name ?></h5>
                                <!-- Product categoria-->
                                <h5 class="fw-normal"><?= $Players ?></h5>
                                <!-- Product categoria-->
                                <h5 class="fw-normal"><?= $Matches ?></h5>
                                <!-- Product categoria-->
                                <h5 class="fw-normal"><?= $Won ?></h5>
                                <!-- Product categoria-->
                                <h5 class="fw-normal"><?= $Lost ?></h5>
                                <!-- Product categoria-->
                                <h5 class="fw-normal"><?= $Tie ?></h5>
                                <!-- Product categoria-->
                                <h5 class="fw-normal"><?= $ScoreGoals ?></h5>
                                <!-- Product categoria-->
                                <h5 class="fw-normal"><?= $ConcededGoals ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>