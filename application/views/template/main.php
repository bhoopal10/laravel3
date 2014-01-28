<?php echo render('template.header') ?>
<a href="<?php echo URL::to_route('UserLogin') ?>">UserLogin</a>
<?php echo Section::yield('contentWrapper'); ?>