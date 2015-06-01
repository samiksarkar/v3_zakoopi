<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="styles view large-10 medium-9 columns">
                    <h2><?= h($style->name) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <b class="subheader"><?= __('Name') ?></b>
                            <p><?= h($style->name) ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($style->id) ?></p>
                                                    </div>
                                                                                                <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Is Visible') ?></b>
                            <p><?= $style->is_visible ? __('Yes') : __('No'); ?></p>
                                                    </div>
                                            </div>
                                    </div>
                                <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title"><?= __('Related StoreOfferings') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($style->store_offerings)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Store Id') ?></th>
                                                                                <th><?= __('Offering Id') ?></th>
                                                                                <th><?= __('Price Range From') ?></th>
                                                                                <th><?= __('Price Range To') ?></th>
                                                                                <th><?= __('Customization Possible') ?></th>
                                                                                <th><?= __('Customization Days') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($style->store_offerings as $storeOfferings): ?>
                                    <tr>
                                        <td><?= h($storeOfferings->id) ?></td>
                                        <td><?= h($storeOfferings->store_id) ?></td>
                                        <td><?= h($storeOfferings->offering_id) ?></td>
                                        <td><?= h($storeOfferings->price_range_from) ?></td>
                                        <td><?= h($storeOfferings->price_range_to) ?></td>
                                        <td><?= h($storeOfferings->customization_possible) ?></td>
                                        <td><?= h($storeOfferings->customization_days) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'StoreOfferings', 'action' => 'view', $storeOfferings->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'StoreOfferings', 'action' => 'edit', $storeOfferings->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'StoreOfferings', 'action' => 'delete', $storeOfferings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $storeOfferings->id), 'class' => 'btn btn-danger']) ?>

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
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Style'), ['action' => 'edit', $style->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Style'), ['action' => 'delete', $style->id], ['confirm' => __('Are you sure you want to delete # {0}?', $style->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Styles'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Style'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Store Offerings'), ['controller' => 'StoreOfferings', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store Offering'), ['controller' => 'StoreOfferings', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


