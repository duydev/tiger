<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Bật tắt package này. Dùng cho testing...
	|--------------------------------------------------------------------------
	*/

	'enabled' => true,

    /*
    |--------------------------------------------------------------------------
    | Đường dẫn load thư mục theme.
    | Để null nếu sử dụng thư mục view mặc định của laravel
    |--------------------------------------------------------------------------
    */

    'themes_path' => realpath(base_path('resources/themes')),

	/*
	|--------------------------------------------------------------------------
	| Đặt hành vi DEBUG nếu asset không được tìm thấy trong Theme hierarcy.
	| Tùy chọn sẵn có: THROW_EXCEPTION | LOG_ERROR | ASSUME_EXISTS | IGNORE
	|--------------------------------------------------------------------------
	*/

	'asset_not_found' => 'LOG_ERROR',

	/*
	|--------------------------------------------------------------------------
	| Đặt theme mặc định. Có thể đổi bằng phương thức:
	|  Themes::set('theme-name');
	|--------------------------------------------------------------------------
	*/

	'active' => 'ctxh',

	/*
	|--------------------------------------------------------------------------
	| Define available themes. Format:
	|
	| 	'theme-name' => [
	| 		'extends'	 	=> 'theme-to-extend',  // optional
	| 		'views-path' 	=> 'path-to-views',    // defaults to: resources/views/theme-name
	| 		'asset-path' 	=> 'path-to-assets',   // defaults to: public/theme-name
	|
	|		// you can add your own custom keys and retrieve them with Theme::config('key');
	| 		'key' 			=> 'value',
	| 	],
	|
	|--------------------------------------------------------------------------
	*/

	'themes' => [

		'ctxh' => [
			'extends'	 	=> null,
			'views-path' 	=> 'ctxh',
			'asset-path' 	=> 'themes/ctxh',
		],

		// Add your themes here...

		/*--------------[ Example Structre ]-------------

			// Recomended (all defaults) : Assets -> \public\BasicTheme , Views -> \resources\views\BasicTheme

			'BasicTheme',


			// This theme shares the views with BasicTheme but defines its own assets in \public\SomeTheme

			'SomeTheme' => [
				'views-path'	=> 'BasicTheme',
			],


			// This theme extends BasicTheme and ovverides SOME views\assets in its folders

			'AnotherTheme' => [
				'extends'	=> 'BasicTheme',
			],

		------------------------------------------------*/
	],

];
