<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="articleHits view large-10 medium-9 columns">
                    <h2><?= h($articleHit->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <h6 class="subheader"><?= __('Article') ?></h6>
                            <p><?= $articleHit->has('article') ? $this->Html->link($articleHit->article->title, ['controller' => 'Articles', 'action' => 'view', $articleHit->article->id]) : '' ?></p>
                                                                                                                <h6 class="subheader"><?= __('User') ?></h6>
                            <p><?= $articleHit->has('user') ? $this->Html->link($articleHit->user->id, ['controller' => 'Users', 'action' => 'view', $articleHit->user->id]) : '' ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($articleHit->id) ?></p>
                                                    </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Created') ?></b>
                            <p><?= h($articleHit->created) ?></p>
                                                    </div>
                                                                    </div>
                                    </div>
                    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Article Hit'), ['action' => 'edit', $articleHit->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Article Hit'), ['action' => 'delete', $articleHit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articleHit->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Article Hits'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Article Hit'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


