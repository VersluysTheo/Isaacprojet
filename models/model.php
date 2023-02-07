<?php


function dbConnect(){

    try{
        $db = new PDO(
            'mysql:host=localhost;dbname=isaac;charset=UTF8',
            'Nyugga',
            'IU65+-4zFE'
        );
        return $db;
    }
    catch(Exception $e){
        die ("Error: " . $e->getMessage());   
    }
}

//READ

function readPersonnage(){
    $db = dbConnect();
    $sql = 'SELECT * FROM isaac' ;
    $prepare = $db->prepare($sql);
    $prepare->execute();
    $list = $prepare->fetchAll();
    return $list;
}

function readPersonnageid(){
    $db = dbConnect();
    $sql = 'SELECT * FROM isaac WHERE id = :id';
    $prepare = $db ->prepare($sql);
    $prepare ->execute(
        [
            'id' => $_GET['read']
        ]
    );
    $list = $prepare -> fetch();
    return $list;
}



function readObjet(){
    $db = dbConnect();
    $sql = 'SELECT * FROM objet' ;
    $prepare = $db->prepare($sql);
    $prepare->execute();
    $list = $prepare->fetchAll();
    return $list;
}

//CREATE 

function createObjet(){
    $db = dbConnect();
    $addobjet = 'INSERT INTO `objet`(`nom`, `description`, `image`) VALUES (:nom, :description, :image)';
    $addedobjet = $db->prepare($addobjet);
    $addedobjet->execute([
        'nom' => $_POST['nom'],
        'description' => $_POST['description'],
        'image' => 'public/image/Objet/' . $_FILES ['objet']["name"]

    ]);
}

function verifimgObjet(){
    $db = dbConnect();
    $target_dir = "public/image/Objet/";
    $target_file = $target_dir . basename($_FILES["objet"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Vérification si le fichier est une image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["objet"]["tmp_name"]);
    if($check !== false) {
      $uploadOk = 1;
    } else {
      echo '<div class="alert alert-warning" role="alert">
      <p class="text-center"> Le fichier n\'est pas une image. </p>
    </div>';
      $uploadOk = 0;
    }
  
  
  // vérification si le fichier existe déjà
  if (file_exists($target_file)) {
    echo '<div class="alert alert-warning" role="alert">
    <p class="text-center"> Le fichier existe déjà. </p>
  </div>';
    $uploadOk = 0;
  }
  
  // Vérification de la taille du fichier
  if ($_FILES["objet"]["size"] > 50000000000) {
    echo '<div class="alert alert-warning" role="alert">
    <p class="text-center"> La taille du fichier est trop importante. </p>
  </div>';
    $uploadOk = 0;
  }
  
  // Autorisation seulement de certain format de fichier
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "webp" ) {
    echo '<div class="alert alert-warning" role="alert">
    <p class="text-center"> Seulement les fichiers JPG, JPEG, PNG ou Webp sont autorisés. </p>
  </div>';
    $uploadOk = 0;
  }
  
  // Vérification si $upload n'est pas à 0 (envoie message d'erreur)
  if ($uploadOk == 0) {
    echo '<div class="alert alert-danger" role="alert">
    <p class="text-center"> Le fichier n\'a pas été envoyé. </p>
  </div>';
  // Si tout est ok, alors le fichier est uploadé dans le bon dossier
  } else {
    if (move_uploaded_file($_FILES["objet"]["tmp_name"], $target_file)) {
      // echo print_r($target_file);
      echo '<div class="alert alert-success" role="alert">
      <p class="text-center"> Le fichier a bien été envoyé </p>
    </div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">
      <p class="text-center"> Erreur lors de l\'envoi du fichier </p>
    </div>';
    }
  }
  }
}


//UPDATE

// Avec modification d'image

function updateObjetisaac(){
  $db = dbConnect();
  $filename = 'public/image/Objet/' . basename($_FILES['upobjet']['name']);
  move_uploaded_file($_FILES ['upobjet']['tmp_name'],$filename);
  $sql = "UPDATE objet SET `nom` = :nom, `description` = :description, `image` = :image WHERE id = :id";
  $prepare = $db->prepare($sql);
  $prepare->execute([
    'nom' => $_POST['updatenom'],
    'description' => $_POST['updescription'],
    'image' => 'public/image/Objet/' . $_FILES ['upobjet']['name'],
    'id' => $_POST['id']
  ]);
}

// Sans modification d'image

function updateObjetisaac2(){
  $db = dbConnect();
  $sql = "UPDATE objet SET `nom` = :nom, `description` = :description WHERE id = :id";
  $prepare = $db->prepare($sql);
  $prepare->execute([
    'nom' => $_POST['updatenom'],
    'description' => $_POST['updescription'],
    'id' => $_POST['id']
  ]);
}


// Delete

function deleteObjet(){
  $db = dbConnect();
  $deleteobjet = 'DELETE FROM `objet` WHERE id = :id';
  $deletedobjet = $db->prepare($deleteobjet);
  $deletedobjet->execute([
    'id' => $_POST['deleteid']
  ]);
  // unlink('public/image/Objet/' . $_FILES['name'],) ne fonctionne pas ;
  echo '<div class="alert alert-success" role="alert">
  <p class="text-center"> Votre objet a bien été supprimé </p>
</div>';
}


// function loginUser(){
//   $db = dbConnect();
//    $sql = "SELECT * FROM `login` WHERE `username` = :username and `password` = :password";
//             $prepare=$db->prepare($sql);
//             $prepare->execute([
//                 'username' => $_POST['username'],
//                 'password' => $_POST['password']
//             ]);

//             $count = $prepare->rowCount();
//             if($count > 0) // nom d'utilisateur et mot de passe correctes
//             {
//               $_SESSION['username'] = $_POST['username'];
//             ?>
            <!-- <section class="mt-5 pt-5">
              <div class="alert alert-success text-center mt-5 pt-5" role="alert">
               Bonjour <?php echo $_SESSION['username'];?></div>
             </section> -->
             <?php
//            }
//            else
//             { ?>
<!--          <div class="alert alert-danger text-center mt-5 pt-5" role="alert">
            Le mot de passe ou l'utilisateur ne correspond pas !
           </div> -->
             <?php 
//             }
//           }
  // function logoutUser(){
  //   session_destroy();
  // }



function searchBar(){
  $db = dbConnect();
  $sql = "SELECT * FROM `objet` WHERE nom LIKE :nom";
  $search = $db->prepare($sql);
  $search->execute([
    'nom' => '%' . $_GET['searchbar'] . '%'
  ]);
  $search2 = $search->fetchAll();
  foreach ($search2 as $valeur){ ?>

<div class="card mb-3 mt-3 ml-3" style="max-width: 900px;">
  <div class="row g-0 justify-content-center">
    <div class="col-md-4" >
      <img
        src="<?php echo $valeur['image']; ?>"
        alt=""
        class="rounded-start"
        height="150px";
      />
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h3 class="card-title">Nom : <?php echo $valeur['nom']; ?></h5>
        <p class="card-text">
        Description : <?php echo $valeur['description']; ?>
        </p>
        <a href="index.php?action=updateobjet&update=<?php echo htmlspecialchars( $valeur ['id']); ?>"><button type="button" class="btn btn-warning">Modifier</button></a>
        <a href="index.php?action=deleteobjet&delete=<?php echo ($valeur['id']); ?>"><button type="button" class="btn btn-danger">Supprimer</button></a>
      </div>
    </div>
  </div>
</div>

  <?php }
}
?>