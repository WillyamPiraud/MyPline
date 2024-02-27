document.addEventListener("DOMContentLoaded", function () {
  tinymce.init({
    selector: "textarea.tinymce",
    height: 400, // Vous pouvez ajuster la hauteur selon vos besoins
    plugins: "advlist autolink lists link image charmap print preview anchor",
    toolbar_mode: "floating",
    toolbar:
      "undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link image",
  });
});
