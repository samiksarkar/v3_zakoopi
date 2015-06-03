<?php

use Cake\Core\Configure;
use Cake\Error\Debugger;

$this->layout = 'default';
if (Configure::read('debug')):
    $this->layout = 'dev_error';

    $this->assign('title', $message);
    $this->assign('templateName', 'error500.ctp');

    $this->start('file');
    ?>
        <?php if (!empty($error->queryString)) : ?>
        <p class="notice">
            <strong>SQL Query: </strong>
        <?= h($error->queryString) ?>
        </p>
    <?php endif; ?>
    <?php if (!empty($error->params)) : ?>
        <strong>SQL Query Params: </strong>
        <?= Debugger::dump($error->params) ?>
    <?php endif; ?>
    <?php
    echo $this->element('auto_table_warning');

    if (extension_loaded('xdebug')):
        xdebug_print_function_stack();
    endif;

    $this->end();
endif;
?>
<div id="wrapper">
<?= $this->element('header') ?>
    <section>
        <div class="container">
            <div class="row">
                <center>
                    <h1>Opps! Something went wrong...</h1>
                    <h3>500 An Internal Error Has Occurred</h3>
                </center>
            </div>
        </div>
    </section>
</div>

