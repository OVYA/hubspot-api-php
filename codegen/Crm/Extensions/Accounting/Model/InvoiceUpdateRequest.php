<?php
/**
 * InvoiceUpdateRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Extensions\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Accounting Extension
 *
 * These APIs allow you to interact with HubSpot's Accounting Extension. It allows you to: * Specify the URLs that HubSpot will use when making webhook requests to your external accounting system. * Respond to webhook calls made to your external accounting system by HubSpot
 *
 * The version of the OpenAPI document: v3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Crm\Extensions\Accounting\Model;

use \ArrayAccess;
use \HubSpot\Client\Crm\Extensions\Accounting\ObjectSerializer;

/**
 * InvoiceUpdateRequest Class Doc Comment
 *
 * @category Class
 * @description The invoice data to update in HubSpot
 * @package  HubSpot\Client\Crm\Extensions\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InvoiceUpdateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InvoiceUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'external_invoice_number' => 'string',
        'currency_code' => 'string',
        'due_date' => '\DateTime',
        'external_recipient_id' => 'string',
        'received_by_recipient_date' => 'int',
        'is_voided' => 'bool',
        'received_by_customer_date' => 'string',
        'invoice_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'external_invoice_number' => null,
        'currency_code' => null,
        'due_date' => 'date',
        'external_recipient_id' => null,
        'received_by_recipient_date' => 'int64',
        'is_voided' => null,
        'received_by_customer_date' => null,
        'invoice_number' => null
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
        'external_invoice_number' => 'externalInvoiceNumber',
        'currency_code' => 'currencyCode',
        'due_date' => 'dueDate',
        'external_recipient_id' => 'externalRecipientId',
        'received_by_recipient_date' => 'receivedByRecipientDate',
        'is_voided' => 'isVoided',
        'received_by_customer_date' => 'receivedByCustomerDate',
        'invoice_number' => 'invoiceNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'external_invoice_number' => 'setExternalInvoiceNumber',
        'currency_code' => 'setCurrencyCode',
        'due_date' => 'setDueDate',
        'external_recipient_id' => 'setExternalRecipientId',
        'received_by_recipient_date' => 'setReceivedByRecipientDate',
        'is_voided' => 'setIsVoided',
        'received_by_customer_date' => 'setReceivedByCustomerDate',
        'invoice_number' => 'setInvoiceNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'external_invoice_number' => 'getExternalInvoiceNumber',
        'currency_code' => 'getCurrencyCode',
        'due_date' => 'getDueDate',
        'external_recipient_id' => 'getExternalRecipientId',
        'received_by_recipient_date' => 'getReceivedByRecipientDate',
        'is_voided' => 'getIsVoided',
        'received_by_customer_date' => 'getReceivedByCustomerDate',
        'invoice_number' => 'getInvoiceNumber'
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
        $this->container['external_invoice_number'] = $data['external_invoice_number'] ?? null;
        $this->container['currency_code'] = $data['currency_code'] ?? null;
        $this->container['due_date'] = $data['due_date'] ?? null;
        $this->container['external_recipient_id'] = $data['external_recipient_id'] ?? null;
        $this->container['received_by_recipient_date'] = $data['received_by_recipient_date'] ?? null;
        $this->container['is_voided'] = $data['is_voided'] ?? null;
        $this->container['received_by_customer_date'] = $data['received_by_customer_date'] ?? null;
        $this->container['invoice_number'] = $data['invoice_number'] ?? null;
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
     * Gets external_invoice_number
     *
     * @return string|null
     */
    public function getExternalInvoiceNumber()
    {
        return $this->container['external_invoice_number'];
    }

    /**
     * Sets external_invoice_number
     *
     * @param string|null $external_invoice_number external_invoice_number
     *
     * @return self
     */
    public function setExternalInvoiceNumber($external_invoice_number)
    {
        $this->container['external_invoice_number'] = $external_invoice_number;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string|null $currency_code The ISO 4217 currency code that represents the currency used in the invoice to bill the recipient
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime|null
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime|null $due_date The ISO-8601 due date of the invoice.
     *
     * @return self
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets external_recipient_id
     *
     * @return string|null
     */
    public function getExternalRecipientId()
    {
        return $this->container['external_recipient_id'];
    }

    /**
     * Sets external_recipient_id
     *
     * @param string|null $external_recipient_id The ID of the invoice recipient. This is the recipient ID from the external accounting system.
     *
     * @return self
     */
    public function setExternalRecipientId($external_recipient_id)
    {
        $this->container['external_recipient_id'] = $external_recipient_id;

        return $this;
    }

    /**
     * Gets received_by_recipient_date
     *
     * @return int|null
     */
    public function getReceivedByRecipientDate()
    {
        return $this->container['received_by_recipient_date'];
    }

    /**
     * Sets received_by_recipient_date
     *
     * @param int|null $received_by_recipient_date received_by_recipient_date
     *
     * @return self
     */
    public function setReceivedByRecipientDate($received_by_recipient_date)
    {
        $this->container['received_by_recipient_date'] = $received_by_recipient_date;

        return $this;
    }

    /**
     * Gets is_voided
     *
     * @return bool|null
     */
    public function getIsVoided()
    {
        return $this->container['is_voided'];
    }

    /**
     * Sets is_voided
     *
     * @param bool|null $is_voided States if the invoice is voided or not.
     *
     * @return self
     */
    public function setIsVoided($is_voided)
    {
        $this->container['is_voided'] = $is_voided;

        return $this;
    }

    /**
     * Gets received_by_customer_date
     *
     * @return string|null
     */
    public function getReceivedByCustomerDate()
    {
        return $this->container['received_by_customer_date'];
    }

    /**
     * Sets received_by_customer_date
     *
     * @param string|null $received_by_customer_date The ISO-8601 datetime of when the customer received the invoice.
     *
     * @return self
     */
    public function setReceivedByCustomerDate($received_by_customer_date)
    {
        $this->container['received_by_customer_date'] = $received_by_customer_date;

        return $this;
    }

    /**
     * Gets invoice_number
     *
     * @return string|null
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param string|null $invoice_number The number / name of the invoice.
     *
     * @return self
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

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


