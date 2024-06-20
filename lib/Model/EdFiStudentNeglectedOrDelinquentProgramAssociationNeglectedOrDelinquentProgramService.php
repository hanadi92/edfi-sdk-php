<?php
/**
 * EdFiStudentNeglectedOrDelinquentProgramAssociationNeglectedOrDelinquentProgramService
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Ed-Fi Operational Data Store API
 *
 * The Ed-Fi ODS / API enables applications to read and write education data stored in an Ed-Fi ODS through a secure REST interface.  ***  > *Note: Consumers of ODS / API information should sanitize all data for display and storage. The ODS / API provides reasonable safeguards against cross-site scripting attacks and other malicious content, but the platform does not and cannot guarantee that the data it contains is free of all potentially harmful content.*  ***
 *
 * The version of the OpenAPI document: 3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1
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
 * EdFiStudentNeglectedOrDelinquentProgramAssociationNeglectedOrDelinquentProgramService Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EdFiStudentNeglectedOrDelinquentProgramAssociationNeglectedOrDelinquentProgramService implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_studentNeglectedOrDelinquentProgramAssociationNeglectedOrDelinquentProgramService';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'neglected_or_delinquent_program_service_descriptor' => 'string',
        'primary_indicator' => 'bool',
        'service_begin_date' => '\DateTime',
        'service_end_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'neglected_or_delinquent_program_service_descriptor' => null,
        'primary_indicator' => null,
        'service_begin_date' => 'date',
        'service_end_date' => 'date'
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
        'neglected_or_delinquent_program_service_descriptor' => 'neglectedOrDelinquentProgramServiceDescriptor',
        'primary_indicator' => 'primaryIndicator',
        'service_begin_date' => 'serviceBeginDate',
        'service_end_date' => 'serviceEndDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'neglected_or_delinquent_program_service_descriptor' => 'setNeglectedOrDelinquentProgramServiceDescriptor',
        'primary_indicator' => 'setPrimaryIndicator',
        'service_begin_date' => 'setServiceBeginDate',
        'service_end_date' => 'setServiceEndDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'neglected_or_delinquent_program_service_descriptor' => 'getNeglectedOrDelinquentProgramServiceDescriptor',
        'primary_indicator' => 'getPrimaryIndicator',
        'service_begin_date' => 'getServiceBeginDate',
        'service_end_date' => 'getServiceEndDate'
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
        $this->container['neglected_or_delinquent_program_service_descriptor'] = $data['neglected_or_delinquent_program_service_descriptor'] ?? null;
        $this->container['primary_indicator'] = $data['primary_indicator'] ?? null;
        $this->container['service_begin_date'] = $data['service_begin_date'] ?? null;
        $this->container['service_end_date'] = $data['service_end_date'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['neglected_or_delinquent_program_service_descriptor'] === null) {
            $invalidProperties[] = "'neglected_or_delinquent_program_service_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['neglected_or_delinquent_program_service_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'neglected_or_delinquent_program_service_descriptor', the character length must be smaller than or equal to 306.";
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
     * Gets neglected_or_delinquent_program_service_descriptor
     *
     * @return string
     */
    public function getNeglectedOrDelinquentProgramServiceDescriptor()
    {
        return $this->container['neglected_or_delinquent_program_service_descriptor'];
    }

    /**
     * Sets neglected_or_delinquent_program_service_descriptor
     *
     * @param string $neglected_or_delinquent_program_service_descriptor Indicates the service being provided to the student by the neglected or delinquent program.
     *
     * @return self
     */
    public function setNeglectedOrDelinquentProgramServiceDescriptor($neglected_or_delinquent_program_service_descriptor)
    {
        if ((mb_strlen($neglected_or_delinquent_program_service_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $neglected_or_delinquent_program_service_descriptor when calling EdFiStudentNeglectedOrDelinquentProgramAssociationNeglectedOrDelinquentProgramService., must be smaller than or equal to 306.');
        }

        $this->container['neglected_or_delinquent_program_service_descriptor'] = $neglected_or_delinquent_program_service_descriptor;

        return $this;
    }

    /**
     * Gets primary_indicator
     *
     * @return bool|null
     */
    public function getPrimaryIndicator()
    {
        return $this->container['primary_indicator'];
    }

    /**
     * Sets primary_indicator
     *
     * @param bool|null $primary_indicator True if service is a primary service.
     *
     * @return self
     */
    public function setPrimaryIndicator($primary_indicator)
    {
        $this->container['primary_indicator'] = $primary_indicator;

        return $this;
    }

    /**
     * Gets service_begin_date
     *
     * @return \DateTime|null
     */
    public function getServiceBeginDate()
    {
        return $this->container['service_begin_date'];
    }

    /**
     * Sets service_begin_date
     *
     * @param \DateTime|null $service_begin_date First date the student was in this option for the current school year.
     *
     * @return self
     */
    public function setServiceBeginDate($service_begin_date)
    {
        $this->container['service_begin_date'] = $service_begin_date;

        return $this;
    }

    /**
     * Gets service_end_date
     *
     * @return \DateTime|null
     */
    public function getServiceEndDate()
    {
        return $this->container['service_end_date'];
    }

    /**
     * Sets service_end_date
     *
     * @param \DateTime|null $service_end_date Last date the student was in this option for the current school year.
     *
     * @return self
     */
    public function setServiceEndDate($service_end_date)
    {
        $this->container['service_end_date'] = $service_end_date;

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
     * @return mixed|null
     */
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
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

