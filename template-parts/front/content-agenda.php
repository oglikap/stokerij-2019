<div class="uk-section">
  <div class="uk-container uk-container-small">
    <div class="uk-width-4-5@s uk-margin-auto">
      <h2 id="bs-agenda" class="uk-heading-line uk-heading-medium uk-text-center"><span>Agenda</span></h2>

      <?php
          $options = array('scope' => 'upcoming', 'limit' => 10);
          echo gigpress_shows($options);
      ?>

    </div>
  </div>
</div>
