<?php
session_start();
require('../vues/v_all.php');

class controller{
    public function allAction(){

        echo $_SESSION['login'];
        include '../doctrine.php';
        include '../entities/client.php';

        $data = $em->getRepository('client')->findAll();
        $clients = array();
        foreach ($data as $client) array_push($clients,$client->toArray());

        $v=new vall('All Clients','','','','');

        $v->all($clients);
        $v->afficher();


    }
    public function addAction(){

            require '../entities/client.php';
            require_once '../doctrine.php';

            $nom = $_GET['nom'];
            $prenom = $_GET['prenom'];
            $sexe = $_GET['sexe'];
            $DateNaissance = $_GET['DateNaissance'];
            $Adresse = $_GET['Adresse'];

            $cl = new Client($nom,$prenom,$sexe,$DateNaissance,$Adresse);
            $em ->persist($cl);
            $em->flush();

            header('Location: http://localhost/crm/controllor/controllor.php?action=all');

    }
    public function newAction(){

        require '../vues/v_insert.php';
        $vinsert = new v_insert('View Insert','','','','');
        $vinsert->insert();
        $vinsert->afficher();
    }

    public function oneAction(){
        require_once '../vues/v_one.php';
        require_once '../doctrine.php';
        require_once '../entities/client.php';
       
        $dataOne  = $em->getRepository('client')->find(array('num'=>$_GET['num']));

        $oneclient = $dataOne->toArray();
        $vone = new v_one('View One','','','','');
        $vone->one($oneclient);
        $vone->afficher();

    }
    public function delAction(){

        require_once '../entities/client.php';
        require_once '../doctrine.php';
      
        $deletedClient = $em->getRepository('Client')->findOneBy(array('num'=>$_GET['num']));

        $em->remove($deletedClient);
        $em->flush();


        header('Location: http://localhost/crm/controllor/controllor.php?action=all');

    }
    public function updateAction(){
        
        require_once '../vues/v_update.php';
        require_once '../doctrine.php';
        require_once '../entities/client.php';

        $dataUpdate = $em->getRepository('client')->findOneBy(array('num'=>$_GET['num']));
        $clientUpdate = $dataUpdate->toArray();

        $vupdate = new v_update('View Update','','','','');
        $vupdate->one($clientUpdate);
        $vupdate->afficher();

    }

    public function valupdateAction(){

            require_once '../entities/client.php';
            require_once '../doctrine.php';

            $nom = $_GET['nom'];
            $prenom = $_GET['prenom'];
            $sexe = $_GET['sexe'];
            $ddn = $_GET['ddn'];
            $adresse = $_GET['adresse'];

            $client = $em->getRepository('client')->find(array('num'=>$_GET['num']));

		    $client->setNom($nom);
		    $client->setPrenom($prenom);
		    $client->setSexe($sexe);
		    $client->setDdn($ddn);
		    $client->setAdresse($adresse);

            $em->flush();

            header('Location: http://localhost/crm/controllor/controllor.php?action=all');


    }
    public function authAction(){
        require_once '../vues/v_auth.php';

        $vauth = new v_auth();
        $vauth->auth();
        $vauth->afficher();
    }

    public function verifauthAction(){

        require_once '../doctrine.php';
        require_once '../entities/user.php';

        $user = $em->getRepository('user')->findOneBy(array('login'=>$_POST['login'],'pass'=>$_POST['passwd']));

        if($user)
            {
                $_SESSION['login'] = "root";

                header('Location: http://localhost/crm/controllor/controllor.php?action=all');
            }
        else
            {
                header('Location: http://localhost/crm/controllor/controllor.php');
            }

    }
    public function action(){

        if(isset($_SESSION['login']))
            {
                $action = 'all';
                if(isset($_GET['action'])) $action = $_GET['action'];

                if(isset($_POST['action'])) $action = $_POST['action'];

            }
        else
            {
                if(isset($_POST['login']) || isset($_GET['login']))
                {
                    $action = 'verifauth';
                }
                else{
                    $action = 'auth';
                }
            }

        switch ($action)
        {
            case 'all':
                $this->allAction();
                break;
            case 'nouveau':
                $this->newAction();
                break;
            case 'add':
                $this->addAction();
                break;

            case 'one':
                $this->oneAction();
                break;

            case 'del':
                $this->delAction();
                break;

            case 'update':
                $this->updateAction();
                break;

            case 'valupdate':
                $this->valupdateAction();
                break;

            case 'auth':
                $this->authAction();
                break;

            case 'verifauth':
                $this->verifauthAction();
                break;


            case 'close':
                session_destroy();
                $this->authAction();
                break;


            default:

                break;
        }
    }

}

$c=new controller();
$c->action();

?>
