<?php
class App
{

    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $utl = $this->parseUrl();
    }
    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            // Recupera il parametro 'url' dalla query string e rimuove eventuali slash alla fine
            $raw_url = rtrim($_GET['url'], '/');

            // Pulisce la URL per rimuovere caratteri non validi
            $sanitized_url = filter_var($raw_url, FILTER_SANITIZE_URL);

            // Divide la URL in segmenti utilizzando '/' come delimitatore
            $url = explode('/', $sanitized_url);

            // $url è ora un array contenente i segmenti della URL
            return $url;
        }
    }
};
