<?php
/**
 * SmartRollupExecuteOperationAllOf
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
 * SmartRollupExecuteOperationAllOf Class Doc Comment
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SmartRollupExecuteOperationAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SmartRollupExecuteOperation_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'id' => 'int',
        'level' => 'int',
        'timestamp' => '\DateTime',
        'hash' => 'string',
        'sender' => 'OneOfAlias',
        'counter' => 'int',
        'gas_limit' => 'int',
        'gas_used' => 'int',
        'storage_limit' => 'int',
        'storage_used' => 'int',
        'baker_fee' => 'int',
        'storage_fee' => 'int',
        'status' => 'string',
        'rollup' => 'OneOfAlias',
        'commitment' => 'OneOfSrCommitmentInfo',
        'errors' => '\Bzzhh\Tzkt\Model\OperationError[]',
        'quote' => 'OneOfQuoteShort'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'id' => 'int64',
        'level' => 'int32',
        'timestamp' => 'date-time',
        'hash' => null,
        'sender' => null,
        'counter' => 'int32',
        'gas_limit' => 'int32',
        'gas_used' => 'int32',
        'storage_limit' => 'int32',
        'storage_used' => 'int32',
        'baker_fee' => 'int64',
        'storage_fee' => 'int64',
        'status' => null,
        'rollup' => null,
        'commitment' => null,
        'errors' => null,
        'quote' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'type' => true,
		'id' => false,
		'level' => false,
		'timestamp' => false,
		'hash' => true,
		'sender' => true,
		'counter' => false,
		'gas_limit' => false,
		'gas_used' => false,
		'storage_limit' => false,
		'storage_used' => false,
		'baker_fee' => false,
		'storage_fee' => false,
		'status' => true,
		'rollup' => true,
		'commitment' => true,
		'errors' => true,
		'quote' => true
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
        'type' => 'type',
        'id' => 'id',
        'level' => 'level',
        'timestamp' => 'timestamp',
        'hash' => 'hash',
        'sender' => 'sender',
        'counter' => 'counter',
        'gas_limit' => 'gasLimit',
        'gas_used' => 'gasUsed',
        'storage_limit' => 'storageLimit',
        'storage_used' => 'storageUsed',
        'baker_fee' => 'bakerFee',
        'storage_fee' => 'storageFee',
        'status' => 'status',
        'rollup' => 'rollup',
        'commitment' => 'commitment',
        'errors' => 'errors',
        'quote' => 'quote'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'id' => 'setId',
        'level' => 'setLevel',
        'timestamp' => 'setTimestamp',
        'hash' => 'setHash',
        'sender' => 'setSender',
        'counter' => 'setCounter',
        'gas_limit' => 'setGasLimit',
        'gas_used' => 'setGasUsed',
        'storage_limit' => 'setStorageLimit',
        'storage_used' => 'setStorageUsed',
        'baker_fee' => 'setBakerFee',
        'storage_fee' => 'setStorageFee',
        'status' => 'setStatus',
        'rollup' => 'setRollup',
        'commitment' => 'setCommitment',
        'errors' => 'setErrors',
        'quote' => 'setQuote'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'id' => 'getId',
        'level' => 'getLevel',
        'timestamp' => 'getTimestamp',
        'hash' => 'getHash',
        'sender' => 'getSender',
        'counter' => 'getCounter',
        'gas_limit' => 'getGasLimit',
        'gas_used' => 'getGasUsed',
        'storage_limit' => 'getStorageLimit',
        'storage_used' => 'getStorageUsed',
        'baker_fee' => 'getBakerFee',
        'storage_fee' => 'getStorageFee',
        'status' => 'getStatus',
        'rollup' => 'getRollup',
        'commitment' => 'getCommitment',
        'errors' => 'getErrors',
        'quote' => 'getQuote'
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
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('level', $data ?? [], null);
        $this->setIfExists('timestamp', $data ?? [], null);
        $this->setIfExists('hash', $data ?? [], null);
        $this->setIfExists('sender', $data ?? [], null);
        $this->setIfExists('counter', $data ?? [], null);
        $this->setIfExists('gas_limit', $data ?? [], null);
        $this->setIfExists('gas_used', $data ?? [], null);
        $this->setIfExists('storage_limit', $data ?? [], null);
        $this->setIfExists('storage_used', $data ?? [], null);
        $this->setIfExists('baker_fee', $data ?? [], null);
        $this->setIfExists('storage_fee', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('rollup', $data ?? [], null);
        $this->setIfExists('commitment', $data ?? [], null);
        $this->setIfExists('errors', $data ?? [], null);
        $this->setIfExists('quote', $data ?? [], null);
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
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Type of the operation, `sr_execute`
     *
     * @return self
     */
    public function setType($type)
    {

        if (is_null($type)) {
            array_push($this->openAPINullablesSetToNull, 'type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Unique ID of the operation, stored in the TzKT indexer database   **[sortable]**
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
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
     * @param int|null $level The height of the block from the genesis block, in which the operation was included
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
     * @param \DateTime|null $timestamp Datetime of the block, in which the operation was included (ISO 8601, e.g. `2020-02-20T02:40:57Z`)
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
     * Gets hash
     *
     * @return string|null
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     *
     * @param string|null $hash Hash of the operation
     *
     * @return self
     */
    public function setHash($hash)
    {

        if (is_null($hash)) {
            array_push($this->openAPINullablesSetToNull, 'hash');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('hash', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return OneOfAlias|null
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param OneOfAlias|null $sender Information about the account who has sent the operation
     *
     * @return self
     */
    public function setSender($sender)
    {

        if (is_null($sender)) {
            array_push($this->openAPINullablesSetToNull, 'sender');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sender', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets counter
     *
     * @return int|null
     */
    public function getCounter()
    {
        return $this->container['counter'];
    }

    /**
     * Sets counter
     *
     * @param int|null $counter An account nonce which is used to prevent operation replay
     *
     * @return self
     */
    public function setCounter($counter)
    {

        if (is_null($counter)) {
            throw new \InvalidArgumentException('non-nullable counter cannot be null');
        }

        $this->container['counter'] = $counter;

        return $this;
    }

    /**
     * Gets gas_limit
     *
     * @return int|null
     */
    public function getGasLimit()
    {
        return $this->container['gas_limit'];
    }

    /**
     * Sets gas_limit
     *
     * @param int|null $gas_limit A cap on the amount of gas a given operation can consume
     *
     * @return self
     */
    public function setGasLimit($gas_limit)
    {

        if (is_null($gas_limit)) {
            throw new \InvalidArgumentException('non-nullable gas_limit cannot be null');
        }

        $this->container['gas_limit'] = $gas_limit;

        return $this;
    }

    /**
     * Gets gas_used
     *
     * @return int|null
     */
    public function getGasUsed()
    {
        return $this->container['gas_used'];
    }

    /**
     * Sets gas_used
     *
     * @param int|null $gas_used Amount of gas, consumed by the operation
     *
     * @return self
     */
    public function setGasUsed($gas_used)
    {

        if (is_null($gas_used)) {
            throw new \InvalidArgumentException('non-nullable gas_used cannot be null');
        }

        $this->container['gas_used'] = $gas_used;

        return $this;
    }

    /**
     * Gets storage_limit
     *
     * @return int|null
     */
    public function getStorageLimit()
    {
        return $this->container['storage_limit'];
    }

    /**
     * Sets storage_limit
     *
     * @param int|null $storage_limit A cap on the amount of storage a given operation can consume
     *
     * @return self
     */
    public function setStorageLimit($storage_limit)
    {

        if (is_null($storage_limit)) {
            throw new \InvalidArgumentException('non-nullable storage_limit cannot be null');
        }

        $this->container['storage_limit'] = $storage_limit;

        return $this;
    }

    /**
     * Gets storage_used
     *
     * @return int|null
     */
    public function getStorageUsed()
    {
        return $this->container['storage_used'];
    }

    /**
     * Sets storage_used
     *
     * @param int|null $storage_used Amount of storage, consumed by the operation
     *
     * @return self
     */
    public function setStorageUsed($storage_used)
    {

        if (is_null($storage_used)) {
            throw new \InvalidArgumentException('non-nullable storage_used cannot be null');
        }

        $this->container['storage_used'] = $storage_used;

        return $this;
    }

    /**
     * Gets baker_fee
     *
     * @return int|null
     */
    public function getBakerFee()
    {
        return $this->container['baker_fee'];
    }

    /**
     * Sets baker_fee
     *
     * @param int|null $baker_fee Fee to the baker, produced block, in which the operation was included (micro tez)
     *
     * @return self
     */
    public function setBakerFee($baker_fee)
    {

        if (is_null($baker_fee)) {
            throw new \InvalidArgumentException('non-nullable baker_fee cannot be null');
        }

        $this->container['baker_fee'] = $baker_fee;

        return $this;
    }

    /**
     * Gets storage_fee
     *
     * @return int|null
     */
    public function getStorageFee()
    {
        return $this->container['storage_fee'];
    }

    /**
     * Sets storage_fee
     *
     * @param int|null $storage_fee The amount of funds burned from the sender account for used the blockchain storage (micro tez)
     *
     * @return self
     */
    public function setStorageFee($storage_fee)
    {

        if (is_null($storage_fee)) {
            throw new \InvalidArgumentException('non-nullable storage_fee cannot be null');
        }

        $this->container['storage_fee'] = $storage_fee;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Operation status (`applied` - an operation applied by the node and successfully added to the blockchain, `failed` - an operation which failed with some particular error (not enough balance, gas limit, etc), `backtracked` - an operation which was successful but reverted due to one of the following operations in the same operation group was failed, `skipped` - all operations after the failed one in an operation group)
     *
     * @return self
     */
    public function setStatus($status)
    {

        if (is_null($status)) {
            array_push($this->openAPINullablesSetToNull, 'status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets rollup
     *
     * @return OneOfAlias|null
     */
    public function getRollup()
    {
        return $this->container['rollup'];
    }

    /**
     * Sets rollup
     *
     * @param OneOfAlias|null $rollup Smart rollup to which the operation was sent
     *
     * @return self
     */
    public function setRollup($rollup)
    {

        if (is_null($rollup)) {
            array_push($this->openAPINullablesSetToNull, 'rollup');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rollup', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['rollup'] = $rollup;

        return $this;
    }

    /**
     * Gets commitment
     *
     * @return OneOfSrCommitmentInfo|null
     */
    public function getCommitment()
    {
        return $this->container['commitment'];
    }

    /**
     * Sets commitment
     *
     * @param OneOfSrCommitmentInfo|null $commitment Executed commitment
     *
     * @return self
     */
    public function setCommitment($commitment)
    {

        if (is_null($commitment)) {
            array_push($this->openAPINullablesSetToNull, 'commitment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('commitment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['commitment'] = $commitment;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return \Bzzhh\Tzkt\Model\OperationError[]|null
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \Bzzhh\Tzkt\Model\OperationError[]|null $errors List of errors provided by the node, injected the operation to the blockchain. `null` if there is no errors
     *
     * @return self
     */
    public function setErrors($errors)
    {

        if (is_null($errors)) {
            array_push($this->openAPINullablesSetToNull, 'errors');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('errors', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets quote
     *
     * @return OneOfQuoteShort|null
     */
    public function getQuote()
    {
        return $this->container['quote'];
    }

    /**
     * Sets quote
     *
     * @param OneOfQuoteShort|null $quote Injected historical quote at the time of operation
     *
     * @return self
     */
    public function setQuote($quote)
    {

        if (is_null($quote)) {
            array_push($this->openAPINullablesSetToNull, 'quote');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('quote', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['quote'] = $quote;

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


