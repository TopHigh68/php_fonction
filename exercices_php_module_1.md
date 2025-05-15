#  Exercices PHP : Chaînes de caractères & Tableaux

##  Partie 1 : Maîtrise des chaînes de caractères

### Exercice 1 - Mesure magique
**Contexte :** Tu es développeur dans une entreprise de messagerie. Ton premier défi est de vérifier la longueur des messages pour ne pas dépasser la limite autorisée.
**Instruction :** Écris une fonction `mesurerLongueur($message)` qui retourne le nombre de caractères dans `$message`.
**Cas de test :**
- Entrée : `Bonjour` → Résultat attendu : `7`
- Entrée : `PHP est cool` → Résultat attendu : `12`

### Exercice 2 -  Capitalisation royale
**Contexte :** Un imprimeur veut transformer les titres d’articles pour qu’ils soient élégants.
**Instruction :** Écris une fonction `capitaliserTitre($titre)` qui met en majuscule la première lettre de chaque mot.
**Cas de test :**
- Entrée : `le roi des langages` → Résultat attendu : `Le Roi Des Langages`

### Exercice 3 - Détective de mot
**Contexte :** Tu dois vérifier si un mot-clé est présent dans une phrase pour une alerte de sécurité.
**Instruction :** Écris une fonction `contientMot($texte, $mot)` qui retourne `true` si `$mot` est trouvé dans `$texte`.
**Cas de test :**
- Entrée : `['le serveur est en feu', 'serveur']` → Résultat attendu : `True`
- Entrée : `['tout va bien', 'erreur']` → Résultat attendu : `False`

### Exercice 4 - Extrait express
**Contexte :** Un générateur d’aperçus d’article a besoin de tronquer le texte.
**Instruction :** Écris une fonction `extraitDebut($texte, $nb)` qui retourne les `$nb` premiers caractères.
**Cas de test :**
- Entrée : `['Bonjour tout le monde', 7]` → Résultat attendu : `Bonjour`

### Exercice 5 -  Remplacement instantané
**Contexte :** Tu aides une maison d'édition à corriger tous les noms d’un personnage dans leurs fichiers.
**Instruction :** Écris une fonction `corrigerNom($texte, $ancienNom, $nouveauNom)` qui remplace toutes les occurrences.
**Cas de test :**
- Entrée : `['Léa est partie. Léa revient.', 'Léa', 'Emma']` → Résultat attendu : `Emma est partie. Emma revient.`

### Exercice 6 -  Inversion mystique
**Contexte :** Un sortilège a inversé les mots dans un livre. Il faut les remettre à l’endroit.
**Instruction :** Écris une fonction `inverserChaine($chaine)` qui retourne la chaîne inversée.
**Cas de test :**
- Entrée : `bonjour` → Résultat attendu : `ruojnob`

### Exercice 7 -  Compte les mots
**Contexte :** Un rédacteur veut savoir combien de mots contient chaque article.
**Instruction :** Écris une fonction `compterMots($phrase)` qui retourne le nombre de mots.
**Cas de test :**
- Entrée : `Ceci est une phrase` → Résultat attendu : `4`

### Exercice 8 -  Nettoyage express
**Contexte :** Un utilisateur a copié une phrase avec des espaces en trop.
**Instruction :** Écris une fonction `nettoyerChaine($chaine)` qui supprime les espaces au début et à la fin.
**Cas de test :**
- Entrée : `  salut ` → Résultat attendu : `salut`

### Exercice 9 -  Coupeur de texte
**Contexte :** Tu dois découper une liste de mots séparés par des virgules.
**Instruction :** Écris une fonction `decouperListe($texte)` qui retourne un tableau des mots séparés.
**Cas de test :**
- Entrée : `pomme,banane,kiwi` → Résultat attendu : `['pomme', 'banane', 'kiwi']`

### Exercice 10 -  Créateur de tag
**Contexte :** Tu veux générer une chaîne à partir d’un tableau de tags.
**Instruction :** Écris une fonction `creerListeTags($tags)` qui retourne une chaîne séparée par des virgules.
**Cas de test :**
- Entrée : `['html', 'css', 'php']` → Résultat attendu : `html,css,php`

### Exercice 11 -  Comparaison amicale
**Contexte :** Deux noms doivent être comparés sans tenir compte des majuscules.
**Instruction :** Écris une fonction `sontEgaux($a, $b)` qui retourne `true` si les chaînes sont équivalentes sans tenir compte de la casse.
**Cas de test :**
- Entrée : `['Salut', 'salut']` → Résultat attendu : `True`

### Exercice 12 - Affichage vertical
**Contexte :** Chaque caractère doit être affiché sur une ligne séparée pour un effet stylé.
**Instruction :** Écris une fonction `afficherVertical($chaine)` qui retourne un tableau avec chaque caractère.
**Cas de test :**
- Entrée : `ok` → Résultat attendu : `['o', 'k']`

### Exercice 13 -  Censure numérique
**Contexte :** Tu dois masquer tous les chiffres d'une chaîne confidentielle.
**Instruction :** Écris une fonction `censurerChiffres($chaine)` qui remplace tous les chiffres par `*`.
**Cas de test :**
- Entrée : `pass1234` → Résultat attendu : `pass****`

### Exercice 14 -  Palindrome ou pas ?
**Contexte :** Un mot est magique s’il se lit dans les deux sens.
**Instruction :** Écris une fonction `estPalindrome($mot)` qui retourne `true` si c’est un palindrome.
**Cas de test :**
- Entrée : `radar` → Résultat attendu : `True`

### Exercice 15 -  Encodage secret
**Contexte :** Tu dois encoder un message en base64 avant de l’envoyer.
**Instruction :** Écris une fonction `encoderMessage($message)` et `decoderMessage($message)`.
**Cas de test :**
- Entrée : `hello` → Résultat attendu : `aGVsbG8=`

##  Partie 2 : Dompter les tableaux

### Exercice 1 -  Présenter la classe
**Contexte :** Tu as une liste d'élèves et tu veux les saluer un par un.
**Instruction :** Écris une fonction `saluerEleves($eleves)` qui affiche 'Bonjour, NOM' pour chaque nom du tableau.
**Cas de test :**
- Entrée : `['Alice', 'Bob']` → Résultat attendu : `['Bonjour, Alice', 'Bonjour, Bob']`

### Exercice 2 - Inscription au club
**Contexte :** Un nouveau membre arrive, il faut l’ajouter à la liste.
**Instruction :** Écris une fonction `ajouterMembre($liste, $membre)` qui retourne le tableau avec le membre ajouté.
**Cas de test :**
- Entrée : `[['Max', 'Nina'], 'Leo']` → Résultat attendu : `['Max', 'Nina', 'Leo']`

### Exercice 3 -  Supprimer le premier
**Contexte :** Tu veux retirer la première personne d’une file d’attente.
**Instruction :** Écris une fonction `retirerPremier($file)` qui enlève le premier élément.
**Cas de test :**
- Entrée : `['Tom', 'Jerry', 'Spike']` → Résultat attendu : `['Jerry', 'Spike']`

### Exercice 4 - Tri rapide
**Contexte :** Tu dois trier une liste de scores.
**Instruction :** Écris une fonction `trierScores($scores)` qui trie les valeurs dans l’ordre croissant.
**Cas de test :**
- Entrée : `[9, 3, 6]` → Résultat attendu : `[3, 6, 9]`

### Exercice 5 -  Tri des noms
**Contexte :** Tu veux afficher les utilisateurs classés par nom (clé).
**Instruction :** Écris une fonction `trierParNom($utilisateurs)` qui trie par clé.
**Cas de test :**
- Entrée : `{'Jean': 20, 'Alice': 25}` → Résultat attendu : `{'Alice': 25, 'Jean': 20}`

### Exercice 6 - Présent ou pas ?
**Contexte :** Vérifie si un prénom est inscrit.
**Instruction :** Écris une fonction `estInscrit($liste, $prenom)` qui retourne `true` ou `false`.
**Cas de test :**
- Entrée : `[['Anna', 'Paul'], 'Anna']` → Résultat attendu : `True`

### Exercice 7 -  Recherche de valeur
**Contexte :** Trouve la position d’un nom dans une liste.
**Instruction :** Écris une fonction `trouverPosition($liste, $nom)` qui retourne l’index de la valeur.
**Cas de test :**
- Entrée : `[['Max', 'Nina', 'Léo'], 'Nina']` → Résultat attendu : `1`

### Exercice 8 - Fusion de listes
**Contexte :** Deux groupes d’élèves sont à réunir.
**Instruction :** Écris une fonction `fusionnerGroupes($groupe1, $groupe2)`.
**Cas de test :**
- Entrée : `[['A', 'B'], ['C', 'D']]` → Résultat attendu : `['A', 'B', 'C', 'D']`

### Exercice 9 - Doublons interdits
**Contexte :** Supprime les noms en double d’une liste.
**Instruction :** Écris une fonction `supprimerDoublons($liste)`.
**Cas de test :**
- Entrée : `['Tom', 'Jerry', 'Tom']` → Résultat attendu : `['Tom', 'Jerry']`

### Exercice 10 - Valeurs communes
**Contexte :** Trouve les noms présents dans deux listes.
**Instruction :** Écris une fonction `intersection($a, $b)`.
**Cas de test :**
- Entrée : `[['a', 'b'], ['b', 'c']]` → Résultat attendu : `['b']`

### Exercice 11 -  Extraire les noms
**Contexte :** Tu veux afficher uniquement les noms d’un tableau associatif.
**Instruction :** Écris une fonction `extraireNoms($assoc)`.
**Cas de test :**
- Entrée : `{'nom': 'Pierre', 'age': 30}` → Résultat attendu : `['Pierre', 30]`

### Exercice 12 - Tableau multidimensionnel
**Contexte :** Tu as une base d’élèves avec leur nom et âge.
**Instruction :** Écris une fonction `afficherNomPremierEleve($eleves)`.
**Cas de test :**
- Entrée : `[[{'nom': 'Ali', 'age': 12}, {'nom': 'Zara', 'age': 11}]]` → Résultat attendu : `Ali`
