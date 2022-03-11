<?php
/**
 * Transaction
 *
 * PHP version 5
 *
 * @category Class
 * @package  Introvert
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * INTROVERT API
 *
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Introvert\Model;

use \ArrayAccess;

/**
 * Transaction Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Introvert
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Transaction implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Transaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customer_id' => 'int',
        'date' => 'int',
        'price' => 'int',
        'next_price' => 'int',
        'next_date' => 'int'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'customer_id' => 'customer_id',
        'date' => 'date',
        'price' => 'price',
        'next_price' => 'next_price',
        'next_date' => 'next_date'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'customer_id' => 'setCustomerId',
        'date' => 'setDate',
        'price' => 'setPrice',
        'next_price' => 'setNextPrice',
        'next_date' => 'setNextDate'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'customer_id' => 'getCustomerId',
        'date' => 'getDate',
        'price' => 'getPrice',
        'next_price' => 'getNextPrice',
        'next_date' => 'getNextDate'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['next_price'] = isset($data['next_price']) ? $data['next_price'] : null;
        $this->container['next_date'] = isset($data['next_date']) ? $data['next_date'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets customer_id
     * @return int
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     * @param int $customer_id id покупателя
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets date
     * @return int
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     * @param int $date Дата совершенной покупки (timestamp)
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets price
     * @return int
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param int $price Сумма совершенной покупки
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets next_price
     * @return int
     */
    public function getNextPrice()
    {
        return $this->container['next_price'];
    }

    /**
     * Sets next_price
     * @param int $next_price Ожидаемая сумма покупателя
     * @return $this
     */
    public function setNextPrice($next_price)
    {
        $this->container['next_price'] = $next_price;

        return $this;
    }

    /**
     * Gets next_date
     * @return int
     */
    public function getNextDate()
    {
        return $this->container['next_date'];
    }

    /**
     * Sets next_date
     * @param int $next_date Ожидаемая дата покупателя (timestamp)
     * @return $this
     */
    public function setNextDate($next_date)
    {
        $this->container['next_date'] = $next_date;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Introvert\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Introvert\ObjectSerializer::sanitizeForSerialization($this));
    }
}


