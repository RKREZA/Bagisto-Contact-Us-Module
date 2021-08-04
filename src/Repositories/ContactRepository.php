<?php

namespace RKREZA\Contact\Repositories;

use Illuminate\Container\Container as App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Event;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Webkul\Core\Eloquent\Repository;
use RKREZA\Contact\Models\Contact;


class ContactRepository extends Repository
{

    public function __construct(App $app)
    {
        parent::__construct($app);
    }

  
    public function model()
    {
        return 'RKREZA\Contact\Contracts\Contact';
    }

    public function update(array $data, $id, $attribute = "id")
    {
        $contact = $this->find($id);
        $contact->update($data);
        return $contact;
    }


}