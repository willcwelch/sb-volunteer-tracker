<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Affiliations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Organizations'), ['controller' => 'Organizations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Organization'), ['controller' => 'Organizations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="affiliations form large-9 medium-8 columns content">
    <?= $this->Form->create($affiliation) ?>
    <fieldset>
        <legend><?= __('Add Affiliation') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('organizations._ids', ['options' => $organizations]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
