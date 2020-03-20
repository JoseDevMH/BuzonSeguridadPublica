<?php

  /**
   *
   */
  class ObjetoDenuncia {
    //Campos de clase, propiedades y campos de la tabla
    private $id;
    private $folio;
    private $fecha;
    private $tipo;
    private $nombre;
    private $ciudad;
    private $correo;
    private $telefono;
    private $asunto;
    private $descripcion;
    private $archivo;
    private $estatus;




    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
    }

          /**
     * Get the value of Folio
     *
     * @return mixed
     */
    public function getFolio()
    {
        return $this->folio;
    }

    /**
     * Set the value of Folio
     *
     * @param mixed $folio
     *
     * @return self
     */
    public function setFolio($folio)
    {
        $this->folio = $folio;
    }

          /**
     * Get the value of Fecha
     *
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of Fecha
     *
     * @param mixed $fecha
     *
     * @return self
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

          /**
     * Get the value of Tipo
     *
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of Tipo
     *
     * @param mixed $tipo
     *
     * @return self
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

          /**
     * Get the value of Nombre
     *
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of Nombre
     *
     * @param mixed $nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

          /**
     * Get the value of Ciudad
     *
     * @return mixed
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set the value of Ciudad
     *
     * @param mixed $ciudad
     *
     * @return self
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    }

          /**
     * Get the value of Correo
     *
     * @return mixed
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set the value of Correo
     *
     * @param mixed $correo
     *
     * @return self
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

          /**
     * Get the value of Telefono
     *
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of Telefono
     *
     * @param mixed $telefono
     *
     * @return self
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

          /**
     * Get the value of Asunto
     *
     * @return mixed
     */
    public function getAsunto()
    {
        return $this->asunto;
    }

    /**
     * Set the value of Asunto
     *
     * @param mixed $asunto
     *
     * @return self
     */
    public function setAsunto($asunto)
    {
        $this->asunto = $asunto;
    }

          /**
     * Get the value of Descripcion
     *
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of Descripcion
     *
     * @param mixed $descripcion
     *
     * @return self
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

          /**
     * Get the value of Archivo
     *
     * @return mixed
     */
    public function getArchivo()
    {
        return $this->archivo;
    }

    /**
     * Set the value of Archivo
     *
     * @param mixed $archivo
     *
     * @return self
     */
    public function setArchivo($archivo)
    {
        $this->archivo = $archivo;
    }

          /**
     * Get the value of Estatus
     *
     * @return mixed
     */
    public function getEstatus()
    {
        return $this->estatus;
    }

    /**
     * Set the value of Estatus
     *
     * @param mixed $estatus
     *
     * @return self
     */
    public function setEstatus($estatus)
    {
        $this->estatus = $estatus;
    }

  }

?>
