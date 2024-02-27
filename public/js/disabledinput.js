document.addEventListener("DOMContentLoaded", function () {
  var frequencySelect = document.getElementById("routine_travail_frequence"); // Remplacez 'your_form_frequency' par l'id réel du champ select
  var idtosuppInput = document.getElementById("routine_travail_nombre_action");

  // Ajoutez un écouteur d'événements pour détecter les changements dans le menu déroulant
  frequencySelect.addEventListener("change", function () {
    // Désactivez l'input si l'option 'Mensuel' est sélectionnée, sinon, activez-le
    idtosuppInput.disabled = frequencySelect.value != "quotidien";
  });

  // Au chargement de la page, vérifiez l'état initial du champ select et désactivez l'input si nécessaire
  idtosuppInput.disabled = frequencySelect.value === "mensuel";
});
