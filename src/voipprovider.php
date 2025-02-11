<?php

namespace AjoxiVoip;

class VoipProvider
{
    protected $apiKey;
    protected $apiUrl;

    public function __construct($apiKey, $apiUrl)
    {
        $this->apiKey = $apiKey;
        $this->apiUrl = $apiUrl;
    }

    public function makeCall($from, $to)
    {
        return "Making a call from $from to $to via Ajoxi VOIP.";
    }
}
