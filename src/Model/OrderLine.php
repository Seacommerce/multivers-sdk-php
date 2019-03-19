<?php
/**
 * OrderLine
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
 * OrderLine Class Doc Comment
 *
 * @category Class
 * @package  Seacommerce\Unit4\Multivers\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'string',
        'autoCalculatePrice' => 'bool',
        'autoUnmatchToPurchase' => 'bool',
        'canChange' => 'bool',
        'cannotChangeReason' => 'string',
        'costCentreId' => 'string',
        'costUnitId' => 'string',
        'deliveryDate' => 'string',
        'description' => 'string',
        'discount' => 'float',
        'discountAccountId' => 'string',
        'matchedToPurchase' => 'bool',
        'orderLineAmount' => 'float',
        'orderLineId' => 'int',
        'orderLineType' => 'int',
        'pickListText' => 'bool',
        'price' => 'float',
        'pricePer' => 'float',
        'productId' => 'string',
        'quantityBackorder' => 'float',
        'quantityDelivered' => 'float',
        'quantityOrdered' => 'float',
        'quantityScale' => 'int',
        'quantityToDeliver' => 'float',
        'unit' => 'string',
        'vatCodeId' => 'int',
        'warehouseId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'accountId' => null,
        'autoCalculatePrice' => null,
        'autoUnmatchToPurchase' => null,
        'canChange' => null,
        'cannotChangeReason' => null,
        'costCentreId' => null,
        'costUnitId' => null,
        'deliveryDate' => null,
        'description' => null,
        'discount' => null,
        'discountAccountId' => null,
        'matchedToPurchase' => null,
        'orderLineAmount' => null,
        'orderLineId' => 'int32',
        'orderLineType' => 'int32',
        'pickListText' => null,
        'price' => null,
        'pricePer' => null,
        'productId' => null,
        'quantityBackorder' => null,
        'quantityDelivered' => null,
        'quantityOrdered' => null,
        'quantityScale' => 'int32',
        'quantityToDeliver' => null,
        'unit' => null,
        'vatCodeId' => 'int32',
        'warehouseId' => null
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
        'autoCalculatePrice' => 'autoCalculatePrice',
        'autoUnmatchToPurchase' => 'autoUnmatchToPurchase',
        'canChange' => 'canChange',
        'cannotChangeReason' => 'cannotChangeReason',
        'costCentreId' => 'costCentreId',
        'costUnitId' => 'costUnitId',
        'deliveryDate' => 'deliveryDate',
        'description' => 'description',
        'discount' => 'discount',
        'discountAccountId' => 'discountAccountId',
        'matchedToPurchase' => 'matchedToPurchase',
        'orderLineAmount' => 'orderLineAmount',
        'orderLineId' => 'orderLineId',
        'orderLineType' => 'orderLineType',
        'pickListText' => 'pickListText',
        'price' => 'price',
        'pricePer' => 'pricePer',
        'productId' => 'productId',
        'quantityBackorder' => 'quantityBackorder',
        'quantityDelivered' => 'quantityDelivered',
        'quantityOrdered' => 'quantityOrdered',
        'quantityScale' => 'quantityScale',
        'quantityToDeliver' => 'quantityToDeliver',
        'unit' => 'unit',
        'vatCodeId' => 'vatCodeId',
        'warehouseId' => 'warehouseId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'autoCalculatePrice' => 'setAutoCalculatePrice',
        'autoUnmatchToPurchase' => 'setAutoUnmatchToPurchase',
        'canChange' => 'setCanChange',
        'cannotChangeReason' => 'setCannotChangeReason',
        'costCentreId' => 'setCostCentreId',
        'costUnitId' => 'setCostUnitId',
        'deliveryDate' => 'setDeliveryDate',
        'description' => 'setDescription',
        'discount' => 'setDiscount',
        'discountAccountId' => 'setDiscountAccountId',
        'matchedToPurchase' => 'setMatchedToPurchase',
        'orderLineAmount' => 'setOrderLineAmount',
        'orderLineId' => 'setOrderLineId',
        'orderLineType' => 'setOrderLineType',
        'pickListText' => 'setPickListText',
        'price' => 'setPrice',
        'pricePer' => 'setPricePer',
        'productId' => 'setProductId',
        'quantityBackorder' => 'setQuantityBackorder',
        'quantityDelivered' => 'setQuantityDelivered',
        'quantityOrdered' => 'setQuantityOrdered',
        'quantityScale' => 'setQuantityScale',
        'quantityToDeliver' => 'setQuantityToDeliver',
        'unit' => 'setUnit',
        'vatCodeId' => 'setVatCodeId',
        'warehouseId' => 'setWarehouseId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'autoCalculatePrice' => 'getAutoCalculatePrice',
        'autoUnmatchToPurchase' => 'getAutoUnmatchToPurchase',
        'canChange' => 'getCanChange',
        'cannotChangeReason' => 'getCannotChangeReason',
        'costCentreId' => 'getCostCentreId',
        'costUnitId' => 'getCostUnitId',
        'deliveryDate' => 'getDeliveryDate',
        'description' => 'getDescription',
        'discount' => 'getDiscount',
        'discountAccountId' => 'getDiscountAccountId',
        'matchedToPurchase' => 'getMatchedToPurchase',
        'orderLineAmount' => 'getOrderLineAmount',
        'orderLineId' => 'getOrderLineId',
        'orderLineType' => 'getOrderLineType',
        'pickListText' => 'getPickListText',
        'price' => 'getPrice',
        'pricePer' => 'getPricePer',
        'productId' => 'getProductId',
        'quantityBackorder' => 'getQuantityBackorder',
        'quantityDelivered' => 'getQuantityDelivered',
        'quantityOrdered' => 'getQuantityOrdered',
        'quantityScale' => 'getQuantityScale',
        'quantityToDeliver' => 'getQuantityToDeliver',
        'unit' => 'getUnit',
        'vatCodeId' => 'getVatCodeId',
        'warehouseId' => 'getWarehouseId'
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
        $this->container['autoCalculatePrice'] = isset($data['autoCalculatePrice']) ? $data['autoCalculatePrice'] : null;
        $this->container['autoUnmatchToPurchase'] = isset($data['autoUnmatchToPurchase']) ? $data['autoUnmatchToPurchase'] : null;
        $this->container['canChange'] = isset($data['canChange']) ? $data['canChange'] : null;
        $this->container['cannotChangeReason'] = isset($data['cannotChangeReason']) ? $data['cannotChangeReason'] : null;
        $this->container['costCentreId'] = isset($data['costCentreId']) ? $data['costCentreId'] : null;
        $this->container['costUnitId'] = isset($data['costUnitId']) ? $data['costUnitId'] : null;
        $this->container['deliveryDate'] = isset($data['deliveryDate']) ? $data['deliveryDate'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['discountAccountId'] = isset($data['discountAccountId']) ? $data['discountAccountId'] : null;
        $this->container['matchedToPurchase'] = isset($data['matchedToPurchase']) ? $data['matchedToPurchase'] : null;
        $this->container['orderLineAmount'] = isset($data['orderLineAmount']) ? $data['orderLineAmount'] : null;
        $this->container['orderLineId'] = isset($data['orderLineId']) ? $data['orderLineId'] : null;
        $this->container['orderLineType'] = isset($data['orderLineType']) ? $data['orderLineType'] : null;
        $this->container['pickListText'] = isset($data['pickListText']) ? $data['pickListText'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['pricePer'] = isset($data['pricePer']) ? $data['pricePer'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['quantityBackorder'] = isset($data['quantityBackorder']) ? $data['quantityBackorder'] : null;
        $this->container['quantityDelivered'] = isset($data['quantityDelivered']) ? $data['quantityDelivered'] : null;
        $this->container['quantityOrdered'] = isset($data['quantityOrdered']) ? $data['quantityOrdered'] : null;
        $this->container['quantityScale'] = isset($data['quantityScale']) ? $data['quantityScale'] : null;
        $this->container['quantityToDeliver'] = isset($data['quantityToDeliver']) ? $data['quantityToDeliver'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['vatCodeId'] = isset($data['vatCodeId']) ? $data['vatCodeId'] : null;
        $this->container['warehouseId'] = isset($data['warehouseId']) ? $data['warehouseId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['accountId']) && (mb_strlen($this->container['accountId']) > 8)) {
            $invalidProperties[] = "invalid value for 'accountId', the character length must be smaller than or equal to 8.";
        }

        if (!is_null($this->container['costCentreId']) && (mb_strlen($this->container['costCentreId']) > 8)) {
            $invalidProperties[] = "invalid value for 'costCentreId', the character length must be smaller than or equal to 8.";
        }

        if (!is_null($this->container['costUnitId']) && (mb_strlen($this->container['costUnitId']) > 8)) {
            $invalidProperties[] = "invalid value for 'costUnitId', the character length must be smaller than or equal to 8.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 254)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 254.";
        }

        if (!is_null($this->container['discount']) && ($this->container['discount'] > 1)) {
            $invalidProperties[] = "invalid value for 'discount', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['discount']) && ($this->container['discount'] < 0)) {
            $invalidProperties[] = "invalid value for 'discount', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['discountAccountId']) && (mb_strlen($this->container['discountAccountId']) > 8)) {
            $invalidProperties[] = "invalid value for 'discountAccountId', the character length must be smaller than or equal to 8.";
        }

        if (!is_null($this->container['price']) && ($this->container['price'] > 999999999)) {
            $invalidProperties[] = "invalid value for 'price', must be smaller than or equal to 999999999.";
        }

        if (!is_null($this->container['price']) && ($this->container['price'] < 0)) {
            $invalidProperties[] = "invalid value for 'price', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['productId']) && (mb_strlen($this->container['productId']) > 14)) {
            $invalidProperties[] = "invalid value for 'productId', the character length must be smaller than or equal to 14.";
        }

        if (!is_null($this->container['quantityBackorder']) && ($this->container['quantityBackorder'] > 79228162514264337593543950335)) {
            $invalidProperties[] = "invalid value for 'quantityBackorder', must be smaller than or equal to 79228162514264337593543950335.";
        }

        if (!is_null($this->container['quantityBackorder']) && ($this->container['quantityBackorder'] < 0)) {
            $invalidProperties[] = "invalid value for 'quantityBackorder', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['unit']) && (mb_strlen($this->container['unit']) > 6)) {
            $invalidProperties[] = "invalid value for 'unit', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['warehouseId']) && (mb_strlen($this->container['warehouseId']) > 3)) {
            $invalidProperties[] = "invalid value for 'warehouseId', the character length must be smaller than or equal to 3.";
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
        if (!is_null($accountId) && (mb_strlen($accountId) > 8)) {
            throw new \InvalidArgumentException('invalid length for $accountId when calling OrderLine., must be smaller than or equal to 8.');
        }

        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets autoCalculatePrice
     *
     * @return bool|null
     */
    public function getAutoCalculatePrice()
    {
        return $this->container['autoCalculatePrice'];
    }

    /**
     * Sets autoCalculatePrice
     *
     * @param bool|null $autoCalculatePrice autoCalculatePrice
     *
     * @return $this
     */
    public function setAutoCalculatePrice($autoCalculatePrice)
    {
        $this->container['autoCalculatePrice'] = $autoCalculatePrice;

        return $this;
    }

    /**
     * Gets autoUnmatchToPurchase
     *
     * @return bool|null
     */
    public function getAutoUnmatchToPurchase()
    {
        return $this->container['autoUnmatchToPurchase'];
    }

    /**
     * Sets autoUnmatchToPurchase
     *
     * @param bool|null $autoUnmatchToPurchase autoUnmatchToPurchase
     *
     * @return $this
     */
    public function setAutoUnmatchToPurchase($autoUnmatchToPurchase)
    {
        $this->container['autoUnmatchToPurchase'] = $autoUnmatchToPurchase;

        return $this;
    }

    /**
     * Gets canChange
     *
     * @return bool|null
     */
    public function getCanChange()
    {
        return $this->container['canChange'];
    }

    /**
     * Sets canChange
     *
     * @param bool|null $canChange canChange
     *
     * @return $this
     */
    public function setCanChange($canChange)
    {
        $this->container['canChange'] = $canChange;

        return $this;
    }

    /**
     * Gets cannotChangeReason
     *
     * @return string|null
     */
    public function getCannotChangeReason()
    {
        return $this->container['cannotChangeReason'];
    }

    /**
     * Sets cannotChangeReason
     *
     * @param string|null $cannotChangeReason cannotChangeReason
     *
     * @return $this
     */
    public function setCannotChangeReason($cannotChangeReason)
    {
        $this->container['cannotChangeReason'] = $cannotChangeReason;

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
        if (!is_null($costCentreId) && (mb_strlen($costCentreId) > 8)) {
            throw new \InvalidArgumentException('invalid length for $costCentreId when calling OrderLine., must be smaller than or equal to 8.');
        }

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
        if (!is_null($costUnitId) && (mb_strlen($costUnitId) > 8)) {
            throw new \InvalidArgumentException('invalid length for $costUnitId when calling OrderLine., must be smaller than or equal to 8.');
        }

        $this->container['costUnitId'] = $costUnitId;

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
        if (!is_null($description) && (mb_strlen($description) > 254)) {
            throw new \InvalidArgumentException('invalid length for $description when calling OrderLine., must be smaller than or equal to 254.');
        }

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

        if (!is_null($discount) && ($discount > 1)) {
            throw new \InvalidArgumentException('invalid value for $discount when calling OrderLine., must be smaller than or equal to 1.');
        }
        if (!is_null($discount) && ($discount < 0)) {
            throw new \InvalidArgumentException('invalid value for $discount when calling OrderLine., must be bigger than or equal to 0.');
        }

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
        if (!is_null($discountAccountId) && (mb_strlen($discountAccountId) > 8)) {
            throw new \InvalidArgumentException('invalid length for $discountAccountId when calling OrderLine., must be smaller than or equal to 8.');
        }

        $this->container['discountAccountId'] = $discountAccountId;

        return $this;
    }

    /**
     * Gets matchedToPurchase
     *
     * @return bool|null
     */
    public function getMatchedToPurchase()
    {
        return $this->container['matchedToPurchase'];
    }

    /**
     * Sets matchedToPurchase
     *
     * @param bool|null $matchedToPurchase matchedToPurchase
     *
     * @return $this
     */
    public function setMatchedToPurchase($matchedToPurchase)
    {
        $this->container['matchedToPurchase'] = $matchedToPurchase;

        return $this;
    }

    /**
     * Gets orderLineAmount
     *
     * @return float|null
     */
    public function getOrderLineAmount()
    {
        return $this->container['orderLineAmount'];
    }

    /**
     * Sets orderLineAmount
     *
     * @param float|null $orderLineAmount orderLineAmount
     *
     * @return $this
     */
    public function setOrderLineAmount($orderLineAmount)
    {
        $this->container['orderLineAmount'] = $orderLineAmount;

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

        if (!is_null($price) && ($price > 999999999)) {
            throw new \InvalidArgumentException('invalid value for $price when calling OrderLine., must be smaller than or equal to 999999999.');
        }
        if (!is_null($price) && ($price < 0)) {
            throw new \InvalidArgumentException('invalid value for $price when calling OrderLine., must be bigger than or equal to 0.');
        }

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
        if (!is_null($productId) && (mb_strlen($productId) > 14)) {
            throw new \InvalidArgumentException('invalid length for $productId when calling OrderLine., must be smaller than or equal to 14.');
        }

        $this->container['productId'] = $productId;

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

        if (!is_null($quantityBackorder) && ($quantityBackorder > 79228162514264337593543950335)) {
            throw new \InvalidArgumentException('invalid value for $quantityBackorder when calling OrderLine., must be smaller than or equal to 79228162514264337593543950335.');
        }
        if (!is_null($quantityBackorder) && ($quantityBackorder < 0)) {
            throw new \InvalidArgumentException('invalid value for $quantityBackorder when calling OrderLine., must be bigger than or equal to 0.');
        }

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
        if (!is_null($unit) && (mb_strlen($unit) > 6)) {
            throw new \InvalidArgumentException('invalid length for $unit when calling OrderLine., must be smaller than or equal to 6.');
        }

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
        if (!is_null($warehouseId) && (mb_strlen($warehouseId) > 3)) {
            throw new \InvalidArgumentException('invalid length for $warehouseId when calling OrderLine., must be smaller than or equal to 3.');
        }

        $this->container['warehouseId'] = $warehouseId;

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


