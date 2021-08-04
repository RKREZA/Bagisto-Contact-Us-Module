<?php

namespace RKREZA\Contact\DataGrids;

use Webkul\Ui\DataGrid\DataGrid;
use DB;


class ContactDataGrid extends DataGrid
{
    protected $index = 'contact_id'; //the column that needs to be treated as index column

    protected $sortOrder = 'desc'; //asc or desc

    protected $itemsPerPage = 50;

    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('contacts')
                ->addSelect('contacts.id as contact_id', 'name', 'email', 'message_title', 'message_body','message_reply');


        $this->addFilter('contact_id', 'contacts.id');

        $this->setQueryBuilder($queryBuilder);
    }

    public function addColumns()
    {
        $this->addColumn([
            'index' => 'contact_id',
            'label' => trans('contact_lang::app.datagrid.id'),
            'type' => 'number',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true
        ]);

        $this->addColumn([
            'index' => 'name',
            'label' => trans('contact_lang::app.datagrid.name'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => false
        ]);

        $this->addColumn([
            'index' => 'email',
            'label' => trans('contact_lang::app.datagrid.email'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => false
        ]);
        
        $this->addColumn([
            'index' => 'message_body',
            'label' => trans('contact_lang::app.datagrid.message_body'),
            'type' => 'string',
            'searchable' => false,
            'sortable' => false,
            'filterable' => false,

            'closure' => true,

            'wrapper' => function ($value) {
                if (strlen($value->message_body) > 40)
                    return substr($value->message_body, 0,40).'...';
                else
                    return $value->message_body;
            }
        ]);

        // $this->addColumn([
        //     'index' => 'message_reply',
        //     'label' => trans('contact_lang::app.datagrid.message_reply'),
        //     'type' => 'string',
        //     'searchable' => false,
        //     'sortable' => false,
        //     'filterable' => false,

        //     'closure' => true,

        //     'wrapper' => function ($value) {
        //         if (strlen($value->message_reply) > 40)
        //             return substr($value->message_reply, 0,40).'...';
        //         else
        //             return $value->message_reply;
        //     }
        // ]);

        
    }

    public function prepareActions() {
        // $this->addAction([
        //     'type' => 'Edit',
        //     'method' => 'GET', // use GET request only for redirect purposes
        //     'route' => 'admin.agency.edit',
        //     'icon' => 'icon pencil-lg-icon',
        //     'title' => trans('contact_lang::app.agent.edit-help-title')
        // ]);


        $this->addAction([
            'type' => 'View',
            'method' => 'GET', // use GET request only for redirect purposes
            'route' => 'admin.contact.view',
            'icon' => 'icon eye-icon',
            'title' => trans('contact_lang::app.contact.view')
        ]);



        $this->addAction([
            'type' => 'Delete',
            'method' => 'POST', // use GET request only for redirect purposes
            'route' => 'admin.contact.delete',
            'icon' => 'icon trash-icon',
            'title' => trans('contact_lang::app.contact.delete')
        ]);
    }
}