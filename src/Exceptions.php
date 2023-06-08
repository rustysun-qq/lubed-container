<?php
namespace Lubed\Container;

use Lubed\Exceptions\RuntimeException;
use Throwable;

final class Exceptions
{
	const ENTRY_NOT_FOUND=101711;
	const BINDING_RESOLUTION=101712;
	const INVALID_ARGUMENT=101713;
	const LOGIC_FAILED=101714;
	const TYPE_ERROR=101715;

	public static function  EntryNotFound(string $msg,array $options=[],?Throwable $prev=null):RuntimeException
	{
        throw new RuntimeException(self::ENTRY_NOT_FOUND,$msg,$options,$prev);
	}

	public static function BindingResolution(string $msg,array $options=[],?Throwable $prev=null):RuntimeException
	{
        throw new RuntimeException(self::BINDING_RESOLUTION,$msg,$options,$prev);	
	}

	public static function InvalidArgument(string $msg,array $options=[],?Throwable $prev=null):RuntimeException
	{
        throw new RuntimeException(self::INVALID_ARGUMENT,$msg,$options,$prev);	
	}

	public static function LogicFailed(string $msg,array $options=[],?Throwable $prev=null):RuntimeException
	{
		throw new RuntimeException(self::LOGIC_EXCEPTION,$msg,$options,$prev);	
	}

	public static function TypeError(string $msg,array $options=[],?Throwable $prev=null):RuntimeException
	{
		throw new RuntimeException(self::LOGIC_EXCEPTION,$msg,$options,$prev);	
	}
}
