<?php
//vendor niemals commiten
namespace Kiki\ComposerQrcode;

require('../vendor/autoload.php');

class Owner
{
    protected $vorname;
    protected $nachname;
    protected $telefonnummer;
    protected $infos;

    public function __construct($vorname, $nachname, $telefonnummer, $infos)
    {
        $this->vorname = $vorname;
        $this->nachname = $nachname;
        $this->telefonnummer = $telefonnummer;
        $this->infos = $infos;
    }

    /**
     * Get the value of vorname
     */
    public function getVorname()
    {
        return $this->vorname;
    }

    /**
     * Get the value of nachname
     */
    public function getNachname()
    {
        return $this->nachname;
    }

    /**
     * Get the value of telefonnummer
     */
    public function getTelefonnummer()
    {
        return $this->telefonnummer;
    }

    /**
     * Get the value of infos
     */
    public function getInfos()
    {
        return $this->infos;
    }

    public function __toString()
    {
        return "Guten Tag, Sie haben mein Haustier gefunden.\n\nHier koennen Sie mich erreichen:\n"
        . $this->getVorname() . $this->getNachname() . "\n"
        . $this->getTelefonnummer() . "\n\n" 
        . "Weitere Anmerkungen: \n"
        . $this->getInfos();
    }
}
