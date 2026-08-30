<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'The Ultimate Moving Guide',
    'bc_desc' => "Step-by-step checklist for a smooth and stress-free relocation",
    'breadcrumbs' => [
        ['name' => 'Moving Guide']
    ]
]); ?>

<section class="py-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="tips-wrapper p-4 p-md-5 shadow-sm bg-white rounded">
          <div class="box-title mb-4 border-start border-4 ps-3 border-primary">
            <h2 class="fw-bold text-dark">Your Comprehensive Checklist for Moving Day</h2>
          </div>

          <div class="text-content text-secondary">
            <p>
              Relocating to a new home or office can be overwhelming, but with the right planning, it doesn't have to be. <strong><?= $this->comp['company3'] ?></strong> has compiled this ultimate moving guide based on decades of experience. Follow these chronological steps to ensure nothing is forgotten and your transition is as smooth as possible.
            </p>

            <h3 class="fw-semibold mt-5 text-primary border-bottom pb-2">Phase 1: One Month Before Moving</h3>
            
            <h5 class="fw-bold mt-4 text-dark"><i class="bi bi-journal-check text-primary me-2"></i>1. Declutter and Sort</h5>
            <p>Go through every room and sort your items into three categories: keep, donate/sell, and throw away. The less you move, the cheaper and easier the process will be.</p>

            <h5 class="fw-bold mt-4 text-dark"><i class="bi bi-file-earmark-person text-primary me-2"></i>2. Organize Important Documents</h5>
            <p>Gather all essential records such as medical, dental, school, and veterinary documents. Keep them in a secure, clearly labeled folder that travels with you personally, not in the moving truck.</p>

            <h5 class="fw-bold mt-4 text-dark"><i class="bi bi-telephone-outbound text-primary me-2"></i>3. Book Your Movers</h5>
            <p>Finalize your moving date and book your services with <strong><?= $this->comp['company3'] ?></strong>. Getting this locked in early ensures you get your preferred time slot.</p>


            <h3 class="fw-semibold mt-5 text-primary border-bottom pb-2">Phase 2: Two Weeks Before Moving</h3>

            <h5 class="fw-bold mt-4 text-dark"><i class="bi bi-envelope text-primary me-2"></i>1. Change of Address</h5>
            <p>Notify the post office of your move. Update your address with banks, credit card companies, insurance providers, subscriptions, and any other important institutions.</p>

            <h5 class="fw-bold mt-4 text-dark"><i class="bi bi-plug text-primary me-2"></i>2. Transfer Utilities</h5>
            <p>Schedule the disconnection of your current utilities (gas, electricity, water, internet) for the day after you leave, and arrange for the connection of utilities at your new home for the day before you arrive.</p>


            <h3 class="fw-semibold mt-5 text-primary border-bottom pb-2">Phase 3: One Week Before Moving</h3>

            <h5 class="fw-bold mt-4 text-dark"><i class="bi bi-bag-plus text-primary me-2"></i>1. Pack an Essentials Box</h5>
            <p>Pack a suitcase or box with things you will need immediately upon arrival. This should include toiletries, a change of clothes, basic tools, chargers, medications, and some basic kitchen items.</p>

            <h5 class="fw-bold mt-4 text-dark"><i class="bi bi-snow text-primary me-2"></i>2. Defrost the Refrigerator</h5>
            <p>Empty your refrigerator and freezer. Clean them thoroughly and let them defrost at least 24 hours before the moving day to prevent water leaks and mold growth.</p>


            <h3 class="fw-semibold mt-5 text-primary border-bottom pb-2">Phase 4: Moving Day</h3>

            <h5 class="fw-bold mt-4 text-dark"><i class="bi bi-person-check text-primary me-2"></i>1. Be Present</h5>
            <p>Ensure you or a trusted representative is present when the moving crew arrives. Walk them through the house and point out fragile items or things that require special attention.</p>

            <h5 class="fw-bold mt-4 text-dark"><i class="bi bi-search text-primary me-2"></i>2. Final Walkthrough</h5>
            <p>Before the truck departs, do a final sweep of every room, closet, cabinet, and the garage to make sure absolutely nothing is left behind. Turn off all lights and lock the windows and doors.</p>

            <div class="alert alert-primary mt-5">
              <h5 class="fw-bold"><i class="bi bi-info-circle-fill me-2"></i>Need Professional Help?</h5>
              <p class="mb-0">Skip the stress entirely. Let our expert team handle the packing, loading, and transportation while you focus on settling into your new space. <a href="<?= site_url('contact-us') ?>" class="fw-bold alert-link">Contact us today for a free quote!</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
