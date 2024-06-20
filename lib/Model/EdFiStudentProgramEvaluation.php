<?php
/**
 * EdFiStudentProgramEvaluation
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
 * EdFiStudentProgramEvaluation Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EdFiStudentProgramEvaluation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_studentProgramEvaluation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'evaluation_date' => '\DateTime',
        'education_organization_reference' => '\OpenAPI\Client\Model\EdFiEducationOrganizationReference',
        'program_evaluation_reference' => '\OpenAPI\Client\Model\EdFiProgramEvaluationReference',
        'staff_evaluator_staff_reference' => '\OpenAPI\Client\Model\EdFiStaffReference',
        'student_reference' => '\OpenAPI\Client\Model\EdFiStudentReference',
        'evaluation_duration' => 'int',
        'external_evaluators' => '\OpenAPI\Client\Model\EdFiStudentProgramEvaluationExternalEvaluator[]',
        'student_evaluation_elements' => '\OpenAPI\Client\Model\EdFiStudentProgramEvaluationStudentEvaluationElement[]',
        'student_evaluation_objectives' => '\OpenAPI\Client\Model\EdFiStudentProgramEvaluationStudentEvaluationObjective[]',
        'summary_evaluation_comment' => 'string',
        'summary_evaluation_numeric_rating' => 'double',
        'summary_evaluation_rating_level_descriptor' => 'string',
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
        'evaluation_date' => 'date',
        'education_organization_reference' => null,
        'program_evaluation_reference' => null,
        'staff_evaluator_staff_reference' => null,
        'student_reference' => null,
        'evaluation_duration' => 'int32',
        'external_evaluators' => null,
        'student_evaluation_elements' => null,
        'student_evaluation_objectives' => null,
        'summary_evaluation_comment' => null,
        'summary_evaluation_numeric_rating' => 'double',
        'summary_evaluation_rating_level_descriptor' => null,
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
        'evaluation_date' => 'evaluationDate',
        'education_organization_reference' => 'educationOrganizationReference',
        'program_evaluation_reference' => 'programEvaluationReference',
        'staff_evaluator_staff_reference' => 'staffEvaluatorStaffReference',
        'student_reference' => 'studentReference',
        'evaluation_duration' => 'evaluationDuration',
        'external_evaluators' => 'externalEvaluators',
        'student_evaluation_elements' => 'studentEvaluationElements',
        'student_evaluation_objectives' => 'studentEvaluationObjectives',
        'summary_evaluation_comment' => 'summaryEvaluationComment',
        'summary_evaluation_numeric_rating' => 'summaryEvaluationNumericRating',
        'summary_evaluation_rating_level_descriptor' => 'summaryEvaluationRatingLevelDescriptor',
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
        'evaluation_date' => 'setEvaluationDate',
        'education_organization_reference' => 'setEducationOrganizationReference',
        'program_evaluation_reference' => 'setProgramEvaluationReference',
        'staff_evaluator_staff_reference' => 'setStaffEvaluatorStaffReference',
        'student_reference' => 'setStudentReference',
        'evaluation_duration' => 'setEvaluationDuration',
        'external_evaluators' => 'setExternalEvaluators',
        'student_evaluation_elements' => 'setStudentEvaluationElements',
        'student_evaluation_objectives' => 'setStudentEvaluationObjectives',
        'summary_evaluation_comment' => 'setSummaryEvaluationComment',
        'summary_evaluation_numeric_rating' => 'setSummaryEvaluationNumericRating',
        'summary_evaluation_rating_level_descriptor' => 'setSummaryEvaluationRatingLevelDescriptor',
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
        'evaluation_date' => 'getEvaluationDate',
        'education_organization_reference' => 'getEducationOrganizationReference',
        'program_evaluation_reference' => 'getProgramEvaluationReference',
        'staff_evaluator_staff_reference' => 'getStaffEvaluatorStaffReference',
        'student_reference' => 'getStudentReference',
        'evaluation_duration' => 'getEvaluationDuration',
        'external_evaluators' => 'getExternalEvaluators',
        'student_evaluation_elements' => 'getStudentEvaluationElements',
        'student_evaluation_objectives' => 'getStudentEvaluationObjectives',
        'summary_evaluation_comment' => 'getSummaryEvaluationComment',
        'summary_evaluation_numeric_rating' => 'getSummaryEvaluationNumericRating',
        'summary_evaluation_rating_level_descriptor' => 'getSummaryEvaluationRatingLevelDescriptor',
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
        $this->container['evaluation_date'] = $data['evaluation_date'] ?? null;
        $this->container['education_organization_reference'] = $data['education_organization_reference'] ?? null;
        $this->container['program_evaluation_reference'] = $data['program_evaluation_reference'] ?? null;
        $this->container['staff_evaluator_staff_reference'] = $data['staff_evaluator_staff_reference'] ?? null;
        $this->container['student_reference'] = $data['student_reference'] ?? null;
        $this->container['evaluation_duration'] = $data['evaluation_duration'] ?? null;
        $this->container['external_evaluators'] = $data['external_evaluators'] ?? null;
        $this->container['student_evaluation_elements'] = $data['student_evaluation_elements'] ?? null;
        $this->container['student_evaluation_objectives'] = $data['student_evaluation_objectives'] ?? null;
        $this->container['summary_evaluation_comment'] = $data['summary_evaluation_comment'] ?? null;
        $this->container['summary_evaluation_numeric_rating'] = $data['summary_evaluation_numeric_rating'] ?? null;
        $this->container['summary_evaluation_rating_level_descriptor'] = $data['summary_evaluation_rating_level_descriptor'] ?? null;
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

        if ($this->container['evaluation_date'] === null) {
            $invalidProperties[] = "'evaluation_date' can't be null";
        }
        if ($this->container['program_evaluation_reference'] === null) {
            $invalidProperties[] = "'program_evaluation_reference' can't be null";
        }
        if ($this->container['student_reference'] === null) {
            $invalidProperties[] = "'student_reference' can't be null";
        }
        if (!is_null($this->container['evaluation_duration']) && ($this->container['evaluation_duration'] < 1)) {
            $invalidProperties[] = "invalid value for 'evaluation_duration', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['summary_evaluation_comment']) && (mb_strlen($this->container['summary_evaluation_comment']) > 1024)) {
            $invalidProperties[] = "invalid value for 'summary_evaluation_comment', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['summary_evaluation_comment']) && (mb_strlen($this->container['summary_evaluation_comment']) < 1)) {
            $invalidProperties[] = "invalid value for 'summary_evaluation_comment', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['summary_evaluation_rating_level_descriptor']) && (mb_strlen($this->container['summary_evaluation_rating_level_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'summary_evaluation_rating_level_descriptor', the character length must be smaller than or equal to 306.";
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
     * Gets evaluation_date
     *
     * @return \DateTime
     */
    public function getEvaluationDate()
    {
        return $this->container['evaluation_date'];
    }

    /**
     * Sets evaluation_date
     *
     * @param \DateTime $evaluation_date The month, day, and year on which the evaluation was conducted.
     *
     * @return self
     */
    public function setEvaluationDate($evaluation_date)
    {
        $this->container['evaluation_date'] = $evaluation_date;

        return $this;
    }

    /**
     * Gets education_organization_reference
     *
     * @return \OpenAPI\Client\Model\EdFiEducationOrganizationReference|null
     */
    public function getEducationOrganizationReference()
    {
        return $this->container['education_organization_reference'];
    }

    /**
     * Sets education_organization_reference
     *
     * @param \OpenAPI\Client\Model\EdFiEducationOrganizationReference|null $education_organization_reference education_organization_reference
     *
     * @return self
     */
    public function setEducationOrganizationReference($education_organization_reference)
    {
        $this->container['education_organization_reference'] = $education_organization_reference;

        return $this;
    }

    /**
     * Gets program_evaluation_reference
     *
     * @return \OpenAPI\Client\Model\EdFiProgramEvaluationReference
     */
    public function getProgramEvaluationReference()
    {
        return $this->container['program_evaluation_reference'];
    }

    /**
     * Sets program_evaluation_reference
     *
     * @param \OpenAPI\Client\Model\EdFiProgramEvaluationReference $program_evaluation_reference program_evaluation_reference
     *
     * @return self
     */
    public function setProgramEvaluationReference($program_evaluation_reference)
    {
        $this->container['program_evaluation_reference'] = $program_evaluation_reference;

        return $this;
    }

    /**
     * Gets staff_evaluator_staff_reference
     *
     * @return \OpenAPI\Client\Model\EdFiStaffReference|null
     */
    public function getStaffEvaluatorStaffReference()
    {
        return $this->container['staff_evaluator_staff_reference'];
    }

    /**
     * Sets staff_evaluator_staff_reference
     *
     * @param \OpenAPI\Client\Model\EdFiStaffReference|null $staff_evaluator_staff_reference staff_evaluator_staff_reference
     *
     * @return self
     */
    public function setStaffEvaluatorStaffReference($staff_evaluator_staff_reference)
    {
        $this->container['staff_evaluator_staff_reference'] = $staff_evaluator_staff_reference;

        return $this;
    }

    /**
     * Gets student_reference
     *
     * @return \OpenAPI\Client\Model\EdFiStudentReference
     */
    public function getStudentReference()
    {
        return $this->container['student_reference'];
    }

    /**
     * Sets student_reference
     *
     * @param \OpenAPI\Client\Model\EdFiStudentReference $student_reference student_reference
     *
     * @return self
     */
    public function setStudentReference($student_reference)
    {
        $this->container['student_reference'] = $student_reference;

        return $this;
    }

    /**
     * Gets evaluation_duration
     *
     * @return int|null
     */
    public function getEvaluationDuration()
    {
        return $this->container['evaluation_duration'];
    }

    /**
     * Sets evaluation_duration
     *
     * @param int|null $evaluation_duration The actual or estimated number of clock minutes during which the evaluation was conducted.
     *
     * @return self
     */
    public function setEvaluationDuration($evaluation_duration)
    {

        if (!is_null($evaluation_duration) && ($evaluation_duration < 1)) {
            throw new \InvalidArgumentException('invalid value for $evaluation_duration when calling EdFiStudentProgramEvaluation., must be bigger than or equal to 1.');
        }

        $this->container['evaluation_duration'] = $evaluation_duration;

        return $this;
    }

    /**
     * Gets external_evaluators
     *
     * @return \OpenAPI\Client\Model\EdFiStudentProgramEvaluationExternalEvaluator[]|null
     */
    public function getExternalEvaluators()
    {
        return $this->container['external_evaluators'];
    }

    /**
     * Sets external_evaluators
     *
     * @param \OpenAPI\Client\Model\EdFiStudentProgramEvaluationExternalEvaluator[]|null $external_evaluators An unordered collection of studentProgramEvaluationExternalEvaluators. The external person(s) - not staff - that conducted the evaluation.
     *
     * @return self
     */
    public function setExternalEvaluators($external_evaluators)
    {
        $this->container['external_evaluators'] = $external_evaluators;

        return $this;
    }

    /**
     * Gets student_evaluation_elements
     *
     * @return \OpenAPI\Client\Model\EdFiStudentProgramEvaluationStudentEvaluationElement[]|null
     */
    public function getStudentEvaluationElements()
    {
        return $this->container['student_evaluation_elements'];
    }

    /**
     * Sets student_evaluation_elements
     *
     * @param \OpenAPI\Client\Model\EdFiStudentProgramEvaluationStudentEvaluationElement[]|null $student_evaluation_elements An unordered collection of studentProgramEvaluationStudentEvaluationElements. The student's rating and/or rating levels earned for a program evaluation element.
     *
     * @return self
     */
    public function setStudentEvaluationElements($student_evaluation_elements)
    {
        $this->container['student_evaluation_elements'] = $student_evaluation_elements;

        return $this;
    }

    /**
     * Gets student_evaluation_objectives
     *
     * @return \OpenAPI\Client\Model\EdFiStudentProgramEvaluationStudentEvaluationObjective[]|null
     */
    public function getStudentEvaluationObjectives()
    {
        return $this->container['student_evaluation_objectives'];
    }

    /**
     * Sets student_evaluation_objectives
     *
     * @param \OpenAPI\Client\Model\EdFiStudentProgramEvaluationStudentEvaluationObjective[]|null $student_evaluation_objectives An unordered collection of studentProgramEvaluationStudentEvaluationObjectives. The student's rating and/or rating levels earned for a program evaluation objective.
     *
     * @return self
     */
    public function setStudentEvaluationObjectives($student_evaluation_objectives)
    {
        $this->container['student_evaluation_objectives'] = $student_evaluation_objectives;

        return $this;
    }

    /**
     * Gets summary_evaluation_comment
     *
     * @return string|null
     */
    public function getSummaryEvaluationComment()
    {
        return $this->container['summary_evaluation_comment'];
    }

    /**
     * Sets summary_evaluation_comment
     *
     * @param string|null $summary_evaluation_comment Any comments about the summary evaluation to be captured.
     *
     * @return self
     */
    public function setSummaryEvaluationComment($summary_evaluation_comment)
    {
        if (!is_null($summary_evaluation_comment) && (mb_strlen($summary_evaluation_comment) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $summary_evaluation_comment when calling EdFiStudentProgramEvaluation., must be smaller than or equal to 1024.');
        }
        if (!is_null($summary_evaluation_comment) && (mb_strlen($summary_evaluation_comment) < 1)) {
            throw new \InvalidArgumentException('invalid length for $summary_evaluation_comment when calling EdFiStudentProgramEvaluation., must be bigger than or equal to 1.');
        }

        $this->container['summary_evaluation_comment'] = $summary_evaluation_comment;

        return $this;
    }

    /**
     * Gets summary_evaluation_numeric_rating
     *
     * @return double|null
     */
    public function getSummaryEvaluationNumericRating()
    {
        return $this->container['summary_evaluation_numeric_rating'];
    }

    /**
     * Sets summary_evaluation_numeric_rating
     *
     * @param double|null $summary_evaluation_numeric_rating The numerical summary rating or score for the evaluation.
     *
     * @return self
     */
    public function setSummaryEvaluationNumericRating($summary_evaluation_numeric_rating)
    {
        $this->container['summary_evaluation_numeric_rating'] = $summary_evaluation_numeric_rating;

        return $this;
    }

    /**
     * Gets summary_evaluation_rating_level_descriptor
     *
     * @return string|null
     */
    public function getSummaryEvaluationRatingLevelDescriptor()
    {
        return $this->container['summary_evaluation_rating_level_descriptor'];
    }

    /**
     * Sets summary_evaluation_rating_level_descriptor
     *
     * @param string|null $summary_evaluation_rating_level_descriptor The summary rating level achieved based upon the rating or score.
     *
     * @return self
     */
    public function setSummaryEvaluationRatingLevelDescriptor($summary_evaluation_rating_level_descriptor)
    {
        if (!is_null($summary_evaluation_rating_level_descriptor) && (mb_strlen($summary_evaluation_rating_level_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $summary_evaluation_rating_level_descriptor when calling EdFiStudentProgramEvaluation., must be smaller than or equal to 306.');
        }

        $this->container['summary_evaluation_rating_level_descriptor'] = $summary_evaluation_rating_level_descriptor;

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

