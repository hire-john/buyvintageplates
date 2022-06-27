<?php

namespace App\Http\Controllers\Portal\Reporting\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Reports\PlateReports;
use Carbon\Carbon;

class PlateReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stats = PlateReports::getIndexStats();
        $time = Carbon::now();
        $time = $time->toDateTimeString();
        $progress['images'] = $this->checkImages();
        $progress['titles'] = round(($stats[0]->total_titles / $stats[0]->total_plates) * 100);
        $progress['artists'] = round(($stats[0]->total_artists / $stats[0]->total_plates) * 100);
        $progress['makers'] = round(($stats[0]->total_makers / $stats[0]->total_plates) * 100);
        $progress['series'] = round(($stats[0]->total_series / $stats[0]->total_plates) * 100);
        $progress['years'] = round(($stats[0]->total_years / $stats[0]->total_plates) * 100);
        $progress['tags'] = round(($stats[0]->total_tags / $stats[0]->total_plates) * 100);
        $progress['descriptions'] = round(($stats[0]->total_descriptions / $stats[0]->total_plates) * 100);
        $progress['bradexes'] = round(($stats[0]->total_bradexes / $stats[0]->total_plates) * 100);
        return view('content.private.pages.reporting.products.plates.index', compact('stats', 'progress', 'time'));
    }

    private function calculateReducedRatio($antecedent, $consequent){
        $gcd =  gmp_gcd($antecedent, $consequent);
        $antecedent = $antecedent / $gcd;
        $consequent = $consequent / $gcd;
        $ratio = $antecedent.":".$consequent;
        return $ratio;
    }

    private function checkImages(){
        $path = public_path('images/cp-plates/');
        $highest_id = 29214;
        $results = array();
        $missing_image_ids = array();
        for($i = 0; $i < $highest_id; $i++){
            if(!file_exists($path.$i.".jpg")){
                $missing_image_ids[]=$i;
            }
        }
        $results['percentage'] = round(count($missing_image_ids) / $highest_id * 100);
        $results['total'] = count($missing_image_ids);
        $results['image_ids'] = $missing_image_ids;
        return $results;
    }

}
