<?php
/**
 * AccountsGetOperationsParameterParameter
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
 * # Introduction  TzKT Explorer provides free REST API and WebSocket API for accessing detailed Tezos blockchain data and helps developers build more services and applications on top of Tezos. TzKT is an open-source project, so you can easily clone and build it and use it as a self-hosted service to avoid any risks of depending on third-party services.  TzKT API is available for the following Tezos networks with the following base URLs:   - Mainnet: `https://api.tzkt.io/` or `https://api.mainnet.tzkt.io/` ([view docs](https://api.tzkt.io))  - Ghostnet: `https://api.ghostnet.tzkt.io/` ([view docs](https://api.ghostnet.tzkt.io)) - Limanet: `https://api.limanet.tzkt.io/` ([view docs](https://api.limanet.tzkt.io)) - Mumbainet: `https://api.mumbainet.tzkt.io/` ([view docs](https://api.mumbainet.tzkt.io))  We also provide a staging environment for testing newest features and pre-updating client applications before deploying to production:  - Mainnet staging: `https://staging.api.tzkt.io/` or `https://staging.api.mainnet.tzkt.io/` ([view docs](https://staging.api.tzkt.io))  Feel free to contact us if you have any questions or feature requests. Your feedback really helps us make TzKT better!  - Discord: https://discord.gg/aG8XKuwsQd - Telegram: https://t.me/baking_bad_chat - Slack: https://tezos-dev.slack.com/archives/CV5NX7F2L - Twitter: https://twitter.com/TezosBakingBad - Email: hello@baking-bad.org  And don't forget to star TzKT project [on GitHub](https://github.com/baking-bad/tzkt) ;)  # Terms of Use  TzKT API is free for everyone and for both commercial and non-commercial usage.  If your application or service uses the TzKT API in any forms: directly on frontend or indirectly on backend, you must mention that fact on your website or application by placing the label **\"Powered by TzKT API\"** or **\"Built with TzKT API\"** with a direct link to [tzkt.io](https://tzkt.io).   # Rate Limits  There will be no rate limits as long as our servers can handle the load without additional infrastructure costs. However, any apparent abuse will be prevented by setting targeted rate limits.  Check out [Tezos Explorer API Best Practices](https://baking-bad.org/blog/tag/TzKT/) and in particular [how to optimize requests count](https://baking-bad.org/blog/2020/07/29/tezos-explorer-api-tzkt-how-often-to-make-requests/).  ---
 *
 * The version of the OpenAPI document: 1.12.0
 * Contact: hello@baking-bad.org
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
 * AccountsGetOperationsParameterParameter Class Doc Comment
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AccountsGetOperationsParameterParameter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Accounts_GetOperations_parameter_parameter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'eq' => 'string',
        'ne' => 'string',
        'gt' => 'string',
        'ge' => 'string',
        'lt' => 'string',
        'le' => 'string',
        'as' => 'string',
        'un' => 'string',
        'in' => 'string[]',
        'ni' => 'string[]',
        'null' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'eq' => null,
        'ne' => null,
        'gt' => null,
        'ge' => null,
        'lt' => null,
        'le' => null,
        'as' => null,
        'un' => null,
        'in' => null,
        'ni' => null,
        'null' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'eq' => true,
		'ne' => true,
		'gt' => true,
		'ge' => true,
		'lt' => true,
		'le' => true,
		'as' => true,
		'un' => true,
		'in' => true,
		'ni' => true,
		'null' => false
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
        'eq' => 'eq',
        'ne' => 'ne',
        'gt' => 'gt',
        'ge' => 'ge',
        'lt' => 'lt',
        'le' => 'le',
        'as' => 'as',
        'un' => 'un',
        'in' => 'in',
        'ni' => 'ni',
        'null' => 'null'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'eq' => 'setEq',
        'ne' => 'setNe',
        'gt' => 'setGt',
        'ge' => 'setGe',
        'lt' => 'setLt',
        'le' => 'setLe',
        'as' => 'setAs',
        'un' => 'setUn',
        'in' => 'setIn',
        'ni' => 'setNi',
        'null' => 'setNull'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'eq' => 'getEq',
        'ne' => 'getNe',
        'gt' => 'getGt',
        'ge' => 'getGe',
        'lt' => 'getLt',
        'le' => 'getLe',
        'as' => 'getAs',
        'un' => 'getUn',
        'in' => 'getIn',
        'ni' => 'getNi',
        'null' => 'getNull'
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
        $this->setIfExists('eq', $data ?? [], null);
        $this->setIfExists('ne', $data ?? [], null);
        $this->setIfExists('gt', $data ?? [], null);
        $this->setIfExists('ge', $data ?? [], null);
        $this->setIfExists('lt', $data ?? [], null);
        $this->setIfExists('le', $data ?? [], null);
        $this->setIfExists('as', $data ?? [], null);
        $this->setIfExists('un', $data ?? [], null);
        $this->setIfExists('in', $data ?? [], null);
        $this->setIfExists('ni', $data ?? [], null);
        $this->setIfExists('null', $data ?? [], null);
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
     * Gets eq
     *
     * @return string|null
     */
    public function getEq()
    {
        return $this->container['eq'];
    }

    /**
     * Sets eq
     *
     * @param string|null $eq **Equal** filter mode (optional, i.e. `param.eq=123` is the same as `param=123`). \\ Specify a JSON value to get items where the specified field is equal to the specified value.  Example: `?parameter.from=tz1...` or `?parameter.signatures.[3].[0]=null` or `?parameter.sigs.[*]=null`.
     *
     * @return self
     */
    public function setEq($eq)
    {

        if (is_null($eq)) {
            array_push($this->openAPINullablesSetToNull, 'eq');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('eq', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['eq'] = $eq;

        return $this;
    }

    /**
     * Gets ne
     *
     * @return string|null
     */
    public function getNe()
    {
        return $this->container['ne'];
    }

    /**
     * Sets ne
     *
     * @param string|null $ne **Not equal** filter mode. \\ Specify a JSON value to get items where the specified field is not equal to the specified value.  Example: `?parameter.ne=true` or `?parameter.amount.ne=0`.
     *
     * @return self
     */
    public function setNe($ne)
    {

        if (is_null($ne)) {
            array_push($this->openAPINullablesSetToNull, 'ne');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ne', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['ne'] = $ne;

        return $this;
    }

    /**
     * Gets gt
     *
     * @return string|null
     */
    public function getGt()
    {
        return $this->container['gt'];
    }

    /**
     * Sets gt
     *
     * @param string|null $gt **Greater than** filter mode. \\ Specify a string to get items where the specified field is greater than the specified value. Note that all stored JSON values are strings, so this will be a comparison of two strings, so we recommend comparing values of the same type, e.g. numeric strings with numeric strings (`parameter.number.gt=123`), datetime strings with datetime strings (`parameter.date.gt=2021-01-01`), etc. Otherwise, result may surprise you.  Example: `?parameter.balance.gt=1234` or `?parameter.time.gt=2021-02-01`.
     *
     * @return self
     */
    public function setGt($gt)
    {

        if (is_null($gt)) {
            array_push($this->openAPINullablesSetToNull, 'gt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('gt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['gt'] = $gt;

        return $this;
    }

    /**
     * Gets ge
     *
     * @return string|null
     */
    public function getGe()
    {
        return $this->container['ge'];
    }

    /**
     * Sets ge
     *
     * @param string|null $ge **Greater or equal** filter mode. \\ Specify a string to get items where the specified field is greater than equal to the specified value. Note that all stored JSON values are strings, so this will be a comparison of two strings, so we recommend comparing values of the same type, e.g. numeric strings with numeric strings (`parameter.number.gt=123`), datetime strings with datetime strings (`parameter.date.gt=2021-01-01`), etc. Otherwise, result may surprise you.  Example: `?parameter.balance.ge=1234` or `?parameter.time.ge=2021-02-01`.
     *
     * @return self
     */
    public function setGe($ge)
    {

        if (is_null($ge)) {
            array_push($this->openAPINullablesSetToNull, 'ge');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ge', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['ge'] = $ge;

        return $this;
    }

    /**
     * Gets lt
     *
     * @return string|null
     */
    public function getLt()
    {
        return $this->container['lt'];
    }

    /**
     * Sets lt
     *
     * @param string|null $lt **Less than** filter mode. \\ Specify a string to get items where the specified field is less than the specified value. Note that all stored JSON values are strings, so this will be a comparison of two strings, so we recommend comparing values of the same type, e.g. numeric strings with numeric strings (`parameter.number.gt=123`), datetime strings with datetime strings (`parameter.date.gt=2021-01-01`), etc. Otherwise, result may surprise you.  Example: `?parameter.balance.lt=1234` or `?parameter.time.lt=2021-02-01`.
     *
     * @return self
     */
    public function setLt($lt)
    {

        if (is_null($lt)) {
            array_push($this->openAPINullablesSetToNull, 'lt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['lt'] = $lt;

        return $this;
    }

    /**
     * Gets le
     *
     * @return string|null
     */
    public function getLe()
    {
        return $this->container['le'];
    }

    /**
     * Sets le
     *
     * @param string|null $le **Less or equal** filter mode. \\ Specify a string to get items where the specified field is less than or equal to the specified value. Note that all stored JSON values are strings, so this will be a comparison of two strings, so we recommend comparing values of the same type, e.g. numeric strings with numeric strings (`parameter.number.gt=123`), datetime strings with datetime strings (`parameter.date.gt=2021-01-01`), etc. Otherwise, result may surprise you.  Example: `?parameter.balance.le=1234` or `?parameter.time.le=2021-02-01`.
     *
     * @return self
     */
    public function setLe($le)
    {

        if (is_null($le)) {
            array_push($this->openAPINullablesSetToNull, 'le');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('le', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['le'] = $le;

        return $this;
    }

    /**
     * Gets as
     *
     * @return string|null
     */
    public function getAs()
    {
        return $this->container['as'];
    }

    /**
     * Sets as
     *
     * @param string|null $as **Same as** filter mode. \\ Specify a string template to get items where the specified field matches the specified template. \\ This mode supports wildcard `*`. Use `\\*` as an escape symbol.  Example: `?parameter.as=*mid*` or `?parameter.as=*end`.
     *
     * @return self
     */
    public function setAs($as)
    {

        if (is_null($as)) {
            array_push($this->openAPINullablesSetToNull, 'as');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('as', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['as'] = $as;

        return $this;
    }

    /**
     * Gets un
     *
     * @return string|null
     */
    public function getUn()
    {
        return $this->container['un'];
    }

    /**
     * Sets un
     *
     * @param string|null $un **Unlike** filter mode. \\ Specify a string template to get items where the specified field doesn't match the specified template. This mode supports wildcard `*`. Use `\\*` as an escape symbol.  Example: `?parameter.un=*mid*` or `?parameter.un=*end`.
     *
     * @return self
     */
    public function setUn($un)
    {

        if (is_null($un)) {
            array_push($this->openAPINullablesSetToNull, 'un');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('un', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['un'] = $un;

        return $this;
    }

    /**
     * Gets in
     *
     * @return string[]|null
     */
    public function getIn()
    {
        return $this->container['in'];
    }

    /**
     * Sets in
     *
     * @param string[]|null $in **In list** (any of) filter mode. \\ Specify a comma-separated list of strings or JSON array to get items where the specified field is equal to one of the specified values. \\  Example: `?parameter.amount.in=1,2,3` or `?parameter.in=[{\"from\":\"tz1\",\"to\":\"tz2\"},{\"from\":\"tz2\",\"to\":\"tz1\"}]`.
     *
     * @return self
     */
    public function setIn($in)
    {

        if (is_null($in)) {
            array_push($this->openAPINullablesSetToNull, 'in');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('in', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['in'] = $in;

        return $this;
    }

    /**
     * Gets ni
     *
     * @return string[]|null
     */
    public function getNi()
    {
        return $this->container['ni'];
    }

    /**
     * Sets ni
     *
     * @param string[]|null $ni **Not in list** (none of) filter mode. \\ Specify a comma-separated list of strings to get items where the specified field is not equal to all the specified values. \\ Use `\\,` as an escape symbol.  Example: `?parameter.amount.ni=1,2,3` or `?parameter.ni=[{\"from\":\"tz1\",\"to\":\"tz2\"},{\"from\":\"tz2\",\"to\":\"tz1\"}]`.
     *
     * @return self
     */
    public function setNi($ni)
    {

        if (is_null($ni)) {
            array_push($this->openAPINullablesSetToNull, 'ni');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ni', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['ni'] = $ni;

        return $this;
    }

    /**
     * Gets null
     *
     * @return bool|null
     */
    public function getNull()
    {
        return $this->container['null'];
    }

    /**
     * Sets null
     *
     * @param bool|null $null **Is null** filter mode. \\ Use this mode to get items where the specified field is null or not.  Example: `?parameter.null` or `?parameter.null=false` or `?parameter.sigs.[0].null=false`.
     *
     * @return self
     */
    public function setNull($null)
    {

        if (is_null($null)) {
            throw new \InvalidArgumentException('non-nullable null cannot be null');
        }

        $this->container['null'] = $null;

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


