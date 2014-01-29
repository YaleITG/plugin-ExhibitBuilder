<div class="compare-top">
    <div class="primary">
    <?php
    for ($i = 1; $i <= 2; $i++):
        $attachment = exhibit_builder_page_attachment($i);
        if ($attachment):
    ?>
    	<div class="split">
            <?php echo exhibit_builder_attachment_markup($attachment, array('imageSize' => 'fullsize'), array('class' => 'permalink')); ?>
        </div>
    <?php endif; endfor; ?>
    </div>
    <?php if (exhibit_builder_page_text(1)): ?>
    <div class="secondary">
        <div class="exhibit-text">
        <?php echo exhibit_builder_page_text(1); ?>
        </div>
    </div>
    <?php endif; ?>
</div>
