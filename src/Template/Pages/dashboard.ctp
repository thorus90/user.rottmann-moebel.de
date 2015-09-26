<?php
    $actual = target_h(exec('sudo /usr/bin/defaultroute.sh -h privat-sarah-router -g'));

    function target_h($target)
    {
        switch ($target) {
            case "192.168.201.1":
                return "O2";
            break;
            case "192.168.100.254":
                return "telekom";
            break;
        }
    }
?>
<div class="row">
    <div class="col-md-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">privat-sarah-router(Default Route)</h3>
            </div>
            <div class="panel-body">
                <p>Aktuell: <?php echo $actual; ?></p>
                <?php 
                echo $this->Html->link('O2', [ 
                    'controller' => 'Commands',
                    'action' => 'setDefaultRoute',
                    ]);
                echo $this->Html->link('telekom', [
                    'controller' => 'Commands',
                    'action' => 'setDefaultRoute',
                    '?' => [
                        'newTarget' => '192.168.100.254' ]
                ]); ?>
            </div>
        </div>
    </div>
</div>

