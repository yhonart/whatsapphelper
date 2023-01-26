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

use yhondev\whatsapphelper\Traits\GetSetTrait;
use yhondev\whatsapphelper\Traits\FormatPhoneTrait;
use yhondev\whatsapphelper\Traits\GlobalTrait;
use Exception;

class WhatsAppSG
{
    use GetSetTrait, FormatPhoneTrait, GlobalTrait;

    /**
     * __construct
     *
     * @return parent::__construct()
     */

    /**
     * @var int
     */
    private $recepient;

    /**
     * @var string
     */
    private $message;

    public function __construct(int $recepient, string $message)
    {
        $this->recepient    = $recepient;
        $this->message      = $message;
    }

    /**
     * SendText
     *
     * @return this 
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