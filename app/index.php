<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Formulaire Professionnel</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container">
<h1>Inscription Client</h1>


<form id="form">
<input type="text" name="nom" placeholder="Nom complet" required>
<input type="email" name="email" placeholder="Adresse email" required>
<input type="text" name="telephone" placeholder="Téléphone" required>
<button type="submit">Enregistrer</button>
<div id="message"></div>
</form>


<table>
<thead>
<tr>
<th>Nom</th>
<th>Email</th>
<th>Téléphone</th>
<th>Date</th>
</tr>
</thead>
<tbody id="data"></tbody>
</table>
</div>
<script src="assets/js/script.js"></script>
</body>
</html>