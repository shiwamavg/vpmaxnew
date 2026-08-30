<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Local Shifting Services',
    'bc_desc' => 'Fast and Secure Local Shifting Services by ' . $this->comp['company3'],
    'bc_h2' => 'Fast and Secure Local Shifting Services',
    'breadcrumbs' => [
        ['name' => 'Services'],
        ['name' => 'Local Shifting']
    ]
]);
?>

<section class="service-details-section my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-content">
                    <img loading="lazy" src="<?= base_url('assets/images/services/local-shifting-services.webp') ?>"
                        alt="Local Shifting Services" class="img-fluid rounded mb-4 shadow-sm w-100">

                    <p>Not all long distance moves require a truck ride hundreds of kilometers away. There could be a
                        requirement for you to relocate to a bigger flat, stay closer to your workplace or shift to a
                        new neighbourhood for the convenience of your family. Although distance is comparatively short,
                        effort put in the process is similar to that done during long distance shifts. Furniture has to
                        be handled carefully, delicate articles will require proper packing, and everything must reach
                        its destination intact.</p>

                    <p><b><?= $this->comp['company3'] ?></b> provides its services in the form of Local Shifting
                        Services to ensure that every relocation done by you within the city is done systematically and
                        without any stress.</p>

                    <h3>Planning for Short Distances Too!</h3>
                    <p>Short distances do not mean shorter efforts to plan for the moves. One of the biggest mistakes
                        that people make when it comes to planning for local shifts is that they plan to pack and
                        relocate the items at the last moment.</p>

                    <p>We start by understanding your needs, volume of household goods to be relocated and then
                        accordingly plan for the process to make sure that you are able to accomplish the task
                        efficiently and without any risk of damage or confusion. Planning will always make your job
                        easier.</p>

                    <h3>Proper Care Beyond Just Packing</h3>
                    <p>There are different things in everyone's homes that require different levels of protection. Glass
                        centre table, wooden wardrobe, LED TV or washing machine cannot be packed in the same way.</p>

                    <p>Once packing is over, furniture is securely wrapped up, delicate articles get additional
                        cushioning while electronic appliances are prepared for transportation. Bigger furniture pieces
                        are dismantled as per necessity to easily pass through narrow corridors and lifts of apartments.
                        These small steps will save your belongings from damages throughout the move.</p>

                    <h3>Move Day Should Be Efficient</h3>
                    <p>It is not about moving fast, but it is more about moving smartly. Systematic loading ensures that
                        heaviest furniture forms the base whereas lighter cartons are kept safe. Every box is labeled
                        according to the room it belongs to so that identification becomes easy when unloading takes
                        place. All these small things save many hours when it comes to unpacking.</p>

                    <h3>Ideal for Apartments, Independent Houses and Offices</h3>
                    <p>Our Local Shifting Services can be used for various requirements such as:</p>

                    <ul class="list-unstyled mb-4">
                        <li><i class="bi bi-building text-primary me-2"></i> Apartments & Independent houses</li>
                        <li><i class="bi bi-house-door-fill text-primary me-2"></i> Villas & Gated communities</li>
                        <li><i class="bi bi-door-open-fill text-primary me-2"></i> Studio apartments</li>
                        <li><i class="bi bi-briefcase-fill text-primary me-2"></i> Office cabin & workspace</li>
                        <li><i class="bi bi-key-fill text-primary me-2"></i> Relocation from rental properties</li>
                        <li><i class="bi bi-book-half text-primary me-2"></i> Student accommodations relocation</li>
                    </ul>

                    <p>No matter how close or far the move, we take the same amount of care.</p>

                    <h3>Transparent Pricing without Surprises</h3>
                    <p>Requirements of every move are different therefore the price charged will depend upon the volume
                        of household items to be relocated, packaging needs, accessibility of floors and lifts and also
                        the size of the vehicle.</p>

                    <p>We think that our customers must be aware of how much money they will be spending on their
                        relocation. Therefore, every quotation provided by us is transparent in nature.</p>

                    <h3>Why Families Choose Professional Local Movers?</h3>
                    <p>As the time required for a local move is only for one day; hence, there cannot be any mistake
                        involved in it.</p>

                    <p>Experienced movers know how to protect your furniture while going through stairs, apartment
                        corridors and parking areas. Also, they know how to load the vehicle so that there is minimal
                        movement of your items during transit.</p>

                    <p>This results in a smooth transition with minimum stress.</p>

                    <hr class="my-5">

                    <h3 class="mb-4">Testimonials of our Customers</h3>
                    <div class="row g-4 mb-5">
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow-sm bg-light">
                                <div class="card-body">
                                    <div class="text-warning mb-2">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="card-text fst-italic">"Shifted to a new apartment that was just 12
                                        kilometers away from my present home and the entire process was accomplished in
                                        a few hours. Everything was packed nicely and furniture was taken care of by the
                                        team."</p>
                                    <h6 class="card-subtitle mt-3 text-primary">- Kavita Sharma, Noida</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow-sm bg-light">
                                <div class="card-body">
                                    <div class="text-warning mb-2">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="card-text fst-italic">"I was relocating to a rented apartment and wanted
                                        the process completed within a few hours as I had to vacate the previous place
                                        before evening. Everything was packed, loaded, unloaded and delivered as
                                        scheduled."</p>
                                    <h6 class="card-subtitle mt-3 text-primary">- Rohan Patel, Ahmedabad</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow-sm bg-light">
                                <div class="card-body">
                                    <div class="text-warning mb-2">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="card-text fst-italic">"Carton labeling helped me to unpack so quickly. I
                                        did not have to rummage through so many cartons for my daily needs once we
                                        reached our new home."</p>
                                    <h6 class="card-subtitle mt-3 text-primary">- Anjali Mehta, Pune</h6>
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
                                        <strong>How long does a local shifting service generally take?</strong>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Most local moves are done in a single day depending upon the quantity of
                                        household items and distance.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <strong>Do you provide packing materials?</strong>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes. We provide all types of packing materials that include cartons, bubble
                                        wrap, stretch film, foam sheets etc.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <strong>Can you move large furniture pieces safely?</strong>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Absolutely! Dismantling of bulky furniture is done when needed.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        <strong>Is a pre-moving survey important?</strong>
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        It is always beneficial as it helps us understand your moving requirements and
                                        provides you quotations without any surprises.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="mt-5">Want to Make a Local Move?</h3>
                    <p>Contact <a href="<?= @$phonehtml ?>" class="text-decoration-none fw-bold"><?= @$phone ?></a> now
                        for a free quote. Let <b><?= $this->comp['company3'] ?></b> make your local move easy and
                        completely hassle-free!</p>
                </div>
            </div>
            <!-- Right Sidebar -->
            <div class="col-lg-4 mt-5 mt-lg-0">
                <?php include 'right_sidebar.php' ?>
            </div>
        </div>
    </div>
</section>
