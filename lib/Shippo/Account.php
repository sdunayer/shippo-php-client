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
    
	/**
	 *
	 */
	public static function listAll(?array $params = null, ?string $apiKey = null): Shippo_Account
	{
		$class = get_class();
		return self::_scopedAll($class, $params, $apiKey);
	}
    
	/**
	 *
	 */
	public static function retrieve(string $id, ?string $apiKey = null): Shippo_Account
	{
		$class = get_class();
		return self::_scopedRetrieve($class, $id, $apiKey);
	}
    
	/**
	 *
	 */
	public static function update(string $id, array $params, ?string $apiKey = null): Shippo_Account
	{
		$class = get_class();
		return self::_scopedUpdate($class, $id, $params, $apiKey);
	}
}
