<?php

class User {
    protected $id;
    protected $prenom;
    protected $nom;
    protected $adresse;
    protected $email;
    protected $tel;
    protected $competences;
    protected $entre;
    protected $poste;
    protected $datedeb;
    protected $datefin;
    protected $diplome;
    protected $ecole;
    protected $date;
    protected $club;
    protected $tache;
    protected $langues;
    
    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }
    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            $method='set'.ucfirst($key);
            if(method_exists($this,$method))
            {
                $this->$method($value);}
            }
        
        }

        public function setid($id){$this->id=$id;}

        public function setnom($nom){$this->nom=$nom;}

        public function setprenom($prenom){$this->prenom=$prenom;}

        public function setadresse($adresse){$this->adresse=$adresse;}

        public function setemail($email){$this->email=$email;}

        public function settel($tel){$this->tel=$tel;}

        public function setcompetences($competences){$this->competences=$competences;}

        public function setentre($entre){$this->entre=$entre;}

        public function setposte($poste){$this->poste=$poste;}

        public function setdatedeb($datedeb){$this->datedeb=$datedeb;}

        public function setdatefin($datefin){$this->datefin=$datefin;}

        public function setdiplome($diplome){$this->diplome=$diplome;}

        public function setecole($ecole){$this->ecole=$ecole;}

        public function setdate($date){$this->date=$date;}

        public function setclub($club){$this->club=$club;}

        public function settache($tache){$this->tache=$tache;}

        public function setlangues($langues){$this->langues=$langues;}



        public function getid(){return $this->id;}

        public function getnom(){return $this->nom;}

        public function getemail(){return $this->email;}

        public function getprenom(){return $this->prenom;}

        public function getadresse(){return $this->adresse;}

        public function gettel(){return $this->tel;}

        public function getcompetences(){return $this->competences;}

        public function getentre(){return $this->entre;}

        public function getposte(){return $this->poste;}

        public function getdatedeb(){return $this->datedeb;}

        public function getdatefin(){return $this->datefin;}

        public function getdiplome(){return $this->diplome;}

        public function getecole(){return $this->ecole;}

        public function getdate(){return $this->date;}

        public function getclub(){return $this->club;}

        public function gettache(){return $this->tache;}

        public function getlangues(){return $this->langues;}

    }
?>