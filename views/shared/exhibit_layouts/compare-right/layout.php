<div class="gallery-full-right">
    <div class="primary">
        <?php if ($text = exhibit_builder_page_text(1)): ?>
        <div class="exhibit-text">
            <?php echo $text; ?>
        </div>
        <?php endif; ?>
    </div>
    <div class="secondary gallery">
    <?php
    for ($i = 1; $i <= 3; $i++):
        $attachment = exhibit_builder_page_attachment($i);
        if ($attachment):
    ?>
        <div class="exhibit-item">
            <?php echo exhibit_builder_attachment_markup($attachment, array('imageSize' => 'fullsize'), array('class' => 'permalink')); ?>
        </div>
    <?php endif; endfor; ?>
    </div>
</div>
