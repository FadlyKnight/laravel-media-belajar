<?php

namespace App\Traits;

/**
 * Trait for display form 
 */
trait DisplayFormTrait
{

    /**
     *  @param App\Model
     */
    public function setForm($class){
        $fillables = $class->getFillable();

    }


    
}
