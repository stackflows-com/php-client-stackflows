<?php
/**
 * GetEnvironmentUserTasksListRequest
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
 * GetEnvironmentUserTasksListRequest Class Doc Comment
 *
 * @category Class
 * @package  Stackflows\Clients\Stackflows
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetEnvironmentUserTasksListRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getEnvironmentUserTasksList_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'activity' => 'string',
        'createdAtFrom' => 'string',
        'createdAtTill' => 'string',
        'activeOnly' => 'bool',
        'offset' => 'int',
        'limit' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'activity' => null,
        'createdAtFrom' => null,
        'createdAtTill' => null,
        'activeOnly' => null,
        'offset' => null,
        'limit' => null
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
        'activity' => 'activity',
        'createdAtFrom' => 'created_at_from',
        'createdAtTill' => 'created_at_till',
        'activeOnly' => 'active_only',
        'offset' => 'offset',
        'limit' => 'limit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activity' => 'setActivity',
        'createdAtFrom' => 'setCreatedAtFrom',
        'createdAtTill' => 'setCreatedAtTill',
        'activeOnly' => 'setActiveOnly',
        'offset' => 'setOffset',
        'limit' => 'setLimit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activity' => 'getActivity',
        'createdAtFrom' => 'getCreatedAtFrom',
        'createdAtTill' => 'getCreatedAtTill',
        'activeOnly' => 'getActiveOnly',
        'offset' => 'getOffset',
        'limit' => 'getLimit'
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
        $this->container['activity'] = $data['activity'] ?? null;
        $this->container['createdAtFrom'] = $data['createdAtFrom'] ?? null;
        $this->container['createdAtTill'] = $data['createdAtTill'] ?? null;
        $this->container['activeOnly'] = $data['activeOnly'] ?? null;
        $this->container['offset'] = $data['offset'] ?? null;
        $this->container['limit'] = $data['limit'] ?? null;
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
     * Gets activity
     *
     * @return string|null
     */
    public function getActivity()
    {
        return $this->container['activity'];
    }

    /**
     * Sets activity
     *
     * @param string|null $activity 
     *
     * @return self
     */
    public function setActivity($activity)
    {
        $this->container['activity'] = $activity;

        return $this;
    }

    /**
     * Gets createdAtFrom
     *
     * @return string|null
     */
    public function getCreatedAtFrom()
    {
        return $this->container['createdAtFrom'];
    }

    /**
     * Sets createdAtFrom
     *
     * @param string|null $createdAtFrom Must be a valid date.
     *
     * @return self
     */
    public function setCreatedAtFrom($createdAtFrom)
    {
        $this->container['createdAtFrom'] = $createdAtFrom;

        return $this;
    }

    /**
     * Gets createdAtTill
     *
     * @return string|null
     */
    public function getCreatedAtTill()
    {
        return $this->container['createdAtTill'];
    }

    /**
     * Sets createdAtTill
     *
     * @param string|null $createdAtTill Must be a valid date.
     *
     * @return self
     */
    public function setCreatedAtTill($createdAtTill)
    {
        $this->container['createdAtTill'] = $createdAtTill;

        return $this;
    }

    /**
     * Gets activeOnly
     *
     * @return bool|null
     */
    public function getActiveOnly()
    {
        return $this->container['activeOnly'];
    }

    /**
     * Sets activeOnly
     *
     * @param bool|null $activeOnly 
     *
     * @return self
     */
    public function setActiveOnly($activeOnly)
    {
        $this->container['activeOnly'] = $activeOnly;

        return $this;
    }

    /**
     * Gets offset
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     *
     * @param int|null $offset 
     *
     * @return self
     */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int|null $limit 
     *
     * @return self
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

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


