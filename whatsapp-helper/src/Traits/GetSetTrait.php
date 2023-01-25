<?php

namespace yhdev\WhatsAppHelper\Traits;

trait GetSetTrait
{
    /**
     * @var string
     * @author yhondev
     */
    protected $baseUrl      = 'http://127.0.0.1';

    /**
     * @var int
     * @author yhondev
     */
    protected $port         = 6789;

    /**
     * @var int
     * @author yhondev
     */
    protected $senderPhone;

    /**
     * @var int
     * @author yhondev
     */
    protected  $recepient;

    /**
     * @var string
     * @author yhondev
     */
    protected $message;

    /**
     * Set the value of baseUrl
     * @param   string  $baseUrl  
     * @return  self
     */
    public function setBaseUrl(string $baseUrl)
    {
        $this->baseUrl = $baseUrl;
        return $this;
    }

    /**
     * Set the value of port
     * @param   int  $port  
     * @return  self
     */
    public function setPort(int $port)
    {
        $this->port = $port;
        return $this;
    }

    /**
     * Set the value of recepient
     * @param   int  $recepient  
     * @return  self
     */
    public function setRecepient(int $recepient)
    {
        $this->recepient = $recepient;
        return $this;
    }

    /**
     * Set the value of message
     * @param   string  $message  
     * @return  self
     */
    public function setMessage(string $message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * Set the value of senderPhone
     * @param   int  $senderPhone  
     * @return  self
     */
    public function setSenderPhone(int $senderPhone)
    {
        $this->senderPhone = $senderPhone;
        return $this;
    }
}