<div class="row">

    <div class="col-lg-10">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"></h3>
                <div class="box-tools">

                    <ul class="pagination pagination-sm no-margin pull-right">
                        <?= $this->Paginator->prev('< ' . __('previous')) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('next') . ' >') ?>
                    </ul>
                    <p><?= $this->Paginator->counter() ?></p>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-striped table-responsive table-hover">
                    <thead>
                        <tr>
                                                        <th><?= $this->Paginator->sort('id') ?></th>
                                                        <th><?= $this->Paginator->sort('homepage_ad_id') ?></th>
                                                        <th><?= $this->Paginator->sort('region_id') ?></th>
                                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($homepageAdsRegions as $homepageAdsRegion): ?>
                        <tr>
                                                        <td><?= $this->Number->format($homepageAdsRegion->id) ?></td>
                                                        <td>
                                <?= $homepageAdsRegion->has('homepage_ad') ? $this->Html->link($homepageAdsRegion->homepage_ad->id, ['controller' => 'HomepageAds', 'action' => 'view', $homepageAdsRegion->homepage_ad->id]) : '' ?>
                            </td>
                                                        <td>
                                <?= $homepageAdsRegion->has('region') ? $this->Html->link($homepageAdsRegion->region->name, ['controller' => 'Regions', 'action' => 'view', $homepageAdsRegion->region->id]) : '' ?>
                            </td>
                                                        <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $homepageAdsRegion->id], ['class' => 'btn btn-default']) ?>
                                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['action' => 'edit', $homepageAdsRegion->id], ['class' => 'btn btn-default', 'escape' => false]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $homepageAdsRegion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homepageAdsRegion->id), 'class' => 'btn btn-danger']) ?>
                            </td>
                        </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div>
    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('New Homepage Ads Region'), ['action' => 'add']) ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Homepage Ads'), ['controller' => 'HomepageAds', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Homepage Ad'), ['controller' => 'HomepageAds', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>