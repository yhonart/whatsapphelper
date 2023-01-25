<?php
/*
 * File: WhatsAppSG.php
 * Project: src
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
namespace yhondev\whatsapphelper;

use Traits\FormatPhoneTrait;
use Traits\GetSetTrait;
use Traits\GlobalTrait;
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
     * @author yusuf
     * @throws Exception
     */
    public function SendText()
    {
        $recepient  = $this->FormatPhone($this->recepient);
        $sender     = $this->FormatPhone($this->senderPhone);

        if ($recepient == $sender) {
            throw new Exception('Nomor tujuan dan nomor pengirim tidak boleh sama, apabila sama maka beresiko pesan tidak terkirim');
        }

        $params     = [
            'number'    => $recepient,
            'message'   => $this->message,
        ];
        return $this->_exce('/send-message', $params);
    }
}