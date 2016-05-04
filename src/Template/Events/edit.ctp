<nav class="large-3 medium-4 columns" id="actions-sidebar">
</nav>
<div class="">
    <?= $this->Form->create($event) ?>
    <fieldset>
        <?php
            echo $this->Form->input('start_date');
            echo $this->Form->input('end_date');
            echo $this->Form->input('venue');
            echo $this->Form->input('city');
            echo $this->Form->input('state');
            echo $this->Form->input('volunteers');
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Save')) ?>
    <?= $this->Form->end() ?>
    <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $event->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $event->id), 'class' => 'btn btn-default']
            )
        ?>

</div>
<hr />

<div class="related">
    <h2><?= __('Photos') ?><?= $this->Html->link(__('Edit Photos'), ['controller' => 'Photos', 'action' => 'index'], ['class' => 'btn btn-default pull-right']) ?></h2>
    <?php if (!empty($event->photos)): ?>
    <div class="row">
        <?php foreach ($event->photos as $photos): ?>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
              <?= $this->Html->image(h($photos->file), ['alt' => 'CakePHP']); ?>
              <div class="caption">
                <div class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Photos', 'action' => 'view', $photos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Photos', 'action' => 'edit', $photos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Photos', 'action' => 'delete', $photos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $photos->id)]) ?>
                </div>
              </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
</div>
