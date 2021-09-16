<?php

namespace Database\Seeders;

use App\Models\LandingPage;
use Illuminate\Database\Seeder;

class LandingPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'home',
            // add landing page names
        ];
        foreach($data as $pageName) {
            if(LandingPage::where('page_name','!=',$pageName)->count()) {
                continue;
            }
            $landingPage = new LandingPage();
            $landingPage->page_name = $pageName;
            $landingPage->save();
        }
    }
}
