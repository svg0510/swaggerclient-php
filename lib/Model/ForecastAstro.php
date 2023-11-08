<?php
/**
 * ForecastAstro
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Weather API
 *
 * # Introduction WeatherAPI.com provides access to weather and geo data via a JSON/XML restful API. It allows developers to create desktop, web and mobile applications using this data very easy. We provide following data through our API:     - Real-time weather - 14 day weather forecast - Historical Weather - Marine Weather and Tide Data - Future Weather (Upto 365 days ahead) - Daily and hourly intervals - 15 min interval (Enterprise only) - Astronomy - Time zone - Location data - Sports - Search or Autocomplete API - Weather Alerts - Air Quality Data - Bulk Request  # Getting Started    You need to [signup](https://www.weatherapi.com/signup.aspx) and then you can find your API key under [your account](https://www.weatherapi.com/login.aspx), and start using API right away!  Try our weather API by using interactive [API Explorer](https://www.weatherapi.com/api-explorer.aspx).  We also have SDK for popular framework/languages available on [Github](https://github.com/weatherapicom/) for quick integrations.  If you find any features missing or have any suggestions, please [contact us](https://www.weatherapi.com/contact.aspx).    # Authentication    API access to the data is protected by an API key. If at anytime, you find the API key has become vulnerable, please regenerate the key using Regenerate button next to the API key.    Authentication to the WeatherAPI.com API is provided by passing your API key as request parameter through an API .      ##  key parameter  key=YOUR API KEY
 *
 * OpenAPI spec version: 1.0.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.36
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ForecastAstro Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ForecastAstro implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'forecast_astro';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sunrise' => 'string',
        'sunset' => 'string',
        'moonrise' => 'string',
        'moonset' => 'string',
        'moon_phase' => 'string',
        'moon_illumination' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sunrise' => null,
        'sunset' => null,
        'moonrise' => null,
        'moonset' => null,
        'moon_phase' => null,
        'moon_illumination' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'sunrise' => 'sunrise',
        'sunset' => 'sunset',
        'moonrise' => 'moonrise',
        'moonset' => 'moonset',
        'moon_phase' => 'moon_phase',
        'moon_illumination' => 'moon_illumination'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sunrise' => 'setSunrise',
        'sunset' => 'setSunset',
        'moonrise' => 'setMoonrise',
        'moonset' => 'setMoonset',
        'moon_phase' => 'setMoonPhase',
        'moon_illumination' => 'setMoonIllumination'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sunrise' => 'getSunrise',
        'sunset' => 'getSunset',
        'moonrise' => 'getMoonrise',
        'moonset' => 'getMoonset',
        'moon_phase' => 'getMoonPhase',
        'moon_illumination' => 'getMoonIllumination'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['sunrise'] = isset($data['sunrise']) ? $data['sunrise'] : null;
        $this->container['sunset'] = isset($data['sunset']) ? $data['sunset'] : null;
        $this->container['moonrise'] = isset($data['moonrise']) ? $data['moonrise'] : null;
        $this->container['moonset'] = isset($data['moonset']) ? $data['moonset'] : null;
        $this->container['moon_phase'] = isset($data['moon_phase']) ? $data['moon_phase'] : null;
        $this->container['moon_illumination'] = isset($data['moon_illumination']) ? $data['moon_illumination'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets sunrise
     *
     * @return string
     */
    public function getSunrise()
    {
        return $this->container['sunrise'];
    }

    /**
     * Sets sunrise
     *
     * @param string $sunrise sunrise
     *
     * @return $this
     */
    public function setSunrise($sunrise)
    {
        $this->container['sunrise'] = $sunrise;

        return $this;
    }

    /**
     * Gets sunset
     *
     * @return string
     */
    public function getSunset()
    {
        return $this->container['sunset'];
    }

    /**
     * Sets sunset
     *
     * @param string $sunset sunset
     *
     * @return $this
     */
    public function setSunset($sunset)
    {
        $this->container['sunset'] = $sunset;

        return $this;
    }

    /**
     * Gets moonrise
     *
     * @return string
     */
    public function getMoonrise()
    {
        return $this->container['moonrise'];
    }

    /**
     * Sets moonrise
     *
     * @param string $moonrise moonrise
     *
     * @return $this
     */
    public function setMoonrise($moonrise)
    {
        $this->container['moonrise'] = $moonrise;

        return $this;
    }

    /**
     * Gets moonset
     *
     * @return string
     */
    public function getMoonset()
    {
        return $this->container['moonset'];
    }

    /**
     * Sets moonset
     *
     * @param string $moonset moonset
     *
     * @return $this
     */
    public function setMoonset($moonset)
    {
        $this->container['moonset'] = $moonset;

        return $this;
    }

    /**
     * Gets moon_phase
     *
     * @return string
     */
    public function getMoonPhase()
    {
        return $this->container['moon_phase'];
    }

    /**
     * Sets moon_phase
     *
     * @param string $moon_phase moon_phase
     *
     * @return $this
     */
    public function setMoonPhase($moon_phase)
    {
        $this->container['moon_phase'] = $moon_phase;

        return $this;
    }

    /**
     * Gets moon_illumination
     *
     * @return string
     */
    public function getMoonIllumination()
    {
        return $this->container['moon_illumination'];
    }

    /**
     * Sets moon_illumination
     *
     * @param string $moon_illumination moon_illumination
     *
     * @return $this
     */
    public function setMoonIllumination($moon_illumination)
    {
        $this->container['moon_illumination'] = $moon_illumination;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


