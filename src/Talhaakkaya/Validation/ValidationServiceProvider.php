<?php namespace Talhaakkaya\Validation;

/**
 * Laravel 4 Validation
 * @license MIT License
 * @author Talha Akkaya <talhaakkaya@outlook.com>
 * @link http://talhaakkaya.com
 */

use Illuminate\Support\ServiceProvider;

class ValidationServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('Talhaakkaya\Validation\ValidatorInterface', 'Talhaakkaya\Validation\FormValidator');
	}

	public function boot(){
		$this->package('talhaakkaya/validation');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	/*public function provides()
	{
		return array();
	}*/

}
