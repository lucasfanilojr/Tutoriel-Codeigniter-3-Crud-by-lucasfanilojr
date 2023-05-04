<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'accueil';
$route['ajouter/etudiant'] = 'Etudiant/ajouter';
$route['Genre/supprimer/(:id)'] = 'Genre/supprimer/$1';
$route['Etudiant/supprimer/(:id)'] = 'Etudiant/supprimer/$1';
$route['Genre/modifier/(:id)'] = 'Genre/modifier/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
