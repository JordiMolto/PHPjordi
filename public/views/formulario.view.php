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
<header>
    Formulari
</header>
<form method="POST" action="../e2_1_formulariCalculadora/formulari.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Nom:</label>
        <input name="name" type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter Name" >
        <small id="nameHelp" class="form-text text-muted">El teu nom</small>
    </div>
    <br>

    <div class="form-group">
        <label for="data">Data de naixement:</label>
        <input name="data" type="date" class="form-control" id="data" aria-describedby="dataHelp" placeholder="Enter Data" >
        <small id="dataHelp" class="form-text text-muted">Quan vas naixer.</small>
    </div>
    <br>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="genre" id="exampleRadios1" value="Femení" checked>
        <label class="form-check-label" for="exampleRadios1">
            Femení
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="genre" id="exampleRadios2" value="Masculí">
        <label class="form-check-label" for="exampleRadios2">
            Masculí
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="genre" id="exampleRadios3" value="No binari">
        <label class="form-check-label" for="exampleRadios3">
            No binari
        </label>
    </div>
    <br>
    
    <select class="form-control" name="hobby">
        <?php foreach ($hobbies as $key => $hobby): ?>
            <option value="<?= $key ?>"><?= $hobby ?></option>
        <?php endforeach ?>
    </select>
    <br>

    <div class="form-group">
        <label for="exampleFormControlFile1">Puja Foto</label>
        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <br>
    
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
