<?php

namespace App\Models\Reports;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class PlateReports extends Model
{
    use HasFactory;

    public static function getIndexStats(){
        $sql ="select(select count(id) from collector_point where title IS NOT NUll) as total_plates,
        (select count(title) from collector_point where title is not null) as total_titles,
        (select count(maker) from collector_point where maker is not null) as total_makers,
        (select count(series) from collector_point where series is not null) as total_series,
        (select count(artist) from collector_point where artist is not null) as total_artists,
        (select count(year) from collector_point where year is not null) as total_years,
        (select count(tags) from collector_point where tags is not null) as total_tags,
        (select count(bradex) from collector_point where bradex is not null) as total_bradexes,
        (select count(description) from collector_point where tags is not null) as total_descriptions,
        (select count(distinct series) from collector_point) as distinct_series,
        (select count(distinct maker) from collector_point) as distinct_makers,
        (select count(distinct artist) from collector_point) as distinct_artists,
        (select count(distinct year) from collector_point) as distinct_years";
        return DB::select($sql);
    }
}
