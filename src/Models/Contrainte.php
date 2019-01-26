<?php
/**
 * Created by PhpStorm.
 * User: RAJAONARILALA
 * Date: 26/01/19
 * Time: 10:29
 */

namespace App\Models;


class Contrainte {
    private $id;
    private $genre;
    private $quartier;
    private $nombre_max;

    function __construct($genre, $id, $nombre_max, $quartier)
    {
        $this->genre = $genre;
        $this->id = $id;
        $this->nombre_max = $nombre_max;
        $this->quartier = $quartier;
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
     * @param mixed $nombre_max
     */
    public function setNombreMax($nombre_max)
    {
        $this->nombre_max = $nombre_max;
    }

    /**
     * @return mixed
     */
    public function getNombreMax()
    {
        return $this->nombre_max;
    }

    /**
     * @param mixed $quartier
     */
    public function setQuartier($quartier)
    {
        $this->quartier = $quartier;
    }

    /**
     * @return mixed
     */
    public function getQuartier()
    {
        return $this->quartier;
    }


} 