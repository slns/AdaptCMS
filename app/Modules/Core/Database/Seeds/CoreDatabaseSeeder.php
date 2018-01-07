<?php

namespace App\Modules\Core\Database\Seeds;

use Illuminate\Database\Seeder;

use App\Modules\Core\Models\Setting;
use App\Modules\Core\Models\SettingsCategory;

use Settings;

class CoreDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create setting categories
        $model = new SettingsCategory;
        
        $model->add([
            'name' => 'General'
        ]);
        $model->add([
            'name' => 'Users'
        ]);

        // create settings
    	$setting = new Setting;
    	
    	$setting->add([
    		'key' => 'sitename',
    		'value' => Settings::get('sitename'),
    		'category_id' => 1
    	]);
    	$setting->add([
    		'key' => 'tagline',
    		'value' => 'My personal blog site',
    		'category_id' => 1
    	]);
    	$setting->add([
    		'key' => 'description',
    		'value' => 'Welcome to my blog! I will be covering a wide range of topics on here, stay tuned.',
    		'category_id' => 1
    	]);
    	$setting->add([
    		'key' => 'login_throttling_limit',
    		'value' => 3,
    		'category_id' => 2
    	]);
    	$setting->add([
    		'key' => 'login_throttling_minutes',
    		'value' => 5,
    		'category_id' => 2
    	]);
    	$setting->add([
    		'key' => 'date_format_long',
    		'value' => 'F jS, Y',
    		'category_id' => 1
    	]);
    	$setting->add([
    		'key' => 'date_format_short',
    		'value' => 'M j, y',
    		'category_id' => 1
    	]);
        $setting->add([
            'key' => 'admin_date_format_short',
            'value' => 'M j, y',
            'category_id' => 1
        ]);
        $setting->add([
            'key' => 'admin_date_format_long',
            'value' => 'F jS, Y @ g:i A',
            'category_id' => 1
        ]);
    	$setting->add([
    		'key' => 'enable_user_signups',
    		'value' => 1,
    		'category_id' => 2
    	]);
    }
}
