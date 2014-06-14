<?php namespace Talhaakkaya\Validation;

/**
 * Laravel 4 Validation
 * @license MIT License
 * @author Talha Akkaya <talhaakkaya@outlook.com>
 * @link http://talhaakkaya.com
 */

use Illuminate\Validation\Factory as Validation;

class FormValidator implements ValidatorInterface {

	/**
	 * @var \Illuminate\Validation\Factory
	 */
	protected $validator;

	/**
	 * @param Validation $validator
	 */
	public function __construct(Validation $validator){
		$this->validator = $validator;
	}


	/**
	 * @param array $data
	 * @param array $rules
	 * @param array $messages
	 * @return Illuminate\Validation\Factory
	 */
	public function make(array $data, array $rules, array $messages = []){
		return $this->validator->make($data, $rules, $messages);
	}


}
