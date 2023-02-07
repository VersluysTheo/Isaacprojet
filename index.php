<?php
require 'controllers/controller.php';

// if (isset($_POST['submitlogin'])){
//   if(isset($_POST['username']) && isset($_POST['password']))
//   {
//     loginUser();
//   }
// }


if (isset($_GET['action'])){
  if ($_GET['action'] == 'card'){
    card();
  } 
  elseif ($_GET['action'] == 'cardread'){
    readcard();
} 
  elseif ($_GET['action'] == 'objet'){
    objet();
  }
  elseif ($_GET['action'] == 'randomizer'){
    randomizer();
  }
  elseif ($_GET['action'] == 'ajouter'){
    addobjet();
  }
  elseif ($_GET['action'] == 'updateobjet'){
    updateobjet();
  }
  elseif ($_GET['action'] == 'deleteobjet'){
    supprimerobjet();
  }
  // elseif ($_GET['action'] == 'login'){
  //   login();
  // }
  // elseif ($_GET['action'] == 'logout'){
  //   logoutUser();
  //   home();
  // }
} else {
  home();
}

if (isset($_POST['submit'])){
  if (!empty($_POST['nom']) && !empty($_POST['description']) && !empty($_FILES['objet'])){
    verifimgObjet();
    createObjet();
  }
}
elseif (isset($_POST['upsubmit'])){

// Si tu changes l'image

  if ($_FILES['upobjet'] && $_FILES['upobjet']['error'] == 0 && $_FILES['upobjet']['size'] <= 10000000){
    $file = pathinfo($_FILES['upobjet']['name']);
    $extension = $file['extension'];
    $extensionAccept = ['jpg','jpeg','png','webp'];   
    
    if (in_array($extension,$extensionAccept)){
      updateObjetisaac();
      echo '<div class="alert-success" role="alert">
      <p class="text-center"> Objet Modifié </p>
    </div>';
    }
    else{
      echo '<div class="alert-warning" role="alert">
      <p class="text-center"> Erreur dans la modification de l\'objet </p>
    </div>';
  }
}

// Si jamais l'image ne doit pas être changée
elseif (!empty($_POST['updatenom']) && !empty($_POST['updescription'])){
  updateObjetisaac2();
  echo '<div class="alert-success" role="alert">
  <p class="text-center"> Objet Modifié </p>
  </div>';
}
}

// Delete 
if (isset($_POST['supprimer'])){
  deleteObjet();
}


if (isset($_GET['searchbar'])){
  searchBar();
}

?>