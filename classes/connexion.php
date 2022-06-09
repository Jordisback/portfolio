<?php
class connexion
{

    //public function connexion ($dbname="u339911399_port", $db_host="mysql.hostinger.fr", $db_user="u339911399_jord", $db_pass="Sptb3|#G7u^Y@A")
    public function __construct ($dbname="id18817360_portfolio", $db_host="localhost", $db_user="id18817360_root", $db_pass="e5B6S8h]r#^J")
    {

        try
        {
            $this->bdd = new \PDO('mysql:host='. $db_host .';dbname='. $dbname, $db_user, $db_pass);

            $this->bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->bdd->exec("SET NAMES 'UTF8'");
        }
        catch (Exception $e) {
            die('Erreur : '. $e->getMessage());
        }
    }
    public function preparing($sql)
    {

        $statement = $this->bdd->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();

    }

    public function get_connex()
    {
        return $this->bdd;
    }
}
?>
