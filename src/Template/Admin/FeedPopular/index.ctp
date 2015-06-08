<?= $this->Html->css(['//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.css']); ?>
<div class="row" id="FeedPopular-Index">

    <div class="col-lg-10">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"></h3>
                <div class="box-tools">

                </div>
            </div>
            <div class="box-body">
                <h2>Card in Popular Feed</h2>
                <sub data-bind="visible:updating">Updating Order...</sub>
                <div data-bind="foreach:list, uiSortableList: list " style="min-height: 500px;">

                    <div style="padding: 4px; border-radius: 4px; box-shadow: 2px 2px 3px #eee; border:grey; background: #eee; margin: 4px; min-height: 40px">
                        <p class="bg-light-blue-gradient"> ID:<!-- ko text:id --><!-- /ko -->) Card Type: <!-- ko text:model --><!-- /ko --></p>
                        <div>
                            <table>
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<script>
    ko.bindingHandlers.uiSortableList = {
        init: function (element, valueAccessor, allBindingsAccesor, context) {
            var $element = $(element),
                    list = valueAccessor();

            $element.sortable({
                containment: 'parent',
                placeholder: 'placeholder',
                update: function (event, ui) {
                    var actualArray = list(),
                            item = ko.dataFor(ui.item[0]),
                            newIndex = ko.utils.arrayIndexOf(ui.item.parent().children(), ui.item[0]);
                    if (newIndex >= list().length)
                        newIndex = list().length - 1;
                    if (newIndex < 0)
                        newIndex = 0;
                    ko.utils.arrayRemoveItem(actualArray, item);
                    actualArray.splice(newIndex, 0, item);
                    list(actualArray);
                }
            });
        }
    };


    var FeedPopularVM = function () {
        var me = this;
        me.list = ko.observableArray([]);
        me.sendNewOrder = false;
        me.updating = ko.observable(false);
        me.list.subscribe(function (n) {
            if (!me.sendNewOrder) {
                return false;
            }
            me.updating(true);
            var odr = [];
            for (i in n) {
                odr.push({
                        id: n[i].id,
                        order: i
                });
            }
            
            me.sendNewOrder = false;
            $.post("<?= \Cake\Routing\Router::url('/admin/feedPopular/orderUpdate'); ?>",{ "list": JSON.stringify(odr)}, function (d) {
                me.sendNewOrder = true;
                me.updating(false);
            });
        }, this);
        me.getData = function () {
            $.get("<?= \Cake\Routing\Router::url('/admin/feedPopular.json'); ?>", function (d) {
                if (typeof d.error == "undefined") {
                    me.list(d.feedPopular);
                    me.sendNewOrder = true;
                }
            });
        };
        me.init = function () {
            me.getData();
        }
        me.init();
    }
    var fpObj = new FeedPopularVM();
    $(document).ready(function () {
        ko.applyBindings(fpObj, $('#FeedPopular-Index')[0]);
    });
</script>

<?php if (false): ?>
    <div class="actions columns large-2 medium-3">
        <h3><?= __('Actions') ?></h3>
        <ul class="side-nav">
            <li><?= $this->Html->link(__('New Feed Popular'), ['action' => 'add']) ?></li>
        </ul>
    </div>
    <div class="feedPopular index large-10 medium-9 columns">
        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('key') ?></th>
                    <th><?= $this->Paginator->sort('model') ?></th>
                    <th><?= $this->Paginator->sort('order') ?></th>
                    <th><?= $this->Paginator->sort('timestamp') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
    <?php foreach ($feedPopular as $feedPopular): ?>
                    <tr>
                        <td><?= $this->Number->format($feedPopular->id) ?></td>
                        <td><?= $this->Number->format($feedPopular->key) ?></td>
                        <td><?= h($feedPopular->model) ?></td>
                        <td><?= $this->Number->format($feedPopular->order) ?></td>
                        <td><?= h($feedPopular->timestamp) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $feedPopular->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $feedPopular->id]) ?>
        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $feedPopular->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feedPopular->id)]) ?>
                        </td>
                    </tr>

    <?php endforeach; ?>
            </tbody>
        </table>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
    <?= $this->Paginator->next(__('next') . ' >') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>
    </div>
<?php endif; ?>