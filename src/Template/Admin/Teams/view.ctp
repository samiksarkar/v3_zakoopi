<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Team'), ['action' => 'edit', $team->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Team'), ['action' => 'delete', $team->id], ['confirm' => __('Are you sure you want to delete # {0}?', $team->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Team Likes'), ['controller' => 'TeamLikes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team Like'), ['controller' => 'TeamLikes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Team Users'), ['controller' => 'TeamUsers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team User'), ['controller' => 'TeamUsers', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="teams view large-10 medium-9 columns">
    <h2><?= h($team->title) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Title') ?></h6>
            <p><?= h($team->title) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($team->id) ?></p>
            <h6 class="subheader"><?= __('Hits') ?></h6>
            <p><?= $this->Number->format($team->hits) ?></p>
            <h6 class="subheader"><?= __('Img') ?></h6>
            <p><?= $this->Number->format($team->img) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Timestamp') ?></h6>
            <p><?= h($team->timestamp) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related TeamLikes') ?></h4>
    <?php if (!empty($team->team_likes)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Team Id') ?></th>
            <th><?= __('Timestamp') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($team->team_likes as $teamLikes): ?>
        <tr>
            <td><?= h($teamLikes->id) ?></td>
            <td><?= h($teamLikes->user_id) ?></td>
            <td><?= h($teamLikes->team_id) ?></td>
            <td><?= h($teamLikes->timestamp) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'TeamLikes', 'action' => 'view', $teamLikes->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'TeamLikes', 'action' => 'edit', $teamLikes->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'TeamLikes', 'action' => 'delete', $teamLikes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teamLikes->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related TeamUsers') ?></h4>
    <?php if (!empty($team->team_users)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Team Id') ?></th>
            <th><?= __('Timestamp') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($team->team_users as $teamUsers): ?>
        <tr>
            <td><?= h($teamUsers->id) ?></td>
            <td><?= h($teamUsers->user_id) ?></td>
            <td><?= h($teamUsers->team_id) ?></td>
            <td><?= h($teamUsers->timestamp) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'TeamUsers', 'action' => 'view', $teamUsers->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'TeamUsers', 'action' => 'edit', $teamUsers->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'TeamUsers', 'action' => 'delete', $teamUsers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teamUsers->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
