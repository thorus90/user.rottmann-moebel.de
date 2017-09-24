<?php

namespace App\Controller;

use App\Controller\AppController;

class CommandsController extends AppController
{

    public $helpers = [
        'Html' => [
            'className' => 'Bootstrap.BootstrapHtml'
        ],
        'Form' => [
            'className' => 'Bootstrap.BootstrapForm'
        ],
        'Paginator' => [
            'className' => 'Bootstrap.BootstrapPaginator'
        ],
        'Modal' => [
            'className' => 'Bootstrap.BootstrapModal'
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
