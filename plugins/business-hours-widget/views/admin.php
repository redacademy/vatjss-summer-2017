<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">

  <div class="vatjss-business-hours">
    <p><label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
    </p>

    <p><label for="<?php echo $this->get_field_id('monday'); ?>">Monday:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('monday'); ?>" name="<?php echo $this->get_field_name('monday'); ?>" type="text" value="<?php echo $monday; ?>">
    </p>

    <p><label for="<?php echo $this->get_field_id('tuesday_friday'); ?>">Tuesday - Friday:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('tuesday_friday'); ?>" name="<?php echo $this->get_field_name('tuesday_friday'); ?>" type="text" value="<?php echo $tuesday_friday; ?>">
    </p>

    <p><label for="<?php echo $this->get_field_id('wednesday'); ?>">Wednesday:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('wednesday'); ?>" name="<?php echo $this->get_field_name('wednesday'); ?>" type="text" value="<?php echo $wednesday; ?>">
    </p>

    <p><label for="<?php echo $this->get_field_id('saturday_sunday'); ?>">Saturday - Sunday:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('saturday_sunday'); ?>" name="<?php echo $this->get_field_name('saturday_sunday'); ?>" type="text" value="<?php echo $saturday_sunday; ?>">
    </p>
  </div>

  <div class="vatjss-business-address">
    <p>
      <label for="<?php echo $this->get_field_id('address'); ?>">Address:</label>
      <textarea class="widefat" id="<?php echo $this->get_field_id('address'); ?>" 
      name="<?php echo $this->get_field_name('address'); ?>" ><?php echo $address; ?></textarea>
    </p>
  </div>
</div>
