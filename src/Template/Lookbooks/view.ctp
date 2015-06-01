<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="lookbooks view large-10 medium-9 columns">
                    <h2><?= h($lookbook->title) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <b class="subheader"><?= __('Title') ?></b>
                            <p><?= h($lookbook->title) ?></p>
                                                                                                                <h6 class="subheader"><?= __('User') ?></h6>
                            <p><?= $lookbook->has('user') ? $this->Html->link($lookbook->user->id, ['controller' => 'Users', 'action' => 'view', $lookbook->user->id]) : '' ?></p>
                                                                                                                <b class="subheader"><?= __('Status') ?></b>
                            <p><?= h($lookbook->status) ?></p>
                                                                                                                <b class="subheader"><?= __('Timesstamp') ?></b>
                            <p><?= h($lookbook->timesstamp) ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($lookbook->id) ?></p>
                                                        <b class="subheader"><?= __('Lookbookcomment Count') ?></b>
                            <p><?= $this->Number->format($lookbook->lookbookcomment_count) ?></p>
                                                        <b class="subheader"><?= __('Lookbooklike Count') ?></b>
                            <p><?= $this->Number->format($lookbook->lookbooklike_count) ?></p>
                                                        <b class="subheader"><?= __('View Count') ?></b>
                            <p><?= $this->Number->format($lookbook->view_count) ?></p>
                                                    </div>
                                                                                            </div>
                                                            <div class="row texts">
                        <div class="col-lg-12">
                            <b class="subheader"><?= __('Tags') ?></b>
                            <?= $this->Text->autoParagraph(h($lookbook->tags)); ?>

                        </div>
                    </div>
                                                        </div>
                                <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title"><?= __('Related Cards') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($lookbook->cards)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Photo Path') ?></th>
                                                                                <th><?= __('Lookbook Id') ?></th>
                                                                                <th><?= __('Description') ?></th>
                                                                                <th><?= __('Timestamp') ?></th>
                                                                                <th><?= __('Status') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($lookbook->cards as $cards): ?>
                                    <tr>
                                        <td><?= h($cards->id) ?></td>
                                        <td><?= h($cards->photo_path) ?></td>
                                        <td><?= h($cards->lookbook_id) ?></td>
                                        <td><?= h($cards->description) ?></td>
                                        <td><?= h($cards->timestamp) ?></td>
                                        <td><?= h($cards->status) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'Cards', 'action' => 'view', $cards->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'Cards', 'action' => 'edit', $cards->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cards', 'action' => 'delete', $cards->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cards->id), 'class' => 'btn btn-danger']) ?>

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
                                <h3 class="box-title"><?= __('Related Lookbookcomments') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($lookbook->lookbookcomments)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Lookbook Id') ?></th>
                                                                                <th><?= __('User Id') ?></th>
                                                                                <th><?= __('Comment') ?></th>
                                                                                <th><?= __('Timestamp') ?></th>
                                                                                <th><?= __('Status') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($lookbook->lookbookcomments as $lookbookcomments): ?>
                                    <tr>
                                        <td><?= h($lookbookcomments->id) ?></td>
                                        <td><?= h($lookbookcomments->lookbook_id) ?></td>
                                        <td><?= h($lookbookcomments->user_id) ?></td>
                                        <td><?= h($lookbookcomments->comment) ?></td>
                                        <td><?= h($lookbookcomments->timestamp) ?></td>
                                        <td><?= h($lookbookcomments->status) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'Lookbookcomments', 'action' => 'view', $lookbookcomments->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'Lookbookcomments', 'action' => 'edit', $lookbookcomments->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Lookbookcomments', 'action' => 'delete', $lookbookcomments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lookbookcomments->id), 'class' => 'btn btn-danger']) ?>

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
                                <h3 class="box-title"><?= __('Related Lookbooklikes') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($lookbook->lookbooklikes)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Lookbook Id') ?></th>
                                                                                <th><?= __('User Id') ?></th>
                                                                                <th><?= __('Timestamp') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($lookbook->lookbooklikes as $lookbooklikes): ?>
                                    <tr>
                                        <td><?= h($lookbooklikes->id) ?></td>
                                        <td><?= h($lookbooklikes->lookbook_id) ?></td>
                                        <td><?= h($lookbooklikes->user_id) ?></td>
                                        <td><?= h($lookbooklikes->timestamp) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'Lookbooklikes', 'action' => 'view', $lookbooklikes->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'Lookbooklikes', 'action' => 'edit', $lookbooklikes->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Lookbooklikes', 'action' => 'delete', $lookbooklikes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lookbooklikes->id), 'class' => 'btn btn-danger']) ?>

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
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Lookbook'), ['action' => 'edit', $lookbook->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Lookbook'), ['action' => 'delete', $lookbook->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lookbook->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Lookbooks'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Lookbook'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Cards'), ['controller' => 'Cards', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Card'), ['controller' => 'Cards', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Lookbookcomments'), ['controller' => 'Lookbookcomments', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Lookbookcomment'), ['controller' => 'Lookbookcomments', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Lookbooklikes'), ['controller' => 'Lookbooklikes', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Lookbooklike'), ['controller' => 'Lookbooklikes', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


