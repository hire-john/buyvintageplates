<?php

namespace App\Models\Meta;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Meta\ArtThemes;
use App\Models\Meta\Brands;
use App\Models\Meta\Categories;
use App\Models\Meta\Characters;
use App\Models\Meta\Conditions;
use App\Models\Meta\Cultures;
use App\Models\Meta\DecorStyles;
use App\Models\Meta\Eras;
use App\Models\Meta\Franchises;
use App\Models\Meta\Materials;
use App\Models\Meta\Occasions;
use App\Models\Meta\Shapes;

class Meta extends Model
{
	use HasFactory, SoftDeletes;

	public static function getAllFields(){
		$fields = array();
		$fields['ArtThemes'] = ArtThemes::all();
		$fields['Brands'] = Brands::all();
		$fields['Categories'] = Categories::all();
		$fields['Characters'] = Characters::all();
		$fields['Conditions'] = Conditions::all();
		$fields['Cultures'] = Cultures::all();
		$fields['DecorStyles'] = DecorStyles::all();
		$fields['Eras'] = Eras::all();
		$fields['Franchises'] = Franchises::all();
		$fields['Materials'] = Materials::all();
		$fields['Occasions'] = Occasions::all();
		$fields['Shapes'] = Shapes::all();
		return $fields;
	}

}