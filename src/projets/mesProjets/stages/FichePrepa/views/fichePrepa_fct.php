<?php

class NavFichePrepa {

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
      <a class="page-link" href="/portFolio_GUYOT/Projets/Stages/Sncf" tabindex="-1">Previous</a>
    </li>';
                break;

            case '2':
                $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Stages/Sncf/Contexte" tabindex="-1">Previous</a></li>';
                break;

            case '4':
                $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Stages/Sncf/Planning">Previous</a></li>';
                break;

            case '3':
                $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Stages/Sncf/Conception">Previous</a></li>';
                break;

            default:
                $rep .= '<li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>';
                break;
        }
        $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Stages/Sncf">L\'entreprise</a></li><li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Stages/Sncf/Contexte">Le Contexte</a></li><li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Stages/Sncf/Conception">Démarche de conception</a></li><li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Stages/Sncf/Planning">Le planning</a></li><li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Stages/Sncf/Realisation">Démarche de réalisation</a></li><li class="page-item"><a class="page-link" target="_blank" href="/portFolio_GUYOT/Projets/Stages/Sncf/pdf">Le pdf</a></li>';

        switch ($numPage) {
            case '4':
                $rep .= '<li class="page-item disabled"><a class="page-link" href="#" >Next</a></li>';
                break;

            case '3':
                $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Stages/Sncf/Realisation" >Next</a></li>';
                break;

            case '2':
                $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Stages/Sncf/Planning">Next</a></li>';
                break;

            case '1':
                $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Stages/Sncf/Conception">Next</a></li>';
                break;

            case '0':
                $rep .= '<li class="page-item"><a class="page-link" href="/portFolio_GUYOT/Projets/Stages/Sncf/Contexte">Next</a></li>';
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