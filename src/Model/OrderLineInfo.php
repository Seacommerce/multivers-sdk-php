<?php
/**
 * OrderLineInfo
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
 * OrderLineInfo Class Doc Comment
 *
 * @category Class
 * @package  Seacommerce\Unit4\Multivers\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderLineInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderLineInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'string',
        'amountExclVat' => 'float',
        'amountInclVat' => 'float',
        'constellationGuid' => 'string',
        'costCentreId' => 'string',
        'costUnitId' => 'string',
        'declarable' => 'bool',
        'deliveryDate' => 'string',
        'description' => 'string',
        'discount' => 'float',
        'discountAccountId' => 'string',
        'employeeId' => 'string',
        'hourType' => 'string',
        'marginAmount' => 'float',
        'marginPercentage' => 'float',
        'orderDate' => 'string',
        'orderId' => 'string',
        'orderLineId' => 'int',
        'orderLineType' => 'int',
        'pickListText' => 'bool',
        'price' => 'float',
        'pricePer' => 'float',
        'productDescription' => 'string',
        'productId' => 'string',
        'projectCostPrice' => 'float',
        'projectCosts' => 'float',
        'projectEntryType' => 'int',
        'projectTermId' => 'int',
        'quantityBackorder' => 'float',
        'quantityDelivered' => 'float',
        'quantityOrdered' => 'float',
        'quantityScale' => 'int',
        'quantityToDeliver' => 'float',
        'reference' => 'string',
        'stockTransferPrice' => 'float',
        'subProjectId' => 'string',
        'unit' => 'string',
        'vatCodeId' => 'int',
        'vatPercentage' => 'float',
        'warehouseId' => 'string',
        'weekNumber' => 'int',
        'workOrderNumber' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'accountId' => null,
        'amountExclVat' => null,
        'amountInclVat' => null,
        'constellationGuid' => null,
        'costCentreId' => null,
        'costUnitId' => null,
        'declarable' => null,
        'deliveryDate' => null,
        'description' => null,
        'discount' => null,
        'discountAccountId' => null,
        'employeeId' => null,
        'hourType' => null,
        'marginAmount' => null,
        'marginPercentage' => null,
        'orderDate' => null,
        'orderId' => null,
        'orderLineId' => 'int32',
        'orderLineType' => 'int32',
        'pickListText' => null,
        'price' => null,
        'pricePer' => null,
        'productDescription' => null,
        'productId' => null,
        'projectCostPrice' => null,
        'projectCosts' => null,
        'projectEntryType' => 'int32',
        'projectTermId' => 'int32',
        'quantityBackorder' => null,
        'quantityDelivered' => null,
        'quantityOrdered' => null,
        'quantityScale' => 'int32',
        'quantityToDeliver' => null,
        'reference' => null,
        'stockTransferPrice' => null,
        'subProjectId' => null,
        'unit' => null,
        'vatCodeId' => 'int32',
        'vatPercentage' => null,
        'warehouseId' => null,
        'weekNumber' => 'int32',
        'workOrderNumber' => null
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
        'accountId' => 'accountId',
        'amountExclVat' => 'amountExclVat',
        'amountInclVat' => 'amountInclVat',
        'constellationGuid' => 'constellationGuid',
        'costCentreId' => 'costCentreId',
        'costUnitId' => 'costUnitId',
        'declarable' => 'declarable',
        'deliveryDate' => 'deliveryDate',
        'description' => 'description',
        'discount' => 'discount',
        'discountAccountId' => 'discountAccountId',
        'employeeId' => 'employeeId',
        'hourType' => 'hourType',
        'marginAmount' => 'marginAmount',
        'marginPercentage' => 'marginPercentage',
        'orderDate' => 'orderDate',
        'orderId' => 'orderId',
        'orderLineId' => 'orderLineId',
        'orderLineType' => 'orderLineType',
        'pickListText' => 'pickListText',
        'price' => 'price',
        'pricePer' => 'pricePer',
        'productDescription' => 'productDescription',
        'productId' => 'productId',
        'projectCostPrice' => 'projectCostPrice',
        'projectCosts' => 'projectCosts',
        'projectEntryType' => 'projectEntryType',
        'projectTermId' => 'projectTermId',
        'quantityBackorder' => 'quantityBackorder',
        'quantityDelivered' => 'quantityDelivered',
        'quantityOrdered' => 'quantityOrdered',
        'quantityScale' => 'quantityScale',
        'quantityToDeliver' => 'quantityToDeliver',
        'reference' => 'reference',
        'stockTransferPrice' => 'stockTransferPrice',
        'subProjectId' => 'subProjectId',
        'unit' => 'unit',
        'vatCodeId' => 'vatCodeId',
        'vatPercentage' => 'vatPercentage',
        'warehouseId' => 'warehouseId',
        'weekNumber' => 'weekNumber',
        'workOrderNumber' => 'workOrderNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'amountExclVat' => 'setAmountExclVat',
        'amountInclVat' => 'setAmountInclVat',
        'constellationGuid' => 'setConstellationGuid',
        'costCentreId' => 'setCostCentreId',
        'costUnitId' => 'setCostUnitId',
        'declarable' => 'setDeclarable',
        'deliveryDate' => 'setDeliveryDate',
        'description' => 'setDescription',
        'discount' => 'setDiscount',
        'discountAccountId' => 'setDiscountAccountId',
        'employeeId' => 'setEmployeeId',
        'hourType' => 'setHourType',
        'marginAmount' => 'setMarginAmount',
        'marginPercentage' => 'setMarginPercentage',
        'orderDate' => 'setOrderDate',
        'orderId' => 'setOrderId',
        'orderLineId' => 'setOrderLineId',
        'orderLineType' => 'setOrderLineType',
        'pickListText' => 'setPickListText',
        'price' => 'setPrice',
        'pricePer' => 'setPricePer',
        'productDescription' => 'setProductDescription',
        'productId' => 'setProductId',
        'projectCostPrice' => 'setProjectCostPrice',
        'projectCosts' => 'setProjectCosts',
        'projectEntryType' => 'setProjectEntryType',
        'projectTermId' => 'setProjectTermId',
        'quantityBackorder' => 'setQuantityBackorder',
        'quantityDelivered' => 'setQuantityDelivered',
        'quantityOrdered' => 'setQuantityOrdered',
        'quantityScale' => 'setQuantityScale',
        'quantityToDeliver' => 'setQuantityToDeliver',
        'reference' => 'setReference',
        'stockTransferPrice' => 'setStockTransferPrice',
        'subProjectId' => 'setSubProjectId',
        'unit' => 'setUnit',
        'vatCodeId' => 'setVatCodeId',
        'vatPercentage' => 'setVatPercentage',
        'warehouseId' => 'setWarehouseId',
        'weekNumber' => 'setWeekNumber',
        'workOrderNumber' => 'setWorkOrderNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'amountExclVat' => 'getAmountExclVat',
        'amountInclVat' => 'getAmountInclVat',
        'constellationGuid' => 'getConstellationGuid',
        'costCentreId' => 'getCostCentreId',
        'costUnitId' => 'getCostUnitId',
        'declarable' => 'getDeclarable',
        'deliveryDate' => 'getDeliveryDate',
        'description' => 'getDescription',
        'discount' => 'getDiscount',
        'discountAccountId' => 'getDiscountAccountId',
        'employeeId' => 'getEmployeeId',
        'hourType' => 'getHourType',
        'marginAmount' => 'getMarginAmount',
        'marginPercentage' => 'getMarginPercentage',
        'orderDate' => 'getOrderDate',
        'orderId' => 'getOrderId',
        'orderLineId' => 'getOrderLineId',
        'orderLineType' => 'getOrderLineType',
        'pickListText' => 'getPickListText',
        'price' => 'getPrice',
        'pricePer' => 'getPricePer',
        'productDescription' => 'getProductDescription',
        'productId' => 'getProductId',
        'projectCostPrice' => 'getProjectCostPrice',
        'projectCosts' => 'getProjectCosts',
        'projectEntryType' => 'getProjectEntryType',
        'projectTermId' => 'getProjectTermId',
        'quantityBackorder' => 'getQuantityBackorder',
        'quantityDelivered' => 'getQuantityDelivered',
        'quantityOrdered' => 'getQuantityOrdered',
        'quantityScale' => 'getQuantityScale',
        'quantityToDeliver' => 'getQuantityToDeliver',
        'reference' => 'getReference',
        'stockTransferPrice' => 'getStockTransferPrice',
        'subProjectId' => 'getSubProjectId',
        'unit' => 'getUnit',
        'vatCodeId' => 'getVatCodeId',
        'vatPercentage' => 'getVatPercentage',
        'warehouseId' => 'getWarehouseId',
        'weekNumber' => 'getWeekNumber',
        'workOrderNumber' => 'getWorkOrderNumber'
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
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['amountExclVat'] = isset($data['amountExclVat']) ? $data['amountExclVat'] : null;
        $this->container['amountInclVat'] = isset($data['amountInclVat']) ? $data['amountInclVat'] : null;
        $this->container['constellationGuid'] = isset($data['constellationGuid']) ? $data['constellationGuid'] : null;
        $this->container['costCentreId'] = isset($data['costCentreId']) ? $data['costCentreId'] : null;
        $this->container['costUnitId'] = isset($data['costUnitId']) ? $data['costUnitId'] : null;
        $this->container['declarable'] = isset($data['declarable']) ? $data['declarable'] : null;
        $this->container['deliveryDate'] = isset($data['deliveryDate']) ? $data['deliveryDate'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['discountAccountId'] = isset($data['discountAccountId']) ? $data['discountAccountId'] : null;
        $this->container['employeeId'] = isset($data['employeeId']) ? $data['employeeId'] : null;
        $this->container['hourType'] = isset($data['hourType']) ? $data['hourType'] : null;
        $this->container['marginAmount'] = isset($data['marginAmount']) ? $data['marginAmount'] : null;
        $this->container['marginPercentage'] = isset($data['marginPercentage']) ? $data['marginPercentage'] : null;
        $this->container['orderDate'] = isset($data['orderDate']) ? $data['orderDate'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['orderLineId'] = isset($data['orderLineId']) ? $data['orderLineId'] : null;
        $this->container['orderLineType'] = isset($data['orderLineType']) ? $data['orderLineType'] : null;
        $this->container['pickListText'] = isset($data['pickListText']) ? $data['pickListText'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['pricePer'] = isset($data['pricePer']) ? $data['pricePer'] : null;
        $this->container['productDescription'] = isset($data['productDescription']) ? $data['productDescription'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['projectCostPrice'] = isset($data['projectCostPrice']) ? $data['projectCostPrice'] : null;
        $this->container['projectCosts'] = isset($data['projectCosts']) ? $data['projectCosts'] : null;
        $this->container['projectEntryType'] = isset($data['projectEntryType']) ? $data['projectEntryType'] : null;
        $this->container['projectTermId'] = isset($data['projectTermId']) ? $data['projectTermId'] : null;
        $this->container['quantityBackorder'] = isset($data['quantityBackorder']) ? $data['quantityBackorder'] : null;
        $this->container['quantityDelivered'] = isset($data['quantityDelivered']) ? $data['quantityDelivered'] : null;
        $this->container['quantityOrdered'] = isset($data['quantityOrdered']) ? $data['quantityOrdered'] : null;
        $this->container['quantityScale'] = isset($data['quantityScale']) ? $data['quantityScale'] : null;
        $this->container['quantityToDeliver'] = isset($data['quantityToDeliver']) ? $data['quantityToDeliver'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['stockTransferPrice'] = isset($data['stockTransferPrice']) ? $data['stockTransferPrice'] : null;
        $this->container['subProjectId'] = isset($data['subProjectId']) ? $data['subProjectId'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['vatCodeId'] = isset($data['vatCodeId']) ? $data['vatCodeId'] : null;
        $this->container['vatPercentage'] = isset($data['vatPercentage']) ? $data['vatPercentage'] : null;
        $this->container['warehouseId'] = isset($data['warehouseId']) ? $data['warehouseId'] : null;
        $this->container['weekNumber'] = isset($data['weekNumber']) ? $data['weekNumber'] : null;
        $this->container['workOrderNumber'] = isset($data['workOrderNumber']) ? $data['workOrderNumber'] : null;
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
     * Gets accountId
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param string|null $accountId accountId
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets amountExclVat
     *
     * @return float|null
     */
    public function getAmountExclVat()
    {
        return $this->container['amountExclVat'];
    }

    /**
     * Sets amountExclVat
     *
     * @param float|null $amountExclVat amountExclVat
     *
     * @return $this
     */
    public function setAmountExclVat($amountExclVat)
    {
        $this->container['amountExclVat'] = $amountExclVat;

        return $this;
    }

    /**
     * Gets amountInclVat
     *
     * @return float|null
     */
    public function getAmountInclVat()
    {
        return $this->container['amountInclVat'];
    }

    /**
     * Sets amountInclVat
     *
     * @param float|null $amountInclVat amountInclVat
     *
     * @return $this
     */
    public function setAmountInclVat($amountInclVat)
    {
        $this->container['amountInclVat'] = $amountInclVat;

        return $this;
    }

    /**
     * Gets constellationGuid
     *
     * @return string|null
     */
    public function getConstellationGuid()
    {
        return $this->container['constellationGuid'];
    }

    /**
     * Sets constellationGuid
     *
     * @param string|null $constellationGuid constellationGuid
     *
     * @return $this
     */
    public function setConstellationGuid($constellationGuid)
    {
        $this->container['constellationGuid'] = $constellationGuid;

        return $this;
    }

    /**
     * Gets costCentreId
     *
     * @return string|null
     */
    public function getCostCentreId()
    {
        return $this->container['costCentreId'];
    }

    /**
     * Sets costCentreId
     *
     * @param string|null $costCentreId costCentreId
     *
     * @return $this
     */
    public function setCostCentreId($costCentreId)
    {
        $this->container['costCentreId'] = $costCentreId;

        return $this;
    }

    /**
     * Gets costUnitId
     *
     * @return string|null
     */
    public function getCostUnitId()
    {
        return $this->container['costUnitId'];
    }

    /**
     * Sets costUnitId
     *
     * @param string|null $costUnitId costUnitId
     *
     * @return $this
     */
    public function setCostUnitId($costUnitId)
    {
        $this->container['costUnitId'] = $costUnitId;

        return $this;
    }

    /**
     * Gets declarable
     *
     * @return bool|null
     */
    public function getDeclarable()
    {
        return $this->container['declarable'];
    }

    /**
     * Sets declarable
     *
     * @param bool|null $declarable declarable
     *
     * @return $this
     */
    public function setDeclarable($declarable)
    {
        $this->container['declarable'] = $declarable;

        return $this;
    }

    /**
     * Gets deliveryDate
     *
     * @return string|null
     */
    public function getDeliveryDate()
    {
        return $this->container['deliveryDate'];
    }

    /**
     * Sets deliveryDate
     *
     * @param string|null $deliveryDate deliveryDate
     *
     * @return $this
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->container['deliveryDate'] = $deliveryDate;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return float|null
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param float|null $discount discount
     *
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets discountAccountId
     *
     * @return string|null
     */
    public function getDiscountAccountId()
    {
        return $this->container['discountAccountId'];
    }

    /**
     * Sets discountAccountId
     *
     * @param string|null $discountAccountId discountAccountId
     *
     * @return $this
     */
    public function setDiscountAccountId($discountAccountId)
    {
        $this->container['discountAccountId'] = $discountAccountId;

        return $this;
    }

    /**
     * Gets employeeId
     *
     * @return string|null
     */
    public function getEmployeeId()
    {
        return $this->container['employeeId'];
    }

    /**
     * Sets employeeId
     *
     * @param string|null $employeeId employeeId
     *
     * @return $this
     */
    public function setEmployeeId($employeeId)
    {
        $this->container['employeeId'] = $employeeId;

        return $this;
    }

    /**
     * Gets hourType
     *
     * @return string|null
     */
    public function getHourType()
    {
        return $this->container['hourType'];
    }

    /**
     * Sets hourType
     *
     * @param string|null $hourType hourType
     *
     * @return $this
     */
    public function setHourType($hourType)
    {
        $this->container['hourType'] = $hourType;

        return $this;
    }

    /**
     * Gets marginAmount
     *
     * @return float|null
     */
    public function getMarginAmount()
    {
        return $this->container['marginAmount'];
    }

    /**
     * Sets marginAmount
     *
     * @param float|null $marginAmount marginAmount
     *
     * @return $this
     */
    public function setMarginAmount($marginAmount)
    {
        $this->container['marginAmount'] = $marginAmount;

        return $this;
    }

    /**
     * Gets marginPercentage
     *
     * @return float|null
     */
    public function getMarginPercentage()
    {
        return $this->container['marginPercentage'];
    }

    /**
     * Sets marginPercentage
     *
     * @param float|null $marginPercentage marginPercentage
     *
     * @return $this
     */
    public function setMarginPercentage($marginPercentage)
    {
        $this->container['marginPercentage'] = $marginPercentage;

        return $this;
    }

    /**
     * Gets orderDate
     *
     * @return string|null
     */
    public function getOrderDate()
    {
        return $this->container['orderDate'];
    }

    /**
     * Sets orderDate
     *
     * @param string|null $orderDate orderDate
     *
     * @return $this
     */
    public function setOrderDate($orderDate)
    {
        $this->container['orderDate'] = $orderDate;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string|null $orderId orderId
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets orderLineId
     *
     * @return int|null
     */
    public function getOrderLineId()
    {
        return $this->container['orderLineId'];
    }

    /**
     * Sets orderLineId
     *
     * @param int|null $orderLineId orderLineId
     *
     * @return $this
     */
    public function setOrderLineId($orderLineId)
    {
        $this->container['orderLineId'] = $orderLineId;

        return $this;
    }

    /**
     * Gets orderLineType
     *
     * @return int|null
     */
    public function getOrderLineType()
    {
        return $this->container['orderLineType'];
    }

    /**
     * Sets orderLineType
     *
     * @param int|null $orderLineType orderLineType
     *
     * @return $this
     */
    public function setOrderLineType($orderLineType)
    {
        $this->container['orderLineType'] = $orderLineType;

        return $this;
    }

    /**
     * Gets pickListText
     *
     * @return bool|null
     */
    public function getPickListText()
    {
        return $this->container['pickListText'];
    }

    /**
     * Sets pickListText
     *
     * @param bool|null $pickListText pickListText
     *
     * @return $this
     */
    public function setPickListText($pickListText)
    {
        $this->container['pickListText'] = $pickListText;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets pricePer
     *
     * @return float|null
     */
    public function getPricePer()
    {
        return $this->container['pricePer'];
    }

    /**
     * Sets pricePer
     *
     * @param float|null $pricePer pricePer
     *
     * @return $this
     */
    public function setPricePer($pricePer)
    {
        $this->container['pricePer'] = $pricePer;

        return $this;
    }

    /**
     * Gets productDescription
     *
     * @return string|null
     */
    public function getProductDescription()
    {
        return $this->container['productDescription'];
    }

    /**
     * Sets productDescription
     *
     * @param string|null $productDescription productDescription
     *
     * @return $this
     */
    public function setProductDescription($productDescription)
    {
        $this->container['productDescription'] = $productDescription;

        return $this;
    }

    /**
     * Gets productId
     *
     * @return string|null
     */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
     * Sets productId
     *
     * @param string|null $productId productId
     *
     * @return $this
     */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;

        return $this;
    }

    /**
     * Gets projectCostPrice
     *
     * @return float|null
     */
    public function getProjectCostPrice()
    {
        return $this->container['projectCostPrice'];
    }

    /**
     * Sets projectCostPrice
     *
     * @param float|null $projectCostPrice projectCostPrice
     *
     * @return $this
     */
    public function setProjectCostPrice($projectCostPrice)
    {
        $this->container['projectCostPrice'] = $projectCostPrice;

        return $this;
    }

    /**
     * Gets projectCosts
     *
     * @return float|null
     */
    public function getProjectCosts()
    {
        return $this->container['projectCosts'];
    }

    /**
     * Sets projectCosts
     *
     * @param float|null $projectCosts projectCosts
     *
     * @return $this
     */
    public function setProjectCosts($projectCosts)
    {
        $this->container['projectCosts'] = $projectCosts;

        return $this;
    }

    /**
     * Gets projectEntryType
     *
     * @return int|null
     */
    public function getProjectEntryType()
    {
        return $this->container['projectEntryType'];
    }

    /**
     * Sets projectEntryType
     *
     * @param int|null $projectEntryType projectEntryType
     *
     * @return $this
     */
    public function setProjectEntryType($projectEntryType)
    {
        $this->container['projectEntryType'] = $projectEntryType;

        return $this;
    }

    /**
     * Gets projectTermId
     *
     * @return int|null
     */
    public function getProjectTermId()
    {
        return $this->container['projectTermId'];
    }

    /**
     * Sets projectTermId
     *
     * @param int|null $projectTermId projectTermId
     *
     * @return $this
     */
    public function setProjectTermId($projectTermId)
    {
        $this->container['projectTermId'] = $projectTermId;

        return $this;
    }

    /**
     * Gets quantityBackorder
     *
     * @return float|null
     */
    public function getQuantityBackorder()
    {
        return $this->container['quantityBackorder'];
    }

    /**
     * Sets quantityBackorder
     *
     * @param float|null $quantityBackorder quantityBackorder
     *
     * @return $this
     */
    public function setQuantityBackorder($quantityBackorder)
    {
        $this->container['quantityBackorder'] = $quantityBackorder;

        return $this;
    }

    /**
     * Gets quantityDelivered
     *
     * @return float|null
     */
    public function getQuantityDelivered()
    {
        return $this->container['quantityDelivered'];
    }

    /**
     * Sets quantityDelivered
     *
     * @param float|null $quantityDelivered quantityDelivered
     *
     * @return $this
     */
    public function setQuantityDelivered($quantityDelivered)
    {
        $this->container['quantityDelivered'] = $quantityDelivered;

        return $this;
    }

    /**
     * Gets quantityOrdered
     *
     * @return float|null
     */
    public function getQuantityOrdered()
    {
        return $this->container['quantityOrdered'];
    }

    /**
     * Sets quantityOrdered
     *
     * @param float|null $quantityOrdered quantityOrdered
     *
     * @return $this
     */
    public function setQuantityOrdered($quantityOrdered)
    {
        $this->container['quantityOrdered'] = $quantityOrdered;

        return $this;
    }

    /**
     * Gets quantityScale
     *
     * @return int|null
     */
    public function getQuantityScale()
    {
        return $this->container['quantityScale'];
    }

    /**
     * Sets quantityScale
     *
     * @param int|null $quantityScale quantityScale
     *
     * @return $this
     */
    public function setQuantityScale($quantityScale)
    {
        $this->container['quantityScale'] = $quantityScale;

        return $this;
    }

    /**
     * Gets quantityToDeliver
     *
     * @return float|null
     */
    public function getQuantityToDeliver()
    {
        return $this->container['quantityToDeliver'];
    }

    /**
     * Sets quantityToDeliver
     *
     * @param float|null $quantityToDeliver quantityToDeliver
     *
     * @return $this
     */
    public function setQuantityToDeliver($quantityToDeliver)
    {
        $this->container['quantityToDeliver'] = $quantityToDeliver;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets stockTransferPrice
     *
     * @return float|null
     */
    public function getStockTransferPrice()
    {
        return $this->container['stockTransferPrice'];
    }

    /**
     * Sets stockTransferPrice
     *
     * @param float|null $stockTransferPrice stockTransferPrice
     *
     * @return $this
     */
    public function setStockTransferPrice($stockTransferPrice)
    {
        $this->container['stockTransferPrice'] = $stockTransferPrice;

        return $this;
    }

    /**
     * Gets subProjectId
     *
     * @return string|null
     */
    public function getSubProjectId()
    {
        return $this->container['subProjectId'];
    }

    /**
     * Sets subProjectId
     *
     * @param string|null $subProjectId subProjectId
     *
     * @return $this
     */
    public function setSubProjectId($subProjectId)
    {
        $this->container['subProjectId'] = $subProjectId;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string|null
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string|null $unit unit
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets vatCodeId
     *
     * @return int|null
     */
    public function getVatCodeId()
    {
        return $this->container['vatCodeId'];
    }

    /**
     * Sets vatCodeId
     *
     * @param int|null $vatCodeId vatCodeId
     *
     * @return $this
     */
    public function setVatCodeId($vatCodeId)
    {
        $this->container['vatCodeId'] = $vatCodeId;

        return $this;
    }

    /**
     * Gets vatPercentage
     *
     * @return float|null
     */
    public function getVatPercentage()
    {
        return $this->container['vatPercentage'];
    }

    /**
     * Sets vatPercentage
     *
     * @param float|null $vatPercentage vatPercentage
     *
     * @return $this
     */
    public function setVatPercentage($vatPercentage)
    {
        $this->container['vatPercentage'] = $vatPercentage;

        return $this;
    }

    /**
     * Gets warehouseId
     *
     * @return string|null
     */
    public function getWarehouseId()
    {
        return $this->container['warehouseId'];
    }

    /**
     * Sets warehouseId
     *
     * @param string|null $warehouseId warehouseId
     *
     * @return $this
     */
    public function setWarehouseId($warehouseId)
    {
        $this->container['warehouseId'] = $warehouseId;

        return $this;
    }

    /**
     * Gets weekNumber
     *
     * @return int|null
     */
    public function getWeekNumber()
    {
        return $this->container['weekNumber'];
    }

    /**
     * Sets weekNumber
     *
     * @param int|null $weekNumber weekNumber
     *
     * @return $this
     */
    public function setWeekNumber($weekNumber)
    {
        $this->container['weekNumber'] = $weekNumber;

        return $this;
    }

    /**
     * Gets workOrderNumber
     *
     * @return string|null
     */
    public function getWorkOrderNumber()
    {
        return $this->container['workOrderNumber'];
    }

    /**
     * Sets workOrderNumber
     *
     * @param string|null $workOrderNumber workOrderNumber
     *
     * @return $this
     */
    public function setWorkOrderNumber($workOrderNumber)
    {
        $this->container['workOrderNumber'] = $workOrderNumber;

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


