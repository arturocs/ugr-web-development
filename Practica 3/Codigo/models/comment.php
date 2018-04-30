<?php
/**
 * Created by PhpStorm.
 * User: dvcarrillo
 * Date: 18/4/18
 * Time: 20:25
 */

/**
 * Class Comment
 * Representa un comentario parte de un articulo
 */

class Comment
{
    // Atributos del comentario
    private $id_comentario;
    private $nombre;
    private $fecha;
    private $hora;
    private $contenido;
    private $email;
    private $imagen;
    private $id_articulo;

    /**
     * Comment constructor.
     * @param $id_comentario
     * @param $nombre
     * @param $fecha
     * @param $hora
     * @param $contenido
     * @param $email
     * @param $imagen
     * @param $id_articulo
     */
    public function __construct($id_comentario, $nombre, $fecha, $hora, $contenido, $email, $imagen, $id_articulo)
    {
        $this->id_comentario = $id_comentario;
        $this->nombre = $nombre;
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->contenido = $contenido;
        $this->email = $email;
        $this->imagen = $imagen;
        $this->id_articulo = $id_articulo;
    }

    /**** GET AND SET METHODS ****/

    /**
     * @return mixed
     */
    public function getIdComentario()
    {
        return $this->id_comentario;
    }

    /**
     * @param mixed $id_comentario
     */
    public function setIdComentario($id_comentario)
    {
        $this->id_comentario = $id_comentario;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * @return mixed
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * @param mixed $hora
     */
    public function setHora($hora)
    {
        $this->hora = $hora;
    }

    /**
     * @return mixed
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * @param mixed $contenido
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * @param mixed $imagen
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    /**
     * @return mixed
     */
    public function getIdArticulo()
    {
        return $this->id_articulo;
    }

    /**
     * @param mixed $id_articulo
     */
    public function setIdArticulo($id_articulo)
    {
        $this->id_articulo = $id_articulo;
    }

}