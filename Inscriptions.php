<?php
class Inscription {
    private $nom;
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

    public function setNom($value) {
        $this->nom = $value;
    }

    public function setMail($value) {
        $this->mail = $value;
    }

    public function setMdp($value) {
        $this->mdp = $value;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getMail() {
        return $this->mail;
    }

    public function getMdp() {
        return $this->mdp;
    }
}
    
class Inscriptions
    {
        private $conn;
    
        public function __construct(PDO $conn)
        {
            $this->conn = $conn;
        }
    
        public function addUser(Inscription $user)
    {
        try {
            $stmt = $this->conn->prepare("INSERT INTO signup (nom, mail, mdp) VALUES(:nom, :mail, :mdp)");
            $stmt->bindValue(':nom', $user->getNom());
            $stmt->bindValue(':mail', $user->getMail());
            $stmt->bindValue(':mdp', $user->getMdp());

            $stmt->execute();
            header("Location: index.php");
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }
    }
?>
