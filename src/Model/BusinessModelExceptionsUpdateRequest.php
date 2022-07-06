<?php
/**
 * BusinessModelExceptionsUpdateRequest
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
 * BusinessModelExceptionsUpdateRequest Class Doc Comment
 *
 * @category Class
 * @package  Stackflows\Clients\Stackflows
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BusinessModelExceptionsUpdateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'businessModelExceptionsUpdate_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'source' => 'string',
        'solution' => 'string',
        'consequences' => 'string',
        'incidence' => 'string',
        'impact' => 'string',
        'causativeOrganizationUnitId' => 'string',
        'responsibleOrganizationUnitId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'source' => null,
        'solution' => null,
        'consequences' => null,
        'incidence' => null,
        'impact' => null,
        'causativeOrganizationUnitId' => null,
        'responsibleOrganizationUnitId' => null
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
        'source' => 'source',
        'solution' => 'solution',
        'consequences' => 'consequences',
        'incidence' => 'incidence',
        'impact' => 'impact',
        'causativeOrganizationUnitId' => 'causative_organization_unit_id',
        'responsibleOrganizationUnitId' => 'responsible_organization_unit_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'source' => 'setSource',
        'solution' => 'setSolution',
        'consequences' => 'setConsequences',
        'incidence' => 'setIncidence',
        'impact' => 'setImpact',
        'causativeOrganizationUnitId' => 'setCausativeOrganizationUnitId',
        'responsibleOrganizationUnitId' => 'setResponsibleOrganizationUnitId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'source' => 'getSource',
        'solution' => 'getSolution',
        'consequences' => 'getConsequences',
        'incidence' => 'getIncidence',
        'impact' => 'getImpact',
        'causativeOrganizationUnitId' => 'getCausativeOrganizationUnitId',
        'responsibleOrganizationUnitId' => 'getResponsibleOrganizationUnitId'
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
        $this->container['source'] = $data['source'] ?? null;
        $this->container['solution'] = $data['solution'] ?? null;
        $this->container['consequences'] = $data['consequences'] ?? null;
        $this->container['incidence'] = $data['incidence'] ?? null;
        $this->container['impact'] = $data['impact'] ?? null;
        $this->container['causativeOrganizationUnitId'] = $data['causativeOrganizationUnitId'] ?? null;
        $this->container['responsibleOrganizationUnitId'] = $data['responsibleOrganizationUnitId'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['incidence'] === null) {
            $invalidProperties[] = "'incidence' can't be null";
        }
        if ($this->container['impact'] === null) {
            $invalidProperties[] = "'impact' can't be null";
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
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source 
     *
     * @return self
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets solution
     *
     * @return string|null
     */
    public function getSolution()
    {
        return $this->container['solution'];
    }

    /**
     * Sets solution
     *
     * @param string|null $solution 
     *
     * @return self
     */
    public function setSolution($solution)
    {
        $this->container['solution'] = $solution;

        return $this;
    }

    /**
     * Gets consequences
     *
     * @return string|null
     */
    public function getConsequences()
    {
        return $this->container['consequences'];
    }

    /**
     * Sets consequences
     *
     * @param string|null $consequences 
     *
     * @return self
     */
    public function setConsequences($consequences)
    {
        $this->container['consequences'] = $consequences;

        return $this;
    }

    /**
     * Gets incidence
     *
     * @return string
     */
    public function getIncidence()
    {
        return $this->container['incidence'];
    }

    /**
     * Sets incidence
     *
     * @param string $incidence Must be one of <code>very_low</code>, <code>low</code>, <code>medium</code>, <code>high</code>, or <code>very_high</code>.
     *
     * @return self
     */
    public function setIncidence($incidence)
    {
        $this->container['incidence'] = $incidence;

        return $this;
    }

    /**
     * Gets impact
     *
     * @return string
     */
    public function getImpact()
    {
        return $this->container['impact'];
    }

    /**
     * Sets impact
     *
     * @param string $impact Must be one of <code>none</code>, <code>low</code>, <code>medium</code>, or <code>high</code>.
     *
     * @return self
     */
    public function setImpact($impact)
    {
        $this->container['impact'] = $impact;

        return $this;
    }

    /**
     * Gets causativeOrganizationUnitId
     *
     * @return string|null
     */
    public function getCausativeOrganizationUnitId()
    {
        return $this->container['causativeOrganizationUnitId'];
    }

    /**
     * Sets causativeOrganizationUnitId
     *
     * @param string|null $causativeOrganizationUnitId 
     *
     * @return self
     */
    public function setCausativeOrganizationUnitId($causativeOrganizationUnitId)
    {
        $this->container['causativeOrganizationUnitId'] = $causativeOrganizationUnitId;

        return $this;
    }

    /**
     * Gets responsibleOrganizationUnitId
     *
     * @return string|null
     */
    public function getResponsibleOrganizationUnitId()
    {
        return $this->container['responsibleOrganizationUnitId'];
    }

    /**
     * Sets responsibleOrganizationUnitId
     *
     * @param string|null $responsibleOrganizationUnitId 
     *
     * @return self
     */
    public function setResponsibleOrganizationUnitId($responsibleOrganizationUnitId)
    {
        $this->container['responsibleOrganizationUnitId'] = $responsibleOrganizationUnitId;

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


