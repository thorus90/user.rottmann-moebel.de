<?php

namespace App\Controller;

use App\Controller\AppController;

class CommandsController extends AppController
{

    public $helpers = [
        'Html' => [
            'className' => 'Bootstrap3.BootstrapHtml'
        ],
        'Form' => [
            'className' => 'Bootstrap3.BootstrapForm'
        ],
        'Paginator' => [
            'className' => 'Bootstrap3.BootstrapPaginator'
        ],
        'Modal' => [
            'className' => 'Bootstrap3.BootstrapModal'
        ]
    ];
     
    public function initialize()
    {
        $this->loadComponent('Auth');
        $this->loadComponent('Flash');
    }

    public function setDefaultRoute ($host = "privat-sarah-router", $newTarget = "192.168.201.1")
	{
        if ( isset($this->request->query['host']) )
        {
            $host = $this->request->query['host'];
        }
        if ( isset($this->request->query['newTarget']) )
        {
            $newTarget = $this->request->query['newTarget'];
        }
        debug($this->request->data);
        echo $host;
        echo $newTarget;
        exec("sudo /usr/bin/defaultroute.sh -h $host -s $newTarget");
	}
}

?>
