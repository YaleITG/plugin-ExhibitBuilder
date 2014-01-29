<div class="compare-top">
    <div class="primary">
    <?php
    for ($i = 1; $i <= 16; $i++):
        $attachment = exhibit_builder_page_attachment($i);
        if ($attachment):
    ?>
    	<div class="split">
            <?php echo exhibit_builder_attachment_markup($attachment, array('imageSize' => 'fullsize'), array('class' => 'permalink')); ?>
        </div>
    <?php endif; 
    if ($i % 2 == 0): ?>
    <br style="clear:left;" />
    <?php endif; endfor; ?>
    </div>
    <?php endif; ?>
</div>
