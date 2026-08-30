<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Premium Packing Material Guide',
    'bc_desc' => "Learn about the high-quality materials we use to keep your belongings safe",
    'breadcrumbs' => [
        ['name' => 'Packing Material Guide']
    ]
]); ?>

<section class="py-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="tips-wrapper p-4 p-md-5 shadow-sm bg-white rounded">
          <div class="box-title mb-4 border-start border-4 ps-3 border-primary">
            <h2 class="fw-bold text-dark">Why Quality Packing Material Matters for Safe Relocation</h2>
          </div>

          <div class="text-content text-secondary">
            <p>
              At <strong><?= $this->comp['company3'] ?></strong>, we understand that the safety of your precious belongings during transit depends entirely on the quality of the packing materials used. Shifting houses or offices involves moving fragile, valuable, and heavy items over long distances. To ensure zero damage, we exclusively use premium, industry-standard packing materials. Here is a comprehensive guide to the materials we use for a secure move.
            </p>

            <h3 class="fw-semibold mt-4 text-dark"><i class="bi bi-box-seam text-primary me-2"></i>1. Corrugated Cardboard Boxes</h3>
            <p>Corrugated boxes form the backbone of any shifting process. We use multi-layered, sturdy corrugated boxes to pack electronics, kitchenware, books, and decorative items. These boxes provide a rigid structure and excellent cushioning, preventing your goods from being crushed under pressure during transit.</p>

            <h3 class="fw-semibold mt-4 text-dark"><i class="bi bi-record-circle text-primary me-2"></i>2. High-Quality Bubble Wrap</h3>
            <p>Fragile items like glassware, mirrors, crockery, and electronic appliances need specialized care. We generously use premium bubble wrap that features air-filled hemispheres to absorb shocks and vibrations. This acts as a perfect protective barrier against bumps on the road.</p>

            <h3 class="fw-semibold mt-4 text-dark"><i class="bi bi-layers text-primary me-2"></i>3. Thermocol Sheets and Peanuts</h3>
            <p>For highly sensitive electronic items like TVs, refrigerators, and computers, we place custom-cut thermocol sheets at the base and sides of the boxes. Thermocol peanuts are used to fill any empty gaps inside the boxes so the items do not move or shift during the journey.</p>

            <h3 class="fw-semibold mt-4 text-dark"><i class="bi bi-file-earmark-break text-primary me-2"></i>4. Corrugated Sheets</h3>
            <p>Heavy furniture like wooden beds, dining tables, and wardrobes are prone to scratches and edge-chipping. We wrap these large items in thick corrugated sheets before moving them. This protects the polish and structural integrity of your furniture.</p>

            <h3 class="fw-semibold mt-4 text-dark"><i class="bi bi-vinyl text-primary me-2"></i>5. Stretch Film / Shrink Wrap</h3>
            <p>Stretch film is an essential material used as the final layer of packing. Once items are packed in boxes or wrapped in corrugated sheets, we bind them tightly with shrink wrap. This makes the packages water-resistant, dust-proof, and holds all protective layers securely in place.</p>

            <h3 class="fw-semibold mt-4 text-dark"><i class="bi bi-sticky text-primary me-2"></i>6. Heavy-Duty Packing Tape</h3>
            <p>To seal the boxes and ensure they don't pop open, we use pressure-sensitive, wide packing tapes with strong adhesive properties. This guarantees that your packed cartons remain tightly sealed from the origin to the destination.</p>

            <h3 class="fw-semibold mt-4 text-dark"><i class="bi bi-basket text-primary me-2"></i>7. Specialty Wardrobe Cartons</h3>
            <p>For your expensive clothing, suits, and dresses, we use specialized wardrobe cartons that come with an integrated hanging bar. This allows us to transport your clothes straight from your closet to the carton without folding them, keeping them wrinkle-free.</p>
            
            <div class="alert alert-primary mt-5">
              <h5 class="fw-bold"><i class="bi bi-shield-check me-2"></i>Our Packing Guarantee</h5>
              <p class="mb-0">Using the right material is only half the job. Our trained packing crew ensures that every item is packed systematically, labeled clearly, and handled with the utmost care. Your peace of mind is our top priority.</p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
