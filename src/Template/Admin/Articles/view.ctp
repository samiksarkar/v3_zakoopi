<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="articles view large-10 medium-9 columns">
                    <h2><?= h($article->title) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <h6 class="subheader"><?= __('City') ?></h6>
                            <p><?= $article->has('city') ? $this->Html->link($article->city->id, ['controller' => 'Cities', 'action' => 'view', $article->city->id]) : '' ?></p>
                                                                                                                <b class="subheader"><?= __('Title') ?></b>
                            <p><?= h($article->title) ?></p>
                                                                                                                <b class="subheader"><?= __('Slug') ?></b>
                            <p><?= h($article->slug) ?></p>
                                                                                                                <b class="subheader"><?= __('Approved') ?></b>
                            <p><?= h($article->approved) ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($article->id) ?></p>
                                                        <b class="subheader"><?= __('Status') ?></b>
                            <p><?= $this->Number->format($article->status) ?></p>
                                                        <b class="subheader"><?= __('Sponsored') ?></b>
                            <p><?= $this->Number->format($article->sponsored) ?></p>
                                                        <b class="subheader"><?= __('Trending') ?></b>
                            <p><?= $this->Number->format($article->trending) ?></p>
                                                        <b class="subheader"><?= __('Hits') ?></b>
                            <p><?= $this->Number->format($article->hits) ?></p>
                                                        <b class="subheader"><?= __('Sort') ?></b>
                            <p><?= $this->Number->format($article->sort) ?></p>
                                                        <b class="subheader"><?= __('CreatedBy') ?></b>
                            <p><?= $this->Number->format($article->createdBy) ?></p>
                                                        <b class="subheader"><?= __('ModifiedBy') ?></b>
                            <p><?= $this->Number->format($article->modifiedBy) ?></p>
                                                    </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Created') ?></b>
                            <p><?= h($article->created) ?></p>
                                                        <b class="subheader"><?= __('Modified') ?></b>
                            <p><?= h($article->modified) ?></p>
                                                    </div>
                                                                    </div>
                                                            <div class="row texts">
                        <div class="col-lg-12">
                            <b class="subheader"><?= __('Description') ?></b>
                            <?= $this->Text->autoParagraph(h($article->description)); ?>

                        </div>
                    </div>
                                        <div class="row texts">
                        <div class="col-lg-12">
                            <b class="subheader"><?= __('Summary') ?></b>
                            <?= $this->Text->autoParagraph(h($article->summary)); ?>

                        </div>
                    </div>
                                        <div class="row texts">
                        <div class="col-lg-12">
                            <b class="subheader"><?= __('Tags') ?></b>
                            <?= $this->Text->autoParagraph(h($article->tags)); ?>

                        </div>
                    </div>
                                                        </div>
                                <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title"><?= __('Related ArticleHits') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($article->article_hits)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Article Id') ?></th>
                                                                                <th><?= __('User Id') ?></th>
                                                                                <th><?= __('Created') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($article->article_hits as $articleHits): ?>
                                    <tr>
                                        <td><?= h($articleHits->id) ?></td>
                                        <td><?= h($articleHits->article_id) ?></td>
                                        <td><?= h($articleHits->user_id) ?></td>
                                        <td><?= h($articleHits->created) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'ArticleHits', 'action' => 'view', $articleHits->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'ArticleHits', 'action' => 'edit', $articleHits->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ArticleHits', 'action' => 'delete', $articleHits->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articleHits->id), 'class' => 'btn btn-danger']) ?>

            </td>
                                            </tr>

                                            <?php endforeach;
                                            ?>
                                </table>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                        <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title"><?= __('Related ArticleImages') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($article->article_images)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Article Id') ?></th>
                                                                                <th><?= __('Name') ?></th>
                                                                                <th><?= __('CoverPhoto') ?></th>
                                                                                <th><?= __('Title') ?></th>
                                                                                <th><?= __('Url') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($article->article_images as $articleImages): ?>
                                    <tr>
                                        <td><?= h($articleImages->id) ?></td>
                                        <td><?= h($articleImages->article_id) ?></td>
                                        <td><?= h($articleImages->name) ?></td>
                                        <td><?= h($articleImages->coverPhoto) ?></td>
                                        <td><?= h($articleImages->title) ?></td>
                                        <td><?= h($articleImages->url) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'ArticleImages', 'action' => 'view', $articleImages->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'ArticleImages', 'action' => 'edit', $articleImages->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ArticleImages', 'action' => 'delete', $articleImages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articleImages->id), 'class' => 'btn btn-danger']) ?>

            </td>
                                            </tr>

                                            <?php endforeach;
                                            ?>
                                </table>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                        <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title"><?= __('Related ArticleStores') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($article->article_stores)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Article Id') ?></th>
                                                                                <th><?= __('Store Id') ?></th>
                                                                                <th><?= __('Name') ?></th>
                                                                                <th><?= __('Review') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($article->article_stores as $articleStores): ?>
                                    <tr>
                                        <td><?= h($articleStores->id) ?></td>
                                        <td><?= h($articleStores->article_id) ?></td>
                                        <td><?= h($articleStores->store_id) ?></td>
                                        <td><?= h($articleStores->name) ?></td>
                                        <td><?= h($articleStores->review) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'ArticleStores', 'action' => 'view', $articleStores->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'ArticleStores', 'action' => 'edit', $articleStores->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ArticleStores', 'action' => 'delete', $articleStores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articleStores->id), 'class' => 'btn btn-danger']) ?>

            </td>
                                            </tr>

                                            <?php endforeach;
                                            ?>
                                </table>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Article'), ['action' => 'edit', $article->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Article'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Article'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Article Hits'), ['controller' => 'ArticleHits', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Article Hit'), ['controller' => 'ArticleHits', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Article Images'), ['controller' => 'ArticleImages', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Article Image'), ['controller' => 'ArticleImages', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Article Stores'), ['controller' => 'ArticleStores', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Article Store'), ['controller' => 'ArticleStores', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


