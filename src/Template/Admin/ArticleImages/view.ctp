<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="articleImages view large-10 medium-9 columns">
                    <h2><?= h($articleImage->name) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <h6 class="subheader"><?= __('Article') ?></h6>
                            <p><?= $articleImage->has('article') ? $this->Html->link($articleImage->article->title, ['controller' => 'Articles', 'action' => 'view', $articleImage->article->id]) : '' ?></p>
                                                                                                                <b class="subheader"><?= __('Name') ?></b>
                            <p><?= h($articleImage->name) ?></p>
                                                                                                                <b class="subheader"><?= __('Title') ?></b>
                            <p><?= h($articleImage->title) ?></p>
                                                                                                                <b class="subheader"><?= __('Url') ?></b>
                            <p><?= h($articleImage->url) ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($articleImage->id) ?></p>
                                                        <b class="subheader"><?= __('CoverPhoto') ?></b>
                            <p><?= $this->Number->format($articleImage->coverPhoto) ?></p>
                                                    </div>
                                                                                            </div>
                                    </div>
                    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Article Image'), ['action' => 'edit', $articleImage->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Article Image'), ['action' => 'delete', $articleImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articleImage->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Article Images'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Article Image'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


