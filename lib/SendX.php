<?php

namespace Swagger\Client;

use Throwable;
use Swagger\Client\Model\Contact;
use Swagger\Client\Api\ContactApi;

class SendX
{
    /** @var \Swagger\Client\Api\ContactApi */
    public $client;

    /** @var string */
    public string $apiKey;

    /** @var string */
    public string $teamId;

    /**
     * @param string $apiKey
     * @param string $teamId
     */
    public function __construct(string $apiKey, string $teamId)
    {
        $this->client = new ContactApi();
        $this->apiKey = $apiKey;
        $this->teamId = $teamId;
    }

    /**
     * Add the given email to SendX, if needed, and add the suppression tag.
     *
     * @param string $email
     * @return void
     */
    public function suppressEmail(string $email)
    {
        $contact = new Contact([
            'email' => $email,
            'tags' => ['suppression'],
        ]);
        try {
            $this->client->contactIdentifyPost(
                $this->apiKey,
                $this->teamId,
                $contact
            );
        } catch (Throwable $e) {
            return false;
        }

        return true;
    }
}
