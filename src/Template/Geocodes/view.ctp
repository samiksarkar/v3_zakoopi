<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="geocodes view large-10 medium-9 columns">
                    <h2><?= h($geocode->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <b class="subheader"><?= __('Place') ?></b>
                            <p><?= h($geocode->place) ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($geocode->id) ?></p>
                                                        <b class="subheader"><?= __('Lat') ?></b>
                            <p><?= $this->Number->format($geocode->lat) ?></p>
                                                        <b class="subheader"><?= __('Lng') ?></b>
                            <p><?= $this->Number->format($geocode->lng) ?></p>
                                                    </div>
                                                                                            </div>
                                    </div>
                    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Geocode'), ['action' => 'edit', $geocode->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Geocode'), ['action' => 'delete', $geocode->id], ['confirm' => __('Are you sure you want to delete # {0}?', $geocode->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Geocodes'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Geocode'), ['action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


