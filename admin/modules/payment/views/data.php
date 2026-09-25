<div class="heading">
    <ol class="breadcrumb">
        <li><a href="#/home">Dashboard</a></li>
        <li><a href="javascript:void(0)">Payments</a></li>
    </ol>
</div>

<div class="col-sm-12 well">
    <div class="input-group custom_addon">
        <div class="input-group-addon" style="box-shadow:none; -webkit-box-shadow:none;"><i class="fa fa-search"></i></div>
        <input type="text" ng-model="search_text" placeholder="Search payments...">
    </div>
    <div class="admin-table-title">Cashfree Payment Records</div>
    <div class="table-data admin-table table-responsive">
        <div class="alert alert-info" ng-if="loading">Loading payment records...</div>
        <div class="alert alert-warning" ng-if="!loading && datadb.length === 0">No payment records found.</div>
        <table class="table table-hover" ng-if="datadb.length > 0">
            <thead>
                <tr class="active">
                    <th>Order ID</th>
                    <th>Reference</th>
                    <th>Customer</th>
                    <th>Contact</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Created</th>
                    <th>Paid</th>
                    <th>Remarks</th>
                </tr>
            </thead>
            <tbody>
                <tr dir-paginate="payment in datadb | filter: search_text | itemsPerPage: 10">
                    <td>{{payment.order_id}}</td>
                    <td>{{payment.payment_for}}<br><strong>{{payment.reference_number}}</strong></td>
                    <td>{{payment.name}}<br><small>{{payment.email}}</small></td>
                    <td>{{payment.phone}}</td>
                    <td>Rs. {{payment.amount}}</td>
                    <td><span class="label" ng-class="payment.status == 'PAID' ? 'label-success' : (payment.status == 'ACTIVE' ? 'label-info' : 'label-warning')">{{payment.status}}</span></td>
                    <td>{{payment.created_at}}</td>
                    <td>{{payment.paid_at || '-'}}</td>
                    <td>{{payment.remarks || '-'}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-sm-12" ng-if="datadb.length > 0">
        <dir-pagination-controls boundary-links="true" template-url="app/pagination"></dir-pagination-controls>
    </div>
</div>
