<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    //validacion
 
    public static $rules=[
        'category_id'=>'nullable|exists:categories,id',
        'severity'=>'required|in:M,N,A',
        'title'=>'required|min:5',
        'description'=>'required|min:15'
    ];
    
    public static $messages=[
        'category_id.exists'=>'La categoría seleccionada no existe en nuestra base de datos',
        'title.required'=>'Es necesario ingresar un título para la incidencia',
        'title.min'=>'El título debe presentar al menos 15 caracteres.'
    ];
    //relationship

    public function category()
    {
    	return $this->belongsto('App\Category');
    }


    public function level()
    {
        return $this->belongsto('App\Level');
    }

    public function project()
    {
        return $this->belongsto('App\Project');
    }

    public function support()
    {
        return $this->belongsto('App\User','support_id');
    }

    public function client()
    {
        return $this->belongsto('App\User','client_id');
    }

    public function messages()
    {
        return $this->hasMany('App\Message');   
    }



//accesors    
    public function getSeverityFullAttribute()
    {
    	switch($this->severity){
    		case 'M':
    		 	return 'Menor';
    			break;

    		case 'N':
    		 	return 'Normal';
    			break;
	
    		default:
    			return 'Alta';
    			break;
    	}
    }

    public function getTitleShortAttribute()
    {	
    	return mb_strimwidth($this->title, 0, 20,'...');
    }

     public function getTitleLargeAttribute()
    {   
        return mb_strimwidth($this->title, 0, 30,'...');
    }

    //category_name

    public function getCategoryNameAttribute()
    {
    	if($this->category)
    		return $this->category->name;
    	
    	return 'General';
    	
    }

    //support_name
    public function getSupportNameAttribute()
    {
        if($this->support)
            return $this->support->name;
        
        return 'Sin asignar';
        
    }

    public function getStateAttribute()
    {
        if($this->active==0)
            return 'Resuelto';
        
        if($this->support_id)
            return 'Asignado';

        return 'Pendiente';
        
    }
}
