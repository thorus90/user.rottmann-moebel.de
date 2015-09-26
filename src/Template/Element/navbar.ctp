<div class="nav navbar-inverse nav-justified">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php
                echo $this->Html->link('Hive', [ 'controller' => 'Pages' , 'action' => 'display', 'dashboard' ], [ 'class' => 'navbar-brand' ]);
            ?>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <?php echo $this->Html->link(__('Passwords'), array ('controller' => 'PasswordLists', 'action' => 'index')); ?>
                </li>
                <li>
                    <?php echo $this->Html->link(__('Mediascore'), array('controller' => 'Mediascores')); ?>
                </li>
            </ul>
            <div class="nav navbar-nav navbar-right navbar-form">
                <div class="btn-group">
                    <!-- <button type="button" class="btn btn-default"><a href="#admin" id="admin">Admin</a></button> -->
                    <?php echo $this->Html->link(__('Logout'), array('controller' => 'Users', 'action' => 'logout'), array('class' => 'btn btn-default')); ?>
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><?php echo $this->Html->link($this->request->session()->read('Auth.User.username'), array('controller' => 'Users', 'action' => 'edit')); ?> </li>
                   </ul> 
                </div>
            </div>
        </div>
    </div>
</div>
