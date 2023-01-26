<?php
/*
 * File: GlobalTrait.php
 * Project: Traits
 * Created Date: Jan 2023
 * Author: Yusuf
 * -------------------------
 * Last Modified: Jan 2023
 * Modified By: Yusuf
 * -------------------------
 * Copyright (c) 2023 Daz

 * -------------------------
 * HISTORY:
 * Date      	By	Comments 

 * ----------	---	---------------------------------------------------------
 * 
 * Library ini dikembangkan untuk aplikasi web
 * 
 * 
 */

namespace yhondev\whatsapphelper\Traits;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

trait GlobalTrait
{
    use GetSetTrait;

    /**
     * Fungsi untuk proses eksekusi pengiriman data kepada server
     *
     * @param  mixed $endpoint
     * @param  array $params
     *
     * @return void
     * @throws Exception
     */
    public function _exce($endpoint, $params = [])
    {
        $availPort      = (!empty($this->port)) ? $this->port : '80';
        $base_url       = $this->baseUrl . ':' . $availPort;
        $url            = $base_url . $endpoint;

        $client = new Client([
            'base_uri' => $base_url,
        ]);

        $response = $client->post($endpoint, [
            // 'debug' => TRUE,
            'form_params' => $params,
            'headers' => [
                'Accept' => 'application/json'
            ],
        ]);

        $responseData = $response->getBody()->getContents();
        $result = json_decode($responseData);

        return $result;
    }
}
