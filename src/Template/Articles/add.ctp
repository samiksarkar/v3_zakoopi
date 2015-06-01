<div class="row">
    <div class="col-lg-10">
        <div class = "articles form large-10 medium-9 columns">
            <?= $this->Form->create($article);
            ?>
            <fieldset>
                <legend><?= __('Add Article') ?></legend>
                <?php
                            echo $this->Form->input('city_id', ['options' => $cities, 'empty' => true, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                                echo $this->Form->input('title', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('slug', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('description', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('summary', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('tags', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('status', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('sponsored', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('trending', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('hits', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('sort', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('createdBy', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('approved', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('modifiedBy', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                        
                
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
        </div>
    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
                        <li class="btn btn-default"><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?></li>
                        <li class="btn btn-default"><?=
                $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Article Hits'), ['controller' => 'ArticleHits', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Article Hit'), ['controller' => 'ArticleHits', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Article Images'), ['controller' => 'ArticleImages', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Article Image'), ['controller' => 'ArticleImages', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Article Stores'), ['controller' => 'ArticleStores', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Article Store'), ['controller' => 'ArticleStores', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>

            
