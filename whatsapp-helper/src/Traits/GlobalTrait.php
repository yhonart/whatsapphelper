<?php
/*
 * File: GlobalTrait.php
 * Project: src
 * Created Date: Mo Oct 2022
 * Author: Yusuf Hanafi
 * Email: yusuf7789@gmail.com
 * -------------------------
 * Last Modified: Fri Jan 20 2023
 * Modified By: YH development
 * -------------------------
 * Copyright (c) 2023 Indiega Network 

 * -------------------------
 * HISTORY:
 * Date      	By	Comments 

 * ----------	---	---------------------------------------------------------
 * 
 * Modul ini dibuat untuk mendukung program web based yang telah di terapkan pada salah satu perusahaan untuk kedepannya digunakan untuk notifikasi. 
 * 
 * 
 */

namespace yhdev\WhatsAppHelper\Traits;

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
     * @author yhondev
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
