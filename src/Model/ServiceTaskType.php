<?php
/**
 * ServiceTaskType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Stackflows\Clients\Stackflows
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Stackflows REST API
 *
 * Pagination query params are as follows: page[size]=10&page[number]=1
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Stackflows\Clients\Stackflows\Model;

use \ArrayAccess;
use \Stackflows\Clients\Stackflows\ObjectSerializer;

/**
 * ServiceTaskType Class Doc Comment
 *
 * @category Class
 * @package  Stackflows\Clients\Stackflows
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ServiceTaskType implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ServiceTaskType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'reference' => 'string',
        'topic' => 'string',
        'suspended' => 'bool',
        'priority' => 'int',
        'environment' => 'object',
        'activity' => '\Stackflows\Clients\Stackflows\Model\ActivityType',
        'instance' => '\Stackflows\Clients\Stackflows\Model\BusinessProcessInstanceType',
        'attributes' => 'array<string,\Stackflows\Clients\Stackflows\Model\DataPointType>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'reference' => null,
        'topic' => null,
        'suspended' => null,
        'priority' => null,
        'environment' => null,
        'activity' => null,
        'instance' => null,
        'attributes' => null
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
        'reference' => 'reference',
        'topic' => 'topic',
        'suspended' => 'suspended',
        'priority' => 'priority',
        'environment' => 'environment',
        'activity' => 'activity',
        'instance' => 'instance',
        'attributes' => 'attributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reference' => 'setReference',
        'topic' => 'setTopic',
        'suspended' => 'setSuspended',
        'priority' => 'setPriority',
        'environment' => 'setEnvironment',
        'activity' => 'setActivity',
        'instance' => 'setInstance',
        'attributes' => 'setAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reference' => 'getReference',
        'topic' => 'getTopic',
        'suspended' => 'getSuspended',
        'priority' => 'getPriority',
        'environment' => 'getEnvironment',
        'activity' => 'getActivity',
        'instance' => 'getInstance',
        'attributes' => 'getAttributes'
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
        $this->container['reference'] = $data['reference'] ?? null;
        $this->container['topic'] = $data['topic'] ?? null;
        $this->container['suspended'] = $data['suspended'] ?? null;
        $this->container['priority'] = $data['priority'] ?? null;
        $this->container['environment'] = $data['environment'] ?? null;
        $this->container['activity'] = $data['activity'] ?? null;
        $this->container['instance'] = $data['instance'] ?? null;
        $this->container['attributes'] = $data['attributes'] ?? null;
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
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference reference
     *
     * @return self
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets topic
     *
     * @return string|null
     */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
     * Sets topic
     *
     * @param string|null $topic topic
     *
     * @return self
     */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;

        return $this;
    }

    /**
     * Gets suspended
     *
     * @return bool|null
     */
    public function getSuspended()
    {
        return $this->container['suspended'];
    }

    /**
     * Sets suspended
     *
     * @param bool|null $suspended suspended
     *
     * @return self
     */
    public function setSuspended($suspended)
    {
        $this->container['suspended'] = $suspended;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int|null
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int|null $priority priority
     *
     * @return self
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets environment
     *
     * @return object|null
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     *
     * @param object|null $environment environment
     *
     * @return self
     */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;

        return $this;
    }

    /**
     * Gets activity
     *
     * @return \Stackflows\Clients\Stackflows\Model\ActivityType|null
     */
    public function getActivity()
    {
        return $this->container['activity'];
    }

    /**
     * Sets activity
     *
     * @param \Stackflows\Clients\Stackflows\Model\ActivityType|null $activity activity
     *
     * @return self
     */
    public function setActivity($activity)
    {
        $this->container['activity'] = $activity;

        return $this;
    }

    /**
     * Gets instance
     *
     * @return \Stackflows\Clients\Stackflows\Model\BusinessProcessInstanceType|null
     */
    public function getInstance()
    {
        return $this->container['instance'];
    }

    /**
     * Sets instance
     *
     * @param \Stackflows\Clients\Stackflows\Model\BusinessProcessInstanceType|null $instance instance
     *
     * @return self
     */
    public function setInstance($instance)
    {
        $this->container['instance'] = $instance;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return array<string,\Stackflows\Clients\Stackflows\Model\DataPointType>|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param array<string,\Stackflows\Clients\Stackflows\Model\DataPointType>|null $attributes attributes
     *
     * @return self
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


