<?php
/**
 * TrackedChangesEdFiCompetencyObjectiveKey
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
 * TrackedChangesEdFiCompetencyObjectiveKey Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TrackedChangesEdFiCompetencyObjectiveKey implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'trackedChanges_edFi_competencyObjectiveKey';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'objective_grade_level_descriptor' => 'string',
        'objective' => 'string',
        'education_organization_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'objective_grade_level_descriptor' => null,
        'objective' => null,
        'education_organization_id' => 'int64'
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
        'objective_grade_level_descriptor' => 'objectiveGradeLevelDescriptor',
        'objective' => 'objective',
        'education_organization_id' => 'educationOrganizationId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'objective_grade_level_descriptor' => 'setObjectiveGradeLevelDescriptor',
        'objective' => 'setObjective',
        'education_organization_id' => 'setEducationOrganizationId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'objective_grade_level_descriptor' => 'getObjectiveGradeLevelDescriptor',
        'objective' => 'getObjective',
        'education_organization_id' => 'getEducationOrganizationId'
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
        $this->container['objective_grade_level_descriptor'] = $data['objective_grade_level_descriptor'] ?? null;
        $this->container['objective'] = $data['objective'] ?? null;
        $this->container['education_organization_id'] = $data['education_organization_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['objective_grade_level_descriptor']) && (mb_strlen($this->container['objective_grade_level_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'objective_grade_level_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['objective']) && (mb_strlen($this->container['objective']) > 60)) {
            $invalidProperties[] = "invalid value for 'objective', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['objective']) && (mb_strlen($this->container['objective']) < 1)) {
            $invalidProperties[] = "invalid value for 'objective', the character length must be bigger than or equal to 1.";
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
     * Gets objective_grade_level_descriptor
     *
     * @return string|null
     */
    public function getObjectiveGradeLevelDescriptor()
    {
        return $this->container['objective_grade_level_descriptor'];
    }

    /**
     * Sets objective_grade_level_descriptor
     *
     * @param string|null $objective_grade_level_descriptor The grade level for which the competency objective is targeted.
     *
     * @return self
     */
    public function setObjectiveGradeLevelDescriptor($objective_grade_level_descriptor)
    {
        if (!is_null($objective_grade_level_descriptor) && (mb_strlen($objective_grade_level_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $objective_grade_level_descriptor when calling TrackedChangesEdFiCompetencyObjectiveKey., must be smaller than or equal to 306.');
        }

        $this->container['objective_grade_level_descriptor'] = $objective_grade_level_descriptor;

        return $this;
    }

    /**
     * Gets objective
     *
     * @return string|null
     */
    public function getObjective()
    {
        return $this->container['objective'];
    }

    /**
     * Sets objective
     *
     * @param string|null $objective The designated title of the competency objective.
     *
     * @return self
     */
    public function setObjective($objective)
    {
        if (!is_null($objective) && (mb_strlen($objective) > 60)) {
            throw new \InvalidArgumentException('invalid length for $objective when calling TrackedChangesEdFiCompetencyObjectiveKey., must be smaller than or equal to 60.');
        }
        if (!is_null($objective) && (mb_strlen($objective) < 1)) {
            throw new \InvalidArgumentException('invalid length for $objective when calling TrackedChangesEdFiCompetencyObjectiveKey., must be bigger than or equal to 1.');
        }

        $this->container['objective'] = $objective;

        return $this;
    }

    /**
     * Gets education_organization_id
     *
     * @return int|null
     */
    public function getEducationOrganizationId()
    {
        return $this->container['education_organization_id'];
    }

    /**
     * Sets education_organization_id
     *
     * @param int|null $education_organization_id The identifier assigned to an education organization.
     *
     * @return self
     */
    public function setEducationOrganizationId($education_organization_id)
    {
        $this->container['education_organization_id'] = $education_organization_id;

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

