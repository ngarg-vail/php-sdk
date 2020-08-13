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
        'prompts' => '\OpenAPI\Client\Model\PerclCommand[]',
        'no_input_timeout_ms' => 'int',
        'recognition_timeout_ms' => 'int',
        'confidence_threshold' => 'float',
        'sensitivity_level' => 'float',
        'speech_complete_timeout_ms' => 'int',
        'speech_incomplete_timeout_ms' => 'int',
        'privacy_mode' => 'bool'
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
        'privacy_mode' => 'privacyMode'
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
        'privacy_mode' => 'setPrivacyMode'
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
        if ($this->container['grammar_file'] === null) {
            $invalidProperties[] = "'grammar_file' can't be null";
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
     * @param string $action_url When the caller has finished speaking or the command has timed out, FreeClimb will make a POST request to this URL. A PerCL response is expected to continue handling the call.
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
     * @param int|null $grammar_type The grammar file type to use for speech recognition. A value of 'URL' indicates the grammarFile attribute specifies a URL that points to the grammar file. A value of `BUILTIN` indicates the grammarFile attribute specifies the name of one of the platform built-in grammar files.
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
     * @return string
     */
    public function getGrammarFile()
    {
        return $this->container['grammar_file'];
    }

    /**
     * Sets grammar_file
     *
     * @param string $grammar_file The grammar file to use for speech recognition. If grammarType is set to URL, this attribute is specified as a download URL.
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
     * @param bool|null $grammar_rule The grammar rule within the specified grammar file to use for speech recognition. This attribute is optional if `grammarType` is `URL` and ignored if `grammarType` is `BUILTIN`.
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
     * @param string|null $play_beep Indicates whether a beep should be played just before speech recognition is initiated so that the speaker can start to speak.
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
     * @return \OpenAPI\Client\Model\PerclCommand[]|null
     */
    public function getPrompts()
    {
        return $this->container['prompts'];
    }

    /**
     * Sets prompts
     *
     * @param \OpenAPI\Client\Model\PerclCommand[]|null $prompts The JSON array of PerCL commands to nest within the `GetSpeech` command. The `Say`, `Play`, and `Pause` commands can be used. The nested actions are executed while FreeClimb is waiting for input from the caller. This allows for playing menu options to the caller and to prompt for the expected input. These commands stop executing when the caller begins to input speech.
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
     * @param int|null $no_input_timeout_ms When recognition is started and there is no speech detected for `noInputTimeoutMs` milliseconds, the recognizer will terminate the recognition operation.
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
     * @param int|null $recognition_timeout_ms When playback of prompts ends and there is no match for `recognitionTimeoutMs` milliseconds, the recognizer will terminate the recognition operation.
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
     * @param float|null $confidence_threshold When a recognition resource recognizes a spoken phrase, it associates a confidence level with that match. Parameter `confidenceThreshold` specifies what confidence level is considered a successful match. Values are between 0.0 and 1.0.
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
     * @param float|null $sensitivity_level The speech recognizer supports a variable level of sound sensitivity. The sensitivityLevel attribute allows for filtering out background noise, so it is not mistaken for speech. Values are between 0.0 and 1.0
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
     * @param int|null $speech_complete_timeout_ms Parameter `speechCompleteTimeoutMs` specifies the length of silence required following user speech before the speech recognizer finalizes a result. This timeout applies when the recognizer currently has a complete match against an active grammar. Reasonable speech complete timeout values are typically in the range of 0.3 seconds to 1.0 seconds.
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
     * @param int|null $speech_incomplete_timeout_ms Parameter `speechIncompleteTimeoutMs` specifies the length of silence following user speech after which a recognizer finalizes a result. This timeout applies when the speech prior to the silence is an incomplete match of all active grammars. Timeout `speechIncompleteTimeoutMs` is usually longer than `speechCompleteTimeoutMs` to allow users to pause mid-utterance.
     *
     * @return $this
     */
    public function setSpeechIncompleteTimeoutMs($speech_incomplete_timeout_ms)
    {
        $this->container['speech_incomplete_timeout_ms'] = $speech_incomplete_timeout_ms;

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
     * @param bool|null $privacy_mode Parameter privacyMode will not log the `text` as required by PCI compliance.
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


