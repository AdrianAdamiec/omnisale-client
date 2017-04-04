<?php

namespace Omnisale\Model\Order;

use Omnisale\Parser\StringHelper;
use JMS\Serializer\Annotation as Serializer;

class OmnisaleOrderBillingAddressChannel
{
    /**
     * @var int
     * @Serializer\Type("integer")
     */
    public $id;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $address1;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $address2;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $city;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $company;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $country;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $country_code;

    /**
     * @var bool
     * @Serializer\Type("bool")
     */
    public $default;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $first_name;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $last_name;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $latitude;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $longitude;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $phone;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $province;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $province_code;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $zip;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $tax_id;

    /**
     * @param array $data
     */
    public function __construct( Array $data = [] )
    {
        if( count($data) )
        {
            foreach( $data as $key => $value )
            {
                $field = StringHelper::convertStringToCamelCase( $key );

                $setterMethod = 'set' . $field;
                if( method_exists( $this, $setterMethod ) ){
                    $value = is_null($value) ? '': $value;
                    $this->$setterMethod( $value );
                }
            }
        }
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @param string $address1
     */
    public function setAddress1(string $address1)
    {
        $this->address1 = $address1;
    }

    /**
     * @param string $address2
     */
    public function setAddress2(string $address2)
    {
        $this->address2 = $address2;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city)
    {
        $this->city = $city;
    }

    /**
     * @param string $company
     */
    public function setCompany(string $company)
    {
        $this->company = $company;
    }

    /**
     * @param string $country
     */
    public function setCountry(string $country)
    {
        $this->country = $country;
    }

    /**
     * @param string $country_code
     */
    public function setCountryCode(string $country_code)
    {
        $this->country_code = $country_code;
    }

    /**
     * @param boolean $default
     */
    public function setDefault(bool $default)
    {
        $this->default = $default;
    }

    /**
     * @param string $first_name
     */
    public function setFirstName(string $first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * @param string $last_name
     */
    public function setLastName(string $last_name)
    {
        $this->last_name = $last_name;
    }

    /**
     * @param string $latitude
     */
    public function setLatitude(string $latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @param string $longitude
     */
    public function setLongitude(string $longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }

    /**
     * @param string $province
     */
    public function setProvince(string $province)
    {
        $this->province = $province;
    }

    /**
     * @param string $province_code
     */
    public function setProvinceCode(string $province_code)
    {
        $this->province_code = $province_code;
    }

    /**
     * @param string $zip
     */
    public function setZip(string $zip)
    {
        $this->zip = $zip;
    }

    /**
     * @param string $tax_id
     */
    public function setTaxId(string $tax_id)
    {
        $this->tax_id = $tax_id;
    }


}