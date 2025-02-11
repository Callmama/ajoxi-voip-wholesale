<?php

namespace AjoxiVoip;

class ApiClient
{
    public function sendRequest($endpoint, $data = [])
    {
        return "Sending request to $endpoint with data: " . json_encode($data);
    }
}
