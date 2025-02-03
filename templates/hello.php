<!doctype html>
<title>Flask Server</title>
<h1> Bienvenue sur la bibliothèque </h1>
<button onclick="afficherMessage()">Cliquez-moi</button>
<p id="message"></p>

<script>
function afficherMessage() {
    document.getElementById("message").innerText = "Bouton cliqué !";
}
</script>

