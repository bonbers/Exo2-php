<!DOCTYPE html>
<html lang="fr">
   <head>
     <meta charset="utf-8">
     <title>Exo 2 PHP</title>
   </head>


   <body>

     <p><?php
     $age = 25;

     if ($age >= 18)
     {
       echo "Vous êtes majeur !";
       $autorisation_enter ="oui";
     }
     else {
       echo "Vous êtes mineur !";
       $autorisation_enter ="non !!";
     }
     echo "As tu l'autorisation de voir mon site ? Réponse : $autorisation_enter";
      ?></p>

      <p><?php
      $age = 40;
      $male = "Homme";
      $female = "Femme";
      $genre = $male . $Female;


      if ($age >= 18 AND $genre == "Homme" )
      {
      echo "Vous êtes un Homme et vous êtes majeur";
    }
    elseif ($age >=18 AND $genre == "Femme" )
    {
      echo "Vous êtes une femme et vous êtes majeur";
    }
    elseif ($age <= 18 AND $genre == "Homme")
    {
      echo "Vous êtes un homme et vous êtes mineur";
    }
    elseif ($age <= 18 AND $genre == "Femme")
    {
      echo "Vous êtes une femme et vous êtes mineur";
    }
       ?></p>

       <p><?php
       $mavariable = "Homme";
       if ($mavariable == Homme)
       {
         echo "C'est un développeur !";
       }
        else {
          echo "C'est une développeuse !";
        }
        ?></p>

        <p><?php

        $monAge = 18;
        if ( $monAge >= 18)
        {
          echo "Tu est majeur";
        }
        else {
          echo "Tu n'est pas majeur";
        }
         ?></p>

         <p><?php
         $mavariable = false;
         if ( $mavariable == false)
         {
           echo "C'est pas bon";
         }
         else {
           echo"C'est OK !!!";
         }
          ?></p>

          <p><?php
         $mavariable = NULL;
         if ( $mavariable == NULL)
         {
           echo "c'est pas bon";
         }
         else {
           echo "c'est ok !";
         }
           ?></p>



   </body>

</html>
