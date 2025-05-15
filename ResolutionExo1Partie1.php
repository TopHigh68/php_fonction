<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Corrigé - Manipulations de chaînes</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#FFF0CF] text-gray-800">
  <div class="max-w-screen-lg mx-auto px-4 py-10">
    <h1 class="text-4xl font-bold text-center mb-10 text-teal-700">Corrigé - Partie 1 : Maîtrise des chaînes de caractères</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

      <!-- Exercice 1 -->
      <div class="bg-white rounded shadow-md p-6">
        <h2 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 1 - Mesure magique</h2>
        <div class="text-sm text-gray-700">
          <form action="ResolutionExo1Partie1.php" method="POST" class="mb-4 space-y-2">
            <label class="block">Veuillez entrer un message</label>
            <input type="text" name="message" class="border px-2 py-1 w-full">
            <button type="submit" class="bg-teal-600 text-white px-3 py-1 rounded">Soumettre</button>
          </form>
          <?php
            function mesurerLongueur($message){ return strlen($message); }
            if(isset($_POST['message'])){
              $message = $_POST['message'];
              echo "La taille de votre mot <strong>&lt;$message&gt;</strong> est : " . mesurerLongueur($message);
            }
          ?>
        </div>
      </div>

      <!-- Exercice 2 -->
      <div class="bg-white rounded shadow-md p-6">
        <h2 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 2- Capitaliser un titre</h2>
        <div class="text-sm text-gray-700">
          <form action="ResolutionExo1Partie1.php" method="POST" class="mb-4 space-y-2">
            <label class="block">Veuillez entrer un titre</label>
            <input type="text" name="titre" class="border px-2 py-1 w-full">
            <button type="submit" class="bg-teal-600 text-white px-3 py-1 rounded">Soumettre</button>
          </form>
          <?php 
            function capitaliserTitre($titre){ return ucwords($titre); }
            if(isset($_POST['titre'])){
              $titre = $_POST['titre'];
              echo "Le mot <strong>$titre</strong> devient : " . capitaliserTitre($titre);
            }
          ?>
        </div>
      </div>

      <!-- Exercice 3 -->
      <div class="bg-white rounded shadow-md p-6">
        <h2 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 3- Rechercher un mot</h2>
        <div class="text-sm text-gray-700">
          <form action="ResolutionExo1Partie1.php" method="POST" class="mb-4 space-y-2">
            <label>Texte :</label>
            <input type="text" name="texte" class="border px-2 py-1 w-full">
            <label>Mot à rechercher :</label>
            <input type="text" name="mot" class="border px-2 py-1 w-full">
            <button type="submit" class="bg-teal-600 text-white px-3 py-1 rounded">Soumettre</button>
          </form>
          <?php 
            function contientMot($texte, $mot){
              return strpos($texte, $mot) !== false ? "True" : "False";
            }
            if(isset($_POST['texte']) && isset($_POST['mot'])){
              echo contientMot($_POST['texte'], $_POST['mot']);
            }
          ?>
        </div>
      </div>

      <!-- Exercice 4 -->
      <div class="bg-white rounded shadow-md p-6">
        <h2 class="text-2xl font-semibold text-blue-600 mb-4">Exercicice 4- Extraire début du texte</h2>
        <div class="text-sm text-gray-700">
          <form action="ResolutionExo1Partie1.php" method="POST" class="mb-4 space-y-2">
            <label>Texte :</label>
            <input type="text" name="texte" class="border px-2 py-1 w-full">
            <label>Nombre de caractères :</label>
            <input type="number" name="nb" class="border px-2 py-1 w-full">
            <button type="submit" class="bg-teal-600 text-white px-3 py-1 rounded">Soumettre</button>
          </form>
          <?php 
            function extraitDebut($texte, $nb){ return substr($texte, 0, $nb); }
            if(isset($_POST['texte']) && isset($_POST['nb'])){
              echo extraitDebut($_POST['texte'], $_POST['nb']);
            }
          ?>
        </div>
      </div>

      <!-- Exercice 5 -->
      <div class="bg-white rounded shadow-md p-6">
        <h2 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 5- Remplacer un mot</h2>
        <div class="text-sm text-gray-700">
          <form action="ResolutionExo1Partie1.php" method="POST" class="mb-4 space-y-2">
            <label>Texte :</label>
            <input type="text" name="texte" class="border px-2 py-1 w-full">
            <label>Nouveau mot :</label>
            <input type="text" name="nouveauNom" class="border px-2 py-1 w-full">
            <button type="submit" class="bg-teal-600 text-white px-3 py-1 rounded">Soumettre</button>
          </form>
          <?php 
            function corrigerNom($texte, $ancienNom, $nouveauNom){
              return str_replace($ancienNom, $nouveauNom, $texte);
            }
            if(isset($_POST['texte']) && isset($_POST['nouveauNom'])){
              $ancienNom = "nom"; // valeur fictive à remplacer
              echo corrigerNom($_POST['texte'], $ancienNom, $_POST['nouveauNom']);
            }
          ?>
        </div>
      </div>

      <!-- Exercice 6 -->
      <div class="bg-white rounded shadow-md p-6">
        <h2 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 6- Inverser une chaîne</h2>
        <div class="text-sm text-gray-700">
          <form action="ResolutionExo1Partie1.php" method="POST" class="mb-4 space-y-2">
            <label>Chaîne :</label>
            <input type="text" name="chaine" class="border px-2 py-1 w-full">
            <button type="submit" class="bg-teal-600 text-white px-3 py-1 rounded">Soumettre</button>
          </form>
          <?php 
            function inverserChaine($chaine){ return strrev($chaine); }
            if(isset($_POST['chaine'])){
              echo "Résultat : " . inverserChaine($_POST['chaine']);
            }
          ?>
        </div>
      </div>
        <!-- Exercice 7 - Compter les mots -->
        <div class="bg-white rounded shadow-md p-6">
        <h2 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 7 - Compter les mots</h2>
        <form action="ResolutionExo1Partie1.php" method="POST" class="space-y-2 mb-4">
            <label class="block">Veuillez entrer un message :</label>
            <input type="text" name="phrase" class="border px-2 py-1 w-full">
            <button type="submit" class="bg-teal-600 text-white px-3 py-1 rounded">Soumettre</button>
        </form>
        <div class="text-sm text-gray-700">
            <?php 
            function compterMots($phrase){ return str_word_count($phrase, 0); }
            if(isset($_POST['phrase'])) {
                $phrase = $_POST['phrase'];
                echo "Le nombre de mots est : ", compterMots($phrase);
            } else {
                echo "Rien n'est encore écrit.";
            }
            ?>
        </div>
        </div>

        <!-- Exercice 8 - Nettoyer une chaîne -->
        <div class="bg-white rounded shadow-md p-6">
        <h2 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 8 - Nettoyer une chaîne</h2>
        <form action="ResolutionExo1Partie1.php" method="POST" class="space-y-2 mb-4">
            <label class="block">Veuillez entrer un message :</label>
            <input type="text" name="chaine" class="border px-2 py-1 w-full">
            <button type="submit" class="bg-teal-600 text-white px-3 py-1 rounded">Soumettre</button>
        </form>
        <div class="text-sm text-gray-700">
            <?php 
            function nettoyerChaine($chaine){ return trim($chaine); }
            if(isset($_POST['chaine'])) {
                echo "Le mot nettoyé est : ", nettoyerChaine($_POST['chaine']);
            } else {
                echo "Rien n'est encore écrit.";
            }
            ?>
        </div>
        </div>

        <!-- Exercice 9 - Découper une liste -->
        <div class="bg-white rounded shadow-md p-6">
        <h2 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 9 - Découper une liste</h2>
        <div class="text-sm text-gray-700">
            <?php 
            function decouperListe($texte){ return explode(", ", $texte); }
            $texte = "pomme, banane, orange";
            echo "<pre>", print_r(decouperListe($texte), true), "</pre>";
            ?>
        </div>
        </div>

        <!-- Exercice 10 - Créer une liste de tags -->
        <div class="bg-white rounded shadow-md p-6">
        <h2 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 10 - Créer une liste de tags</h2>
        <div class="text-sm text-gray-700">
            <?php 
            function creerListeTags($texte){ return implode(", ", $texte); }
            $texte = ['html', 'css', 'php'];
            echo creerListeTags($texte);
            ?>
        </div>
        </div>

        <!-- Exercice 11 - Comparer deux mots -->
        <div class="bg-white rounded shadow-md p-6">
        <h2 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 11 - Comparer deux mots (sans tenir compte de la casse)</h2>
        <div class="text-sm text-gray-700">
            <?php 
            function sontEgaux($a, $b){ return strcasecmp($a, $b) == 0 ? "True" : "False"; }
            $a = "Salut";
            $b = "salut";
            echo "Les mots <strong>$a</strong> et <strong>$b</strong> sont égaux ? : ", sontEgaux($a, $b);
            ?>
        </div>
        </div>

        <!-- Exercice 12 - Afficher verticalement -->
        <div class="bg-white rounded shadow-md p-6">
        <h2 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 12 - Afficher verticalement chaque caractère</h2>
        <div class="text-sm text-gray-700 whitespace-pre-wrap">
            <?php 
            function afficherVertical($chaine){ return str_split($chaine); }
            $chaine = "bonjour";
            foreach(afficherVertical($chaine) as $lettre) {
                echo $lettre . "\n";
            }
            ?>
        </div>
        </div>

        <!-- Exercice 13 - Censurer les chiffres -->
        <div class="bg-white rounded shadow-md p-6">
        <h2 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 13 - Censurer les chiffres</h2>
        <div class="text-sm text-gray-700">
            <?php 
            function censurerChiffres($chaine){ return preg_replace('/\d/', '*', $chaine); }
            $chaine = "pass1234";
            echo censurerChiffres($chaine);
            ?>
        </div>
        </div>

        <!-- Exercice 14 - Vérifier un palindrome -->
        <div class="bg-white rounded shadow-md p-6">
        <h2 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 14 - Vérifier un palindrome</h2>
        <div class="text-sm text-gray-700">
            <?php 
            function estPalindrome($mot){ return $mot == strrev($mot) ? "True" : "False"; }
            $mot = "radar";
            echo "Le mot <strong>$mot</strong> est un palindrome ? : ", estPalindrome($mot);
            ?>
        </div>
        </div>

        <!-- Exercice 15 - Encodage Base64 -->
        <div class="bg-white rounded shadow-md p-6">
        <h2 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 15 - Encoder un message en base64</h2>
        <div class="text-sm text-gray-700">
            <?php 
            function encoderMessage($message){ return base64_encode($message); }
            function decoderMessage($message){ return base64_decode($message); }
            $message = "hello";
            echo "Message : <strong>$message</strong><br>";
            echo "Encodé : ", encoderMessage($message);
            ?>
        </div>

        </div>

</body>
</html>