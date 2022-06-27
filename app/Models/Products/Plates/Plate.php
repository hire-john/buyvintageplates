<?php

namespace App\Models\Products\Plates;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Plate extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'plate_info';

    public static function getSinglePlate($id){
        $plate = DB::table('plate_info')
        ->leftJoin('meta_years', 'plate_info.year_id', '=', 'meta_years.id')
        ->leftJoin('plate_collections', 'plate_info.collection_id', '=', 'plate_collections.id')
        ->leftJoin('plate_artists', 'plate_info.artist_id', '=', 'plate_artists.id')
        ->leftJoin('plate_manufacturers', 'plate_info.manufacturer_id', '=', 'plate_manufacturers.id')
        ->select('plate_info.*', 'plate_manufacturers.manufacturer', 'plate_collections.collection', 'plate_artists.artist', 'meta_years.year')
        ->where('plate_info.id', '=', $id)
        ->get();
        return $plate[0];
    }

    public static function getLimitedPlates($limit){
        return DB::table('plate_info')
        ->leftJoin('meta_years', 'plate_info.year_id', '=', 'meta_years.id')
        ->leftJoin('plate_collections', 'plate_info.collection_id', '=', 'plate_collections.id')
        ->leftJoin('plate_artists', 'plate_info.artist_id', '=', 'plate_artists.id')
        ->leftJoin('plate_manufacturers', 'plate_info.manufacturer_id', '=', 'plate_manufacturers.id')
        ->select('plate_info.*', 'plate_manufacturers.manufacturer', 'plate_collections.collection', 'plate_artists.artist', 'meta_years.year')
        ->limit($limit)
        ->get();
    }

    public static function getAllPlates(){
        return DB::table('plate_info')
        ->leftJoin('meta_years', 'plate_info.year_id', '=', 'meta_years.id')
        ->leftJoin('plate_collections', 'plate_info.collection_id', '=', 'plate_collections.id')
        ->leftJoin('plate_artists', 'plate_info.artist_id', '=', 'plate_artists.id')
        ->leftJoin('plate_manufacturers', 'plate_info.manufacturer_id', '=', 'plate_manufacturers.id')
        ->select('plate_info.*', 'plate_manufacturers.manufacturer', 'plate_collections.collection', 'plate_artists.artist', 'meta_years.year')
        ->get();
    }

    public static function getAllPaginatedPlates($quantity){
        return DB::table('plate_info')
        ->leftJoin('meta_years', 'plate_info.year_id', '=', 'meta_years.id')
        ->leftJoin('plate_collections', 'plate_info.collection_id', '=', 'plate_collections.id')
        ->leftJoin('plate_artists', 'plate_info.artist_id', '=', 'plate_artists.id')
        ->leftJoin('plate_manufacturers', 'plate_info.manufacturer_id', '=', 'plate_manufacturers.id')
        ->select('plate_info.*', 'plate_manufacturers.manufacturer', 'plate_collections.collection', 'plate_artists.artist', 'meta_years.year')
        ->paginate($quantity);
    }

    public static function searchSingleField($query, $field, $quantity){
        return DB::table('plate_info')
        ->leftJoin('meta_years', 'plate_info.year_id', '=', 'meta_years.id')
        ->leftJoin('plate_collections', 'plate_info.collection_id', '=', 'plate_collections.id')
        ->leftJoin('plate_artists', 'plate_info.artist_id', '=', 'plate_artists.id')
        ->leftJoin('plate_manufacturers', 'plate_info.manufacturer_id', '=', 'plate_manufacturers.id')
        ->select('plate_info.*', 'plate_manufacturers.manufacturer', 'plate_collections.collection', 'plate_artists.artist', 'meta_years.year')
        ->where($field, $query)
        ->orWhere($field, 'like', '%'.$query.'%')
        ->paginate($quantity);
    }


    public static function searchAllFields($query, $quantity){
        return DB::table('plate_info')
        ->leftJoin('meta_years', 'plate_info.year_id', '=', 'meta_years.id')
        ->leftJoin('plate_collections', 'plate_info.collection_id', '=', 'plate_collections.id')
        ->leftJoin('plate_artists', 'plate_info.artist_id', '=', 'plate_artists.id')
        ->leftJoin('plate_manufacturers', 'plate_info.manufacturer_id', '=', 'plate_manufacturers.id')
        ->select('plate_info.*', 'plate_manufacturers.manufacturer', 'plate_collections.collection', 'plate_artists.artist', 'meta_years.year')
        ->where('plate_info.title', $query)
        ->orWhere('plate_info.title', 'like', '%'.$query.'%')
        ->orWhere('plate_info.description', '=', $query)
        ->orWhere('plate_info.description', 'like', '%'.$query.'%')
        ->orWhere('meta_years.year', '=', $query)
        ->orWhere('meta_years.year', 'like', '%'.$query.'%')
        ->orWhere('plate_collections.collection', '=', $query)
        ->orWhere('plate_collections.collection', 'like', '%'.$query.'%')
        ->orWhere('plate_artists.artist', '=', $query)
        ->orWhere('plate_artists.artist', 'like', '%'.$query.'%')
        ->orWhere('plate_info.bradex', '=', $query)
        ->orWhere('plate_info.bradex', 'like', '%'.$query.'%')
        ->orWhere('plate_info.tags', '=', $query)
        ->orWhere('plate_info.tags', 'like', '%'.$query.'%')
        ->paginate($quantity);
    }
}