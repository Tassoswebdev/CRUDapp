<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EmploeeCreateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name' => 'required',
            'phone'=> 'required',
            'address'=>'required',
            'company' =>'required'
        ];
    }
    
    public function EmploeeFill()
    {
    	return [
			'name' =>$this->name,
			'address' =>$this->address,
			'company' =>$this->company,
			'phone' =>$this->phone,
			'bio'=>$this->bio,
			'salary' =>$this->salary
    	];
    }
}
