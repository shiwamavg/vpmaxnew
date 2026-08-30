<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Packing and Moving Services',
    'bc_desc' => 'Professional Packing and Moving Services by ' . $this->comp['company3'],
    'bc_h2' => 'Expert Packing and Moving Solutions',
    'breadcrumbs' => [
        ['name' => 'Services'],
        ['name' => 'Packing and Moving']
    ]
]);
?>

<section class="service-details-section my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-content">
                    <img loading="lazy" src="<?= base_url('assets/images/services/domestic-shifting-services.webp') ?>"
                        alt="Packing and Moving Services" class="img-fluid rounded mb-4 shadow-sm w-100">

                    <p>Relocating involves more than just transporting items from one place to another; it's about ensuring everything arrives safely, securely, and in perfect condition. The key to a successful move lies in professional packing.</p>

                    <p>At <b><?= $this->comp['company3'] ?></b>, we understand that packing is the most critical phase of relocation. Whether you are moving across the street or across the country, our <strong>Packing and Moving Services</strong> are designed to take the stress out of your transition.</p>

                    <h3>Why Professional Packing Matters</h3>
                    <p>Many people underestimate the time and effort required to pack an entire home or office. Improper packing often leads to damaged goods, broken fragile items, and unnecessary chaos on moving day. By opting for professional packing and moving services, you ensure that every item—from your delicate chinaware to your bulky furniture—is handled with the utmost care.</p>

                    <p>Our team uses high-quality packing materials, including sturdy corrugated boxes, bubble wrap, packing paper, and specialized foam wrapping, to provide maximum protection for your belongings during transit.</p>

                    <h3>Our Comprehensive Packing Process</h3>
                    <p>We don't believe in a one-size-fits-all approach. Different items require different packing techniques:</p>
                    <ul>
                        <li><strong>Fragile Items:</strong> Glassware, mirrors, and artwork are wrapped individually in bubble wrap and placed in customized, shock-absorbent boxes.</li>
                        <li><strong>Furniture:</strong> Large furniture pieces are carefully dismantled (if needed) and wrapped in thick moving blankets to prevent scratches and dents.</li>
                        <li><strong>Electronics:</strong> TVs, computers, and appliances are packed using anti-static materials and secure padding.</li>
                        <li><strong>Clothing and Linen:</strong> We use specially designed wardrobe boxes so your clothes stay wrinkle-free and clean.</li>
                    </ul>

                    <h3>Systematic Labeling and Organization</h3>
                    <p>Packing is only half the battle; unpacking can be just as daunting if things aren't organized. We implement a systematic, room-by-room labeling process. Every box is clearly marked with its contents and the room it belongs to, making the unloading and unpacking process a breeze. You won't be left searching for your essentials on your first night in your new home!</p>

                    <h3>Safe and Secure Transportation</h3>
                    <p>Once everything is expertly packed, our trained professionals load the boxes into our specialized moving vehicles. We utilize modern equipment and secure tying techniques to ensure that your belongings do not shift or get damaged during the journey. Our experienced drivers navigate the best routes to deliver your goods safely and on time.</p>

                    <hr class="my-5">

                    <div class="faq-section">
                        <h3 class="mb-4">Frequently Asked Questions</h3>
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <strong>Do I need to pack anything myself?</strong>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        No, you don't have to pack anything. Our professional team handles everything from start to finish. However, we do recommend that you pack your personal documents, jewelry, and immediately required medications separately.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <strong>What kind of packing materials do you use?</strong>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        We use premium quality packing materials, including heavy-duty cartons, bubble wrap, packing peanuts, edge protectors, and specialized wardrobe boxes to ensure the safety of your items.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <strong>Will you help with unpacking at the destination?</strong>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes, our services don't just stop at delivering your goods. If requested, our team can assist with unpacking, removing the debris, and even setting up your furniture in your new home.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="mt-5">Ready for a Stress-Free Move?</h3>
                    <p>Don't let the hassle of packing ruin the excitement of your new journey. Contact us at <a href="tel:<?= @$phonehtml ?>"
                            class="text-decoration-none fw-bold"><?= @$phone ?></a> today for a comprehensive packing and moving quote. Let
                        <b><?= $this->comp['company3'] ?></b> handle the heavy lifting while you focus on your new beginning!
                    </p>
                </div>
            </div>
            <!-- Right Sidebar -->
            <div class="col-lg-4 mt-5 mt-lg-0">
                <?php include 'right_sidebar.php' ?>
            </div>
        </div>
    </div>
</section>
