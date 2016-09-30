<?php
/**
 * ModelListTest
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
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * ModelListTest Class Doc Comment
 *
 * @category    Class */
// * @description ModelList
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModelListTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {

    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {

    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {

    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {

    }

    /**
     * Test "ModelList"
     */
    public function testModelList()
    {

    }

    /**
     * Test attribute "id"
     */
    public function testPropertyId()
    {

    }

    /**
     * Test attribute "encrypted_id"
     */
    public function testPropertyEncryptedId()
    {

    }

    /**
     * Test attribute "name"
     */
    public function testPropertyName()
    {

    }

    /**
     * Test attribute "type"
     */
    public function testPropertyType()
    {

    }

    /**
     * Test attribute "thankyou_from_name"
     */
    public function testPropertyThankyouFromName()
    {

    }

    /**
     * Test attribute "thankyou_from_email"
     */
    public function testPropertyThankyouFromEmail()
    {

    }

    /**
     * Test attribute "thankyou_mail_subject"
     */
    public function testPropertyThankyouMailSubject()
    {

    }

    /**
     * Test attribute "thankyou_mail_message"
     */
    public function testPropertyThankyouMailMessage()
    {

    }

    /**
     * Test attribute "confirm_from_name"
     */
    public function testPropertyConfirmFromName()
    {

    }

    /**
     * Test attribute "confirm_from_email"
     */
    public function testPropertyConfirmFromEmail()
    {

    }

    /**
     * Test attribute "confirm_mail_subject"
     */
    public function testPropertyConfirmMailSubject()
    {

    }

    /**
     * Test attribute "confirm_mail_message"
     */
    public function testPropertyConfirmMailMessage()
    {

    }

    /**
     * Test attribute "goodbye_from_name"
     */
    public function testPropertyGoodbyeFromName()
    {

    }

    /**
     * Test attribute "goodbye_from_email"
     */
    public function testPropertyGoodbyeFromEmail()
    {

    }

    /**
     * Test attribute "goodbye_mail_subject"
     */
    public function testPropertyGoodbyeMailSubject()
    {

    }

    /**
     * Test attribute "goodbye_mail_message"
     */
    public function testPropertyGoodbyeMailMessage()
    {

    }

    /**
     * Test attribute "send_thankyou_mail"
     */
    public function testPropertySendThankyouMail()
    {

    }

    /**
     * Test attribute "send_confirm_unsubscribe_mail"
     */
    public function testPropertySendConfirmUnsubscribeMail()
    {

    }

    /**
     * Test attribute "subscribe_success_page"
     */
    public function testPropertySubscribeSuccessPage()
    {

    }

    /**
     * Test attribute "confirm_success_page"
     */
    public function testPropertyConfirmSuccessPage()
    {

    }

    /**
     * Test attribute "unsubscribe_success_page"
     */
    public function testPropertyUnsubscribeSuccessPage()
    {

    }

    /**
     * Test attribute "team_id"
     */
    public function testPropertyTeamId()
    {

    }

}
