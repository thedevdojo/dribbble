<?php namespace Devdojo\Dribbble\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class Dribbble extends Facade {
 
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'dribbble'; }
 
}