<?php
/**
 * ContractView
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
 * ContractView Class Doc Comment
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ContractView implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContractView';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'json_parameter_type' => 'mixed',
        'json_return_type' => 'mixed',
        'micheline_parameter_type' => '\Bzzhh\Tzkt\Model\ContractViewMichelineParameterType',
        'micheline_return_type' => '\Bzzhh\Tzkt\Model\ContractViewMichelineReturnType',
        'michelson_parameter_type' => 'string',
        'michelson_return_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'json_parameter_type' => null,
        'json_return_type' => null,
        'micheline_parameter_type' => null,
        'micheline_return_type' => null,
        'michelson_parameter_type' => null,
        'michelson_return_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => true,
		'json_parameter_type' => true,
		'json_return_type' => true,
		'micheline_parameter_type' => true,
		'micheline_return_type' => true,
		'michelson_parameter_type' => true,
		'michelson_return_type' => true
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
        'name' => 'name',
        'json_parameter_type' => 'jsonParameterType',
        'json_return_type' => 'jsonReturnType',
        'micheline_parameter_type' => 'michelineParameterType',
        'micheline_return_type' => 'michelineReturnType',
        'michelson_parameter_type' => 'michelsonParameterType',
        'michelson_return_type' => 'michelsonReturnType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'json_parameter_type' => 'setJsonParameterType',
        'json_return_type' => 'setJsonReturnType',
        'micheline_parameter_type' => 'setMichelineParameterType',
        'micheline_return_type' => 'setMichelineReturnType',
        'michelson_parameter_type' => 'setMichelsonParameterType',
        'michelson_return_type' => 'setMichelsonReturnType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'json_parameter_type' => 'getJsonParameterType',
        'json_return_type' => 'getJsonReturnType',
        'micheline_parameter_type' => 'getMichelineParameterType',
        'micheline_return_type' => 'getMichelineReturnType',
        'michelson_parameter_type' => 'getMichelsonParameterType',
        'michelson_return_type' => 'getMichelsonReturnType'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('json_parameter_type', $data ?? [], null);
        $this->setIfExists('json_return_type', $data ?? [], null);
        $this->setIfExists('micheline_parameter_type', $data ?? [], null);
        $this->setIfExists('micheline_return_type', $data ?? [], null);
        $this->setIfExists('michelson_parameter_type', $data ?? [], null);
        $this->setIfExists('michelson_return_type', $data ?? [], null);
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
     * @param string|null $name Contract view name
     *
     * @return self
     */
    public function setName($name)
    {

        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets json_parameter_type
     *
     * @return mixed|null
     */
    public function getJsonParameterType()
    {
        return $this->container['json_parameter_type'];
    }

    /**
     * Sets json_parameter_type
     *
     * @param mixed|null $json_parameter_type Parameter type in human-readable JSON format
     *
     * @return self
     */
    public function setJsonParameterType($json_parameter_type)
    {

        if (is_null($json_parameter_type)) {
            array_push($this->openAPINullablesSetToNull, 'json_parameter_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('json_parameter_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['json_parameter_type'] = $json_parameter_type;

        return $this;
    }

    /**
     * Gets json_return_type
     *
     * @return mixed|null
     */
    public function getJsonReturnType()
    {
        return $this->container['json_return_type'];
    }

    /**
     * Sets json_return_type
     *
     * @param mixed|null $json_return_type Return type in human-readable JSON format
     *
     * @return self
     */
    public function setJsonReturnType($json_return_type)
    {

        if (is_null($json_return_type)) {
            array_push($this->openAPINullablesSetToNull, 'json_return_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('json_return_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['json_return_type'] = $json_return_type;

        return $this;
    }

    /**
     * Gets micheline_parameter_type
     *
     * @return \Bzzhh\Tzkt\Model\ContractViewMichelineParameterType|null
     */
    public function getMichelineParameterType()
    {
        return $this->container['micheline_parameter_type'];
    }

    /**
     * Sets micheline_parameter_type
     *
     * @param \Bzzhh\Tzkt\Model\ContractViewMichelineParameterType|null $micheline_parameter_type micheline_parameter_type
     *
     * @return self
     */
    public function setMichelineParameterType($micheline_parameter_type)
    {

        if (is_null($micheline_parameter_type)) {
            array_push($this->openAPINullablesSetToNull, 'micheline_parameter_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('micheline_parameter_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['micheline_parameter_type'] = $micheline_parameter_type;

        return $this;
    }

    /**
     * Gets micheline_return_type
     *
     * @return \Bzzhh\Tzkt\Model\ContractViewMichelineReturnType|null
     */
    public function getMichelineReturnType()
    {
        return $this->container['micheline_return_type'];
    }

    /**
     * Sets micheline_return_type
     *
     * @param \Bzzhh\Tzkt\Model\ContractViewMichelineReturnType|null $micheline_return_type micheline_return_type
     *
     * @return self
     */
    public function setMichelineReturnType($micheline_return_type)
    {

        if (is_null($micheline_return_type)) {
            array_push($this->openAPINullablesSetToNull, 'micheline_return_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('micheline_return_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['micheline_return_type'] = $micheline_return_type;

        return $this;
    }

    /**
     * Gets michelson_parameter_type
     *
     * @return string|null
     */
    public function getMichelsonParameterType()
    {
        return $this->container['michelson_parameter_type'];
    }

    /**
     * Sets michelson_parameter_type
     *
     * @param string|null $michelson_parameter_type Parameter type in michelson format
     *
     * @return self
     */
    public function setMichelsonParameterType($michelson_parameter_type)
    {

        if (is_null($michelson_parameter_type)) {
            array_push($this->openAPINullablesSetToNull, 'michelson_parameter_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('michelson_parameter_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['michelson_parameter_type'] = $michelson_parameter_type;

        return $this;
    }

    /**
     * Gets michelson_return_type
     *
     * @return string|null
     */
    public function getMichelsonReturnType()
    {
        return $this->container['michelson_return_type'];
    }

    /**
     * Sets michelson_return_type
     *
     * @param string|null $michelson_return_type Return type in michelson format
     *
     * @return self
     */
    public function setMichelsonReturnType($michelson_return_type)
    {

        if (is_null($michelson_return_type)) {
            array_push($this->openAPINullablesSetToNull, 'michelson_return_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('michelson_return_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['michelson_return_type'] = $michelson_return_type;

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


