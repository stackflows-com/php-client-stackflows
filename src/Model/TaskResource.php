<?php
/**
 * TaskResource
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
 * TaskResource Class Doc Comment
 *
 * @category Class
 * @package  Stackflows\Clients\Stackflows
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TaskResource implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TaskResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'environmentId' => 'string',
        'engineReference' => 'string',
        'name' => 'string',
        'description' => 'string',
        'fields' => 'NULL',
        'fieldsValues' => 'NULL',
        'status' => 'string',
        'followUpAt' => 'string',
        'dueAt' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'environmentId' => null,
        'engineReference' => null,
        'name' => null,
        'description' => null,
        'fields' => null,
        'fieldsValues' => null,
        'status' => null,
        'followUpAt' => null,
        'dueAt' => null
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
        'environmentId' => 'environment_id',
        'engineReference' => 'engine_reference',
        'name' => 'name',
        'description' => 'description',
        'fields' => 'fields',
        'fieldsValues' => 'fields_values',
        'status' => 'status',
        'followUpAt' => 'follow_up_at',
        'dueAt' => 'due_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'environmentId' => 'setEnvironmentId',
        'engineReference' => 'setEngineReference',
        'name' => 'setName',
        'description' => 'setDescription',
        'fields' => 'setFields',
        'fieldsValues' => 'setFieldsValues',
        'status' => 'setStatus',
        'followUpAt' => 'setFollowUpAt',
        'dueAt' => 'setDueAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'environmentId' => 'getEnvironmentId',
        'engineReference' => 'getEngineReference',
        'name' => 'getName',
        'description' => 'getDescription',
        'fields' => 'getFields',
        'fieldsValues' => 'getFieldsValues',
        'status' => 'getStatus',
        'followUpAt' => 'getFollowUpAt',
        'dueAt' => 'getDueAt'
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
        $this->container['environmentId'] = $data['environmentId'] ?? null;
        $this->container['engineReference'] = $data['engineReference'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['fields'] = $data['fields'] ?? null;
        $this->container['fieldsValues'] = $data['fieldsValues'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['followUpAt'] = $data['followUpAt'] ?? null;
        $this->container['dueAt'] = $data['dueAt'] ?? null;
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
     * Gets environmentId
     *
     * @return string|null
     */
    public function getEnvironmentId()
    {
        return $this->container['environmentId'];
    }

    /**
     * Sets environmentId
     *
     * @param string|null $environmentId environmentId
     *
     * @return self
     */
    public function setEnvironmentId($environmentId)
    {
        $this->container['environmentId'] = $environmentId;

        return $this;
    }

    /**
     * Gets engineReference
     *
     * @return string|null
     */
    public function getEngineReference()
    {
        return $this->container['engineReference'];
    }

    /**
     * Sets engineReference
     *
     * @param string|null $engineReference engineReference
     *
     * @return self
     */
    public function setEngineReference($engineReference)
    {
        $this->container['engineReference'] = $engineReference;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return NULL|null
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param NULL|null $fields fields
     *
     * @return self
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets fieldsValues
     *
     * @return NULL|null
     */
    public function getFieldsValues()
    {
        return $this->container['fieldsValues'];
    }

    /**
     * Sets fieldsValues
     *
     * @param NULL|null $fieldsValues fieldsValues
     *
     * @return self
     */
    public function setFieldsValues($fieldsValues)
    {
        $this->container['fieldsValues'] = $fieldsValues;

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
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets followUpAt
     *
     * @return string|null
     */
    public function getFollowUpAt()
    {
        return $this->container['followUpAt'];
    }

    /**
     * Sets followUpAt
     *
     * @param string|null $followUpAt followUpAt
     *
     * @return self
     */
    public function setFollowUpAt($followUpAt)
    {
        $this->container['followUpAt'] = $followUpAt;

        return $this;
    }

    /**
     * Gets dueAt
     *
     * @return string|null
     */
    public function getDueAt()
    {
        return $this->container['dueAt'];
    }

    /**
     * Sets dueAt
     *
     * @param string|null $dueAt dueAt
     *
     * @return self
     */
    public function setDueAt($dueAt)
    {
        $this->container['dueAt'] = $dueAt;

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


