<style>
@media (max-width: 767.98px) {
    .half-width-mobile {
        width: 100% !important;
        flex: 0 0 100% !important;
    }
}
</style>
<div class="modal fade" id="qteModal" tabindex="-1" role="dialog" aria-labelledby="qteModal" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content border-0 bg-transparent shadow-none">
      <div class="hero-quote-card-container position-relative" itemscope itemtype="https://schema.org/QuoteAction">
        <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal"
          aria-label="Close" style="z-index: 10;"></button>
        <!-- Card Header -->
        <div class="hero-quote-header d-flex align-items-center justify-content-between flex-wrap gap-3">
          <div class="d-flex align-items-center gap-3">
            <div
              class="quote-header-icon rounded bg-primary d-flex align-items-center justify-content-center text-white">
              <i class="bi bi-clipboard-check fs-3"></i>
            </div>
            <div>
              <span class="h3 hero-quote-title m-0 d-block" itemprop="name">Get Your <span
                  class="text-primary">Best</span>
                Moving
                Quote in <?= isset($city) ? $city : 'Indore' ?></span>
              <p class="hero-quote-subtitle mt-1 mb-0" itemprop="description">Quick, Fast & Free Estimates</p>
            </div>
          </div>
        </div>

        <div class="hero-quote-white-card">
          <!-- Card Body / Form -->
          <div class="card-body-form">
            <form id="qtemodalform">

              <!-- Service Select (Tabs Style) -->
              <div class="service-tabs-container position-relative mb-3">
                <div class="service-tabs-wrapper">
                  <div class="service-tabs">
                    <label class="service-tab">
                      <input type="radio" name="service" value="Home Relocation" checked>
                      <div class="service-tab-content">
                        <i class="bi bi-house-door"></i>
                        <span>Home Relocation</span>
                      </div>
                    </label>
                    <label class="service-tab">
                      <input type="radio" name="service" value="Office Shifting">
                      <div class="service-tab-content">
                        <i class="bi bi-building"></i>
                        <span>Office Shifting</span>
                      </div>
                    </label>
                    <label class="service-tab">
                      <input type="radio" name="service" value="Vehicle Transportation">
                      <div class="service-tab-content">
                        <i class="bi bi-car-front"></i>
                        <span>Vehicle Transport</span>
                      </div>
                    </label>
                    <label class="service-tab">
                      <input type="radio" name="service" value="Packing Moving">
                      <div class="service-tab-content">
                        <i class="bi bi-box-seam"></i>
                        <span>Packing Moving</span>
                      </div>
                    </label>
                    <label class="service-tab">
                      <input type="radio" name="service" value="Loading Unloading">
                      <div class="service-tab-content">
                        <i class="bi bi-truck-flatbed"></i>
                        <span>Loading Unloading</span>
                      </div>
                    </label>
                    <label class="service-tab">
                      <input type="radio" name="service" value="Warehouse Service">
                      <div class="service-tab-content">
                        <i class="bi bi-shop"></i>
                        <span>Warehouse Service</span>
                      </div>
                    </label>
                    <label class="service-tab">
                      <input type="radio" name="service" value="IBA Approved">
                      <div class="service-tab-content">
                        <i class="bi bi-shield-check"></i>
                        <span>IBA Approved</span>
                      </div>
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-row-custom">
                <!-- Name Input -->
                <div class="input-wrap-custom">
                  <label class="premium-label" for="qm_name"
                    onmouseover="document.getElementById('qm_name').focus()">Name</label>
                  <div class="input-box-inner">
                    <i class="bi bi-person input-icon-custom"></i>
                    <input type="text" name="name" id="qm_name" class="form-control-custom" placeholder="Your Name">
                  </div>
                </div>

                <!-- Phone Input -->
                <div class="input-wrap-custom">
                  <label class="premium-label" for="qm_phone"
                    onmouseover="document.getElementById('qm_phone').focus()">Mobile <span
                      class="text-danger">*</span></label>
                  <div class="input-box-inner">
                    <i class="bi bi-telephone input-icon-custom"></i>
                    <input type="tel" name="phone" id="qm_phone" class="form-control-custom" placeholder="Phone Number"
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
                  <label class="premium-label" for="qm_mf_input"
                    onmouseover="document.getElementById('qm_mf_input').focus()">Moving From <span
                      class="text-danger">*</span></label>
                  <div class="input-box-inner">
                    <i class="bi bi-geo-alt input-icon-custom"></i>
                    <input type="text" name="mfrom" id="qm_mf_input" class="form-control-custom"
                      value="" placeholder="Moving From" required
                      autocomplete="off">
                  </div>
                  <div id="qm_mf_suggestions" class="list-group position-absolute w-100 shadow-sm"
                    style="display:none; z-index: 1000; top: 100%; max-height: 200px; overflow-y: auto;"></div>
                  <input type="hidden" name="mfcity" value="" id="qm_mfcity">
                  <input type="hidden" name="mfstate" value="" id="qm_mfstate">
                  <input type="hidden" name="mf_address" value="" id="qm_mf_address">
                </div>

                <!-- Moving To -->
                <div class="input-wrap-custom half-width-mobile position-relative">
                  <label class="premium-label" for="qm_mt_input"
                    onmouseover="document.getElementById('qm_mt_input').focus()">Moving To <span
                      class="text-danger">*</span></label>
                  <div class="input-box-inner">
                    <i class="bi bi-geo-alt input-icon-custom"></i>
                    <input type="text" name="mto" id="qm_mt_input" class="form-control-custom" placeholder="Moving To"
                      required autocomplete="off">
                  </div>
                  <div id="qm_mt_suggestions" class="list-group position-absolute w-100 shadow-sm"
                    style="display:none; z-index: 1000; top: 100%; max-height: 200px; overflow-y: auto;"></div>
                  <input type="hidden" name="mtcity" id="qm_mtcity">
                  <input type="hidden" name="mtstate" id="qm_mtstate">
                  <input type="hidden" name="mt_address" id="qm_mt_address">
                </div>

                <!-- Moving Time Select -->
                <div class="input-wrap-custom">
                  <label class="premium-label" for="qm_time"
                    onmouseover="document.getElementById('qm_time').focus()">Moving Time</label>
                  <div class="input-box-inner">
                    <i class="bi bi-calendar2-check input-icon-custom"></i>
                    <select name="moving_time" id="qm_time" class="form-control-custom"
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
                <button type="submit" id="submitbtnmodal" class="btn-submit-custom border-0">
                  <i class="bi bi-send submit-btn-icon-desktop"></i>
                  <i class="bi bi-file-earmark-text submit-btn-icon-mobile"></i>
                  <span>Get Quote</span>
                </button>
              </div>

              <div id="resultquotemodal" class="mt-3"></div>
            </form>
          </div>

          <!-- Card Footer / Trust Badge Bar (Desktop Only) -->
          <div class="card-footer-trust d-none d-lg-flex justify-content-between align-items-center mt-3">
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
    </div>
  </div>
</div>

<script type="text/javascript">
  $(function () {
    $('#qtemodalform').submit(function (e) {
      e.preventDefault();
      var $btn = $('#submitbtnmodal');
      $.ajax({
        type: "POST",
        url: "<?php echo site_url('contacts/booking') ?>",
        data: $("#qtemodalform").serialize(),
        beforeSend: function () {
          $btn.prop('disabled', true);
          $('#resultquotemodal').html('<p style="color:red">Please wait...</p>');
        },
        success: function (res) {
          res = res.trim();

          if (res == '1') {
            res = '<div class="alert alert-success d-flex  rounded-3 shadow-sm border-0 mt-3 p-3" role="alert"><i class="bi bi-check-circle-fill fs-3 text-success me-3"></i><div><h6 class="alert-heading fw-bold mb-1">Request Sent Successfully!</h6><p class="mb-0 small">Thank you for contacting us. Our team will get back to you with a free quote shortly.</p></div></div>';
            $("#qtemodalform").trigger('reset');
            if (typeof gtag_report_conversion === "function") {
              gtag_report_conversion();
            }
          }

          $('#resultquotemodal').html(res);
        },
        complete: function () {
          $btn.prop('disabled', false);
        }
      });
    });
  });
</script>

<script type="text/javascript">
  function showModalLoading(box) {
    box
      .html(`
      <div class="list-group-item text-muted  text-center">
        <span class="spinner-border spinner-border-sm"></span>
        Loading...
      </div>
    `)
      .show();
  }

  function initModalAutocomplete(prefix) {
    let timer = null;

    const input = $('#' + prefix + '_input');
    const box = $('#' + prefix + '_suggestions');

    input.on('input', function () {
      const q = this.value.trim();
      clearTimeout(timer);

      if (q.length < 3) {
        box.hide();
        return;
      }
      showModalLoading(box);
      timer = setTimeout(() => {
        $.post(
          "<?= site_url('places/autocomplete') ?>",
          { q },
          function (list) {
            renderModalSuggestions(list, prefix);
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

    function renderModalSuggestions(list, prefix) {
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
          assignModalPlace(place, prefix);
        },
        'json'
      );
    });
  }

  function assignModalPlace(place, prefix) {
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
  }

  // INIT BOTH WITH MODAL SPECIFIC PREFIXES
  initModalAutocomplete('qm_mf');
  initModalAutocomplete('qm_mt');
</script>