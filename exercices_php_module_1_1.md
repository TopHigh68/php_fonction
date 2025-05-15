# Exercices PHP:  Calculs, Comparaisons, Boucles & Logique

### Exercice 1 -  Générateur de code PIN unique
**Contexte :** Tu crées une fonction de génération de code PIN à 4 chiffres. Tous les chiffres doivent être différents.
**Instruction :** Écris une fonction `genererCodePin()` qui retourne un tableau de 4 chiffres uniques entre 0 et 9.
**Cas de test :**
- Entrée : `None` → Résultat attendu : `Tableau de 4 chiffres uniques`

### Exercice 2 - Suite de Fibonacci
**Contexte :** Tu développes une API pour un jeu mathématique. Elle doit afficher les `n` premiers nombres de Fibonacci.
**Instruction :** Écris une fonction `fibonacci($n)` qui retourne les `n` premiers nombres de la suite.
**Cas de test :**
- Entrée : `7` → Résultat attendu : `[0, 1, 1, 2, 3, 5, 8]`

### Exercice 3 -  Trouver le plus long mot
**Contexte :** Dans une phrase, tu dois détecter le mot ayant le plus de caractères.
**Instruction :** Écris une fonction `plusLongMot($phrase)` qui retourne ce mot.
**Cas de test :**
- Entrée : `Le développeur aime PHP et JavaScript` → Résultat attendu : `JavaScript`

### Exercice 4 - Liste des nombres premiers
**Contexte :** Un professeur souhaite lister tous les nombres premiers inférieurs à `$n`.
**Instruction :** Écris une fonction `nombresPremiers($n)`.
**Cas de test :**
- Entrée : `10` → Résultat attendu : `[2, 3, 5, 7]`

### Exercice 5 -  Jeu de devinette automatique
**Contexte :** Tu dois deviner un nombre entre 1 et 100, choisi aléatoirement. Simule une tentative automatique (dichotomie).
**Instruction :** Écris une fonction `devinerNombre($cible)` qui retourne le nombre de tentatives pour trouver `$cible`.
**Cas de test :**
- Entrée : `73` → Résultat attendu : `Nombre de tentatives <= 7`

### Exercice 6 -  Moyenne pondérée
**Contexte :** Pour calculer les résultats d'un élève, tu dois appliquer des coefficients à chaque note.
**Instruction :** Écris une fonction `moyennePonderee($notes, $coeffs)`.
**Cas de test :**
- Entrée : `[[12, 14, 10], [2, 3, 1]]` → Résultat attendu : `12.5`

### Exercice 7 -  Compression de données (run-length encoding)
**Contexte :** Tu dois implémenter une fonction simple de compression : remplacer les répétitions par le caractère et le nombre de répétitions.
**Instruction :** Écris une fonction `compresser($texte)`.
**Cas de test :**
- Entrée : `aaabbc` → Résultat attendu : `a3b2c1`

### Exercice 8 -  Générer une grille de jeu
**Contexte :** Tu dois créer une grille carrée de taille `n`, remplie de symboles `#`.
**Instruction :** Écris une fonction `genererGrille($n)` qui retourne un tableau à 2 dimensions.
**Cas de test :**
- Entrée : `2` → Résultat attendu : `[['#', '#'], ['#', '#']]`

### Exercice 9 -  Valeurs montantes
**Contexte :** Tu dois vérifier si les valeurs d’un tableau sont strictement croissantes.
**Instruction :** Écris une fonction `estCroissant($tab)`.
**Cas de test :**
- Entrée : `[1, 2, 3]` → Résultat attendu : `True`
- Entrée : `[3, 2, 1]` → Résultat attendu : `False`

### Exercice 10 -  Triangle valide ?
**Contexte :** Vérifie si trois longueurs peuvent former un triangle (somme des deux côtés > au troisième).
**Instruction :** Écris une fonction `estTriangleValide($a, $b, $c)`.
**Cas de test :**
- Entrée : `[3, 4, 5]` → Résultat attendu : `True`

### Exercice 11 -  Médiane d’un tableau
**Contexte :** Tu veux calculer la médiane d’une liste de notes.
**Instruction :** Écris une fonction `mediane($tab)`.
**Cas de test :**
- Entrée : `[10, 20, 15]` → Résultat attendu : `15`

### Exercice 12 -  Statistiques de dés
**Contexte :** Tu lances un dé `n` fois et veux compter les apparitions de chaque face.
**Instruction :** Écris une fonction `statistiquesDes($n)`.
**Cas de test :**
- Entrée : `10` → Résultat attendu : `Tableau des fréquences des faces 1 à 6`

### Exercice 13 -  Anagrammes ?
**Contexte :** Vérifie si deux mots sont des anagrammes (mêmes lettres, ordre différent).
**Instruction :** Écris une fonction `sontAnagrammes($a, $b)`.
**Cas de test :**
- Entrée : `['gare', 'rage']` → Résultat attendu : `True`

### Exercice 14 -  Table de multiplication croisée
**Contexte :** Tu veux générer une matrice de multiplication croisée de taille `n`.
**Instruction :** Écris une fonction `tableCroisee($n)`.
**Cas de test :**
- Entrée : `3` → Résultat attendu : `[[1, 2, 3], [2, 4, 6], [3, 6, 9]]`

### Exercice 15 -  Rotation à droite
**Contexte :** Tourne un tableau vers la droite d’une position.
**Instruction :** Écris une fonction `rotationDroite($tab)`.
**Cas de test :**
- Entrée : `[1, 2, 3]` → Résultat attendu : `[3, 1, 2]`

### Exercice 16 -  Trouver les indices pairs d’un tableau
**Contexte :** Tu veux extraire uniquement les éléments aux indices pairs dans un tableau.
**Instruction :** Écris une fonction `indicesPairs($tab)`.
**Cas de test :**
- Entrée : `[10, 20, 30, 40, 50]` → Résultat attendu : `[10, 30, 50]`

### Exercice 17 -  Détection de doublons
**Contexte :** Dans une liste de produits, tu dois détecter s'il y a des doublons.
**Instruction :** Écris une fonction `aDesDoublons($liste)` qui retourne `true` si des doublons existent.
**Cas de test :**
- Entrée : `['a', 'b', 'a']` → Résultat attendu : `True`

### Exercice 18 -  Nombres parfaits
**Contexte :** Un nombre est parfait s'il est égal à la somme de ses diviseurs propres.
**Instruction :** Écris une fonction `estParfait($n)`.
**Cas de test :**
- Entrée : `6` → Résultat attendu : `True`
- Entrée : `10` → Résultat attendu : `False`

### Exercice 19 -  Palindrome numérique
**Contexte :** Tu veux vérifier si un entier est un palindrome (ex: 121).
**Instruction :** Écris une fonction `estPalindromeNombre($n)`.
**Cas de test :**
- Entrée : `121` → Résultat attendu : `True`
- Entrée : `123` → Résultat attendu : `False`

### Exercice 20 -  Nombres narcissiques
**Contexte :** Un nombre narcissique est égal à la somme de ses chiffres élevés à la puissance du nombre de chiffres.
**Instruction :** Écris une fonction `estNarcissique($n)`.
**Cas de test :**
- Entrée : `153` → Résultat attendu : `True`
- Entrée : `370` → Résultat attendu : `True`

### Exercice 21 -  Triangle de Pascal
**Contexte :** Tu veux afficher les `n` premières lignes du triangle de Pascal.
**Instruction :** Écris une fonction `trianglePascal($n)`.
**Cas de test :**
- Entrée : `3` → Résultat attendu : `[[1], [1, 1], [1, 2, 1]]`

### Exercice 22 -  Répartition en groupes
**Contexte :** Tu veux répartir des élèves en groupes de 3.
**Instruction :** Écris une fonction `creerGroupes($eleves)`.
**Cas de test :**
- Entrée : `['Ali', 'Zoe', 'Tom', 'Eva']` → Résultat attendu : `[['Ali', 'Zoe', 'Tom'], ['Eva']]`

### Exercice 23 -  Générateur de jetons aléatoires
**Contexte :** Tu veux générer un jeton alphanumérique de 8 caractères pour chaque utilisateur.
**Instruction :** Écris une fonction `genererJeton()`.
**Cas de test :**
- Entrée : `None` → Résultat attendu : `Chaîne de 8 caractères alphanumériques`

### Exercice 24 -  Séparer positifs et négatifs
**Contexte :** Sépare un tableau en deux : positifs et négatifs.
**Instruction :** Écris une fonction `separerValeurs($tab)`.
**Cas de test :**
- Entrée : `[1, -1, 3, -2]` → Résultat attendu : `[[1, 3], [-1, -2]]`

### Exercice 25 -  Mot le plus fréquent
**Contexte :** Trouve le mot le plus répété dans une phrase.
**Instruction :** Écris une fonction `motPlusFrequent($texte)`.
**Cas de test :**
- Entrée : `php est génial et php est populaire` → Résultat attendu : `php`

### Exercice 26 -  Créer une pyramide de nombres
**Contexte :** Tu veux afficher une pyramide de 1 à `n` lignes.
**Instruction :** Écris une fonction `pyramide($n)`.
**Cas de test :**
- Entrée : `3` → Résultat attendu : `[[1], [2, 3], [4, 5, 6]]`

### Exercice 27 -  Conversion binaire
**Contexte :** Convertis un entier en binaire (chaîne de 0 et 1).
**Instruction :** Écris une fonction `enBinaire($n)`.
**Cas de test :**
- Entrée : `5` → Résultat attendu : `101`

### Exercice 28 -  Produit des chiffres
**Contexte :** Tu veux multiplier tous les chiffres d’un nombre.
**Instruction :** Écris une fonction `produitChiffres($n)`.
**Cas de test :**
- Entrée : `123` → Résultat attendu : `6`

### Exercice 29 -  Mélanger un tableau
**Contexte :** Mélange aléatoirement les éléments d’un tableau (comme pour un tirage au sort).
**Instruction :** Écris une fonction `melanger($tab)`.
**Cas de test :**
- Entrée : `[1, 2, 3]` → Résultat attendu : `Ordre aléatoire`

### Exercice 30 -  Index du plus grand élément
**Contexte :** Tu dois trouver l'index du plus grand nombre dans un tableau.
**Instruction :** Écris une fonction `indexMax($tab)`.
**Cas de test :**
- Entrée : `[4, 9, 2]` → Résultat attendu : `1`
