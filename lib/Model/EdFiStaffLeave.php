<?php
/**
 * EdFiStaffLeave
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
 * EdFiStaffLeave Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EdFiStaffLeave implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_staffLeave';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'begin_date' => '\DateTime',
        'staff_leave_event_category_descriptor' => 'string',
        'staff_reference' => '\OpenAPI\Client\Model\EdFiStaffReference',
        'end_date' => '\DateTime',
        'reason' => 'string',
        'substitute_assigned' => 'bool',
        '_etag' => 'string',
        '_last_modified_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'begin_date' => 'date',
        'staff_leave_event_category_descriptor' => null,
        'staff_reference' => null,
        'end_date' => 'date',
        'reason' => null,
        'substitute_assigned' => null,
        '_etag' => null,
        '_last_modified_date' => 'date-time'
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
        'id' => 'id',
        'begin_date' => 'beginDate',
        'staff_leave_event_category_descriptor' => 'staffLeaveEventCategoryDescriptor',
        'staff_reference' => 'staffReference',
        'end_date' => 'endDate',
        'reason' => 'reason',
        'substitute_assigned' => 'substituteAssigned',
        '_etag' => '_etag',
        '_last_modified_date' => '_lastModifiedDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'begin_date' => 'setBeginDate',
        'staff_leave_event_category_descriptor' => 'setStaffLeaveEventCategoryDescriptor',
        'staff_reference' => 'setStaffReference',
        'end_date' => 'setEndDate',
        'reason' => 'setReason',
        'substitute_assigned' => 'setSubstituteAssigned',
        '_etag' => 'setEtag',
        '_last_modified_date' => 'setLastModifiedDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'begin_date' => 'getBeginDate',
        'staff_leave_event_category_descriptor' => 'getStaffLeaveEventCategoryDescriptor',
        'staff_reference' => 'getStaffReference',
        'end_date' => 'getEndDate',
        'reason' => 'getReason',
        'substitute_assigned' => 'getSubstituteAssigned',
        '_etag' => 'getEtag',
        '_last_modified_date' => 'getLastModifiedDate'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['begin_date'] = $data['begin_date'] ?? null;
        $this->container['staff_leave_event_category_descriptor'] = $data['staff_leave_event_category_descriptor'] ?? null;
        $this->container['staff_reference'] = $data['staff_reference'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['reason'] = $data['reason'] ?? null;
        $this->container['substitute_assigned'] = $data['substitute_assigned'] ?? null;
        $this->container['_etag'] = $data['_etag'] ?? null;
        $this->container['_last_modified_date'] = $data['_last_modified_date'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['begin_date'] === null) {
            $invalidProperties[] = "'begin_date' can't be null";
        }
        if ($this->container['staff_leave_event_category_descriptor'] === null) {
            $invalidProperties[] = "'staff_leave_event_category_descriptor' can't be null";
        }
        if ((mb_strlen($this->container['staff_leave_event_category_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'staff_leave_event_category_descriptor', the character length must be smaller than or equal to 306.";
        }

        if ($this->container['staff_reference'] === null) {
            $invalidProperties[] = "'staff_reference' can't be null";
        }
        if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) > 40)) {
            $invalidProperties[] = "invalid value for 'reason', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) < 1)) {
            $invalidProperties[] = "invalid value for 'reason', the character length must be bigger than or equal to 1.";
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets begin_date
     *
     * @return \DateTime
     */
    public function getBeginDate()
    {
        return $this->container['begin_date'];
    }

    /**
     * Sets begin_date
     *
     * @param \DateTime $begin_date The begin date of the staff leave.
     *
     * @return self
     */
    public function setBeginDate($begin_date)
    {
        $this->container['begin_date'] = $begin_date;

        return $this;
    }

    /**
     * Gets staff_leave_event_category_descriptor
     *
     * @return string
     */
    public function getStaffLeaveEventCategoryDescriptor()
    {
        return $this->container['staff_leave_event_category_descriptor'];
    }

    /**
     * Sets staff_leave_event_category_descriptor
     *
     * @param string $staff_leave_event_category_descriptor The code describing the type of leave taken.
     *
     * @return self
     */
    public function setStaffLeaveEventCategoryDescriptor($staff_leave_event_category_descriptor)
    {
        if ((mb_strlen($staff_leave_event_category_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $staff_leave_event_category_descriptor when calling EdFiStaffLeave., must be smaller than or equal to 306.');
        }

        $this->container['staff_leave_event_category_descriptor'] = $staff_leave_event_category_descriptor;

        return $this;
    }

    /**
     * Gets staff_reference
     *
     * @return \OpenAPI\Client\Model\EdFiStaffReference
     */
    public function getStaffReference()
    {
        return $this->container['staff_reference'];
    }

    /**
     * Sets staff_reference
     *
     * @param \OpenAPI\Client\Model\EdFiStaffReference $staff_reference staff_reference
     *
     * @return self
     */
    public function setStaffReference($staff_reference)
    {
        $this->container['staff_reference'] = $staff_reference;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime|null $end_date The end date of the staff leave.
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason Expanded reason for the staff leave.
     *
     * @return self
     */
    public function setReason($reason)
    {
        if (!is_null($reason) && (mb_strlen($reason) > 40)) {
            throw new \InvalidArgumentException('invalid length for $reason when calling EdFiStaffLeave., must be smaller than or equal to 40.');
        }
        if (!is_null($reason) && (mb_strlen($reason) < 1)) {
            throw new \InvalidArgumentException('invalid length for $reason when calling EdFiStaffLeave., must be bigger than or equal to 1.');
        }

        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets substitute_assigned
     *
     * @return bool|null
     */
    public function getSubstituteAssigned()
    {
        return $this->container['substitute_assigned'];
    }

    /**
     * Sets substitute_assigned
     *
     * @param bool|null $substitute_assigned Indicator of whether a substitute was assigned during the period of staff leave.
     *
     * @return self
     */
    public function setSubstituteAssigned($substitute_assigned)
    {
        $this->container['substitute_assigned'] = $substitute_assigned;

        return $this;
    }

    /**
     * Gets _etag
     *
     * @return string|null
     */
    public function getEtag()
    {
        return $this->container['_etag'];
    }

    /**
     * Sets _etag
     *
     * @param string|null $_etag A unique system-generated value that identifies the version of the resource.
     *
     * @return self
     */
    public function setEtag($_etag)
    {
        $this->container['_etag'] = $_etag;

        return $this;
    }

    /**
     * Gets _last_modified_date
     *
     * @return \DateTime|null
     */
    public function getLastModifiedDate()
    {
        return $this->container['_last_modified_date'];
    }

    /**
     * Sets _last_modified_date
     *
     * @param \DateTime|null $_last_modified_date The date and time the resource was last modified.
     *
     * @return self
     */
    public function setLastModifiedDate($_last_modified_date)
    {
        $this->container['_last_modified_date'] = $_last_modified_date;

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

