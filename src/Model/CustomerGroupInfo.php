<?php
/**
 * CustomerGroupInfo
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
 * OpenAPI spec version: 1.10.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
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
 * CustomerGroupInfo Class Doc Comment
 *
 * @category Class
 * @package  Seacommerce\Unit4\Multivers\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CustomerGroupInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomerGroupInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customerGroupId' => 'int',
        'fiscalYear' => 'int',
        'ledgerAccountId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'customerGroupId' => 'int32',
        'fiscalYear' => 'int32',
        'ledgerAccountId' => null
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
        'customerGroupId' => 'customerGroupId',
        'fiscalYear' => 'fiscalYear',
        'ledgerAccountId' => 'ledgerAccountId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customerGroupId' => 'setCustomerGroupId',
        'fiscalYear' => 'setFiscalYear',
        'ledgerAccountId' => 'setLedgerAccountId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customerGroupId' => 'getCustomerGroupId',
        'fiscalYear' => 'getFiscalYear',
        'ledgerAccountId' => 'getLedgerAccountId'
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
        $this->container['customerGroupId'] = isset($data['customerGroupId']) ? $data['customerGroupId'] : null;
        $this->container['fiscalYear'] = isset($data['fiscalYear']) ? $data['fiscalYear'] : null;
        $this->container['ledgerAccountId'] = isset($data['ledgerAccountId']) ? $data['ledgerAccountId'] : null;
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
     * Gets customerGroupId
     *
     * @return int|null
     */
    public function getCustomerGroupId()
    {
        return $this->container['customerGroupId'];
    }

    /**
     * Sets customerGroupId
     *
     * @param int|null $customerGroupId customerGroupId
     *
     * @return $this
     */
    public function setCustomerGroupId($customerGroupId)
    {
        $this->container['customerGroupId'] = $customerGroupId;

        return $this;
    }

    /**
     * Gets fiscalYear
     *
     * @return int|null
     */
    public function getFiscalYear()
    {
        return $this->container['fiscalYear'];
    }

    /**
     * Sets fiscalYear
     *
     * @param int|null $fiscalYear fiscalYear
     *
     * @return $this
     */
    public function setFiscalYear($fiscalYear)
    {
        $this->container['fiscalYear'] = $fiscalYear;

        return $this;
    }

    /**
     * Gets ledgerAccountId
     *
     * @return string|null
     */
    public function getLedgerAccountId()
    {
        return $this->container['ledgerAccountId'];
    }

    /**
     * Sets ledgerAccountId
     *
     * @param string|null $ledgerAccountId ledgerAccountId
     *
     * @return $this
     */
    public function setLedgerAccountId($ledgerAccountId)
    {
        $this->container['ledgerAccountId'] = $ledgerAccountId;

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
}


