<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="occasions view large-10 medium-9 columns">
                    <h2><?= h($occasion->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <b class="subheader"><?= __('Occasion') ?></b>
                            <p><?= h($occasion->occasion) ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($occasion->id) ?></p>
                                                    </div>
                                                                                            </div>
                                    </div>
                                <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title"><?= __('Related Offerings') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($occasion->offerings)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Name') ?></th>
                                                                                <th><?= __('Gender') ?></th>
                                                                                <th><?= __('Category') ?></th>
                                                                                <th><?= __('Timestamp') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($occasion->offerings as $offerings): ?>
                                    <tr>
                                        <td><?= h($offerings->id) ?></td>
                                        <td><?= h($offerings->name) ?></td>
                                        <td><?= h($offerings->gender) ?></td>
                                        <td><?= h($offerings->category) ?></td>
                                        <td><?= h($offerings->timestamp) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'Offerings', 'action' => 'view', $offerings->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'Offerings', 'action' => 'edit', $offerings->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Offerings', 'action' => 'delete', $offerings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offerings->id), 'class' => 'btn btn-danger']) ?>

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
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Occasion'), ['action' => 'edit', $occasion->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Occasion'), ['action' => 'delete', $occasion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $occasion->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Occasions'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Occasion'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Offerings'), ['controller' => 'Offerings', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Offering'), ['controller' => 'Offerings', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


