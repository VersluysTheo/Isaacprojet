<?php ob_start(); ?>

<div class="container mt-4">
    <input id="uNameInput" class="choosename" type="text" maxlength="20" minlength="4" placeholder="Personnage" required>
    <input id="gen-button" class="modern btn btn-outline-info" type="button" value="Personnage Aléatoire">
    <br>
    <p class="text-light"> Vous allez jouer: <span class="randomName"></span></p>
    <div class="col-6">
    <button id="generate-button" class="btn btn-outline-info">Generer une Seed</button>
    <p class="text-light">Il y a peu de chance que la seed fonctionne :D</p>
    <p id="seed-output" class="text-light"></p>

    <script>
      function randomSeed(){
        var seed = "";
        var letterandnumber = "ABCDEFGHJKLMNPQRSTVWXYZ012346789";
        for (var i = 0; i < 8; i++) {
          seed += letterandnumber.charAt(Math.floor(Math.random() * letterandnumber.length));
        }
        return seed;
      }

      // Get references to the button and output element
      var generateButton = document.getElementById("generate-button");
      var seedOutput = document.getElementById("seed-output");

      // Attach a click event listener to the button
      generateButton.addEventListener("click", function() {
        // When the button is clicked, generate a new seed and update the output element
        var newSeed = randomSeed();
        seedOutput.textContent = newSeed;
      });
    </script>
    </div>
</div>

<div class="container mt-4">
    <input id="uNameInput2" class="choosename" type="text" maxlength="20" minlength="4" placeholder="Personnage" required>
    <input id="gen-button2" class="modern btn btn-outline-info" type="button" value="Boss Aléatoire">
    <br>
    <p class="text-light"> Votre objectif: <span class="randomName2"></span></p>
    </div>

    <div class="container mb-4">
        <div class="row col-5">
        <div class="card" style="width: 18rem;">
  <div class="card-header px-3">Liste des Personnages possibles :</div>
  <ul class="list-group list-group-light list-group-small mb-3">
    <li class="list-group-item px-3">Isaac (et sa version Tainted)</li>
    <li class="list-group-item px-3">Magdalène (et sa version Tainted)</li>
    <li class="list-group-item px-3">Caïn (et sa version Tainted)</li>
    <li class="list-group-item px-3">Judas (et sa version Tainted)</li>
    <li class="list-group-item px-3">??? (et sa version Tainted)</li>
    <li class="list-group-item px-3">Eve (et sa version Tainted)</li>
    <li class="list-group-item px-3">Samson (et sa version Tainted)</li>
    <li class="list-group-item px-3">Azazel (et sa version Tainted)</li>
    <li class="list-group-item px-3">Lazarus (et sa version Tainted)</li>
    <li class="list-group-item px-3">Eden (et sa version Tainted)</li>
    <li class="list-group-item px-3">The Lost (et sa version Tainted)</li>
    <li class="list-group-item px-3">Lilith (et sa version Tainted)</li>
    <li class="list-group-item px-3">Keeper (et sa version Tainted)</li>
    <li class="list-group-item px-3">Apollyon (et sa version Tainted)</li>
    <li class="list-group-item px-3">Forgotten (et sa version Tainted)</li>
    <li class="list-group-item px-3">Bethany (et sa version Tainted)</li>
    <li class="list-group-item px-3">Jacob et Esau (et sa version Tainted)</li>
  </ul>
</div>
    </div>
        <div class="row col-5">
        <div class="card mt-4" style="width: 18rem;">
  <div class="card-header px-3">Liste des Destinations possibles :</div>
  <ul class="list-group list-group-light list-group-small mb-3">
    <li class="list-group-item px-3">Blue baby</li>
    <li class="list-group-item px-3">The Lamb</li>
    <li class="list-group-item px-3">Mother</li>
    <li class="list-group-item px-3">The Beast</li>
    <li class="list-group-item px-3">Méga Satan</li>
  </ul>
        </div>
    </div>
</div>






<?php $content = ob_get_clean(); ?>
<?php require 'view/template.php'; ?>