<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="articlesSorttrendings view large-10 medium-9 columns">
                    <h2><?= h($articlesSorttrending->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <h6 class="subheader"><?= __('City') ?></h6>
                            <p><?= $articlesSorttrending->has('city') ? $this->Html->link($articlesSorttrending->city->id, ['controller' => 'Cities', 'action' => 'view', $articlesSorttrending->city->id]) : '' ?></p>
                                                                                                                <h6 class="subheader"><?= __('Article') ?></h6>
                            <p><?= $articlesSorttrending->has('article') ? $this->Html->link($articlesSorttrending->article->title, ['controller' => 'Articles', 'action' => 'view', $articlesSorttrending->article->id]) : '' ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($articlesSorttrending->id) ?></p>
                                                        <b class="subheader"><?= __('Sort Order') ?></b>
                            <p><?= $this->Number->format($articlesSorttrending->sort_order) ?></p>
                                                    </div>
                                                                                            </div>
                                    </div>
                    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Articles Sorttrending'), ['action' => 'edit', $articlesSorttrending->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Articles Sorttrending'), ['action' => 'delete', $articlesSorttrending->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articlesSorttrending->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Articles Sorttrendings'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Articles Sorttrending'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


