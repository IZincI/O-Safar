let requete = new XMLHttpRequest();
requete.onload = function() {
 //La variable à passer est alors contenue dans l'objet response et l'attribut responseText.
 var variableARecuperee = this.responseText;
};
requete.open(get, script.php, true); //True pour que l'exécution du script continue pendant le chargement, false pour attendre.
requete.send();