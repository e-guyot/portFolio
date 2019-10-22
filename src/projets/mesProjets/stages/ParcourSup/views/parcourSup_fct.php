<?php

class NavParcourSup {

    function getNav($numPage = 0) {
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
      <a class="page-link" href="/portFolio_GUYOT/Projets/Stages/Onisep" tabindex="-1">Previous</a>
    </li>';
                break;

            case '2':
                $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Stages/Onisep/Contexte" tabindex="-1">Previous</a></li>';
                break;

            case '3':
                $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Stages/Onisep/Mission1">Previous</a></li>';
                break;

            case '4':
                $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Stages/Onisep/Mission2">Previous</a></li>';
                break;

            case '5':
                $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Stages/Onisep/Mission3">Previous</a></li>';
                break;

            default:
                $rep .= '<li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>';
                break;
        }
        $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Stages/Onisep">L\'entreprise</a></li><li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Stages/Onisep/Contexte">Le Contexte</a></li><li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Stages/Onisep/Mission1">Mission 1</a></li><li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Stages/Onisep/Mission2">Mission 2</a></li><li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Stages/Onisep/Mission3">Mission 3</a></li><li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Stages/Onisep/MissionSQL">Les requêtes SQL</a></li><li class="page-item"><a class="page-link" target="_blank" href="/portFolio_GUYOT/Projets/Stages/Onisep/Pdf">Le pdf</a></li>';

        switch ($numPage) {
            case '5':
                $rep .= '<li class="page-item disabled">
      <a class="page-link" href="#" >Next</a>
    </li>';
                break;

            case '4':
                $rep .= '<li class="page-item">
      <a class="page-link" href="/portFolio_GUYOT/Projets/Stages/Onisep/MissionSQL" >Next</a>
    </li>';
                break;

            case '0':
                $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Stages/Onisep/Contexte" >Next</a></li>';
                break;

            case '2':
                $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Stages/Onisep/Mission2">Next</a></li>';
                break;

            case '1':
                $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Stages/Onisep/Mission1">Next</a></li>';
                break;

            case '3':
                $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Stages/Onisep/Mission3">Next</a></li>';
                break;

            default:
                $rep .= '<li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Next</a>
    </li>';
                break;
        }

        return $rep .= '</ul>
</nav>';
    }

}

?>