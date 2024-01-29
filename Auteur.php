<?php


Class Auteur{

    private string $_nom;
    private string $_prenom;
    private array $_livres;

    public function __construct(string $nom, string $prenom)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_livres = [];
    }

    public function getNom()
    {
        return $this->_nom;
    }

   
    public function setNom($nom)
    {
        $this->_nom = $nom;

        return $this;
    }

   
    public function getPrenom()
    {
        return $this->_prenom;
    }

  
    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;

        return $this;
    }

   
    public function getLivres()
    {
        return $this->_livres;
    }

   
    public function setLivres($livres)
    {
        $this->_livres = $livres;

        return $this;
    }

    public function addLivre(Livre $livre)
    {
        $this->_livres[] = $livre;
    }

    public function afficherBibliographie() 
    {
        $result = "<h1>Livres de $this </h1><br><ul>";
        foreach ($this->_livres as $livre) {
            $result .= $livre->getTitre()." (". $livre->getAnneePublication()->format('Y'). ") : ".$livre->getNbPages()." pages / " . $livre->getPrix()."€ <br>";
        }
        return $result;
    }

    public function __toString()
    {
        return $this->_prenom." ".$this->_nom;
    }
}

