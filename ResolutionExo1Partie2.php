<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corrigé - Exercices supplémentaires</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#FFF0CF] text-gray-800">
    <div class="max-w-screen-lg mx-auto px-4 py-10">
        <h1 class="text-4xl font-bold text-center mb-10 text-teal-700">Corrigé - Partie 2 : Dompter les tableaux</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        
            <!-- Exercice 1 -->
            <div class="bg-white rounded shadow-md p-6">
                <h2 class="text-2xl font-semibold text-blue-600 mb-4">Exercice1- Présenter la classe</h2>
                <div class="text-sm text-gray-700">
                    <?php 
                        function saluerEleves($eleves){
                            $tab = [];
                            foreach($eleves as $eleve){
                                array_push($tab, ["Bonjour",$eleve]);
                            }
                            return $tab;
                        }
                        $eleves = ['Alice', 'Bob'];
                        echo "<pre>", print_r(saluerEleves($eleves), true), "</pre>";
                    ?>
                </div>
            </div>

            <!-- Exercice 2 -->
            <div class="bg-white rounded shadow-md p-6">
                <h2 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 2- Inscription au club</h2>
                <div class="text-sm text-gray-700">
                    <?php 
                        function ajouterMembre($liste, $membre){
                            array_push($liste, $membre);
                            return $liste;
                        }
                        $liste = ['Max', 'Nina'];
                        $membre = 'Leo';
                        echo "<pre>", var_dump(ajouterMembre($liste,$membre)), "</pre>";
                    ?>
                </div>
            </div>

            <!-- Exercice 3 -->

            <div class="bg-white rounded shadow-md p-6">
                <h2 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 3 - Supprimer le premier</h2>
                <div class="text-sm text-gray-700">
                    <?php 
                        function retirerPremier($files){
                            array_shift($files);
                            return $files;
                        }
                        $files = ['Tom', 'Jerry', 'Spike'];
                        echo "<pre>", var_dump(retirerPremier($files)), "</pre>";
                    ?>
                </div>
            </div>

            <!-- Exercice 4 -->
            <div class="bg-white rounded shadow-md p-6">
                <h2 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 4 - Tri rapide</h2>
                <div class="text-sm text-gray-700">
                    <?php 
                        function trierScores($scores){
                            sort($scores);
                            return $scores;
                        }
                        $scores = [9, 3, 6];
                        echo "<pre>", var_dump(trierScores($scores)), "</pre>";
                    ?>
                </div>
            </div>

            <!-- Exercice 5 -->
            <div class="bg-white rounded shadow-md p-6">
                <h2 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 5 - Tri des noms</h2>
                <div class="text-sm text-gray-700">
                    <?php 
                        function trierParNom($utilisateurs){
                            ksort($utilisateurs);
                            return $utilisateurs;
                        }
                        $utilisateurs = ['Jean'=> 20, 'Alice'=> 25];
                        echo "<pre>", var_dump(trierParNom($utilisateurs)), "</pre>";
                    ?>
                </div>
            </div>

            <!-- Exercice 6 -->
            <div class="bg-white rounded shadow-md p-6">
                <h2 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 6 - Présent ou pas ?</h2>
                <div class="text-sm text-gray-700">
                    <?php 
                        function estInscrit($liste, $prenom){
                            return in_array($prenom,$liste) ? "true" : "false";
                        }
                        $liste = ['Anna', 'Paul'];
                        $prenom = 'Anna';
                        echo estInscrit($liste,$prenom);
                    ?>
                </div>
            </div>

            <!-- Exercice 7 -->
            <div class="bg-white rounded shadow-md p-6">
                <h2 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 7 - Recherche de valeur</h2>
                <div class="text-sm text-gray-700">
                    <?php 
                        function trouverPosition($liste, $nom){
                            return array_search($nom, $liste);
                        }
                        $liste = ['Max', 'Nina', 'Léo'];
                        $nom = 'Nina';
                        echo trouverPosition($liste,$nom);
                    ?>
                </div>
            </div>

            <!-- Exercice 8 -->
            <div class="bg-white rounded shadow-md p-6">
                <h2 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 8 - Fusion de listes</h2>
                <div class="text-sm text-gray-700">
                    <?php 
                        function fusionnerGroupes($groupe1, $groupe2){
                            return array_merge($groupe1,$groupe2);
                        }
                        $groupe1 =['A', 'B'];
                        $groupe2 = ['C', 'D'];
                        echo "<pre>", var_dump(fusionnerGroupes($groupe1,$groupe2)), "</pre>";
                    ?>
                </div>
            </div>

            <!-- Exercice 9 -->
            <div class="bg-white rounded shadow-md p-6">
                <h2 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 9 - Doublons interdits</h2>
                <div class="text-sm text-gray-700">
                    <?php 
                        function supprimerDoublons($liste){
                            return array_unique($liste);
                        }
                        $liste =  ['Tom', 'Jerry', 'Tom'];
                        echo "<pre>", var_dump(supprimerDoublons($liste)), "</pre>";
                    ?>
                </div>
            </div>

            <!-- Exercice 10 -->
            <div class="bg-white rounded shadow-md p-6">
                <h2 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 10 - Valeurs communes</h2>
                <div class="text-sm text-gray-700">
                    <?php 
                        function intersection($a, $b){
                            return array_intersect_assoc($a,$b);
                        }
                        $a =['a', 'b'];
                        $b = ['b', 'c'];
                        echo "<pre>", print_r(intersection($a, $b), true), "</pre>";
                    ?>
                </div>
            </div>

            <!-- Exercice 11 -->
            <div class="bg-white rounded shadow-md p-6">
                <h2 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 11 - Extraire les noms</h2>
                <div class="text-sm text-gray-700">
                    <?php 
                        function extraireNoms($assoc){
                            $tab = [];
                            foreach($assoc as $value){
                                array_push($tab,$value);
                            }
                            return $tab;
                        }
                        $assoc = ['nom'=> 'Pierre', 'age'=> 30];
                        echo "<pre>", var_dump(extraireNoms($assoc)), "</pre>";
                    ?>
                </div>
            </div>

            <!-- Exercice 12 -->
            <div class="bg-white rounded shadow-md p-6">
                <h2 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 12 - Tableau multidimensionnel</h2>
                <div class="text-sm text-gray-700">
                    <?php 
                        function afficherNomPremierEleve($eleves){
                            $tab =[];
                            foreach ($eleves as $eleve => $value) {
                                array_push($tab,$value);
                            }
                            return $tab[0]['nom'];
                        }
                        $eleves =[['nom'=> 'Ali', 'age'=> 12], ['nom'=> 'Zara', 'age'=> 11]];
                        echo "<pre>", var_dump(afficherNomPremierEleve($eleves)), "</pre>";
                    ?>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
