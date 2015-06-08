<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Team Like'), ['action' => 'edit', $teamLike->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Team Like'), ['action' => 'delete', $teamLike->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teamLike->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Team Likes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team Like'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="teamLikes view large-10 medium-9 columns">
    <h2><?= h($teamLike->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $teamLike->has('user') ? $this->Html->link($teamLike->user->first_name, ['controller' => 'Users', 'action' => 'view', $teamLike->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Team') ?></h6>
            <p><?= $teamLike->has('team') ? $this->Html->link($teamLike->team->title, ['controller' => 'Teams', 'action' => 'view', $teamLike->team->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($teamLike->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Timestamp') ?></h6>
            <p><?= h($teamLike->timestamp) ?></p>
        </div>
    </div>
</div>
