<?php

use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = [
    		[
	    		'key' => 'sitename',
	    		'value' => 'Website mẫu',
	    	],
	    	[
	    		'key' => 'description',
	    		'value' => 'Đây là website mẫu.',
	    	],
	    	[
	    		'key' => 'keywords',
	    		'value' => 'duydev',
	    	],
	    	[
	    		'key' => 'author',
	    		'value' => 'Trần Nhật Duy <contact@duydev.me>',
	    	],
    	];

    	DB::table('settings')->insert($data);
    }
}
