<div class="row">
    <div class="col-lg-10">
        <div class = "articlesSorttrendings form large-10 medium-9 columns">
            <?= $this->Form->create($articlesSorttrending);
            ?>
            <fieldset>
                <legend><?= __('Edit Articles Sorttrending') ?></legend>
                <?php
                            echo $this->Form->input('city_id', ['options' => $cities, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                            echo $this->Form->input('article_id', ['options' => $articles, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                                echo $this->Form->input('sort_order', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                        
                
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
        </div>
    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
                        <li class="btn btn-default"><?=
                $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $articlesSorttrending->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $articlesSorttrending->id)]
                )
                ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Articles Sorttrendings'), ['action' => 'index']) ?></li>
                        <li class="btn btn-default"><?=
                $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>

            
