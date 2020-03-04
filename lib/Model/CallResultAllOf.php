<?php
/**
 * CallResultAllOf
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
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 0.0.1
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
 * CallResultAllOf Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CallResultAllOf implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CallResult_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'call_id' => 'string',
        'parent_call_id' => 'string',
        'account_id' => 'string',
        'from' => 'string',
        'to' => 'string',
        'phone_number_id' => 'string',
        'status' => 'string',
        'start_time' => 'string',
        'connect_time' => 'string',
        'end_time' => 'string',
        'duration' => 'int',
        'connect_duration' => 'int',
        'direction' => 'string',
        'answered_by' => 'string',
        'subresource_uris' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'call_id' => null,
        'parent_call_id' => null,
        'account_id' => null,
        'from' => null,
        'to' => null,
        'phone_number_id' => null,
        'status' => null,
        'start_time' => null,
        'connect_time' => null,
        'end_time' => null,
        'duration' => null,
        'connect_duration' => null,
        'direction' => null,
        'answered_by' => null,
        'subresource_uris' => null
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
        'call_id' => 'callId',
        'parent_call_id' => 'parentCallId',
        'account_id' => 'accountId',
        'from' => 'from',
        'to' => 'to',
        'phone_number_id' => 'phoneNumberId',
        'status' => 'status',
        'start_time' => 'startTime',
        'connect_time' => 'connectTime',
        'end_time' => 'endTime',
        'duration' => 'duration',
        'connect_duration' => 'connectDuration',
        'direction' => 'direction',
        'answered_by' => 'answeredBy',
        'subresource_uris' => 'subresourceUris'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'call_id' => 'setCallId',
        'parent_call_id' => 'setParentCallId',
        'account_id' => 'setAccountId',
        'from' => 'setFrom',
        'to' => 'setTo',
        'phone_number_id' => 'setPhoneNumberId',
        'status' => 'setStatus',
        'start_time' => 'setStartTime',
        'connect_time' => 'setConnectTime',
        'end_time' => 'setEndTime',
        'duration' => 'setDuration',
        'connect_duration' => 'setConnectDuration',
        'direction' => 'setDirection',
        'answered_by' => 'setAnsweredBy',
        'subresource_uris' => 'setSubresourceUris'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'call_id' => 'getCallId',
        'parent_call_id' => 'getParentCallId',
        'account_id' => 'getAccountId',
        'from' => 'getFrom',
        'to' => 'getTo',
        'phone_number_id' => 'getPhoneNumberId',
        'status' => 'getStatus',
        'start_time' => 'getStartTime',
        'connect_time' => 'getConnectTime',
        'end_time' => 'getEndTime',
        'duration' => 'getDuration',
        'connect_duration' => 'getConnectDuration',
        'direction' => 'getDirection',
        'answered_by' => 'getAnsweredBy',
        'subresource_uris' => 'getSubresourceUris'
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

    const STATUS_QUEUED = 'queued';
    const STATUS_RINGING = 'ringing';
    const STATUS_IN_PROGRESS = 'inProgress';
    const STATUS_CANCELED = 'canceled';
    const STATUS_COMPLETED = 'completed';
    const STATUS_BUSY = 'busy';
    const STATUS_FAILED = 'failed';
    const STATUS_NO_ANSWER = 'noAnswer';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_QUEUED,
            self::STATUS_RINGING,
            self::STATUS_IN_PROGRESS,
            self::STATUS_CANCELED,
            self::STATUS_COMPLETED,
            self::STATUS_BUSY,
            self::STATUS_FAILED,
            self::STATUS_NO_ANSWER,
        ];
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
        $this->container['call_id'] = isset($data['call_id']) ? $data['call_id'] : null;
        $this->container['parent_call_id'] = isset($data['parent_call_id']) ? $data['parent_call_id'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['phone_number_id'] = isset($data['phone_number_id']) ? $data['phone_number_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['connect_time'] = isset($data['connect_time']) ? $data['connect_time'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['connect_duration'] = isset($data['connect_duration']) ? $data['connect_duration'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['answered_by'] = isset($data['answered_by']) ? $data['answered_by'] : null;
        $this->container['subresource_uris'] = isset($data['subresource_uris']) ? $data['subresource_uris'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets call_id
     *
     * @return string|null
     */
    public function getCallId()
    {
        return $this->container['call_id'];
    }

    /**
     * Sets call_id
     *
     * @param string|null $call_id String that uniquely identifies this Call resource.
     *
     * @return $this
     */
    public function setCallId($call_id)
    {
        $this->container['call_id'] = $call_id;

        return $this;
    }

    /**
     * Gets parent_call_id
     *
     * @return string|null
     */
    public function getParentCallId()
    {
        return $this->container['parent_call_id'];
    }

    /**
     * Sets parent_call_id
     *
     * @param string|null $parent_call_id ID of the Call that created this leg (child Call).
     *
     * @return $this
     */
    public function setParentCallId($parent_call_id)
    {
        $this->container['parent_call_id'] = $parent_call_id;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string|null $account_id ID of the account that owns this Call.
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets from
     *
     * @return string|null
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string|null $from Phone number that initiated this Call.
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets to
     *
     * @return string|null
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param string|null $to Phone number that received this Call.
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets phone_number_id
     *
     * @return string|null
     */
    public function getPhoneNumberId()
    {
        return $this->container['phone_number_id'];
    }

    /**
     * Sets phone_number_id
     *
     * @param string|null $phone_number_id If the Call was inbound, this is the ID of the IncomingPhoneNumber that received the Call (DNIS). If the Call was outbound, this is the ID of the phone number from which the Call was placed (ANI).
     *
     * @return $this
     */
    public function setPhoneNumberId($phone_number_id)
    {
        $this->container['phone_number_id'] = $phone_number_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status * `queued` &ndash; Call is ready and waiting in line before going out. * `ringing` &ndash; Call is currently ringing. * `inProgress` &ndash; Call was answered and is currently in progress. * `canceled` &ndash; Call was hung up while it was queued or ringing. * `completed` &ndash; Call was answered and has ended normally. * `busy` &ndash; Caller received a busy signal. * `failed` &ndash; Call could not be completed as dialed, most likely because the phone number was non-existent. * `noAnswer` &ndash; Call ended without being answered.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param string|null $start_time Start time of the Call (GMT) in RFC 1123 format (e.g., Mon, 15 Jun 2009 20:45:30 GMT). Empty if the Call has not yet been dialed.
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets connect_time
     *
     * @return string|null
     */
    public function getConnectTime()
    {
        return $this->container['connect_time'];
    }

    /**
     * Sets connect_time
     *
     * @param string|null $connect_time Time the Call was answered (GMT) in RFC 1123 format (e.g., Mon, 15 Jun 2009 20:45:30 GMT). Empty if the Call has not yet been dialed.
     *
     * @return $this
     */
    public function setConnectTime($connect_time)
    {
        $this->container['connect_time'] = $connect_time;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param string|null $end_time End time of the Call (GMT) in RFC 1123 format (e.g., Mon, 15 Jun 2009 20:45:30 GMT). Empty if the Call did not complete successfully.
     *
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int|null
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int|null $duration Total length of the Call in seconds. Measures time between startTime and endTime. This value is empty for busy, failed, unanswered or ongoing Calls.
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets connect_duration
     *
     * @return int|null
     */
    public function getConnectDuration()
    {
        return $this->container['connect_duration'];
    }

    /**
     * Sets connect_duration
     *
     * @param int|null $connect_duration Length of time that the Call was connected in seconds. Measures time between connectTime and endTime. This value is empty for busy, failed, unanswered or ongoing Calls.
     *
     * @return $this
     */
    public function setConnectDuration($connect_duration)
    {
        $this->container['connect_duration'] = $connect_duration;

        return $this;
    }

    /**
     * Gets direction
     *
     * @return string|null
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param string|null $direction Direction of the Call. `inbound` for Calls into FreeClimb, `outboundAPI` for Calls initiated via the REST API,  `outboundDial` for Calls initiated by the `OutDial` PerCL command.
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;

        return $this;
    }

    /**
     * Gets answered_by
     *
     * @return string|null
     */
    public function getAnsweredBy()
    {
        return $this->container['answered_by'];
    }

    /**
     * Sets answered_by
     *
     * @param string|null $answered_by If this Call was initiated with answering machine detection, either `human` or `machine`. Empty otherwise.
     *
     * @return $this
     */
    public function setAnsweredBy($answered_by)
    {
        $this->container['answered_by'] = $answered_by;

        return $this;
    }

    /**
     * Gets subresource_uris
     *
     * @return object|null
     */
    public function getSubresourceUris()
    {
        return $this->container['subresource_uris'];
    }

    /**
     * Sets subresource_uris
     *
     * @param object|null $subresource_uris The list of subresources for this Call. These include things like logs and recordings associated with the Call.
     *
     * @return $this
     */
    public function setSubresourceUris($subresource_uris)
    {
        $this->container['subresource_uris'] = $subresource_uris;

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


