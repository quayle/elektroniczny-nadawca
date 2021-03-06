<?php

namespace PocztaPolska\ElektronicznyNadawca;

class cancelReklamacja
{

    /**
     * @var int $idRelkamacja
     */
    protected $idRelkamacja = null;

    /**
     * @param int $idRelkamacja
     */
    public function __construct($idRelkamacja)
    {
      $this->idRelkamacja = $idRelkamacja;
    }

    /**
     * @return int
     */
    public function getIdRelkamacja()
    {
      return $this->idRelkamacja;
    }

    /**
     * @param int $idRelkamacja
     * @return \PocztaPolska\ElektronicznyNadawca\cancelReklamacja
     */
    public function setIdRelkamacja($idRelkamacja)
    {
      $this->idRelkamacja = $idRelkamacja;
      return $this;
    }

}
