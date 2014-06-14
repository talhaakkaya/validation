<?php namespace Talhaakkaya\Validation;

/**
 * Laravel 4 Validation
 * @license MIT License
 * @author Talha Akkaya <talhaakkaya@outlook.com>
 * @link http://talhaakkaya.com
 */

interface ValidatorInterface {

	/**
	 * @param array $data
	 * @param array $rules
	 * @param array $messages
	 * @return 
	 */
	public function make(array $data, array $rules, array $messages = []);

}