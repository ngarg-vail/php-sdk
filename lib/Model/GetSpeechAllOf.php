<?php
/**
 * GetSpeechAllOf
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
 * GetSpeechAllOf Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetSpeechAllOf implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetSpeech_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'action_url' => 'string',
        'grammar_type' => 'int',
        'grammar_file' => 'string',
        'grammar_rule' => 'bool',
        'play_beep' => 'string',
        'prompts' => '\OpenAPI\Client\Model\PerCLCommand[]',
        'no_input_timeout_ms' => 'int',
        'recognition_timeout_ms' => 'int',
        'confidence_threshold' => 'float',
        'sensitivity_level' => 'float',
        'speech_complete_timeout_ms' => 'int',
        'speech_incomplete_timeout_ms' => 'int',
        'enforce_pci' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'action_url' => null,
        'grammar_type' => null,
        'grammar_file' => null,
        'grammar_rule' => null,
        'play_beep' => null,
        'prompts' => null,
        'no_input_timeout_ms' => null,
        'recognition_timeout_ms' => null,
        'confidence_threshold' => null,
        'sensitivity_level' => null,
        'speech_complete_timeout_ms' => null,
        'speech_incomplete_timeout_ms' => null,
        'enforce_pci' => null
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
        'action_url' => 'actionUrl',
        'grammar_type' => 'grammarType',
        'grammar_file' => 'grammarFile',
        'grammar_rule' => 'grammarRule',
        'play_beep' => 'playBeep',
        'prompts' => 'prompts',
        'no_input_timeout_ms' => 'noInputTimeoutMs',
        'recognition_timeout_ms' => 'recognitionTimeoutMs',
        'confidence_threshold' => 'confidenceThreshold',
        'sensitivity_level' => 'sensitivityLevel',
        'speech_complete_timeout_ms' => 'speechCompleteTimeoutMs',
        'speech_incomplete_timeout_ms' => 'speechIncompleteTimeoutMs',
        'enforce_pci' => 'enforcePCI'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action_url' => 'setActionUrl',
        'grammar_type' => 'setGrammarType',
        'grammar_file' => 'setGrammarFile',
        'grammar_rule' => 'setGrammarRule',
        'play_beep' => 'setPlayBeep',
        'prompts' => 'setPrompts',
        'no_input_timeout_ms' => 'setNoInputTimeoutMs',
        'recognition_timeout_ms' => 'setRecognitionTimeoutMs',
        'confidence_threshold' => 'setConfidenceThreshold',
        'sensitivity_level' => 'setSensitivityLevel',
        'speech_complete_timeout_ms' => 'setSpeechCompleteTimeoutMs',
        'speech_incomplete_timeout_ms' => 'setSpeechIncompleteTimeoutMs',
        'enforce_pci' => 'setEnforcePci'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action_url' => 'getActionUrl',
        'grammar_type' => 'getGrammarType',
        'grammar_file' => 'getGrammarFile',
        'grammar_rule' => 'getGrammarRule',
        'play_beep' => 'getPlayBeep',
        'prompts' => 'getPrompts',
        'no_input_timeout_ms' => 'getNoInputTimeoutMs',
        'recognition_timeout_ms' => 'getRecognitionTimeoutMs',
        'confidence_threshold' => 'getConfidenceThreshold',
        'sensitivity_level' => 'getSensitivityLevel',
        'speech_complete_timeout_ms' => 'getSpeechCompleteTimeoutMs',
        'speech_incomplete_timeout_ms' => 'getSpeechIncompleteTimeoutMs',
        'enforce_pci' => 'getEnforcePci'
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
        $this->container['action_url'] = isset($data['action_url']) ? $data['action_url'] : null;
        $this->container['grammar_type'] = isset($data['grammar_type']) ? $data['grammar_type'] : null;
        $this->container['grammar_file'] = isset($data['grammar_file']) ? $data['grammar_file'] : null;
        $this->container['grammar_rule'] = isset($data['grammar_rule']) ? $data['grammar_rule'] : null;
        $this->container['play_beep'] = isset($data['play_beep']) ? $data['play_beep'] : null;
        $this->container['prompts'] = isset($data['prompts']) ? $data['prompts'] : null;
        $this->container['no_input_timeout_ms'] = isset($data['no_input_timeout_ms']) ? $data['no_input_timeout_ms'] : null;
        $this->container['recognition_timeout_ms'] = isset($data['recognition_timeout_ms']) ? $data['recognition_timeout_ms'] : null;
        $this->container['confidence_threshold'] = isset($data['confidence_threshold']) ? $data['confidence_threshold'] : null;
        $this->container['sensitivity_level'] = isset($data['sensitivity_level']) ? $data['sensitivity_level'] : null;
        $this->container['speech_complete_timeout_ms'] = isset($data['speech_complete_timeout_ms']) ? $data['speech_complete_timeout_ms'] : null;
        $this->container['speech_incomplete_timeout_ms'] = isset($data['speech_incomplete_timeout_ms']) ? $data['speech_incomplete_timeout_ms'] : null;
        $this->container['enforce_pci'] = isset($data['enforce_pci']) ? $data['enforce_pci'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets grammar_type
     *
     * @return int|null
     */
    public function getGrammarType()
    {
        return $this->container['grammar_type'];
    }

    /**
     * Sets grammar_type
     *
     * @param int|null $grammar_type grammar_type
     *
     * @return $this
     */
    public function setGrammarType($grammar_type)
    {
        $this->container['grammar_type'] = $grammar_type;

        return $this;
    }

    /**
     * Gets grammar_file
     *
     * @return string|null
     */
    public function getGrammarFile()
    {
        return $this->container['grammar_file'];
    }

    /**
     * Sets grammar_file
     *
     * @param string|null $grammar_file grammar_file
     *
     * @return $this
     */
    public function setGrammarFile($grammar_file)
    {
        $this->container['grammar_file'] = $grammar_file;

        return $this;
    }

    /**
     * Gets grammar_rule
     *
     * @return bool|null
     */
    public function getGrammarRule()
    {
        return $this->container['grammar_rule'];
    }

    /**
     * Sets grammar_rule
     *
     * @param bool|null $grammar_rule grammar_rule
     *
     * @return $this
     */
    public function setGrammarRule($grammar_rule)
    {
        $this->container['grammar_rule'] = $grammar_rule;

        return $this;
    }

    /**
     * Gets play_beep
     *
     * @return string|null
     */
    public function getPlayBeep()
    {
        return $this->container['play_beep'];
    }

    /**
     * Sets play_beep
     *
     * @param string|null $play_beep play_beep
     *
     * @return $this
     */
    public function setPlayBeep($play_beep)
    {
        $this->container['play_beep'] = $play_beep;

        return $this;
    }

    /**
     * Gets prompts
     *
     * @return \OpenAPI\Client\Model\PerCLCommand[]|null
     */
    public function getPrompts()
    {
        return $this->container['prompts'];
    }

    /**
     * Sets prompts
     *
     * @param \OpenAPI\Client\Model\PerCLCommand[]|null $prompts prompts
     *
     * @return $this
     */
    public function setPrompts($prompts)
    {
        $this->container['prompts'] = $prompts;

        return $this;
    }

    /**
     * Gets no_input_timeout_ms
     *
     * @return int|null
     */
    public function getNoInputTimeoutMs()
    {
        return $this->container['no_input_timeout_ms'];
    }

    /**
     * Sets no_input_timeout_ms
     *
     * @param int|null $no_input_timeout_ms no_input_timeout_ms
     *
     * @return $this
     */
    public function setNoInputTimeoutMs($no_input_timeout_ms)
    {
        $this->container['no_input_timeout_ms'] = $no_input_timeout_ms;

        return $this;
    }

    /**
     * Gets recognition_timeout_ms
     *
     * @return int|null
     */
    public function getRecognitionTimeoutMs()
    {
        return $this->container['recognition_timeout_ms'];
    }

    /**
     * Sets recognition_timeout_ms
     *
     * @param int|null $recognition_timeout_ms recognition_timeout_ms
     *
     * @return $this
     */
    public function setRecognitionTimeoutMs($recognition_timeout_ms)
    {
        $this->container['recognition_timeout_ms'] = $recognition_timeout_ms;

        return $this;
    }

    /**
     * Gets confidence_threshold
     *
     * @return float|null
     */
    public function getConfidenceThreshold()
    {
        return $this->container['confidence_threshold'];
    }

    /**
     * Sets confidence_threshold
     *
     * @param float|null $confidence_threshold confidence_threshold
     *
     * @return $this
     */
    public function setConfidenceThreshold($confidence_threshold)
    {
        $this->container['confidence_threshold'] = $confidence_threshold;

        return $this;
    }

    /**
     * Gets sensitivity_level
     *
     * @return float|null
     */
    public function getSensitivityLevel()
    {
        return $this->container['sensitivity_level'];
    }

    /**
     * Sets sensitivity_level
     *
     * @param float|null $sensitivity_level sensitivity_level
     *
     * @return $this
     */
    public function setSensitivityLevel($sensitivity_level)
    {
        $this->container['sensitivity_level'] = $sensitivity_level;

        return $this;
    }

    /**
     * Gets speech_complete_timeout_ms
     *
     * @return int|null
     */
    public function getSpeechCompleteTimeoutMs()
    {
        return $this->container['speech_complete_timeout_ms'];
    }

    /**
     * Sets speech_complete_timeout_ms
     *
     * @param int|null $speech_complete_timeout_ms speech_complete_timeout_ms
     *
     * @return $this
     */
    public function setSpeechCompleteTimeoutMs($speech_complete_timeout_ms)
    {
        $this->container['speech_complete_timeout_ms'] = $speech_complete_timeout_ms;

        return $this;
    }

    /**
     * Gets speech_incomplete_timeout_ms
     *
     * @return int|null
     */
    public function getSpeechIncompleteTimeoutMs()
    {
        return $this->container['speech_incomplete_timeout_ms'];
    }

    /**
     * Sets speech_incomplete_timeout_ms
     *
     * @param int|null $speech_incomplete_timeout_ms speech_incomplete_timeout_ms
     *
     * @return $this
     */
    public function setSpeechIncompleteTimeoutMs($speech_incomplete_timeout_ms)
    {
        $this->container['speech_incomplete_timeout_ms'] = $speech_incomplete_timeout_ms;

        return $this;
    }

    /**
     * Gets enforce_pci
     *
     * @return bool|null
     */
    public function getEnforcePci()
    {
        return $this->container['enforce_pci'];
    }

    /**
     * Sets enforce_pci
     *
     * @param bool|null $enforce_pci enforce_pci
     *
     * @return $this
     */
    public function setEnforcePci($enforce_pci)
    {
        $this->container['enforce_pci'] = $enforce_pci;

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


