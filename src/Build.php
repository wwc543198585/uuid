<?php

namespace Uuid\Build;

class Build
{
	public static function create(){
		die(strtolower(md5(uniqid(mt_rand(), true))));
	}
}