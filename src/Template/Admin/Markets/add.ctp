<div class="row">
    <div class="col-lg-10">
        <div class = "markets form large-10 medium-9 columns">
            <?= $this->Form->create($market, ['type' => 'file']);
            ?>
            <fieldset>
                <legend><?= __('Add Market') ?></legend>
                <?php
                echo $this->Form->input('city_id', ['options' => $cities, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                echo $this->Form->input('market_name', ['class' => 'form-control', 'div' => ['class' => 'form-group']]);
                echo $this->Form->input('file_img', ['type' => 'file','class' => 'form-control', 'div' => ['class' => 'form-group']]);
                ?>
            </fieldset>
                <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('List Markets'), ['action' => 'index']) ?></li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
            <li class = "btn btn-default"><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
        </ul>
    </div>
</div>


