<?php
require 'models/model.php'; 

function home(){
    require 'view/indexView.php';
}

function card(){
    require 'view/card.php';
}

function readcard(){
    require 'view/cardread.php';
}

function objet(){
    require 'view/random1.php';
}

function addobjet(){
    require 'view/addObjet.php';
}

function updateobjet(){
    require 'view/updateObjet.php';
}

function randomizer(){
    require 'view/randomizer.php';
}
function supprimerobjet(){
    require 'view/deleteObjet.php';
}

function login(){
    require 'view/login.php';
}

?>