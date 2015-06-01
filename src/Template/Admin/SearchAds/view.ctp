<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="searchAds view large-10 medium-9 columns">
                    <h2><?= h($searchAd->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <b class="subheader"><?= __('Type') ?></b>
                            <p><?= h($searchAd->type) ?></p>
                                                                                                                <b class="subheader"><?= __('Tagline') ?></b>
                            <p><?= h($searchAd->tagline) ?></p>
                                                                                                                <b class="subheader"><?= __('Redirectto') ?></b>
                            <p><?= h($searchAd->redirectto) ?></p>
                                                                                                                <h6 class="subheader"><?= __('Store') ?></h6>
                            <p><?= $searchAd->has('store') ? $this->Html->link($searchAd->store->id, ['controller' => 'Stores', 'action' => 'view', $searchAd->store->id]) : '' ?></p>
                                                                                                                <b class="subheader"><?= __('Keywords') ?></b>
                            <p><?= h($searchAd->keywords) ?></p>
                                                                                                                <b class="subheader"><?= __('Image') ?></b>
                            <p><?= h($searchAd->image) ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($searchAd->id) ?></p>
                                                        <b class="subheader"><?= __('Status') ?></b>
                            <p><?= $this->Number->format($searchAd->status) ?></p>
                                                        <b class="subheader"><?= __('Rate Of Ad') ?></b>
                            <p><?= $this->Number->format($searchAd->rate_of_ad) ?></p>
                                                    </div>
                                                                                            </div>
                                    </div>
                                <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title"><?= __('Related Regions') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($searchAd->regions)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Name') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($searchAd->regions as $regions): ?>
                                    <tr>
                                        <td><?= h($regions->id) ?></td>
                                        <td><?= h($regions->name) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'Regions', 'action' => 'view', $regions->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'Regions', 'action' => 'edit', $regions->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Regions', 'action' => 'delete', $regions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $regions->id), 'class' => 'btn btn-danger']) ?>

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
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Search Ad'), ['action' => 'edit', $searchAd->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Search Ad'), ['action' => 'delete', $searchAd->id], ['confirm' => __('Are you sure you want to delete # {0}?', $searchAd->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Search Ads'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Search Ad'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


