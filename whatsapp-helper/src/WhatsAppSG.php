<?php
/*
 * File: WhatsAppSG.php
 * Project: src
 * Created Date: Mo Oct 2022
 * Author: Yusuf Hanafi
 * Email: yusuf7789@gmail.com
 * -------------------------
 * Last Modified: Fri Jan 20 2023
 * Modified By: YH development
 * -------------------------
 * Copyright (c) 2023 Dazira 

 * -------------------------
 * HISTORY:
 * Date      	By	Comments 

 * ----------	---	---------------------------------------------------------
 * 
 * Modul ini dibuat untuk mendukung program web based yang telah di terapkan pada salah satu perusahaan untuk kedepannya digunakan untuk notifikasi. 
 * 
 * 
 */

namespace yhdev\WhatsAppHelper;

use yhdev\WhatsAppHelper\Traits\FormatPhoneTrait;
use yhdev\WhatsAppHelper\Traits\GetSetTrait;
use yhdev\WhatsAppHelper\Traits\GlobalTrait;
use Exception;

class WhatsAppSG
{
    use GetSetTrait, FormatPhoneTrait, GlobalTrait;

    /**
     * __construct
     *
     * @return parent::__construct()
     */
    public function __construct(int $recepient = null, string $message = null)
    {
        $this->recepient    = $recepient;
        $this->message      = $message;
    }

    /**
     * SendText
     *
     * @return this 
     * @author yhondev
     * @throws Exception
     */
    public function SendText()
    {
        $recepient  = $this->FormatPhone($this->recepient);
        $sender     = $this->FormatPhone($this->senderPhone);

        if ($recepient == $sender) {
            throw new Exception('Nomor tujuan dan nomor pengirim tidak boleh sama, hal tersebut akan mengakibatkan pesan tidak terkirim');
        }

        $params     = [
            'number'    => $recepient,
            'message'   => $this->message,
        ];
        return $this->_exce('/send-message', $params);
    }
}