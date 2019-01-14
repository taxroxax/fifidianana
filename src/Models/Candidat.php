<?php
/**
 * Created by PhpStorm.
 * User: RAJAONARILALA
 * Date: 11/01/19
 * Time: 21:46
 */

namespace App\Models;

class Candidat {

    private $id;
    private $codeQuartier;
    private $genre;
    private $rang;
    private $numCarte;
    private $nom;

    function __construct($codeQuartier = 0, $genre = 0, $id = 0, $nom = null, $num_carte = null, $rang = 0)
    {
        $this->codeQuartier = $codeQuartier;
        $this->genre = $genre;
        $this->id = $id;
        $this->nom = $nom;
        $this->numCarte = $num_carte;
        $this->rang = $rang;
    }

    /**
     * @param mixed $codeQuartier
     */
    public function setCodeQuartier($codeQuartier)
    {
        $this->codeQuartier = $codeQuartier;
    }

    /**
     * @return mixed
     */
    public function getCodeQuartier()
    {
        return $this->codeQuartier;
    }

    /**
     * @param mixed $genre
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $num_carte
     */
    public function setNumCarte($num_carte)
    {
        $this->numCarte = $num_carte;
    }

    /**
     * @return mixed
     */
    public function getNumCarte()
    {
        return $this->numCarte;
    }

    /**
     * @param mixed $rang
     */
    public function setRang($rang)
    {
        $this->rang = $rang;
    }

    /**
     * @return mixed
     */
    public function getRang()
    {
        return $this->rang;
    }



} 