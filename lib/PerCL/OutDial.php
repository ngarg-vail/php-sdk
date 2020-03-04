<?php
/**
 * OutDial
 *
 * PHP version 5
 *
 * @category Class
 * @package  FreeClimb
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * FreeClimb API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 0.0.1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FreeClimb\PerCL;
use \FreeClimb\ObjectSerializer;

/**
 * OutDial Class Doc Comment
 *
 * @category Class
 * @package  FreeClimb
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OutDial extends PerCLCommand 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OutDial';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'action_url' => 'string',
        'call_connect_url' => 'string',
        'calling_number' => 'float',
        'destination' => 'float',
        'if_machine' => 'string',
        'send_digits' => 'string',
        'status_callback_url' => 'string',
        'timeout' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'action_url' => null,
        'call_connect_url' => null,
        'calling_number' => null,
        'destination' => null,
        'if_machine' => null,
        'send_digits' => null,
        'status_callback_url' => null,
        'timeout' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'action_url' => 'actionUrl',
        'call_connect_url' => 'callConnectUrl',
        'calling_number' => 'callingNumber',
        'destination' => 'destination',
        'if_machine' => 'ifMachine',
        'send_digits' => 'sendDigits',
        'status_callback_url' => 'statusCallbackUrl',
        'timeout' => 'timeout'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action_url' => 'setActionUrl',
        'call_connect_url' => 'setCallConnectUrl',
        'calling_number' => 'setCallingNumber',
        'destination' => 'setDestination',
        'if_machine' => 'setIfMachine',
        'send_digits' => 'setSendDigits',
        'status_callback_url' => 'setStatusCallbackUrl',
        'timeout' => 'setTimeout'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action_url' => 'getActionUrl',
        'call_connect_url' => 'getCallConnectUrl',
        'calling_number' => 'getCallingNumber',
        'destination' => 'getDestination',
        'if_machine' => 'getIfMachine',
        'send_digits' => 'getSendDigits',
        'status_callback_url' => 'getStatusCallbackUrl',
        'timeout' => 'getTimeout'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['action_url'] = isset($data['action_url']) ? $data['action_url'] : null;
        $this->container['call_connect_url'] = isset($data['call_connect_url']) ? $data['call_connect_url'] : null;
        $this->container['calling_number'] = isset($data['calling_number']) ? $data['calling_number'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['if_machine'] = isset($data['if_machine']) ? $data['if_machine'] : null;
        $this->container['send_digits'] = isset($data['send_digits']) ? $data['send_digits'] : null;
        $this->container['status_callback_url'] = isset($data['status_callback_url']) ? $data['status_callback_url'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets action_url
     *
     * @return string|null
     */
    public function getActionUrl()
    {
        return $this->container['action_url'];
    }

    /**
     * Sets action_url
     *
     * @param string|null $action_url action_url
     *
     * @return $this
     */
    public function setActionUrl($action_url)
    {
        $this->container['action_url'] = $action_url;

        return $this;
    }

    /**
     * Gets call_connect_url
     *
     * @return string|null
     */
    public function getCallConnectUrl()
    {
        return $this->container['call_connect_url'];
    }

    /**
     * Sets call_connect_url
     *
     * @param string|null $call_connect_url call_connect_url
     *
     * @return $this
     */
    public function setCallConnectUrl($call_connect_url)
    {
        $this->container['call_connect_url'] = $call_connect_url;

        return $this;
    }

    /**
     * Gets calling_number
     *
     * @return float|null
     */
    public function getCallingNumber()
    {
        return $this->container['calling_number'];
    }

    /**
     * Sets calling_number
     *
     * @param float|null $calling_number calling_number
     *
     * @return $this
     */
    public function setCallingNumber($calling_number)
    {
        $this->container['calling_number'] = $calling_number;

        return $this;
    }

    /**
     * Gets destination
     *
     * @return float|null
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     *
     * @param float|null $destination destination
     *
     * @return $this
     */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;

        return $this;
    }

    /**
     * Gets if_machine
     *
     * @return string|null
     */
    public function getIfMachine()
    {
        return $this->container['if_machine'];
    }

    /**
     * Sets if_machine
     *
     * @param string|null $if_machine if_machine
     *
     * @return $this
     */
    public function setIfMachine($if_machine)
    {
        $this->container['if_machine'] = $if_machine;

        return $this;
    }

    /**
     * Gets send_digits
     *
     * @return string|null
     */
    public function getSendDigits()
    {
        return $this->container['send_digits'];
    }

    /**
     * Sets send_digits
     *
     * @param string|null $send_digits send_digits
     *
     * @return $this
     */
    public function setSendDigits($send_digits)
    {
        $this->container['send_digits'] = $send_digits;

        return $this;
    }

    /**
     * Gets status_callback_url
     *
     * @return string|null
     */
    public function getStatusCallbackUrl()
    {
        return $this->container['status_callback_url'];
    }

    /**
     * Sets status_callback_url
     *
     * @param string|null $status_callback_url status_callback_url
     *
     * @return $this
     */
    public function setStatusCallbackUrl($status_callback_url)
    {
        $this->container['status_callback_url'] = $status_callback_url;

        return $this;
    }

    /**
     * Gets timeout
     *
     * @return int|null
     */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
     * Sets timeout
     *
     * @param int|null $timeout timeout
     *
     * @return $this
     */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

