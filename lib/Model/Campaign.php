<?php
/**
 * Campaign
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
 * Campaign Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Campaign implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Campaign';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'int',
        'name' => 'string',
        'status' => 'int',
        'type' => 'int',
        'user_segment' => 'string',
        'campaign_segment' => 'string',
        'schedule_condition' => 'string',
        'time_condition' => 'string',
        'timezone' => 'string',
        'team_id' => 'int',
        'provider_id' => 'int',
        'list_ids' => 'int[]',
        'tag_ids' => 'int[]',
        'segment_ids' => 'int[]'
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
        'name' => 'name',
        'status' => 'status',
        'type' => 'type',
        'user_segment' => 'user_segment',
        'campaign_segment' => 'campaign_segment',
        'schedule_condition' => 'schedule_condition',
        'time_condition' => 'time_condition',
        'timezone' => 'timezone',
        'team_id' => 'team_id',
        'provider_id' => 'provider_id',
        'list_ids' => 'list_ids',
        'tag_ids' => 'tag_ids',
        'segment_ids' => 'segment_ids'
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
        'name' => 'setName',
        'status' => 'setStatus',
        'type' => 'setType',
        'user_segment' => 'setUserSegment',
        'campaign_segment' => 'setCampaignSegment',
        'schedule_condition' => 'setScheduleCondition',
        'time_condition' => 'setTimeCondition',
        'timezone' => 'setTimezone',
        'team_id' => 'setTeamId',
        'provider_id' => 'setProviderId',
        'list_ids' => 'setListIds',
        'tag_ids' => 'setTagIds',
        'segment_ids' => 'setSegmentIds'
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
        'name' => 'getName',
        'status' => 'getStatus',
        'type' => 'getType',
        'user_segment' => 'getUserSegment',
        'campaign_segment' => 'getCampaignSegment',
        'schedule_condition' => 'getScheduleCondition',
        'time_condition' => 'getTimeCondition',
        'timezone' => 'getTimezone',
        'team_id' => 'getTeamId',
        'provider_id' => 'getProviderId',
        'list_ids' => 'getListIds',
        'tag_ids' => 'getTagIds',
        'segment_ids' => 'getSegmentIds'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['user_segment'] = isset($data['user_segment']) ? $data['user_segment'] : null;
        $this->container['campaign_segment'] = isset($data['campaign_segment']) ? $data['campaign_segment'] : null;
        $this->container['schedule_condition'] = isset($data['schedule_condition']) ? $data['schedule_condition'] : null;
        $this->container['time_condition'] = isset($data['time_condition']) ? $data['time_condition'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['team_id'] = isset($data['team_id']) ? $data['team_id'] : null;
        $this->container['provider_id'] = isset($data['provider_id']) ? $data['provider_id'] : null;
        $this->container['list_ids'] = isset($data['list_ids']) ? $data['list_ids'] : null;
        $this->container['tag_ids'] = isset($data['tag_ids']) ? $data['tag_ids'] : null;
        $this->container['segment_ids'] = isset($data['segment_ids']) ? $data['segment_ids'] : null;
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
     * Gets status
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param int $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * Gets user_segment
     * @return string
     */
    public function getUserSegment()
    {
        return $this->container['user_segment'];
    }

    /**
     * Sets user_segment
     * @param string $user_segment
     * @return $this
     */
    public function setUserSegment($user_segment)
    {
        $this->container['user_segment'] = $user_segment;

        return $this;
    }

    /**
     * Gets campaign_segment
     * @return string
     */
    public function getCampaignSegment()
    {
        return $this->container['campaign_segment'];
    }

    /**
     * Sets campaign_segment
     * @param string $campaign_segment
     * @return $this
     */
    public function setCampaignSegment($campaign_segment)
    {
        $this->container['campaign_segment'] = $campaign_segment;

        return $this;
    }

    /**
     * Gets schedule_condition
     * @return string
     */
    public function getScheduleCondition()
    {
        return $this->container['schedule_condition'];
    }

    /**
     * Sets schedule_condition
     * @param string $schedule_condition
     * @return $this
     */
    public function setScheduleCondition($schedule_condition)
    {
        $this->container['schedule_condition'] = $schedule_condition;

        return $this;
    }

    /**
     * Gets time_condition
     * @return string
     */
    public function getTimeCondition()
    {
        return $this->container['time_condition'];
    }

    /**
     * Sets time_condition
     * @param string $time_condition
     * @return $this
     */
    public function setTimeCondition($time_condition)
    {
        $this->container['time_condition'] = $time_condition;

        return $this;
    }

    /**
     * Gets timezone
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     * @param string $timezone
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

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
     * Gets provider_id
     * @return int
     */
    public function getProviderId()
    {
        return $this->container['provider_id'];
    }

    /**
     * Sets provider_id
     * @param int $provider_id
     * @return $this
     */
    public function setProviderId($provider_id)
    {
        $this->container['provider_id'] = $provider_id;

        return $this;
    }

    /**
     * Gets list_ids
     * @return int[]
     */
    public function getListIds()
    {
        return $this->container['list_ids'];
    }

    /**
     * Sets list_ids
     * @param int[] $list_ids
     * @return $this
     */
    public function setListIds($list_ids)
    {
        $this->container['list_ids'] = $list_ids;

        return $this;
    }

    /**
     * Gets tag_ids
     * @return int[]
     */
    public function getTagIds()
    {
        return $this->container['tag_ids'];
    }

    /**
     * Sets tag_ids
     * @param int[] $tag_ids
     * @return $this
     */
    public function setTagIds($tag_ids)
    {
        $this->container['tag_ids'] = $tag_ids;

        return $this;
    }

    /**
     * Gets segment_ids
     * @return int[]
     */
    public function getSegmentIds()
    {
        return $this->container['segment_ids'];
    }

    /**
     * Sets segment_ids
     * @param int[] $segment_ids
     * @return $this
     */
    public function setSegmentIds($segment_ids)
    {
        $this->container['segment_ids'] = $segment_ids;

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


