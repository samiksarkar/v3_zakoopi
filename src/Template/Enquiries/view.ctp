<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="enquiries view large-10 medium-9 columns">
                    <h2><?= h($enquiry->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <b class="subheader"><?= __('Store Name') ?></b>
                            <p><?= h($enquiry->store_name) ?></p>
                                                                                                                <b class="subheader"><?= __('Customer Name') ?></b>
                            <p><?= h($enquiry->customer_name) ?></p>
                                                                                                                <b class="subheader"><?= __('Contact Time') ?></b>
                            <p><?= h($enquiry->contact_time) ?></p>
                                                                                                                <b class="subheader"><?= __('Store Address') ?></b>
                            <p><?= h($enquiry->store_address) ?></p>
                                                                                                                <b class="subheader"><?= __('IsOwner') ?></b>
                            <p><?= h($enquiry->isOwner) ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($enquiry->id) ?></p>
                                                        <b class="subheader"><?= __('Contact Number') ?></b>
                            <p><?= $this->Number->format($enquiry->contact_number) ?></p>
                                                    </div>
                                                                                            </div>
                                    </div>
                    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Enquiry'), ['action' => 'edit', $enquiry->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Enquiry'), ['action' => 'delete', $enquiry->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enquiry->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Enquiries'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Enquiry'), ['action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


