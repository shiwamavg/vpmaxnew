<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Loading & Unloading Services',
    'bc_desc' => 'Professional Loading and Unloading Services by ' . $this->comp['company3'],
    'bc_h2' => 'Professional Loading and Unloading Services',
    'breadcrumbs' => [
        ['name' => 'Services'],
        ['name' => 'Loading & Unloading']
    ]
]);
?>

<section class="service-details-section my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-content">
                    <img loading="lazy" src="<?= base_url('assets/images/services/loading-unloading-services.webp') ?>"
                        alt="Loading and Unloading Services" class="img-fluid rounded mb-4 shadow-sm w-100">

                    <p>The safest move does not happen on the road. It begins from the moment of picking up the first
                        thing.</p>

                    <p>Lots of cargo gets spoiled even prior to the start of the journey as a result of wrong handling,
                        untidy stacking or careless unloading. Wardrobes are dragged on the floor, appliances tumble
                        down due to imbalance when moving down the stairs, and fragile packages are put under big
                        furniture. Such cases happen more often than one can imagine.</p>

                    <p>With <b><?= $this->comp['company3'] ?></b> Loading and Unloading Services, we take care of all
                        items you have to move around. No matter what you are relocating – be it a residence, an office,
                        a warehouse or a commercial unit, our professional and skilled team will move your belongings
                        with proper lifting and stacking methods.</p>

                    <h3>More Than Just Heavy Lifting</h3>
                    <p>Moving is often seen as a physical activity. However, there is much more to it than just
                        manpower.</p>

                    <p>Before the loading process starts, our team analyses the size, weight and handling needs of all
                        goods. All the bulky furniture is placed properly, all the fragile boxes are sorted out, and all
                        the delicate appliances are provided with additional protection before getting into the truck.
                        Some preliminary planning prevents many problems.</p>

                    <h3>It Is The Way You Load Goods That Really Matters</h3>
                    <p>All the moving trucks have limited space. But it has to be used in the proper way.</p>

                    <p>Large furniture serves as a base, medium-weight household items are loaded next, and fragile
                        goods go into the places where they will not face any extra pressure. Empty spaces are minimized
                        in order to prevent unnecessary moving during transit, and protective cushioning is provided
                        wherever necessary.</p>

                    <p>For instance, any refrigerator should be always loaded upright. The washing machine should be
                        loaded in a stable manner to prevent any vibrations, and all the glass furniture should be
                        provided with edge protection before entering the truck. These are no tricks; these are
                        every-day activities of professional movers.</p>

                    <h3>Skilled Hands Make A True Difference</h3>
                    <p>Each move has its items that cannot simply be replaced. It may be your family heirloom, an
                        expensive television, an office server or a unique antique cabinet. Our trained loaders take
                        care of the right handling of the goods using appropriate lifting techniques instead of using
                        their pure physical strength. As a result, your belongings become safer while all the
                        participants of the moving process stay healthy. (This is something that most customers realize
                        as soon as the work starts.)</p>

                    <h3>Flexible Service For Different Moving Needs</h3>
                    <p>Our Loading and Unloading Services can be used for different relocation needs, including
                        household moves, office shifting, warehouse transfers, commercial equipment relocation and
                        storage movements. We can adapt our services to your individual requirements regardless of
                        whether you have your own transport or not.</p>

                    <h3>Clear Pricing With No Hidden Charges</h3>
                    <p>The price of loading and unloading depends on practical factors such as the number of items to be
                        moved, manpower required, floor level, lift availability and handling of large or delicate
                        items.</p>

                    <p>Sure, hiring skilled professionals will increase your moving budget. But repairing any damaged
                        furniture or buying any broken appliance will definitely cost much more than the initial
                        investment in professional handling. Our quotations are transparent and prepared considering the
                        real volume of work.</p>

                    <hr class="my-5">

                    <h3 class="mb-4">What Customers Say</h3>
                    <div class="row g-4 mb-5">
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow-sm bg-light">
                                <div class="card-body">
                                    <div class="text-warning mb-2">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="card-text fst-italic">"We hired the team for loading and unloading
                                        purposes only since we have arranged our own truck. The way they handled the
                                        heavy furniture impressed us a lot, and everything was delivered safely without
                                        any scratches."</p>
                                    <h6 class="card-subtitle mt-3 text-primary">- Rajesh Kumar, Jaipur</h6>
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
                                    <p class="card-text fst-italic">"The team worked fast but not in rush mode. They
                                        have carefully moved our refrigerator and washing machine through the narrow
                                        staircase without causing any damage."</p>
                                    <h6 class="card-subtitle mt-3 text-primary">- Meenal Shah, Mumbai</h6>
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
                                    <p class="card-text fst-italic">"Our office furniture and computers were unloaded in
                                        an organized way which made it easier for us to arrange the new working place."
                                    </p>
                                    <h6 class="card-subtitle mt-3 text-primary">- Vivek Sharma, Noida</h6>
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
                                        <strong>Do you offer the service of loading and unloading without
                                            transporting?</strong>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes, we do. In case you have your own vehicle, our professional team will be
                                        ready to assist you in carrying out such tasks.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <strong>Do you use equipment for lifting heavy items?</strong>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes, we do. We use moving trolleys, lifting straps, loading ramps and other
                                        handling equipment where necessary.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <strong>Is this service available for offices and warehouses?</strong>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Certainly. Our Loading and Unloading Services are provided for residential,
                                        commercial, office and warehouse relocations.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="mt-5">Do You Need Loading and Unloading Assistance?</h3>
                    <p>Call <a href="<?= @$phonehtml ?>" class="text-decoration-none fw-bold"><?= @$phone ?></a> and get
                        your free quotation today.</p>
                </div>
            </div>
            <!-- Right Sidebar -->
            <div class="col-lg-4 mt-5 mt-lg-0">
                <?php include 'right_sidebar.php' ?>
            </div>
        </div>
    </div>
</section>
