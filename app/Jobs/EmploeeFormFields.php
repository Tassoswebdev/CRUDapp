<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Contracts\Bus\SelfHandling;
use App\Emploee;

class EmploeeFormFields extends Job implements SelfHandling
{
	
	protected $fields = [
	'name' =>'',
	'phone'=>'',
	'salary'=>'',
	'address'=>'',
	'company'=>'',
	'bio'=>''	
	];
	protected $id;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($id=null)
    {
        //
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        $fields = $this->fields;
        if ($this->id)
        	$fields = $this->fieldsFromModel($this->id, $fields);
        
        foreach ($fields as $fieldName => $fieldValue) {
        	$fields[$fieldName] = old($fieldName, $fieldValue);
        }
        return $fields;
        
    }
    
    public function fieldsFromModel($id, array $fields)
    {
    	$emploee = Emploee::findOrFail($id);
    	$fieldNames = array_keys($fields);
    	
    	$fields = ['id' => $id];
    	foreach ($fieldNames as $field) {
    		$fields[$field] = $emploee->{$field};
    	}
    	
    	   	
    	return $fields;
    }
    
    
    
}
