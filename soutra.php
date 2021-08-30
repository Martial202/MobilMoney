                               
<?php
/*---------------------------------------------------------------*/
/*
    Titre : Compte le nombre de mots dans une chaine                                                                      
                                                                                                                          
    URL   : https://phpsources.net/code_s.php?id=577
    Auteur           : mercier133                                                                                         
    Date édition     : 25 Mars 2010                                                                                       
    Date mise à jour : 15 Aout 2019                                                                                      
    Rapport de la maj:                                                                                                    
    - fonctionnement du code vérifié                                                                                    
*/
/*---------------------------------------------------------------*/

    function countWord($string){
        return str_word_count($string);
    }
?>

        
                                
<?php
    $in = 'La vie est un long fleuve tranquille';
    echo countWord( $in );
    // Affiche : 7
?>

                               
<?php
/*---------------------------------------------------------------*/
/*
    Titre : Affiche date et heure dynamiquement                                                                           
                                                                                                                          
    URL   : https://phpsources.net/code_s.php?id=664
    Date édition     : 16 Sept 2012                                                                                       
    Date mise à jour : 16 Aout 2019                                                                                      
    Rapport de la maj:                                                                                                    
    - fonctionnement du code vérifié                                                                                    
*/
/*---------------------------------------------------------------*/

    define('DS', DIRECTORY_SEPARATOR);
    define('BASE_PATH', dirname(__FILE__).DS);
    define('BASE_URL', 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER[
'SCRIPT_NAME']).'/');
?>
    <!DOCTYPE HTML>
    <html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>AJAX refresh example</title>
        <script
 src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
        <script>
            $(function(){
                setInterval(function(){
                    $('#ajax-refresh').load('<?php echo BASE_URL;?>chat.php');
                }, 1000);
            });
        </script>
    </head>
    <body>
        <div id="ajax-refresh">
            <?php include(BASE_PATH.'chat.php');?>
        </div>
    </body>
    </html>

    *********

    Sur la page chat.php

<?php

    header("Cache-Control: no-cache");
    header("Pragma: no-cache");

    echo date('Y-m-d H:i:s');


    // quelques fonctions en php

    checkdate(month, day, year); // permettant de recuperer une date etla verifer 
      // fonction permettant de verifier si la date est valide
     function valideDate($date, $format = 'Y-m-d H:i:s')
    {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }

?>

                               
<?php
/*---------------------------------------------------------------*/
/*
    Titre : Calcul l'age àpartir d'une date de naissance                                                                 
                                                                                                                          
    URL   : https://phpsources.net/code_s.php?id=590
    Auteur           : anakink                                                                                            
    Date édition     : 08 Juin 2010                                                                                       
    Date mise à jour : 11 Aout 2019                                                                                      
    Rapport de la maj:                                                                                                    
    - fonctionnement du code vérifié                                                                                    
    - modification de la description                                                                                      
*/
/*---------------------------------------------------------------*/  

    function age($date) { 
         $age = date('Y') - $date; 
        if (date('md') < date('md', strtotime($date))) { 
            return $age - 1; 
        } 
        return $age; 
    } 
?>



