<?php

class Pintlabs_Service_Brewerydb
{
    const BASE_URL = 'http://api.brewerydb.com/v2';
    const GET = 'GET';
    const POST = 'POST';
    const PUT = 'PUT';
    const DELETE = 'DELETE';
    
    protected $_apiKey = '';
    
    protected $_url = '';
    
    protected $_format = 'json';
    
    protected $_lastParsedResponse = null;
    
    protected $_lastRawResponse = null;
    
    protected $_lastRequestUri = null;
    /**
     * Constructor
     *
     * @param string $apiKey Brewerydb API key
     */
    public function __construct($apiKey, $url = self::BASE_URL)
    {
        $this->_apiKey = (string) $apiKey;
        $this->_url = (string) $url;
    }
    /**
     * Sets the response format.  Must be either 'php' or 'json'.  Will set
     * to 'json' by default if something invalid is specified.
     *
     * @return string
     */
    public function setFormat($format)
    {
        $format = strtolower($format);
        if ($format != 'php' && $format != 'json') {
            $this->_format = 'json';
        } else {
            $this->_format = $format;
        }
        return $this;
    }
    /**
     * Gets the currently set response format.
     */
    public function getFormat()
    {
        return $this->_format;
    }
    /**
     * Sends a request using curl to the required endpoint
     *
     * @param string $endpoint The BreweryDb endpoint to use
     * @param array $args key value array of arguments
     *
     * @throws Pintlabs_Service_Brewerydb_Exception
     *
     * @return array
     */
    public function request($endpoint, $args = array(), $transferType = self::GET)
    {
        $this->_lastRequestUri = null;
        $this->_lastRawResponse = null;
        $this->_lastParsedResponse = null;
        // Append the API key to the args passed in the query string
        $args['key'] = $this->_apiKey;
        $args['format'] = $this->_format;
        // Set curl options and execute the request
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        if ($transferType == self::GET) {
            $this->_lastRequestUri = $this->_url . '/' . $endpoint . '/?' . http_build_query($args);
            curl_setopt($ch, CURLOPT_URL, $this->_lastRequestUri);
        } else if ($transferType == self::POST) {
            curl_setopt($ch, CURLOPT_POST, true);
            $this->_lastRequestUri = $this->_url . '/' . $endpoint . '/';
            curl_setopt($ch, CURLOPT_URL, $this->_lastRequestUri);
            $body = http_build_query($args);
            curl_setopt ($ch, CURLOPT_POSTFIELDS, $body);
        } else if ($transferType == self::PUT) {
            $this->_lastRequestUri = $this->_url . '/' . $endpoint . '/';
            
            $file = tmpfile();
            $string = http_build_query($args);
            fwrite($file, $string);
            fseek($file, 0);
            curl_setopt($ch, CURLOPT_INFILE, $file);
            curl_setopt($ch, CURLOPT_INFILESIZE, strlen($string));
            curl_setopt($ch, CURLOPT_PUT, 4);
            curl_setopt($ch, CURLOPT_URL, $this->_lastRequestUri);
            curl_setopt($ch, CURLOPT_HTTPHEADER, Array('Expect: '));
            
        } else if ($transferType == self::DELETE) {
            $this->_lastRequestUri = $this->_url . '/' . $endpoint . '/';
            curl_setopt($ch, CURLOPT_URL, $this->_lastRequestUri);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, self::DELETE);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($args));
        }
        $this->_lastRawResponse = curl_exec($ch);
        if ($this->_lastRawResponse === false) {
            $this->_lastRawResponse = curl_error($ch);
        }

        // Response comes back as either JSON or PHP, so we decode it into a stdClass object
        if ($args['format'] == 'php') {
            $this->_lastParsedResponse = @unserialize($this->_lastRawResponse);
        } else {
            $this->_lastParsedResponse = @json_decode($this->_lastRawResponse, true);
        }
        // Server provides error messages in http_code and error vars.  If not 200, we have an error.
        if (isset($this->_lastParsedResponse['error'])) {
            echo "error =lastParsedResponse";
        }
        
        return $this->getLastParsedResponse();
    }
    /**
     * Gets the last parsed response from the service
     *
     * @return null|array
     */
    public function getLastParsedResponse()
    {
        return $this->_lastParsedResponse;
    }
    /**
     * Gets the last raw response from the service
     *
     * @return null|json string|xml string
     */
    public function getLastRawResponse()
    {
        return $this->_lastRawResponse;
    }
    /**
     * Gets the last request URI sent to the service
     *
     * @return null|string
     */
    public function getLastRequestUri()
    {
        return $this->_lastRequestUri;
    }
}

