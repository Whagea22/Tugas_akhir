<?php

namespace App\Models\Admin;
use App\Models\Model;
use Carbon\Carbon;


class Monitor extends Model{
    protected $table = 'data_sensor';


    function tanggalIndo(){
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at);

    }

}
