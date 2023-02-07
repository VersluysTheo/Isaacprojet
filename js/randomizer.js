// Choix aléatoire de Personnages

var listePerso = [
    'Isaac','Magdalene','Caïn','Judas','???','Eve',
    'Samson','Azazel','Lazarus','Eden','The lost','Lilith',
    'Keeper','Apollyon','Forgotten','Bethany', 'Jacob et Esau',
    'T.Isaac','T.Magdalene','T.Caïn','T.Judas','T.???','T.Eve',
    'T.Samson','T.Azazel','T.Lazarus','T.Eden','T.Lost','T.Lilith',
    'T.Keeper','Apollyon','T.Forgotten','T.Bethany', 'T.Jacob'
  ];
  
  // Get a reference to the element that needs an event handler
  // and the element(s) that needs the output
  let btn = document.getElementById("gen-button");
  let output = document.getElementById("uNameInput");  
  let output2 = document.querySelector(".randomName");
  
  // Set up the event handler
  btn.addEventListener("click", generate);
  
  function generate() {
    // The function doesn't need to "return" anything. It just needs
    // to set the value of the text field to the random name.
    let result = listePerso[Math.floor( Math.random() * listePerso.length )];
    output.value = result;   // <-- form fields have a value
    output2.textContent = result; // non-form elements have textContent
  };
  


//  Choix aléatoire de Destination ( Boss de Fin )

  var nameList = [
    'Blue baby','The Lamb','Mother', 'The Beast', 'Méga Satan'
  ];
  
  // Get a reference to the element that needs an event handler
  // and the element(s) that needs the output
  let btn2 = document.getElementById("gen-button2");
  let output3 = document.getElementById("uNameInput2");  
  let output4 = document.querySelector(".randomName2");
  
  // Set up the event handler
  btn2.addEventListener("click", generate2);
  
  function generate2() {
    // The function doesn't need to "return" anything. It just needs
    // to set the value of the text field to the random name.
    let result = nameList[Math.floor( Math.random() * nameList.length )];
    output3.value = result;   // <-- form fields have a value
    output4.textContent = result; // non-form elements have textContent
  };

