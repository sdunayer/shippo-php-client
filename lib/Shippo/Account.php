<?php

class Shippo_Account extends Shippo_ApiResource
{
	/**
	 *
	 */
    public static function classUrl($class)
    {
        return "/shippo-accounts";
    }
    
	/**
	 *
	 */
	public static function create(?array $params = null, ?string $apiKey = null): Shippo_Account
	{
		$class = get_class();
		return self::_scopedCreate($class, $params, $apiKey);
	}
}
