<?php

namespace App\Console\Commands;

use App\Models\Config;
use Illuminate\Console\Command;

class AddLookCount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:addLookCount';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '增加觀看人數';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $lookCountData = $this->config->where('key','look_count')->get();
        if((int)$lookCountData->count() === 0){
            $model = $this->config->newInstance();
            $model ->key ='look_count';
            $lastCount  = $model ->value =1;
            $model ->save();

        }else{
            $id=  $lookCountData->first() ->id;
            $count = $lookCountData->first() ->value;

            $model = $this->config->find($id);
            $lastCount= $model ->value =$count +1;
            $model ->save();
        }

        echo '觀看次數 :'.$lastCount;

    }
}
