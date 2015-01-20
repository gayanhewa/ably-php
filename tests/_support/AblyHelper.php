<?php
namespace Codeception\Module;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class AblyHelper extends \Codeception\Module
{
    // Init the configuration
    protected $sandbox_url = 'sandbox-rest.ably.io';

    protected $port = '80';

    protected $tls_port = '433';

    protected $app_config = array(
      'keys' => array(
          array(),
          array(
              'capability' => '{ "cansubscribe:*":["subscribe"], "canpublish:*":["publish"], "canpublish:andpresence":["presence","publish"] }'
          )
      ),
      'namespaces' => array(
          'id' => 'persisted',
          'persisted' => true
      ),
      'channels' => array(
          'name' => 'persisted:presence_fixtures',
          'presence' => array(
              array('clientId' => 'client_bool',    'clientData' => 'true'),
              array('clientId' => 'client_int',    'clientData' => '24'),
              array('clientId' => 'client_string',    'clientData' => 'This is a string clientData payload'),
              array('clientId' => 'client_json',    'clientData' => array( "test" => \'This is a JSONObject clientData payload\}'))
          )
      )
    );
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
