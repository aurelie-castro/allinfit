<?php 
  if(isset($_GET["section"])){
switch ($_GET) {
    case 'accueil':
        include("view/page/accueil.php");
        break;
        case 'apropos':
            include("view/page/apropos.php");
            break;
            case 'connexion':
                include("view/page/connexion.php");
                break;
                case 'contact':
                    include("view/page/contact.php");
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