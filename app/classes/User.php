<?php


namespace App\classes;
class User
{
    protected $user = [];

    public function getAllUser()
    {
        $this->user = [
            0 => [
                'name'      => 'shehon',
                'mobile'      => '01970481744',
                'location'      => 'kalabagan',
            ],
            0 => [
                'name'      => 'kaif',
                'mobile'      => '01970481744',
                'location'      => 'mirpur',
            ],
        ];
        return $this->user;
    }

}