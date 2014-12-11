<?php 


class Empresa extends Eloquent {

	protected $table = 'empresas';

	protected $fillable = array('razon_social', 'email');

	public static $rules = array(
		'user_id'	=>	'integer',
		'ciudad' =>	'integer',
		'barrio' =>	'integer',
		'sector_id'	=>	'integer',
		'razon_social'	=>	'required',
		'nombre_publico'	=>	'required|min:3|max:200',
		'direccion_principal' => 'required|min:5|max:150',
		'descripcion_breve' => 'min:5|max:250',
		'descripcion_larga' => 'min:5|max:2500',
		'telefono' =>		'required',
		'logo'  => 'image|mimes:jpeg,jpg,bmp,png,gif'
		

		);


	public function user()
    {
        return $this->belongsTo('User');
    }

    public function getEmpresa($id_user)
    {
    	return Empresa::where('user_id','=',$id_user)->first();
    }


    public function getSedes($empresa)
    {
    	return Sede::where('empresa_id','=',$empresa)->lists('nombre_publico','id');
    }
    

    public function userSub()
    {
    	return $this->belongsToMany('User','user_subs');
    }

    public function archivo()
{
	return $this->hasMany('Archivo','empresa_id');
}

    public function sector(){
		return $this->belongsTo('Sector','sector_id');
	}

	public function ciudad(){
		return $this->belongsTo('Ciudad');
	}
	public function pregunta(){
		return $this->hasMany('Pregunta');
	}

	public function mantis(){
		return $this->hasMany('Mantis');
	}

	public function sede()
	{
		return $this->hasMany('Sede');
	}
}