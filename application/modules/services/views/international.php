<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'International Shifting Services',
    'bc_desc' => 'Expert International Shifting Services by ' . $this->comp['company3'],
    'bc_h2' => 'Expert International Shifting Services',
    'breadcrumbs' => [
        ['name' => 'Services'],
        ['name' => 'International Shifting']
    ]
]);
?>

<section class="service-details-section my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-content">
                    <img loading="lazy" src="<?= base_url('assets/images/services/international-shifting-services.webp') ?>"
                        alt="International Shifting Services" class="img-fluid rounded mb-4 shadow-sm w-100">

                    <p>The process of international move is not always the most straightforward one. There are documents
                        that need to be sorted out, schedules that need to be coordinated, rules of customizing to learn
                        and belongings that have to be shipped from one country to another. Relocation overseas can be
                        quite stressful, particularly when it is your first time moving abroad. Professional movers can
                        definitely help.</p>

                    <p><b><?= $this->comp['company3'] ?></b> assist in international relocation of families, business
                        people, students, and companies with well-planned process and reliable assistance. Every
                        relocation is unique and therefore cannot be managed by standard packages or check-lists. Our
                        experts find out your specific needs and conditions to organize a proper international move in a
                        timely manner.</p>

                    <p>For example, relocating a family with children has its peculiarities and differs from relocation
                        of a student with several cardboard boxes to Australia. A person who is relocating to work in
                        Dubai usually needs an urgent move and it differs from a family which relocates to Europe with
                        some delay.</p>

                    <p>All of these factors determine details of international relocation starting from packaging
                        material and ending with shipping methods.</p>

                    <h3>Good Planning Is Key to Successful International Relocation</h3>
                    <p>Successful international relocation depends more on careful planning than transportation alone.
                    </p>

                    <p>Before the packing process starts our team discusses your destination, scheduled moving date,
                        volume of shipment and special items you have. This planning step allows avoiding problems in
                        future, namely at the stage of documentation and customs clearing.</p>

                    <p>Our specialists will advise you on choosing air and sea freight depending on the urgency of the
                        shipment. Sometimes small steps done at the initial stage save you time and money.</p>

                    <h3>Packaging for Overcoming Hundreds of Kilometres</h3>
                    <p>The packing process for overseas moving is much more complicated than moving domestically.</p>

                    <p>The dining table is being transported through dozens of manipulations in warehouses, at ports and
                        distribution centers. The same concerns about televisions, pictures, kitchenware and wooden
                        furniture. That is why our team uses export quality boxes, cushioning material, moisture
                        resistant packing material and protective corner guards depending on type of item.</p>

                    <p>There is one more thing which people usually do not think about. The item being transported by
                        sea route is subjected to humidity inside of the container due to changing temperature. Some
                        sensitive items require appropriate wrapping to prevent that. This is one of those details which
                        a customer usually finds out only when he or she is explained the reason.</p>

                    <h3>Documentation Matters Much More than Most People Think</h3>
                    <p>Just one missing document may delay your international shipment.</p>

                    <p>Our team assists you in preparing inventory, shipment documents, customs documents and other
                        paperwork which are necessary before dispatch of the shipment. The right documents will speed up
                        the processing of your shipment greatly and prevent any possible delays. It is especially useful
                        if you are relocating for work or education and have exact joining dates.</p>

                    <h3>What Makes Your International Relocation Expensive?</h3>
                    <p>Most of the customers expect to have a fixed price. Unfortunately, no two international
                        relocations are similar to each other. Destination country, volume of shipment, freight type,
                        customs requirements, insurance and delivery point influence the quotation.</p>

                    <p>Of course, an international move requires spending money, but good planning will help avoid far
                        greater costs incurred from the delay of the process, damaged goods and lost paperwork. We
                        believe that it is better to explain the cost truthfully than offer unrealistically low prices.
                    </p>

                    <h3>Why Many Customers Choose <b><?= $this->comp['company3'] ?></b></h3>
                    <p>Customers appreciate our attention to pre-transportation planning. Communication, packing,
                        transportation, and coordination are the key factors in any international move.</p>

                    <p>Moving to another country is always a big step in your life. Your logistic partner should not
                        complicate it even more.</p>

                    <hr class="my-5">

                    <div class="faq-section">
                        <h3 class="mb-4">Frequently Asked Questions</h3>
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <strong>How early should I schedule my international relocation?</strong>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Three to four weeks before your preferred moving date is enough for planning,
                                        documentation and shipping.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <strong>Can you assist me with customs paperwork?</strong>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        We will be glad to help you prepare all required documents for international
                                        shipping and clearance by our relocation experts.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <strong>What mode of transportation is preferable – air or sea?</strong>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        It depends on your timeline and volume of shipment. Air transport is faster,
                                        while sea transport is cheaper.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        <strong>Is my shipment insured?</strong>
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        The transit insurance is available for additional protection of your belongings
                                        during international transportation.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="mt-5">Are You Ready to Move Abroad?</h3>
                    <p>Call us at <a href="<?= @$phonehtml ?>" class="text-decoration-none fw-bold"><?= @$phone ?></a>
                        for consultation and quotation.</p>
                </div>
            </div>
            <!-- Right Sidebar -->
            <div class="col-lg-4 mt-5 mt-lg-0">
                <?php include 'right_sidebar.php' ?>
            </div>
        </div>
    </div>
</section>
