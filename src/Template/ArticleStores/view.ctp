<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="articleStores view large-10 medium-9 columns">
                    <h2><?= h($articleStore->name) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <h6 class="subheader"><?= __('Article') ?></h6>
                            <p><?= $articleStore->has('article') ? $this->Html->link($articleStore->article->title, ['controller' => 'Articles', 'action' => 'view', $articleStore->article->id]) : '' ?></p>
                                                                                                                <h6 class="subheader"><?= __('Store') ?></h6>
                            <p><?= $articleStore->has('store') ? $this->Html->link($articleStore->store->id, ['controller' => 'Stores', 'action' => 'view', $articleStore->store->id]) : '' ?></p>
                                                                                                                <b class="subheader"><?= __('Name') ?></b>
                            <p><?= h($articleStore->name) ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($articleStore->id) ?></p>
                                                    </div>
                                                                                            </div>
                                                            <div class="row texts">
                        <div class="col-lg-12">
                            <b class="subheader"><?= __('Review') ?></b>
                            <?= $this->Text->autoParagraph(h($articleStore->review)); ?>

                        </div>
                    </div>
                                                        </div>
                    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Article Store'), ['action' => 'edit', $articleStore->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Article Store'), ['action' => 'delete', $articleStore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articleStore->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Article Stores'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Article Store'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


