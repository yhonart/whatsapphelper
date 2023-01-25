<?php
/*
 * File: FormatPhoneTrait.php
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

namespace yhdev\WhatsAppHelper\Traits;

use Exception;

trait FormatPhoneTrait
{

    /**
     * @var string
     * @author yhondev
     */
    protected $locale   = 'ID';

    /**
     * Helper berfungsi untuk memformat nomor telepon 
     *
     * @param  int|null $phone
     *
     * @return void            
     * @author yhondev
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