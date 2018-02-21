<?php
    function connexion($login, $mdp)
    {
        include("connexionBddErp.php");

        $user = null;

        $req = $bddErp->prepare("SELECT e.name_related, e.work_email FROM res_users u JOIN hr_employee e ON e.id = u.ag_employee_id WHERE login = ? AND password = ?");
        $req->execute(array($login, $mdp));
        if($data = $req->fetch())
        {
            $user = (object) array();
            $user->name = $data["name_related"];
            $user->mail = $data["work_email"];
        }
        return json_encode($user);
    }
?>
