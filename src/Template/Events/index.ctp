<div class="row">
    <div class="col-xs-12">
    <p><?= $this->Html->link(__('New Event'), ['action' => 'add'], ['class' => 'btn btn-default']) ?></p>
    </div>
</div>
<div class="row">
    <?php foreach ($events as $event): ?>
    <div class="col-xs-4">
        <div class="panel panel-default">
            <div class="panel-body">
                <ul class="list-unstyled">
                    <li>Start: <?= h($event->start_date) ?></li>
                    <li>End: <?= h($event->end_date) ?></li>
                    <li>Venue: <?= h($event->venue) ?></li>
                    <li>City: <?= h($event->city) ?></li>
                    <li>State: <?= h($event->state) ?></li>
                    <li>Volunteers: <?= $this->Number->format($event->volunteers) ?></li>
                    <li>Description: <br /><?= h($event->description) ?></li>
                </ul>
                 <a class="btn btn-primary" href="<?= $this->Url->build(['controller' => 'Events', 'action' => 'edit', $event->id]); ?>">Edit</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <div class="col-xs-12">
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>
    </div>
</div>

