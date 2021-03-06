<?php

namespace PocztaPolska\ElektronicznyNadawca;

class przesylkaBiznesowaPlusType extends przesylkaRejestrowanaType
{

    /**
     * @var pobranieType $pobranie
     */
    protected $pobranie = null;

    /**
     * @var placowkaPocztowaType $urzadWydaniaPrzesylki
     */
    protected $urzadWydaniaPrzesylki = null;

    /**
     * @var subPrzesylkaBiznesowaPlusType $subPrzesylka
     */
    protected $subPrzesylka = null;

    /**
     * @var date $dataDrugiejProbyDoreczenia
     */
    protected $dataDrugiejProbyDoreczenia = null;

    /**
     * @var int $drugaProbaDoreczeniaPoLiczbieDni
     */
    protected $drugaProbaDoreczeniaPoLiczbieDni = null;

    /**
     * @var boolean $posteRestante
     */
    protected $posteRestante = null;

    /**
     * @var masaType $masa
     */
    protected $masa = null;

    /**
     * @var gabarytBiznesowaType $gabaryt
     */
    protected $gabaryt = null;

    /**
     * @var wartoscType $wartosc
     */
    protected $wartosc = null;

    /**
     * @var kwotaTranzakcjiType $kwotaTranzakcji
     */
    protected $kwotaTranzakcji = null;

    /**
     * @var boolean $ostroznie
     */
    protected $ostroznie = null;

    /**
     * @var kategoriaType $kategoria
     */
    protected $kategoria = null;

    /**
     * @var iloscPotwierdzenOdbioruType $iloscPotwierdzenOdbioru
     */
    protected $iloscPotwierdzenOdbioru = null;

    /**
     * @var boolean $zwrotDoslanie
     */
    protected $zwrotDoslanie = null;

    /**
     * @var eKontaktType $eKontaktAdresata
     */
    protected $eKontaktAdresata = null;

    /**
     * @var eSposobPowiadomieniaType $eSposobPowiadomieniaAdresata
     */
    protected $eSposobPowiadomieniaAdresata = null;

    /**
     * @var numerPrzesylkiKlientaType $numerPrzesylkiKlienta
     */
    protected $numerPrzesylkiKlienta = null;

    /**
     * @var int $iloscDniOczekiwaniaNaWydanie
     */
    protected $iloscDniOczekiwaniaNaWydanie = null;

    /**
     * @var \DateTime $oczekiwanyTerminDoreczenia
     */
    protected $oczekiwanyTerminDoreczenia = null;

    /**
     * @var terminRodzajPlusType $terminRodzajPlus
     */
    protected $terminRodzajPlus = null;

    /**
     * @param guidType $guid
     * @param guidType $pakietGuid
     * @param guidType $opakowanieGuid
     * @param opisType $opis
     * @param adresType $adres
     * @param numerNadaniaType $numerNadania
     * @param date $dataDrugiejProbyDoreczenia
     * @param int $drugaProbaDoreczeniaPoLiczbieDni
     * @param boolean $posteRestante
     * @param masaType $masa
     * @param gabarytBiznesowaType $gabaryt
     * @param wartoscType $wartosc
     * @param kwotaTranzakcjiType $kwotaTranzakcji
     * @param boolean $ostroznie
     * @param kategoriaType $kategoria
     * @param iloscPotwierdzenOdbioruType $iloscPotwierdzenOdbioru
     * @param boolean $zwrotDoslanie
     * @param eKontaktType $eKontaktAdresata
     * @param eSposobPowiadomieniaType $eSposobPowiadomieniaAdresata
     * @param numerPrzesylkiKlientaType $numerPrzesylkiKlienta
     * @param int $iloscDniOczekiwaniaNaWydanie
     * @param \DateTime $oczekiwanyTerminDoreczenia
     * @param terminRodzajPlusType $terminRodzajPlus
     */
    public function __construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania, $dataDrugiejProbyDoreczenia, $drugaProbaDoreczeniaPoLiczbieDni, $posteRestante, $masa, $gabaryt, $wartosc, $kwotaTranzakcji, $ostroznie, $kategoria, $iloscPotwierdzenOdbioru, $zwrotDoslanie, $eKontaktAdresata, $eSposobPowiadomieniaAdresata, $numerPrzesylkiKlienta, $iloscDniOczekiwaniaNaWydanie, \DateTime $oczekiwanyTerminDoreczenia, $terminRodzajPlus)
    {
      parent::__construct($guid, $pakietGuid, $opakowanieGuid, $opis, $adres, $numerNadania);
      $this->dataDrugiejProbyDoreczenia = $dataDrugiejProbyDoreczenia;
      $this->drugaProbaDoreczeniaPoLiczbieDni = $drugaProbaDoreczeniaPoLiczbieDni;
      $this->posteRestante = $posteRestante;
      $this->masa = $masa;
      $this->gabaryt = $gabaryt;
      $this->wartosc = $wartosc;
      $this->kwotaTranzakcji = $kwotaTranzakcji;
      $this->ostroznie = $ostroznie;
      $this->kategoria = $kategoria;
      $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;
      $this->zwrotDoslanie = $zwrotDoslanie;
      $this->eKontaktAdresata = $eKontaktAdresata;
      $this->eSposobPowiadomieniaAdresata = $eSposobPowiadomieniaAdresata;
      $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
      $this->iloscDniOczekiwaniaNaWydanie = $iloscDniOczekiwaniaNaWydanie;
      $this->oczekiwanyTerminDoreczenia = $oczekiwanyTerminDoreczenia->format(\DateTime::ATOM);
      $this->terminRodzajPlus = $terminRodzajPlus;
    }

    /**
     * @return pobranieType
     */
    public function getPobranie()
    {
      return $this->pobranie;
    }

    /**
     * @param pobranieType $pobranie
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaBiznesowaPlusType
     */
    public function setPobranie($pobranie)
    {
      $this->pobranie = $pobranie;
      return $this;
    }

    /**
     * @return placowkaPocztowaType
     */
    public function getUrzadWydaniaPrzesylki()
    {
      return $this->urzadWydaniaPrzesylki;
    }

    /**
     * @param placowkaPocztowaType $urzadWydaniaPrzesylki
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaBiznesowaPlusType
     */
    public function setUrzadWydaniaPrzesylki($urzadWydaniaPrzesylki)
    {
      $this->urzadWydaniaPrzesylki = $urzadWydaniaPrzesylki;
      return $this;
    }

    /**
     * @return subPrzesylkaBiznesowaPlusType
     */
    public function getSubPrzesylka()
    {
      return $this->subPrzesylka;
    }

    /**
     * @param subPrzesylkaBiznesowaPlusType $subPrzesylka
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaBiznesowaPlusType
     */
    public function setSubPrzesylka($subPrzesylka)
    {
      $this->subPrzesylka = $subPrzesylka;
      return $this;
    }

    /**
     * @return date
     */
    public function getDataDrugiejProbyDoreczenia()
    {
      return $this->dataDrugiejProbyDoreczenia;
    }

    /**
     * @param date $dataDrugiejProbyDoreczenia
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaBiznesowaPlusType
     */
    public function setDataDrugiejProbyDoreczenia($dataDrugiejProbyDoreczenia)
    {
      $this->dataDrugiejProbyDoreczenia = $dataDrugiejProbyDoreczenia;
      return $this;
    }

    /**
     * @return int
     */
    public function getDrugaProbaDoreczeniaPoLiczbieDni()
    {
      return $this->drugaProbaDoreczeniaPoLiczbieDni;
    }

    /**
     * @param int $drugaProbaDoreczeniaPoLiczbieDni
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaBiznesowaPlusType
     */
    public function setDrugaProbaDoreczeniaPoLiczbieDni($drugaProbaDoreczeniaPoLiczbieDni)
    {
      $this->drugaProbaDoreczeniaPoLiczbieDni = $drugaProbaDoreczeniaPoLiczbieDni;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPosteRestante()
    {
      return $this->posteRestante;
    }

    /**
     * @param boolean $posteRestante
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaBiznesowaPlusType
     */
    public function setPosteRestante($posteRestante)
    {
      $this->posteRestante = $posteRestante;
      return $this;
    }

    /**
     * @return masaType
     */
    public function getMasa()
    {
      return $this->masa;
    }

    /**
     * @param masaType $masa
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaBiznesowaPlusType
     */
    public function setMasa($masa)
    {
      $this->masa = $masa;
      return $this;
    }

    /**
     * @return gabarytBiznesowaType
     */
    public function getGabaryt()
    {
      return $this->gabaryt;
    }

    /**
     * @param gabarytBiznesowaType $gabaryt
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaBiznesowaPlusType
     */
    public function setGabaryt($gabaryt)
    {
      $this->gabaryt = $gabaryt;
      return $this;
    }

    /**
     * @return wartoscType
     */
    public function getWartosc()
    {
      return $this->wartosc;
    }

    /**
     * @param wartoscType $wartosc
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaBiznesowaPlusType
     */
    public function setWartosc($wartosc)
    {
      $this->wartosc = $wartosc;
      return $this;
    }

    /**
     * @return kwotaTranzakcjiType
     */
    public function getKwotaTranzakcji()
    {
      return $this->kwotaTranzakcji;
    }

    /**
     * @param kwotaTranzakcjiType $kwotaTranzakcji
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaBiznesowaPlusType
     */
    public function setKwotaTranzakcji($kwotaTranzakcji)
    {
      $this->kwotaTranzakcji = $kwotaTranzakcji;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOstroznie()
    {
      return $this->ostroznie;
    }

    /**
     * @param boolean $ostroznie
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaBiznesowaPlusType
     */
    public function setOstroznie($ostroznie)
    {
      $this->ostroznie = $ostroznie;
      return $this;
    }

    /**
     * @return kategoriaType
     */
    public function getKategoria()
    {
      return $this->kategoria;
    }

    /**
     * @param kategoriaType $kategoria
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaBiznesowaPlusType
     */
    public function setKategoria($kategoria)
    {
      $this->kategoria = $kategoria;
      return $this;
    }

    /**
     * @return iloscPotwierdzenOdbioruType
     */
    public function getIloscPotwierdzenOdbioru()
    {
      return $this->iloscPotwierdzenOdbioru;
    }

    /**
     * @param iloscPotwierdzenOdbioruType $iloscPotwierdzenOdbioru
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaBiznesowaPlusType
     */
    public function setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
    {
      $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getZwrotDoslanie()
    {
      return $this->zwrotDoslanie;
    }

    /**
     * @param boolean $zwrotDoslanie
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaBiznesowaPlusType
     */
    public function setZwrotDoslanie($zwrotDoslanie)
    {
      $this->zwrotDoslanie = $zwrotDoslanie;
      return $this;
    }

    /**
     * @return eKontaktType
     */
    public function getEKontaktAdresata()
    {
      return $this->eKontaktAdresata;
    }

    /**
     * @param eKontaktType $eKontaktAdresata
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaBiznesowaPlusType
     */
    public function setEKontaktAdresata($eKontaktAdresata)
    {
      $this->eKontaktAdresata = $eKontaktAdresata;
      return $this;
    }

    /**
     * @return eSposobPowiadomieniaType
     */
    public function getESposobPowiadomieniaAdresata()
    {
      return $this->eSposobPowiadomieniaAdresata;
    }

    /**
     * @param eSposobPowiadomieniaType $eSposobPowiadomieniaAdresata
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaBiznesowaPlusType
     */
    public function setESposobPowiadomieniaAdresata($eSposobPowiadomieniaAdresata)
    {
      $this->eSposobPowiadomieniaAdresata = $eSposobPowiadomieniaAdresata;
      return $this;
    }

    /**
     * @return numerPrzesylkiKlientaType
     */
    public function getNumerPrzesylkiKlienta()
    {
      return $this->numerPrzesylkiKlienta;
    }

    /**
     * @param numerPrzesylkiKlientaType $numerPrzesylkiKlienta
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaBiznesowaPlusType
     */
    public function setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
    {
      $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
      return $this;
    }

    /**
     * @return int
     */
    public function getIloscDniOczekiwaniaNaWydanie()
    {
      return $this->iloscDniOczekiwaniaNaWydanie;
    }

    /**
     * @param int $iloscDniOczekiwaniaNaWydanie
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaBiznesowaPlusType
     */
    public function setIloscDniOczekiwaniaNaWydanie($iloscDniOczekiwaniaNaWydanie)
    {
      $this->iloscDniOczekiwaniaNaWydanie = $iloscDniOczekiwaniaNaWydanie;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getOczekiwanyTerminDoreczenia()
    {
      if ($this->oczekiwanyTerminDoreczenia == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->oczekiwanyTerminDoreczenia);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $oczekiwanyTerminDoreczenia
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaBiznesowaPlusType
     */
    public function setOczekiwanyTerminDoreczenia(\DateTime $oczekiwanyTerminDoreczenia)
    {
      $this->oczekiwanyTerminDoreczenia = $oczekiwanyTerminDoreczenia->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return terminRodzajPlusType
     */
    public function getTerminRodzajPlus()
    {
      return $this->terminRodzajPlus;
    }

    /**
     * @param terminRodzajPlusType $terminRodzajPlus
     * @return \PocztaPolska\ElektronicznyNadawca\przesylkaBiznesowaPlusType
     */
    public function setTerminRodzajPlus($terminRodzajPlus)
    {
      $this->terminRodzajPlus = $terminRodzajPlus;
      return $this;
    }

}
