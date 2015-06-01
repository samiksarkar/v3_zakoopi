<div class="row">
    <div class="col-lg-10">
        <div class = "articleImages form large-10 medium-9 columns">
            <?= $this->Form->create($articleImage);
            ?>
            <fieldset>
                <legend><?= __('Add Article Image') ?></legend>
                <?php
                            echo $this->Form->input('article_id', ['options' => $articles, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                                echo $this->Form->input('name', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('coverPhoto', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('title', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('url', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                        
                
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
        </div>
    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
                        <li class="btn btn-default"><?= $this->Html->link(__('List Article Images'), ['action' => 'index']) ?></li>
                        <li class="btn btn-default"><?=
                $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>

            
