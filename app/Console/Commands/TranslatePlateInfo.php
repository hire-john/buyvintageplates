<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TranslatePlateInfo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'translate:plates';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'move plate info to more effecient database structure';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $start = 7;
        $end = 29214;
        $data = array();
        //$end = 29214;
        $this->output->progressStart(($end - $start));
        for($i = $start; $i < $end; $i++){
            $sql = "select id, year, maker, series, title, artist, diameter, description, tags, bradex from buyvintagegoods.collector_point where id=".$i; 
            $plate = DB::select($sql);
            if($plate[0]->title !== null && (!empty($plate[0]->title))){
                $data['year_id'] = $this->resolveYear($plate[0]->year);
                $data['manufacturer_id'] = $this->resolveMaker($plate[0]->maker);
                $data['collection_id'] = $this->resolveSeries($plate[0]->series);
                $data['artist_id'] = $this->resolveArtist($plate[0]->artist);
                $data['title'] = $plate[0]->title;
                $data['description'] = $plate[0]->description;
                $data['bradex'] = $plate[0]->bradex;
                $data['diameter'] = $plate[0]->diameter;
                $data['tags'] = $plate[0]->tags;
                $data['origin_id'] = $plate[0]->id;
                $this->insertHandler($data);
            }
            $this->output->progressAdvance();
        }
        $this->output->progressFinish();
        return 0;
    }

    private function resolveYear($year){
        $result = null;
        if(is_numeric($year)){
            $result = DB::table('meta_years')->where('year', $year)->value('id');
        }
        return $result;
    }

    private function resolveMaker($maker){
        $result = null;
        if(($maker !== null) && (!empty($maker))){
            $result = DB::table('plate_manufacturers')->where('manufacturer', $maker)->value('id');
        }
        return $result;
    }

    private function resolveSeries($series){
        $result = null;
        if(($series !== null) && (!empty($series))){
            $result = DB::table('plate_collections')->where('collection', $series)->value('id');
        }
        return $result;
    }

    private function resolveArtist($artist){
        $result = null;
        if(($artist !== null) && (!empty($artist))){
            $result = DB::table('plate_artists')->where('artist', $artist)->value('id');
        }
        return $result;
    }

    private function insertHandler($data){
        \DB::table('plate_info')->insert([
         'year_id' => $data['year_id'],
         'manufacturer_id' => $data['manufacturer_id'],
         'collection_id' => $data['collection_id'],
         'artist_id' => $data['artist_id'],
         'title' => $data['title'],
         'description' => $data['description'],
         'bradex' => $data['bradex'],
         'diameter' => $data['diameter'],
         'tags' => $data['tags'],
         'origin_id' => $data['origin_id'],
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
     ]);
    }
}
