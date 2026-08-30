<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<section class="shifting-rates-section chart-table-section py-4">
    <div class="container">

        <div class="row mb-4">
            <div class="col-12 text-center">
                <span class="d-inline-block px-3 py-1 rounded-pill mb-2 fw-bold chart-badge-pill bg-primary text-white">Pricing &
                    Estimates</span>
                <h3 class="fw-bold mb-3 chart-heading-dark">Packers and Movers Rate Charts
                    <?= isset($city) ? 'in ' . ucfirst($city) : '' ?></h3>
                <p class="text-muted mx-auto chart-subtitle-text">Plan your move better with our comprehensive and
                    transparent shifting rate charts. Compare costs based on your home size and distance.</p>
            </div>
        </div>

        <div class="row g-4">

            <!-- Left Column: Tables (col-lg-8) -->
            <div class="col-lg-8">

                <!-- Table 1 -->
                <div class="mb-4">
                    <h4 class="fw-bold mb-3 d-flex align-items-center chart-heading-dark">
                        Local Shifting Rate Chart <?= isset($city) ? 'in ' . ucfirst($city) . ' ' : '' ?>Based on
                        Different Cost Heads
                    </h4>
                    <div class="table-responsive bg-white shadow-sm rounded-3 border chart-table-container">
                        <table class="table table-striped table-hover mb-0 text-center align-middle chart-table-main">
                            <thead class="text-white chart-table-header-bg">
                                <tr>
                                    <th class="py-3 px-2 font-weight-bold chart-table-th">Cost Heads
                                        &rarr;<br>Size of Home &darr;</th>
                                    <th class="py-3 px-2 font-weight-bold chart-table-th">Labour Charge</th>
                                    <th class="py-3 px-2 font-weight-bold chart-table-th">Manpower</th>
                                    <th class="py-3 px-2 font-weight-bold chart-table-th">Packing Cost</th>
                                    <th class="py-3 px-2 font-weight-bold chart-table-th">Transport Cost</th>
                                    <th class="py-3 px-2 font-weight-bold chart-table-th">Approx. Total
                                        Moving Cost</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-bold text-start text-dark">1 BHK</td>
                                    <td>Rs 2,000 - 2,500</td>
                                    <td><span class="badge bg-secondary">2 Men</span></td>
                                    <td>Rs 1,500 - 4,000</td>
                                    <td>Rs 3,500 - 5,000</td>
                                    <td class="fw-bold text-success">Rs 7,000 - 11,000</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold text-start text-dark">2 BHK</td>
                                    <td>Rs 2,500 - 4,000</td>
                                    <td><span class="badge bg-secondary">4 Men</span></td>
                                    <td>Rs 2,500 - 5,500</td>
                                    <td>Rs 4,000 - 5,500</td>
                                    <td class="fw-bold text-success">Rs 9,000 - 15,000</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold text-start text-dark">3 BHK</td>
                                    <td>Rs 3,000 - 5,000</td>
                                    <td><span class="badge bg-secondary">6 Men</span></td>
                                    <td>Rs 3,500 - 6,500</td>
                                    <td>Rs 5,000 - 6,500</td>
                                    <td class="fw-bold text-success">Rs 15,000 - 18,000</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold text-start text-dark">4 or 5 BHK</td>
                                    <td>Rs 4,000 - 6,000</td>
                                    <td><span class="badge bg-secondary">8 Men</span></td>
                                    <td>Rs 6,000 - 9,000</td>
                                    <td>Rs 8,000 - 15,000</td>
                                    <td class="fw-bold text-success">Rs 25,000 - 30,000</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold text-start text-dark">Villa / Bungalow</td>
                                    <td>Rs 4,500 - 7,500</td>
                                    <td><span class="badge bg-secondary">8-10 Men</span></td>
                                    <td>Rs 7,000 - 10,500</td>
                                    <td>Rs 13,500 - 22,000</td>
                                    <td class="fw-bold text-success">Rs 25,000 - 40,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Table 2 -->
                <div class="mb-2">
                    <h4 class="fw-bold mb-3 d-flex align-items-center chart-heading-dark">
                        Rates, Charges for Packers and Movers <?= isset($city) ? 'in ' . ucfirst($city) : '' ?>
                    </h4>
                    <div class="table-responsive bg-white shadow-sm rounded-3 border chart-table-container">
                        <table class="table table-striped table-hover mb-0 text-center align-middle chart-table-main">
                            <thead class="text-white chart-table-header-bg">
                                <tr>
                                    <th class="py-3 px-2 font-weight-bold chart-table-th">Shifting Type</th>
                                    <th class="py-3 px-2 font-weight-bold chart-table-th">Up to 50 KM</th>
                                    <th class="py-3 px-2 font-weight-bold chart-table-th">Up to 500 KM</th>
                                    <th class="py-3 px-2 font-weight-bold chart-table-th">Up to 1000 KM</th>
                                    <th class="py-3 px-2 font-weight-bold chart-table-th">Up to 1500 KM</th>
                                    <th class="py-3 px-2 font-weight-bold chart-table-th">Within 2500 KM</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-bold text-start text-dark"><i
                                            class="bi bi-house-door text-muted me-1"></i> 1 BHK Home</td>
                                    <td>Rs 7,000 - 11,000</td>
                                    <td>Rs 12,000 - 16,000</td>
                                    <td>Rs 20,000 - 25,000</td>
                                    <td>Rs 26,000 - 32,000</td>
                                    <td>Rs 30,000 - 35,000</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold text-start text-dark"><i
                                            class="bi bi-house-door text-muted me-1"></i> 2 BHK Home</td>
                                    <td>Rs 12,000 - 15,000</td>
                                    <td>Rs 20,000 - 23,000</td>
                                    <td>Rs 25,000 - 30,000</td>
                                    <td>Rs 32,000 - 40,000</td>
                                    <td>Rs 40,000 - 45,000</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold text-start text-dark"><i
                                            class="bi bi-house-door text-muted me-1"></i> 3 BHK Home</td>
                                    <td>Rs 15,000 - 18,000</td>
                                    <td>Rs 25,000 - 30,000</td>
                                    <td>Rs 35,000 - 40,000</td>
                                    <td>Rs 45,000 - 50,000</td>
                                    <td>Rs 50,000 - 65,000</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold text-start text-dark"><i class="bi bi-house text-muted me-1"></i>
                                        4 BHK / Villa</td>
                                    <td>Rs 25,000 - 30,000</td>
                                    <td>Rs 35,000 - 40,000</td>
                                    <td>Rs 50,000 - 60,000</td>
                                    <td>Rs 55,000 - 65,000</td>
                                    <td>Rs 70,000 - 90,000</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold text-start text-dark"><i
                                            class="bi bi-car-front text-muted me-1"></i> Car Transportation</td>
                                    <td>Rs 9,000 - 11,500</td>
                                    <td>Rs 12,000 - 14,500</td>
                                    <td>Rs 17,000 - 20,000</td>
                                    <td>Rs 21,000 - 25,000</td>
                                    <td class="text-muted">&ndash;</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold text-start text-dark"><i
                                            class="bi bi-bicycle text-muted me-1"></i> Bike Transportation</td>
                                    <td>Rs 3,000 - 7,000</td>
                                    <td>Rs 7,000 - 10,500</td>
                                    <td>Rs 10,000 - 15,000</td>
                                    <td>Rs 15,000 - 18,000</td>
                                    <td class="text-muted">&ndash;</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <!-- Right Column: Sticky Fare Calculator (col-lg-4) -->
            <div class="col-lg-4">
                <div class="chart-sticky-container">

                    <div class="fare-calculator-widget bg-white rounded-4 shadow-sm border p-3 chart-fare-widget">
                        <div class="text-center mb-3">
                            <div
                                class="icon-wrap text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-2 chart-fare-icon-wrap">
                                <i class="bi bi-calculator fs-5"></i>
                            </div>
                            <h5 class="fw-bold mb-1 chart-heading-dark">Moving Cost Calculator</h5>
                            <p class="text-muted small mb-0">Get an instant fare estimate</p>
                        </div>

                        <form id="fareCalculatorForm" onsubmit="event.preventDefault(); calculateFare();">
                            <!-- Distance in KM -->
                            <div class="mb-3">
                                <label class="form-label small fw-bold chart-heading-dark">Distance (in KM)</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0 text-muted"><i
                                            class="bi bi-signpost-split"></i></span>
                                    <input type="number" class="form-control border-start-0 bg-white shadow-none"
                                        id="calcKm" placeholder="e.g. 250" min="1" required>
                                </div>
                            </div>

                            <!-- Service Type -->
                            <div class="mb-4">
                                <label for="calcType" class="form-label small fw-bold chart-heading-dark">Service
                                    Type</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0 text-muted"><i
                                            class="bi bi-truck"></i></span>
                                    <select class="form-select border-start-0 bg-white shadow-none" id="calcType"
                                        required>
                                        <option value="" selected disabled>Select Service Type</option>
                                        <option value="1_bhk">1 BHK Home</option>
                                        <option value="2_bhk">2 BHK Home</option>
                                        <option value="3_bhk">3 BHK Home</option>
                                        <option value="4_bhk">4 BHK / Villa</option>
                                        <option value="car">Car Transportation</option>
                                        <option value="bike">Bike Transportation</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit"
                                class="btn w-100 py-2 fw-bold d-flex align-items-center justify-content-center gap-2 rounded-3 text-white chart-fare-btn">
                                <i class="bi bi-calculator-fill"></i> Calculate Cost
                            </button>
                        </form>

                        <div id="calcResult" class="mt-3 text-center d-none chart-result-box">
                            <div class="p-3 rounded-4 chart-result-inner">
                                <p class="text-muted small mb-1 fw-medium">Estimated Cost</p>
                                <h3 class="fw-bolder mb-0 chart-result-price" id="calcPriceRange">Rs 0 - 0</h3>
                                <p class="text-muted mt-1 mb-2 chart-result-note">*Actual price
                                    may vary based on distance and exact volume.</p>

                                <button type="button" class="btn w-100 fw-bold rounded-pill py-2 chart-exact-btn"
                                    data-bs-toggle="modal" data-bs-target="#qteModal">
                                    Get Exact Cost
                                </button>
                            </div>
                        </div>
                    </div>

                    <script>
                        const rates = {
                            '1_bhk': [
                                { max: 50, price: '7,000 - 11,000' },
                                { max: 500, price: '12,000 - 16,000' },
                                { max: 1000, price: '20,000 - 25,000' },
                                { max: 1500, price: '26,000 - 32,000' },
                                { max: 2500, price: '30,000 - 35,000' },
                                { max: Infinity, price: 'Contact Us for Price' }
                            ],
                            '2_bhk': [
                                { max: 50, price: '12,000 - 15,000' },
                                { max: 500, price: '20,000 - 23,000' },
                                { max: 1000, price: '25,000 - 30,000' },
                                { max: 1500, price: '32,000 - 40,000' },
                                { max: 2500, price: '40,000 - 45,000' },
                                { max: Infinity, price: 'Contact Us for Price' }
                            ],
                            '3_bhk': [
                                { max: 50, price: '15,000 - 18,000' },
                                { max: 500, price: '25,000 - 30,000' },
                                { max: 1000, price: '35,000 - 40,000' },
                                { max: 1500, price: '45,000 - 50,000' },
                                { max: 2500, price: '50,000 - 65,000' },
                                { max: Infinity, price: 'Contact Us for Price' }
                            ],
                            '4_bhk': [
                                { max: 50, price: '25,000 - 30,000' },
                                { max: 500, price: '35,000 - 40,000' },
                                { max: 1000, price: '50,000 - 60,000' },
                                { max: 1500, price: '55,000 - 65,000' },
                                { max: 2500, price: '70,000 - 90,000' },
                                { max: Infinity, price: 'Contact Us for Price' }
                            ],
                            'car': [
                                { max: 50, price: '9,000 - 11,500' },
                                { max: 500, price: '12,000 - 14,500' },
                                { max: 1000, price: '17,000 - 20,000' },
                                { max: 1500, price: '21,000 - 25,000' },
                                { max: Infinity, price: 'N/A' }
                            ],
                            'bike': [
                                { max: 50, price: '3,000 - 7,000' },
                                { max: 500, price: '7,000 - 10,500' },
                                { max: 1000, price: '10,000 - 15,000' },
                                { max: 1500, price: '15,000 - 18,000' },
                                { max: Infinity, price: 'N/A' }
                            ]
                        };

                        function calculateFare() {
                            const km = parseInt(document.getElementById('calcKm').value, 10);
                            const type = document.getElementById('calcType').value;

                            if (!km || km < 0 || !type) return;

                            const brackets = rates[type];
                            let priceRange = '';
                            for (let b of brackets) {
                                if (km <= b.max) {
                                    priceRange = b.price;
                                    break;
                                }
                            }

                            if (priceRange.includes('Contact') || priceRange === 'N/A') {
                                document.getElementById('calcPriceRange').innerText = priceRange;
                            } else {
                                document.getElementById('calcPriceRange').innerText = 'Rs ' + priceRange;
                            }

                            document.getElementById('calcResult').classList.remove('d-none');
                        }
                    </script>

                </div>
            </div>

        </div>
    </div>
</section>
