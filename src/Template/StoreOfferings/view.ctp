<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="storeOfferings view large-10 medium-9 columns">
                    <h2><?= h($storeOffering->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <h6 class="subheader"><?= __('Store') ?></h6>
                            <p><?= $storeOffering->has('store') ? $this->Html->link($storeOffering->store->id, ['controller' => 'Stores', 'action' => 'view', $storeOffering->store->id]) : '' ?></p>
                                                                                                                <h6 class="subheader"><?= __('Offering') ?></h6>
                            <p><?= $storeOffering->has('offering') ? $this->Html->link($storeOffering->offering->name, ['controller' => 'Offerings', 'action' => 'view', $storeOffering->offering->id]) : '' ?></p>
                                                                                                                <b class="subheader"><?= __('Price Range From') ?></b>
                            <p><?= h($storeOffering->price_range_from) ?></p>
                                                                                                                <b class="subheader"><?= __('Price Range To') ?></b>
                            <p><?= h($storeOffering->price_range_to) ?></p>
                                                                                                                <b class="subheader"><?= __('Customization Days') ?></b>
                            <p><?= h($storeOffering->customization_days) ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($storeOffering->id) ?></p>
                                                    </div>
                                                                                                <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Customization Possible') ?></b>
                            <p><?= $storeOffering->customization_possible ? __('Yes') : __('No'); ?></p>
                                                    </div>
                                            </div>
                                    </div>
                                <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title"><?= __('Related Fabrics') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($storeOffering->fabrics)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Name') ?></th>
                                                                                <th><?= __('Is Visible') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($storeOffering->fabrics as $fabrics): ?>
                                    <tr>
                                        <td><?= h($fabrics->id) ?></td>
                                        <td><?= h($fabrics->name) ?></td>
                                        <td><?= h($fabrics->is_visible) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'Fabrics', 'action' => 'view', $fabrics->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'Fabrics', 'action' => 'edit', $fabrics->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Fabrics', 'action' => 'delete', $fabrics->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fabrics->id), 'class' => 'btn btn-danger']) ?>

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
                                <h3 class="box-title"><?= __('Related Styles') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($storeOffering->styles)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Name') ?></th>
                                                                                <th><?= __('Is Visible') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($storeOffering->styles as $styles): ?>
                                    <tr>
                                        <td><?= h($styles->id) ?></td>
                                        <td><?= h($styles->name) ?></td>
                                        <td><?= h($styles->is_visible) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'Styles', 'action' => 'view', $styles->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'Styles', 'action' => 'edit', $styles->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Styles', 'action' => 'delete', $styles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $styles->id), 'class' => 'btn btn-danger']) ?>

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
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Store Offering'), ['action' => 'edit', $storeOffering->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Store Offering'), ['action' => 'delete', $storeOffering->id], ['confirm' => __('Are you sure you want to delete # {0}?', $storeOffering->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Store Offerings'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store Offering'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Offerings'), ['controller' => 'Offerings', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Offering'), ['controller' => 'Offerings', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Fabrics'), ['controller' => 'Fabrics', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Fabric'), ['controller' => 'Fabrics', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Styles'), ['controller' => 'Styles', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Style'), ['controller' => 'Styles', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


