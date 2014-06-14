<?php namespace Talhaakkaya\Validation;

/**
 * Laravel 4 Validation
 * @license MIT License
 * @author Talha Akkaya <talhaakkaya@outlook.com>
 * @link http://talhaakkaya.com
 */

use Illuminate\Support\MessageBag;

class FormValidationException extends \Exception {

	/**
	 * @var MessageBag
	 */
	protected $errors;

	/**
	 * @param $message
	 * @param MessageBag $errors
	 */
	public function __construct($message, MessageBag $errors){
		$this->errors = $errors;
		parent::__construct($message);
	}

	/**
	 * Get errors
	 * 
	 * @return mixed
	 */
	public function getErrors(){
		return $this->errors;
	}

}