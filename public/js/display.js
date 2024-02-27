function toggleDisplay(id) {
  var element = document.getElementById(id);
  if (element) {
    if (element.style.display === "none") {
      element.style.display = "block";
    } else {
      element.style.display = "none";
    }
  } else {
    console.error("L'élément avec l'ID " + id + " est introuvable.");
  }
}
