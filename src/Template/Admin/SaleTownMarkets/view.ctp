<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="saleTownMarkets view large-10 medium-9 columns">
                    <h2><?= h($saleTownMarket->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <h6 class="subheader"><?= __('City') ?></h6>
                            <p><?= $saleTownMarket->has('city') ? $this->Html->link($saleTownMarket->city->id, ['controller' => 'Cities', 'action' => 'view', $saleTownMarket->city->id]) : '' ?></p>
                                                                                                                <h6 class="subheader"><?= __('Market') ?></h6>
                            <p><?= $saleTownMarket->has('market') ? $this->Html->link($saleTownMarket->market->id, ['controller' => 'Markets', 'action' => 'view', $saleTownMarket->market->id]) : '' ?></p>
                                                                                                                <b class="subheader"><?= __('Cover Photo') ?></b>
                            <p><?= h($saleTownMarket->cover_photo) ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($saleTownMarket->id) ?></p>
                                                        <b class="subheader"><?= __('Status') ?></b>
                            <p><?= $this->Number->format($saleTownMarket->status) ?></p>
                                                    </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Created Date') ?></b>
                            <p><?= h($saleTownMarket->created_date) ?></p>
                                                        <b class="subheader"><?= __('Modified Date') ?></b>
                            <p><?= h($saleTownMarket->modified_date) ?></p>
                                                    </div>
                                                                    </div>
                                    </div>
                    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Sale Town Market'), ['action' => 'edit', $saleTownMarket->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Sale Town Market'), ['action' => 'delete', $saleTownMarket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saleTownMarket->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Sale Town Markets'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Sale Town Market'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Markets'), ['controller' => 'Markets', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Market'), ['controller' => 'Markets', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


