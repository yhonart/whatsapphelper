<?php

namespace yhondev\whatsapphelper\Traits;

trait GetSetTrait
{
    /**
     * @var string
     * @author yusuf
     */
    protected $baseUrl      = 'http://127.0.0.1';

    /**
     * @var int
     * @author yusuf
     */
    protected $port         = 6789;

    /**
     * @var int
     * @author yusuf
     */
    protected $senderPhone;

    /**
     * @var int
     * @author yusuf
     */
    protected  $recepient;

    /**
     * @var string
     * @author yusuf
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