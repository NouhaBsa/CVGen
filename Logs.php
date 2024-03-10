<?php
class Log {
    private $mail;
    private $mdp;

    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }
    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function setMail($value) {
        $this->mail = $value;
    }

    public function setMdp($value) {
        $this->mdp = $value;
    }

    public function getMail() {
        return $this->mail;
    }

    public function getMdp() {
        return $this->mdp;
    }
}
    
class Logs
    {
        private $conn;
    
        public function __construct(PDO $conn)
        {
            $this->conn = $conn;
        }
    
        public function addUser(Log $user)
    {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM signup  WHERE mail=:mail AND  mdp=:mdp");
            $stmt->bindValue(':mail', $user->getMail());
            $stmt->bindValue(':mdp', $user->getMdp());
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($result){
                header("Location: index.php");
            }else {
                header("Location: signup.php");
            }

        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }
    }
?>
