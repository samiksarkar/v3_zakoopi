<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="saleHotDeals view large-10 medium-9 columns">
                    <h2><?= h($saleHotDeal->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <h6 class="subheader"><?= __('Store') ?></h6>
                            <p><?= $saleHotDeal->has('store') ? $this->Html->link($saleHotDeal->store->id, ['controller' => 'Stores', 'action' => 'view', $saleHotDeal->store->id]) : '' ?></p>
                                                                                                                <b class="subheader"><?= __('Store Name') ?></b>
                            <p><?= h($saleHotDeal->store_name) ?></p>
                                                                                                                <b class="subheader"><?= __('Sale Amount') ?></b>
                            <p><?= h($saleHotDeal->sale_amount) ?></p>
                                                                                                                <b class="subheader"><?= __('Sale Description') ?></b>
                            <p><?= h($saleHotDeal->sale_description) ?></p>
                                                                                                                <b class="subheader"><?= __('Cover Photo') ?></b>
                            <p><?= h($saleHotDeal->cover_photo) ?></p>
                                                                                                                <b class="subheader"><?= __('Voucher Photo') ?></b>
                            <p><?= h($saleHotDeal->voucher_photo) ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($saleHotDeal->id) ?></p>
                                                        <b class="subheader"><?= __('Status') ?></b>
                            <p><?= $this->Number->format($saleHotDeal->status) ?></p>
                                                        <b class="subheader"><?= __('Voucher Count') ?></b>
                            <p><?= $this->Number->format($saleHotDeal->voucher_count) ?></p>
                                                    </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Created Date') ?></b>
                            <p><?= h($saleHotDeal->created_date) ?></p>
                                                        <b class="subheader"><?= __('Modified Date') ?></b>
                            <p><?= h($saleHotDeal->modified_date) ?></p>
                                                    </div>
                                                                    </div>
                                    </div>
                    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Sale Hot Deal'), ['action' => 'edit', $saleHotDeal->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Sale Hot Deal'), ['action' => 'delete', $saleHotDeal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saleHotDeal->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Sale Hot Deals'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Sale Hot Deal'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


