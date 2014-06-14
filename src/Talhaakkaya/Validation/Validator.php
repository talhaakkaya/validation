<?php namespace Talhaakkaya\Validation;

/**
 * Laravel 4 Validation
 * @license MIT License
 * @author Talha Akkaya <talhaakkaya@outlook.com>
 * @link http://talhaakkaya.com
 */

use Talhaakkaya\Validation\ValidatorInterface;

abstract class Validator {

	/**
	 * @var FactoryInterface
	 */
	protected $validator;

	/**
	 * @var Validation Instance
	 */
	protected $validation;

	/**
	 * @var array messages
	 */
	protected $messages = [];

	/**
	 * @param ValidatorInterface $validator
	 */
	public function __construct(ValidatorInterface $validator){
		$this->validator = $validator;
	}

	/**
	 * Validation data
	 * 
	 * @param array $data
	 * @return mixed
	 * @throws FormValidationException
	 */
	public function validate(array $data){
		$this->validation = $this->validator->make($data, $this->rules(), $this->messages());
		if($this->validation->fails()){
			throw new FormValidationException("Validation Failed", $this->errors());			
		}
		return true;
	}

	/**
	 * @return mixed
	 */
	public function rules(){
		return $this->rules;
	}

	/**
	 * @return mixed
	 */
	public function errors(){
		return $this->validation->errors();
	}

	/**
	 * @return mixed
	 */
	public function messages(){
		return $this->messages;
	}

}