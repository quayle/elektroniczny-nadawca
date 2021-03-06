<?php

namespace PocztaPolska\ElektronicznyNadawca;

class getEnvelopeBufor
{

    /**
     * @var int $idBufor
     */
    protected $idBufor = null;

    /**
     * @param int $idBufor
     */
    public function __construct($idBufor)
    {
      $this->idBufor = $idBufor;
    }

    /**
     * @return int
     */
    public function getIdBufor()
    {
      return $this->idBufor;
    }

    /**
     * @param int $idBufor
     * @return \PocztaPolska\ElektronicznyNadawca\getEnvelopeBufor
     */
    public function setIdBufor($idBufor)
    {
      $this->idBufor = $idBufor;
      return $this;
    }

}
