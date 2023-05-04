<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href=" <?php echo base_url('asset/bootstrap.css') ?> ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter une etudiant</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">BARRE DE NAVIGATION |</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url() ?>">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php  echo site_url('Etudiant/ajouter') ?>">Ajouter une etudiant</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php  echo site_url('Genre/ajouter') ?>">Ajouter une genre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php  echo site_url('Etudiant/listes') ?>">Listes des etudiant</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php  echo site_url('Genre/listes') ?>">Listes des genres</a>
      </li>
    </ul>
  </div>
</nav>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nom</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Prenom</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="prenom">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Age</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="age">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Listes de genre</label>
    <select name="genre" id="" class="form-control">
      <?php  foreach ($liste->result_array() as $listes): ?>
      <option value=" <?=$listes['code_genre'] ?> "><?=$listes['genre'] ?></option>
      <?php endforeach;  ?>
    </select>

  </div>
  <button type="submit" class="btn btn-success w-100" name="enregistrer">Enregistrer</button>
</form>
    </div>
    <div class="col-md-4"></div>
</div>
<?php if ($success):?>
<script>
  alert('<?=$success ?>');
</script>
<?php endif; ?>

<!-- <?php if($success):?>
<div>
  <h5 class="alert alert-success"><?=$success ?></h5>
</div>
<?php endif; ?> -->
</body>
</html>