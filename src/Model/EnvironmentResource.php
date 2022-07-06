<?php
/**
 * EnvironmentResource
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
 * EnvironmentResource Class Doc Comment
 *
 * @category Class
 * @package  Stackflows\Clients\Stackflows
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EnvironmentResource implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EnvironmentResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'companyId' => 'string',
        'engineId' => 'string',
        'engineReference' => 'string',
        'production' => 'bool',
        'name' => 'string',
        'authToken' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'companyId' => null,
        'engineId' => null,
        'engineReference' => null,
        'production' => null,
        'name' => null,
        'authToken' => null
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
        'companyId' => 'company_id',
        'engineId' => 'engine_id',
        'engineReference' => 'engine_reference',
        'production' => 'production',
        'name' => 'name',
        'authToken' => 'auth_token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'companyId' => 'setCompanyId',
        'engineId' => 'setEngineId',
        'engineReference' => 'setEngineReference',
        'production' => 'setProduction',
        'name' => 'setName',
        'authToken' => 'setAuthToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'companyId' => 'getCompanyId',
        'engineId' => 'getEngineId',
        'engineReference' => 'getEngineReference',
        'production' => 'getProduction',
        'name' => 'getName',
        'authToken' => 'getAuthToken'
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
        $this->container['companyId'] = $data['companyId'] ?? null;
        $this->container['engineId'] = $data['engineId'] ?? null;
        $this->container['engineReference'] = $data['engineReference'] ?? null;
        $this->container['production'] = $data['production'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['authToken'] = $data['authToken'] ?? null;
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
     * Gets companyId
     *
     * @return string|null
     */
    public function getCompanyId()
    {
        return $this->container['companyId'];
    }

    /**
     * Sets companyId
     *
     * @param string|null $companyId companyId
     *
     * @return self
     */
    public function setCompanyId($companyId)
    {
        $this->container['companyId'] = $companyId;

        return $this;
    }

    /**
     * Gets engineId
     *
     * @return string|null
     */
    public function getEngineId()
    {
        return $this->container['engineId'];
    }

    /**
     * Sets engineId
     *
     * @param string|null $engineId engineId
     *
     * @return self
     */
    public function setEngineId($engineId)
    {
        $this->container['engineId'] = $engineId;

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
     * Gets production
     *
     * @return bool|null
     */
    public function getProduction()
    {
        return $this->container['production'];
    }

    /**
     * Sets production
     *
     * @param bool|null $production production
     *
     * @return self
     */
    public function setProduction($production)
    {
        $this->container['production'] = $production;

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
     * Gets authToken
     *
     * @return string|null
     */
    public function getAuthToken()
    {
        return $this->container['authToken'];
    }

    /**
     * Sets authToken
     *
     * @param string|null $authToken authToken
     *
     * @return self
     */
    public function setAuthToken($authToken)
    {
        $this->container['authToken'] = $authToken;

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


