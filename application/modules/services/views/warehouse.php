<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Warehouse & Storage Services',
    'bc_desc' => 'Secure Warehouse and Storage Services by ' . $this->comp['company3'],
    'bc_h2' => 'Secure Warehouse and Storage Services',
    'breadcrumbs' => [
        ['name' => 'Services'],
        ['name' => 'Warehouse & Storage']
    ]
]);
?>

<section class="service-details-section my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-content">
                    <img loading="lazy" src="<?= base_url('assets/images/services/warehouse-storage-services.webp') ?>"
                        alt="Warehouse and Storage Services" class="img-fluid rounded mb-4 shadow-sm w-100">

                    <p>Finding extra space is not hard. Making sure that it is secure, organized, and there when you
                        need it is the true test.</p>

                    <p>There are various situations where you will need temporary storage services, such as waiting to
                        move into your new home, upgrading your office, coping with your inventory in the season of
                        peak, and moving to another city in phases.</p>

                    <p>Your belongings demand more than a mere empty space; they require a professional storage service
                        that provides safety and organisation.</p>

                    <p>With <b><?= $this->comp['company3'] ?></b> Warehouse and Storage Services, you will get a
                        dependable storage solution for both residential and commercial belongings. This space can be
                        used for short-term or long-term storage, and thus you will have a flexible storage choice.</p>

                    <h3>Storage Space to Accommodate Your Plan Changes</h3>
                    <p>Relocation plans are unpredictable.</p>

                    <p>Sometimes your property does not become ready when you expect. Your business can have a peak
                        inventory period. Also, families moving abroad can require temporary storage prior to final
                        delivery.</p>

                    <p>In such circumstances, you can use our storage service to keep your belongings safely until you
                        are ready for delivery.</p>

                    <p>In addition, the availability of the storage service helps you avoid overfilling your living or
                        working space with things which are not needed currently.</p>

                    <h3>Safety of Storage Service Begins Before the Warehouse</h3>
                    <p>Quality of storage services depends on what takes place before your belongings are stored in the
                        warehouse.</p>

                    <p>Every belonging is inspected, packed if necessary, marked, and documented before being stored in
                        the warehouse. Furniture is wrapped to protect its surfaces; electronic equipment is suitably
                        covered and fragile belongings are kept separately to prevent any unnecessary pressure on them.
                    </p>

                    <p>Such organised procedure allows for smooth retrieval and reduces risks of misplacing any
                        belonging. Small things done in advance matter a lot.</p>

                    <h3>More Than Just Storage, But Safety of Belongings</h3>
                    <p>The main goal of a warehouse is not only to house your cartons. It should help maintain the state
                        of the things you want to store.</p>

                    <p>Wood furniture needs to be protected against dust and moisture. The paperwork needs to be
                        organized and readily available. Electronic devices will benefit from a clean storage
                        environment to prevent dirtiness and unnecessary humidity.</p>

                    <p>All these aspects are sometimes ignored, but they play a very important role when your belongings
                        return to you after weeks or months of storage.</p>

                    <h3>Flexible Services for Your Home and Business</h3>
                    <p>Our Warehouse and Storage Services are convenient for storing various belongings, such as:</p>

                    <ul class="list-unstyled mb-4">
                        <li><i class="bi bi-box-seam-fill text-primary me-2"></i> Household furniture and appliances
                        </li>
                        <li><i class="bi bi-pc-display text-primary me-2"></i> Office furniture and workstations</li>
                        <li><i class="bi bi-boxes text-primary me-2"></i> Business inventory and stock</li>
                        <li><i class="bi bi-shop text-primary me-2"></i> Retail merchandise</li>
                        <li><i class="bi bi-folder-fill text-primary me-2"></i> Documents and records</li>
                        <li><i class="bi bi-easel-fill text-primary me-2"></i> Exhibition materials</li>
                        <li><i class="bi bi-tools text-primary me-2"></i> Commercial equipment</li>
                    </ul>

                    <p>No matter whether you need some extra space during relocation or a storage solution for your
                        business, we will offer you an appropriate solution.</p>

                    <h3>Security You Can Trust</h3>
                    <p>You definitely want to trust your valuable belongings when they are in storage.</p>

                    <p>That is why each consignment of goods is managed by a systematic inventory process, and thus
                        finding, retrieving and delivering your belongings becomes easier. Our professionals treat your
                        stored belongings carefully and keep the process of storing well-organised to preserve them
                        during storage period.</p>

                    <p>Knowledge that your belongings are handled in a professional way gives peace of mind while you
                        are planning your next step.</p>

                    <h3>Clear Pricing Without Surprises</h3>
                    <p>Storage charges depend on volume of the goods, storage period, need for packing, and additional
                        transportation services, if any.</p>

                    <p>Yes, professional storage costs money, but in many cases it turns out to be more economical than
                        purchasing the replacement for damaged belongings or renting a not-appropriate space without
                        professional protection.</p>

                    <p>Pricing should be clear, and that is why we explain all the services included in the quotation
                        before starting the storage process.</p>

                    <hr class="my-5">

                    <h3 class="mb-4">What Our Clients Say</h3>
                    <div class="row g-4 mb-5">
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm bg-light">
                                <div class="card-body">
                                    <div class="text-warning mb-2">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="card-text fst-italic">"Our apartment possession was delayed, so we needed
                                        temporary storage for almost six weeks. Everything came back in excellent
                                        condition, and the delivery was arranged exactly as we wanted it."</p>
                                    <h6 class="card-subtitle mt-3 text-primary">- Priya Malhotra, Gurugram</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm bg-light">
                                <div class="card-body">
                                    <div class="text-warning mb-2">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="card-text fst-italic">"During our office renovation we stored furniture
                                        and computer equipment here. The process was well organised, and retrieval of
                                        everything later became surprisingly easy."</p>
                                    <h6 class="card-subtitle mt-3 text-primary">- Rahul Jain, Pune</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="faq-section">
                        <h3 class="mb-4">Frequently Asked Questions</h3>
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <strong>How long can I use your storage facility?</strong>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Short term and long term storage can be provided based on your personal or
                                        business needs.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <strong>Can household and office goods be stored safely?</strong>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes. Our storage solutions can be used to safely store household furniture,
                                        office equipment, commercial inventory, documents, and other valuable
                                        belongings.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <strong>Do you provide packing of my belongings before storage?</strong>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Of course. We can professionally pack your belongings before putting them into
                                        storage.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="mt-5">Need Extra Space Without Any Troubles?</h3>
                    <p>Give us a call at <a href="<?= @$phonehtml ?>"
                            class="text-decoration-none fw-bold"><?= @$phone ?></a> to get a free quotation on our
                        professional and secure storage services for your household or business belongings.</p>
                </div>
            </div>
            <!-- Right Sidebar -->
            <div class="col-lg-4 mt-5 mt-lg-0">
                <?php include 'right_sidebar.php' ?>
            </div>
        </div>
    </div>
</section>
