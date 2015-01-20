<?php
namespace Codeception\Module;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class AblyHelper extends \Codeception\Module
{
    // Init the configuration
    protected $sandbox_url = 'https://sandbox-rest.ably.io';

    protected $port = '80';

    protected $tls_port = '433';

    protected $app_config;

    public function __construct()
    {
        $this->app_config = file_get_contents(__DIR__.'/testApp.json');
    }

    /**
     * @return string
     */
    public function getTlsPort()
    {
        return $this->tls_port;
    }

    /**
     * @param string $tls_port
     */
    public function setTlsPort($tls_port)
    {
        $this->tls_port = $tls_port;
    }

    /**
     * @return string
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param string $port
     */
    public function setPort($port)
    {
        $this->port = $port;
    }

    /**
     * @return string
     */
    public function getSandboxUrl()
    {
        return $this->sandbox_url;
    }

    /**
     * @param string $sandbox_url
     */
    public function setSandboxUrl($sandbox_url)
    {
        $this->sandbox_url = $sandbox_url;
    }

    /**
     * @param bool $isJson
     * @return array
     */
    public function getAppConfig($isJson = false)
    {
        if ($isJson) {
            return json_encode($this->app_config);
        }

        return $this->app_config;
    }

    /**
     * @param array $app_config
     */
    public function setAppConfig($app_config)
    {
        $this->app_config = $app_config;
    }

}
