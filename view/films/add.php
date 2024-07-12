<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>Ajouter un Film</title>
</head>
<body>
    <?php require_once 'view/partiels/header.php'; ?>
    <h1>Ajouter un Film</h1>
    <form action="index.php?action=add&controller=film" method="post">
        <label for="titre">Titre :</label><br>
        <input type="text" id="titre" name="titre" required><br>

        <label for="heures">Durée (heures) :</label><br>
        <input type="number" id="heures" name="heures" required><br>
        <label for="minutes">Durée (minutes) :</label><br>
        <input type="number" id="minutes" name="minutes" required><br>

        <label for="genre">Genre :</label><br>
        <input type="text" id="genre" name="genre" required><br>

        <label for="realisateur">Réalisateur :</label><br>
        <input type="text" id="realisateur" name="realisateur" required><br>

        <label for="acteurs">Acteurs (séparés par des virgules) :</label><br>
        <input type="text" id="acteurs" name="acteurs" required><br>

        <label for="annee">Année :</label><br>
        <input type="number" id="annee" name="annee" required><br>

        <label for="langue">Langue :</label><br>
        <select id="langue" name="langue" required>
            <option value="VF">VF</option>
            <option value="EN">EN</option>
        </select><br>

        <label for="description">Description :</label><br>
        <textarea id="description" name="description" required></textarea><br>

        <label for="horaires">Horaires (format: Jour-Heure-Minute, séparés par des virgules) :</label><br>
        <input type="text" id="horaires" name="horaires" required><br>

        <label for="notes">Notes (auteur-valeur-base, séparées par des virgules) :</label><br>
        <textarea id="notes" name="notes"></textarea><br>

        <input type="submit" value="Ajouter">
    </form>
    <?php include 'view/partiels/footer.php'; ?>
</body>
</html>
