<?php  namespace Mentordeveloper\Library\Traits; 
use App;
/**
 * Trait ConnectionTrait
 *
 * @author mentor beschi mentordeveloper@gmail.com
 */
trait ConnectionTrait {
  public function getConnectionName()
  {
    return (App::environment() != 'testing') ? 'authentication' : 'testbench';
  }
} 