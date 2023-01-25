<?php
/*
 * File: FormatPhoneTrait.php
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

namespace WhatsappHelper\Traits;

use Exception;

trait FormatPhoneTrait
{

    /**
     * @var string
     * @author yusuf
     */
    protected $locale   = 'ID';

    /**
     * Helper berfungsi untuk memformat nomor telepon 
     *
     * @param  int|null $phone
     *
     * @return void            
     * @author yusuf
     * @throws Exception
     */
    public function FormatPhone(int $phone = null)
    {
        $phoneUtil              = \libphonenumber\PhoneNumberUtil::getInstance();
        try {

            $NumberFormat       = $phoneUtil->parse($phone, $this->locale);
            return $NumberFormat->getCountryCode() . $NumberFormat->getNationalNumber();
            var_dump($NumberFormat);
        } catch (\libphonenumber\NumberParseException $e) {
            throw new Exception($e->getMessage());
        }
    }

	/**
	 * Set the value of locale
	 * @param   string  $locale  
	 * @return  self
	 */
	public function setLocale(string $locale)
	{
		$this->locale = $locale;
		return $this;
	}
}