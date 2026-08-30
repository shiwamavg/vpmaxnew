<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Office Shifting Services',
    'bc_desc' => 'Professional Office Shifting Services by ' . $this->comp['company3'],
    'bc_h2' => 'Professional Office Shifting Services',
    'breadcrumbs' => [
        ['name' => 'Services'],
        ['name' => 'Office Shifting']
    ]
]);
?>

<section class="service-details-section my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-content">
                    <img loading="lazy" src="<?= base_url('assets/images/services/office-shifting-services.webp') ?>"
                        alt="Office Shifting Services" class="img-fluid rounded mb-4 shadow-sm w-100">

                    <p>Office relocation is much more than just changing addresses. It involves relocating your business
                        without causing a pause to your productivity. Every workstation, server, meeting room, cabinet
                        and piece of equipment plays an important role in your everyday work. Efficient office
                        relocation will ensure your team's focus, asset protection and continuous functioning of your
                        business without interruptions.</p>

                    <p>At <b><?= $this->comp['company3'] ?></b>, we offer Office Shifting Services for startup
                        businesses, corporate offices, IT companies, educational institutions, retail shops and
                        commercial businesses. Our relocation experts will create a relocation strategy for you to
                        ensure fast resumption of work and protection of your business assets during the process.</p>

                    <h3>Business Is Never On Hold While Relocating</h3>
                    <p>Every business functions within deadlines. This is why office relocation should be done according
                        to your schedule, not vice versa.</p>

                    <p>Before the relocation process, our team analyses your office layout, your needs and prepares the
                        relocation strategy to suit your working hours. Many businesses prefer relocation during
                        weekends or outside working hours, while others prefer to perform phased shifts to enable
                        different departments to continue to function without interruption. Efficient office relocation
                        begins even before any item is moved.</p>

                    <h3>Every Department Should Have Its Relocation Strategy</h3>
                    <p>Your office is not made of identical things. The finance department contains confidential
                        documents. The IT department is responsible for servers and networking equipment. Conference
                        rooms have expensive electronics, while the reception area is decorated with expensive interior
                        and customized furniture.</p>

                    <p>In order to make the relocation process smooth, we organize and mark all sections separately. It
                        will help your employees to identify their equipment easily and reduce confusion when installing
                        the furniture in the new office. Little details such as this can save you a lot of time on the
                        first working day.</p>

                    <h3>Technology Requires Much More Than Bubble Wrapping</h3>
                    <p>Computers and office electronics are the most sensitive items during office relocation process.
                    </p>

                    <p>Desktop systems, monitors, printers, networking equipment, servers need to be disconnected
                        properly, securely wrapped and properly placed in the truck. Cable lines are organized
                        separately, while accessories are wrapped in one box for easier reinstallation.</p>

                    <p>Relocation of the technology-intensive business becomes less complicated due to organized
                        handling.</p>

                    <h3>Moving Process Fitting Your Team's Schedule</h3>
                    <p>Every office is different and has its own workflow and we respect this. Some businesses prefer
                        installation of the furniture before the arrival of the employees. Others prefer to set up
                        certain departments first. Our team will coordinate with your schedule of relocation and install
                        your furniture, workstations and other equipment in accordance with your office layout. The
                        result is an office that is ready for work, not another project you have to finish.</p>

                    <h3>Quotes Clear As Water. No Hidden Charges.</h3>
                    <p>Every office relocation is unique, which is why we don't use a standardized pricing system.</p>

                    <p>The price is based on office size, number of workstations, furniture and special equipment,
                        relocation distance, floor access and other services.</p>

                    <p>We provide you with detailed quotes, and you can make your budget for office relocation without
                        surprises.</p>

                    <h3>Why Choose <b><?= $this->comp['company3'] ?></b></h3>
                    <p>Office relocation is not considered to be a success only when everything arrives at its
                        destination.</p>

                    <p>It is successful when employees enter their new workplace and start working without unnecessary
                        delays.</p>

                    <p>Our skilled relocation team focuses on careful handling, efficient execution, timely coordination
                        and communication throughout the whole process. This is why businesses choose
                        <b><?= $this->comp['company3'] ?></b> for professional office relocation services.
                    </p>

                    <hr class="my-5">

                    <div class="faq-section">
                        <h3 class="mb-4">Frequently Asked Questions</h3>
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <strong>Can I relocate office space at non-working hours?</strong>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Certainly. We provide office moving service 24/7.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <strong>Do you move IT equipment and servers?</strong>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes, we do. Computers, servers and networking equipment are moved with proper
                                        packing and handling.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <strong>How much time is required for office relocation?</strong>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        The time frame depends on the size of the office, amount of the assets and
                                        relocation distance. After the site assessment, we provide a detailed schedule
                                        of your moving.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        <strong>Do you disassemble and reinstall office furniture?</strong>
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Certainly. Our team disassembles modular furniture, conference tables, storage
                                        cabinets and other office furniture prior to transportation and installs it in
                                        your new office.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="mt-5">Let's Relocate Your Business Without Introducing Any Delay</h3>
                    <p>Call us now at <a href="<?= @$phonehtml ?>"
                            class="text-decoration-none fw-bold"><?= @$phone ?></a> for office relocation consultation.
                        Let <b><?= $this->comp['company3'] ?></b> manage your office relocation professionally and
                        without unnecessary delays.</p>
                </div>
            </div>
            <!-- Right Sidebar -->
            <div class="col-lg-4 mt-5 mt-lg-0">
                <?php include 'right_sidebar.php' ?>
            </div>
        </div>
    </div>
</section>
