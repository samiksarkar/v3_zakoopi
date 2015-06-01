<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="loginhits view large-10 medium-9 columns">
                    <h2><?= h($loginhit->id) ?></h2>
                    <div class="row">
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($loginhit->id) ?></p>
                                                        <b class="subheader"><?= __('Hit') ?></b>
                            <p><?= $this->Number->format($loginhit->hit) ?></p>
                                                        <b class="subheader"><?= __('Log Hit') ?></b>
                            <p><?= $this->Number->format($loginhit->log_hit) ?></p>
                                                    </div>
                                                                                            </div>
                                    </div>
                    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Loginhit'), ['action' => 'edit', $loginhit->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Loginhit'), ['action' => 'delete', $loginhit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $loginhit->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Loginhits'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Loginhit'), ['action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


