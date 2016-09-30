<?php
/**
 * ModelList
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SendX API
 *
 * SendX is built on the simple tenet that users must have open access to their data. SendX API is the first step in that direction. To cite some examples:   - subscribe / unsubscribe a contact from a list   - Schedule campaign to a segment of users   - Trigger transactional emails   - Get / PUT / POST and DELETE operations on team, campaign, list, contact, report etc. and so on.  As companies grow big, custom use cases around email marketing also crop up. SendX API ensures that SendX platform is able to satisfy such unforeseen use cases. They may range from building custom reporting dashboard to tagging contacts with custom attributes or triggering emails based on recommendation algorithm.  We do our best to have all our URLs be [RESTful](http://en.wikipedia.org/wiki/Representational_state_transfer). Every endpoint (URL) may support one of four different http verbs. GET requests fetch information about an object, POST requests create objects, PUT requests update objects, and finally DELETE requests will delete objects.  Also all API calls besides:   - Subscribe / unsubscribe signup form required **api_key** to be passed as **header**   ### The Envelope Every response is contained by an envelope. That is, each response has a predictable set of keys with which you can expect to interact: ```json {     \"status\": \"200\",     \"message\": \"OK\",     \"data\"\": [        {          ...        },        .        .        .     ] } ```  #### Status The status key is used to communicate extra information about the response to the developer. If all goes well, you'll only ever see a code key with value 200. However, sometimes things go wrong, and in that case you might see a response like: ```json {     \"status\": \"404\" } ```  #### Data The data key is the meat of the response. It may be a list containing single object or multiple objects  #### Message This returns back human readable message. This is specially useful to make sense in case of error scenarios.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * ModelList Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModelList implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'List';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'int',
        'encrypted_id' => 'string',
        'name' => 'string',
        'type' => 'int',
        'thankyou_from_name' => 'string',
        'thankyou_from_email' => 'string',
        'thankyou_mail_subject' => 'string',
        'thankyou_mail_message' => 'string',
        'confirm_from_name' => 'string',
        'confirm_from_email' => 'string',
        'confirm_mail_subject' => 'string',
        'confirm_mail_message' => 'string',
        'goodbye_from_name' => 'string',
        'goodbye_from_email' => 'string',
        'goodbye_mail_subject' => 'string',
        'goodbye_mail_message' => 'string',
        'send_thankyou_mail' => 'bool',
        'send_confirm_unsubscribe_mail' => 'bool',
        'subscribe_success_page' => 'string',
        'confirm_success_page' => 'string',
        'unsubscribe_success_page' => 'string',
        'team_id' => 'int'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'id' => 'id',
        'encrypted_id' => 'encryptedId',
        'name' => 'name',
        'type' => 'type',
        'thankyou_from_name' => 'thankyou_from_name',
        'thankyou_from_email' => 'thankyou_from_email',
        'thankyou_mail_subject' => 'thankyou_mail_subject',
        'thankyou_mail_message' => 'thankyou_mail_message',
        'confirm_from_name' => 'confirm_from_name',
        'confirm_from_email' => 'confirm_from_email',
        'confirm_mail_subject' => 'confirm_mail_subject',
        'confirm_mail_message' => 'confirm_mail_message',
        'goodbye_from_name' => 'goodbye_from_name',
        'goodbye_from_email' => 'goodbye_from_email',
        'goodbye_mail_subject' => 'goodbye_mail_subject',
        'goodbye_mail_message' => 'goodbye_mail_message',
        'send_thankyou_mail' => 'send_thankyou_mail',
        'send_confirm_unsubscribe_mail' => 'send_confirm_unsubscribe_mail',
        'subscribe_success_page' => 'subscribe_success_page',
        'confirm_success_page' => 'confirm_success_page',
        'unsubscribe_success_page' => 'unsubscribe_success_page',
        'team_id' => 'team_id'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'id' => 'setId',
        'encrypted_id' => 'setEncryptedId',
        'name' => 'setName',
        'type' => 'setType',
        'thankyou_from_name' => 'setThankyouFromName',
        'thankyou_from_email' => 'setThankyouFromEmail',
        'thankyou_mail_subject' => 'setThankyouMailSubject',
        'thankyou_mail_message' => 'setThankyouMailMessage',
        'confirm_from_name' => 'setConfirmFromName',
        'confirm_from_email' => 'setConfirmFromEmail',
        'confirm_mail_subject' => 'setConfirmMailSubject',
        'confirm_mail_message' => 'setConfirmMailMessage',
        'goodbye_from_name' => 'setGoodbyeFromName',
        'goodbye_from_email' => 'setGoodbyeFromEmail',
        'goodbye_mail_subject' => 'setGoodbyeMailSubject',
        'goodbye_mail_message' => 'setGoodbyeMailMessage',
        'send_thankyou_mail' => 'setSendThankyouMail',
        'send_confirm_unsubscribe_mail' => 'setSendConfirmUnsubscribeMail',
        'subscribe_success_page' => 'setSubscribeSuccessPage',
        'confirm_success_page' => 'setConfirmSuccessPage',
        'unsubscribe_success_page' => 'setUnsubscribeSuccessPage',
        'team_id' => 'setTeamId'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'id' => 'getId',
        'encrypted_id' => 'getEncryptedId',
        'name' => 'getName',
        'type' => 'getType',
        'thankyou_from_name' => 'getThankyouFromName',
        'thankyou_from_email' => 'getThankyouFromEmail',
        'thankyou_mail_subject' => 'getThankyouMailSubject',
        'thankyou_mail_message' => 'getThankyouMailMessage',
        'confirm_from_name' => 'getConfirmFromName',
        'confirm_from_email' => 'getConfirmFromEmail',
        'confirm_mail_subject' => 'getConfirmMailSubject',
        'confirm_mail_message' => 'getConfirmMailMessage',
        'goodbye_from_name' => 'getGoodbyeFromName',
        'goodbye_from_email' => 'getGoodbyeFromEmail',
        'goodbye_mail_subject' => 'getGoodbyeMailSubject',
        'goodbye_mail_message' => 'getGoodbyeMailMessage',
        'send_thankyou_mail' => 'getSendThankyouMail',
        'send_confirm_unsubscribe_mail' => 'getSendConfirmUnsubscribeMail',
        'subscribe_success_page' => 'getSubscribeSuccessPage',
        'confirm_success_page' => 'getConfirmSuccessPage',
        'unsubscribe_success_page' => 'getUnsubscribeSuccessPage',
        'team_id' => 'getTeamId'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['encrypted_id'] = isset($data['encrypted_id']) ? $data['encrypted_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['thankyou_from_name'] = isset($data['thankyou_from_name']) ? $data['thankyou_from_name'] : null;
        $this->container['thankyou_from_email'] = isset($data['thankyou_from_email']) ? $data['thankyou_from_email'] : null;
        $this->container['thankyou_mail_subject'] = isset($data['thankyou_mail_subject']) ? $data['thankyou_mail_subject'] : null;
        $this->container['thankyou_mail_message'] = isset($data['thankyou_mail_message']) ? $data['thankyou_mail_message'] : null;
        $this->container['confirm_from_name'] = isset($data['confirm_from_name']) ? $data['confirm_from_name'] : null;
        $this->container['confirm_from_email'] = isset($data['confirm_from_email']) ? $data['confirm_from_email'] : null;
        $this->container['confirm_mail_subject'] = isset($data['confirm_mail_subject']) ? $data['confirm_mail_subject'] : null;
        $this->container['confirm_mail_message'] = isset($data['confirm_mail_message']) ? $data['confirm_mail_message'] : null;
        $this->container['goodbye_from_name'] = isset($data['goodbye_from_name']) ? $data['goodbye_from_name'] : null;
        $this->container['goodbye_from_email'] = isset($data['goodbye_from_email']) ? $data['goodbye_from_email'] : null;
        $this->container['goodbye_mail_subject'] = isset($data['goodbye_mail_subject']) ? $data['goodbye_mail_subject'] : null;
        $this->container['goodbye_mail_message'] = isset($data['goodbye_mail_message']) ? $data['goodbye_mail_message'] : null;
        $this->container['send_thankyou_mail'] = isset($data['send_thankyou_mail']) ? $data['send_thankyou_mail'] : null;
        $this->container['send_confirm_unsubscribe_mail'] = isset($data['send_confirm_unsubscribe_mail']) ? $data['send_confirm_unsubscribe_mail'] : null;
        $this->container['subscribe_success_page'] = isset($data['subscribe_success_page']) ? $data['subscribe_success_page'] : null;
        $this->container['confirm_success_page'] = isset($data['confirm_success_page']) ? $data['confirm_success_page'] : null;
        $this->container['unsubscribe_success_page'] = isset($data['unsubscribe_success_page']) ? $data['unsubscribe_success_page'] : null;
        $this->container['team_id'] = isset($data['team_id']) ? $data['team_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
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
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets encrypted_id
     * @return string
     */
    public function getEncryptedId()
    {
        return $this->container['encrypted_id'];
    }

    /**
     * Sets encrypted_id
     * @param string $encrypted_id
     * @return $this
     */
    public function setEncryptedId($encrypted_id)
    {
        $this->container['encrypted_id'] = $encrypted_id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param int $type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets thankyou_from_name
     * @return string
     */
    public function getThankyouFromName()
    {
        return $this->container['thankyou_from_name'];
    }

    /**
     * Sets thankyou_from_name
     * @param string $thankyou_from_name
     * @return $this
     */
    public function setThankyouFromName($thankyou_from_name)
    {
        $this->container['thankyou_from_name'] = $thankyou_from_name;

        return $this;
    }

    /**
     * Gets thankyou_from_email
     * @return string
     */
    public function getThankyouFromEmail()
    {
        return $this->container['thankyou_from_email'];
    }

    /**
     * Sets thankyou_from_email
     * @param string $thankyou_from_email
     * @return $this
     */
    public function setThankyouFromEmail($thankyou_from_email)
    {
        $this->container['thankyou_from_email'] = $thankyou_from_email;

        return $this;
    }

    /**
     * Gets thankyou_mail_subject
     * @return string
     */
    public function getThankyouMailSubject()
    {
        return $this->container['thankyou_mail_subject'];
    }

    /**
     * Sets thankyou_mail_subject
     * @param string $thankyou_mail_subject
     * @return $this
     */
    public function setThankyouMailSubject($thankyou_mail_subject)
    {
        $this->container['thankyou_mail_subject'] = $thankyou_mail_subject;

        return $this;
    }

    /**
     * Gets thankyou_mail_message
     * @return string
     */
    public function getThankyouMailMessage()
    {
        return $this->container['thankyou_mail_message'];
    }

    /**
     * Sets thankyou_mail_message
     * @param string $thankyou_mail_message
     * @return $this
     */
    public function setThankyouMailMessage($thankyou_mail_message)
    {
        $this->container['thankyou_mail_message'] = $thankyou_mail_message;

        return $this;
    }

    /**
     * Gets confirm_from_name
     * @return string
     */
    public function getConfirmFromName()
    {
        return $this->container['confirm_from_name'];
    }

    /**
     * Sets confirm_from_name
     * @param string $confirm_from_name
     * @return $this
     */
    public function setConfirmFromName($confirm_from_name)
    {
        $this->container['confirm_from_name'] = $confirm_from_name;

        return $this;
    }

    /**
     * Gets confirm_from_email
     * @return string
     */
    public function getConfirmFromEmail()
    {
        return $this->container['confirm_from_email'];
    }

    /**
     * Sets confirm_from_email
     * @param string $confirm_from_email
     * @return $this
     */
    public function setConfirmFromEmail($confirm_from_email)
    {
        $this->container['confirm_from_email'] = $confirm_from_email;

        return $this;
    }

    /**
     * Gets confirm_mail_subject
     * @return string
     */
    public function getConfirmMailSubject()
    {
        return $this->container['confirm_mail_subject'];
    }

    /**
     * Sets confirm_mail_subject
     * @param string $confirm_mail_subject
     * @return $this
     */
    public function setConfirmMailSubject($confirm_mail_subject)
    {
        $this->container['confirm_mail_subject'] = $confirm_mail_subject;

        return $this;
    }

    /**
     * Gets confirm_mail_message
     * @return string
     */
    public function getConfirmMailMessage()
    {
        return $this->container['confirm_mail_message'];
    }

    /**
     * Sets confirm_mail_message
     * @param string $confirm_mail_message
     * @return $this
     */
    public function setConfirmMailMessage($confirm_mail_message)
    {
        $this->container['confirm_mail_message'] = $confirm_mail_message;

        return $this;
    }

    /**
     * Gets goodbye_from_name
     * @return string
     */
    public function getGoodbyeFromName()
    {
        return $this->container['goodbye_from_name'];
    }

    /**
     * Sets goodbye_from_name
     * @param string $goodbye_from_name
     * @return $this
     */
    public function setGoodbyeFromName($goodbye_from_name)
    {
        $this->container['goodbye_from_name'] = $goodbye_from_name;

        return $this;
    }

    /**
     * Gets goodbye_from_email
     * @return string
     */
    public function getGoodbyeFromEmail()
    {
        return $this->container['goodbye_from_email'];
    }

    /**
     * Sets goodbye_from_email
     * @param string $goodbye_from_email
     * @return $this
     */
    public function setGoodbyeFromEmail($goodbye_from_email)
    {
        $this->container['goodbye_from_email'] = $goodbye_from_email;

        return $this;
    }

    /**
     * Gets goodbye_mail_subject
     * @return string
     */
    public function getGoodbyeMailSubject()
    {
        return $this->container['goodbye_mail_subject'];
    }

    /**
     * Sets goodbye_mail_subject
     * @param string $goodbye_mail_subject
     * @return $this
     */
    public function setGoodbyeMailSubject($goodbye_mail_subject)
    {
        $this->container['goodbye_mail_subject'] = $goodbye_mail_subject;

        return $this;
    }

    /**
     * Gets goodbye_mail_message
     * @return string
     */
    public function getGoodbyeMailMessage()
    {
        return $this->container['goodbye_mail_message'];
    }

    /**
     * Sets goodbye_mail_message
     * @param string $goodbye_mail_message
     * @return $this
     */
    public function setGoodbyeMailMessage($goodbye_mail_message)
    {
        $this->container['goodbye_mail_message'] = $goodbye_mail_message;

        return $this;
    }

    /**
     * Gets send_thankyou_mail
     * @return bool
     */
    public function getSendThankyouMail()
    {
        return $this->container['send_thankyou_mail'];
    }

    /**
     * Sets send_thankyou_mail
     * @param bool $send_thankyou_mail
     * @return $this
     */
    public function setSendThankyouMail($send_thankyou_mail)
    {
        $this->container['send_thankyou_mail'] = $send_thankyou_mail;

        return $this;
    }

    /**
     * Gets send_confirm_unsubscribe_mail
     * @return bool
     */
    public function getSendConfirmUnsubscribeMail()
    {
        return $this->container['send_confirm_unsubscribe_mail'];
    }

    /**
     * Sets send_confirm_unsubscribe_mail
     * @param bool $send_confirm_unsubscribe_mail
     * @return $this
     */
    public function setSendConfirmUnsubscribeMail($send_confirm_unsubscribe_mail)
    {
        $this->container['send_confirm_unsubscribe_mail'] = $send_confirm_unsubscribe_mail;

        return $this;
    }

    /**
     * Gets subscribe_success_page
     * @return string
     */
    public function getSubscribeSuccessPage()
    {
        return $this->container['subscribe_success_page'];
    }

    /**
     * Sets subscribe_success_page
     * @param string $subscribe_success_page
     * @return $this
     */
    public function setSubscribeSuccessPage($subscribe_success_page)
    {
        $this->container['subscribe_success_page'] = $subscribe_success_page;

        return $this;
    }

    /**
     * Gets confirm_success_page
     * @return string
     */
    public function getConfirmSuccessPage()
    {
        return $this->container['confirm_success_page'];
    }

    /**
     * Sets confirm_success_page
     * @param string $confirm_success_page
     * @return $this
     */
    public function setConfirmSuccessPage($confirm_success_page)
    {
        $this->container['confirm_success_page'] = $confirm_success_page;

        return $this;
    }

    /**
     * Gets unsubscribe_success_page
     * @return string
     */
    public function getUnsubscribeSuccessPage()
    {
        return $this->container['unsubscribe_success_page'];
    }

    /**
     * Sets unsubscribe_success_page
     * @param string $unsubscribe_success_page
     * @return $this
     */
    public function setUnsubscribeSuccessPage($unsubscribe_success_page)
    {
        $this->container['unsubscribe_success_page'] = $unsubscribe_success_page;

        return $this;
    }

    /**
     * Gets team_id
     * @return int
     */
    public function getTeamId()
    {
        return $this->container['team_id'];
    }

    /**
     * Sets team_id
     * @param int $team_id
     * @return $this
     */
    public function setTeamId($team_id)
    {
        $this->container['team_id'] = $team_id;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


