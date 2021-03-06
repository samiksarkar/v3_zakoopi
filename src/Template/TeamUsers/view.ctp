<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Team User'), ['action' => 'edit', $teamUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Team User'), ['action' => 'delete', $teamUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teamUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Team Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="teamUsers view large-10 medium-9 columns">
    <h2><?= h($teamUser->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $teamUser->has('user') ? $this->Html->link($teamUser->user->first_name, ['controller' => 'Users', 'action' => 'view', $teamUser->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Team') ?></h6>
            <p><?= $teamUser->has('team') ? $this->Html->link($teamUser->team->title, ['controller' => 'Teams', 'action' => 'view', $teamUser->team->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($teamUser->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Timestamp') ?></h6>
            <p><?= h($teamUser->timestamp) ?></p>
        </div>
    </div>
</div>
