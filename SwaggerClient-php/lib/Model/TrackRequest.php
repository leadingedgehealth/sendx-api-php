<?php
/**
 * TrackRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SendX REST API
 *
 * **NOTE:** All API calls contain 2 parameters - 'api_key' and 'team_id'. These can be inferred from your settings page 'https://app.sendx.io/setting' under the sections 'Api Key' and 'Team Id' respectively.  For checking language specific Clients: -  [Golang](https://github.com/sendx/sendx-api-go) -  [Python](https://github.com/sendx/sendx-api-python) -  [Ruby](https://github.com/sendx/sendx-api-ruby) -  [Java](https://github.com/sendx/sendx-api-java) -  [PHP](https://github.com/sendx/sendx-api-php) -  [NodeJS](https://github.com/sendx/sendx-api-nodejs)  We also have a [Javascript API](http://help.sendx.io/knowledge_base/topics/javascript-api-1) for client side integrations.  SendX REST API has two methods:    * Identify   * Track    ## Identify API Method    Identify API Method is used to attach data to a visitor. If a contact is not yet created then we will create the contact. In case contact already exists then we update it.    **Example Request:**       ```json      {         email: \"john.doe@gmail.com\",         firstName: \"John\",         lastName: \"Doe\",         birthday: \"1989-03-03\",         customFields: {           \"Designation\": \"Software Engineer\",           \"Age\": \"27\",           \"Experience\": \"5\"         },         tags: [\"Developer\", \"API Team\"],      }   ```         Note that tags are an array of strings. In case they don't exist previously then API will create them and associate them with the contact.      Similarly if a custom field doesn't exist then it is first created and then associated with the contact along-with the corresponding value. In case custom field exists already then we simply update the value of it for the aforementioned contact.      We don't delete any of the properties based on identify call. What this means is that if for the same contact you did two API calls like:         **API Call A**        ```json      {         email: \"john.doe@gmail.com\",         firstName: \"John\",         birthday: \"1989-03-03\",         customFields: {           \"Designation\": \"Software Engineer\"         },         tags: [\"Developer\"],      }   ```         **API Call B**       ```json      {         email: \"john.doe@gmail.com\",         customFields: {           \"Age\": \"29\"         },         tags: [\"API Team\"],      }   ```         Then the final contact will have firstName as **John**, birthday as **1989-03-03** present. Also both tags **Developer** and **API Team** shall be present along with custom fields **Designation** and **Age**.         **Properties:**      * **firstName**: type string   * **lastName**: type string   * **email**: type string     * **newEmail**: type string     * **company**: type string     * **birthday**: type string with format **YYYY-MM-DD** eg: 2016-11-21     * **customFields**: type map[string]string      * **tags**: type array of string       In case email of an already existing contact needs to be updated then specify current email under email property and updated email under newEmail property.          **Response:**       ```json      {         \"status\": \"200\",         \"message\": \"OK\",         \"data\": {           \"encryptedTeamId\": \"CLdh9Ig5GLIN1u8gTRvoja\",           \"encryptedId\": \"c9QF63nrBenCaAXe660byz\",           \"tags\": [             \"API Team\",             \"Tech\"           ],           \"firstName\": \"John\",           \"lastName\": \"Doe\",           \"email\": \"john.doe@gmail.com\",           \"company\": \"\",           \"birthday\": \"1989-03-03\",           \"customFields\": {             \"Age\": \"29\",             \"Designation\": \"Software Engineer\"           }           }        }   ```         ## Track API Method      Track API Method is used to track a contact. In the track API object you can:      * **addTags**:   * **removeTags**:      You can have automation rules based on tag addition as well as tag removal and they will get executed. For eg:      * On **user registration** tag start onboarding drip for him / her.   * **Account Upgrade** tag start add user to paid user list and start account expansion drip.    * On removal of **trial user** tag start upsell trial completed users drip.         **Example Request:**      >     \\_scq.push([\"track\", {        \"addTags\": [\"blogger\", \"female\"]     }]);           >     \\_scq.push([\"track\", {        \"addTags\": [\"paid user\"],        \"removeTags\": [\"trial user\"]     }]);           **Response:**      >      {       \"status\": \"200\",       \"message\": \"OK\",       \"data\": \"success\"      }
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
 * TrackRequest Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TrackRequest implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TrackRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'add_tags' => 'string[]',
        'remove_tags' => 'string[]'
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
        'add_tags' => 'addTags',
        'remove_tags' => 'removeTags'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'add_tags' => 'setAddTags',
        'remove_tags' => 'setRemoveTags'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'add_tags' => 'getAddTags',
        'remove_tags' => 'getRemoveTags'
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
        $this->container['add_tags'] = isset($data['add_tags']) ? $data['add_tags'] : null;
        $this->container['remove_tags'] = isset($data['remove_tags']) ? $data['remove_tags'] : null;
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
     * Gets add_tags
     * @return string[]
     */
    public function getAddTags()
    {
        return $this->container['add_tags'];
    }

    /**
     * Sets add_tags
     * @param string[] $add_tags
     * @return $this
     */
    public function setAddTags($add_tags)
    {
        $this->container['add_tags'] = $add_tags;

        return $this;
    }

    /**
     * Gets remove_tags
     * @return string[]
     */
    public function getRemoveTags()
    {
        return $this->container['remove_tags'];
    }

    /**
     * Sets remove_tags
     * @param string[] $remove_tags
     * @return $this
     */
    public function setRemoveTags($remove_tags)
    {
        $this->container['remove_tags'] = $remove_tags;

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