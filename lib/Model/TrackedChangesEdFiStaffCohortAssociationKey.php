<?php
/**
 * TrackedChangesEdFiStaffCohortAssociationKey
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
 * TrackedChangesEdFiStaffCohortAssociationKey Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TrackedChangesEdFiStaffCohortAssociationKey implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'trackedChanges_edFi_staffCohortAssociationKey';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'begin_date' => '\DateTime',
        'cohort_identifier' => 'string',
        'education_organization_id' => 'int',
        'staff_unique_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'begin_date' => 'date',
        'cohort_identifier' => null,
        'education_organization_id' => 'int64',
        'staff_unique_id' => null
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
        'begin_date' => 'beginDate',
        'cohort_identifier' => 'cohortIdentifier',
        'education_organization_id' => 'educationOrganizationId',
        'staff_unique_id' => 'staffUniqueId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'begin_date' => 'setBeginDate',
        'cohort_identifier' => 'setCohortIdentifier',
        'education_organization_id' => 'setEducationOrganizationId',
        'staff_unique_id' => 'setStaffUniqueId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'begin_date' => 'getBeginDate',
        'cohort_identifier' => 'getCohortIdentifier',
        'education_organization_id' => 'getEducationOrganizationId',
        'staff_unique_id' => 'getStaffUniqueId'
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
        $this->container['begin_date'] = $data['begin_date'] ?? null;
        $this->container['cohort_identifier'] = $data['cohort_identifier'] ?? null;
        $this->container['education_organization_id'] = $data['education_organization_id'] ?? null;
        $this->container['staff_unique_id'] = $data['staff_unique_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['cohort_identifier']) && (mb_strlen($this->container['cohort_identifier']) > 36)) {
            $invalidProperties[] = "invalid value for 'cohort_identifier', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['cohort_identifier']) && (mb_strlen($this->container['cohort_identifier']) < 1)) {
            $invalidProperties[] = "invalid value for 'cohort_identifier', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['staff_unique_id']) && (mb_strlen($this->container['staff_unique_id']) > 32)) {
            $invalidProperties[] = "invalid value for 'staff_unique_id', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['staff_unique_id']) && (mb_strlen($this->container['staff_unique_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'staff_unique_id', the character length must be bigger than or equal to 1.";
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
     * Gets begin_date
     *
     * @return \DateTime|null
     */
    public function getBeginDate()
    {
        return $this->container['begin_date'];
    }

    /**
     * Sets begin_date
     *
     * @param \DateTime|null $begin_date Start date for the association of staff to this cohort.
     *
     * @return self
     */
    public function setBeginDate($begin_date)
    {
        $this->container['begin_date'] = $begin_date;

        return $this;
    }

    /**
     * Gets cohort_identifier
     *
     * @return string|null
     */
    public function getCohortIdentifier()
    {
        return $this->container['cohort_identifier'];
    }

    /**
     * Sets cohort_identifier
     *
     * @param string|null $cohort_identifier The name or ID for the cohort.
     *
     * @return self
     */
    public function setCohortIdentifier($cohort_identifier)
    {
        if (!is_null($cohort_identifier) && (mb_strlen($cohort_identifier) > 36)) {
            throw new \InvalidArgumentException('invalid length for $cohort_identifier when calling TrackedChangesEdFiStaffCohortAssociationKey., must be smaller than or equal to 36.');
        }
        if (!is_null($cohort_identifier) && (mb_strlen($cohort_identifier) < 1)) {
            throw new \InvalidArgumentException('invalid length for $cohort_identifier when calling TrackedChangesEdFiStaffCohortAssociationKey., must be bigger than or equal to 1.');
        }

        $this->container['cohort_identifier'] = $cohort_identifier;

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
     * Gets staff_unique_id
     *
     * @return string|null
     */
    public function getStaffUniqueId()
    {
        return $this->container['staff_unique_id'];
    }

    /**
     * Sets staff_unique_id
     *
     * @param string|null $staff_unique_id A unique alphanumeric code assigned to a staff.
     *
     * @return self
     */
    public function setStaffUniqueId($staff_unique_id)
    {
        if (!is_null($staff_unique_id) && (mb_strlen($staff_unique_id) > 32)) {
            throw new \InvalidArgumentException('invalid length for $staff_unique_id when calling TrackedChangesEdFiStaffCohortAssociationKey., must be smaller than or equal to 32.');
        }
        if (!is_null($staff_unique_id) && (mb_strlen($staff_unique_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $staff_unique_id when calling TrackedChangesEdFiStaffCohortAssociationKey., must be bigger than or equal to 1.');
        }

        $this->container['staff_unique_id'] = $staff_unique_id;

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


