<?php
/**
 * ContactInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  Seacommerce\Unit4\Multivers\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * UNIT4 Multivers WebApi
 *
 * Unofficial SDK for the UNIT4 Multivers WebApi version 1.10.0 (by Seacommerce).
 *
 * The version of the OpenAPI document: 1.10.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Seacommerce\Unit4\Multivers\Sdk\Model;

use \ArrayAccess;
use \Seacommerce\Unit4\Multivers\Sdk\ObjectSerializer;

/**
 * ContactInfo Class Doc Comment
 *
 * @category Class
 * @package  Seacommerce\Unit4\Multivers\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ContactInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContactInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contactId' => 'string',
        'departmentDescription' => 'string',
        'departmentId' => 'string',
        'email' => 'string',
        'fax' => 'string',
        'firstName' => 'string',
        'fullName' => 'string',
        'genderId' => 'string',
        'initials' => 'string',
        'jobTitle' => 'string',
        'jobTitleDescription' => 'string',
        'mobilePhone' => 'string',
        'name' => 'string',
        'organizationId' => 'int',
        'salutation' => 'string',
        'telephone' => 'string',
        'titlePrefix' => 'string',
        'titleSuffix' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'contactId' => null,
        'departmentDescription' => null,
        'departmentId' => null,
        'email' => null,
        'fax' => null,
        'firstName' => null,
        'fullName' => null,
        'genderId' => null,
        'initials' => null,
        'jobTitle' => null,
        'jobTitleDescription' => null,
        'mobilePhone' => null,
        'name' => null,
        'organizationId' => 'int32',
        'salutation' => null,
        'telephone' => null,
        'titlePrefix' => null,
        'titleSuffix' => null
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
        'contactId' => 'contactId',
        'departmentDescription' => 'departmentDescription',
        'departmentId' => 'departmentId',
        'email' => 'email',
        'fax' => 'fax',
        'firstName' => 'firstName',
        'fullName' => 'fullName',
        'genderId' => 'genderId',
        'initials' => 'initials',
        'jobTitle' => 'jobTitle',
        'jobTitleDescription' => 'jobTitleDescription',
        'mobilePhone' => 'mobilePhone',
        'name' => 'name',
        'organizationId' => 'organizationId',
        'salutation' => 'salutation',
        'telephone' => 'telephone',
        'titlePrefix' => 'titlePrefix',
        'titleSuffix' => 'titleSuffix'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contactId' => 'setContactId',
        'departmentDescription' => 'setDepartmentDescription',
        'departmentId' => 'setDepartmentId',
        'email' => 'setEmail',
        'fax' => 'setFax',
        'firstName' => 'setFirstName',
        'fullName' => 'setFullName',
        'genderId' => 'setGenderId',
        'initials' => 'setInitials',
        'jobTitle' => 'setJobTitle',
        'jobTitleDescription' => 'setJobTitleDescription',
        'mobilePhone' => 'setMobilePhone',
        'name' => 'setName',
        'organizationId' => 'setOrganizationId',
        'salutation' => 'setSalutation',
        'telephone' => 'setTelephone',
        'titlePrefix' => 'setTitlePrefix',
        'titleSuffix' => 'setTitleSuffix'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contactId' => 'getContactId',
        'departmentDescription' => 'getDepartmentDescription',
        'departmentId' => 'getDepartmentId',
        'email' => 'getEmail',
        'fax' => 'getFax',
        'firstName' => 'getFirstName',
        'fullName' => 'getFullName',
        'genderId' => 'getGenderId',
        'initials' => 'getInitials',
        'jobTitle' => 'getJobTitle',
        'jobTitleDescription' => 'getJobTitleDescription',
        'mobilePhone' => 'getMobilePhone',
        'name' => 'getName',
        'organizationId' => 'getOrganizationId',
        'salutation' => 'getSalutation',
        'telephone' => 'getTelephone',
        'titlePrefix' => 'getTitlePrefix',
        'titleSuffix' => 'getTitleSuffix'
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
        $this->container['contactId'] = isset($data['contactId']) ? $data['contactId'] : null;
        $this->container['departmentDescription'] = isset($data['departmentDescription']) ? $data['departmentDescription'] : null;
        $this->container['departmentId'] = isset($data['departmentId']) ? $data['departmentId'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['firstName'] = isset($data['firstName']) ? $data['firstName'] : null;
        $this->container['fullName'] = isset($data['fullName']) ? $data['fullName'] : null;
        $this->container['genderId'] = isset($data['genderId']) ? $data['genderId'] : null;
        $this->container['initials'] = isset($data['initials']) ? $data['initials'] : null;
        $this->container['jobTitle'] = isset($data['jobTitle']) ? $data['jobTitle'] : null;
        $this->container['jobTitleDescription'] = isset($data['jobTitleDescription']) ? $data['jobTitleDescription'] : null;
        $this->container['mobilePhone'] = isset($data['mobilePhone']) ? $data['mobilePhone'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['salutation'] = isset($data['salutation']) ? $data['salutation'] : null;
        $this->container['telephone'] = isset($data['telephone']) ? $data['telephone'] : null;
        $this->container['titlePrefix'] = isset($data['titlePrefix']) ? $data['titlePrefix'] : null;
        $this->container['titleSuffix'] = isset($data['titleSuffix']) ? $data['titleSuffix'] : null;
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
     * Gets contactId
     *
     * @return string|null
     */
    public function getContactId()
    {
        return $this->container['contactId'];
    }

    /**
     * Sets contactId
     *
     * @param string|null $contactId contactId
     *
     * @return $this
     */
    public function setContactId($contactId)
    {
        $this->container['contactId'] = $contactId;

        return $this;
    }

    /**
     * Gets departmentDescription
     *
     * @return string|null
     */
    public function getDepartmentDescription()
    {
        return $this->container['departmentDescription'];
    }

    /**
     * Sets departmentDescription
     *
     * @param string|null $departmentDescription departmentDescription
     *
     * @return $this
     */
    public function setDepartmentDescription($departmentDescription)
    {
        $this->container['departmentDescription'] = $departmentDescription;

        return $this;
    }

    /**
     * Gets departmentId
     *
     * @return string|null
     */
    public function getDepartmentId()
    {
        return $this->container['departmentId'];
    }

    /**
     * Sets departmentId
     *
     * @param string|null $departmentId departmentId
     *
     * @return $this
     */
    public function setDepartmentId($departmentId)
    {
        $this->container['departmentId'] = $departmentId;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return string|null
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param string|null $fax fax
     *
     * @return $this
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets firstName
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     *
     * @param string|null $firstName firstName
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets fullName
     *
     * @return string|null
     */
    public function getFullName()
    {
        return $this->container['fullName'];
    }

    /**
     * Sets fullName
     *
     * @param string|null $fullName fullName
     *
     * @return $this
     */
    public function setFullName($fullName)
    {
        $this->container['fullName'] = $fullName;

        return $this;
    }

    /**
     * Gets genderId
     *
     * @return string|null
     */
    public function getGenderId()
    {
        return $this->container['genderId'];
    }

    /**
     * Sets genderId
     *
     * @param string|null $genderId genderId
     *
     * @return $this
     */
    public function setGenderId($genderId)
    {
        $this->container['genderId'] = $genderId;

        return $this;
    }

    /**
     * Gets initials
     *
     * @return string|null
     */
    public function getInitials()
    {
        return $this->container['initials'];
    }

    /**
     * Sets initials
     *
     * @param string|null $initials initials
     *
     * @return $this
     */
    public function setInitials($initials)
    {
        $this->container['initials'] = $initials;

        return $this;
    }

    /**
     * Gets jobTitle
     *
     * @return string|null
     */
    public function getJobTitle()
    {
        return $this->container['jobTitle'];
    }

    /**
     * Sets jobTitle
     *
     * @param string|null $jobTitle jobTitle
     *
     * @return $this
     */
    public function setJobTitle($jobTitle)
    {
        $this->container['jobTitle'] = $jobTitle;

        return $this;
    }

    /**
     * Gets jobTitleDescription
     *
     * @return string|null
     */
    public function getJobTitleDescription()
    {
        return $this->container['jobTitleDescription'];
    }

    /**
     * Sets jobTitleDescription
     *
     * @param string|null $jobTitleDescription jobTitleDescription
     *
     * @return $this
     */
    public function setJobTitleDescription($jobTitleDescription)
    {
        $this->container['jobTitleDescription'] = $jobTitleDescription;

        return $this;
    }

    /**
     * Gets mobilePhone
     *
     * @return string|null
     */
    public function getMobilePhone()
    {
        return $this->container['mobilePhone'];
    }

    /**
     * Sets mobilePhone
     *
     * @param string|null $mobilePhone mobilePhone
     *
     * @return $this
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->container['mobilePhone'] = $mobilePhone;

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
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets organizationId
     *
     * @return int|null
     */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
     * Sets organizationId
     *
     * @param int|null $organizationId organizationId
     *
     * @return $this
     */
    public function setOrganizationId($organizationId)
    {
        $this->container['organizationId'] = $organizationId;

        return $this;
    }

    /**
     * Gets salutation
     *
     * @return string|null
     */
    public function getSalutation()
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     *
     * @param string|null $salutation salutation
     *
     * @return $this
     */
    public function setSalutation($salutation)
    {
        $this->container['salutation'] = $salutation;

        return $this;
    }

    /**
     * Gets telephone
     *
     * @return string|null
     */
    public function getTelephone()
    {
        return $this->container['telephone'];
    }

    /**
     * Sets telephone
     *
     * @param string|null $telephone telephone
     *
     * @return $this
     */
    public function setTelephone($telephone)
    {
        $this->container['telephone'] = $telephone;

        return $this;
    }

    /**
     * Gets titlePrefix
     *
     * @return string|null
     */
    public function getTitlePrefix()
    {
        return $this->container['titlePrefix'];
    }

    /**
     * Sets titlePrefix
     *
     * @param string|null $titlePrefix titlePrefix
     *
     * @return $this
     */
    public function setTitlePrefix($titlePrefix)
    {
        $this->container['titlePrefix'] = $titlePrefix;

        return $this;
    }

    /**
     * Gets titleSuffix
     *
     * @return string|null
     */
    public function getTitleSuffix()
    {
        return $this->container['titleSuffix'];
    }

    /**
     * Sets titleSuffix
     *
     * @param string|null $titleSuffix titleSuffix
     *
     * @return $this
     */
    public function setTitleSuffix($titleSuffix)
    {
        $this->container['titleSuffix'] = $titleSuffix;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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

