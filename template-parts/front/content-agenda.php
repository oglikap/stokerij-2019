<div class="uk-section">
  <div class="uk-container">
    <h2 id="bs-agenda" class="uk-heading-line uk-text-center"><span>Agenda</span></h2>

    <?php
        $options = array('scope' => 'upcoming', 'limit' => 10);
        echo gigpress_shows($options);
    ?>

  </div>
</div>
