// Body Color
html {
  background: <?php echo $this->getField('body-color'); ?>;
}

// Lin color
body a {
  color: <?php echo $this->getField('accent-color'); ?>;
  &:hover {
    color: darken(<?php echo $this->getField('accent-color'); ?>, 10%);
  }
}

// Primary BG
.material-admin-primary-color-bg {
  background-color: <?php echo $this->getField('primary-color'); ?> !important;
}

// Primary Text
.material-admin-primary-color-text {
  color: <?php echo $this->getField('primary-color'); ?> !important;
}

// Secondary BG
.material-admin-accent-color-bg {
  background-color: <?php echo $this->getField('accent-color'); ?> !important;
}

// Secondary Text
.material-admin-accent-color-text {
  color: <?php echo $this->getField('accent-color'); ?> !important;
}

// Primary text Color
.material-admin-primary-text-color {
  color: <?php echo $this->getField('primary-text-color'); ?> !important;
}

// Primary text Color
.material-admin-secondary-text-color {
  color: <?php echo $this->getField('secondary-text-color'); ?> !important;
}

// Icons text Color
.material-admin-icons-color {
  color: <?php echo $this->getField('icons-color'); ?> !important;
}

// Buttons Primary
.button-primary {
  @extend .material-admin-accent-color-bg;
  color: setTextColor(<?php echo $this->getField('accent-color'); ?>);
  
  &:hover {
    background-color: darken(<?php echo $this->getField('accent-color'); ?>, 10%);
    color: setTextColor(darken(<?php echo $this->getField('accent-color'); ?>, 10%));
  }
}

// We set the default WordPress Colors
.wp-core-ui {
  
  // Deafult Buttn
  .button {
    @extend .grey, .lighten-5;
    @extend .grey, .darken-3;
    
    &:hover, 
    &:active {
      @extend .grey, .lighten-4;
      @extend .grey, .darken-4;
    }
    
  }
  //.button-primary {
  //@extend .material-admin-accent-color-bg;
  //)}
  .wp-ui-primary {
    @extend .material-admin-primary-color-bg;
  }
  .wp-ui-text-primary {
  }
  .wp-ui-highlight {
    @extend .material-admin-accent-color-bg;
  }
  .wp-ui-text-highlight {
  }
  .wp-ui-notification {
    @extend .material-admin-accent-color-bg;
  }
  .wp-ui-text-notification {
  }
  .wp-ui-text-icon {
    @extend .material-admin-icons-color;
  }
  
}

// Our function that sets the text color
@function setTextColor($color: #fff) {
  @if (lightness($color) > 50) {
    @return #222222 !important; // Lighter backgorund, return dark color
  } @else {
    @return #f3f3f3 !important; // Darker background, return light color
  }
}