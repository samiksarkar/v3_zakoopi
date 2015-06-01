<div class="row">
    <div class="col-lg-10">
        <div class = "articleHits form large-10 medium-9 columns">
            <?= $this->Form->create($articleHit);
            ?>
            <fieldset>
                <legend><?= __('Add Article Hit') ?></legend>
                <?php
                            echo $this->Form->input('article_id', ['options' => $articles, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                            echo $this->Form->input('user_id', ['options' => $users, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                        
                
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
        </div>
    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
                        <li class="btn btn-default"><?= $this->Html->link(__('List Article Hits'), ['action' => 'index']) ?></li>
                        <li class="btn btn-default"><?=
                $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>

            
