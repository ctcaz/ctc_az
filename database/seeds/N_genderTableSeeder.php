<?php

use App\Models\Nom\Ngender;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class N_genderTableSeeder extends Seeder
{
	/**
     * @var array
     */	 
    protected $ngenders = [
		[
			'id'	=>  '1',
			'code'	=>  'F',
			'name'	=>  'жена',
			'is_active'	=>  'Y',
			'created_by'	=>  'system',
			'updated_by'	=>  'system',
			'created_on'	=>  '2009-01-01',
			'updated_on'	=>  '2009-01-01',
			'proxy_created_by'	=>  'system',
			'proxy_updated_by'	=>  'system',
		],
		[
			'id'	=>  '1',
			'code'	=>  'M',
			'name'	=>  'мъж',
			'is_active'	=>  'Y',
			'created_by'	=>  'system',
			'updated_by'	=>  'system',
			'created_on'	=>  '2009-01-01',
			'updated_on'	=>  '2009-01-01',
			'proxy_created_by'	=>  'system',
			'proxy_updated_by'	=>  'system',
		],
	];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->ngenders as $index => $ngender)
        {
            $result = Ngender::create($ngender);
            if (!$result) {
                $this->command->info("Insert failed at record $index.");
                return;
            }
        }
        $this->command->info('Inserted '.count($this->ngenders). ' records');
        //
    }
}
