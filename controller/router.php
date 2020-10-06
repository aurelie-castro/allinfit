<?php 
  if(isset($_GET["section"])){
switch ($_GET) {
    case 'accueil':
        include("controller/accueilController.php");
        break;
        case 'apropos':
            include("controller/aproposController.php");
            break;
            case 'connexion':
                include("controller/connexionController.php");
                break;
                case 'contact':
                    include("controller/contactController.php");
                    break;
    default:
    include("view/error/erreur.php");
        break;
}
  }
  else {
      include("view/page/accueil.php");
  }
?>