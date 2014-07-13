<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employee
 *
 * @author bcc
 */
class OfficeEmployee {
    //put your code here
    public  $id;
    public $name;
    public $salary;
    public $bonus;
    
    public function get_salary_with_bonus()
    {
        if($this->salary>30000)
        
            {
            $this->bonus = $this->salary * .2;
            
            return $this->bonus + $this->salary;
        }
        
        elseif ($this->salary>10000) 
            {
            
             $this->bonus = $this->salary * .3;
             
             return $this->bonus + $this->salary;
        
             }
    
        else
            {
            
             $this->bonus = $this->salary * .5;
             
             return $this->bonus + $this->salary;
        
            }
        
    }
    
}
