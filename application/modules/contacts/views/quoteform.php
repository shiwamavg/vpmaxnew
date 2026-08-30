<div class="hero-quote-card-container" itemscope itemtype="https://schema.org/QuoteAction">
  <!-- Card Header -->
  <div class="hero-quote-header d-flex align-items-center justify-content-between flex-wrap gap-3">
    <div class="d-flex align-items-center gap-3">
      <div class="quote-header-icon rounded bg-primary d-flex align-items-center justify-content-center text-white">
        <i class="bi bi-clipboard-check fs-3"></i>
      </div>
      <div>
        <span class="h3 hero-quote-title m-0 d-block" itemprop="name">Get Your <span class="text-primary">Best</span>
          Moving
          Quote<?= isset($city) ? ' in ' . $city : '' ?></span>
        <p class="hero-quote-subtitle mt-1 mb-0" itemprop="description">Quick, Fast & Free Estimates</p>
      </div>
    </div>

    <!-- Certificates right side -->
    <div class="d-flex flex-nowrap align-items-center gap-2 mt-2 mt-md-0 quote-cert-wrapper">
      <a href="<?= base_url('assets/images/certificate/iso-9001-certification.webp') ?>" data-lightbox="image"
        class="text-decoration-none quote-cert-link" title="ISO 9001 Certificate">
        <div class="quote-cert-icon"><i class="bi bi-patch-check-fill"></i></div>
        <div class="quote-cert-text">
          <div class="quote-cert-title">ISO Certificate</div>
          <div class="quote-cert-subtitle"><i class="bi bi-zoom-in me-1"></i>Click to view</div>
        </div>
      </a>
      <a href="<?= base_url('assets/images/certificate/gst.png') ?>" data-lightbox="image"
        class="text-decoration-none quote-cert-link" title="GST Registered">
        <div class="quote-cert-icon"><i class="bi bi-shield-fill-check"></i></div>
        <div class="quote-cert-text">
          <div class="quote-cert-title">GST Registered</div>
          <div class="quote-cert-subtitle"><i class="bi bi-zoom-in me-1"></i>Click to view</div>
        </div>
      </a>
      <a href="<?= base_url('assets/images/certificate/company-quotation-format.webp') ?>" data-lightbox="image"
        class="text-decoration-none quote-cert-link" title="Company Profile">
        <div class="quote-cert-icon"><i class="bi bi-award-fill"></i></div>
        <div class="quote-cert-text">
          <div class="quote-cert-title">Certifications</div>
          <div class="quote-cert-subtitle"><i class="bi bi-zoom-in me-1"></i>Click to view</div>
        </div>
      </a>
    </div>
  </div>

  <div class="hero-quote-white-card">
    <!-- Card Body / Form -->
    <div class="card-body-form">
      <form id="qteformservice">

        <!-- Service Select (Tabs Style) -->
        <div class="service-tabs-container position-relative mb-3">
          <div class="service-tabs-wrapper">
            <div class="service-tabs">
              <?php $svc = isset($selected_service) ? $selected_service : 'Home Relocation'; ?>
              <label class="service-tab">
                <input type="radio" name="service" value="Home Relocation" <?= ($svc == 'Home Relocation') ? 'checked' : '' ?>>
                <div class="service-tab-content">
                  <i class="bi bi-house-door"></i>
                  <span>Home Relocation</span>
                </div>
              </label>
              <label class="service-tab">
                <input type="radio" name="service" value="Office Shifting" <?= ($svc == 'Office Shifting') ? 'checked' : '' ?>>
                <div class="service-tab-content">
                  <i class="bi bi-building"></i>
                  <span>Office Shifting</span>
                </div>
              </label>
              <label class="service-tab">
                <input type="radio" name="service" value="Vehicle Transportation" <?= ($svc == 'Vehicle Transportation') ? 'checked' : '' ?>>
                <div class="service-tab-content">
                  <i class="bi bi-car-front"></i>
                  <span>Vehicle Transport</span>
                </div>
              </label>
              <label class="service-tab">
                <input type="radio" name="service" value="International Relocation" <?= ($svc == 'International Relocation') ? 'checked' : '' ?>>
                <div class="service-tab-content">
                  <i class="bi bi-globe-americas"></i>
                  <span>International</span>
                </div>
              </label>
              <label class="service-tab">
                <input type="radio" name="service" value="Packing Moving" <?= ($svc == 'Packing Moving') ? 'checked' : '' ?>>
                <div class="service-tab-content">
                  <i class="bi bi-box-seam"></i>
                  <span>Packing Moving</span>
                </div>
              </label>
              <label class="service-tab">
                <input type="radio" name="service" value="Loading Unloading" <?= ($svc == 'Loading Unloading') ? 'checked' : '' ?>>
                <div class="service-tab-content">
                  <i class="bi bi-truck-flatbed"></i>
                  <span>Loading Unloading</span>
                </div>
              </label>
              <label class="service-tab">
                <input type="radio" name="service" value="Warehouse Service" <?= ($svc == 'Warehouse Service') ? 'checked' : '' ?>>
                <div class="service-tab-content">
                  <i class="bi bi-shop"></i>
                  <span>Warehouse Service</span>
                </div>
              </label>
            </div>
          </div>
        </div>

        <div class="form-row-custom">
          <!-- Name Input -->
          <div class="input-wrap-custom">
            <label class="premium-label" for="qf_name"
              onmouseover="document.getElementById('qf_name').focus()">Name</label>
            <div class="input-box-inner">
              <i class="bi bi-person input-icon-custom"></i>
              <input type="text" name="name" id="qf_name" class="form-control-custom" placeholder="Your Name">
            </div>
          </div>

          <!-- Phone Input -->
          <div class="input-wrap-custom">
            <label class="premium-label" for="qf_phone" onmouseover="document.getElementById('qf_phone').focus()">Mobile
              <span class="text-danger">*</span></label>
            <div class="input-box-inner">
              <i class="bi bi-telephone input-icon-custom"></i>
              <input type="tel" name="phone" id="qf_phone" class="form-control-custom" placeholder="Phone Number"
                required>
            </div>
          </div>

          <?php
          if (@$state == 'India') {
            $state = '';
          } else if (@$state == 'Delhi' || @$city == 'Delhi') {
            $state = 'India';
          } ?>

          <!-- Moving From -->
          <div class="input-wrap-custom half-width-mobile position-relative">
            <label class="premium-label" for="mf_input" onmouseover="document.getElementById('mf_input').focus()">Moving
              From <span class="text-danger">*</span></label>
            <div class="input-box-inner">
              <i class="bi bi-geo-alt input-icon-custom"></i>
              <input type="text" name="mfrom" id="mf_input" class="form-control-custom"
                value="" placeholder="Moving From" required autocomplete="off">
            </div>
            <div id="mf_suggestions" class="list-group position-absolute w-100 shadow-sm"
              style="display:none; z-index: 1000; top: 100%; max-height: 200px; overflow-y: auto;"></div>
            <input type="hidden" name="mfcity" value="" id="mfcity">
            <input type="hidden" name="mfstate" value="" id="mfstate">
            <input type="hidden" name="mf_address" value="" id="mf_address">
          </div>

          <!-- Moving To -->
          <div class="input-wrap-custom half-width-mobile position-relative">
            <label class="premium-label" for="mt_input" onmouseover="document.getElementById('mt_input').focus()">Moving
              To
              <span class="text-danger">*</span></label>
            <div class="input-box-inner">
              <i class="bi bi-geo-alt input-icon-custom"></i>
              <input type="text" name="mto" id="mt_input" class="form-control-custom"
                value="" placeholder="Moving To" required autocomplete="off">
            </div>
            <div id="mt_suggestions" class="list-group position-absolute w-100 shadow-sm"
              style="display:none; z-index: 1000; top: 100%; max-height: 200px; overflow-y: auto;"></div>
            <input type="hidden" name="mtcity" id="mtcity">
            <input type="hidden" name="mtstate" id="mtstate">
            <input type="hidden" name="mt_address" id="mt_address">
          </div>

          <!-- Moving Time Select -->
          <div class="input-wrap-custom">
            <label class="premium-label" for="qf_time" onmouseover="document.getElementById('qf_time').focus()">Moving
              Time</label>
            <div class="input-box-inner">
              <i class="bi bi-calendar2-check input-icon-custom"></i>
              <select name="moving_time" id="qf_time" class="form-control-custom"
                style="appearance: auto; padding-right: 15px;">
                <option value="Urgently">Urgently</option>
                <option value="Within a Week" selected>Within a Week</option>
                <option value="Within 15 days">Within 15 days</option>
                <option value="Within a Month">Within a Month</option>
                <option value="Not Fixed">Not Fixed</option>
              </select>
            </div>
          </div>

          <!-- Submit Button -->
          <button type="submit" id="submitbtnservice" class="btn-submit-custom">
            <i class="bi bi-send submit-btn-icon-desktop"></i>
            <i class="bi bi-file-earmark-text submit-btn-icon-mobile"></i>
            <span>Get Quote</span>
          </button>
        </div>

        <div id="resultservice" class="mt-3"></div>
      </form>
    </div>

    <!-- Card Footer / Trust Badge Bar (Desktop Only) -->
    <div class="card-footer-trust d-none d-lg-flex justify-content-between align-items-center">
      <div class="trust-item">
        <i class="bi bi-shield-check trust-icon-circle"></i>
        <div class="trust-text">
          <strong>100% Secure</strong>
          <span>Your data is safe with us</span>
        </div>
      </div>
      <div class="divider-vertical"></div>
      <div class="trust-item">
        <i class="bi bi-clock trust-icon-circle"></i>
        <div class="trust-text">
          <strong>Quick Response</strong>
          <span>We respond within 15 mins</span>
        </div>
      </div>
      <div class="divider-vertical"></div>
      <div class="trust-item">
        <i class="bi bi-currency-rupee trust-icon-circle"></i>
        <div class="trust-text">
          <strong>Best Price Guarantee</strong>
          <span>Get the most competitive rates</span>
        </div>
      </div>
      <div class="divider-vertical"></div>
      <div class="trust-item">
        <i class="bi bi-headset trust-icon-circle"></i>
        <div class="trust-text">
          <strong>24/7 Support</strong>
          <span>We are here to help</span>
        </div>
      </div>
    </div>

    <!-- Mobile Security Tag (Mobile Only, Inside the Card) -->
    <div class="mobile-security-tag d-flex d-lg-none justify-content-center align-items-center gap-2 py-3">
      <i class="bi bi-shield-check quote-title-highlight"></i>
      <span>100% Secure. We never share your data.</span>
    </div>
  </div>

</div>

<script type="text/javascript">
  $(function () {
    $('#qteformservice').submit(function (e) {
      e.preventDefault();
      var $btn = $('#submitbtnservice');
      $.ajax({
        type: "POST",
        url: "<?php echo site_url('contacts/booking') ?>",
        data: $("#qteformservice").serialize(),
        beforeSend: function () {
          $btn.prop('disabled', true);
          $('#resultservice').html('<p style="color:red">Please wait...</p>');
        },
        success: function (res) {
          res = res.trim();

          if (res == '1') {
            res = '<div class="alert alert-success d-flex align-items-center rounded-3 shadow-sm border-0 mt-3 p-3" role="alert"><i class="bi bi-check-circle-fill fs-3 text-success me-3"></i><div><h6 class="alert-heading fw-bold mb-1">Request Sent Successfully!</h6><p class="mb-0 small">Thank you for contacting us. Our team will get back to you with a free quote shortly.</p></div></div>';
            $("#qteformservice").trigger('reset');
            if (typeof gtag_report_conversion === "function") {
              gtag_report_conversion();
            }
          }

          $('#resultservice').html(res);
        },
        complete: function () {
          $btn.prop('disabled', false);

        }
      });
    });
  });
</script>
<script type="text/javascript">
  function showLoading(box) {
    box
      .html(`
      <div class="list-group-item text-muted  text-center">
        <span class="spinner-border spinner-border-sm"></span>
        Loading...
      </div>
    `)
      .show();
  }

  function initAutocomplete(prefix) {
    let timer = null;

    const input = $('#' + prefix + '_input');
    const box = $('#' + prefix + '_suggestions');

    input.on('input', function () {
      const q = this.value.trim();
      clearTimeout(timer);

      if (q.length < 2) {
        box.hide();
        return;
      }
      showLoading(box);
      timer = setTimeout(() => {
        $.post(
          "<?= site_url('places/autocomplete') ?>",
          { q },
          function (list) {
            renderSuggestions(list, prefix);
          },
          'json'
        ).fail(() => {
          box.html(`
        <div class="list-group-item text-danger">
          Failed to load suggestions
        </div>
      `);
        });
      }, 300);
    });

    function renderSuggestions(list, prefix) {
      box.empty();

      if (!Array.isArray(list) || !list.length) {
        box.html(`
          <div class="list-group-item text-muted">
            No locations found
          </div>
        `);
        return;
      }

      list.forEach(item => {
        box.append(`
<button type="button"
        class="list-group-item list-group-item-action d-flex align-items-start gap-2"
        data-id="${item.id}">

    <i class="fa-solid fa-location-dot text-primary mt-1"></i>

    <div class="text-start small">
        ${item.text}
    </div>

</button>
`);
      });

      box.show();
    }


    box.on('click', 'button', function () {
      const placeId = $(this).data('id');
      box.hide();

      $.post(
        "<?= site_url('places/details') ?>",
        { id: placeId },
        function (place) {
          assignPlace(place, prefix);
        },
        'json'
      );
    });
  }

  function assignPlace(place, prefix) {
    let city = "", state = "";

    place.addressComponents.forEach(c => {
      if (
        c.types.includes("locality") ||
        c.types.includes("administrative_area_level_2") ||
        c.types.includes("postal_town") ||
        c.types.includes("sublocality")
      ) {
        if (!city) city = c.longText;
      }

      if (c.types.includes("administrative_area_level_1")) {
        state = c.longText;
      }
    });

    $('#' + prefix + '_input').val(place.formattedAddress);
    $('#' + prefix + 'city').val(city);
    $('#' + prefix + 'state').val(state);
    $('#' + prefix + '_address').val(place.formattedAddress);

    // console.log(prefix.toUpperCase(), { city, state });
  }

  // INIT BOTH
  initAutocomplete('mf');
  initAutocomplete('mt');
</script>