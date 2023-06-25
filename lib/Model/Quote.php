<?php
/**
 * Quote
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * TzKT API
 *
 * # Introduction  TzKT Explorer provides free REST API and WebSocket API for accessing detailed Tezos blockchain data and helps developers build more services and applications on top of Tezos. TzKT is an open-source project, so you can easily clone and build it and use it as a self-hosted service to avoid any risks of depending on third-party services.  TzKT API is available for the following Tezos networks with the following base URLs:   - Mainnet: `https://api.tzkt.io/` or `https://api.mainnet.tzkt.io/` ([view docs](https://api.tzkt.io))  - Ghostnet: `https://api.ghostnet.tzkt.io/` ([view docs](https://api.ghostnet.tzkt.io)) - Mumbainet: `https://api.mumbainet.tzkt.io/` ([view docs](https://api.mumbainet.tzkt.io)) - Nairobinet: `https://api.nairobinet.tzkt.io/` ([view docs](https://api.nairobinet.tzkt.io))  We also provide a staging environment for testing newest features and pre-updating client applications before deploying to production:  - Mainnet staging: `https://staging.api.tzkt.io/` or `https://staging.api.mainnet.tzkt.io/` ([view docs](https://staging.api.tzkt.io))  Feel free to contact us if you have any questions or feature requests. Your feedback really helps us make TzKT better!  - Discord: https://discord.gg/aG8XKuwsQd - Telegram: https://t.me/baking_bad_chat - Slack: https://tezos-dev.slack.com/archives/CV5NX7F2L - Twitter: https://twitter.com/TezosBakingBad - Email: hello@bakingbad.dev  And don't forget to star TzKT project [on GitHub](https://github.com/baking-bad/tzkt) ;)  # Terms of Use  TzKT API is free for everyone and for both commercial and non-commercial usage.  If your application or service uses the TzKT API in any forms: directly on frontend or indirectly on backend, you must mention that fact on your website or application by placing the label **\"Powered by TzKT API\"** or **\"Built with TzKT API\"** with a direct link to [tzkt.io](https://tzkt.io).   # Rate Limits  There will be no rate limits as long as our servers can handle the load without additional infrastructure costs. However, any apparent abuse will be prevented by setting targeted rate limits.  Check out [Tezos Explorer API Best Practices](https://baking-bad.org/blog/tag/TzKT/) and in particular [how to optimize requests count](https://baking-bad.org/blog/2020/07/29/tezos-explorer-api-tzkt-how-often-to-make-requests/).  ---
 *
 * The version of the OpenAPI document: 1.12.1
 * Contact: hello@bakingbad.dev
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bzzhh\Tzkt\Model;

use \ArrayAccess;
use \Bzzhh\Tzkt\ObjectSerializer;

/**
 * Quote Class Doc Comment
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Quote implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Quote';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'level' => 'int',
        'timestamp' => '\DateTime',
        'btc' => 'float',
        'eur' => 'float',
        'usd' => 'float',
        'cny' => 'float',
        'jpy' => 'float',
        'krw' => 'float',
        'eth' => 'float',
        'gbp' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'level' => 'int32',
        'timestamp' => 'date-time',
        'btc' => 'double',
        'eur' => 'double',
        'usd' => 'double',
        'cny' => 'double',
        'jpy' => 'double',
        'krw' => 'double',
        'eth' => 'double',
        'gbp' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'level' => false,
		'timestamp' => false,
		'btc' => false,
		'eur' => false,
		'usd' => false,
		'cny' => false,
		'jpy' => false,
		'krw' => false,
		'eth' => false,
		'gbp' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'level' => 'level',
        'timestamp' => 'timestamp',
        'btc' => 'btc',
        'eur' => 'eur',
        'usd' => 'usd',
        'cny' => 'cny',
        'jpy' => 'jpy',
        'krw' => 'krw',
        'eth' => 'eth',
        'gbp' => 'gbp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'level' => 'setLevel',
        'timestamp' => 'setTimestamp',
        'btc' => 'setBtc',
        'eur' => 'setEur',
        'usd' => 'setUsd',
        'cny' => 'setCny',
        'jpy' => 'setJpy',
        'krw' => 'setKrw',
        'eth' => 'setEth',
        'gbp' => 'setGbp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'level' => 'getLevel',
        'timestamp' => 'getTimestamp',
        'btc' => 'getBtc',
        'eur' => 'getEur',
        'usd' => 'getUsd',
        'cny' => 'getCny',
        'jpy' => 'getJpy',
        'krw' => 'getKrw',
        'eth' => 'getEth',
        'gbp' => 'getGbp'
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
        $this->setIfExists('level', $data ?? [], null);
        $this->setIfExists('timestamp', $data ?? [], null);
        $this->setIfExists('btc', $data ?? [], null);
        $this->setIfExists('eur', $data ?? [], null);
        $this->setIfExists('usd', $data ?? [], null);
        $this->setIfExists('cny', $data ?? [], null);
        $this->setIfExists('jpy', $data ?? [], null);
        $this->setIfExists('krw', $data ?? [], null);
        $this->setIfExists('eth', $data ?? [], null);
        $this->setIfExists('gbp', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets level
     *
     * @return int|null
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param int|null $level The level of the block at which the quote has been saved
     *
     * @return self
     */
    public function setLevel($level)
    {

        if (is_null($level)) {
            throw new \InvalidArgumentException('non-nullable level cannot be null');
        }

        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \DateTime|null
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime|null $timestamp The datetime at which the quote has been saved (ISO 8601, e.g. `2020-02-20T02:40:57Z`)
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {

        if (is_null($timestamp)) {
            throw new \InvalidArgumentException('non-nullable timestamp cannot be null');
        }

        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets btc
     *
     * @return float|null
     */
    public function getBtc()
    {
        return $this->container['btc'];
    }

    /**
     * Sets btc
     *
     * @param float|null $btc XTZ/BTC price
     *
     * @return self
     */
    public function setBtc($btc)
    {

        if (is_null($btc)) {
            throw new \InvalidArgumentException('non-nullable btc cannot be null');
        }

        $this->container['btc'] = $btc;

        return $this;
    }

    /**
     * Gets eur
     *
     * @return float|null
     */
    public function getEur()
    {
        return $this->container['eur'];
    }

    /**
     * Sets eur
     *
     * @param float|null $eur XTZ/EUR price
     *
     * @return self
     */
    public function setEur($eur)
    {

        if (is_null($eur)) {
            throw new \InvalidArgumentException('non-nullable eur cannot be null');
        }

        $this->container['eur'] = $eur;

        return $this;
    }

    /**
     * Gets usd
     *
     * @return float|null
     */
    public function getUsd()
    {
        return $this->container['usd'];
    }

    /**
     * Sets usd
     *
     * @param float|null $usd XTZ/USD price
     *
     * @return self
     */
    public function setUsd($usd)
    {

        if (is_null($usd)) {
            throw new \InvalidArgumentException('non-nullable usd cannot be null');
        }

        $this->container['usd'] = $usd;

        return $this;
    }

    /**
     * Gets cny
     *
     * @return float|null
     */
    public function getCny()
    {
        return $this->container['cny'];
    }

    /**
     * Sets cny
     *
     * @param float|null $cny XTZ/CNY price
     *
     * @return self
     */
    public function setCny($cny)
    {

        if (is_null($cny)) {
            throw new \InvalidArgumentException('non-nullable cny cannot be null');
        }

        $this->container['cny'] = $cny;

        return $this;
    }

    /**
     * Gets jpy
     *
     * @return float|null
     */
    public function getJpy()
    {
        return $this->container['jpy'];
    }

    /**
     * Sets jpy
     *
     * @param float|null $jpy XTZ/JPY price
     *
     * @return self
     */
    public function setJpy($jpy)
    {

        if (is_null($jpy)) {
            throw new \InvalidArgumentException('non-nullable jpy cannot be null');
        }

        $this->container['jpy'] = $jpy;

        return $this;
    }

    /**
     * Gets krw
     *
     * @return float|null
     */
    public function getKrw()
    {
        return $this->container['krw'];
    }

    /**
     * Sets krw
     *
     * @param float|null $krw XTZ/KRW price
     *
     * @return self
     */
    public function setKrw($krw)
    {

        if (is_null($krw)) {
            throw new \InvalidArgumentException('non-nullable krw cannot be null');
        }

        $this->container['krw'] = $krw;

        return $this;
    }

    /**
     * Gets eth
     *
     * @return float|null
     */
    public function getEth()
    {
        return $this->container['eth'];
    }

    /**
     * Sets eth
     *
     * @param float|null $eth XTZ/ETH price
     *
     * @return self
     */
    public function setEth($eth)
    {

        if (is_null($eth)) {
            throw new \InvalidArgumentException('non-nullable eth cannot be null');
        }

        $this->container['eth'] = $eth;

        return $this;
    }

    /**
     * Gets gbp
     *
     * @return float|null
     */
    public function getGbp()
    {
        return $this->container['gbp'];
    }

    /**
     * Sets gbp
     *
     * @param float|null $gbp XTZ/GBP price
     *
     * @return self
     */
    public function setGbp($gbp)
    {

        if (is_null($gbp)) {
            throw new \InvalidArgumentException('non-nullable gbp cannot be null');
        }

        $this->container['gbp'] = $gbp;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


