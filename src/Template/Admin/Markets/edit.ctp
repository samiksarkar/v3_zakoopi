<?= $this->Html->script('cropper.min.js'); ?>
<?= $this->Html->css('cropper.min.css'); ?>
<div class="row">
    <div class="col-lg-10">
        <div class = "markets form large-10 medium-9 columns">
            <div class="box box-default">
                <div class="box-header">
                    Edit Market
                </div>
                <div class="box-body">
                    <?= $this->Form->create($market,['type' => 'file']); ?>
                        <fieldset>
                            <legend><?= __('Edit Market') ?></legend>
                            <?php
                                echo $this->Form->input('city_id', ['options' => $cities, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                                echo $this->Form->input('market_name', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('file_img', ['type' => 'file','class' => 'form-control', 'div' => ['class' => 'form-group']]);
                            ?>
                        </fieldset>
                        <?= $this->Form->button(__('Submit')) ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
            <!-- Wrap the image or canvas with a block element -->
            <div class="crp-container">
              <img src="/<?= $market->img; ?>">
            </div>
            <script type="text/javascript">
                $('.crp-container > img').cropper({
                    aspectRatio: 16 / 9,
                    autoCropArea: 0.65,
                    strict: true,
                    guides: true,
                    highlight: true,
                    dragCrop: false,
                    movable: true,
                    resizable: true,
                    crop: function(data) {
                        console.log(data);
                      // Output the result data for cropping image.
                    }
                  });
            </script>
        </div>
    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
                        <li class="btn btn-default"><?=
                $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $market->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $market->id)]
                )
                ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Markets'), ['action' => 'index']) ?></li>
                        <li class="btn btn-default"><?=
                $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>

            
