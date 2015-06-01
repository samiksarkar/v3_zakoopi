<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="offerings view large-10 medium-9 columns">
                    <h2><?= h($offering->name) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <b class="subheader"><?= __('Name') ?></b>
                            <p><?= h($offering->name) ?></p>
                                                                                                                <b class="subheader"><?= __('Category') ?></b>
                            <p><?= h($offering->category) ?></p>
                                                                                                                <b class="subheader"><?= __('Timestamp') ?></b>
                            <p><?= h($offering->timestamp) ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($offering->id) ?></p>
                                                    </div>
                                                                                            </div>
                                                            <div class="row texts">
                        <div class="col-lg-12">
                            <b class="subheader"><?= __('Gender') ?></b>
                            <?= $this->Text->autoParagraph(h($offering->gender)); ?>

                        </div>
                    </div>
                                                        </div>
                                <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title"><?= __('Related Occasions') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($offering->occasions)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Occasion') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($offering->occasions as $occasions): ?>
                                    <tr>
                                        <td><?= h($occasions->id) ?></td>
                                        <td><?= h($occasions->occasion) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'Occasions', 'action' => 'view', $occasions->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'Occasions', 'action' => 'edit', $occasions->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Occasions', 'action' => 'delete', $occasions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $occasions->id), 'class' => 'btn btn-danger']) ?>

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
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Offering'), ['action' => 'edit', $offering->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Offering'), ['action' => 'delete', $offering->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offering->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Offerings'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Offering'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Occasions'), ['controller' => 'Occasions', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Occasion'), ['controller' => 'Occasions', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


