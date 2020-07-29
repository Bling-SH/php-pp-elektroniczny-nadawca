<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca\StructType;

/**
 * This class stands for przesylkaPaletowaType StructType.
 */
class PrzesylkaPaletowaType extends PrzesylkaRejestrowanaType
{
    /**
     * The paleta
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaletaType
     */
    public $paleta;
    /**
     * The miejsceOdbioru
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType
     */
    public $miejsceOdbioru;
    /**
     * The miejsceDoreczenia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType
     */
    public $miejsceDoreczenia;
    /**
     * The platnik
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlatnikType
     */
    public $platnik;
    /**
     * The pobranie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType
     */
    public $pobranie;
    /**
     * The subPaleta
     * Meta information extracted from the WSDL
     * - maxOccurs: 32
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubPrzesylkaPaletowaType[]
     */
    public $subPaleta;
    /**
     * The daneSent
     * Meta information extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DaneSentType[]
     */
    public $daneSent;
    /**
     * The awizacja
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     *
     * @var \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AwizacjaType
     */
    public $awizacja;
    /**
     * The zawartosc.
     *
     * @var string
     */
    public $zawartosc;
    /**
     * The masa
     * Meta information extracted from the WSDL
     * - documentation: masa przesyłki podana w gramach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 1.
     *
     * @var int
     */
    public $masa;
    /**
     * The dataZaladunku.
     *
     * @var string
     */
    public $dataZaladunku;
    /**
     * The dataDostawy.
     *
     * @var string
     */
    public $dataDostawy;
    /**
     * The wartosc
     * Meta information extracted from the WSDL
     * - documentation: zadeklarowana wartość przesyłki w groszach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 0.
     *
     * @var int
     */
    public $wartosc;
    /**
     * The iloscZwracanychPaletEUR.
     *
     * @var int
     */
    public $iloscZwracanychPaletEUR;
    /**
     * The zalaczonaFV.
     *
     * @var string
     */
    public $zalaczonaFV;
    /**
     * The zalaczonyWZ.
     *
     * @var string
     */
    public $zalaczonyWZ;
    /**
     * The zalaczoneInne.
     *
     * @var string
     */
    public $zalaczoneInne;
    /**
     * The zwracanaFV.
     *
     * @var string
     */
    public $zwracanaFV;
    /**
     * The zwracanyWZ.
     *
     * @var string
     */
    public $zwracanyWZ;
    /**
     * The zwracaneInne.
     *
     * @var string
     */
    public $zwracaneInne;
    /**
     * The powiadomienieNadawcy.
     *
     * @var string
     */
    public $powiadomienieNadawcy;
    /**
     * The powiadomienieOdbiorcy.
     *
     * @var string
     */
    public $powiadomienieOdbiorcy;
    /**
     * The dostawaWSobote.
     *
     * @var bool
     */
    public $dostawaWSobote;
    /**
     * The przygotowanieDokumentowPrzewozowych.
     *
     * @var bool
     */
    public $przygotowanieDokumentowPrzewozowych;
    /**
     * The dostawaSamochodemDedykowanym.
     *
     * @var bool
     */
    public $dostawaSamochodemDedykowanym;
    /**
     * The zmianaDanychAdresowych.
     *
     * @var bool
     */
    public $zmianaDanychAdresowych;
    /**
     * The ustalenieTerminuDostawy.
     *
     * @var bool
     */
    public $ustalenieTerminuDostawy;
    /**
     * The samochodZWinda.
     *
     * @var bool
     */
    public $samochodZWinda;
    /**
     * The zabranieOpakowania.
     *
     * @var bool
     */
    public $zabranieOpakowania;
    /**
     * The wniesienie.
     *
     * @var bool
     */
    public $wniesienie;
    /**
     * The awizoSMS.
     *
     * @var bool
     */
    public $awizoSMS;

    /**
     * Constructor method for przesylkaPaletowaType.
     *
     * @uses PrzesylkaPaletowaType::setPaleta()
     * @uses PrzesylkaPaletowaType::setMiejsceOdbioru()
     * @uses PrzesylkaPaletowaType::setMiejsceDoreczenia()
     * @uses PrzesylkaPaletowaType::setPlatnik()
     * @uses PrzesylkaPaletowaType::setPobranie()
     * @uses PrzesylkaPaletowaType::setSubPaleta()
     * @uses PrzesylkaPaletowaType::setDaneSent()
     * @uses PrzesylkaPaletowaType::setAwizacja()
     * @uses PrzesylkaPaletowaType::setZawartosc()
     * @uses PrzesylkaPaletowaType::setMasa()
     * @uses PrzesylkaPaletowaType::setDataZaladunku()
     * @uses PrzesylkaPaletowaType::setDataDostawy()
     * @uses PrzesylkaPaletowaType::setWartosc()
     * @uses PrzesylkaPaletowaType::setIloscZwracanychPaletEUR()
     * @uses PrzesylkaPaletowaType::setZalaczonaFV()
     * @uses PrzesylkaPaletowaType::setZalaczonyWZ()
     * @uses PrzesylkaPaletowaType::setZalaczoneInne()
     * @uses PrzesylkaPaletowaType::setZwracanaFV()
     * @uses PrzesylkaPaletowaType::setZwracanyWZ()
     * @uses PrzesylkaPaletowaType::setZwracaneInne()
     * @uses PrzesylkaPaletowaType::setPowiadomienieNadawcy()
     * @uses PrzesylkaPaletowaType::setPowiadomienieOdbiorcy()
     * @uses PrzesylkaPaletowaType::setDostawaWSobote()
     * @uses PrzesylkaPaletowaType::setPrzygotowanieDokumentowPrzewozowych()
     * @uses PrzesylkaPaletowaType::setDostawaSamochodemDedykowanym()
     * @uses PrzesylkaPaletowaType::setZmianaDanychAdresowych()
     * @uses PrzesylkaPaletowaType::setUstalenieTerminuDostawy()
     * @uses PrzesylkaPaletowaType::setSamochodZWinda()
     * @uses PrzesylkaPaletowaType::setZabranieOpakowania()
     * @uses PrzesylkaPaletowaType::setWniesienie()
     * @uses PrzesylkaPaletowaType::setAwizoSMS()
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaletaType                 $paleta
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType                  $miejsceOdbioru
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType                  $miejsceDoreczenia
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlatnikType                $platnik
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType               $pobranie
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubPrzesylkaPaletowaType[] $subPaleta
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DaneSentType[]             $daneSent
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AwizacjaType               $awizacja
     * @param string                                                                         $zawartosc
     * @param int                                                                            $masa
     * @param string                                                                         $dataZaladunku
     * @param string                                                                         $dataDostawy
     * @param int                                                                            $wartosc
     * @param int                                                                            $iloscZwracanychPaletEUR
     * @param string                                                                         $zalaczonaFV
     * @param string                                                                         $zalaczonyWZ
     * @param string                                                                         $zalaczoneInne
     * @param string                                                                         $zwracanaFV
     * @param string                                                                         $zwracanyWZ
     * @param string                                                                         $zwracaneInne
     * @param string                                                                         $powiadomienieNadawcy
     * @param string                                                                         $powiadomienieOdbiorcy
     * @param bool                                                                           $dostawaWSobote
     * @param bool                                                                           $przygotowanieDokumentowPrzewozowych
     * @param bool                                                                           $dostawaSamochodemDedykowanym
     * @param bool                                                                           $zmianaDanychAdresowych
     * @param bool                                                                           $ustalenieTerminuDostawy
     * @param bool                                                                           $samochodZWinda
     * @param bool                                                                           $zabranieOpakowania
     * @param bool                                                                           $wniesienie
     * @param bool                                                                           $awizoSMS
     */
    public function __construct(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaletaType $paleta = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $miejsceOdbioru = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $miejsceDoreczenia = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlatnikType $platnik = null, \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType $pobranie = null, array $subPaleta = [], array $daneSent = [], \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AwizacjaType $awizacja = null, $zawartosc = null, $masa = null, $dataZaladunku = null, $dataDostawy = null, $wartosc = null, $iloscZwracanychPaletEUR = null, $zalaczonaFV = null, $zalaczonyWZ = null, $zalaczoneInne = null, $zwracanaFV = null, $zwracanyWZ = null, $zwracaneInne = null, $powiadomienieNadawcy = null, $powiadomienieOdbiorcy = null, $dostawaWSobote = null, $przygotowanieDokumentowPrzewozowych = null, $dostawaSamochodemDedykowanym = null, $zmianaDanychAdresowych = null, $ustalenieTerminuDostawy = null, $samochodZWinda = null, $zabranieOpakowania = null, $wniesienie = null, $awizoSMS = null)
    {
        $this
            ->setPaleta($paleta)
            ->setMiejsceOdbioru($miejsceOdbioru)
            ->setMiejsceDoreczenia($miejsceDoreczenia)
            ->setPlatnik($platnik)
            ->setPobranie($pobranie)
            ->setSubPaleta($subPaleta)
            ->setDaneSent($daneSent)
            ->setAwizacja($awizacja)
            ->setZawartosc($zawartosc)
            ->setMasa($masa)
            ->setDataZaladunku($dataZaladunku)
            ->setDataDostawy($dataDostawy)
            ->setWartosc($wartosc)
            ->setIloscZwracanychPaletEUR($iloscZwracanychPaletEUR)
            ->setZalaczonaFV($zalaczonaFV)
            ->setZalaczonyWZ($zalaczonyWZ)
            ->setZalaczoneInne($zalaczoneInne)
            ->setZwracanaFV($zwracanaFV)
            ->setZwracanyWZ($zwracanyWZ)
            ->setZwracaneInne($zwracaneInne)
            ->setPowiadomienieNadawcy($powiadomienieNadawcy)
            ->setPowiadomienieOdbiorcy($powiadomienieOdbiorcy)
            ->setDostawaWSobote($dostawaWSobote)
            ->setPrzygotowanieDokumentowPrzewozowych($przygotowanieDokumentowPrzewozowych)
            ->setDostawaSamochodemDedykowanym($dostawaSamochodemDedykowanym)
            ->setZmianaDanychAdresowych($zmianaDanychAdresowych)
            ->setUstalenieTerminuDostawy($ustalenieTerminuDostawy)
            ->setSamochodZWinda($samochodZWinda)
            ->setZabranieOpakowania($zabranieOpakowania)
            ->setWniesienie($wniesienie)
            ->setAwizoSMS($awizoSMS);
    }

    /**
     * Get paleta value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaletaType
     */
    public function getPaleta()
    {
        return $this->paleta;
    }

    /**
     * Set paleta value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaletaType $paleta
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setPaleta(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PaletaType $paleta = null)
    {
        $this->paleta = $paleta;

        return $this;
    }

    /**
     * Get miejsceOdbioru value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType|null
     */
    public function getMiejsceOdbioru()
    {
        return $this->miejsceOdbioru;
    }

    /**
     * Set miejsceOdbioru value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $miejsceOdbioru
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setMiejsceOdbioru(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $miejsceOdbioru = null)
    {
        $this->miejsceOdbioru = $miejsceOdbioru;

        return $this;
    }

    /**
     * Get miejsceDoreczenia value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType|null
     */
    public function getMiejsceDoreczenia()
    {
        return $this->miejsceDoreczenia;
    }

    /**
     * Set miejsceDoreczenia value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $miejsceDoreczenia
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setMiejsceDoreczenia(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AdresType $miejsceDoreczenia = null)
    {
        $this->miejsceDoreczenia = $miejsceDoreczenia;

        return $this;
    }

    /**
     * Get platnik value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlatnikType|null
     */
    public function getPlatnik()
    {
        return $this->platnik;
    }

    /**
     * Set platnik value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlatnikType $platnik
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setPlatnik(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PlatnikType $platnik = null)
    {
        $this->platnik = $platnik;

        return $this;
    }

    /**
     * Get pobranie value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType|null
     */
    public function getPobranie()
    {
        return $this->pobranie;
    }

    /**
     * Set pobranie value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType $pobranie
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setPobranie(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\PobranieType $pobranie = null)
    {
        $this->pobranie = $pobranie;

        return $this;
    }

    /**
     * Get subPaleta value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubPrzesylkaPaletowaType[]|null
     */
    public function getSubPaleta()
    {
        return $this->subPaleta;
    }

    /**
     * This method is responsible for validating the values passed to the setSubPaleta method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubPaleta method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSubPaletaForArrayConstraintsFromSetSubPaleta(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $przesylkaPaletowaTypeSubPaletaItem) {
            // validation for constraint: itemType
            if (!$przesylkaPaletowaTypeSubPaletaItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubPrzesylkaPaletowaType) {
                $invalidValues[] = is_object($przesylkaPaletowaTypeSubPaletaItem) ? get_class($przesylkaPaletowaTypeSubPaletaItem) : sprintf('%s(%s)', gettype($przesylkaPaletowaTypeSubPaletaItem), var_export($przesylkaPaletowaTypeSubPaletaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The subPaleta property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubPrzesylkaPaletowaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set subPaleta value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubPrzesylkaPaletowaType[] $subPaleta
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setSubPaleta(array $subPaleta = [])
    {
        // validation for constraint: array
        if ('' !== ($subPaletaArrayErrorMessage = self::validateSubPaletaForArrayConstraintsFromSetSubPaleta($subPaleta))) {
            throw new \InvalidArgumentException($subPaletaArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(32)
        if (is_array($subPaleta) && count($subPaleta) > 32) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 32', count($subPaleta)), __LINE__);
        }
        $this->subPaleta = $subPaleta;

        return $this;
    }

    /**
     * Add item to subPaleta value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function addToSubPaleta(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubPrzesylkaPaletowaType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubPrzesylkaPaletowaType) {
            throw new \InvalidArgumentException(sprintf('The subPaleta property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\SubPrzesylkaPaletowaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(32)
        if (is_array($this->subPaleta) && count($this->subPaleta) >= 32) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 32', count($this->subPaleta)), __LINE__);
        }
        $this->subPaleta[] = $item;

        return $this;
    }

    /**
     * Get daneSent value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DaneSentType[]|null
     */
    public function getDaneSent()
    {
        return $this->daneSent;
    }

    /**
     * This method is responsible for validating the values passed to the setDaneSent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDaneSent method.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDaneSentForArrayConstraintsFromSetDaneSent(array $values = [])
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $przesylkaPaletowaTypeDaneSentItem) {
            // validation for constraint: itemType
            if (!$przesylkaPaletowaTypeDaneSentItem instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DaneSentType) {
                $invalidValues[] = is_object($przesylkaPaletowaTypeDaneSentItem) ? get_class($przesylkaPaletowaTypeDaneSentItem) : sprintf('%s(%s)', gettype($przesylkaPaletowaTypeDaneSentItem), var_export($przesylkaPaletowaTypeDaneSentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The daneSent property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DaneSentType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set daneSent value.
     *
     * @throws \InvalidArgumentException
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DaneSentType[] $daneSent
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setDaneSent(array $daneSent = [])
    {
        // validation for constraint: array
        if ('' !== ($daneSentArrayErrorMessage = self::validateDaneSentForArrayConstraintsFromSetDaneSent($daneSent))) {
            throw new \InvalidArgumentException($daneSentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($daneSent) && count($daneSent) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10', count($daneSent)), __LINE__);
        }
        $this->daneSent = $daneSent;

        return $this;
    }

    /**
     * Add item to daneSent value.
     *
     * @throws \InvalidArgumentException
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function addToDaneSent(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\DaneSentType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DaneSentType) {
            throw new \InvalidArgumentException(sprintf('The daneSent property can only contain items of type \Bling\PocztaPolska\ElektronicznyNadawca\StructType\DaneSentType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($this->daneSent) && count($this->daneSent) >= 10) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10', count($this->daneSent)), __LINE__);
        }
        $this->daneSent[] = $item;

        return $this;
    }

    /**
     * Get awizacja value.
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AwizacjaType|null
     */
    public function getAwizacja()
    {
        return $this->awizacja;
    }

    /**
     * Set awizacja value.
     *
     * @param \Bling\PocztaPolska\ElektronicznyNadawca\StructType\AwizacjaType $awizacja
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setAwizacja(\Bling\PocztaPolska\ElektronicznyNadawca\StructType\AwizacjaType $awizacja = null)
    {
        $this->awizacja = $awizacja;

        return $this;
    }

    /**
     * Get zawartosc value.
     *
     * @return string|null
     */
    public function getZawartosc()
    {
        return $this->zawartosc;
    }

    /**
     * Set zawartosc value.
     *
     * @param string $zawartosc
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setZawartosc($zawartosc = null)
    {
        // validation for constraint: string
        if (!is_null($zawartosc) && !is_string($zawartosc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zawartosc, true), gettype($zawartosc)), __LINE__);
        }
        $this->zawartosc = $zawartosc;

        return $this;
    }

    /**
     * Get masa value.
     *
     * @return int|null
     */
    public function getMasa()
    {
        return $this->masa;
    }

    /**
     * Set masa value.
     *
     * @param int $masa
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setMasa($masa = null)
    {
        // validation for constraint: int
        if (!is_null($masa) && !(is_int($masa) || ctype_digit($masa))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($masa, true), gettype($masa)), __LINE__);
        }
        // validation for constraint: maxInclusive(9999999)
        if (!is_null($masa) && $masa > 9999999) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9999999', var_export($masa, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($masa) && $masa < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($masa, true)), __LINE__);
        }
        $this->masa = $masa;

        return $this;
    }

    /**
     * Get dataZaladunku value.
     *
     * @return string|null
     */
    public function getDataZaladunku()
    {
        return $this->dataZaladunku;
    }

    /**
     * Set dataZaladunku value.
     *
     * @param string $dataZaladunku
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setDataZaladunku($dataZaladunku = null)
    {
        // validation for constraint: string
        if (!is_null($dataZaladunku) && !is_string($dataZaladunku)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataZaladunku, true), gettype($dataZaladunku)), __LINE__);
        }
        $this->dataZaladunku = $dataZaladunku;

        return $this;
    }

    /**
     * Get dataDostawy value.
     *
     * @return string|null
     */
    public function getDataDostawy()
    {
        return $this->dataDostawy;
    }

    /**
     * Set dataDostawy value.
     *
     * @param string $dataDostawy
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setDataDostawy($dataDostawy = null)
    {
        // validation for constraint: string
        if (!is_null($dataDostawy) && !is_string($dataDostawy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataDostawy, true), gettype($dataDostawy)), __LINE__);
        }
        $this->dataDostawy = $dataDostawy;

        return $this;
    }

    /**
     * Get wartosc value.
     *
     * @return int|null
     */
    public function getWartosc()
    {
        return $this->wartosc;
    }

    /**
     * Set wartosc value.
     *
     * @param int $wartosc
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setWartosc($wartosc = null)
    {
        // validation for constraint: int
        if (!is_null($wartosc) && !(is_int($wartosc) || ctype_digit($wartosc))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($wartosc, true), gettype($wartosc)), __LINE__);
        }
        // validation for constraint: maxInclusive(9999999)
        if (!is_null($wartosc) && $wartosc > 9999999) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9999999', var_export($wartosc, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($wartosc) && $wartosc < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($wartosc, true)), __LINE__);
        }
        $this->wartosc = $wartosc;

        return $this;
    }

    /**
     * Get iloscZwracanychPaletEUR value.
     *
     * @return int|null
     */
    public function getIloscZwracanychPaletEUR()
    {
        return $this->iloscZwracanychPaletEUR;
    }

    /**
     * Set iloscZwracanychPaletEUR value.
     *
     * @param int $iloscZwracanychPaletEUR
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setIloscZwracanychPaletEUR($iloscZwracanychPaletEUR = null)
    {
        // validation for constraint: int
        if (!is_null($iloscZwracanychPaletEUR) && !(is_int($iloscZwracanychPaletEUR) || ctype_digit($iloscZwracanychPaletEUR))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iloscZwracanychPaletEUR, true), gettype($iloscZwracanychPaletEUR)), __LINE__);
        }
        $this->iloscZwracanychPaletEUR = $iloscZwracanychPaletEUR;

        return $this;
    }

    /**
     * Get zalaczonaFV value.
     *
     * @return string|null
     */
    public function getZalaczonaFV()
    {
        return $this->zalaczonaFV;
    }

    /**
     * Set zalaczonaFV value.
     *
     * @param string $zalaczonaFV
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setZalaczonaFV($zalaczonaFV = null)
    {
        // validation for constraint: string
        if (!is_null($zalaczonaFV) && !is_string($zalaczonaFV)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zalaczonaFV, true), gettype($zalaczonaFV)), __LINE__);
        }
        $this->zalaczonaFV = $zalaczonaFV;

        return $this;
    }

    /**
     * Get zalaczonyWZ value.
     *
     * @return string|null
     */
    public function getZalaczonyWZ()
    {
        return $this->zalaczonyWZ;
    }

    /**
     * Set zalaczonyWZ value.
     *
     * @param string $zalaczonyWZ
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setZalaczonyWZ($zalaczonyWZ = null)
    {
        // validation for constraint: string
        if (!is_null($zalaczonyWZ) && !is_string($zalaczonyWZ)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zalaczonyWZ, true), gettype($zalaczonyWZ)), __LINE__);
        }
        $this->zalaczonyWZ = $zalaczonyWZ;

        return $this;
    }

    /**
     * Get zalaczoneInne value.
     *
     * @return string|null
     */
    public function getZalaczoneInne()
    {
        return $this->zalaczoneInne;
    }

    /**
     * Set zalaczoneInne value.
     *
     * @param string $zalaczoneInne
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setZalaczoneInne($zalaczoneInne = null)
    {
        // validation for constraint: string
        if (!is_null($zalaczoneInne) && !is_string($zalaczoneInne)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zalaczoneInne, true), gettype($zalaczoneInne)), __LINE__);
        }
        $this->zalaczoneInne = $zalaczoneInne;

        return $this;
    }

    /**
     * Get zwracanaFV value.
     *
     * @return string|null
     */
    public function getZwracanaFV()
    {
        return $this->zwracanaFV;
    }

    /**
     * Set zwracanaFV value.
     *
     * @param string $zwracanaFV
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setZwracanaFV($zwracanaFV = null)
    {
        // validation for constraint: string
        if (!is_null($zwracanaFV) && !is_string($zwracanaFV)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zwracanaFV, true), gettype($zwracanaFV)), __LINE__);
        }
        $this->zwracanaFV = $zwracanaFV;

        return $this;
    }

    /**
     * Get zwracanyWZ value.
     *
     * @return string|null
     */
    public function getZwracanyWZ()
    {
        return $this->zwracanyWZ;
    }

    /**
     * Set zwracanyWZ value.
     *
     * @param string $zwracanyWZ
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setZwracanyWZ($zwracanyWZ = null)
    {
        // validation for constraint: string
        if (!is_null($zwracanyWZ) && !is_string($zwracanyWZ)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zwracanyWZ, true), gettype($zwracanyWZ)), __LINE__);
        }
        $this->zwracanyWZ = $zwracanyWZ;

        return $this;
    }

    /**
     * Get zwracaneInne value.
     *
     * @return string|null
     */
    public function getZwracaneInne()
    {
        return $this->zwracaneInne;
    }

    /**
     * Set zwracaneInne value.
     *
     * @param string $zwracaneInne
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setZwracaneInne($zwracaneInne = null)
    {
        // validation for constraint: string
        if (!is_null($zwracaneInne) && !is_string($zwracaneInne)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zwracaneInne, true), gettype($zwracaneInne)), __LINE__);
        }
        $this->zwracaneInne = $zwracaneInne;

        return $this;
    }

    /**
     * Get powiadomienieNadawcy value.
     *
     * @return string|null
     */
    public function getPowiadomienieNadawcy()
    {
        return $this->powiadomienieNadawcy;
    }

    /**
     * Set powiadomienieNadawcy value.
     *
     * @param string $powiadomienieNadawcy
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setPowiadomienieNadawcy($powiadomienieNadawcy = null)
    {
        // validation for constraint: string
        if (!is_null($powiadomienieNadawcy) && !is_string($powiadomienieNadawcy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($powiadomienieNadawcy, true), gettype($powiadomienieNadawcy)), __LINE__);
        }
        $this->powiadomienieNadawcy = $powiadomienieNadawcy;

        return $this;
    }

    /**
     * Get powiadomienieOdbiorcy value.
     *
     * @return string|null
     */
    public function getPowiadomienieOdbiorcy()
    {
        return $this->powiadomienieOdbiorcy;
    }

    /**
     * Set powiadomienieOdbiorcy value.
     *
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ESposobPowiadomieniaType::valueIsValid()
     * @uses \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ESposobPowiadomieniaType::getValidValues()
     *
     * @throws \InvalidArgumentException
     *
     * @param string $powiadomienieOdbiorcy
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setPowiadomienieOdbiorcy($powiadomienieOdbiorcy = null)
    {
        // validation for constraint: enumeration
        if (!\Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ESposobPowiadomieniaType::valueIsValid($powiadomienieOdbiorcy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ESposobPowiadomieniaType', is_array($powiadomienieOdbiorcy) ? implode(', ', $powiadomienieOdbiorcy) : var_export($powiadomienieOdbiorcy, true), implode(', ', \Bling\PocztaPolska\ElektronicznyNadawca\EnumType\ESposobPowiadomieniaType::getValidValues())), __LINE__);
        }
        $this->powiadomienieOdbiorcy = $powiadomienieOdbiorcy;

        return $this;
    }

    /**
     * Get dostawaWSobote value.
     *
     * @return bool|null
     */
    public function getDostawaWSobote()
    {
        return $this->dostawaWSobote;
    }

    /**
     * Set dostawaWSobote value.
     *
     * @param bool $dostawaWSobote
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setDostawaWSobote($dostawaWSobote = null)
    {
        // validation for constraint: boolean
        if (!is_null($dostawaWSobote) && !is_bool($dostawaWSobote)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dostawaWSobote, true), gettype($dostawaWSobote)), __LINE__);
        }
        $this->dostawaWSobote = $dostawaWSobote;

        return $this;
    }

    /**
     * Get przygotowanieDokumentowPrzewozowych value.
     *
     * @return bool|null
     */
    public function getPrzygotowanieDokumentowPrzewozowych()
    {
        return $this->przygotowanieDokumentowPrzewozowych;
    }

    /**
     * Set przygotowanieDokumentowPrzewozowych value.
     *
     * @param bool $przygotowanieDokumentowPrzewozowych
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setPrzygotowanieDokumentowPrzewozowych($przygotowanieDokumentowPrzewozowych = null)
    {
        // validation for constraint: boolean
        if (!is_null($przygotowanieDokumentowPrzewozowych) && !is_bool($przygotowanieDokumentowPrzewozowych)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($przygotowanieDokumentowPrzewozowych, true), gettype($przygotowanieDokumentowPrzewozowych)), __LINE__);
        }
        $this->przygotowanieDokumentowPrzewozowych = $przygotowanieDokumentowPrzewozowych;

        return $this;
    }

    /**
     * Get dostawaSamochodemDedykowanym value.
     *
     * @return bool|null
     */
    public function getDostawaSamochodemDedykowanym()
    {
        return $this->dostawaSamochodemDedykowanym;
    }

    /**
     * Set dostawaSamochodemDedykowanym value.
     *
     * @param bool $dostawaSamochodemDedykowanym
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setDostawaSamochodemDedykowanym($dostawaSamochodemDedykowanym = null)
    {
        // validation for constraint: boolean
        if (!is_null($dostawaSamochodemDedykowanym) && !is_bool($dostawaSamochodemDedykowanym)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dostawaSamochodemDedykowanym, true), gettype($dostawaSamochodemDedykowanym)), __LINE__);
        }
        $this->dostawaSamochodemDedykowanym = $dostawaSamochodemDedykowanym;

        return $this;
    }

    /**
     * Get zmianaDanychAdresowych value.
     *
     * @return bool|null
     */
    public function getZmianaDanychAdresowych()
    {
        return $this->zmianaDanychAdresowych;
    }

    /**
     * Set zmianaDanychAdresowych value.
     *
     * @param bool $zmianaDanychAdresowych
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setZmianaDanychAdresowych($zmianaDanychAdresowych = null)
    {
        // validation for constraint: boolean
        if (!is_null($zmianaDanychAdresowych) && !is_bool($zmianaDanychAdresowych)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($zmianaDanychAdresowych, true), gettype($zmianaDanychAdresowych)), __LINE__);
        }
        $this->zmianaDanychAdresowych = $zmianaDanychAdresowych;

        return $this;
    }

    /**
     * Get ustalenieTerminuDostawy value.
     *
     * @return bool|null
     */
    public function getUstalenieTerminuDostawy()
    {
        return $this->ustalenieTerminuDostawy;
    }

    /**
     * Set ustalenieTerminuDostawy value.
     *
     * @param bool $ustalenieTerminuDostawy
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setUstalenieTerminuDostawy($ustalenieTerminuDostawy = null)
    {
        // validation for constraint: boolean
        if (!is_null($ustalenieTerminuDostawy) && !is_bool($ustalenieTerminuDostawy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ustalenieTerminuDostawy, true), gettype($ustalenieTerminuDostawy)), __LINE__);
        }
        $this->ustalenieTerminuDostawy = $ustalenieTerminuDostawy;

        return $this;
    }

    /**
     * Get samochodZWinda value.
     *
     * @return bool|null
     */
    public function getSamochodZWinda()
    {
        return $this->samochodZWinda;
    }

    /**
     * Set samochodZWinda value.
     *
     * @param bool $samochodZWinda
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setSamochodZWinda($samochodZWinda = null)
    {
        // validation for constraint: boolean
        if (!is_null($samochodZWinda) && !is_bool($samochodZWinda)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($samochodZWinda, true), gettype($samochodZWinda)), __LINE__);
        }
        $this->samochodZWinda = $samochodZWinda;

        return $this;
    }

    /**
     * Get zabranieOpakowania value.
     *
     * @return bool|null
     */
    public function getZabranieOpakowania()
    {
        return $this->zabranieOpakowania;
    }

    /**
     * Set zabranieOpakowania value.
     *
     * @param bool $zabranieOpakowania
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setZabranieOpakowania($zabranieOpakowania = null)
    {
        // validation for constraint: boolean
        if (!is_null($zabranieOpakowania) && !is_bool($zabranieOpakowania)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($zabranieOpakowania, true), gettype($zabranieOpakowania)), __LINE__);
        }
        $this->zabranieOpakowania = $zabranieOpakowania;

        return $this;
    }

    /**
     * Get wniesienie value.
     *
     * @return bool|null
     */
    public function getWniesienie()
    {
        return $this->wniesienie;
    }

    /**
     * Set wniesienie value.
     *
     * @param bool $wniesienie
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setWniesienie($wniesienie = null)
    {
        // validation for constraint: boolean
        if (!is_null($wniesienie) && !is_bool($wniesienie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($wniesienie, true), gettype($wniesienie)), __LINE__);
        }
        $this->wniesienie = $wniesienie;

        return $this;
    }

    /**
     * Get awizoSMS value.
     *
     * @return bool|null
     */
    public function getAwizoSMS()
    {
        return $this->awizoSMS;
    }

    /**
     * Set awizoSMS value.
     *
     * @param bool $awizoSMS
     *
     * @return \Bling\PocztaPolska\ElektronicznyNadawca\StructType\PrzesylkaPaletowaType
     */
    public function setAwizoSMS($awizoSMS = null)
    {
        // validation for constraint: boolean
        if (!is_null($awizoSMS) && !is_bool($awizoSMS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($awizoSMS, true), gettype($awizoSMS)), __LINE__);
        }
        $this->awizoSMS = $awizoSMS;

        return $this;
    }
}
