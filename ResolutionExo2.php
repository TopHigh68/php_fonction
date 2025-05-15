<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-[#FFF0CF] text-gray-800">
    <div class="max-w-screen-lg mx-auto px-4 py-10">
        <h1 class="text-4xl font-bold text-center mb-10 text-teal-700">Corrigé des Exercices PHP</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white rounded shadow-md p-6">
                <h1 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 1 - Générateur de code PIN unique</h1>
                <div class="text-sm text-gray-700">
                    <?php
                            function genererCodePin() {
                                $codePin = [];
                                while(count($codePin) < 4) {
                                    $chiffre = rand(0, 9);
                                    if(!in_array($chiffre, $codePin)) {
                                        $codePin[] = $chiffre;
                                    }
                                }
                                return $codePin;
                            }
                            echo "Code PIN unique généré : [", implode(", ",  genererCodePin())," ]";
                        ?>
                </div>
            </div>
            <div class="bg-white rounded shadow-md p-6">
                <h1 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 2 - Suite de Fibonacci</h1>
                <div class="text-sm text-gray-700">
                    <?php
                            function fibonacci($n){
                                $num1 = 0;
                                $num2 = 1;
                                $counter = 0;
                                while ($counter < $n){
                                    echo ' '.$num1;
                                    $num3 = $num2 + $num1;
                                    $num1 = $num2;
                                    $num2 = $num3;
                                    $counter = $counter + 1;
                                }
                            }
                            $n = 7;
                            echo "La suite fibonaci de ",$n,"est: ", fibonacci($n);
                        ?>
                </div>
            </div>
            <div class="bg-white rounded shadow-md p-6">
                <h1 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 3 - Trouver le plus long mot</h1>
                <div class="text-sm text-gray-700">
                    <?php
                        function plusLongMot($phrase) {
                            return array_reduce( explode(' ', $phrase),
                                fn($long, $mot) => strlen($mot) > strlen($long) ? $mot : $long,
                                ''
                            );
                        }
                        $phrase = "Le developpeur aime PHP et JavaScript";
                        echo "Le mot le plus long dans la phrase ",$phrase, "est : ",  plusLongMot($phrase);
                    ?>
            </div>
            </div>
            <div class="bg-white rounded shadow-md p-6">
                <h1 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 4 - Liste des nombres premiers</h1>
                <div class="text-sm text-gray-700">
                    <?php
                        function nombresPremiers($n){
                            $negatif = false;
                            if($n<0){
                                $negatif = true;
                                $n = -$n;
                            }
                            for($i=2;$i<=$n;$i++){
                                $nbDiv = 0;
                                for($j=1;$j<=$i;$j++){
                                    if($i%$j==0){
                                        $nbDiv++;
                                    }
                                }
                                if($nbDiv == 2){
                                    if($negatif){
                                        echo "-";
                                    }
                                    echo $i,"...";
                                }
                            }
                        }
                        $n = 10;
                        echo "La liste des nombres premiers en allant de 0 à ",$n," est: ", nombresPremiers($n);
                    ?>
                </div>
            </div>
            <div class="bg-white rounded shadow-md p-6">
                <h1 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 5 - Jeu de devinette automatique</h1>
                <div class="text-sm text-gray-700">
                    <?php
                        function devinerNombre($cible) {
                        $min = 1;
                        $max = 100;
                        $tentatives = 1;
                        while (true) {
                            $tentatives++;
                            $milieu = intdiv($min + $max, 2);
                            if ($milieu == $cible) {
                                return $tentatives;
                            } elseif ($milieu < $cible) {
                                $min = $milieu + 1;
                            } else {
                                $max = $milieu - 1;
                            }
                        }
                                        }
                                        echo devinerNombre(73);
                                        ?>
                </div>
            </div>
            <div class="bg-white rounded shadow-md p-6">
                <h1 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 6 - Moyenne pondérée</h1>
                <div class="text-sm text-gray-700">
                    <?php
                        function moyennePonderee($notes, $coeffs) {
                            $total = 0;
                            $sommeCoeff = 0;
                            for ($i = 0; $i < count($notes); $i++) {
                                $total += $notes[$i] * $coeffs[$i];
                                $sommeCoeff += $coeffs[$i];
                            }
                            return $total / $sommeCoeff;
                        }
                        $notes = [12, 14, 10];
                        $coeffs = [2, 3, 1];
                        echo moyennePonderee($notes,$coeffs);
                                        ?>
                </div>
            </div>
            <div class="bg-white rounded shadow-md p-6">
                <h1 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 7 - Compression de données (run-length
                    encoding)</h1>
                <div class="text-sm text-gray-700">
                    <?php
                        function compresser($texte) {
                            $result = "";
                            $n = strlen($texte);
                            for ($i = 0; $i < $n; ) {
                                $char = $texte[$i];
                                $count = 1;
                                while ($i + $count < $n && $texte[$i + $count] == $char) {
                                    $count++;
                                }
                                $result .= $char . $count;
                                $i += $count;
                            }
                            return $result;
                        }
                        $texte = "aaabbc";
                        echo compresser($texte);
                                        ?>
                </div>
            </div>
            <div class="bg-white rounded shadow-md p-6">
                <h1 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 8 - Générer une grille de jeu</h1>
                <div class="text-sm text-gray-700">
                    <?php
                        function genererGrille($n) {
                            $grille = [];
                            for ($i = 0; $i < $n; $i++) {
                                $grille[] = array_fill(0, $n, '#');
                            }
                            return $grille;
                        }
                        $n = "2";
                        echo "<pre>",
                            var_dump(genererGrille($n));
                        echo "</pre>";
                                        ?>
                </div>
            </div>
            <div class="bg-white rounded shadow-md p-6">
                <h1 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 9 - Valeurs montantes</h1>
                <div class="text-sm text-gray-700">
                    <?php
                        function estCroissant($tab){
                            for ($i = 1; $i < count($tab); $i++) {
                                if ($tab[$i] <= $tab[$i - 1])
                                return "false";
                            }
                            return "true";
                        }
                        $tab=[1, 2, 3];
                        $tab2=[3, 2 ,1];
                        echo "le tableau [1, 2, 3] est croissant :", estCroissant($tab), "<br/>";
                        echo "le tableau [3, 2 1] est croissant : ", estCroissant($tab2);
                    ?>
                </div>
            </div>
            <div class="bg-white rounded shadow-md p-6">
                <h1 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 10 - Triangle valide ?</h1>
                <div class="text-sm text-gray-700">
                    <?php
                        function estTriangleValide($a, $b, $c) {
                            return ($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)?"True":"False ";
                        }
                        $a = 3;
                        $b = 4;
                        $c = 5;
                        echo   estTriangleValide($a, $b, $c);
                    ?>
                </div>
            </div>
            <div class="bg-white rounded shadow-md p-6">
                <h1 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 11 - Médiane d’un tableau</h1>
                <div class="text-sm text-gray-700">
                    <?php
                    function mediane($tab) {
                        sort($tab);
                        $n = count($tab);
                        if ($n % 2 == 0) {
                            return ($tab[$n/2 - 1] + $tab[$n/2]) / 2;
                        } else {
                            return $tab[floor($n/2)];
                        }
                    }
                    $tab =[10, 20, 15];
                    echo mediane($tab);
                     ?>
                </div>
            </div>
            <div class="bg-white rounded shadow-md p-6">
                <h1 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 12 - Statistiques de dés</h1>
                <div class="text-sm text-gray-700">
                    <?php
                        function statistiquesDes($n) {
                            $result = array_fill(1, 6, 0);
                            for ($i = 0; $i < $n; $i++) {
                                $face = rand(1, 6);
                                $result[$face]++;
                            }
                            return $result;
                        }
                        $n = 10;
                        echo "<pre>",
                            var_dump(statistiquesDes($n))  ;
                        echo "</pre>";
                                        ?>
                </div>
            </div>
            <div class="bg-white rounded shadow-md p-6">
                <h1 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 13 - Anagrammes ?</h1>
                <div class="text-sm text-gray-700">
                    <?php
                                        function sontAnagrammes($a, $b) {
                        $a = str_split($a);
                        $b = str_split($b);
                        sort($a);
                        sort($b);
                        return $a === $b ? "True":"False";
                        }
                                        $a = 'gare';
                                        $b =  'rage';
                                        echo sontAnagrammes($a, $b);
                                        ?>
                </div>
            </div>
            <div class="bg-white rounded shadow-md p-6">
                <h1 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 14 - Table de multiplication croisée</h1>
                <div class="text-sm text-gray-700">
                    <?php
                        function tableCroisee($n) {
                            $table = [];
                            for ($i = 1; $i <= $n; $i++) {
                                $row = [];
                                for ($j = 1; $j <= $n; $j++) {
                                    $row[] = $i * $j;
                                }
                                $table[] = $row;
                            }
                            return $table;
                        }
                        $n = 3;
                        echo "<pre>",
                            var_dump(tableCroisee($n));
                        echo "</pre>";
                                        ?>
                </div>
            </div>
            <div class="bg-white rounded shadow-md p-6">
                <h1 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 15 - Rotation à droite</h1>
                <div class="text-sm text-gray-700">
                    <?php
                        function rotationDroite($tab) {
                            $last = array_pop($tab);
                            array_unshift($tab, $last);
                            return $tab;
                        }
                        $tab = [1, 2, 3];
                        echo "<pre>",
                        var_dump(rotationDroite($tab))  ;
                                        echo "</pre>";
                                        ?>
                </div>
            </div>
            <div class="bg-white rounded shadow-md p-6">
                <h1 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 16 - Trouver les indices pairs d’un
                    tableau</h1>
                <div class="text-sm text-gray-700">
                    <?php
                                    
                                        function indicesPairs($tab) {
                        $result = [];
                        foreach ($tab as $i => $val) {
                            if ($i % 2 == 0) $result[] = $val;
                        }
                        return $result;
                                        }
                                        $tab=[10, 20, 30, 40, 50];
                                        echo "<pre>",
                        var_dump(indicesPairs($tab))  ;
                                        echo "</pre>";
                                        ?>
                </div>
            </div>
            <div class="bg-white rounded shadow-md p-6">
                <h1 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 17 - Détection de doublons</h1>
                <div class="text-sm text-gray-700">
                    <?php
                        function aDesDoublons($liste) {
                            return count($liste) !== count(array_unique($liste))?"True":"False";
                        }
                        $liste=['a', 'b', 'a'];
                        echo aDesDoublons($liste);
                                        ?>
                </div>
            </div>
            <div class="bg-white rounded shadow-md p-6">
                <h1 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 18 - Nombres parfaits</h1>
                <div class="text-sm text-gray-700">
                    <?php
                                    
                                        function estParfait($n) {
                        $somme = 0;
                        for ($i = 1; $i < $n; $i++) {
                            if ($n % $i == 0) $somme += $i;
                        }
                        return $somme == $n ?"True":"False";
                                        }
                                        $n = 6;
                                        $n2= 10;
                                        echo estParfait($n),"<br/>";
                                        echo estParfait($n2);
                                        ?>
                </div>
            </div>
            <div class="bg-white rounded shadow-md p-6">
                <h1 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 19 - Palindrome numérique</h1>
                <div class="text-sm text-gray-700">
                    <?php
                    function estPalindromeNombre($n) {
                        return strval($n) === strrev(strval($n))?"True":"False";
                    }
                    $n = 121;
                    $n2 = 123;
                    echo  estPalindromeNombre($n),"<br/>";
                    echo  estPalindromeNombre($n2),"<br/>";
                    ?>
                </div>
            </div>
            <div class="bg-white rounded shadow-md p-6">
                <h1 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 20 - Nombres narcissiques</h1>
                <div class="text-sm text-gray-700">
                    <?php
                                    
                        function estNarcissique($n) {
                        $digits = str_split(strval($n));
                        $power = count($digits);
                        $sum = 0;
                        foreach ($digits as $d) {
                            $sum += pow((int)$d, $power);
                        }
                        return $sum == $n?"True":"False";
                                        }
                                        $n = 153 ;
                                        $n2 =370 ;
                                        echo  estNarcissique($n),"<br/>";
                                        echo  estNarcissique($n2),"<br/>";
                                        ?>
                </div>
            </div>
            <div class="bg-white rounded shadow-md p-6">
                <h1 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 21 - Triangle de Pascal</h1>
                <div class="text-sm text-gray-700">
                    <?php
                                    
                                        function trianglePascal($n) {
                        $triangle = [];
                        for ($i = 0; $i < $n; $i++) {
                            $row = [];
                            for ($j = 0; $j <= $i; $j++) {
                                if ($j == 0 || $j == $i) {
                                    $row[] = 1;
                                } else {
                                    $row[] = $triangle[$i-1][$j-1] + $triangle[$i-1][$j];
                                }
                            }
                            $triangle[] = $row;
                        }
                        return $triangle;
                                        }
                                        $n = 3;
                                        echo "<pre>",
                        var_dump(trianglePascal($n))  ;
                                        echo "</pre>";
                                        ?>
                </div>
            </div>
            <div class="bg-white rounded shadow-md p-6">
                <h1 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 22 - Répartition en groupes</h1>
                <div class="text-sm text-gray-700">
                    <?php
                        function creerGroupes($eleves) {
                            return array_chunk($eleves, 3);
                        }
                        $eleves = ['Ali', 'Zoe', 'Tom', 'Eva'];
                        echo "<pre>",
                            var_dump(creerGroupes($eleves))  ;
                        echo "</pre>";
                                        ?>
                </div>
            </div>
            <div class="bg-white rounded shadow-md p-6">
                <h1 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 23 - Générateur de jetons aléatoires</h1>
                <div class="text-sm text-gray-700">
                    <?php
                        function genererJeton() {
                            return substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 8);
                        }
                        echo genererJeton();
                                        ?>
                </div>
            </div>
            <div class="bg-white rounded shadow-md p-6">
                <h1 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 24 - Séparer positifs et négatifs</h1>
                <div class="text-sm text-gray-700">
                    <?php
                        function separerValeurs($tab) {
                            $positifs = $negatifs = [];
                            foreach ($tab as $val) {
                                if ($val >= 0) $positifs[] = $val;
                                else $negatifs[] = $val;
                            }
                            return [$positifs, $negatifs];
                        }
                        $tab = [1, -1, 3, -2];
                        echo "<pre>",
                            var_dump(separerValeurs($tab))  ;
                        echo "</pre>";
                                        ?>
                </div>
            </div>
            <div class="bg-white rounded shadow-md p-6">
                <h1 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 25 - Mot le plus fréquent</h1>
                <div class="text-sm text-gray-700">
                    <?php
                        function motPlusFrequent($texte) {
                            $mots = str_word_count(strtolower($texte), 1);
                            $frequences = array_count_values($mots);
                            arsort($frequences);
                            return array_key_first($frequences);
                        }
                        $texte = "php est génial et php est populaire";
                        echo "Le mot le plus fréquent est : ", motPlusFrequent($texte);
                                        ?>
                </div>
            </div>
            <div class="bg-white rounded shadow-md p-6">
                <h1 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 26 - Créer une pyramide de nombres</h1>
                <div class="text-sm text-gray-700">
                    <?php
                        function pyramide($n) {
                            $result = [];
                            $num = 1;
                            for ($i = 1; $i <= $n; $i++) {
                                $row = [];
                                for ($j = 0; $j < $i; $j++) {
                                    $row[] = $num++;
                                }
                                $result[] = $row;
                            }
                            return $result;
                        }
                        $n = 3 ;
                        echo "<pre>",
                            var_dump( pyramide($n))  ;
                        echo "</pre>";
                                        ?>
                </div>
            </div>
            <div class="bg-white rounded shadow-md p-6">
                <h1 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 27 - Conversion binaire</h1>
                <div class="text-sm text-gray-700">
                    <?php
                        function enBinaire($n) {
                            return decbin($n);
                        }
                        $n=5;
                        echo enBinaire($n);
                                        ?>
                </div>
            </div>
            <div class="bg-white rounded shadow-md p-6">
                <h1 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 28 - Produit des chiffres</h1>
                <div class="text-sm text-gray-700">
                    <?php
                            function produitChiffres($n) {
                                $digits = str_split((string)$n);
                                $product = 1;
                                foreach ($digits as $d) {
                                    $product *= (int)$d;
                                }
                                return $product;
                            }
                            $n = 123 ;
                            echo produitChiffres($n);
                        ?>
                </div>
            </div>
            <div class="bg-white rounded shadow-md p-6">
                <h1 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 29 - Mélanger un tableau</h1>
                <div class="text-sm text-gray-700">
                    <?php
                        function melanger($tab) {
                            shuffle($tab);
                            return $tab;
                        }
                        $tab = [1, 2, 3];
                        echo "<pre>",
                            var_dump(melanger($tab))  ;
                        echo "</pre>";
                        echo "Le Tableau avec les nombre mélanger est: [", implode(",", melanger($tab)),"]";
                                        ?>
                </div>
            </div>
            <div class="bg-white rounded shadow-md p-6">
                <h1 class="text-2xl font-semibold text-blue-600 mb-4">Exercice 30 - Index du plus grand élément</h1>
                <div class="text-sm text-gray-700">
                    <?php
                        function indexMax($tab) {
                            return array_search(max($tab), $tab);
                        }
                        $tab = [4, 9, 2];
                        echo indexMax($tab);
                                        ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>