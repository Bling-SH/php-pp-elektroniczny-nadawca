<?php

namespace Bling\PocztaPolska\ElektronicznyNadawca;

class Url
{
    /**
     * Adres URL API wersji produkcyjnej.
     *
     * @var string
     */
    public const API = 'https://e-nadawca.poczta-polska.pl/websrv/en.php';

    /**
     * Adres URL API wersji testowej.
     *
     * @var string
     */
    public const API_TEST = 'https://en-testwebapi.poczta-polska.pl/websrv/en.php';

    /**
     * Adres do pliku WSDL dla wersji produkcyjnej.
     *
     * @var string
     */
    public const WSDL_FILE = 'https://e-nadawca.poczta-polska.pl/websrv/en.wsdl';

    /**
     * Adres do pliku WSDL dla wersji testowej.
     *
     * @var string
     */
    public const WSDL_FILE_TEST = 'https://en-testwebapi.poczta-polska.pl/websrv/en.wsdl';
}