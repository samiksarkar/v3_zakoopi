<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Teams'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Team Likes'), ['controller' => 'TeamLikes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team Like'), ['controller' => 'TeamLikes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Team Users'), ['controller' => 'TeamUsers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team User'), ['controller' => 'TeamUsers', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="teams form large-10 medium-9 columns">
    <?= $this->Form->create($team,['type'=>'file']) ?>
    <fieldset>
        <legend><?= __('Add Team') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('timestamp');
            echo $this->Form->input('hits');
            echo $this->Form->input('file_img',['type'=>'file']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
