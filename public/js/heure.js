function mettreAJourHeure() {
  const elementHeure = document.getElementById("heure");
  const elementDate = document.getElementById("date");
  const maintenant = new Date();
  const optionsDate = {
    weekday: "long",
    year: "numeric",
    month: "long",
    day: "numeric",
  };
  const dateFormatee = maintenant.toLocaleDateString("fr-FR", optionsDate);

  const heure = maintenant.getHours().toString().padStart(2, "0");
  const minute = maintenant.getMinutes().toString().padStart(2, "0");
  const nouvelleHeure = `${heure}:${minute}`;

  elementHeure.textContent = nouvelleHeure;
  elementDate.textContent = dateFormatee;
}

mettreAJourHeure();
setInterval(mettreAJourHeure, 10000); // Mise a jour toute les 10 secondes
