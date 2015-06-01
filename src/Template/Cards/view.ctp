<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="cards view large-10 medium-9 columns">
                    <h2><?= h($card->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <b class="subheader"><?= __('Photo Path') ?></b>
                            <p><?= h($card->photo_path) ?></p>
                                                                                                                <h6 class="subheader"><?= __('Lookbook') ?></h6>
                            <p><?= $card->has('lookbook') ? $this->Html->link($card->lookbook->title, ['controller' => 'Lookbooks', 'action' => 'view', $card->lookbook->id]) : '' ?></p>
                                                                                                                <b class="subheader"><?= __('Timestamp') ?></b>
                            <p><?= h($card->timestamp) ?></p>
                                                                                                                <b class="subheader"><?= __('Status') ?></b>
                            <p><?= h($card->status) ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($card->id) ?></p>
                                                    </div>
                                                                                            </div>
                                                            <div class="row texts">
                        <div class="col-lg-12">
                            <b class="subheader"><?= __('Description') ?></b>
                            <?= $this->Text->autoParagraph(h($card->description)); ?>

                        </div>
                    </div>
                                                        </div>
                    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Card'), ['action' => 'edit', $card->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Card'), ['action' => 'delete', $card->id], ['confirm' => __('Are you sure you want to delete # {0}?', $card->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Cards'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Card'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Lookbooks'), ['controller' => 'Lookbooks', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Lookbook'), ['controller' => 'Lookbooks', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


