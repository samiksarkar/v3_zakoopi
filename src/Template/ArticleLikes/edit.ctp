<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $articleLike->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $articleLike->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Article Likes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="articleLikes form large-10 medium-9 columns">
    <?= $this->Form->create($articleLike) ?>
    <fieldset>
        <legend><?= __('Edit Article Like') ?></legend>
        <?php
            echo $this->Form->input('article_id', ['options' => $articles]);
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('timestamp');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
