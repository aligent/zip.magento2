<?php
/**
 * HateoaslinksLinks
 *
 * @category Class
 * @package  zipMoney
 * @author   Zip Plugin Team <integrations@zip.co>
 * @link     https://github.com/zipMoney/merchantapi-php
 */

namespace Zip\ZipPayment\MerchantApi\Lib\Model;

use \ArrayAccess;

class HateoaslinksLinks implements ArrayAccess
{
    const DISCRIMINATOR = 'subclass';

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'hateoaslinks__links';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $zipTypes = [
        'href' => 'string',
        'rel' => 'string',
        'method' => 'string'
    ];

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'href' => 'href',
        'rel' => 'rel',
        'method' => 'method'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'href' => 'setHref',
        'rel' => 'setRel',
        'method' => 'setMethod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'href' => 'getHref',
        'rel' => 'getRel',
        'method' => 'getMethod'
    ];

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
        $this->container['href'] = isset($data['href']) ? $data['href'] : null;
        $this->container['rel'] = isset($data['rel']) ? $data['rel'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
    }

    public static function zipTypes()
    {
        return self::$zipTypes;
    }

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
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return true;
    }

    /**
     * Gets href
     * @return string
     */
    public function getHref()
    {
        return $this->container['href'];
    }

    /**
     * Sets href
     * @param string $href
     * @return $this
     */
    public function setHref($href)
    {
        $this->container['href'] = $href;

        return $this;
    }

    /**
     * Gets rel
     * @return string
     */
    public function getRel()
    {
        return $this->container['rel'];
    }

    /**
     * Sets rel
     * @param string $rel
     * @return $this
     */
    public function setRel($rel)
    {
        $this->container['rel'] = $rel;

        return $this;
    }

    /**
     * Gets method
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     * @param string $method
     * @return $this
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     * @param mixed $offset Offset
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param mixed $offset Offset
     * @return mixed
     */
    public function offsetGet(mixed $offset): mixed
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param mixed $offset Offset
     * @param mixed $value Value to be set
     * @return void
     */
    public function offsetSet(mixed $offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param mixed $offset Offset
     * @return void
     */
    public function offsetUnset(mixed $offset): void
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
            return json_encode(
                \Zip\ZipPayment\MerchantApi\Lib\ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(\Zip\ZipPayment\MerchantApi\Lib\ObjectSerializer::sanitizeForSerialization($this));
    }
}
