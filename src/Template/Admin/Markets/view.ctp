<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="markets view large-10 medium-9 columns">
                    <h2><?= h($market->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <h6 class="subheader"><?= __('City') ?></h6>
                            <p><?= $market->has('city') ? $this->Html->link($market->city->id, ['controller' => 'Cities', 'action' => 'view', $market->city->id]) : '' ?></p>
                                                                                                                <b class="subheader"><?= __('Market Name') ?></b>
                            <p><?= h($market->market_name) ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($market->id) ?></p>
                                                    </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Created') ?></b>
                            <p><?= h($market->created) ?></p>
                                                        <b class="subheader"><?= __('Modified') ?></b>
                            <p><?= h($market->modified) ?></p>
                                                    </div>
                                                                    </div>
                                    </div>
                    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Market'), ['action' => 'edit', $market->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Market'), ['action' => 'delete', $market->id], ['confirm' => __('Are you sure you want to delete # {0}?', $market->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Markets'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Market'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


