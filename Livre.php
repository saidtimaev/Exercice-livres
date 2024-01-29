<?php


class Livre
{
    private string $_titre;
    private DateTime $_anneePublication;
    private int $_nbPages;
    private float $_prix;
    private Auteur $_auteur;

    public function __construct(string $titre, string $anneePublication, int $nbPages, float $prix, Auteur $auteur)
    {
        $this->_titre = $titre;
        $this->_anneePublication = new DateTime($anneePublication);
        $this->_nbPages = $nbPages;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
        $this->_auteur->addLivre($this);
    }

    public function getTitre()
    {
        return $this->_titre;
    }

    
    public function setTitre($titre)
    {
        $this->_titre = $titre;

        return $this;
    }

    
    public function getAnneePublication()
    {
        return $this->_anneePublication;
    }

    
    public function setAnneePublication($anneePublication)
    {
        $this->_anneePublication = $anneePublication;

        return $this;
    }

    
    public function getNbPages()
    {
        return $this->_nbPages;
    }

    
    public function setNbPages($nbPages)
    {
        $this->_nbPages = $nbPages;

        return $this;
    }

    
    public function getPrix()
    {
        return $this->_prix;
    }

   
    public function setPrix($prix)
    {
        $this->_prix = $prix;

        return $this;
    }

   
    public function getAuteur()
    {
        return $this->_auteur;
    }

   
    public function setAuteur($auteur)
    {
        $this->_auteur = $auteur;

        return $this;
    }

    

    
    public function _toString()
    {
        return $this->_titre;
    }
}