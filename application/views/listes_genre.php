<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href=" <?php echo base_url('asset/bootstrap.css') ?> ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listes des Genre</title>
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
<table class="table">
  <thead>
    <tr>
      <th scope="col">code de genre</th>
      <th scope="col">genre</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($liste->result_array() as $listes): ?>
    <tr>
      <th scope="row"><?=$listes['code_genre'] ?></th>
      <td><?=$listes['genre'] ?></td>
      <td>
        <a href="<?php echo site_url('Genre/modifier') ?>/<?=$listes['code_genre'] ?>" class="btn btn-success">Modifier</a>
        <a href="<?php echo site_url('Genre/supprimer') ?>/<?=$listes['code_genre'] ?>" class="btn btn-danger">Supprimer</a>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
</body>
</html>