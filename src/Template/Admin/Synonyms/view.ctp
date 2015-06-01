<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="synonyms view large-10 medium-9 columns">
                    <h2><?= h($synonym->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <h6 class="subheader"><?= __('City') ?></h6>
                            <p><?= $synonym->has('city') ? $this->Html->link($synonym->city->id, ['controller' => 'Cities', 'action' => 'view', $synonym->city->id]) : '' ?></p>
                                                                                                                <b class="subheader"><?= __('Synonym Name') ?></b>
                            <p><?= h($synonym->synonym_name) ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($synonym->id) ?></p>
                                                    </div>
                                                                                            </div>
                                    </div>
                    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Synonym'), ['action' => 'edit', $synonym->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Synonym'), ['action' => 'delete', $synonym->id], ['confirm' => __('Are you sure you want to delete # {0}?', $synonym->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Synonyms'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Synonym'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


