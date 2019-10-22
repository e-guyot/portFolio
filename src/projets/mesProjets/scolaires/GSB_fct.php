<?php

class NavGSB {

    function getNav($numPage = 0, $nomProjet) {
        if ($nomProjet == 'Java') {
            $rep = '<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">';
            switch ($numPage) {
                case '0':
                    $rep .= '<li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>';
                    break;

                case '1':
                    $rep .= '<li class="page-item">
      <a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/Java/entrepriseGSB" tabindex="-1">Previous</a>
    </li>';
                    break;

                case '2':
                    $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/Java/Contexte" tabindex="-1">Previous</a></li>';
                    break;

                case '3':
                    $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/Java/TriDep">Previous</a></li>';
                    break;

                case '4':
                    $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/Java/TriNom">Previous</a></li>';
                    break;

                default:
                    $rep .= '<li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>';
                    break;
            }
            $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/Java/entrepriseGSB">L\'entreprise</a></li><li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/Java/Contexte">Le Contexte</a></li><li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/Java/TriDep">Tri par Dep</a></li><li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/Java/TriNom">Tri par Nom</a></li><li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/Java/TriSpe">Tri par Spé</a></li><li class="page-item"><a class="page-link" target="_blank" href="/portFolio_GUYOT/Projets/Scolaires/Java/pdf">Le pdf</a></li>';

            switch ($numPage) {
                case '5':
                    $rep .= '<li class="page-item ">
      <a class="page-link" href="#" >Next</a>
    </li>';
                    break;

                case '3':
                    $rep .= '<li class="page-item">
      <a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/Java/TriSpe" >Next</a>
    </li>';
                    break;

                case '1':
                    $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/Java/TriDep" >Next</a></li>';
                    break;

                case '2':
                    $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/Java/TriNom">Next</a></li>';
                    break;

                case '0':
                    $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/Java/Contexte">Next</a></li>';
                    break;

                default:
                    $rep .= '<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Next</a></li>';
                    break;
            }

           
        } elseif ($nomProjet == 'MVC') {
            $rep = '<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">';
            switch ($numPage) {
                case '0':
                    $rep .= '<li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>';
                    break;

                case '1':
                    $rep .= '<li class="page-item">
      <a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/MVC/entrepriseGSB" tabindex="-1">Previous</a></li>';
                    break;

                case '2':
                    $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/MVC" tabindex="-1">Previous</a></li>';
                    break;

                case '3':
                    $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/MVC/Mission-1">Previous</a></li>';
                    break;

                default:
                    $rep .= '<li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>';
                    break;
            }
            $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/MVC/entrepriseGSB">L\'entreprise</a></li><li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/MVC">Le projet</a></li><li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/MVC/Mission-1">Mission 1</a></li><li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/MVC/Mission-2">Mission 2</a></li><li class="page-item"><a class="page-link" target="_blank" href="/portFolio_GUYOT/Projets/Scolaires/MVC/pdf">Le pdf</a></li>';

            switch ($numPage) {
                case '3':
                    $rep .= '<li class="page-item disabled">
      <a class="page-link" href="#" >Next</a>
    </li>';
                    break;

                case '1':
                    $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/MVC/Mission-1" >Next</a></li>';
                    break;

                case '2':
                    $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/MVC/Mission-2">Next</a></li>';
                    break;

                case '0':
                    $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/MVC">Next</a></li>';
                    break;

                default:
                    $rep .= '<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Next</a></li>';
                    break;
            }
            
        } elseif ($nomProjet == 'EquipVis') {
            $rep = '<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">';
            switch ($numPage) {
                case '0':
                    $rep .= '<li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>';
                    break;
                case '1':
                    $rep .= '<li class="page-item">
      <a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/EquipVis/entrepriseGSB" tabindex="-1">Previous</a>
    </li>';
                    break;
                case '2':
                    $rep .= '<li class="page-item">
      <a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/EquipVis" tabindex="-1">Previous</a>
    </li>';
                    break;

                case '3':
                    $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/EquipVis/M1" tabindex="-1">Previous</a></li>';
                    break;

                case '4':
                    $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/EquipVis/M1.2">Previous</a></li>';
                    break;

                default:
                    $rep .= '<li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>';
                    break;
            }
            $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/EquipVis/entrepriseGSB">L\'entreprise</a></li><li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/EquipVis">Le projet</a></li><li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/EquipVis/M1">Mission 1</a></li><li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/EquipVis/M1.2">Mission 1.2</a></li><li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/EquipVis/M3">Mission 3</a></li><li class="page-item"><a class="page-link" target="_blank" href="/portFolio_GUYOT/Projets/Scolaires/EquipVis/pdf">Le pdf</a></li>';

            switch ($numPage) {
                case '4':
                    $rep .= '<li class="page-item disabled">
      <a class="page-link" href="#" >Next</a>
    </li>';
                    break;

                case '1':
                    $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/EquipVis/M1" >Next</a></li>';
                    break;

                case '2':
                    $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/EquipVis/M1.2">Next</a></li>';
                    break;

                case '3':
                    $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/EquipVis/M3">Next</a></li>';
                    break;

                case '0':
                    $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/EquipVis">Next</a></li>';
                    break;

                default:
                    $rep .= '<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Next</a></li>';
                    break;
            }
        } elseif ($nomProjet == 'Android') {
            $rep = '<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">';
            switch ($numPage) {
                case '0':
                    $rep .= '<li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>';
                    break;
                case '1':
                    $rep .= '<li class="page-item">
      <a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/Android/entrepriseGSB" tabindex="-1">Previous</a>
    </li>';
    break;

                default:
                    $rep .= '<li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>';
                    break;
            }
            $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/EquipVis/entrepriseGSB">L\'entreprise</a></li><li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/Android">Le projet</a></li><li class="page-item"><a class="page-link" target="_blank" href="/portFolio_GUYOT/Projets/Scolaires/Android-pdf">Le pdf</a></li>';

            switch ($numPage) {

                case '0':
                    $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/Android" >Next</a></li>';
                    break;

                default:
                    $rep .= '<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Next</a></li>';
                    break;
            }

            
        }elseif ($nomProjet == 'Zend') {
            $rep = '<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">';
            switch ($numPage) {
                case '0':
                    $rep .= '<li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>';
                    break;
                case '1':
                    $rep .= '<li class="page-item">
      <a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/Zend/entrepriseGSB" tabindex="-1">Previous</a>
    </li>';
                    break;
                case '2':
                    $rep .= '<li class="page-item">
      <a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/Zend" tabindex="-1">Previous</a>
    </li>';
                    break;

                case '3':
                    $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/Zend/visiteurs" tabindex="-1">Previous</a></li>';
                    break;

                case '4':
                    $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/Zend/Allfiches">Previous</a></li>';
                    break;

                default:
                    $rep .= '<li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>';
                    break;
            }
            $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/Zend/entrepriseGSB">L\'entreprise</a></li><li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/Zend">Le projet</a></li><li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/Zend/visiteurs">Gérer les visiteurs</a></li><li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/Zend/Allfiches">Toutes les fiches de frais</a></li><li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/Zend/Cumul">Cumul frais forfait</a></li><li class="page-item"><a class="page-link" target="_blank" href="/portFolio_GUYOT/Projets/Scolaires/Zend/pdf">Le pdf</a></li>';

            switch ($numPage) {
                case '4':
                    $rep .= '<li class="page-item disabled">
      <a class="page-link" href="#" >Next</a>
    </li>';
                    break;

                case '1':
                    $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/Zend/visiteurs" >Next</a></li>';
                    break;

                case '2':
                    $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/Zend/Allfiches">Next</a></li>';
                    break;

                case '3':
                    $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/Zend/Cumul">Next</a></li>';
                    break;

                case '0':
                    $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Scolaires/Zend">Next</a></li>';
                    break;

                default:
                    $rep .= '<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Next</a></li>';
                    break;
            }
        }
        return $rep .= '</ul></nav>';
    }

}

?>