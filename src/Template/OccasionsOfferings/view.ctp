<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="occasionsOfferings view large-10 medium-9 columns">
                    <h2><?= h($occasionsOffering->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <h6 class="subheader"><?= __('Occasion') ?></h6>
                            <p><?= $occasionsOffering->has('occasion') ? $this->Html->link($occasionsOffering->occasion->id, ['controller' => 'Occasions', 'action' => 'view', $occasionsOffering->occasion->id]) : '' ?></p>
                                                                                                                <h6 class="subheader"><?= __('Offering') ?></h6>
                            <p><?= $occasionsOffering->has('offering') ? $this->Html->link($occasionsOffering->offering->name, ['controller' => 'Offerings', 'action' => 'view', $occasionsOffering->offering->id]) : '' ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($occasionsOffering->id) ?></p>
                                                    </div>
                                                                                            </div>
                                    </div>
                    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Occasions Offering'), ['action' => 'edit', $occasionsOffering->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Occasions Offering'), ['action' => 'delete', $occasionsOffering->id], ['confirm' => __('Are you sure you want to delete # {0}?', $occasionsOffering->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Occasions Offerings'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Occasions Offering'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Occasions'), ['controller' => 'Occasions', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Occasion'), ['controller' => 'Occasions', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Offerings'), ['controller' => 'Offerings', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Offering'), ['controller' => 'Offerings', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


