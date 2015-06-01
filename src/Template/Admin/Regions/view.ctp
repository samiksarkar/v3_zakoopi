<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="regions view large-10 medium-9 columns">
                    <h2><?= h($region->name) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <b class="subheader"><?= __('Name') ?></b>
                            <p><?= h($region->name) ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($region->id) ?></p>
                                                    </div>
                                                                                            </div>
                                    </div>
                                <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title"><?= __('Related HomepageAds') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($region->homepage_ads)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Type') ?></th>
                                                                                <th><?= __('Status') ?></th>
                                                                                <th><?= __('Tagline') ?></th>
                                                                                <th><?= __('Rate Of Ad') ?></th>
                                                                                <th><?= __('Redirectto') ?></th>
                                                                                <th><?= __('Store Id') ?></th>
                                                                                <th><?= __('Keywords') ?></th>
                                                                                <th><?= __('Image') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($region->homepage_ads as $homepageAds): ?>
                                    <tr>
                                        <td><?= h($homepageAds->id) ?></td>
                                        <td><?= h($homepageAds->type) ?></td>
                                        <td><?= h($homepageAds->status) ?></td>
                                        <td><?= h($homepageAds->tagline) ?></td>
                                        <td><?= h($homepageAds->rate_of_ad) ?></td>
                                        <td><?= h($homepageAds->redirectto) ?></td>
                                        <td><?= h($homepageAds->store_id) ?></td>
                                        <td><?= h($homepageAds->keywords) ?></td>
                                        <td><?= h($homepageAds->image) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'HomepageAds', 'action' => 'view', $homepageAds->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'HomepageAds', 'action' => 'edit', $homepageAds->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'HomepageAds', 'action' => 'delete', $homepageAds->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homepageAds->id), 'class' => 'btn btn-danger']) ?>

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
                                <h3 class="box-title"><?= __('Related SearchAds') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($region->search_ads)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Type') ?></th>
                                                                                <th><?= __('Status') ?></th>
                                                                                <th><?= __('Tagline') ?></th>
                                                                                <th><?= __('Rate Of Ad') ?></th>
                                                                                <th><?= __('Redirectto') ?></th>
                                                                                <th><?= __('Store Id') ?></th>
                                                                                <th><?= __('Keywords') ?></th>
                                                                                <th><?= __('Image') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($region->search_ads as $searchAds): ?>
                                    <tr>
                                        <td><?= h($searchAds->id) ?></td>
                                        <td><?= h($searchAds->type) ?></td>
                                        <td><?= h($searchAds->status) ?></td>
                                        <td><?= h($searchAds->tagline) ?></td>
                                        <td><?= h($searchAds->rate_of_ad) ?></td>
                                        <td><?= h($searchAds->redirectto) ?></td>
                                        <td><?= h($searchAds->store_id) ?></td>
                                        <td><?= h($searchAds->keywords) ?></td>
                                        <td><?= h($searchAds->image) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'SearchAds', 'action' => 'view', $searchAds->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'SearchAds', 'action' => 'edit', $searchAds->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'SearchAds', 'action' => 'delete', $searchAds->id], ['confirm' => __('Are you sure you want to delete # {0}?', $searchAds->id), 'class' => 'btn btn-danger']) ?>

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
                                <h3 class="box-title"><?= __('Related StoreAds') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($region->store_ads)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Type') ?></th>
                                                                                <th><?= __('Status') ?></th>
                                                                                <th><?= __('Tagline') ?></th>
                                                                                <th><?= __('Rate Of Ad') ?></th>
                                                                                <th><?= __('Redirectto') ?></th>
                                                                                <th><?= __('Store Id') ?></th>
                                                                                <th><?= __('Keywords') ?></th>
                                                                                <th><?= __('Image') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($region->store_ads as $storeAds): ?>
                                    <tr>
                                        <td><?= h($storeAds->id) ?></td>
                                        <td><?= h($storeAds->type) ?></td>
                                        <td><?= h($storeAds->status) ?></td>
                                        <td><?= h($storeAds->tagline) ?></td>
                                        <td><?= h($storeAds->rate_of_ad) ?></td>
                                        <td><?= h($storeAds->redirectto) ?></td>
                                        <td><?= h($storeAds->store_id) ?></td>
                                        <td><?= h($storeAds->keywords) ?></td>
                                        <td><?= h($storeAds->image) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'StoreAds', 'action' => 'view', $storeAds->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'StoreAds', 'action' => 'edit', $storeAds->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'StoreAds', 'action' => 'delete', $storeAds->id], ['confirm' => __('Are you sure you want to delete # {0}?', $storeAds->id), 'class' => 'btn btn-danger']) ?>

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
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Region'), ['action' => 'edit', $region->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Region'), ['action' => 'delete', $region->id], ['confirm' => __('Are you sure you want to delete # {0}?', $region->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Regions'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Region'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Homepage Ads'), ['controller' => 'HomepageAds', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Homepage Ad'), ['controller' => 'HomepageAds', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Search Ads'), ['controller' => 'SearchAds', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Search Ad'), ['controller' => 'SearchAds', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Store Ads'), ['controller' => 'StoreAds', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store Ad'), ['controller' => 'StoreAds', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


