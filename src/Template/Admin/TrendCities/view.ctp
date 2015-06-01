<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="trendCities view large-10 medium-9 columns">
                    <h2><?= h($trendCity->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <h6 class="subheader"><?= __('City') ?></h6>
                            <p><?= $trendCity->has('city') ? $this->Html->link($trendCity->city->id, ['controller' => 'Cities', 'action' => 'view', $trendCity->city->id]) : '' ?></p>
                                                                                                                <h6 class="subheader"><?= __('Trend') ?></h6>
                            <p><?= $trendCity->has('trend') ? $this->Html->link($trendCity->trend->id, ['controller' => 'Trends', 'action' => 'view', $trendCity->trend->id]) : '' ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($trendCity->id) ?></p>
                                                        <b class="subheader"><?= __('Sort Order') ?></b>
                            <p><?= $this->Number->format($trendCity->sort_order) ?></p>
                                                    </div>
                                                                                            </div>
                                    </div>
                    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Trend City'), ['action' => 'edit', $trendCity->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Trend City'), ['action' => 'delete', $trendCity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trendCity->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Trend Cities'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Trend City'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Trends'), ['controller' => 'Trends', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Trend'), ['controller' => 'Trends', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


