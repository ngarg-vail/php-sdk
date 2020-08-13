<?php
/**
 * OutDial
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * FreeClimb API
 *
 * FreeClimb is a cloud-based application programming interface (API) that puts the power of the Vail platform in your hands. FreeClimb simplifies the process of creating applications that can use a full range of telephony features without requiring specialized or on-site telephony equipment. Using the FreeClimb REST API to write applications is easy! You have the option to use the language of your choice or hit the API directly. Your application can execute a command by issuing a RESTful request to the FreeClimb API. The base URL to send HTTP requests to the FreeClimb REST API is: /apiserver. FreeClimb authenticates and processes your request.
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * OutDial Class Doc Comment
 *
 * @category Class
 * @description The OutDial command is used to call a phone number
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OutDial extends PerclCommand 
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
        'command' => 'string',
        'action_url' => 'string',
        'call_connect_url' => 'string',
        'calling_number' => 'float',
        'destination' => 'float',
        'if_machine' => 'string',
        'if_machine_url' => 'string',
        'send_digits' => 'string',
        'status_callback_url' => 'string',
        'timeout' => 'int',
        'privacy_mode' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'command' => null,
        'action_url' => null,
        'call_connect_url' => null,
        'calling_number' => null,
        'destination' => null,
        'if_machine' => null,
        'if_machine_url' => null,
        'send_digits' => null,
        'status_callback_url' => null,
        'timeout' => null,
        'privacy_mode' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'command' => 'command',
        'action_url' => 'actionUrl',
        'call_connect_url' => 'callConnectUrl',
        'calling_number' => 'callingNumber',
        'destination' => 'destination',
        'if_machine' => 'ifMachine',
        'if_machine_url' => 'ifMachineUrl',
        'send_digits' => 'sendDigits',
        'status_callback_url' => 'statusCallbackUrl',
        'timeout' => 'timeout',
        'privacy_mode' => 'privacyMode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'command' => 'setCommand',
        'action_url' => 'setActionUrl',
        'call_connect_url' => 'setCallConnectUrl',
        'calling_number' => 'setCallingNumber',
        'destination' => 'setDestination',
        'if_machine' => 'setIfMachine',
        'if_machine_url' => 'setIfMachineUrl',
        'send_digits' => 'setSendDigits',
        'status_callback_url' => 'setStatusCallbackUrl',
        'timeout' => 'setTimeout',
        'privacy_mode' => 'setPrivacyMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'command' => 'getCommand',
        'action_url' => 'getActionUrl',
        'call_connect_url' => 'getCallConnectUrl',
        'calling_number' => 'getCallingNumber',
        'destination' => 'getDestination',
        'if_machine' => 'getIfMachine',
        'if_machine_url' => 'getIfMachineUrl',
        'send_digits' => 'getSendDigits',
        'status_callback_url' => 'getStatusCallbackUrl',
        'timeout' => 'getTimeout',
        'privacy_mode' => 'getPrivacyMode'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
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
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['action_url'] = isset($data['action_url']) ? $data['action_url'] : null;
        $this->container['call_connect_url'] = isset($data['call_connect_url']) ? $data['call_connect_url'] : null;
        $this->container['calling_number'] = isset($data['calling_number']) ? $data['calling_number'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['if_machine'] = isset($data['if_machine']) ? $data['if_machine'] : null;
        $this->container['if_machine_url'] = isset($data['if_machine_url']) ? $data['if_machine_url'] : null;
        $this->container['send_digits'] = isset($data['send_digits']) ? $data['send_digits'] : null;
        $this->container['status_callback_url'] = isset($data['status_callback_url']) ? $data['status_callback_url'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['privacy_mode'] = isset($data['privacy_mode']) ? $data['privacy_mode'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['action_url'] === null) {
            $invalidProperties[] = "'action_url' can't be null";
        }
        if ($this->container['call_connect_url'] === null) {
            $invalidProperties[] = "'call_connect_url' can't be null";
        }
        if ($this->container['calling_number'] === null) {
            $invalidProperties[] = "'calling_number' can't be null";
        }
        if ($this->container['destination'] === null) {
            $invalidProperties[] = "'destination' can't be null";
        }
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
     * Gets command
     *
     * @return string|null
     */
    public function getCommand()
    {
        return $this->container['command'];
    }

    /**
     * Sets command
     *
     * @param string|null $command command
     *
     * @return $this
     */
    public function setCommand($command)
    {
        $this->container['command'] = $command;

        return $this;
    }

    /**
     * Gets action_url
     *
     * @return string
     */
    public function getActionUrl()
    {
        return $this->container['action_url'];
    }

    /**
     * Sets action_url
     *
     * @param string $action_url URL to which FreeClimb sends an HTTP POST request.
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
     * @return string
     */
    public function getCallConnectUrl()
    {
        return $this->container['call_connect_url'];
    }

    /**
     * Sets call_connect_url
     *
     * @param string $call_connect_url URL to which FreeClimb makes an HTTP POST request informing the result of the OutDial.
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
     * @return float
     */
    public function getCallingNumber()
    {
        return $this->container['calling_number'];
    }

    /**
     * Sets calling_number
     *
     * @param float $calling_number he caller ID to show to the called party when FreeClimb calls. This can be one of the following: The To or From number provided in the first Webhook to your webserver. Any phone number you have purchased from FreeClimb.
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
     * @return float
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     *
     * @param float $destination E.164 representation of the phone number to Call.
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
     * @param string|null $if_machine Specifies how FreeClimb should handle this OutDial if an answering machine answers the Call. Valid values: `redirect` invokes the ifMachineUrl for instructions. `hangup` hangs up the Call. The ifMachineUrl will not be invoked.
     *
     * @return $this
     */
    public function setIfMachine($if_machine)
    {
        $this->container['if_machine'] = $if_machine;

        return $this;
    }

    /**
     * Gets if_machine_url
     *
     * @return string|null
     */
    public function getIfMachineUrl()
    {
        return $this->container['if_machine_url'];
    }

    /**
     * Sets if_machine_url
     *
     * @param string|null $if_machine_url When the `ifMachine` flag is set to `redirect`, this attribute specifies a URL to which FreeClimb makes a POST request when an answering machine or a fax machine is detected. This URL is required if the `ifMachine` flag is set to `redirect`. Otherwise, it should not be included.
     *
     * @return $this
     */
    public function setIfMachineUrl($if_machine_url)
    {
        $this->container['if_machine_url'] = $if_machine_url;

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
     * @param string|null $send_digits DTMF tones to play to the outdialed Call. This is typically used to dial a number and then dial an extension.
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
     * @param string|null $status_callback_url When the outdialed Call leg terminates, FreeClimb sends a `callStatus` Webhook to the `statusCallbackUrl`. This is a notification only; any PerCL command returned is ignored.
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
     * @param int|null $timeout Maximum time in seconds the `OutDial` command waits for the called party to answer the Call. When a timeout occurs, FreeClimb invokes the `callConnectUrl` Webhook to report that the out-dialed Call has ended with a status of `noAnswer`.
     *
     * @return $this
     */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;

        return $this;
    }

    /**
     * Gets privacy_mode
     *
     * @return bool|null
     */
    public function getPrivacyMode()
    {
        return $this->container['privacy_mode'];
    }

    /**
     * Sets privacy_mode
     *
     * @param bool|null $privacy_mode Parameter `privacyMode` will not log the `text` as required by PCI compliance.
     *
     * @return $this
     */
    public function setPrivacyMode($privacy_mode)
    {
        $this->container['privacy_mode'] = $privacy_mode;

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


