<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Household Shifting Services',
    'bc_desc' => 'Top-Rated Household Shifting Services by ' . $this->comp['company3'],
    'bc_h2' => 'Top-Rated Household Shifting Services',
    'breadcrumbs' => [
        ['name' => 'Services'],
        ['name' => 'Household Shifting']
    ]
]);
?>

<section class="service-details-section my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-content">
                    <img loading="lazy" src="<?= base_url('assets/images/services/household-shifting-services.webp') ?>"
                        alt="Household Shifting Services" class="img-fluid rounded mb-4 shadow-sm w-100">

                    <p>Relocating households isn't tough owing to the distance; it's tough because of all that each
                        object means to you.</p>

                    <p>It could be the dinner table around which you dine every night with your loved ones. It could be
                        the wardrobe that hasn't been relocated in a decade. It could be your child's study table,
                        neatly organized as per his preference. Relocating household items isn't easy, and that's
                        precisely what we understand at <b><?= $this->comp['company3'] ?></b>.</p>

                    <p>Our <strong>Household Shifting Services</strong> are designed for families who wish to make their
                        move planned, hassle-free, and with no unexpected incidents.</p>

                    <p>Be it a relocation within the apartment or to a standalone house, state-to-state relocation, our
                        efficient team plans your relocation process instead of doing it in haste.</p>

                    <h3>Each House Relocation has Unique Requirements</h3>
                    <p>Not each household relocation is similar in its needs. A single individual looking for a change
                        in accommodation has entirely different requirements compared to the family moving to their
                        full-furnished four-bedroom house. Some clients would need help with packing, and some with the
                        relocation only. And that is how, initially, we evaluate your requirements before suggesting any
                        move-in strategy for you.</p>

                    <p>The pre-move inspection will help us understand the furniture items that require careful handling
                        during moving. This will also include electronic appliances and other items which are precious
                        and require careful handling during the relocation process. Just a simple step that avoids any
                        confusion on moving day.</p>

                    <h3>Packing is Where the Perfect Household Relocation Starts</h3>
                    <p>Most people tend to evaluate the moving company based on the truck it sends. However, it's during
                        the packing phase that your move will either succeed or fail.</p>

                    <p>Let's say the household item is the kitchenware. Furniture items like plates made of ceramic
                        cannot be placed in the same box as stainless steel utensils. Prior to packing, the glass
                        shelving requires edge protection and mattresses should have moisture resistant coverings
                        especially in case of the monsoon season. It might seem very easy but is critical in ensuring
                        that the moving is done successfully.</p>

                    <h3>The Moving Day Shouldn't be Hectic</h3>
                    <p>One of the major concerns of homeowners is that the entire household is packed in dozens of
                        similar cartons.</p>

                    <p>To keep it from happening, we use a room-wise labelling system. All cartons are labeled in such a
                        way that it becomes easy to recognize the essential items after the delivery. The furniture is
                        properly dismantled, hardware is separately packed, and large household items are positioned
                        inside the van to ensure minimum motion during transportation. (It's something that homeowners
                        appreciate when they start unpacking.)</p>

                    <h3>What Decides the Cost?</h3>
                    <p>Most of our clients ask about it as the first thing. Depending on a few practical aspects such as
                        the size of the house, total number of household items, the travel distance, packing needs,
                        floor accessibility, and any additional service like unpacking or temporary storage, the cost of
                        the relocation is fixed.</p>

                    <p>It's true that hiring movers would cost money. But it'll cost you a lot more if you replace all
                        the broken furniture and appliances or spend multiple days off work due to the messed up
                        relocation process. We feel that the quote should never contain any hidden costs.</p>

                    <h3>Why You Can Trust <b><?= $this->comp['company3'] ?></b> with Your Family</h3>
                    <p>Families remember not the cartons but how calmly the team handles their household relocation.</p>

                    <p>Our relocation specialists come to your place with appropriate packing materials, planning and
                        the knowledge of the job. Each and every household item is handled carefully, and the goal
                        remains the same: to ensure your smooth transition to the new place. Here is what we aim to do
                        with every household relocation.</p>

                    <hr class="my-5">

                    <div class="faq-section">
                        <h3 class="mb-4">FAQs</h3>
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <strong>Can you move fragile household items?</strong>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes. Fragile items including artwork, glassware, mirrors, electronic items, and
                                        others are packed carefully in packaging material and are moved separately.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <strong>Do you offer packing materials?</strong>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes. We offer quality cartons, bubble wraps, foam sheets, and other packaging
                                        materials.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <strong>Do you help in unpacking after moving?</strong>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes. We can also help with unpacking and positioning of the furniture if
                                        required.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="mt-5">Let's Make Your Next Move Easy</h3>
                    <p>Contact us at <a href="<?= @$phonehtml ?>"
                            class="text-decoration-none fw-bold"><?= @$phone ?></a> for a free moving quote today. Let
                        <b><?= $this->comp['company3'] ?></b> take care of your household relocation while you focus on
                        settling down into the new place.
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
