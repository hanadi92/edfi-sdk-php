<?php
/**
 * EdFiStudentSpecialEducationProgramAssociation
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
 * EdFiStudentSpecialEducationProgramAssociation Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EdFiStudentSpecialEducationProgramAssociation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'edFi_studentSpecialEducationProgramAssociation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'begin_date' => '\DateTime',
        'education_organization_reference' => '\OpenAPI\Client\Model\EdFiEducationOrganizationReference',
        'program_reference' => '\OpenAPI\Client\Model\EdFiProgramReference',
        'student_reference' => '\OpenAPI\Client\Model\EdFiStudentReference',
        'disabilities' => '\OpenAPI\Client\Model\EdFiStudentSpecialEducationProgramAssociationDisability[]',
        'end_date' => '\DateTime',
        'idea_eligibility' => 'bool',
        'iep_begin_date' => '\DateTime',
        'iep_end_date' => '\DateTime',
        'iep_review_date' => '\DateTime',
        'last_evaluation_date' => '\DateTime',
        'medically_fragile' => 'bool',
        'multiply_disabled' => 'bool',
        'program_participation_statuses' => '\OpenAPI\Client\Model\EdFiGeneralStudentProgramAssociationProgramParticipationStatus[]',
        'reason_exited_descriptor' => 'string',
        'school_hours_per_week' => 'double',
        'served_outside_of_regular_session' => 'bool',
        'service_providers' => '\OpenAPI\Client\Model\EdFiStudentSpecialEducationProgramAssociationServiceProvider[]',
        'special_education_exit_date' => '\DateTime',
        'special_education_exit_explained' => 'string',
        'special_education_exit_reason_descriptor' => 'string',
        'special_education_hours_per_week' => 'double',
        'special_education_program_services' => '\OpenAPI\Client\Model\EdFiStudentSpecialEducationProgramAssociationSpecialEducationProgramService[]',
        'special_education_setting_descriptor' => 'string',
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
        'education_organization_reference' => null,
        'program_reference' => null,
        'student_reference' => null,
        'disabilities' => null,
        'end_date' => 'date',
        'idea_eligibility' => null,
        'iep_begin_date' => 'date',
        'iep_end_date' => 'date',
        'iep_review_date' => 'date',
        'last_evaluation_date' => 'date',
        'medically_fragile' => null,
        'multiply_disabled' => null,
        'program_participation_statuses' => null,
        'reason_exited_descriptor' => null,
        'school_hours_per_week' => 'double',
        'served_outside_of_regular_session' => null,
        'service_providers' => null,
        'special_education_exit_date' => 'date',
        'special_education_exit_explained' => null,
        'special_education_exit_reason_descriptor' => null,
        'special_education_hours_per_week' => 'double',
        'special_education_program_services' => null,
        'special_education_setting_descriptor' => null,
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
        'education_organization_reference' => 'educationOrganizationReference',
        'program_reference' => 'programReference',
        'student_reference' => 'studentReference',
        'disabilities' => 'disabilities',
        'end_date' => 'endDate',
        'idea_eligibility' => 'ideaEligibility',
        'iep_begin_date' => 'iepBeginDate',
        'iep_end_date' => 'iepEndDate',
        'iep_review_date' => 'iepReviewDate',
        'last_evaluation_date' => 'lastEvaluationDate',
        'medically_fragile' => 'medicallyFragile',
        'multiply_disabled' => 'multiplyDisabled',
        'program_participation_statuses' => 'programParticipationStatuses',
        'reason_exited_descriptor' => 'reasonExitedDescriptor',
        'school_hours_per_week' => 'schoolHoursPerWeek',
        'served_outside_of_regular_session' => 'servedOutsideOfRegularSession',
        'service_providers' => 'serviceProviders',
        'special_education_exit_date' => 'specialEducationExitDate',
        'special_education_exit_explained' => 'specialEducationExitExplained',
        'special_education_exit_reason_descriptor' => 'specialEducationExitReasonDescriptor',
        'special_education_hours_per_week' => 'specialEducationHoursPerWeek',
        'special_education_program_services' => 'specialEducationProgramServices',
        'special_education_setting_descriptor' => 'specialEducationSettingDescriptor',
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
        'education_organization_reference' => 'setEducationOrganizationReference',
        'program_reference' => 'setProgramReference',
        'student_reference' => 'setStudentReference',
        'disabilities' => 'setDisabilities',
        'end_date' => 'setEndDate',
        'idea_eligibility' => 'setIdeaEligibility',
        'iep_begin_date' => 'setIepBeginDate',
        'iep_end_date' => 'setIepEndDate',
        'iep_review_date' => 'setIepReviewDate',
        'last_evaluation_date' => 'setLastEvaluationDate',
        'medically_fragile' => 'setMedicallyFragile',
        'multiply_disabled' => 'setMultiplyDisabled',
        'program_participation_statuses' => 'setProgramParticipationStatuses',
        'reason_exited_descriptor' => 'setReasonExitedDescriptor',
        'school_hours_per_week' => 'setSchoolHoursPerWeek',
        'served_outside_of_regular_session' => 'setServedOutsideOfRegularSession',
        'service_providers' => 'setServiceProviders',
        'special_education_exit_date' => 'setSpecialEducationExitDate',
        'special_education_exit_explained' => 'setSpecialEducationExitExplained',
        'special_education_exit_reason_descriptor' => 'setSpecialEducationExitReasonDescriptor',
        'special_education_hours_per_week' => 'setSpecialEducationHoursPerWeek',
        'special_education_program_services' => 'setSpecialEducationProgramServices',
        'special_education_setting_descriptor' => 'setSpecialEducationSettingDescriptor',
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
        'education_organization_reference' => 'getEducationOrganizationReference',
        'program_reference' => 'getProgramReference',
        'student_reference' => 'getStudentReference',
        'disabilities' => 'getDisabilities',
        'end_date' => 'getEndDate',
        'idea_eligibility' => 'getIdeaEligibility',
        'iep_begin_date' => 'getIepBeginDate',
        'iep_end_date' => 'getIepEndDate',
        'iep_review_date' => 'getIepReviewDate',
        'last_evaluation_date' => 'getLastEvaluationDate',
        'medically_fragile' => 'getMedicallyFragile',
        'multiply_disabled' => 'getMultiplyDisabled',
        'program_participation_statuses' => 'getProgramParticipationStatuses',
        'reason_exited_descriptor' => 'getReasonExitedDescriptor',
        'school_hours_per_week' => 'getSchoolHoursPerWeek',
        'served_outside_of_regular_session' => 'getServedOutsideOfRegularSession',
        'service_providers' => 'getServiceProviders',
        'special_education_exit_date' => 'getSpecialEducationExitDate',
        'special_education_exit_explained' => 'getSpecialEducationExitExplained',
        'special_education_exit_reason_descriptor' => 'getSpecialEducationExitReasonDescriptor',
        'special_education_hours_per_week' => 'getSpecialEducationHoursPerWeek',
        'special_education_program_services' => 'getSpecialEducationProgramServices',
        'special_education_setting_descriptor' => 'getSpecialEducationSettingDescriptor',
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
        $this->container['education_organization_reference'] = $data['education_organization_reference'] ?? null;
        $this->container['program_reference'] = $data['program_reference'] ?? null;
        $this->container['student_reference'] = $data['student_reference'] ?? null;
        $this->container['disabilities'] = $data['disabilities'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['idea_eligibility'] = $data['idea_eligibility'] ?? null;
        $this->container['iep_begin_date'] = $data['iep_begin_date'] ?? null;
        $this->container['iep_end_date'] = $data['iep_end_date'] ?? null;
        $this->container['iep_review_date'] = $data['iep_review_date'] ?? null;
        $this->container['last_evaluation_date'] = $data['last_evaluation_date'] ?? null;
        $this->container['medically_fragile'] = $data['medically_fragile'] ?? null;
        $this->container['multiply_disabled'] = $data['multiply_disabled'] ?? null;
        $this->container['program_participation_statuses'] = $data['program_participation_statuses'] ?? null;
        $this->container['reason_exited_descriptor'] = $data['reason_exited_descriptor'] ?? null;
        $this->container['school_hours_per_week'] = $data['school_hours_per_week'] ?? null;
        $this->container['served_outside_of_regular_session'] = $data['served_outside_of_regular_session'] ?? null;
        $this->container['service_providers'] = $data['service_providers'] ?? null;
        $this->container['special_education_exit_date'] = $data['special_education_exit_date'] ?? null;
        $this->container['special_education_exit_explained'] = $data['special_education_exit_explained'] ?? null;
        $this->container['special_education_exit_reason_descriptor'] = $data['special_education_exit_reason_descriptor'] ?? null;
        $this->container['special_education_hours_per_week'] = $data['special_education_hours_per_week'] ?? null;
        $this->container['special_education_program_services'] = $data['special_education_program_services'] ?? null;
        $this->container['special_education_setting_descriptor'] = $data['special_education_setting_descriptor'] ?? null;
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
        if ($this->container['education_organization_reference'] === null) {
            $invalidProperties[] = "'education_organization_reference' can't be null";
        }
        if ($this->container['program_reference'] === null) {
            $invalidProperties[] = "'program_reference' can't be null";
        }
        if ($this->container['student_reference'] === null) {
            $invalidProperties[] = "'student_reference' can't be null";
        }
        if (!is_null($this->container['reason_exited_descriptor']) && (mb_strlen($this->container['reason_exited_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'reason_exited_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['special_education_exit_explained']) && (mb_strlen($this->container['special_education_exit_explained']) > 1024)) {
            $invalidProperties[] = "invalid value for 'special_education_exit_explained', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['special_education_exit_reason_descriptor']) && (mb_strlen($this->container['special_education_exit_reason_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'special_education_exit_reason_descriptor', the character length must be smaller than or equal to 306.";
        }

        if (!is_null($this->container['special_education_setting_descriptor']) && (mb_strlen($this->container['special_education_setting_descriptor']) > 306)) {
            $invalidProperties[] = "invalid value for 'special_education_setting_descriptor', the character length must be smaller than or equal to 306.";
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
     * @param \DateTime $begin_date The earliest date the student is involved with the program. Typically, this is the date the student becomes eligible for the program.
     *
     * @return self
     */
    public function setBeginDate($begin_date)
    {
        $this->container['begin_date'] = $begin_date;

        return $this;
    }

    /**
     * Gets education_organization_reference
     *
     * @return \OpenAPI\Client\Model\EdFiEducationOrganizationReference
     */
    public function getEducationOrganizationReference()
    {
        return $this->container['education_organization_reference'];
    }

    /**
     * Sets education_organization_reference
     *
     * @param \OpenAPI\Client\Model\EdFiEducationOrganizationReference $education_organization_reference education_organization_reference
     *
     * @return self
     */
    public function setEducationOrganizationReference($education_organization_reference)
    {
        $this->container['education_organization_reference'] = $education_organization_reference;

        return $this;
    }

    /**
     * Gets program_reference
     *
     * @return \OpenAPI\Client\Model\EdFiProgramReference
     */
    public function getProgramReference()
    {
        return $this->container['program_reference'];
    }

    /**
     * Sets program_reference
     *
     * @param \OpenAPI\Client\Model\EdFiProgramReference $program_reference program_reference
     *
     * @return self
     */
    public function setProgramReference($program_reference)
    {
        $this->container['program_reference'] = $program_reference;

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
     * Gets disabilities
     *
     * @return \OpenAPI\Client\Model\EdFiStudentSpecialEducationProgramAssociationDisability[]|null
     */
    public function getDisabilities()
    {
        return $this->container['disabilities'];
    }

    /**
     * Sets disabilities
     *
     * @param \OpenAPI\Client\Model\EdFiStudentSpecialEducationProgramAssociationDisability[]|null $disabilities An unordered collection of studentSpecialEducationProgramAssociationDisabilities. The disability condition(s) that best describes an individual's impairment, as related to special education services received.
     *
     * @return self
     */
    public function setDisabilities($disabilities)
    {
        $this->container['disabilities'] = $disabilities;

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
     * @param \DateTime|null $end_date The month, day, and year on which the student exited the program or stopped receiving services.
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets idea_eligibility
     *
     * @return bool|null
     */
    public function getIdeaEligibility()
    {
        return $this->container['idea_eligibility'];
    }

    /**
     * Sets idea_eligibility
     *
     * @param bool|null $idea_eligibility Indicator of the eligibility of the student to receive special education services according to the Individuals with Disabilities Education Act (IDEA).
     *
     * @return self
     */
    public function setIdeaEligibility($idea_eligibility)
    {
        $this->container['idea_eligibility'] = $idea_eligibility;

        return $this;
    }

    /**
     * Gets iep_begin_date
     *
     * @return \DateTime|null
     */
    public function getIepBeginDate()
    {
        return $this->container['iep_begin_date'];
    }

    /**
     * Sets iep_begin_date
     *
     * @param \DateTime|null $iep_begin_date The effective date of the most recent IEP.
     *
     * @return self
     */
    public function setIepBeginDate($iep_begin_date)
    {
        $this->container['iep_begin_date'] = $iep_begin_date;

        return $this;
    }

    /**
     * Gets iep_end_date
     *
     * @return \DateTime|null
     */
    public function getIepEndDate()
    {
        return $this->container['iep_end_date'];
    }

    /**
     * Sets iep_end_date
     *
     * @param \DateTime|null $iep_end_date The end date of the most recent IEP.
     *
     * @return self
     */
    public function setIepEndDate($iep_end_date)
    {
        $this->container['iep_end_date'] = $iep_end_date;

        return $this;
    }

    /**
     * Gets iep_review_date
     *
     * @return \DateTime|null
     */
    public function getIepReviewDate()
    {
        return $this->container['iep_review_date'];
    }

    /**
     * Sets iep_review_date
     *
     * @param \DateTime|null $iep_review_date The date of the last IEP review.
     *
     * @return self
     */
    public function setIepReviewDate($iep_review_date)
    {
        $this->container['iep_review_date'] = $iep_review_date;

        return $this;
    }

    /**
     * Gets last_evaluation_date
     *
     * @return \DateTime|null
     */
    public function getLastEvaluationDate()
    {
        return $this->container['last_evaluation_date'];
    }

    /**
     * Sets last_evaluation_date
     *
     * @param \DateTime|null $last_evaluation_date The date of the last special education evaluation.
     *
     * @return self
     */
    public function setLastEvaluationDate($last_evaluation_date)
    {
        $this->container['last_evaluation_date'] = $last_evaluation_date;

        return $this;
    }

    /**
     * Gets medically_fragile
     *
     * @return bool|null
     */
    public function getMedicallyFragile()
    {
        return $this->container['medically_fragile'];
    }

    /**
     * Sets medically_fragile
     *
     * @param bool|null $medically_fragile Indicates whether the student receiving special education and related services is: 1) in the age range of birth to 22 years, and 2) has a serious, ongoing illness or a chronic condition that has lasted or is anticipated to last at least 12 or more months or has required at least one month of hospitalization, and that requires daily, ongoing medical treatments and monitoring by appropriately trained personnel which may include parents or other family members, and 3) requires the routine use of medical device or of assistive technology to compensate for the loss of usefulness of a body function needed to participate in activities of daily living, and 4) lives with ongoing threat to his or her continued well-being. Aligns with federal requirements.
     *
     * @return self
     */
    public function setMedicallyFragile($medically_fragile)
    {
        $this->container['medically_fragile'] = $medically_fragile;

        return $this;
    }

    /**
     * Gets multiply_disabled
     *
     * @return bool|null
     */
    public function getMultiplyDisabled()
    {
        return $this->container['multiply_disabled'];
    }

    /**
     * Sets multiply_disabled
     *
     * @param bool|null $multiply_disabled Indicates whether the student receiving special education and related services has been designated as multiply disabled by the admission, review, and dismissal committee as aligned with federal requirements.
     *
     * @return self
     */
    public function setMultiplyDisabled($multiply_disabled)
    {
        $this->container['multiply_disabled'] = $multiply_disabled;

        return $this;
    }

    /**
     * Gets program_participation_statuses
     *
     * @return \OpenAPI\Client\Model\EdFiGeneralStudentProgramAssociationProgramParticipationStatus[]|null
     */
    public function getProgramParticipationStatuses()
    {
        return $this->container['program_participation_statuses'];
    }

    /**
     * Sets program_participation_statuses
     *
     * @param \OpenAPI\Client\Model\EdFiGeneralStudentProgramAssociationProgramParticipationStatus[]|null $program_participation_statuses An unordered collection of generalStudentProgramAssociationProgramParticipationStatuses. The status of the student's program participation.
     *
     * @return self
     */
    public function setProgramParticipationStatuses($program_participation_statuses)
    {
        $this->container['program_participation_statuses'] = $program_participation_statuses;

        return $this;
    }

    /**
     * Gets reason_exited_descriptor
     *
     * @return string|null
     */
    public function getReasonExitedDescriptor()
    {
        return $this->container['reason_exited_descriptor'];
    }

    /**
     * Sets reason_exited_descriptor
     *
     * @param string|null $reason_exited_descriptor The reason the student left the program within a school or district.
     *
     * @return self
     */
    public function setReasonExitedDescriptor($reason_exited_descriptor)
    {
        if (!is_null($reason_exited_descriptor) && (mb_strlen($reason_exited_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $reason_exited_descriptor when calling EdFiStudentSpecialEducationProgramAssociation., must be smaller than or equal to 306.');
        }

        $this->container['reason_exited_descriptor'] = $reason_exited_descriptor;

        return $this;
    }

    /**
     * Gets school_hours_per_week
     *
     * @return double|null
     */
    public function getSchoolHoursPerWeek()
    {
        return $this->container['school_hours_per_week'];
    }

    /**
     * Sets school_hours_per_week
     *
     * @param double|null $school_hours_per_week Indicate the total number of hours of instructional time per week for the school that the student attends.
     *
     * @return self
     */
    public function setSchoolHoursPerWeek($school_hours_per_week)
    {
        $this->container['school_hours_per_week'] = $school_hours_per_week;

        return $this;
    }

    /**
     * Gets served_outside_of_regular_session
     *
     * @return bool|null
     */
    public function getServedOutsideOfRegularSession()
    {
        return $this->container['served_outside_of_regular_session'];
    }

    /**
     * Sets served_outside_of_regular_session
     *
     * @param bool|null $served_outside_of_regular_session Indicates whether the student received services during the summer session or between sessions.
     *
     * @return self
     */
    public function setServedOutsideOfRegularSession($served_outside_of_regular_session)
    {
        $this->container['served_outside_of_regular_session'] = $served_outside_of_regular_session;

        return $this;
    }

    /**
     * Gets service_providers
     *
     * @return \OpenAPI\Client\Model\EdFiStudentSpecialEducationProgramAssociationServiceProvider[]|null
     */
    public function getServiceProviders()
    {
        return $this->container['service_providers'];
    }

    /**
     * Sets service_providers
     *
     * @param \OpenAPI\Client\Model\EdFiStudentSpecialEducationProgramAssociationServiceProvider[]|null $service_providers An unordered collection of studentSpecialEducationProgramAssociationServiceProviders. The staff providing special education services to the student.
     *
     * @return self
     */
    public function setServiceProviders($service_providers)
    {
        $this->container['service_providers'] = $service_providers;

        return $this;
    }

    /**
     * Gets special_education_exit_date
     *
     * @return \DateTime|null
     */
    public function getSpecialEducationExitDate()
    {
        return $this->container['special_education_exit_date'];
    }

    /**
     * Sets special_education_exit_date
     *
     * @param \DateTime|null $special_education_exit_date The  month, day and year on which a person stops receiving special education services.
     *
     * @return self
     */
    public function setSpecialEducationExitDate($special_education_exit_date)
    {
        $this->container['special_education_exit_date'] = $special_education_exit_date;

        return $this;
    }

    /**
     * Gets special_education_exit_explained
     *
     * @return string|null
     */
    public function getSpecialEducationExitExplained()
    {
        return $this->container['special_education_exit_explained'];
    }

    /**
     * Sets special_education_exit_explained
     *
     * @param string|null $special_education_exit_explained Explanation on why a person stops receiving special education services.
     *
     * @return self
     */
    public function setSpecialEducationExitExplained($special_education_exit_explained)
    {
        if (!is_null($special_education_exit_explained) && (mb_strlen($special_education_exit_explained) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $special_education_exit_explained when calling EdFiStudentSpecialEducationProgramAssociation., must be smaller than or equal to 1024.');
        }

        $this->container['special_education_exit_explained'] = $special_education_exit_explained;

        return $this;
    }

    /**
     * Gets special_education_exit_reason_descriptor
     *
     * @return string|null
     */
    public function getSpecialEducationExitReasonDescriptor()
    {
        return $this->container['special_education_exit_reason_descriptor'];
    }

    /**
     * Sets special_education_exit_reason_descriptor
     *
     * @param string|null $special_education_exit_reason_descriptor The reason why a person stops receiving special education services.
     *
     * @return self
     */
    public function setSpecialEducationExitReasonDescriptor($special_education_exit_reason_descriptor)
    {
        if (!is_null($special_education_exit_reason_descriptor) && (mb_strlen($special_education_exit_reason_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $special_education_exit_reason_descriptor when calling EdFiStudentSpecialEducationProgramAssociation., must be smaller than or equal to 306.');
        }

        $this->container['special_education_exit_reason_descriptor'] = $special_education_exit_reason_descriptor;

        return $this;
    }

    /**
     * Gets special_education_hours_per_week
     *
     * @return double|null
     */
    public function getSpecialEducationHoursPerWeek()
    {
        return $this->container['special_education_hours_per_week'];
    }

    /**
     * Sets special_education_hours_per_week
     *
     * @param double|null $special_education_hours_per_week The number of hours per week for special education instruction and therapy.
     *
     * @return self
     */
    public function setSpecialEducationHoursPerWeek($special_education_hours_per_week)
    {
        $this->container['special_education_hours_per_week'] = $special_education_hours_per_week;

        return $this;
    }

    /**
     * Gets special_education_program_services
     *
     * @return \OpenAPI\Client\Model\EdFiStudentSpecialEducationProgramAssociationSpecialEducationProgramService[]|null
     */
    public function getSpecialEducationProgramServices()
    {
        return $this->container['special_education_program_services'];
    }

    /**
     * Sets special_education_program_services
     *
     * @param \OpenAPI\Client\Model\EdFiStudentSpecialEducationProgramAssociationSpecialEducationProgramService[]|null $special_education_program_services An unordered collection of studentSpecialEducationProgramAssociationSpecialEducationProgramServices. Indicates the service(s) being provided to the student by the special education program.
     *
     * @return self
     */
    public function setSpecialEducationProgramServices($special_education_program_services)
    {
        $this->container['special_education_program_services'] = $special_education_program_services;

        return $this;
    }

    /**
     * Gets special_education_setting_descriptor
     *
     * @return string|null
     */
    public function getSpecialEducationSettingDescriptor()
    {
        return $this->container['special_education_setting_descriptor'];
    }

    /**
     * Sets special_education_setting_descriptor
     *
     * @param string|null $special_education_setting_descriptor The major instructional setting (more than 50 percent of a student's special education program).
     *
     * @return self
     */
    public function setSpecialEducationSettingDescriptor($special_education_setting_descriptor)
    {
        if (!is_null($special_education_setting_descriptor) && (mb_strlen($special_education_setting_descriptor) > 306)) {
            throw new \InvalidArgumentException('invalid length for $special_education_setting_descriptor when calling EdFiStudentSpecialEducationProgramAssociation., must be smaller than or equal to 306.');
        }

        $this->container['special_education_setting_descriptor'] = $special_education_setting_descriptor;

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


