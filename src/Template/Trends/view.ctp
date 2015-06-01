<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="trends view large-10 medium-9 columns">
                    <h2><?= h($trend->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <b class="subheader"><?= __('Trend Name') ?></b>
                            <p><?= h($trend->trend_name) ?></p>
                                                                                                                <h6 class="subheader"><?= __('City') ?></h6>
                            <p><?= $trend->has('city') ? $this->Html->link($trend->city->id, ['controller' => 'Cities', 'action' => 'view', $trend->city->id]) : '' ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($trend->id) ?></p>
                                                    </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Created') ?></b>
                            <p><?= h($trend->created) ?></p>
                                                        <b class="subheader"><?= __('Modified') ?></b>
                            <p><?= h($trend->modified) ?></p>
                                                    </div>
                                                                    </div>
                                    </div>
                                <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title"><?= __('Related TrendCities') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($trend->trend_cities)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('City Id') ?></th>
                                                                                <th><?= __('Trend Id') ?></th>
                                                                                <th><?= __('Sort Order') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($trend->trend_cities as $trendCities): ?>
                                    <tr>
                                        <td><?= h($trendCities->id) ?></td>
                                        <td><?= h($trendCities->city_id) ?></td>
                                        <td><?= h($trendCities->trend_id) ?></td>
                                        <td><?= h($trendCities->sort_order) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'TrendCities', 'action' => 'view', $trendCities->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'TrendCities', 'action' => 'edit', $trendCities->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'TrendCities', 'action' => 'delete', $trendCities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trendCities->id), 'class' => 'btn btn-danger']) ?>

            </td>
                                            </tr>

                                            <?php endforeach;
                                            ?>
                                </table>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                        <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title"><?= __('Related TrendOfferings') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($trend->trend_offerings)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Trend Id') ?></th>
                                                                                <th><?= __('Offering Id') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($trend->trend_offerings as $trendOfferings): ?>
                                    <tr>
                                        <td><?= h($trendOfferings->id) ?></td>
                                        <td><?= h($trendOfferings->trend_id) ?></td>
                                        <td><?= h($trendOfferings->offering_id) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'TrendOfferings', 'action' => 'view', $trendOfferings->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'TrendOfferings', 'action' => 'edit', $trendOfferings->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'TrendOfferings', 'action' => 'delete', $trendOfferings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trendOfferings->id), 'class' => 'btn btn-danger']) ?>

            </td>
                                            </tr>

                                            <?php endforeach;
                                            ?>
                                </table>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Trend'), ['action' => 'edit', $trend->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Trend'), ['action' => 'delete', $trend->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trend->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Trends'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Trend'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Trend Cities'), ['controller' => 'TrendCities', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Trend City'), ['controller' => 'TrendCities', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Trend Offerings'), ['controller' => 'TrendOfferings', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Trend Offering'), ['controller' => 'TrendOfferings', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


