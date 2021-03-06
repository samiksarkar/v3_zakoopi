<div class="row">
    <div class="col-lg-10">
        <div class = "enquiries form large-10 medium-9 columns">
            <?= $this->Form->create($enquiry);
            ?>
            <fieldset>
                <legend><?= __('Add Enquiry') ?></legend>
                <?php
                                echo $this->Form->input('store_name', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('customer_name', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('contact_number', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('contact_time', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('store_address', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('isOwner', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                        
                
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
        </div>
    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
                        <li class="btn btn-default"><?= $this->Html->link(__('List Enquiries'), ['action' => 'index']) ?></li>
                </ul>
    </div>
</div>

            
