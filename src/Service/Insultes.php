<?php
namespace App\Service;

class Insultes
{
    public function remplaceInsultes($insultes, $contenu)
    {
      $insultes = [];
      $contenu;

      $Text_remplace = str_replace($insultes, "##", $contenu);

      return $Text_remplace;
    }
}

?>
