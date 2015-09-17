<?php
/*
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * Service definition for HugoTravel (v1).
 *
 * <p>
 * HugoTravel API. Allows end users to create/update subscribers, list them...</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class hugo_travel_club_appspot_com_Service_HugoTravel extends Google_Service
{
  /** View your email address. */
  const USERINFO_EMAIL =
      "https://www.googleapis.com/auth/userinfo.email";

  public $email;
  public $newsletter;
  public $subscriber;
  public $template;
  public $workflow;
  

  /**
   * Constructs the internal representation of the HugoTravel service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://hugo-travel-club.appspot.com/_ah/api';
    $this->servicePath = 'hugotravel/v1/';
    $this->version = 'v1';
    $this->serviceName = 'hugotravel';

    $this->email = new hugo_travel_club_appspot_com_Service_HugoTravel_Email_Resource(
        $this,
        $this->serviceName,
        'email',
        array(
          'methods' => array(
            'send' => array(
              'path' => 'email/send',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->newsletter = new hugo_travel_club_appspot_com_Service_HugoTravel_Newsletter_Resource(
        $this,
        $this->serviceName,
        'newsletter',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'newsletter/delete',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'info' => array(
              'path' => 'newsletter/info',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'newsletter/list',
              'httpMethod' => 'GET',
              'parameters' => array(
                'limit' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'page' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'put' => array(
              'path' => 'newsletter/put',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->subscriber = new hugo_travel_club_appspot_com_Service_HugoTravel_Subscriber_Resource(
        $this,
        $this->serviceName,
        'subscriber',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'subscriber/delete',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'info' => array(
              'path' => 'subscriber/info',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'subscriber/list',
              'httpMethod' => 'GET',
              'parameters' => array(
                'workflow_id' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'limit' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'page' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'put' => array(
              'path' => 'subscriber/put',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->template = new hugo_travel_club_appspot_com_Service_HugoTravel_Template_Resource(
        $this,
        $this->serviceName,
        'template',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'template/delete',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'info' => array(
              'path' => 'template/info',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'template/list',
              'httpMethod' => 'GET',
              'parameters' => array(
                'limit' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'page' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'put' => array(
              'path' => 'template/put',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->workflow = new hugo_travel_club_appspot_com_Service_HugoTravel_Workflow_Resource(
        $this,
        $this->serviceName,
        'workflow',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'workflow/delete',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'info' => array(
              'path' => 'workflow/info',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'workflow/list',
              'httpMethod' => 'GET',
              'parameters' => array(
                'limit' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'page' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'put' => array(
              'path' => 'workflow/put',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
  }
}


/**
 * The "email" collection of methods.
 * Typical usage is:
 *  <code>
 *   $hugotravelService = new hugo_travel_club_appspot_com_Service_HugoTravel(...);
 *   $email = $hugotravelService->email;
 *  </code>
 */
class hugo_travel_club_appspot_com_Service_HugoTravel_Email_Resource extends Google_Service_Resource
{

  /**
   * (email.send)
   *
   * @param hugo_travel_club_appspot_com_HandlersEmailMessagesEmailSendMessage $postBody
   * @param array $optParams Optional parameters.
   * @return hugo_travel_club_appspot_com_Service_HugoTravel_HandlersBaseMessagesStatusMessage
   */
  public function send(hugo_travel_club_appspot_com_Service_HugoTravel_HandlersEmailMessagesEmailSendMessage $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('send', array($params), "hugo_travel_club_appspot_com_Service_HugoTravel_HandlersBaseMessagesStatusMessage");
  }
}

/**
 * The "newsletter" collection of methods.
 * Typical usage is:
 *  <code>
 *   $hugotravelService = new hugo_travel_club_appspot_com_Service_HugoTravel(...);
 *   $newsletter = $hugotravelService->newsletter;
 *  </code>
 */
class hugo_travel_club_appspot_com_Service_HugoTravel_Newsletter_Resource extends Google_Service_Resource
{

  /**
   * (newsletter.delete)
   *
   * @param hugo_travel_club_appspot_com_HandlersBaseMessagesIdMessage $postBody
   * @param array $optParams Optional parameters.
   * @return hugo_travel_club_appspot_com_Service_HugoTravel_HandlersBaseMessagesStatusMessage
   */
  public function delete(hugo_travel_club_appspot_com_Service_HugoTravel_HandlersBaseMessagesIdMessage $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "hugo_travel_club_appspot_com_Service_HugoTravel_HandlersBaseMessagesStatusMessage");
  }

  /**
   * (newsletter.info)
   *
   * @param hugo_travel_club_appspot_com_HandlersBaseMessagesIdMessage $postBody
   * @param array $optParams Optional parameters.
   * @return hugo_travel_club_appspot_com_Service_HugoTravel_HandlersNewsletterMessagesNewsletterResponseMessage
   */
  public function info(hugo_travel_club_appspot_com_Service_HugoTravel_HandlersBaseMessagesIdMessage $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('info', array($params), "hugo_travel_club_appspot_com_Service_HugoTravel_HandlersNewsletterMessagesNewsletterResponseMessage");
  }

  /**
   * (newsletter.listNewsletter)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string limit
   * @opt_param string page
   * @return hugo_travel_club_appspot_com_Service_HugoTravel_HandlersNewsletterMessagesNewsletterListResponse
   */
  public function listNewsletter($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "hugo_travel_club_appspot_com_Service_HugoTravel_HandlersNewsletterMessagesNewsletterListResponse");
  }

  /**
   * (newsletter.put)
   *
   * @param hugo_travel_club_appspot_com_HandlersNewsletterMessagesNewsletterRequestMessage $postBody
   * @param array $optParams Optional parameters.
   * @return hugo_travel_club_appspot_com_Service_HugoTravel_HandlersBaseMessagesStatusWithIdMessage
   */
  public function put(hugo_travel_club_appspot_com_Service_HugoTravel_HandlersNewsletterMessagesNewsletterRequestMessage $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('put', array($params), "hugo_travel_club_appspot_com_Service_HugoTravel_HandlersBaseMessagesStatusWithIdMessage");
  }
}

/**
 * The "subscriber" collection of methods.
 * Typical usage is:
 *  <code>
 *   $hugotravelService = new hugo_travel_club_appspot_com_Service_HugoTravel(...);
 *   $subscriber = $hugotravelService->subscriber;
 *  </code>
 */
class hugo_travel_club_appspot_com_Service_HugoTravel_Subscriber_Resource extends Google_Service_Resource
{

  /**
   * (subscriber.delete)
   *
   * @param hugo_travel_club_appspot_com_HandlersBaseMessagesIdMessage $postBody
   * @param array $optParams Optional parameters.
   * @return hugo_travel_club_appspot_com_Service_HugoTravel_HandlersBaseMessagesStatusMessage
   */
  public function delete(hugo_travel_club_appspot_com_Service_HugoTravel_HandlersBaseMessagesIdMessage $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "hugo_travel_club_appspot_com_Service_HugoTravel_HandlersBaseMessagesStatusMessage");
  }

  /**
   * (subscriber.info)
   *
   * @param hugo_travel_club_appspot_com_HandlersBaseMessagesIdMessage $postBody
   * @param array $optParams Optional parameters.
   * @return hugo_travel_club_appspot_com_Service_HugoTravel_HandlersSubscriberMessagesSubscriberResponseMessage
   */
  public function info(hugo_travel_club_appspot_com_Service_HugoTravel_HandlersBaseMessagesIdMessage $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('info', array($params), "hugo_travel_club_appspot_com_Service_HugoTravel_HandlersSubscriberMessagesSubscriberResponseMessage");
  }

  /**
   * (subscriber.listSubscriber)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string workflow_id
   * @opt_param string limit
   * @opt_param string page
   * @return hugo_travel_club_appspot_com_Service_HugoTravel_HandlersSubscriberMessagesSubscriberListResponse
   */
  public function listSubscriber($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "hugo_travel_club_appspot_com_Service_HugoTravel_HandlersSubscriberMessagesSubscriberListResponse");
  }

  /**
   * (subscriber.put)
   *
   * @param hugo_travel_club_appspot_com_HandlersSubscriberMessagesSubscriberMessage $postBody
   * @param array $optParams Optional parameters.
   * @return hugo_travel_club_appspot_com_Service_HugoTravel_HandlersBaseMessagesStatusWithIdMessage
   */
  public function put(hugo_travel_club_appspot_com_Service_HugoTravel_HandlersSubscriberMessagesSubscriberMessage $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('put', array($params), "hugo_travel_club_appspot_com_Service_HugoTravel_HandlersBaseMessagesStatusWithIdMessage");
  }
}

/**
 * The "template" collection of methods.
 * Typical usage is:
 *  <code>
 *   $hugotravelService = new hugo_travel_club_appspot_com_Service_HugoTravel(...);
 *   $template = $hugotravelService->template;
 *  </code>
 */
class hugo_travel_club_appspot_com_Service_HugoTravel_Template_Resource extends Google_Service_Resource
{

  /**
   * (template.delete)
   *
   * @param hugo_travel_club_appspot_com_HandlersBaseMessagesIdMessage $postBody
   * @param array $optParams Optional parameters.
   * @return hugo_travel_club_appspot_com_Service_HugoTravel_HandlersBaseMessagesStatusMessage
   */
  public function delete(hugo_travel_club_appspot_com_Service_HugoTravel_HandlersBaseMessagesIdMessage $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "hugo_travel_club_appspot_com_Service_HugoTravel_HandlersBaseMessagesStatusMessage");
  }

  /**
   * (template.info)
   *
   * @param hugo_travel_club_appspot_com_HandlersBaseMessagesIdMessage $postBody
   * @param array $optParams Optional parameters.
   * @return hugo_travel_club_appspot_com_Service_HugoTravel_HandlersTemplateMessagesTemplateMessage
   */
  public function info(hugo_travel_club_appspot_com_Service_HugoTravel_HandlersBaseMessagesIdMessage $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('info', array($params), "hugo_travel_club_appspot_com_Service_HugoTravel_HandlersTemplateMessagesTemplateMessage");
  }

  /**
   * (template.listTemplate)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string limit
   * @opt_param string page
   * @return hugo_travel_club_appspot_com_Service_HugoTravel_HandlersTemplateMessagesTemplateListResponse
   */
  public function listTemplate($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "hugo_travel_club_appspot_com_Service_HugoTravel_HandlersTemplateMessagesTemplateListResponse");
  }

  /**
   * (template.put)
   *
   * @param hugo_travel_club_appspot_com_HandlersTemplateMessagesTemplateMessage $postBody
   * @param array $optParams Optional parameters.
   * @return hugo_travel_club_appspot_com_Service_HugoTravel_HandlersBaseMessagesStatusWithIdMessage
   */
  public function put(hugo_travel_club_appspot_com_Service_HugoTravel_HandlersTemplateMessagesTemplateMessage $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('put', array($params), "hugo_travel_club_appspot_com_Service_HugoTravel_HandlersBaseMessagesStatusWithIdMessage");
  }
}

/**
 * The "workflow" collection of methods.
 * Typical usage is:
 *  <code>
 *   $hugotravelService = new hugo_travel_club_appspot_com_Service_HugoTravel(...);
 *   $workflow = $hugotravelService->workflow;
 *  </code>
 */
class hugo_travel_club_appspot_com_Service_HugoTravel_Workflow_Resource extends Google_Service_Resource
{

  /**
   * (workflow.delete)
   *
   * @param hugo_travel_club_appspot_com_HandlersBaseMessagesIdMessage $postBody
   * @param array $optParams Optional parameters.
   * @return hugo_travel_club_appspot_com_Service_HugoTravel_HandlersBaseMessagesStatusMessage
   */
  public function delete(hugo_travel_club_appspot_com_Service_HugoTravel_HandlersBaseMessagesIdMessage $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "hugo_travel_club_appspot_com_Service_HugoTravel_HandlersBaseMessagesStatusMessage");
  }

  /**
   * (workflow.info)
   *
   * @param hugo_travel_club_appspot_com_HandlersBaseMessagesIdMessage $postBody
   * @param array $optParams Optional parameters.
   * @return hugo_travel_club_appspot_com_Service_HugoTravel_HandlersWorkflowMessagesWorkflowMessage
   */
  public function info(hugo_travel_club_appspot_com_Service_HugoTravel_HandlersBaseMessagesIdMessage $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('info', array($params), "hugo_travel_club_appspot_com_Service_HugoTravel_HandlersWorkflowMessagesWorkflowMessage");
  }

  /**
   * (workflow.listWorkflow)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string limit
   * @opt_param string page
   * @return hugo_travel_club_appspot_com_Service_HugoTravel_HandlersWorkflowMessagesWorkflowListResponse
   */
  public function listWorkflow($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "hugo_travel_club_appspot_com_Service_HugoTravel_HandlersWorkflowMessagesWorkflowListResponse");
  }

  /**
   * (workflow.put)
   *
   * @param hugo_travel_club_appspot_com_HandlersWorkflowMessagesWorkflowMessage $postBody
   * @param array $optParams Optional parameters.
   * @return hugo_travel_club_appspot_com_Service_HugoTravel_HandlersBaseMessagesStatusWithIdMessage
   */
  public function put(hugo_travel_club_appspot_com_Service_HugoTravel_HandlersWorkflowMessagesWorkflowMessage $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('put', array($params), "hugo_travel_club_appspot_com_Service_HugoTravel_HandlersBaseMessagesStatusWithIdMessage");
  }
}




class hugo_travel_club_appspot_com_Service_HugoTravel_HandlersBaseMessagesIdMessage extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $id;


  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
}

class hugo_travel_club_appspot_com_Service_HugoTravel_HandlersBaseMessagesStatusMessage extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $status;


  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
}

class hugo_travel_club_appspot_com_Service_HugoTravel_HandlersBaseMessagesStatusWithIdMessage extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $id;
  public $status;


  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
}

class hugo_travel_club_appspot_com_Service_HugoTravel_HandlersEmailMessagesEmailSendMessage extends Google_Collection
{
  protected $collection_key = 'to';
  protected $internal_gapi_mappings = array(
  );
  public $html;
  public $subject;
  protected $tagsType = 'Hugo_Travel_Club_Appspot_Com_Service_HugoTravel_HandlersEmailMessagesEmailTagsMessage';
  protected $tagsDataType = 'array';
  protected $toType = 'Hugo_Travel_Club_Appspot_Com_Service_HugoTravel_HandlersEmailMessagesEmailToMessage';
  protected $toDataType = 'array';


  public function setHtml($html)
  {
    $this->html = $html;
  }
  public function getHtml()
  {
    return $this->html;
  }
  public function setSubject($subject)
  {
    $this->subject = $subject;
  }
  public function getSubject()
  {
    return $this->subject;
  }
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  public function getTags()
  {
    return $this->tags;
  }
  public function setTo($to)
  {
    $this->to = $to;
  }
  public function getTo()
  {
    return $this->to;
  }
}

class hugo_travel_club_appspot_com_Service_HugoTravel_HandlersEmailMessagesEmailTagsMessage extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $tag;


  public function setTag($tag)
  {
    $this->tag = $tag;
  }
  public function getTag()
  {
    return $this->tag;
  }
}

class hugo_travel_club_appspot_com_Service_HugoTravel_HandlersEmailMessagesEmailToMessage extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $email;


  public function setEmail($email)
  {
    $this->email = $email;
  }
  public function getEmail()
  {
    return $this->email;
  }
}

class hugo_travel_club_appspot_com_Service_HugoTravel_HandlersNewsletterMessagesNewsletterListResponse extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Hugo_Travel_Club_Appspot_Com_Service_HugoTravel_HandlersNewsletterMessagesNewsletterOverviewMessage';
  protected $itemsDataType = 'array';
  public $limit;
  public $page;
  public $total;


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setLimit($limit)
  {
    $this->limit = $limit;
  }
  public function getLimit()
  {
    return $this->limit;
  }
  public function setPage($page)
  {
    $this->page = $page;
  }
  public function getPage()
  {
    return $this->page;
  }
  public function setTotal($total)
  {
    $this->total = $total;
  }
  public function getTotal()
  {
    return $this->total;
  }
}

class hugo_travel_club_appspot_com_Service_HugoTravel_HandlersNewsletterMessagesNewsletterOverviewMessage extends Google_Model
{
  protected $internal_gapi_mappings = array(
        "templateId" => "template_id",
  );
  public $id;
  public $locale;
  public $name;
  public $templateId;


  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setLocale($locale)
  {
    $this->locale = $locale;
  }
  public function getLocale()
  {
    return $this->locale;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setTemplateId($templateId)
  {
    $this->templateId = $templateId;
  }
  public function getTemplateId()
  {
    return $this->templateId;
  }
}

class hugo_travel_club_appspot_com_Service_HugoTravel_HandlersNewsletterMessagesNewsletterPlaceholderMessage extends Google_Model
{
  protected $internal_gapi_mappings = array(
        "sourceKey" => "source_key",
  );
  public $name;
  public $sourceKey;
  public $value;


  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setSourceKey($sourceKey)
  {
    $this->sourceKey = $sourceKey;
  }
  public function getSourceKey()
  {
    return $this->sourceKey;
  }
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
}

class hugo_travel_club_appspot_com_Service_HugoTravel_HandlersNewsletterMessagesNewsletterRequestMessage extends Google_Collection
{
  protected $collection_key = 'placeholders';
  protected $internal_gapi_mappings = array(
        "templateId" => "template_id",
  );
  public $id;
  public $locale;
  public $name;
  protected $placeholdersType = 'Hugo_Travel_Club_Appspot_Com_Service_HugoTravel_HandlersNewsletterMessagesNewsletterPlaceholderMessage';
  protected $placeholdersDataType = 'array';
  public $templateId;


  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setLocale($locale)
  {
    $this->locale = $locale;
  }
  public function getLocale()
  {
    return $this->locale;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setPlaceholders($placeholders)
  {
    $this->placeholders = $placeholders;
  }
  public function getPlaceholders()
  {
    return $this->placeholders;
  }
  public function setTemplateId($templateId)
  {
    $this->templateId = $templateId;
  }
  public function getTemplateId()
  {
    return $this->templateId;
  }
}

class hugo_travel_club_appspot_com_Service_HugoTravel_HandlersNewsletterMessagesNewsletterResponseMessage extends Google_Collection
{
  protected $collection_key = 'placeholders';
  protected $internal_gapi_mappings = array(
        "templateId" => "template_id",
  );
  public $id;
  public $locale;
  public $name;
  protected $placeholdersType = 'Hugo_Travel_Club_Appspot_Com_Service_HugoTravel_HandlersNewsletterMessagesNewsletterPlaceholderMessage';
  protected $placeholdersDataType = 'array';
  public $source;
  public $templateId;


  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setLocale($locale)
  {
    $this->locale = $locale;
  }
  public function getLocale()
  {
    return $this->locale;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setPlaceholders($placeholders)
  {
    $this->placeholders = $placeholders;
  }
  public function getPlaceholders()
  {
    return $this->placeholders;
  }
  public function setSource($source)
  {
    $this->source = $source;
  }
  public function getSource()
  {
    return $this->source;
  }
  public function setTemplateId($templateId)
  {
    $this->templateId = $templateId;
  }
  public function getTemplateId()
  {
    return $this->templateId;
  }
}

class hugo_travel_club_appspot_com_Service_HugoTravel_HandlersSubscriberMessagesSubscriberListResponse extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Hugo_Travel_Club_Appspot_Com_Service_HugoTravel_HandlersSubscriberMessagesSubscriberResponseMessage';
  protected $itemsDataType = 'array';
  public $limit;
  public $page;
  public $total;


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setLimit($limit)
  {
    $this->limit = $limit;
  }
  public function getLimit()
  {
    return $this->limit;
  }
  public function setPage($page)
  {
    $this->page = $page;
  }
  public function getPage()
  {
    return $this->page;
  }
  public function setTotal($total)
  {
    $this->total = $total;
  }
  public function getTotal()
  {
    return $this->total;
  }
}

class hugo_travel_club_appspot_com_Service_HugoTravel_HandlersSubscriberMessagesSubscriberMessage extends Google_Model
{
  protected $internal_gapi_mappings = array(
        "arrivalDate" => "arrival_date",
        "workflowId" => "workflow_id",
  );
  public $arrivalDate;
  public $email;
  public $id;
  public $workflowId;


  public function setArrivalDate($arrivalDate)
  {
    $this->arrivalDate = $arrivalDate;
  }
  public function getArrivalDate()
  {
    return $this->arrivalDate;
  }
  public function setEmail($email)
  {
    $this->email = $email;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setWorkflowId($workflowId)
  {
    $this->workflowId = $workflowId;
  }
  public function getWorkflowId()
  {
    return $this->workflowId;
  }
}

class hugo_travel_club_appspot_com_Service_HugoTravel_HandlersSubscriberMessagesSubscriberResponseMessage extends Google_Model
{
  protected $internal_gapi_mappings = array(
        "arrivalDate" => "arrival_date",
        "workflowId" => "workflow_id",
  );
  public $arrivalDate;
  public $email;
  public $id;
  public $workflowId;


  public function setArrivalDate($arrivalDate)
  {
    $this->arrivalDate = $arrivalDate;
  }
  public function getArrivalDate()
  {
    return $this->arrivalDate;
  }
  public function setEmail($email)
  {
    $this->email = $email;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setWorkflowId($workflowId)
  {
    $this->workflowId = $workflowId;
  }
  public function getWorkflowId()
  {
    return $this->workflowId;
  }
}

class hugo_travel_club_appspot_com_Service_HugoTravel_HandlersTemplateMessagesTemplateListResponse extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Hugo_Travel_Club_Appspot_Com_Service_HugoTravel_HandlersTemplateMessagesTemplateOverviewMessage';
  protected $itemsDataType = 'array';
  public $limit;
  public $page;
  public $total;


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setLimit($limit)
  {
    $this->limit = $limit;
  }
  public function getLimit()
  {
    return $this->limit;
  }
  public function setPage($page)
  {
    $this->page = $page;
  }
  public function getPage()
  {
    return $this->page;
  }
  public function setTotal($total)
  {
    $this->total = $total;
  }
  public function getTotal()
  {
    return $this->total;
  }
}

class hugo_travel_club_appspot_com_Service_HugoTravel_HandlersTemplateMessagesTemplateMessage extends Google_Collection
{
  protected $collection_key = 'placeholders';
  protected $internal_gapi_mappings = array(
  );
  public $id;
  public $name;
  protected $placeholdersType = 'Hugo_Travel_Club_Appspot_Com_Service_HugoTravel_HandlersTemplateMessagesTemplatePlaceholderMessage';
  protected $placeholdersDataType = 'array';
  public $source;


  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setPlaceholders($placeholders)
  {
    $this->placeholders = $placeholders;
  }
  public function getPlaceholders()
  {
    return $this->placeholders;
  }
  public function setSource($source)
  {
    $this->source = $source;
  }
  public function getSource()
  {
    return $this->source;
  }
}

class hugo_travel_club_appspot_com_Service_HugoTravel_HandlersTemplateMessagesTemplateOverviewMessage extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $id;
  public $name;


  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
}

class hugo_travel_club_appspot_com_Service_HugoTravel_HandlersTemplateMessagesTemplatePlaceholderMessage extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $name;


  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
}

class hugo_travel_club_appspot_com_Service_HugoTravel_HandlersWorkflowMessagesWorkflowItemMessage extends Google_Model
{
  protected $internal_gapi_mappings = array(
        "newsletterId" => "newsletter_id",
        "sendDate" => "send_date",
  );
  public $newsletterId;
  public $sendDate;
  public $subject;


  public function setNewsletterId($newsletterId)
  {
    $this->newsletterId = $newsletterId;
  }
  public function getNewsletterId()
  {
    return $this->newsletterId;
  }
  public function setSendDate($sendDate)
  {
    $this->sendDate = $sendDate;
  }
  public function getSendDate()
  {
    return $this->sendDate;
  }
  public function setSubject($subject)
  {
    $this->subject = $subject;
  }
  public function getSubject()
  {
    return $this->subject;
  }
}

class hugo_travel_club_appspot_com_Service_HugoTravel_HandlersWorkflowMessagesWorkflowListResponse extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Hugo_Travel_Club_Appspot_Com_Service_HugoTravel_HandlersWorkflowMessagesWorkflowOverviewMessage';
  protected $itemsDataType = 'array';
  public $limit;
  public $page;
  public $total;


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setLimit($limit)
  {
    $this->limit = $limit;
  }
  public function getLimit()
  {
    return $this->limit;
  }
  public function setPage($page)
  {
    $this->page = $page;
  }
  public function getPage()
  {
    return $this->page;
  }
  public function setTotal($total)
  {
    $this->total = $total;
  }
  public function getTotal()
  {
    return $this->total;
  }
}

class hugo_travel_club_appspot_com_Service_HugoTravel_HandlersWorkflowMessagesWorkflowMessage extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
        "destinationId" => "destination_id",
  );
  public $destinationId;
  public $id;
  protected $itemsType = 'Hugo_Travel_Club_Appspot_Com_Service_HugoTravel_HandlersWorkflowMessagesWorkflowItemMessage';
  protected $itemsDataType = 'array';
  public $locale;
  public $name;


  public function setDestinationId($destinationId)
  {
    $this->destinationId = $destinationId;
  }
  public function getDestinationId()
  {
    return $this->destinationId;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setLocale($locale)
  {
    $this->locale = $locale;
  }
  public function getLocale()
  {
    return $this->locale;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
}

class hugo_travel_club_appspot_com_Service_HugoTravel_HandlersWorkflowMessagesWorkflowOverviewMessage extends Google_Model
{
  protected $internal_gapi_mappings = array(
        "destinationId" => "destination_id",
  );
  public $destinationId;
  public $id;
  public $locale;
  public $name;


  public function setDestinationId($destinationId)
  {
    $this->destinationId = $destinationId;
  }
  public function getDestinationId()
  {
    return $this->destinationId;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setLocale($locale)
  {
    $this->locale = $locale;
  }
  public function getLocale()
  {
    return $this->locale;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
}
