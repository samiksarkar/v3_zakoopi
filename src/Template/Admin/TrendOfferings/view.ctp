<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="trendOfferings view large-10 medium-9 columns">
                    <h2><?= h($trendOffering->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <h6 class="subheader"><?= __('Trend') ?></h6>
                            <p><?= $trendOffering->has('trend') ? $this->Html->link($trendOffering->trend->id, ['controller' => 'Trends', 'action' => 'view', $trendOffering->trend->id]) : '' ?></p>
                                                                                                                <h6 class="subheader"><?= __('Offering') ?></h6>
                            <p><?= $trendOffering->has('offering') ? $this->Html->link($trendOffering->offering->name, ['controller' => 'Offerings', 'action' => 'view', $trendOffering->offering->id]) : '' ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($trendOffering->id) ?></p>
                                                    </div>
                                                                                            </div>
                                    </div>
                    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Trend Offering'), ['action' => 'edit', $trendOffering->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Trend Offering'), ['action' => 'delete', $trendOffering->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trendOffering->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Trend Offerings'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Trend Offering'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Trends'), ['controller' => 'Trends', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Trend'), ['controller' => 'Trends', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Offerings'), ['controller' => 'Offerings', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Offering'), ['controller' => 'Offerings', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


