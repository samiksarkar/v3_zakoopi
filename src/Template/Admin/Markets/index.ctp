<div class="row" id="market-index">

    <div class="col-lg-10">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"></h3>
                <div class="box-tools">

                    <ul class="pagination pagination-sm no-margin pull-right">
                        <?= $this->Paginator->prev('< ' . __('previous')) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('next') . ' >') ?>
                    </ul>
                    <p><?= $this->Paginator->counter() ?></p>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-striped table-responsive table-hover">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th>
                                <?= $this->Paginator->sort('city_id') ?>
                                <?= $this->Paginator->sort('market_name') ?>
                                <?= $this->Paginator->sort('created') ?>
                                <?= $this->Paginator->sort('modified') ?>
                            </th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($markets as $market): ?>
                            <tr>
                                <td>
                                    <p data-bind="click:showCropper" data-id="<?= $market->id ?>" data-src="<?= $market->img ?>">
                                        <img src="/<?= $market->img ?>" style="height: 60px;" onerror="$(this).parent().remove();" />
                                    </p>
                                </td>
                                <td>
                                    <p><b>Id:</b><?= $this->Number->format($market->id) ?></p>
                                    <p><b>Market Name:</b><?= $market->market_name ?></p>
                                    <p><b>City:</b><?= $market->has('city') ? $this->Html->link($market->city->city_name, ['controller' => 'Cities', 'action' => 'view', $market->city->id]) : '' ?></p>
                                    <p><b>Created On:</b><?= $market->created ?></p>
                                    <p><b>Modified On:</b><?= $market->modified ?></p>
                                </td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $market->id], ['class' => 'btn btn-default']) ?>
                                    <?= $this->Html->link('<i class="fa fa-edit"></i>', ['action' => 'edit', $market->id], ['class' => 'btn btn-default', 'escape' => false]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $market->id], ['confirm' => __('Are you sure you want to delete # {0}?', $market->id), 'class' => 'btn btn-danger']) ?>
                                </td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div>
    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('New Market'), ['action' => 'add']) ?></li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
        </ul>
    </div>
    
    <div class="modal fade" id="cropper-modal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    <p id="cropper-img">
                        <img src="img/picture.jpg" style="width: 570px"  data-bind="attr:{'src':imgSrc} "  alt="Picture">
                    </p>
                </div>
                <div class="modal-footer">
                    <button data-bind="click:close" class="btn">Cancel</button>
                    <button data-bind="click:save" class="btn btn-primary">DONE</button>
                </div>
            </div>
        </div>
    </div>
    
</div>

<?= $this->Html->script('cropper.min.js'); ?>
<?= $this->Html->css('cropper.min.css'); ?>
<script type="text/javascript">
    $image = $('#cropper-img img');
    var ImageCropperVM = function () {
        var me = this;
        me.cropBoxData = null;
        me.canvasData = null;
        me.imgSrc = ko.observable('');
        me.id = ko.observable('');
        me.showCropper = function(d,e){
            me.cropBoxData = null;
            me.imgSrc('/'+$(e.currentTarget).data().src);
            $('#cropper-modal').modal('show');
        };
        me.close = function(){
            $('#cropper-modal').modal('hide');
        };
        me.save = function(){
            $('#cropper-modal').modal('hide');
            me.cropBoxData = $image.cropper('getCropBoxData');
            me.canvasData = $image.cropper('getCanvasData');
            $.post('<?= \Cake\Routing\Router::url('/admin/crop') ?>',{img: me.imgSrc() ,canvas: me.canvasData, crop: me.cropBoxData, type:'market', id:me.id()},function(d){
//                window.location.reload();
            });
        }
        me._init = function () {
            m = me;
            $('#cropper-modal').on('shown.bs.modal', function () {
                $image.cropper({
//                    autoCropArea: 0.5,
                    built: function () {
                        // Strict mode: set crop box data first
                        $image.cropper('setCropBoxData', m.cropBoxData);
                        $image.cropper('setCanvasData', m.canvasData);
                    }
                });
            }).on('hidden.bs.modal', function () {
                m.cropBoxData = $image.cropper('getCropBoxData');
                m.canvasData = $image.cropper('getCanvasData');
                $image.cropper('destroy');
            });
        };
        me._init();
    }
    imCObj = new ImageCropperVM();
    ko.applyBindings(imCObj, $('#market-index')[0]);
</script>