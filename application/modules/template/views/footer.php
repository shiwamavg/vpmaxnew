
<footer class="footer-section mt-5">
  <?php
$floatingPhoneNumber = preg_replace('/\D+/', '', (string) $phone);
$floatingWhatsappLink = !empty($whatsapphtml)
  ? $whatsapphtml
  : (!empty($floatingPhoneNumber) ? 'https://wa.me/' . $floatingPhoneNumber : '#');



$this->load->view('home/city_list');
?>
  
  <div class="footer-top-features">
    <div class="container">
      <div class="footer-top-grid">
        <div class="footer-feat-box">
          <div class="footer-feat-icon">
            <i class="bi bi-shield-check"></i>
          </div>
          <div class="footer-feat-text">
            <span class="h6 d-block mb-1 text-white fw-bold">100% Safe & Secure</span>
            <p>Your belongings are in safe hands</p>
          </div>
        </div>
        <div class="footer-feat-box">
          <div class="footer-feat-icon">
            <i class="bi bi-stopwatch"></i>
          </div>
          <div class="footer-feat-text">
            <span class="h6 d-block mb-1 text-white fw-bold">On-Time Delivery</span>
            <p>We value your time as much as you do</p>
          </div>
        </div>
        <div class="footer-feat-box">
          <div class="footer-feat-icon">
            <i class="bi bi-geo-alt"></i>
          </div>
          <div class="footer-feat-text">
            <span class="h6 d-block mb-1 text-white fw-bold">Pan India Services</span>
            <p>Serving 1000+ cities across India</p>
          </div>
        </div>
        <div class="footer-feat-box">
          <div class="footer-feat-icon">
            <i class="bi bi-headset"></i>
          </div>
          <div class="footer-feat-text">
            <span class="h6 d-block mb-1 text-white fw-bold">24/7 Customer Support</span>
            <p>We are always here to help you</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-main">
    <div class="container">
      <div class="row g-4 g-xl-5">

        <div class="col-lg-4 col-md-6">
          <div class="footer-brand">
            <a href="<?= site_url() ?>" class="footer-brand-logo">
              <span class="h4 text-white d-block mb-2"><?= $company3 ?></span>
            </a>
            <p class="footer-brand-copy">
              <?= $company3 ?> is a trusted relocation partner with <?= $experience ?> years of experience in providing
              safe, reliable
              and affordable packing and moving services across India.
            </p>

            <div class="footer-quote-card">
              <div class="footer-quote-icon">
                <i class="bi bi-telephone-fill"></i>
              </div>
              <div class="footer-quote-text">
                <span>Call for Free Quote</span>
                <a href="tel:<?= $phonehtml ?>" class="h5 d-block my-1 text-white fw-bold text-decoration-none"><?= $phone ?></a>
                <small>Mon - Sun | 8:00 AM - 8:00 PM</small>
              </div>
            </div>

            <div class="footer-social-wrap">
              <span>Follow Us</span>
              <div class="footer-social-links">
                <a href="<?= $facebookhtml ?>" aria-label="Facebook" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="<?= $instagramhtml ?>" aria-label="Instagram" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="<?= $twitterhtml ?>" aria-label="Twitter" target="_blank"><i class="bi bi-twitter-x"></i></a>
                <a href="<?= $linkedinhtml ?>" aria-label="LinkedIn" target="_blank"><i class="bi bi-linkedin"></i></a>
                <a href="<?= $youtubehtml ?>" aria-label="YouTube" target="_blank"><i class="bi bi-youtube"></i></a>
                <a href="<?= $snapchathtml ?>" aria-label="Snapchat" target="_blank"><i class="bi bi-snapchat"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-6">
          <div class="footer-widget">
            <span class="h5 d-block mb-3 text-white fw-bold">Quick Links</span>
            <ul>
              <li><a href="<?= site_url() ?>">Home</a></li>
              <li><a href="<?= site_url('about-us') ?>">About Us</a></li>
              <li><a href="<?= site_url('mission-and-vision') ?>">Mission and Vision</a></li>
              <li><a href="<?= site_url('iba-approved-packers') ?>">IBA Approved Packers</a></li>
              <li><a href="<?= site_url('certificates') ?>">Our Certificates</a></li>
              <li><a href="<?= site_url('tracking') ?>">Track Consignment</a></li>
              <li><a href="<?= site_url('branch-address') ?>">Branch Address</a></li>
              <li><a href="<?= site_url('our-location') ?>">Our Network</a></li>
              <li><a href="<?= site_url('payment-mode') ?>">Online Payment</a></li>
              <li><a href="<?= site_url('contact-us') ?>">Contact Us</a></li>
              <li><a href="<?= site_url('reviews') ?>">Reviews</a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-6">
          <div class="footer-widget">
            <span class="h5 d-block mb-3 text-white fw-bold">Our Services</span>
            <ul>
              <li><a href="<?= site_url('household-shifting') ?>">1. Household Shifting</a></li>
              <li><a href="<?= site_url('office-shifting') ?>">2. Office Shifting</a></li>
              <li><a href="<?= site_url('local-shifting') ?>">3. Local Shifting</a></li>
              <li><a href="<?= site_url('domestic-shifting') ?>">4. Domestic Shifting</a></li>
              <li><a href="<?= site_url('international-shifting') ?>">5. International Shifting</a></li>
              <li><a href="<?= site_url('car-transportation-service') ?>">6. Car Transportation</a></li>
              <li><a href="<?= site_url('bike-transportation-service') ?>">7. Bike Transportation</a></li>
              <li><a href="<?= site_url('loading-and-unloading') ?>">8. Loading and Unloading</a></li>
              <li><a href="<?= site_url('warehouse-and-storage-services') ?>">9. Warehouse &amp; Storage Services</a></li>
            </ul>
          </div>
        </div>


        <div class="col-lg-3 col-md-8 col-12">
          <div class="footer-widget">
            <span class="h5 d-block mb-3 text-white fw-bold">Get In Touch</span>
            <div class="footer-contact-list">
              <a href="tel:+919630263460" class="footer-contact-item">
                <div class="footer-contact-icon"><i class="bi bi-telephone-fill"></i></div>
                <div class="footer-contact-text">
                  <span>Head Office</span>
                  <b>9630263460</b>
                </div>
              </a>
              

              <a href="<?= $phonehtml2 ?>" class="footer-contact-item">
                <div class="footer-contact-icon"><i class="bi bi-telephone-fill"></i></div>
                <div class="footer-contact-text">
                  <span><?=@$city?> Branch Office</span>
                  <b><?= $phone2 ?></b>
                </div>
              </a>
              <a href="<?= $mailhtml ?>" class="footer-contact-item">
                <div class="footer-contact-icon"><i class="bi bi-envelope-fill"></i></div>
                <div class="footer-contact-text">
                  <span>Email Us</span>
                  <p><?= $mail ?></p>
                </div>
              </a>
              <?php /* commented by shiwam..due to indore address..it can create confusion for users..so we will show only city address in footer..
              <div class="footer-contact-item">
                <div class="footer-contact-icon"><i class="bi bi-geo-alt-fill"></i></div>
                <div class="footer-contact-text">
                  <span>Head Office Address</span>
                  <p><?= $address ?></p>
                </div>
              </div>
              */?>
            </div>
            <div class="footer-contact-item mt-3">
                
                  
                  <?php if(@$related_branch['address']): ?>
                  <div class="footer-contact-icon"><i class="bi bi-geo-alt-fill"></i></div>
                <div class="footer-contact-text">
                  <span><?= $city ?> Address</span>
                  <p><?= $related_branch['address'] ?></p>
                  </div>
              </div>
                  <?php /* else: ?>
                  <span>Corporate Office Address</span>
                  <p><?= $address3 ?></p>
                  <?php */ endif; ?>
                
            </div>

            <div class="footer-payments mt-4 pt-3 border-top" style="border-color: rgba(255,255,255,0.1) !important;">
              <span class="h6 text-white d-flex align-items-center gap-2 mb-3" style="font-size: 15px;"><i class="fa-solid fa-shield-halved text-success"></i> Secure payments accepted:</span>
              <div class="d-flex flex-wrap gap-3 align-items-center mb-3 text-white small">
                <span><i class="fa-solid fa-mobile-screen-button text-info me-1"></i> UPI</span>
                <span><i class="fa-solid fa-credit-card text-info me-1"></i> Cards</span>
                <span><i class="fa-solid fa-building-columns text-info me-1"></i> Net banking</span>
                <span><i class="fa-solid fa-wallet text-info me-1"></i> Wallets</span>
              </div>
              <img loading="lazy" src="<?= base_url('assets/images/about/payment_icons.webp') ?>"
                alt="Accepted Payment Methods" class="img-fluid" style="border-radius: 4px; max-height: 35px;">
            </div>

          </div>
        </div>

      </div>
      <div class="footer-action-banner">
        <div class="action-banner-left">
          <div class="action-banner-icon">
            <i class="bi bi-box-seam"></i>
          </div>
          <div>
            <span class="h3 d-block mb-2 fw-bold text-white">Moving You Toward<br>a Better Tomorrow</span>
            <p>Safe moves. Stronger trust.</p>
          </div>
        </div>
        <div class="action-banner-right">
          <div class="banner-stat">
            <div class="banner-stat-icon"><i class="bi bi-shield-check"></i></div>
            <div class="banner-stat-text">
              <p>
                <?= $experience ?> Years
              </p>
              <span>Experience</span>
            </div>
          </div>
          <div class="banner-stat">
            <div class="banner-stat-icon"><i class="bi bi-people"></i></div>
            <div class="banner-stat-text">
              <p>10K+ Happy</p>
              <span>Customers</span>
            </div>
          </div>
          <div class="banner-stat">
            <div class="banner-stat-icon"><i class="bi bi-hand-thumbs-up"></i></div>
            <div class="banner-stat-text">
              <p>Affordable</p>
              <span>Pricing</span>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
          <div class="col-sm-3 col-6">
                <div class="pm-cred-card-minimal d-flex align-items-center">
                    <div class="pm-cred-icon-sm me-3">
                        <i class="bi bi-receipt"></i>
                    </div>
                    <div>
                        <span class="pm-cred-label-sm">GST NO</span>
                        <p class="pm-cred-value-sm mb-0">23IJNPP1499G1ZN</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-6">
                <div class="pm-cred-card-minimal d-flex align-items-center">
                    <div class="pm-cred-icon-sm me-3">
                        <i class="bi bi-person-vcard"></i>
                    </div>
                    <div>
                        <span class="pm-cred-label-sm">PAN CARD</span>
                        <p class="pm-cred-value-sm mb-0">IJNPP1499G</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-6">
                <div class="pm-cred-card-minimal d-flex align-items-center">
                    <div class="pm-cred-icon-sm me-3">
                        <i class="bi bi-building-check"></i>
                    </div>
                    <div>
                        <span class="pm-cred-label-sm">MSME REGISTRATION</span>
                        <p class="pm-cred-value-sm mb-0">UDYAM-MP-23-0231128</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-6">
                <div class="pm-cred-card-minimal d-flex align-items-center">
                    <div class="pm-cred-icon-sm me-3">
                        <i class="bi bi-award"></i>
                    </div>
                    <div>
                        <span class="pm-cred-label-sm">ISO CERTIFICATION</span>
                        <p class="pm-cred-value-sm mb-0">ISO 9001:2015 | E21421615228</p>
                    </div>
                </div>
            </div>
      </div>
      <div class="footer-bottom">
        <div class="footer-bottom-wrap">
          <div class="footer-copy">
            <i class="bi bi-shield-check"></i>
            <span>&copy; 2003-<?= date('Y')+2 ?> <?= $company3 ?>.<br>All Rights Reserved.</span>
          </div>
          <div class="footer-policy-links">
            <a href="<?= site_url('privacy-policy') ?>">Privacy Policy</a>
            <a href="<?= site_url('terms-and-conditions') ?>">Terms &amp; Conditions</a>
            <a href="<?= site_url('refund-policy') ?>">Refund Policy</a>
            <a href="<?= site_url('disclaimer') ?>">Disclaimer</a>
            <a href="<?= site_url('sitemap') ?>">Sitemap</a>
          </div>
        </div>
      </div>

    </div>
  </div>

</footer>

<?php if ($this->uri->segment(1) !== 'tracking' && $this->uri->segment(1) !== 'track-consignment'): ?>
  <a href="<?= site_url('tracking') ?>" class="floating-track-btn d-none d-lg-block" aria-label="Track Consignment/Shipment">Track
    Shipment</a>
<?php endif; ?>

<div class="floating-actions">
  <a href="<?= $phonehtml ?>" class="float-btn float-call" title="Call Now" aria-label="Call <?= $company3 ?> now">
    <div class="icon-wrap"><i class="bi bi-telephone-fill"></i></div>
    <span>Call Now</span>
  </a>
  <a href="https://wa.me/<?= $whatsapp ?>?text=<?= urlencode('Hello, I want to know about Packers and Movers services.') ?>"
   class="float-btn float-whatsapp"
   title="WhatsApp Us"
   target="_blank"
   rel="noopener noreferrer"
   aria-label="WhatsApp <?= $company3 ?>">
    <div class="icon-wrap"><i class="bi bi-whatsapp"></i></div>
    <span><?= $whatsapp ?></span>
</a>
  <?php if ($this->uri->segment(1) !== 'tracking' && $this->uri->segment(1) !== 'track-consignment'): ?>
    <a href="<?= site_url('tracking') ?>" class="float-btn float-track d-lg-none" title="Track Consignment">
      <div class="icon-wrap"><i class="bi bi-geo-alt-fill"></i></div>
      <span>Track Consignment</span>
    </a>
  <?php endif; ?>
</div>
<a href="#"
   class="mobile-quote-float-right d-lg-none"
   data-bs-toggle="modal"
   data-bs-target="#qteModal"
   title="Get a Quote"
   aria-label="Get a free quote from <?= $company3 ?>">
  <i class="bi bi-file-earmark-text-fill"></i>
  <span>Get a Quote</span>
</a>
<?php $this->load->view('contacts/quotemodal'); ?>
<?php $this->load->view('contacts/review_modal'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/js/custom.js') ?>"></script>

<div class="modal fade" id="imageLightboxModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent border-0">
      <div class="modal-header border-0 pb-0 position-absolute top-0 end-0" style="z-index: 1055;">
        <button type="button"
          class="btn btn-dark rounded-circle shadow d-flex align-items-center justify-content-center border border-secondary"
          data-bs-dismiss="modal" aria-label="Close"
          style="width: 40px; height: 40px; right: -15px; top: -15px; position: relative;">
          <i class="bi bi-x-lg fs-5"></i>
        </button>
      </div>
      <div class="modal-body text-center p-0 position-relative">
        <img loading="lazy" src="" id="lightboxImage" class="img-fluid rounded shadow-lg" alt="Preview"
          style="max-height: 85vh; object-fit: contain; background: rgba(0,0,0,0.8);">
        <p id="lightboxCaption"
          class="text-white mt-3 mb-0 fw-medium bg-dark bg-opacity-75 d-inline-block px-3 py-1 rounded shadow-sm"></p>
      </div>
    </div>
  </div>
</div>
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-17596273791">
  </script>
  <script>
    window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments) } gtag("js", new Date), gtag("config", "AW-17596273791"); function gtag_report_conversion(n) { return gtag("event", "conversion", { send_to: "AW-17596273791/cTQrCIS-tNQbEP-ox8ZB", value: 1, currency: "INR", event_callback: function () { void 0 !== n && (window.location = n) } }), !1 }
  </script>
  <script> 
    function gtag_report_conversion(url) {
      var callback = function () {
        if (typeof (url) != 'undefined') {
          window.location = url;
        }
      };
      gtag('event', 'conversion', {
        'send_to': 'AW-17596273791/cTQrCIS-tNQbEP-ox8ZB',
        'value': 1.0,
        'currency': 'INR',
        'event_callback': callback
      });
      return false;
    }
  </script>

<?php if(site_url() === 'https://vpmaxpackersandmovers.com/'): ?>
  <!-- Google Analytics tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-PYR7T18GBZ"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-PYR7T18GBZ');
  </script>
  <script type="text/javascript">
      (function(c,l,a,r,i,t,y){
          c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
          t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
          y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
      })(window, document, "clarity", "script", "yiljff7gnt");
  </script>
<?php endif; ?>
</body>
</html>