<fieldset class="<?php echo html_escape($layout); ?>">
    <div class="primary">
    <?php
    for($i=1; $i <= 16; $i++):
        echo exhibit_builder_layout_form_item($i);
    endfor;
    ?>
    </div>
</fieldset>
