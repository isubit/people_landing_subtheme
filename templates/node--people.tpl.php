<div class="isu-people_profile-section">
  <div class="isu-people_container">

    <div class="isu-people_row">

      <div class="isu-people_col isu-people_image-col">
        <img src="<?php print file_create_url($field_people_image['0']['uri']); ?>" alt="<?php print $field_people_image['0']['alt']; ?>">
      </div>

      <div class="isu-people_col isu-people_profile-col">
        <div class="isu-people_name">
          <h2><?php print $title; ?></h2>

          <?php if ($field_people_position) : ?>
            <p class="isu-people_position">
              <?php print $field_people_position['0']['value']; ?>
            </p>
          <?php endif ?>
        </div>

        <div class="isu-people_contact-row isu-people_row">

        <?php if ($field_people_street or $field_people_city or $field_people_state or $field_people_postal) : ?>

          <div class="isu-people_contact-item isu-people_col isu-people_address-col">
            <div class="isu-people_address">
              <i class="fa fa-map-marker"></i>
              <div>
                <span>
                  <?php if ($field_people_street) : ?>
                    <?php print $field_people_street['0']['value']; ?><br>
                  <?php endif ?>

                  <?php if ($field_people_city) : ?>
                    <?php print $field_people_city['0']['value']?>, 
                  <?php endif ?>

                  <?php if ($field_people_state) : ?>
                    <?php print $field_people_state['0']['value']; ?>
                  <?php endif ?>

                  <?php if ($field_people_postal) : ?>
                    <?php print $field_people_postal['0']['value']; ?>
                  <?php endif ?>
                </span>
              </div>
            </div>
          </div>

        <?php endif ?>

          <?php if ($field_people_email or $field_people_phone) : ?>

            <div class="isu-people_contact-item isu-people_col isu-people_email-col">
              <?php if ($field_people_email) : ?>
                <div class="isu-people_email">
                  <i class="fa fa-envelope-o"></i>
                  <?php echo'<span><a href="mailto:' . $field_people_email['0']['email'] . '">' . $field_people_email['0']['email'] . '</a></span>'; ?>
                </div>
              <?php endif ?>

              <?php if ($field_people_phone) : ?>
                <div class="isu-people_phone">
                  <i class="fa fa-phone"></i>
                  <span><?php print $field_people_phone['0']['value']; ?> </span>
                </div>
              <?php endif ?>
            </div>
          <?php endif ?>

          <?php if ($field_people_website or $field_people_cv) : ?>

            <div class="isu-people_contact-item isu-people_col isu-people_links-col col-md">

              <?php if ($field_people_cv) : ?>
                <div class="isu-people_cv">
                  <i class="fa fa-file-text-o"></i>
                  <?php
                    echo'<span><a href="' . $cv_url . '">Download CV</a></span>';
                    ?>
                </div>
              <?php endif ?>

              <?php if ($field_people_website) : ?>
                <ul class="isu-people_list-unstyled isu-people_links">
                  <?php
                  $items = field_get_items('node', $node, 'field_people_website');
                  foreach ($items as $item) {
                    echo'<li><i class="fa fa-link"></i> <a href="' . $item['url'] . '">' . $item['title'] . '</a></li>';
                  } ?>
                </ul>
              <?php endif ?>

            </div>
          <?php endif ?>
        </div>

        <?php if ($field_people_bio): ?>
          <div class="isu-people_biography">
            <?php print $field_people_bio['0']['value']; ?>
          </div>
        <?php endif ?>
      </div>

    </div>

  </div>
</div>

<div class="isu-people_info-section">
  <div class="isu-people_container">
    <div class="isu-people_row">

    <?php if ($field_people_education) : ?>

      <div class="isu-people_info-col col-lg">
        <div class="isu-people_card card h-100">
          <div class="isu-people_card-body">
            <div class="isu-people_info-block ">
              <h2 class="h4">Education</h2>
              <ul class="isu-people_list-unstyled">
                <?php
                $items = field_get_items('node', $node, 'field_people_education');
                foreach ($items as $item) {
                  echo'<li>' . $item['value'] . '</li>';
                }
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>

    <?php endif ?>

    <?php if ($field_people_other_affiliations or $field_people_interdepartmental) : ?>

      <div class="isu-people_info-col col-lg">

        <div class="isu-people_card card h-100">
          <div class="isu-people_card-body">

            <?php if ($field_people_other_affiliations) : ?>
              <div class="isu-people_info-block">
                <h2 class="h4">Affiliations</h2>
                <ul class="isu-people_list-unstyled">
                  <?php
                  $items = field_get_items('node', $node, 'field_people_other_affiliations');
                  foreach($items as $item) {
                    echo'<li><a href="' . $item['url'] . '">' . $item['title'] . '</a></li>';
                  } ?>
                </ul>
              </div>
            <?php endif ?>

            <?php if ($field_people_interdepartmental) : ?>

              <div class="isu-people_info-block ">
                <h2 class="h4">Interdepartmental Programs</h2>
                <ul class="isu-people_list-unstyled">
                  <?php
                  $items = field_get_items('node', $node, 'field_people_interdepartmental');
                  foreach($items as $item) {
                    echo'<li><a href="' . $item['url'] . '">' . $item['title'] . '</a></li>';
                  } ?>
                </ul>
              </div>
            <?php endif ?>

          </div>
        </div>
      </div>
    <?php endif ?>

    <?php if ($field_people_expertise) : ?>

      <div class="isu-people_info-col col-lg">
        <div class="isu-people_card card h-100">
          <div class="isu-people_card-body">
            <div class="isu-people_info-block">
              <h2 class="h4">Expertise</h2>
              <ul class="isu-people_list-unstyled">
                <?php
                $items = field_get_items('node', $node, 'field_people_expertise');
                foreach ($items as $item) {
                  $tid = $item['tid'];
                  $term = taxonomy_term_load($tid);
                  echo '<li>' . $term->name . '</li>';
                }
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    <?php endif ?>

   </div>
  </div>
 </div>

</div>